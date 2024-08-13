@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Students' About</div>
        <div class="card-body">
            <h6 class="card-title"><b>Name: </b>{{ $students->name }}</h6>
            <p class="card-text"><b>Address: </b> {{ $students->address }}</p>
            <p class="card-text"><b>Phone Number: </b>{{ $students->phone }}</p>
            <a href="{{ url('/students') }}" class="btn btn-sm btn-secondary">Back</a>
        </div>
    </div>
@endsection