@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header bg-light">
            <h2 class="text-danger">Batch Application</h2>
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
            <a href="{{ url('enrollments/create')}}" class="btn btn-primary btn-small" title="Add New Batch">Add New</a>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Enroll No</th>
                        <th>Batch</th>
                        <th>Student</th>
                        <th>Join Date</th>
                        <th>Fee</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($enrollments as $enrollment)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$enrollment->enroll_no}}</td>
                            <td>{{$enrollment->batch->name}}</td>
                            <td>{{$enrollment->student->name}}</td>
                            <td>{{$enrollment->join_date}}</td>
                            <td>{{$enrollment->fee}}</td>
                            <td>
                                <a href="{{ url('/enrollments/'.$enrollment->id) }}" class="btn btn-success btn-sm">View</a>
                                <a href="{{ url('/enrollments/'.$enrollment->id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                                
                                <form action="{{ url('/enrollments/'.$enrollment->id) }}" method="POST" style="display: inline">
                                    {{ @method_field("DELETE")}}
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm(&quot;Confirm delete?&quot;)">Del</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection