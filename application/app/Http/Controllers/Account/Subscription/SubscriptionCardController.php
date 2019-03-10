<?php

namespace SaaSrv\Http\Controllers\Account\Subscription;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

class SubscriptionCardController extends Controller
{
    /**
     * Update card.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.subscription.card.index');
    }
}
