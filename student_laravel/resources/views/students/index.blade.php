@extends('layouts.app')

@section('content')
<div class="container mt-3" >
    <h1 class="my-4 text-center" style="color:white; background-color:brown;">Students List</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Student id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Email</th>
                <th>Degree Program</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->student_id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->degree_program }}</td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <a href="{{ route('students.create') }}" class="btn btn-success my-2">Create New Student</a>
    </div>
    </div>
    <script type="text/javascript">
        function confirmDelete() {
            return confirm('Are you sure you want to delete this student?');
        }
    </script>
@endsection
