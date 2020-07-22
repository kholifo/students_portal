@extends('layouts.app')
@section('content')
    <div class="container col-8">
        <form method="post" action="{{ route('marks.update', $student) }}" class="pb-2">
            @method('PUT')
            @csrf
            @foreach($subjects as $subject)
                <label>Subject: {{ $subject->name }}</label>
                <input class="form-control" type="number" min="0" max="5" name="marks[{{ $subject->id }}]"
                            value={{ $student->student_marks
                                   ->firstWhere('subject_id', $subject->id)
                                   ->mark ?? ''}}>
            @endforeach
            <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
        </form>
    </div>
@endsection
