@extends('layouts.app')
@section('content')
    <div class="container col-8">
        <div class="my-3">
            <h1>Subjects</h1>
            <a href="{{ route('subjects.create') }}" class="btn btn-info">New subject</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name of subject</td>
                <td></td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @foreach($subjects as $subject)
                <tr>
                    <td>{{$subject->id}}</td>
                    <td>{{$subject->name}}</td>
                    <td><a href="{{route('subjects.edit', $subject->id)}}">Edit</td>
                    <td>
                        <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST">
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
        {{$subjects->links()}}
        <div>
@endsection
