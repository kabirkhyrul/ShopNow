<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponUpdateRequest extends FormRequest
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
            'code' => ['required', 'max:255', 'string'],
            'start_date' => ['required', 'date', 'date'],
            'expired_date' => ['required', 'date', 'date'],
            'discount_type' => ['required', 'in:Amount,Percent'],
            'amount' => ['required', 'numeric'],
        ];
    }
}
