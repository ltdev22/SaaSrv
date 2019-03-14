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
        // We use optional because the user may not have subscription at all
        return optional($this->subscription('main'))->cancelled();
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
        return $this->plan->isForTeams();
    }
}
