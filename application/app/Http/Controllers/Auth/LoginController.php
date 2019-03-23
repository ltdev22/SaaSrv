<?php

namespace SaaSrv\Http\Controllers\Auth;

use SaaSrv\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    /**
     * The user has been authenticated.
     *
     * Overwrite from AuthenticatesUsers
     * If the user has not activated his account yet, we would need to force
     * logout him in order to activate it first.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     * @see \Illuminate\Foundation\Auth\AuthenticatesUsers
     */
    protected function authenticated(Request $request, $user)
    {
        if ($user->hasNotBeenActivated()) {
            $this->guard()->logout();

            return back()->withError('Your account has not been activated.');
        }

        if ($user->hasTwoFactorEnabled()) {
            return $this->requireTwoFactorLogin($request, $user);
        }
    }

    /**
     * Will login using Two Factor Authentication.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed                     $user
     * @return mixed
     */
    protected function requireTwoFactorLogin(Request $request, $user)
    {
        // Keep in session some login requirements
        session()->put('twofactor', (object) [
            'user_id'   => $user->id,
            'remember'  => $request->has('remember'),
        ]);

        // We will need to log the user out of course
        $this->guard()->logout();

        // Redirect the user to login using TFA
        return redirect()->route('login.twofactor.index');
    }
}
