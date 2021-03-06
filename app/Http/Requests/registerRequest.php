<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class registerRequest extends FormRequest
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
             'username' => 'required|alpha|min:6|max:10|unique:users',
             'name' => 'required|emin:6|max:10',
             'password' => 'required|min:8',
        ];
    }
 
}