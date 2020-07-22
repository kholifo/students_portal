<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Student;
use App\Models\StudentMark;
use App\Http\Requests\StudentMark\UpdateRequest;

class StudentMarkController extends Controller
{
    public function edit(Student $student)
    {
        $subjects = Subject::all();

        return view('marks.edit',compact('student', 'subjects'));
    }

    public function update(UpdateRequest $request, Student $student)
    {
        foreach ($request->marks as $subjectId => $mark) {
            StudentMark::updateOrCreate(
                [
                    'student_id' => $student->id,
                    'subject_id' => $subjectId,
                ],
                [
                    'mark' => $mark,
                ]
            );
        }

        return redirect("students/{$student->id}");
    }
}
