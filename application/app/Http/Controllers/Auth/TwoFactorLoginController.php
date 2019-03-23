<?php

namespace SaaSrv\Http\Controllers\Auth;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

class TwoFactorLoginController extends Controller
{
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
     * @return \Illuminate\Http\Response
     */
    public function verify()
    {
        dd('auth.twofactor');
    }
}
