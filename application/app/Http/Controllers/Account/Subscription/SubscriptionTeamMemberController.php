<?php

namespace SaaSrv\Http\Controllers\Account\Subscription;

use SaaSrv\Models\User;
use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;
use SaaSrv\Http\Requests\Account\SubscriptionTeamMemberStoreRequest;

class SubscriptionTeamMemberController extends Controller
{
    /**
     * Add a new member in team.
     *
     * @param \SaaSrv\Http\Requests\Account\SubscriptionTeamMemberStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubscriptionTeamMemberStoreRequest $request)
    {
        // Have we reached the team limit?
        if ($this->teamLimitReached($request)) {
            return back()->withError('You have reached the team limit for your plan.');
        }

        // Add user as a team member
        $request->user()->team->members()->syncWithoutDetaching([
            User::where('email', $request->email)->first()->id
        ]);

        return back()->withSuccess('The user has been successfully added in the ' . $request->user()->team->name . ' team.');
    }

    /**
     * Delete a member from team.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $equest)
    {
        // code...
    }

    /**
     * Have we reached the team limit?
     *
     * @param \SaaSrv\Http\Requests\Account\SubscriptionTeamMemberStoreRequest $request
     * @return bool
     */
    protected function teamLimitReached($request): bool
    {
        return $request->user()->team->members->count() === $request->user()->plan->teams_limit;
    }
}
