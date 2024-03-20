<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartsListRequest extends FormRequest
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
            'partID' => 'required|string|max:255',
            'image' => 'file|mimes:jpeg,png,gif,webp',
            'part_name' => 'required|string|max:255',
            'compatibility' => 'required|string|max:255',
            'price' => 'required|integer',
            'stock' => 'required|integer',
        ];
    }
}
