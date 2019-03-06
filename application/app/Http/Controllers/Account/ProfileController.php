<?php

namespace SaaSrv\Http\Controllers\Account;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Show the account profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.profile.index');
    }

    /**
     * Show the account profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        dd('Update');
    }
}
