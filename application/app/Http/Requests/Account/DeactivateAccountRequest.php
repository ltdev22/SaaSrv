<?php

namespace SaaSrv\Http\Requests\Account;

use SaaSrv\Rules\CurrentPassword;
use Illuminate\Foundation\Http\FormRequest;

class DeactivateAccountRequest extends FormRequest
{
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
            'password_current' => [
                'required',
                new CurrentPassword()
            ],
        ];
    }
}
