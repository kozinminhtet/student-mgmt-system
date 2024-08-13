@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Courses</h2>
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
            <a href="{{ url('courses/create')}}" class="btn btn-primary btn-small" title="Add New Course">Add New</a>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Course</th>
                        <th>Syllabus</th>
                        <th>Duration</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$course->name}}</td>
                            <td>{{$course->syllabus}}</td>
                            <td>{{$course->duration()}}</td>
                            <td>
                                <a href="{{ url('/courses/'.$course->id) }}" class="btn btn-success btn-sm">View</a>
                                <a href="{{ url('/courses/'.$course->id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                                
                                <form action="{{ url('/courses/'.$course->id) }}" method="POST" style="display: inline">
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