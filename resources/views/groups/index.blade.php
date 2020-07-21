@extends('layouts.app')
@section('content')
    <div class="container col-8">
        <div class="my-3">
            <h1>Groups</h1>
            <a href="{{ route('groups.create') }}" class="btn btn-info">New group</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name of group</td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
            @foreach($groups as $group)
                <tr>
                    <td>{{$group->id}}</td>
                    <td><a href="{{route('groups.show', $group->id)}}">{{$group->name}}</a></td>
                    <td><a href="{{route('groups.edit', $group->id)}}">Edit</td>
                    <td>
                        <form action="{{ route('groups.destroy', $group->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-sm btn-outline-danger p-1 ml-1">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$groups->links()}}
        <div>
@endsection
