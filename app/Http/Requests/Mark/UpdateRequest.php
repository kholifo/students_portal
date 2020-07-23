<?php

namespace App\Http\Requests\Mark;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "mark" => 'array',
            "mark.*" => 'nullable|integer|between: 0,5',
        ];
    }
}
