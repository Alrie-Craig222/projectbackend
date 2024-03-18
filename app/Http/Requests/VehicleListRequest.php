<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleListRequest extends FormRequest
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
            'vin' => 'required|string|max:255',
            'brand-model' => 'required|string|max:255',
            'body_style' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'engine' => 'required|string|max:255',
            'transmission' => 'required|string|max:255',
        ];
    }
}
