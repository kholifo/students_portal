@extends('layouts.app')
@section('content')
    <div class="form-group d-flex justify-content-center">
        {{ Form::model($student, ['url' => route('students.update', $student), 'method' => 'PATCH']) }}
        @include('students.form')
        {{ Form::submit('Change') }}
        {{ Form::close() }}
    </div>
@endsection
