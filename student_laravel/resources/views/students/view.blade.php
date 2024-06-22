@extends('layouts.app')

@section('content')
<div class="container mt-3 d-flex justify-content-center">
    <div class="col-md-8">
        <h1 class="my-4 text-center" style="color:white; background-color:brown;">Student Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Student ID: {{ $student->student_id }}</h5>
                <p class="card-text"><strong>Name:</strong> {{ $student->name }}</p>
                <p class="card-text"><strong>Age:</strong> {{ $student->age }}</p>
                <p class="card-text"><strong>Address:</strong> {{ $student->address }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $student->email }}</p>
                <p class="card-text"><strong>Degree Program:</strong> {{ $student->degree_program }}</p>
                
            </div>
        </div>
        <div class="d-flex justify-content-center">
                    <a href="{{ route('students.index') }}" class="btn btn-primary mt-3">Back to List</a>
                </div>
    </div>
</div>
@endsection
