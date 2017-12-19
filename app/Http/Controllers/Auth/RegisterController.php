<?php

namespace App\Http\Controllers\Auth;

use App\Customer;
use App\User;
use App\Http\Controllers\Controller;
use Encore\Admin\Auth\Database\Administrator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/admin/auth/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function signup(){
        return view('frontend.Auth.signup');
    }
    public function submit(Request $request){
        $email = $request->post('email');
        $firstName = $request->post('firstName');
        $lastName = $request->post('lastName');
        $phone = $request->post('phoneNumber');
        $userName = $request->post('username');
        $password = $request->post('password');

        $user = new Administrator(['username' => $userName, 'password'=>bcrypt($password), 'name' => $firstName.' '.$lastName, 'avatar' => null, 'remember_token' => str_random(10)]);
        $user->save();
        DB::table('admin_role_users')->insert(['user_id' => $user['id'], 'role_id' => 3]);
//        dd($user['id']);
        $customer = new Customer(['firstName' => $firstName, 'lastName' => $lastName, 'email' => $email, 'phone' => $phone, 'userId' => $user['id']]);
        $customer->save();
        return redirect()->to($this->redirectTo);

    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
