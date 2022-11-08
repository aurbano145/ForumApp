<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    
    function attributes() {
        return [
            'name' => 'User`s nickname',
            'password' => 'User`s password',
            'email' => 'User`s email',
            'birthdate' => 'User`s birthdate'
        ];
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:20|min:2|unique:users,name',
            'password' => 'required|string|max:20|min:6',
            'email' => 'required|string|max:50',
            'birthdate' => 'required|date'
        ];
    }
    
    function messages() {
        $required = 'The field :attribute is required';
        $string = 'The field :attribute must be a string';
        $max = 'The max lenght of :attribute is :max';
        $min = 'The min lenght of :attribute is :min';
        
        return [
            'name.required' => $required,
            'name.string' => $string,
            'name.max' => $max,
            'name.min' => $min,
            'name.unique' => 'The introduced name is already registered',
            'password.required' => $required,
            'password.string' => $string,
            'password.max' => $max,
            'password.min' => $min,
            'email.required' => $required,
            'email.string' => $string,
            'email.max' => $max,
            'birthdate.required' => $required,
            'birthdate.date' => 'The :attribute`s format is dd/mm/aaaa'
        ];
    }
}