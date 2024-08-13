@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header bg-light">
            <h2 class="text-danger">Batches</h2>
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
            <a href="{{ url('batches/create')}}" class="btn btn-primary btn-small" title="Add New Batch">Add New</a>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Batches</th>
                        <th>Course</th>
                        <th>Start Date</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($batches as $batch)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $batch->name }}</td>
                            <td>{{ $batch->course->name }}</td>
                            <td>{{ $batch->start_date }}</td>
                            <td>
                                <a href="{{ url('/batches/'.$batch->id) }}" class="btn btn-success btn-sm">View</a>
                                <a href="{{ url('/batches/'.$batch->id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                                
                                <form action="{{ url('/batches/'.$batch->id) }}" method="POST" style="display: inline">
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