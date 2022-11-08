<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    
    function attributes() {
        return [
            'message' => 'Post message',
            'iduser' => 'User ID',
        ];
    }

    public function rules()
    {
        return [
            'message' => 'required|string|max:150|min:1',
            'iduser' => 'required|numeric|gte:1|lte:10'
        ];
    }
    
    function messages() {
        $required = 'The field :attribute is required';
        $string = 'The field :attribute must be a string';
        $max = 'The max lenght of :attribute is :max';
        $min = 'The min lenght of :attribute is :min';
        
        return [
            'message.required' => $required,
            'message.string' => $string,
            'message.max' => $max,
            'message.min' => $min,
            'iduser.required' => $required,
            'iduser.numeric' => 'The field :attribute must be a number'
        ];
    }
}