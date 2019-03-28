<?php

namespace SaaSrv\Http\Controllers\Account;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use SaaSrv\Http\Controllers\Controller;
use SaaSrv\Http\Requests\Account\PasswordUpdateRequest;
use SaaSrv\Mail\Account\PasswordUpdated;

class PasswordController extends Controller
{
    /**
     * Show the account password.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.password');
    }

    /**
     * Update the password.
     *
     * @param \SaaSrv\Http\Requests\Account\PasswordUpdateRequest    $request
     * @return \Illuminate\Http\Response
     */
    public function update(PasswordUpdateRequest $request)
    {
        // Update the password
        $request->user()->update([
            'password' => Hash::make($request->password),
        ]);

        // Notify user via email that the password has changed
        Mail::to($request->user())->send(
            new PasswordUpdated($request->user())
        );

        return redirect()->route('account.index')->withSuccess('Your password has been successfully updated.');
    }
}
