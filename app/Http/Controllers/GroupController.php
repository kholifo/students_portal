<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Student;
<<<<<<< HEAD
use App\Http\Requests\Group\StoreRequest;
use App\Http\Requests\Group\UpdateRequest;
=======
use App\Http\Requests\Group\StoreGroup;
use App\Http\Requests\Group\UpdateGroup;
>>>>>>> 6c6b96bac8ba350863df67b89ae5068aeddca04b

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::paginate(5);

        return view('groups.index', compact('groups'));
    }

    public function create()
    {
        $group = new Group();

        return view('groups.create', compact('group'));
    }

    public function store(StoreRequest $request)
    {
        Group::create($request->validated());

        return redirect()->route('groups.index');
    }

    public function show(Group $group)
    {
        $students = Student::where('group_id', $group->id)->get();

        return view('groups.show', compact('group', 'students'));
    }

    public function edit(Group $group)
    {
        return view('groups.edit', compact('group'));
    }

    public function update(UpdateRequest $request, Group $group)
    {
        $group->update($request->validated());

        return redirect()->route('groups.index');
    }

    public function destroy(Group $group)
    {
        $group->delete();

        return redirect()->route('groups.index');
    }
}

