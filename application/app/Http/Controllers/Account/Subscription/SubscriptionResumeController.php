<?php

namespace SaaSrv\Http\Controllers\Account\Subscription;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

class SubscriptionResumeController extends Controller
{
    /**
     * Show resume subscription page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.subscription.resume.index');
    }

    /**
     * Resume subscription.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->subscription('main')->resume();

        return redirect()->route('account.index')->withSuccess('You subscription has been resumed.');
    }
}
