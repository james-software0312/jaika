<?php

namespace App\Http\Controllers\Api;

use App\Action\MediaHelper;
use App\Helpers\FlashMsg;
use App\Http\Controllers\Controller;
use App\Mail\BasicMail;
use App\Shipping\UserShippingAddress;
use App\Support\SupportDepartment;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Product\ProductSellInfo;
use App\Support\SupportTicket;
use App\Support\SupportTicketMessage;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'email' => 'required|email|max:191',
            'password' => 'required',
        ]);
        if ($validate->fails()){
            return response()->error([
                'validation_errors' => $validate->messages()
            ]);
        }
        
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return response()->error([
                'message' => __('invalid Email'),
            ]);
        }
        
        $user = User::select('id', 'email', 'password')->where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->error([
                'message' => __('Invalid Email or Password')
            ]);
        } else {
            $token = $user->createToken(Str::slug(get_static_option('site_title', 'zaika')) . 'api_keys')->plainTextToken;
            return response()->success([
                'users' => $user,
                'token' => $token,
            ]);
        }
    }
    
    //social login
    public function socialLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return response()->json([
                'message' => __('invalid Email'),
            ])->setStatusCode(422);
        }

        $username = $request->isGoogle === 0 ?  'fb_'. Str::slug($request->displayName) : 'gl_'.Str::slug($request->displayName);
        $user = User::select('id', 'email', 'username')
            ->where('email', $request->email)
            ->first();

        if(User::where("username", $username)->count() > 0){
            $username = $username . uniqid();
        }

        if (is_null($user)) {
            $user = User::create([
                'name' => $request->displayName,
                'email' => $request->email,
                'username' => $username,
                'password' => Hash::make(\Str::random(8)),
                'terms_condition' => 1,
                'google_id' => $request->isGoogle == 1 ? $request->id : null,
                'facebook_id' => $request->isGoogle == 0 ? $request->id : null
            ]);
        }

        $token = $user->createToken(Str::slug(get_static_option('site_title', 'qixer')) . 'api_keys')->plainTextToken;

        return response()->json([
            'users' => $user,
            'token' => $token,
        ]);
    }

    //register api
    public function register(Request $request)
    {

        $validate = Validator::make($request->all(),[
            'full_name' => 'required|max:191',
            'email' => 'required|email|unique:users|max:191',
            'username' => 'required|unique:users|max:191',
            'phone' => 'required|unique:users|max:191',
            'password' => 'required|min:6|max:191',
            'country_id' => 'required',
            'country_code' => 'required',
            'state_id' => 'nullable',
            'terms_conditions' => 'required',
        ]);
        if ($validate->fails()){
            return response()->error([
                'validation_errors' => $validate->messages()
            ]);
        }
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return response()->error([
                'message' => __('invalid Email'),
            ]);
        }

        $user = User::create([
            'name' => $request->full_name,
            'email' => $request->email,
            'username' => $request->username,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'country_code' => $request->country_code,
            'country' => $request->country_id,
            'state' => $request->state_id,
        ]);
        if (!is_null($user)) {
            $token = $user->createToken(Str::slug(get_static_option('site_title', 'zaika')) . 'api_keys')->plainTextToken;
            return response()->success([
                'users' => $user,
                'token' => $token,
            ]);
        } 
        return response()->error([
            'message' => __('Something Went Wrong'),
        ]);
    }

    // send otp
    public function sendOTPSuccess(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'user_id' => 'required|integer',
            'email_verified' => 'required|integer',
        ]);
        if ($validate->fails()){
            return response()->error([
                'validation_errors' => $validate->messages()
            ]);
        }
        
        if(!in_array($request->email_verified,[0,1])){
            return response()->error([
                'message' => __('email verify code must have to be 1 or 0'),
            ]);
        }
        
        $user = User::where('id', $request->user_id)->update([
            'email_verified' =>  $request->email_verified
        ]);
         
         if(is_null($user)){
            return response()->error([
                'message' => __('Something went wrong, plese try after sometime,'),
            ]);
         }
         
        return response()->success([
            'message' => __('Email Verify Success'),
        ]);
    }   
    
     public function sendOTP(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'email' => 'required',
        ]);
        if ($validate->fails()){
            return response()->error([
                'validation_errors' => $validate->messages()
            ]);
        }
        $otp_code = sprintf("%d", random_int(1234, 9999));
        $user_email = User::where('email', $request->email)->first();

        if (!is_null($user_email)) {
            try {
                $message_body = __('Here is your otp code') . ' <span class="verify-code">' . $otp_code . '</span>';
                Mail::to($request->email)->send(new BasicMail([
                    'subject' => __('Your OTP Code'),
                    'message' => $message_body
                ]));
            } catch (\Exception $e) {
                return response()->error([
                    'message' => $e->getMessage(),
                ]);
            }
            
            return response()->success([
                'email' => $request->email,
                'otp' => $otp_code,
            ]);
            
        }
        
        return response()->error([
            'message' => __('Email Does not Exists'),
        ]);

    }

    //reset password
    public function resetPassword(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validate->fails()){
            return response()->error([
                'validation_errors' => $validate->messages()
            ]);
        }
        $email = $request->email;
        $user = User::select('email')->where('email', $email)->first();
        if (!is_null($user)) {
            User::where('email', $user->email)->update([
                'password' => Hash::make($request->password),
            ]);
            return response()->success([
                'message' => 'success',
            ]);
        } else {
            return response()->error([
                'message' => __('Email Not Found'),
            ]);
        }
    }

    //logout
    public function logout(){
        auth()->user()->tokens()->delete();
        return response()->success([
            'message' => __('Logout Success'),
        ]);
    }

    //User Profile
    public function profile(){
        
        $user_id = auth('sanctum')->id();
        
        $user = User::with('country','shipping','state')
        ->select('id','name','email','phone','image','country_code','zipcode','state','country','username','address')
        ->where('id',$user_id)->first();
        $image_url = null;
        if(!empty($user->image)){
            $img_details = get_attachment_image_by_id($user->image);
            $image_url = $img_details['img_url'] ?? null;
        }
        $user->profile_image_url = $image_url ?  : null;



        return response()->success([
            'user_details' => $user
        ]);
    }

