<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Http\Requests\Group\StoreGroup;
use App\Http\Requests\Group\UpdateGroup;



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

    public function store(StoreGroup $request)
    {
        Group::create($request->validated());
        return redirect()->route('groups.index');
    }

    public function show(Group $group)
    {
        return view('groups.show', compact('group'));
    }

    public function edit(Group $group)
    {
        return view('groups.edit', compact('group'));
    }

    public function update(UpdateGroup $request, Group $group)
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
