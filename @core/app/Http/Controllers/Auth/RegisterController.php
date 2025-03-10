<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use App\Helpers\CountryHelper;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    public function redirectTo()
    {
        return route('homepage');
    }

    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
    }

    protected function validator(array $data)
    {
        $google_captcha_result = google_captcha_check($data['captcha_token']);
        if (!$google_captcha_result['success']) {
            if (!$google_captcha_result['success']) {
                return  Validator::make([
                    'google_recpatcha' => null
                        ], [
                    'google_recpatcha' => ['required']
                ], [
                    'google_recpatcha.required' => __('google captcha is validation failed, reload the page and try again'),
                ]);
            }
        }
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:191'],
            'captcha_token' => ['nullable'],
            'username' => ['required', 'string', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'agree_terms' => ['required'],
        ], [
            'captcha_token.required' => __('google captcha is required'),
            'name.required' => __('name is required'),
            'name.max' => __('name is must be between 191 character'),
            'username.required' => __('username is required'),
            'username.max' => __('username is must be between 191 character'),
            'username.unique' => __('username is already taken'),
            'email.unique' => __('email is already taken'),
            'email.required' => __('email is required'),
            'password.required' => __('password is required'),
            'password.confirmed' => __('both password does not matched'),
            'required.required' => __('agreeing with terms and policies is required'),
        ]);
    }

    protected function adminValidator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:admins'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'country' => $data['country'],
            'city' => $data['city'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);

        return $user;
    }

    protected function createAdmin(Request $request)
    {
        $this->adminValidator($request->all())->validate();
        $admin = Admin::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('admin.home');
    }

    public function showAdminRegistrationForm()
    {
        return view('auth.admin.register');
    }

    public function showRegistrationForm()
    {
        return redirect()->to(route('user.login', ['type' => 'register']));
    }

    public function register(Request $request) {
        // dd($request->input());
        // $this->validate($request, [
        //     'username' => 'required|string|max:191|unique:users',
        //     'name' => 'required|string|max:191',
        //     'email' => 'required|string|max:191|unique:users',
        //     'address' => 'nullable|string|max:191',
        //     'zipcode' => 'nullable|string|max:191',
        //     'company' => 'nullable|string|max:191',
        //     'city' => 'nullable|string|max:191',
        //     'state' => 'nullable|string|max:191',
        //     'country' => 'nullable|string|max:191',
        //     'phone' => 'nullable|string|max:191',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);

        $this->validate($request, [
            'username' => 'required|string|max:191|unique:users',
            'name' => 'required|string|max:191',
            'email' => 'required|string|max:191|unique:users',
            'address' => 'nullable|string|max:191',
            'zipcode' => 'nullable|string|max:191',
            'company' => 'nullable|string|max:191',
            'city' => 'nullable|string|max:191',
            'state' => 'nullable|string|max:191',
            'country' => 'nullable|string|max:191',
            'phone' => 'nullable|string|max:191',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'username.unique' => 'Nazwa użytkownika jest już zajęta.',
            'email.unique' => 'Ten adres e-mail jest już zajęty.',
        ]);

        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'zipcode' => $request->zipcode,
            'company' => $request->company,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'phone' => $request->phone,
            'vat_number' => $request->vat,
            'password' => Hash::make($request->password),
            'business' => ($request->business == 'on')?"company":"indiviual",
        ]);
        session()->flash('success', 'Registration successful! Please log in.');
        return redirect()->to(route('user.login', ['type' => 'login']));
    }
}
