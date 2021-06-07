<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServingRequest extends FormRequest
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
            'number' => 'required|numeric|between:1,16',
            'version' => 'required|alpha|between:1,3',
            'category_id' => 'required|numeric|exists:categories,id',
            'name' => 'required|string|between:3,16',
            'description' => 'nullable|string|between:5,64',
            'spice' => 'required|numeric|between:0,3',
            'price' =>  'required|numeric|between:1,100',
            'offers' =>  'nullable|numeric|exists:offers,id',
        ];
    }
}
