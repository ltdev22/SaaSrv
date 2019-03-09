<?php

namespace SaaSrv\Http\Controllers\Auth;

use SaaSrv\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
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
     * Get the response for a successful password reset.
     *
     * Overwrite from ResetsPasswords trait.
     * We need to force logout non-active users when reseting their passwords.
     *
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     * @see \Illuminate\Foundation\Auth\ResetsPasswords;
     */
    protected function sendResetResponse($response)
    {
        if ($this->guard()->user()->hasNotBeenActivated()) {
            $this->guard()->logout();
        }

        return redirect($this->redirectPath())
                            ->withSuccess(trans($response));
    }
}
