<?php

namespace SaaSrv\Http\Controllers\Auth;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;
use SaaSrv\Http\Requests\TwoFactor\TwoFactorVerifyRequest;

class TwoFactorLoginController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Show the TFA login.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.twofactor');
    }

    /**
     * Veridy logging in user.
     *
     * @param \SaaSrv\Http\Requests\TwoFactor\TwoFactorVerifyRequest    $request
     * @return \Illuminate\Http\Response
     */
    public function verify(TwoFactorVerifyRequest $request)
    {
        // Log in the user
        \Auth::loginUsingId(
            $request->user()->id,
            session('twofactor')->remember
        );

        // Clear the session
        session()->forget('twofactor');

        // Redirect the user either to the intended location or the default one
        return redirect()->intended($this->redirectPath());
    }

    /**
     * Return the redirectTo path.
     *
     * @return string
     */
    protected function redirectPath(): string
    {
        return $this->redirectTo;
    }
}
