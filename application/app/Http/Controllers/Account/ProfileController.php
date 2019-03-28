<?php

namespace SaaSrv\Http\Controllers\Account;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;
use SaaSrv\Http\Requests\Account\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Show the account profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.profile');
    }

    /**
     * Update the account profile.
     *
     * @param \SaaSrv\Http\Requests\Account\ProfileUpdateRequest    $request
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->update($request->only([
            'name',
            'email',
        ]));

        return back()->withSuccess('Your profile has been successfully updated.');
    }
}
