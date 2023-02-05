<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'customer_id' => 'required',
            'sell_id' => 'required|unique:bas,sell_id',
        ];
    }
    public function messages()
    {
        return [
            'sell_id.unique' => 'Ba for Sell Item has already added.'
        ];
    }
}
