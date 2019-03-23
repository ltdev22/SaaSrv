<?php

namespace SaaSrv\TwoFactor;

use SaaSrv\Models\User;
use SaaSrv\TwoFactor\TwoFactorInterface;
use GuzzleHttp\Client;

class Authy implements TwoFactorInterface
{
    /**
     * The Guzzle instance.
     *
     * @var Client
     */
    protected $client;

    /**
     * Instantiate Authy
     *
     * @param \GuzzleHttp\Client    $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

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