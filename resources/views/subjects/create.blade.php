@extends('layouts.app')
@section('content')
    <div class="form-group d-flex justify-content-center">
        {{ Form::model($subject, ['url' => route('subjects.store')]) }}
        @include('subjects.form')
        {{ Form::submit('Save') }}
        {{ Form::close() }}
    </div>
@endsection
