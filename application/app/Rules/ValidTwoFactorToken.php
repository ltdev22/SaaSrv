<?php

namespace SaaSrv\Rules;

use Illuminate\Contracts\Validation\Rule;
use SaaSrv\Models\User;
use SaaSrv\TwoFactor\TwoFactorInterface;

class ValidTwoFactorToken implements Rule
{
    /**
     * The user instance.
     *
     * @param User
     */
    protected $user;

    /**
     * The Two Factor (i.e. Authy in this case) instance.
     *
     * @param TwoFactorInterface
     */
    protected $two_factor;

    /**
     * Create a new rule instance.
     *
     * @param \SaaSrv\Models\User $user
     * @param \SaaSrv\TwoFactor\TwoFactorInterface $two_factor
     * @return void
     */
    public function __construct(User $user, TwoFactorInterface $two_factor)
    {
        $this->user = $user;
        $this->two_factor = $two_factor;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        return $this->two_factor->validateToken($this->user, $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'The verification code is invalid.';
    }
}
