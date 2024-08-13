@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Courses' About</div>
        <div class="card-body">
            <h6 class="card-title"><b>Name: </b>{{ $courses->name }}</h6>
            <p class="card-text"><b>Syllabus: </b> {{ $courses->syllabus }}</p>
            <p class="card-text"><b>Duration: </b>{{ $courses->duration() }}</p>
            <a href="{{ url('/courses') }}" class="btn btn-sm btn-secondary">Back</a>
        </div>
    </div>
@endsection