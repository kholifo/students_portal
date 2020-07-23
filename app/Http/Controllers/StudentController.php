<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use App\Models\Subject;
use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use App\Http\Requests\Student\MarkStoreRequest;
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

        return redirect()->route("students.show", $student->id);
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index');
    }

    public function markCreate(Student $student)
    {
        $subjects = Subject::all();

        return view('marks.create', compact('student', 'subjects'));
    }

    public function markStore(MarkStoreRequest $request, Student $student)
    {
        $request->validated();
        $student->subjects()->attach($request->subject_id, ['mark' => $request->mark]);

        return redirect()->route("students.show", $student->id);
    }

    public function markEdit(Student $student, Request $request, $id)
    {
        return view('marks.edit', compact('student', 'id'));
    }

    public function markUpdate(Request $request, Student $student, $id)
    {
        $student->subjects()->syncWithoutDetaching([$id => ['mark' => $request->mark]]);

        return redirect()->route("students.show", $student->id);
    }
}
