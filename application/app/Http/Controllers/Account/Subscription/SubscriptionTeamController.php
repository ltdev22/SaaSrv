<?php

namespace SaaSrv\Http\Controllers\Account\Subscription;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

class SubscriptionTeamController extends Controller
{
    /**
     * Show the team subscription page.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $team = $request->user()->team;

        return view('account.subscription.team.index', compact('team'));
    }

    /**
     * Update the team.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // @TODO Well, since its only one field lets keep it simple for now.
        // However if we are planning to add more fields or logic, it'd be probably better to generate a
        // php artisan make:request Account\\SubscriptionTeamUpdateRequest
        $request->validate([
            'name' => 'required',
        ]);

        $request->user()->team()->update(
            $request->only([
                'name',
            ])
        );

        return back()->withSuccess('The team has been successfully updated.');
    }
}
