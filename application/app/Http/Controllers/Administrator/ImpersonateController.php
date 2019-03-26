<?php

namespace SaaSrv\Http\Controllers\Administrator;

use SaaSrv\Models\User;
use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;
use SaaSrv\Http\Requests\Administrator\StartImpersonateRequest;

class ImpersonateController extends Controller
{
    /**
     * Show the view to start impersonating a user.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.impersonate');
    }

    /**
     * Start impersonating a user.
     *
     *
     * @param \SaaSrv\Http\Requests\Administrator\StartImpersonateRequest   $request
     * @return \Illuminate\Http\Response
     */
    public function start(StartImpersonateRequest $request)
    {
        // First we need to grab the user
        $user = User::where('email', $request->email)->first();

        // Then we store in session the user's id
        session()->put('impersonate', $user->id)

        return redirect('/')->withSuccess('You are now impersonating ' . $user->name);
    }
}
