<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServingRequest extends FormRequest
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
            'number' => 'required|numeric|between:1,99',
            'version' => 'nullable|alpha|between:1,3',
            'category_id' => 'required|numeric|exists:categories,id',
            'name' => 'required|string|between:3,32',
            'description' => 'nullable|string|between:5,64',
            'spice' => 'required|numeric|between:0,3',
            'price' =>  'required|numeric|between:1,100',
            'offer_id' =>  'nullable|numeric|exists:offers,id',
            'allergens' => 'nullable|array',
            'allergens.*' => 'nullable|numeric|distinct|exists:allergens,id',
        ];
    }
}
