<?php

namespace SaaSrv\TwoFactor;

use SaaSrv\Models\User;

interface TwoFactorInterface
{
    /**
     * Register a user.
     *
     * @param \SaaSrv\Models\User   $user
     */
    public function register(User $user);

    /**
     * Validate a token for a new registered user or a user loggin in.
     *
     * @param \SaaSrv\Models\User   $user
     * @param string                $token
     */
    public function validateToken(User $user, string $token);

    /**
     * Remove a user from the TF app.
     *
     * @param \SaaSrv\Models\User   $user
     */
    public function delete(User $user);
}