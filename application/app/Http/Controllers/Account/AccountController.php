<?php

namespace SaaSrv\Http\Controllers\Account;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

class AccountController extends Controller
{
    /**
     * Show the account overview.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.index');
    }
}
