@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <form action="{{url('courses')}}" method="post">
                @csrf
                <div class="card-header">Courses' Page</div>
                <div class="card-body mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control mb-3" name="name" placeholder="Name"><br>
                    <label for="syllabus"> Syllabus</label>
                    <input type="text" class="form-control mb-3" name="syllabus" placeholder="Syllabus"><br>
                    <label for="Duration">Duration</label>
                    <input type="text" class="form-control mb-3" name="duration" placeholder="Duration"><br>
                    <input type="submit" value="Save" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection