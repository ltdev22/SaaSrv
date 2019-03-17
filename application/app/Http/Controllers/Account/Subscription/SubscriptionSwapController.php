<?php

namespace SaaSrv\Http\Controllers\Account\Subscription;

use SaaSrv\Models\User;
use SaaSrv\Models\Plan;
use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;
use SaaSrv\Http\Requests\Subscription\SubscriptionUpdateRequest;

class SubscriptionSwapController extends Controller
{
    /**
     * Show the page for changing plans.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::active()->exceptCurrent()->get();
        $current_plan = auth()->user()->plan;

        return view('account.subscription.swap', compact(
            'plans',
            'current_plan'
        ));
    }

    /**
     * Update the user's plan
     *
     * @return \Illuminate\Http\Response
     */
    public function update(SubscriptionUpdateRequest $request)
    {
        $user = $request->user();
        $plan = Plan::where('gateway_id', $request->plan)->first();

        // Swap the plan
        $this->downgradeFromTeamPlan($user, $plan);
        $user->subscription('main')->swap($plan->gateway_id);

        // @todo: send email
        // $user->team->members()->each(function () {});

        return back()->withSuccess('Your plan has been successfully updated.');
    }

    /**
     * Remove all members when downgrading from a team plan to a user one.
     *
     * @param \SaaSrv\Models\User   $user
     * @param \SaaSrv\Models\Plan   $plan
     * @return void
     */
    public function downgradeFromTeamPlan(User $user, Plan $plan)
    {
        // Check current user's plan and plan downgrade to
        if ($user->plan->isForTeams() && $plan->isNotForTeams()) {
            $user->team->members()->detach();
        }
    }
}
