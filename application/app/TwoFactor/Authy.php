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
        try {
            // Set in a response the request we do to authy api
            $response = $this->client->request(
                'POST',
                'https://api.authy.com/protected/json/users/new?api_key=' . config('services.authy.secret'),
                [
                    'form_params' => [
                        'user' => $this->getTwoFactorRegistrationDetails($user),
                    ],
                ]
            );
        } catch (\Exception $e) {
            return false;
        }

        // Return the response body/content as an object rather than array
        return json_decode($response->getBody(), false);
    }

    /**
     * {@inheritdoc }
     */
    public function validateToken(User $user, string $token)
    {
        try {
            $response = $this->client->request(
                'GET',
                'https://api.authy.com/protected/json/verify/' . $token . '/' . $user->twoFactor->identifier . '?force=true&api_key=' . config('services.authy.secret')
            );
        } catch (\Exception $e) {
            return false;
        }

        $response = json_decode($response->getBody(), false);
        return $response->token === 'is valid';
    }

    /**
     * {@inheritdoc }
     */
    public function delete(User $user)
    {
        dd('Works!');
    }

    /**
     * Return the user's registration details.
     *
     * @param   \SaaSrv\Models\User  $user
     * @return  array
     */
    protected function getTwoFactorRegistrationDetails(User $user): array
    {
        return [
            'email'     => $user->email,
            'cellphone' => $user->twoFactor->phone,
            'country_code' => $user->twoFactor->dial_code,
        ];
    }
}