@extends('layouts.layout')
@section('content')
<div style="width: 200% !important;" class="container">
    <div style="width: 100%" class="row">
        <div style="width: 100%"class="col-md-8">
            <div  style="width: 100%"class="card">
                <div class="card-header">Teachers</div>

                <div class="card-body">
                    <a href="{{ route('teachers.create') }}" class="btn btn-primary mb-3">Create Teacher</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->first_name }}</td>
                                    <td>{{ $teacher->last_name }}</td>
                                    <td>{{ $teacher->date_of_birth }}</td>
                                    <td>{{ $teacher->email }}</td>
                                    <td>{{ $teacher->phone_number }}</td>
                                    <td>
                                        <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection