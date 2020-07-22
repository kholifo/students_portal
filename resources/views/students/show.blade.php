@extends('layouts.app')
@section('content')
    <div class="container col-6 py-2">
        <table class="table py-2">
            <h3>{{ $student->name }}</h3>
            <p>{{ $student->group->name }}</p>
            <thead>
            <tr>
                <td>Name of subject</td>
                <td>Mark</td>
            </tr>
            </thead>
            <tbody>
            @foreach($studentMark as $mark)
                <tr>
                <td>{{ $mark->subject->name }}</td>
                <td>{{ $mark->mark }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('marks.edit', $student) }}" class="btn btn-info">Edit marks</a>
        <a href="{{ route('students.index') }}" class="btn btn-info">Back</a>
    </div>
@endsection
