@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Enrollment's About</div>
        <div class="card-body">
            <h6 class="card-title"><b>Enroll No: </b>{{ $enrollments->enroll_no }}</h6>
            <p class="card-text"><b>Batch: </b> {{ $enrollments->batch->name }}</p>
            <p class="card-text"><b>Student: </b>{{ $enrollments->student->name }}</p>
            <p class="card-text"><b>Join Date: </b>{{ $enrollments->join_date }}</p>
            <p class="card-text"><b>Fee: </b>{{ $enrollments->fee }}</p>
            <a href="{{ url('/enrollments') }}" class="btn btn-sm btn-secondary">Back</a>
        </div>
    </div>
@endsection