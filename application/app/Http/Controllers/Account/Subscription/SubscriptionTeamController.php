<?php

namespace SaaSrv\Http\Controllers\Account\Subscription;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

class SubscriptionTeamController extends Controller
{
    /**
     * Show the team subscription page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.subscription.team');
    }
}
