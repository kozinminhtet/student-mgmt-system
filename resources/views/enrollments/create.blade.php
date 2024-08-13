@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <form action="{{url('enrollments')}}" method="post">
                @csrf
                <div class="card-header">Entrollments' Page</div>
                <div class="card-body mb-3">
                    <label for="enroll_no">Enroll No</label>
                    <input type="text" class="form-control mb-3" name="enroll_no"><br>

                    <label for="batch">Batch</label>
                    {{-- <input type="text" class="form-control mb-3" name="batch_id"><br> --}}
                    <select name="batch_id"  class="form-select">
                        @foreach ($batches as $batch)
                            <option value="{{ $batch->id }}"> {{ $batch->name }} </option>
                        @endforeach
                    </select>

                    <label for="students">Student</label>
                    {{-- <input type="text" class="form-control mb-3" name="student_id"><br> --}}
                    <select name="student_id"  class="form-select">
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}"> {{ $student->name }} </option>
                        @endforeach
                    </select>
                    
                    <label for="join_date">Join Date</label>
                    <input type="text" class="form-control mb-3" name="join_date"><br>
                    
                    <label for="fee">Fee</label>
                    <input type="text" class="form-control mb-3" name="fee"><br>

                    <input type="submit" value="Save" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection