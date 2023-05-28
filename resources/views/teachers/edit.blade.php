@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Teacher</div>

                    <div class="card-body">
                        <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $teacher->first_name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $teacher->last_name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $teacher->email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $teacher->phone_number }}" required>
                            </div>
                            <div class="form-group">
                                <label for="courses">Courses</label>
                                <select name="courses[]" id="courses" class="form-control" multiple required>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}" {{ $teacher->courses->contains($course->id) ? 'selected' : '' }}>{{ $course->course_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
