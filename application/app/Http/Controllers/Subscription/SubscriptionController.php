<?php

namespace SaaSrv\Http\Controllers\Subscription;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('subscription.index');
    }
}
