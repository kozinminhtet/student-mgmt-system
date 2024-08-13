@extends('layout')
@section('content')
    <div class="container">
        
        <div class="card">
            <form action="{{ url('/courses/'.$courses->id) }}" method="post">
                {{-- {!! csrf_field() !!} --}}
                @csrf
                @method("PATCH")
                <div class="card-header">Edit Page</div>
                <div class="card-body mb-3">
                    <input type="hidden" value="{{ $courses->id }}">
                    <label for="name">Name</label>
                    <input type="text" class="form-control mb-3" name="name" value="{{ $courses->name }}"><br>
                    <label for="syllabus"> Syllabus</label>
                    <input type="text" class="form-control mb-3" name="syllabus" value="{{ $courses->syllabus }}"><br>
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control mb-3" name="duration" value="{{ $courses->duration() }}"><br>
                    <input type="submit" value="Update" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection