@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Payment</div>
        <div class="card-body">
            <h6 class="card-title"><b>Enrollment No: </b>{{ $payments->enrollment->enroll_no }}</h6>
            <p class="card-text"><b>Paid Date: </b> {{ $payments->paid_date }}</p>
            <p class="card-text"><b>Amount: </b>{{ $payments->amount }}</p>

            <a href="{{ url('/payments') }}" class="btn btn-sm btn-secondary">Back</a>
        </div>
    </div>
@endsection