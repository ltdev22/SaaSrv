<?php

namespace SaaSrv\Http\Requests\Subscription;

use Illuminate\Foundation\Http\FormRequest;

class SubscriptionStoreRequest extends FormRequest
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
            'plan' => [
                'required', 
                \Illuminate\Validation\Rule::exists('plans', 'gateway_id')->where(function ($query) {
                    $query->where('active', true);
                })
            ],
            'token' => [
                'required',
            ],
        ];
    }
}
