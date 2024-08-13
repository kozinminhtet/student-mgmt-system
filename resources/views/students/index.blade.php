@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Student Application</h2>
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
            <a href="{{ url('students/create')}}" class="btn btn-primary btn-small" title="Add New Student">Add New</a>
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
                    @foreach ($students as $student)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->address}}</td>
                            <td>{{$student->phone}}</td>
                            <td>
                                <a href="{{ url('/students/'.$student->id) }}" class="btn btn-success btn-sm">View</a>
                                <a href="{{ url('/students/'.$student->id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                                
                                <form action="{{ url('/students/'.$student->id) }}" method="POST" style="display: inline">
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