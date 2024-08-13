@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <form action="{{url('batches')}}" method="post">
                @csrf
                <div class="card-header">Batches' Page</div>
                <div class="card-body mb-3">
                    <label for="name">Batch Name</label>
                    <input type="text" class="form-control mb-3" name="name"><br>
                    <label for="course_id"> Course Name</label>
                    {{-- <input type="text" class="form-control mb-3" id="course_id" name="course_id"><br> --}}
                    <select name="course_id"  class="form-select">
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}"> {{ $course->name }} </option>
                        @endforeach
                    </select>

                    <label for="start_date">Start Date</label>
                    <input type="text" class="form-control mb-3" id="start_date" name="start_date"><br>
                    <input type="submit" value="Save" class="btn btn-success">

                    {{-- <textarea name="" id="" cols="30" rows="10">{{ $courses }}</textarea> --}}
                </div>
            </form>
        </div>
    </div>
@endsection