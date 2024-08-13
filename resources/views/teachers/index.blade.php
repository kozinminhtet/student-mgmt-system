@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header bg-light">
            <h2 class="text-danger">Teacher Application</h2>
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
            <a href="{{ url('teachers/create')}}" class="btn btn-primary btn-small" title="Add New Teacher">Add New</a>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($teachers as $teacher)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$teacher->name}}</td>
                            <td>{{$teacher->address}}</td>
                            <td>{{$teacher->phone}}</td>
                            <td>
                                <a href="{{ url('/teachers/'.$teacher->id) }}" class="btn btn-success btn-sm">View</a>
                                <a href="{{ url('/teachers/'.$teacher->id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                                
                                <form action="{{ url('/teachers/'.$teacher->id) }}" method="POST" style="display: inline">
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