@extends('layouts.app')
@section('content')
    <div class="container col-8 py-3">
        <table class="table py-2">
            <h3>{{ $student->name }}</h3>
            <p>{{ $student->group->name }}</p>
            <thead>
            <tr>
                <td>Name of subject</td>
                <td>Mark</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @foreach($studentMark as $mark)
                <tr>
                    <td>{{ $mark->name }}</td>
                    <td>{{ $mark->pivot->mark }}</td>
                    <td><a href="{{ route('marks.edit', [$student, $mark->id]) }}" class="btn btn-info">Edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('marks.create', $student, $mark->id) }}" class="btn btn-info">Add marks</a>
        <a href="{{ route('students.index') }}" class="btn btn-info">Back</a>
    </div>
@endsection
