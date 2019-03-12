<?php

namespace SaaSrv\Http\Controllers\Account\Subscription;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

class SubscriptionCardController extends Controller
{
    /**
     * Show update card form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.subscription.card');
    }

    /**
     * Update the payment card
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Update the payment card
        $request->user()->updateCard($request->token);

        return redirect()->route('account.index')->withSuccess('Your payment card has been updated.');
    }
}
