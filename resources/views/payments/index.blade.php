@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header bg-light">
            <h2 class="text-danger">Payments</h2>
        </div>

        @if (session('info'))
            <div class="alert alert-info">
                {{ session("info")}}
            </div>
        @endif
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session("success")}}
            </div>
        @endif

        <div class="card-body">
            <a href="{{ url('payments/create')}}" class="btn btn-primary btn-small" title="Add New Batch">Add New</a>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Enrollment No</th>
                        <th>Paid Date</th>
                        <th>Amount</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($payments as $payment)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $payment->enrollment->enroll_no?? "Unknown" }}</td>
                            <td>{{ $payment->paid_date }}</td>
                            <td>{{ $payment->amount }}</td>
                            <td>
                                <a href="{{ url('/payments/'.$payment->id) }}" class="btn btn-success btn-sm">View</a>
                                <a href="{{ url('/payments/'.$payment->id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                                
                                <form action="{{ url('/payments/'.$payment->id) }}" method="POST" style="display: inline">
                                    {{ @method_field("DELETE")}}
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm(&quot;Confirm delete?&quot;)">Del</button>
                                    <a href="{{ url('/report/report1/' . $payment->id) }}" class="btn btn-success">Print</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection