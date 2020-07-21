@extends('layouts.app')
@section('content')
    <div class="form-group d-flex justify-content-center">
        {{ Form::model($group, ['url' => route('groups.store')]) }}
        @include('groups.form')
        {{ Form::submit('Save') }}
        {{ Form::close() }}
    </div>
@endsection
