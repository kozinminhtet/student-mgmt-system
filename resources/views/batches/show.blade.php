@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Batches' About</div>
        <div class="card-body">
            <h6 class="card-title"><b>Name: </b>{{ $batches->name }}</h6>
            <p class="card-text"><b>Course: </b> {{ $batches->course->name }}</p>
            <p class="card-text"><b>Start Date: </b>{{ $batches->start_date}}</p>
            <a href="{{ url('/batches') }}" class="btn btn-sm btn-secondary">Back</a>
        </div>
    </div>
@endsection