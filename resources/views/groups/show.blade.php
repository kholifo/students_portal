@extends('layouts.app')
@section('content')
    <div class="container col-6 py-2">
        <div>

            <h3>{{$group->name}}</h3>
            <a href="{{ route('groups.index') }}">back</a>
        </div>
    </div>
@endsection
