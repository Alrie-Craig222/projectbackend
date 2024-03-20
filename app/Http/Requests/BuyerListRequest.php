<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuyerListRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'buyerID' => 'required|string|max:255',
            'Picture' => 'file|mimes:jpeg,png,gif,webp',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|min:11|max:11',
            'gender' => 'required|string|max:255',
            'annual_income' => 'required|integer',
            'buyer_category' => 'required|string|max:255',
            
        ];
    }
}
