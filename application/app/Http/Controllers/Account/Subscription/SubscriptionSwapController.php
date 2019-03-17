<?php

namespace SaaSrv\Http\Controllers\Account\Subscription;

use SaaSrv\Models\Plan;
use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

class SubscriptionSwapController extends Controller
{
    /**
     * Show the page for changing plans.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::active()->exceptCurrent()->get();
        $current_plan = auth()->user()->plan;

        return view('account.subscription.swap', compact(
            'plans',
            'current_plan'
        ));
    }

    /**
     * Update the user's plan
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = $request->user();
        $plan = Plan::where('gateway_id', $request->plan)->first();

        // Swap the plan
        // $user->subscription('main')->swap($plan->gateway_id);

        // @todo: send email

        return back()->withSuccess('Your plan has been successfully updated.');
    }
}
