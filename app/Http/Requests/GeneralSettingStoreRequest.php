<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralSettingStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:255', 'string'],
            'phone' => ['nullable', 'max:255', 'string'],
            'address' => ['nullable', 'max:255', 'string'],
            'logo' => ['nullable', 'max:255', 'string'],
            'email' => ['nullable', 'email'],
            'facebook' => ['nullable', 'max:255', 'string'],
            'twitter' => ['nullable', 'max:255', 'string'],
            'instagram' => ['nullable', 'max:255', 'string'],
            'pinterest' => ['nullable', 'max:255', 'string'],
            'top_bar_offer' => ['nullable', 'max:255', 'string'],
            'currency' => ['nullable', 'max:3', 'string'],
            'shipping_cost' => ['required', 'numeric'],
        ];
    }
}
