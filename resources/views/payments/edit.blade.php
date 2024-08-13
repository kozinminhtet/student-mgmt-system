@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Edit Payments</div>

            <div class="card-body">
                <form action="{{url('/payments/'.$payments->id)}}" method="post">
                    @csrf
                    @method("PATCH")
                        <label> Enrollment No</label><br>
                        <select name="enrollment_id"  class="form-select">
                            @foreach ($enrollments as $enrollment)
                                <option value="{{ $enrollment->id }}"> {{ $enrollment->enroll_no }} </option>
                            @endforeach
                        </select>
    
                        <label>Paie Date</label>
                        <input type="text" class="form-control mb-3" value="{{ $payments->paid_date }}" name="paid_date"><br>
                        
                        <label>Amount</label>
                        <input type="text" class="form-control mb-3" value="{{ $payments->amount }}" name="amount"><br>

                        <input type="submit" value="Save" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection