<?php

namespace SaaSrv\Http\Controllers\Account;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;
use SaaSrv\Http\Requests\Account\DeactivateAccountRequest;

class DeactivateController extends Controller
{
    /**
     * Show the account deactivation.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.deactivate.index');
    }

    /**
     * Deactivate account.
     *
     * @param \SaaSrv\Http\Requests\Account\DeactivateAccountRequest    $request
     * @return \Illuminate\Http\Response
     */
    public function update(DeactivateAccountRequest $request)
    {
        $user = $request->user();

        // Cancel user's subscription
        if ($user->subscribed('main')) {
            $user->subscription('main')->cancel();
        }

        $user->delete();

        \Auth::logout();

        return redirect('/')->withSuccess('Your account has been deactivated.');
    }
}
