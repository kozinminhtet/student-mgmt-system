@extends('layout')
@section('content')
    <div class="container">
        
        <div class="card">
            <form action="{{ url('/batches/'.$batches->id) }}" method="post">
                {{-- {!! csrf_field() !!} --}}
                @csrf
                @method("PATCH")
                <div class="card-header">Edit Page</div>
                <div class="card-body mb-3">
                    <input type="hidden" value="{{ $batches->id }}">
                    <label for="name">Batch Name</label>
                    <input type="text" class="form-control mb-3" name="name" value="{{ $batches->name }}"><br>
                    <label for="course_id"> Course</label>
                    {{-- <input type="text" class="form-control mb-3" name="course_id" value="{{ $batches->course->name }}"><br> --}}
                    <select name="course_id"  class="form-select">
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}" @selected($batches->course_id == $course->id)> 
                                {{ $course->name }} 
                            </option>
                        @endforeach
                    </select>

                    <label for="start_date">Start Date</label>
                    <input type="text" class="form-control mb-3" name="start_date" value="{{ $batches->start_date }}"><br>
                    <input type="submit" value="Update" class="btn btn-success">


                    {{-- <textarea name="" id="" cols="30" rows="10">{{$batches->course_id}}</textarea> --}}
                </div>
            </form>
        </div>
    </div>
@endsection