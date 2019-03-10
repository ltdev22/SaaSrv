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

    public function store(SubscriptionStoreRequest $request)
    {
        $request->user()
                ->newSubscription('main', $request->plan)
                ->create($request->token);

        return redirect('/')->withSuccess('Thank you for subscribing!');
    }
}
