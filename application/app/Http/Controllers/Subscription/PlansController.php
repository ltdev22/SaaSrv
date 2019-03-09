<?php

namespace SaaSrv\Http\Controllers\Subscription;

use SaaSrv\Models\Plan;
use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

class PlansController extends Controller
{
    /**
     * Show the all plans.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::active()->get();

        return view('subscription.plans.index', compact('plans'));
    }

    /**
     * Show the member plans only.
     *
     * @return \Illuminate\Http\Response
     */
    public function members()
    {
       $plans = Plan::forMembers()->active()->get();

        return view('subscription.plans.index', compact('plans'));
    }

    /**
     * Show the team plans only.
     *
     * @return \Illuminate\Http\Response
     */
    public function teams()
    {
        $plans = Plan::forTeams()->active()->get();

        return view('subscription.plans.index', compact('plans'));
    }
}
