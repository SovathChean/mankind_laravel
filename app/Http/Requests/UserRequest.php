<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
          'name'=> 'required',
          'email' => 'required',
          'password' => 'required',
          'description' => 'required',
          'department_id' => 'required',
          'role_id' => 'required',
          'facebook_url' => 'required',
          'insta_url' => 'required'
        ];
    }
}