//    change password after login
    public function changePassword(Request $request){
        $validate = Validator::make($request->all(),[
            'current_password' => 'required|min:6',
            'new_password' => 'required|min:6',
        ]);
        if ($validate->fails()){
            return response()->error([
                'validation_errors' => $validate->messages()
            ]);
        }

        $user = User::select('id','password')->where('id', auth('sanctum')->user()->id)->first();
        if (!Hash::check($request->current_password, $user->password)) {
            return response()->error([
                'message' => __('Current Password is Wrong'),
            ]);
        }
        User::where('id',auth('sanctum')->user()->id)->update([
            'password' => Hash::make($request->new_password),
        ]);
        return response()->success([
            'current_password' => $request->current_password,
            'new_password' => $request->new_password,
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = auth('sanctum')->user();
        $user_id = auth('sanctum')->user()->id;

        $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|email|max:191|unique:users,id,' . $request->user_id,
            'phone' => 'nullable|string|max:191',
            'state' => 'nullable|string|max:191',
            'city' => 'nullable|string|max:191',
            'zipcode' => 'nullable|string|max:191',
            'country' => 'nullable|string|max:191',
            'country_code' => 'nullable|string|max:191',
            'address' => 'nullable|string',
        ], [
            'name.' => __('name is required'),
            'email.required' => __('email is required'),
            'email.email' => __('provide valid email'),
        ]);


        if($request->file('file')){
            MediaHelper::insert_media_image($request);
            $last_image_id = DB::getPdo()->lastInsertId();
        }

        User::find($user_id)->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'image' => $last_image_id ?? $user->image,
                'phone' => $request->phone,
                'state' => $request->state,
                'city' => $request->city,
                'zipcode' => $request->zipcode,
                'country' => $request->country,
                'country_code' => $request->country_code,
                'address' => $request->address,
            ]
        );

        return response()->success(['success' => true]);
    }

    //

    public function myOrders()
    {
        $uesr_info = auth('sanctum')->user()->id;
        $my_orders = ProductSellInfo::where('user_id',$uesr_info)->get()->transform(function($item){
            $item->payment_status =  !empty($item->payment_status) ? $item->payment_status : 'pending';
            return $item;
        });
        return response()->success([
            'my_orders' => $my_orders,
            'user_id' => $uesr_info,
        ]);
    } 
    public function singleOrder($order_id)
    {
        $uesr_info = auth('sanctum')->user()->id;
        $my_orders = ProductSellInfo::where(['id' => $order_id,'user_id' => $uesr_info])->first();
        if(is_null($my_orders)){
           return response()->error([
                'message' => __('No Order Found With This order id')
            ]); 
        }
        $my_orders->payment_status = !empty($item->payment_status) ? $item->payment_status : 'pending';
        return response()->success([
            'order_details' => $my_orders
        ]);
    }

    public function allTickets()
    {
        $all_tickets = SupportTicket::select('id','title','description','subject','priority','status')
        ->where('user_id',auth('sanctum')->id())->orderBy('id','Desc')
        ->paginate(10)
        ->withQueryString();
        
        return response()->success([ 
            'user_id'=> auth('sanctum')->id(),
            'tickets' => $all_tickets,
        ]);
    }

    public function get_all_shipping_address(){
        $user_id = auth('sanctum')->user()->id;

        $all_shipping_address = UserShippingAddress::select("id","name","address","user_id")->where('user_id', $user_id)->get();
        return $all_shipping_address;
    }

    public function get_all_tickets(){
        $user_id = auth('sanctum')->user()->id;
        $all_tickets = SupportTicket::where('user_id', $user_id)->paginate(10)->withQueryString();

        return $all_tickets;
    }

    public function single_ticket($id){
        $user_id = auth('sanctum')->user()->id;

        $ticket_details = SupportTicket::where('user_id', $user_id)
            ->where("id",$id)
            ->first();
        $all_messages = SupportTicketMessage::where(['support_ticket_id' => $id])->get()->transform(function ($item){
            $item->attachment = !empty($item->attachment) ? asset('assets/uploads/ticket/'.$item->attachment) : null;

            return $item;
        });

        return response()->success(["ticket_details" => $ticket_details,"all_messages" => $all_messages]);
    }

    public function fetch_support_chat($ticket_id){
        $all_messages = SupportTicketMessage::where(['support_ticket_id' => $ticket_id])->get()->transform(function ($item){
            $item->attachment = !empty($item->attachment) ? asset('assets/uploads/ticket/'.$item->attachment) : null;

            return $item;
        });

        return response()->success($all_messages);
    }

    public function send_support_chat(Request $request,$ticket_id){
        $this->validate($request, [
            'user_type' => 'required|string|max:191',
            'message' => 'required',
            'send_notify_mail' => 'nullable|string',
            'file' => 'nullable|mimes:zip',
        ]);

        $ticket_info = SupportTicketMessage::create([
            'support_ticket_id' => $ticket_id,
            'type' => $request->user_type,
            'message' => $request->message,
            'notify' => $request->send_notify_mail ? 'on' : 'off',
            'attachment' => null,
        ]);

        if ($request->hasFile('file')) {
            $uploaded_file = $request->file;
            $file_extension = $uploaded_file->getClientOriginalExtension();
            $file_name = pathinfo($uploaded_file->getClientOriginalName(), PATHINFO_FILENAME) . time() . '.' . $file_extension;
            $uploaded_file->move('assets/uploads/ticket', $file_name);
            $ticket_info->attachment = $file_name;
            $ticket_info->save();
        }

        $ticket = $ticket_info->toArray();
        $ticket["attachment"] = empty($ticket["attachment"]) ? null : asset('assets/uploads/ticket' . $ticket["attachment"]);

        return response()->success($ticket);
    }

    public function storeShippingAddress(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'address' => 'required|string',
        ]);
        $user_id = auth('sanctum')->user()->id;

        $user_shipping_address = UserShippingAddress::create([
            'user_id' => $user_id,
            'name' => $request->name,
            'address' => $request->address
        ]);

        return response()->success(['success' => true]);
    }

    public function viewTickets(Request $request,$id= null)
    {
        $all_messages = SupportTicketMessage::where(['support_ticket_id'=>$id])->get()->transform(function($item){
            $item->attachment = !empty($item->attachment) ? asset('assets/uploads/ticket/'.$item->attachment) : null;
            return $item;
        });
        $q = $request->q ?? '';
        return response()->success([
            'ticket_id'=>$id,
            'all_messages' =>$all_messages,
            'q' =>$q,
        ]);
    }

    public function sendMessage(Request $request)
    {
        // $this->validate($request,[
        //     'ticket_id' => 'required',
        //     'user_type' => 'required|string|max:191',
        //     'message' => 'required',
        //     'file' => 'nullable|mimes:jpg,png,jpeg,gif',
        // ]);

        // $ticket_info = SupportTicketMessage::create([
        //     'support_ticket_id' => $request->ticket_id,
        //     'type' => $request->user_type,
        //     'message' => $request->message,
        // ]);
        
        // if ($request->hasFile('file')){
            
        //     $uploaded_file = $request->file;
        //     $file_extension = $uploaded_file->extension();
        //     $file_name =  pathinfo($uploaded_file->getClientOriginalName(),PATHINFO_FILENAME).time().'.'.$file_extension;
        //     $uploaded_file->move('assets/uploads/ticket',$file_name);
        //     $ticket_info->attachment = $file_name;
        //     $ticket_info->save();
        // }

        // return response()->success([
        //     'message'=>__('Message Send Success'),
        //     'ticket_id'=>$request->ticket_id,
        //     'user_type' =>$request->user_type,
        //     'ticket_info' => $ticket_info,
        // ]);
    }

    public function get_department(){
        $data = SupportDepartment::select("id","name","status")->where(['status' => 'publish'])->get();
        return response()->success(["data" => $data]);
    }
    
    public function createTicket(Request $request){
        $uesr_info = auth('sanctum')->user()->id;
        $this->validate($request,[
            'title' => 'required|string|max:191',
            'subject' => 'required|string|max:191',
            'priority' => 'required|string|max:191',
            'description' => 'required|string',
            'departments' => 'required|string',
        ],[
            'title.required' => __('title required'),
            'subject.required' =>  __('subject required'),
            'priority.required' =>  __('priority required'),
            'description.required' => __('description required'),
            'departments.required' => __('departments required'),
        ]);

        $ticket = SupportTicket::create([
            'title' => $request->title,
            'via' => $request->via,
            'operating_system' => null,
            'user_agent' => $_SERVER['HTTP_USER_AGENT'],
            'description' => $request->description,
            'subject' => $request->subject,
            'status' => 'open',
            'priority' => $request->priority,
            'user_id' => $uesr_info,
            'admin_id' => null,
            'departments' => $request->departments
        ]);

        $msg = get_static_option('support_ticket_success_message') ?? __('Thanks for contact us, we will reply soon');

        return response()->success(["msg" => $msg,"ticket" => $ticket]);
    }

    public function delete_shipping_address(UserShippingAddress $shipping){
        if(empty($shipping)){ return response()->json(["msg" => "Shipping zone not found on the server."])->setStatusCode(404); }

        $bool = $shipping->user_id == auth('sanctum')->id() ? $shipping->delete() : false;
        $msg = $bool ? "Successfully Deleted Shipping Zone" : "You are not eligible to delete this shipping address";

        return response()->success(["msg" => $msg]);
    }
}
