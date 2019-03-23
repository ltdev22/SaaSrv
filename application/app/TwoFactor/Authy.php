<?php

namespace SaaSrv\TwoFactor;

use SaaSrv\Models\User;
use SaaSrv\TwoFactor\TwoFactorInterface;

class Authy implements TwoFactorInterface
{
    /**
     * {@inheritdoc }
     */
    public function register(User $user)
    {
        dd('Works!');
    }

    /**
     * {@inheritdoc }
     */
    public function validateToken(User $user, string $token)
    {
        dd('Works!');
    }

    /**
     * {@inheritdoc }
     */
    public function delete(User $user)
    {
        dd('Works!');
    }
}