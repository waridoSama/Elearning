@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Course Details</div>

                    <div class="card-body">
                        <h4>Course Name: {{ $course->course_name }}</h4>
                        <p>Teacher: {{ $course->teacher->first_name.' '.$course->teacher->last_name }}</p>
                        <p>Students:</p>
                        <ul>
                            @foreach ($course->students as $student)
                                <li>{{ $student->first_name.' '.$student->last_name }}</li>
                            @endforeach
                        </ul>
                        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
