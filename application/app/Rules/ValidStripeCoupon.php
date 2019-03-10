<?php

namespace SaaSrv\Rules;

use Illuminate\Contracts\Validation\Rule;
use Stripe\Coupon;

class ValidStripeCoupon implements Rule
{
    /**
     * Set a validation rule that will hit the stripe api 
     * in order to check if the coupon provided is valid/exists
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        try {
            Coupon::retrieve($value);
        } catch (\Exception $e) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'The coupon you have provided is not valid.';
    }
}
