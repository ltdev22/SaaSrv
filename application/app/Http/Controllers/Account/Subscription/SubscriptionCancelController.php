<?php

namespace SaaSrv\Http\Controllers\Account\Subscription;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

class SubscriptionCancelController extends Controller
{
    /**
     * Show cancel subscription page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.subscription.cancel.index');
    }

    /**
     * Cancel the subscription.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->subscription('main')->cancel();

        return redirect()->route('account.index')->withSuccess('You subscription has been cancelled.');
    }
}
