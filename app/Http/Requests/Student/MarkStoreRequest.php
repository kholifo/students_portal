<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MarkStoreRequest extends FormRequest
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
        $student_id = request('student');

        return [
            'mark' => 'nullable|integer|between: 0,5',
            "subject_id" => Rule::unique('student_subject')
                ->where(function ($query) use ($student_id) {
                $query->where('student_id', $student_id->id);
            })];
    }
}
