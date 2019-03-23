<?php

namespace SaaSrv\Http\Requests\TwoFactor;

use Illuminate\Foundation\Http\FormRequest;
use SaaSrv\Rules\ValidTwoFactorToken;
use SaaSrv\TwoFactor\TwoFactorInterface;

class TwoFactorVerifyRequest extends FormRequest
{
    /**
     * The Two Factor (i.e. Authy in this case) instance.
     *
     * @param TwoFactorInterface
     */
    protected $two_factor;

    /**
     * Create a new rule instance.
     *
     * @param \SaaSrv\TwoFactor\TwoFactorInterface $two_factor
     * @return void
     */
    public function __construct(TwoFactorInterface $two_factor)
    {
        $this->two_factor = $two_factor;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'token' => [
                'required',
                new ValidTwoFactorToken($this->user(), $this->two_factor),
            ]
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'token.required' => 'The Verification code field is required.',
        ];
    }
}
