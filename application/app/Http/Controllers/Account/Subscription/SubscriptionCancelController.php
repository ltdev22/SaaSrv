<?php

namespace SaaSrv\Http\Controllers\Account\Subscription;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

class SubscriptionCancelController extends Controller
{
    /**
     * Cancel subscription.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.subscription.cancel.index');
    }
}
