<?php

namespace SaaSrv\Http\Controllers\Account;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use SaaSrv\Http\Controllers\Controller;
use SaaSrv\Http\Requests\Account\PasswordUpdateRequest;

class PasswordController extends Controller
{
    /**
     * Show the account password.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.password.index');
    }

    /**
     * Update the password.
     *
     * @param \SaaSrv\Http\Requests\Account\PasswordUpdateRequest    $request
     * @return \Illuminate\Http\Response
     */
    public function update(PasswordUpdateRequest $request)
    {
        $request->user()->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('account.index');
    }
}
