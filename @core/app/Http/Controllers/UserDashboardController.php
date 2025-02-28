<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Events\SupportMessage;
use App\Helpers\FlashMsg;
use App\Helpers\NexelitHelpers;
use App\Mail\BasicMail;
use App\Mail\UserEmailVeiry;
use App\User;
use App\Product\ProductSellInfo;
use App\Shipping\UserShippingAddress;
use App\Support\SupportTicket;
use App\Support\SupportTicketMessage;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UserDashboardController extends Controller
{
    public const BASE_PATH = 'frontend.user.dashboard.';

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function user_index()
    {
        $product_count = ProductSellInfo::where('user_id', auth('web')->user()->id)->count();
        $support_ticket_count = SupportTicket::where('user_id', auth('web')->user()->id)->count();
        return view(self::BASE_PATH . 'user-home', compact('product_count', 'support_ticket_count'));
    }

    public function user_email_verify_index()
    {
        $user_details = Auth::guard('web')->user();
        if ($user_details->email_verified == 1) {
            return redirect()->route('user.home');
        }
        if (empty($user_details->email_verify_token)) {
            User::find($user_details->id)->update(['email_verify_token' => \Str::random(8)]);
            $user_details = User::find($user_details->id);
            $message_body = __('Here is your verification code') . ' <span class="verify-code">' . $user_details->email_verify_token . '</span>';

            try {
                Mail::to($user_details->email)->send(new BasicMail([
                    'subject' => __('Verify your email address'),
                    'message' => $message_body
                ]));
            } catch (\Exception $e) {
                $err_msg = "";
            }
        }
        return view('frontend.user.email-verify');
    }

    public function reset_user_email_verify_code()
    {
        $user_details = Auth::guard('web')->user();
        if ($user_details->email_verified == 1) {
            return redirect()->route('user.home');
        }
        $message_body = __('Here is your verification code') . ' <span class="verify-code">' . $user_details->email_verify_token . '</span>';
        try {
            Mail::to($user_details->email)->send(new BasicMail([
                'subject' => __('Verify your email address'),
                'message' => $message_body,
            ]));
        } catch (\Exception $e) {
            return redirect()->route('user.email.verify')->with(['msg' => $e->getMessage(), 'type' => 'danger']);
        }

        return redirect()->route('user.email.verify')->with(['msg' => __('Resend Verify Email Success'), 'type' => 'success']);
    }

    public function user_email_verify(Request $request)
    {
        $this->validate($request, [
            'verification_code' => 'required'
        ], [
            'verification_code.required' => __('verify code is required')
        ]);
        $user_details = Auth::guard('web')->user();
        $user_info = User::where(['id' => $user_details->id, 'email_verify_token' => $request->verification_code])->first();
        if (empty($user_info)) {
            return redirect()->back()->with(['msg' => __('your verification code is wrong, try again'), 'type' => 'danger']);
        }
        $user_info->email_verified = 1;
        $user_info->save();
        return redirect()->route('user.home');
    }

    public function user_profile_update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|email|max:191|unique:users,id,' . $request->user_id,
            'phone' => 'nullable|string|max:191',
            'state' => 'nullable|string|max:191',
            'city' => 'nullable|string|max:191',
            'zipcode' => 'nullable|string|max:191',
            'country' => 'nullable|string|max:191',
            'address' => 'nullable|string',
            'image' => 'nullable|string',
        ], [
            'name.' => __('name is required'),
            'email.required' => __('email is required'),
            'email.email' => __('provide valid email'),
        ]);
        User::find(Auth::guard()->user()->id)->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'image' => $request->image,
                'phone' => $request->phone,
                'state' => $request->state,
                'city' => $request->city,
                'zipcode' => $request->zipcode,
                'country' => $request->country,
                'address' => $request->address,
            ]
        );

        return redirect()->back()->with(['msg' => __('Profile Update Success'), 'type' => 'success']);
    }

    public function user_password_change(Request $request)
    {
        $this->validate(
            $request,
            [
                'old_password' => 'required|string',
                'password' => 'required|string|min:8|confirmed'
            ],
            [
                'old_password.required' => __('Old password is required'),
                'password.required' => __('Password is required'),
                'password.confirmed' => __('password must have to be confirmed')
            ]
        );

        $user = User::findOrFail(Auth::guard()->user()->id);

        if (Hash::check($request->old_password, $user->password)) {

            $user->password = Hash::make($request->password);
            $user->save();
            Auth::guard('web')->logout();

            return redirect()->route('user.login')->with(['msg' => __('Password Changed Successfully'), 'type' => 'success']);
        }

        return redirect()->back()->with(['msg' => __('Somethings Going Wrong! Please Try Again or Check Your Old Password'), 'type' => 'danger']);
    }

    public function edit_profile()
    {
        return view(self::BASE_PATH . 'edit-profile')->with(['user_details' => $this->logged_user_details()]);
    }


    public function change_password()
    {
        return view(self::BASE_PATH . 'change-password');
    }

    public function logged_user_details()
    {
        $old_details = '';
        if (empty($old_details)) {
            $old_details = User::findOrFail(Auth::guard('web')->user()->id);
        }
        return $old_details;
    }

    /** ============================================================================
     *                  SHIPPING ADDRESS FUNCTIONS
      ============================================================================ */
    public function allShippingAddress()
    {
        if (!auth()->check('web')) {
            return redirect()->route('homepage');
        }

        $all_shipping_address = UserShippingAddress::where('user_id', getUserByGuard('web')->id)->get();
        return view(self::BASE_PATH . 'shipping.all', compact('all_shipping_address'));
    }

    public function createShippingAddress()
    {
        return view(self::BASE_PATH . 'shipping.new');
    }

    public function storeShippingAddress(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'address' => 'required|string',
        ]);

        if (!auth('web')->user()) return back()->with(FlashMsg::explain('danger', __('Login to add new ')));

        $user_shipping_address = UserShippingAddress::create([
            'user_id' => auth('web')->user()->id,
            'name' => $request->name,
            'address => $request->address'
        ]);

        return $user_shipping_address->id
            ? back()->with(FlashMsg::delete_succeed('Shipping Address'))
            : back()->with(FlashMsg::delete_failed('Shipping Address'));
    }

    public function editShippingAddress(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'address' => 'required|string',
        ]);

        if (!auth('web')->user()) return back()->with(FlashMsg::explain('danger', __('Login to add new ')));

        $address = UserShippingAddress::findOrFail($request->id);
        $updated = $address->update([
            'name' => $request->name,
            'address' => $request->address
        ]);

        return $updated
            ? back()->with(FlashMsg::update_succeed('Shipping Address'))
            : back()->with(FlashMsg::update_failed('Shipping Address'));
    }

    public function deleteShippingAddress($id)
    {
        if (UserShippingAddress::findOrFail($id)->delete()) {
            return back()->with(FlashMsg::delete_succeed('Shipping Address'));
        }
        return back()->with(FlashMsg::delete_failed('Shipping Address'));
    }

    public function allOrdersPage()
    {
        $all_orders = ProductSellInfo::where('user_id', auth('web')->user()->id)->orderBy('id', 'DESC')->paginate();
        return view(self::BASE_PATH . 'order.all', compact('all_orders'));
    }

    public function orderDetailsPage(ProductSellInfo $item)
    {
        $user_shipping_address = null;
        if (!empty($item->shipping_address_id)) {
            $user_shipping_address = UserShippingAddress::find($item->shipping_address_id);
        }
        return view(self::BASE_PATH . 'order.details', compact('item', 'user_shipping_address'));
    }

    /** ===================================================================
     *                  SUPPORT TICKETS
      =================================================================== */
    public function support_tickets()
    {
        $all_tickets = SupportTicket::where('user_id', auth('web')->user()->id)->paginate(10);
        return view(self::BASE_PATH . 'support-tickets.all')->with(['all_tickets' => $all_tickets]);
    }

    public function support_ticket_view(Request $request, $id)
    {
        $ticket_details = SupportTicket::findOrFail($id);
        $all_messages = SupportTicketMessage::where(['support_ticket_id' => $id])->get();
        $q = $request->q ?? '';
        return view(self::BASE_PATH . 'support-tickets.view')->with(['ticket_details' => $ticket_details, 'all_messages' => $all_messages, 'q' => $q]);
    }

    public function support_ticket_message(Request $request)
    {
        $this->validate($request, [
            'ticket_id' => 'required',
            'user_type' => 'required|string|max:191',
            'message' => 'required',
            'send_notify_mail' => 'nullable|string',
            'file' => 'nullable|mimes:zip',
        ]);

        $ticket_info = SupportTicketMessage::create([
            'support_ticket_id' => $request->ticket_id,
            'type' => $request->user_type,
            'message' => $request->message,
            'notify' => $request->send_notify_mail ? 'on' : 'off',
        ]);

        if ($request->hasFile('file')) {
            $uploaded_file = $request->file;
            $file_extension = $uploaded_file->getClientOriginalExtension();
            $file_name = pathinfo($uploaded_file->getClientOriginalName(), PATHINFO_FILENAME) . time() . '.' . $file_extension;
            $uploaded_file->move('assets/uploads/ticket', $file_name);
            $ticket_info->attachment = $file_name;
            $ticket_info->save();
        }

        //send mail to user
        event(new SupportMessage($ticket_info));

        return back()->with(FlashMsg::settings_update(__('Message send')));
    }

    public function support_ticket_priority_change(Request $request)
    {
        $this->validate($request, [
            'priority' => 'required|string|max:191'
        ]);
        SupportTicket::findOrFail($request->id)->update([
            'priority' => $request->priority,
        ]);
        return 'ok';
    }

    public function support_ticket_status_change(Request $request)
    {
        $this->validate($request, [
            'status' => 'required|string|max:191'
        ]);
        SupportTicket::findOrFail($request->id)->update([
            'status' => $request->status,
        ]);
        return 'ok';
    }
}
