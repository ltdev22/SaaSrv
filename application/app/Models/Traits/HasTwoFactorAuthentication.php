<?php 

namespace SaaSrv\Models\Traits;

trait HasTwoFactorAuthentication
{
    /**
     * A user should have one two factor auth
     *
     * @return $this
     */
    public function twoFactor()
    {
        return $this->hasOne(\SaaSrv\Models\TwoFactor::class);
    }

    /**
    * Is the two factor enabled?
    *
    * @return bool
    */
    public function twoFactorEnabled(): bool
    {
        return (bool) optional($this->twoFactor)->isVerified();
    }

    /**
    * Is the two factor pending?
    *
    * @return bool
    */
    public function twoFactorPendingVerification(): bool
    {
        // We can't have pending verification if the user hasn't started the process at all
        if (!$this->twoFactor) {
            return false;
        }

        // If its not verified, then its definately pending!
        return !$this->twoFactor->isVerified();
    }
}