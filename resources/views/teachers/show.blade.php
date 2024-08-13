@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Teachers' About</div>
        <div class="card-body">
            <h6 class="card-title"><b>Name: </b>{{ $teachers->name }}</h6>
            <p class="card-text"><b>Address: </b> {{ $teachers->address }}</p>
            <p class="card-text"><b>Phone Number: </b>{{ $teachers->phone }}</p>
            <a href="{{ url('/teachers') }}" class="btn btn-sm btn-secondary">Back</a>
        </div>
    </div>
@endsection