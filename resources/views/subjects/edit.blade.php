@extends('layouts.app')
@section('content')
    <div class="form-group d-flex justify-content-center">
        {{ Form::model($subject, ['url' => route('subjects.update', $subject), 'method' => 'PATCH']) }}
        @include('subjects.form')
        {{ Form::submit('Change') }}
        {{ Form::close() }}
    </div>
@endsection
