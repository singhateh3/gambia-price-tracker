<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StorePriceRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'crop_id'     => 'required|exists:crops,id',
            'market_id'   => 'required|exists:markets,id',
            'amount'      => 'required|numeric|min:0',
            'recorded_at' => 'required|date',
        ];
    }

    public function messages(): array
    {
        return [
            'crop_id.required'     => 'Please select a crop',
            'crop_id.exists'       => 'Selected crop does not exist',
            'market_id.required'   => 'Please select a market',
            'market_id.exists'     => 'Selected market does not exist',
            'amount.required'      => 'Price amount is required',
            'amount.numeric'       => 'Price must be a number',
            'amount.min'           => 'Price cannot be negative',
            'recorded_at.required' => 'Please provide the date this price was recorded',
            'recorded_at.date'     => 'Please provide a valid date',
        ];
    }
}
