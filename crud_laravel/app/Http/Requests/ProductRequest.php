<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; 
    }

    public function rules(): array
    {
        return [
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ];
    }
}