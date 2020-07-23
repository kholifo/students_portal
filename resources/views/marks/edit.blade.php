@extends('layouts.app')
@section('content')
    <div class="container col-8">
        <form method="post" action="{{ route('marks.update', [$student, $id]) }}" class="pb-2">
            @method('PUT')
            @csrf
            <input class="form-control" type="number" min="0" max="5" name="mark">
            <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
        </form>
    </div>
@endsection
