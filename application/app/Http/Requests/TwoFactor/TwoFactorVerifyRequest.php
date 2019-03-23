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
        // @see self::userResolver()
        if (session()->has('twofactor')) {
            $this->setUserResolver($this->userResolver());
        }

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

    /**
     * This request is used when:
     *  a) The user is verifying the TFA within the account area. In this case we require a user instance (i.e. $this->user())
     *  b) When the user is singing in. At this point the user instance is not set, its null as the user is logged out. 
     *
     * So when we are in the second scenario we need to temporary resolve the user by fetching a new instance using 
     * the user id we keep in session we set in LoginController::requireTwoFactorLogin()
     *
     * @return closure
     */
    protected function userResolver()
    {
        return function () {
            return \SaaSrv\Models\User::find(
                session('twofactor')->user_id
            );
        };
    }
}
