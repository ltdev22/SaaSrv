<?php

namespace SaaSrv\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;
use SaaSrv\Rules\CurrentPassword;

class PasswordUpdateRequest extends FormRequest
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
            'password_current' => ['required', new CurrentPassword()],
            'password' => 'required|string|min:6|confirmed',
        ];
    }
}
