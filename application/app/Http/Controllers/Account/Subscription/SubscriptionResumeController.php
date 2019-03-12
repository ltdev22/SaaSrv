<?php

namespace SaaSrv\Http\Controllers\Account\Subscription;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;
use SaaSrv\Events\Subscription\SubscriptionHasResumed;

class SubscriptionResumeController extends Controller
{
    /**
     * Show resume subscription page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.subscription.resume');
    }

    /**
     * Resume subscription.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Resume the user's subscription
        $request->user()->subscription('main')->resume();

        // Notify the user via email
        event(new SubscriptionHasResumed(
            $request->user()
        ));

        return redirect()->route('account.index')->withSuccess('You subscription has been resumed.');
    }
}
