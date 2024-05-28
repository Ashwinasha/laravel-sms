@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <h1 class="my-4 text-center" style="color:white; background-color:brown;">Create New Student</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="student_id" class="form-label">Student id</label>
                    <input type="text" name="student_id" class="form-control" id="student_id" placeholder="insert like 'CT001/ET001'">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" name="age" class="form-control" id="age" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="address" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="degree_program" class="form-label">Degree Program</label>
                    <input type="text" name="degree_program" class="form-control" id="degree_program" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mx-2">Submit</button>
                    <a href="{{ route('students.index') }}" class="btn btn-danger mx-2">Close</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
