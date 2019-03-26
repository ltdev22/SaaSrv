<?php

namespace SaaSrv\Http\Requests\Administrator;

use Illuminate\Foundation\Http\FormRequest;

class StartImpersonateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * We have already set admin authorization on the middleware level.
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
            'email' => [
                'required',
                'email',
                \Illuminate\Validation\Rule::exists('users', 'email')->where(function ($query) {
                    return $query->where('email', '!=', $this->user()->email);
                }),
            ]
        ];
    }
}
