<?php

namespace SaaSrv\Http\Controllers\Subscription;

use SaaSrv\Models\Plan;
use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

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

    public function store(Request $request)
    {
        dump($request->token);
        dd('If you see the token here, it works! Cool!');
    }
}
