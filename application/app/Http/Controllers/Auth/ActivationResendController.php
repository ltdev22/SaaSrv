<?php

namespace SaaSrv\Http\Controllers\Auth;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

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
}
