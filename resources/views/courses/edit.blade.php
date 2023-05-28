@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Course</div>

                    <div class="card-body">
                        <form action="{{ route('courses.update', $course->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="course_name">Course Name</label>
                                <input type="text" name="course_name" id="course_name" class="form-control" value="{{ $course->course_name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="course_name">Course Description</label>
                                <textarea name="course_description" id="course_description" class="form-control" required>{{ $course->course_description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="teacher_id">Teacher</label>
                                <select name="teacher_id" id="teacher_id" class="form-control" required>
                                    @foreach ($teachers as $teacher)
                                        <option value="{{ $teacher->id }}" {{ $teacher->id == $course->teacher_id ? 'selected' : '' }}>{{ $teacher->last_name }}</option>
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
