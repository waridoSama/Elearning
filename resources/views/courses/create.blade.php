@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Course</div>

                    <div class="card-body">
                        <form action="{{ route('courses.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="course_name">Course Name</label>
                                <input type="text" name="course_name" id="course_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="teacher_id">Teacher</label>
                                <select name="teacher_id" id="teacher_id" class="form-control" required>
                                    @foreach ($teachers as $teacher)
                                        <option value="{{ $teacher->id }}">{{ $teacher->full_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
