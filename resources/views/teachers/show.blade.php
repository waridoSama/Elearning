@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Teacher Details</div>

                    <div class="card-body">
                    <h5>First Name: {{ $teacher->first_name }}</h5>
                        <h5>Last Name: {{ $teacher->last_name }}</h5>
                        <p>Date of Birth: {{ $teacher->date_of_birth }}</p>
                        <p>Email: {{ $teacher->email }}</p>
                        <p>Phone Number: {{ $teacher->phone_number }}</p>
                        <h6>Courses:</h6>
                        <ul>
                            @foreach ($teacher->courses as $course)
                                <li>{{ $course->course_name }}</li>
                            @endforeach
                        </ul>
                        <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
