@extends('layouts.app')
@section('content')
    <div class="container col-6 py-2">
        <div>
            <h3>{{$group->name}}</h3>
            <a href="{{ route('groups.index') }}">back</a>
        </div>
        <table>
            <thead>
                <tr>
                    <td>Name of student</td>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
