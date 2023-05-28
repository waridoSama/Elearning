@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Student Details</div>

                    <div class="card-body">
                        <h5>First Name: {{ $student->first_name }}</h5>
                        <h5>Last Name: {{ $student->last_name }}</h5>
                        <p>Date of Birth: {{ $student->date_of_birth }}</p>
                        <p>Email: {{ $student->email }}</p>
                        <p>Phone Number: {{ $student->phone_number }}</p>
                        <h6>Courses:</h6>
                        <ul>
                            @foreach ($student->courses as $course)
                                <li>{{ $course->course_name }}</li>
                            @endforeach
                        </ul>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
