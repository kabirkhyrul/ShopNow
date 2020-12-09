<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderUpdateRequest extends FormRequest
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
            'user_id' => ['required', 'exists:users,id'],
            'coupon_id' => ['exists:coupons,id'],
            'status' => ['required', 'in:pending,processing,delivered'],
            'billing_name' => ['required', 'max:255', 'string'],
            'billing_mobile' => ['required', 'max:255', 'string'],
            'billing_address' => ['required', 'max:255', 'string'],
            'shipping_name' => ['required', 'max:255', 'string'],
            'shipping_mobile' => ['required', 'max:255', 'string'],
            'shipping_address' => ['nullable', 'max:255', 'string'],
            'notes' => ['required', 'max:255', 'string'],
            'sub_total' => ['required', 'numeric'],
            'profit' => ['required', 'numeric'],
            'total' => ['required', 'numeric'],
        ];
    }
}
