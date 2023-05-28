@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Course Details</div>

                    <div class="card-body">
                        <h4>Course Name: {{ $course->course_name }}</h4>
                        <p>Teacher: {{ $course->teachers[0]->last_name ?? 'N/A' }}</p>
                        <p>Students:</p>
                        <ul>
                            @forelse ($course->students as $student)
                            <li>{{ $student->first_name }} {{ $student->last_name }}</li>
                            @empty
                                <li>No students enrolled in this course.</li>
                            @endforelse
                        </ul>
                        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
