<?php

namespace SaaSrv\Http\Controllers\Subscription;

use SaaSrv\Models\Plan;
use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;
use SaaSrv\Http\Requests\Subscription\SubscriptionStoreRequest;

class SubscriptionController extends Controller
{
    /**
     * Show the subscription form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::active()->get();

        return view('subscription.index', compact('plans'));
    }

    /**
     * Save the user's subscription.
     *
     * @param   \Saasy\Requests\Subscription\SubscriptionStoreRequest   $request
     * @return  \Illuminate\Http\Response
     */
    public function store(SubscriptionStoreRequest $request)
    {
        $subscription = $request->user()->newSubscription('main', $request->plan);

        // Do we have a coupon?
        if ($request->has('coupon')) {
            $subscription->withCoupon($request->coupon);
        }

        $subscription->create($request->token);

        return redirect('/')->withSuccess('Thank you for subscribing!');
    }
}
