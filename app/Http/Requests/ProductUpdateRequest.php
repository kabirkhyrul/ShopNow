<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'category_id' => ['required', 'exists:categories,id'],
            'name' => ['required', 'max:255', 'string'],
            'price' => ['required', 'numeric'],
            'cost_price' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric'],
            'shipping' => ['nullable', 'numeric'],
            'weight' => ['nullable', 'max:255', 'string'],
            'special_price' => ['nullable', 'numeric'],
            'total_sale' => ['nullable', 'numeric'],
            'short_description' => ['nullable', 'max:255', 'string'],
            'description' => ['nullable', 'max:255', 'string'],
            'information' => ['nullable', 'max:255', 'string'],
            'rating' => ['nullable', 'numeric'],
            'is_featured' => ['required', 'boolean', 'boolean'],
            'free_shipping' => ['required', 'boolean', 'boolean'],
            'status' => ['required', 'boolean', 'boolean'],
            'photo' => ['nullable', 'file'],
        ];
    }
}
