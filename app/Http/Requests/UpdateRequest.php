<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [


            'age'      => 'required|numeric|min:15|',
            'password' =>'required|distinct|min:7|'   ,

            'phone'   =>'required|numeric|min:12',
            'image'   =>'required'
            //
        ];
    }
}
