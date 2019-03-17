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
        $user = User::where('email', $request->email)->first();
        $request->user()->team->members()->syncWithoutDetaching([
            $user->id
        ]);

        return back()->withSuccess($user->name . ' has been successfully added to the team.');
    }

    /**
     * Remove a member from team. To clarify
     *
     * @param \SaaSrv\Models\User       $user
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Request $request)
    {
        $request->user()->team->members()->detach($user->id);

        return back()->withSuccess($user->name . ' has been successfully removed from the team.');
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
