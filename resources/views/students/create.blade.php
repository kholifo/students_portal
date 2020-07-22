@extends('layouts.app')
@section('content')
    <div class="form-group d-flex justify-content-center">
        {{ Form::model($student, ['url' => route('students.store')]) }}
        @include('students.form')
        {{ Form::submit('Save') }}
        {{ Form::close() }}
    </div>
@endsection
