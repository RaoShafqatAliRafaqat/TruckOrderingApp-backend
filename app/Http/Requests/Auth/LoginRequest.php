<?php

namespace App\Http\Requests\Auth;
use App\Http\Requests\WebRequest;

class LoginRequest extends WebRequest
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
        'email' => 'required|string|email',
        'password' => 'required|string|min:8',
      ];
    }

}
