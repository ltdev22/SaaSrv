<?php

namespace SaaSrv\Http\Controllers\Account\Subscription;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

class SubscriptionResumeController extends Controller
{
    /**
     * Resume subscription.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.subscription.resume.index');
    }
}
