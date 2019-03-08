<?php

namespace SaaSrv\Http\Controllers\Auth;

use Illuminate\Http\Request;
use SaaSrv\Models\ConfirmationToken;
use SaaSrv\Http\Controllers\Controller;

class ActivationController extends Controller
{
    /**
     * Where to redirect users after activation.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
    * Activate the user's account
    *
    * @param \SaaSrv\Models\ConfirmationToken   $token
    * @param \Illuminate\Http\Request           $request
    * @return \Illuminate\Http\Response
    */
    public function activate(ConfirmationToken $token, Request $request)
    {
        // First we need to set the 'activated_at' timestamp
        $token->user->update([
            'activated_at' => \Carbon\Carbon::now(),
        ]);

        // Delete the confirmation token since its not required anymore
        $token->delete();

        // Login the user
        \Auth::loginUsingId($token->user->id);

        // Redirect the user either to the intended location or the default one
        return redirect()->intended($this->redirectPath())
                         ->withSuccess('You are now signed in and your account has been activated.');
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
