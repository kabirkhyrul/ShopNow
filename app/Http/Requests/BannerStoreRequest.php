<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerStoreRequest extends FormRequest
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
            'bottom_string' => ['nullable', 'max:255', 'string'],
            'middle_string' => ['nullable', 'max:255', 'string'],
            'url' => ['required', 'url'],
            'image' => ['nullable', 'file'],
            'top_string' => ['nullable', 'max:255', 'string'],
            'top_position' => ['required', 'boolean', 'boolean'],
        ];
    }
}
