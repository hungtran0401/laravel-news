<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class cateRequest extends FormRequest
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
            'txtCateName' => 'required|unique:theloai,Ten',
            'txtOrder'    => 'required',
            //
        ];
    }
}
