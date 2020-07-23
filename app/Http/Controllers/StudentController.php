<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use App\Models\Subject;
use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(5);

        return view('students.index', compact('students'));
    }

    public function create(Student $student)
    {
        $groups = Group::all();
        return view('students.create', compact('groups', 'student'));
    }

    public function store(StoreRequest $request)
    {
        Student::create($request->validated());

        return redirect()->route('students.index');
    }

    public function show(Student $student)
    {
        $studentMark = $student->subjects;

        return view('students.show', compact('student', 'studentMark'));
    }

    public function edit(Student $student)
    {
        $groups = Group::all();
        return view('students.edit', compact('groups','student'));
    }

    public function update(UpdateRequest $request, Student $student)
    {
        $student->update($request->validated());

        return redirect("students/{$student->id}");
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index');
    }

    public function mark_create(Student $student)
    {
        $subjects = Subject::all();

        return view('marks.create', compact('student', 'subjects'));
    }

    public function mark_store(Request $request, Student $student)
    {
        $subject_id = $request->subject_id;

        if($student->subjects->contains($subject_id)){
            return redirect("students/{$student->id}")
                ->with('Have already exists!');
        }else{
            $student->subjects()->attach($subject_id, ['mark' => $request->mark]);
        }

        return redirect("students/{$student->id}");
    }

    public function mark_edit(Student $student, Request $request, $id)
    {
        return view('marks.edit', compact('student', 'id'));
    }

    public function mark_update(Request $request, Student $student, $id)
    {
        $student->subjects()->syncWithoutDetaching([$id => ['mark' => $request->mark]]);

        return redirect("students/{$student->id}");
    }
}
