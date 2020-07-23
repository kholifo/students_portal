@extends('layouts.app')
@section('content')
    <div class="container col-8 py-3">
        <form method="post" action="{{ route('marks.store', $student) }}">
            @method('POST')
            @csrf
            <label for="subject_id">Subject:</label>
            <select class="form-control" id="subject_id" name="subject_id">
                @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}">
                        {{ $subject->id }} . {{ $subject->name }}
                    </option>
                @endforeach
            </select>
            <input class="form-control" type="number" min="0" max="5" name="mark">
            <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
        </form>
    </div>
@endsection
