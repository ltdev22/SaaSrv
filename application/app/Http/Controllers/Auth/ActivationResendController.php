<?php

namespace SaaSrv\Http\Controllers\Auth;

use SaaSrv\Models\User;
use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;
use SaaSrv\Http\Requests\Auth\ActivateResendRequest;
use SaaSrv\Events\Auth\UserRequestedActivationEmailAgain;

class ActivationResendController extends Controller
{
    /**
     * Show the activation resend.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.activation.resend.index');
    }

    public function send(ActivateResendRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (optional($user)->hasNotBeenActivated()) {
            event(new UserRequestedActivationEmailAgain($user));
        }

        return redirect()->route('login')->withSuccess('A new activation email has been sent to you.');
    }
}
