<?php 

namespace SaaSrv\Models\Traits;

trait HasSubscriptions
{
    /**
     * Is the user subscribed?
     *
     * @return bool
     */
    public function isSubscribed(): bool
    {
        if ($this->ownerHasSubscription()) {
            return true;
        }

        return $this->subscribed('main');
    }

    /**
     * Is the user not subscribed?
     *
     * @return bool
     */
    public function isNotSubscribed(): bool
    {
        return !$this->isSubscribed();
    }

    /**
     * Has the user canceled his subscription?
     *
     * @return bool
     */
    public function hasCancelled(): bool
    {
        if (!$this->subscription('main')) {
            return false;
        }

        return $this->subscription('main')->cancelled();
    }

    /**
     * Has the user not canceled his subscription?
     *
     * @return bool
     */
    public function hasNotCancelled(): bool
    {
        return !$this->hasCancelled();
    }

    /**
     * Is the user a returning customer?
     *
     * @return bool
     */
    public function isCustomer(): bool
    {
        return $this->hasStripeId();
    }

    /**
     * Is the user not a returning customer?
     *
     * @return bool
     */
    public function isNotCustomer(): bool
    {
        return !$this->isCustomer();
    }

    /**
     * Does the user have a team subscription?
     *
     * @return bool
     */
    public function hasTeamSubscription(): bool
    {
        if (!$this->plan) {
            return false;
        }
        
        return $this->plan->isForTeams();
    }

    /**
     * Does the user have not a team subscription?
     *
     * @return bool
     */
    public function doesNotHaveTeamSubscription(): bool
    {
        return !$this->hasTeamSubscription();
    }

    /**
     * Check for any team the member is subscribed, if owner has a subscription already.
     * Basically we want to prevent members from accessing areas that the team owner has access.
     *
     * @return bool
     */
    public function ownerHasSubscription(): bool
    {
        foreach ($this->teams as $team) {
            if ($team->owner->isSubscribed()) {
                return true;
            }
        }

        return false;
    }
}
