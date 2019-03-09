<?php 

namespace SaaSrv\Models\Traits;

trait HasConfirmationTokens
{
    /**
     * A user should have one confirmation token.
     *
     * @return $this
     */
    public function confirmationToken()
    {
        return $this->hasOne(\SaaSrv\Models\ConfirmationToken::class);
    }

    /**
     * Generate confirmation token
     *
     * @return string
     */
    public function generateConfirmationToken(): string
    {
        $this->confirmationToken()->create([
            'token' => $token = str_random(200),
            'expires_at' => $this->getConfirmationTokenExpiry(),
        ]);

        return $token;
    }

    /**
     * Get when confirmation token will expire.
     *
     * @return Carbon\Carbon
     */
    protected function getConfirmationTokenExpiry(): \Carbon\Carbon
    {
        return $this->freshTimestamp()->addMinutes(30);
    }
}
