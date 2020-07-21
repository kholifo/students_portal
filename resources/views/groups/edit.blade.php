@extends('layouts.app')
@section('content')
    <div class="form-group d-flex justify-content-center">
        {{ Form::model($group, ['url' => route('groups.update', $group), 'method' => 'PATCH']) }}
        @include('groups.form')
        {{ Form::submit('Change') }}
        {{ Form::close() }}
    </div>
@endsection
