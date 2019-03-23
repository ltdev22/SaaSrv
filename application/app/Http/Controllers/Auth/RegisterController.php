<?php

namespace SaaSrv\Http\Controllers\Auth;

use SaaSrv\Models\User;
use SaaSrv\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use SaaSrv\Events\Auth\UserHasSignedUp;

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
    protected $redirectTo = '/';

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
            'terms' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \SaaSrv\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'activated_at' => null,
        ]);
    }

    /**
     * The user has been registered.
     * 
     * Overwrite from RegistersUsers
     * We need to force logout the new user in order to activate the account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     * @see \Illuminate\Foundation\Auth\RegistersUsers
     */
    protected function registered(\Illuminate\Http\Request $request, $user)
    {
        // Log the user out
        $this->guard()->logout();

        // Send email to the registered user
        event(new UserHasSignedUp($user));

        return redirect($this->redirectPath())
                ->withSuccess('Your account has been created. Please check your email for an activation link');
    }
}
