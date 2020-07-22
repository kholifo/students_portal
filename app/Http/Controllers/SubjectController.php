<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Http\Requests\Subject\StoreRequest;
use App\Http\Requests\Subject\UpdateRequest;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::paginate(5);

        return view('subjects.index', compact('subjects'));
    }

    public function create()
    {
        $subject = new Subject();

        return view('subjects.create', compact('subject'));
    }

    public function store(StoreRequest $request)
    {
        Subject::create($request->validated());

        return redirect()->route('subjects.index');
    }

    public function edit(Subject $subject)
    {
        return view('subjects.edit', compact('subject'));
    }

    public function update(UpdateRequest $request, Subject $subject)
    {
        $subject->update($request->validated());

        return redirect()->route('subjects.index');
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect()->route('subjects.index');
    }
}
