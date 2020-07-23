@extends('layouts.app')
@section('content')
    <div class="container col-8">
        <div class="my-3">
            <h1>Students</h1>
            <a href="{{ route('students.create') }}" class="btn btn-info">New student</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name of student</td>
                <td>Birthday</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td><a href="{{route('students.show', $student->id)}}">{{$student->name}}</a></td>
                    <td>{{$student->birthday}}</td>
                    <td><a href="{{route('students.edit', $student->id)}}">Edit</td>
                    <td>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
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
        {{$students->links()}}
        <div>
@endsection
