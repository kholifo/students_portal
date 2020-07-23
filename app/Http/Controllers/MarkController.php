<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mark\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;

class MarkController extends Controller
{
    public function edit(Student $student)
    {
        $subjects = $student->subjects;

        return view('marks.edit', compact('student', 'subjects'));
    }

    public function update(UpdateRequest $request, Student $student, Subject $subject)
    {
        foreach($request->mark as $key => $value) {
            $student->subjects()->sync([$key => ['mark' => $value]]);
            return redirect("students/{$student->id}");
        }
    }
}
