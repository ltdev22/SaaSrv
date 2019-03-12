<?php

namespace SaaSrv\Http\Controllers\Account\Subscription;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;
use SaaSrv\Events\Subscription\SubscriptionHasBeenCancelled;

class SubscriptionCancelController extends Controller
{
    /**
     * Show cancel subscription page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.subscription.cancel');
    }

    /**
     * Cancel the subscription.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Cancel the user's subscription
        $request->user()->subscription('main')->cancel();

        // Notify the user via email
        event(new SubscriptionHasBeenCancelled (
            $request->user()
        ));

        return redirect()->route('account.index')->withSuccess('You subscription has been cancelled.');
    }
}
