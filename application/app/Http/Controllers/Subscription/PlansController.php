<?php

namespace SaaSrv\Http\Controllers\Subscription;

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
        return view('subscription.plans.index');
    }
}
