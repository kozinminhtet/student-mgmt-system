@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <form action="{{url('students')}}" method="post">
                @csrf
                <div class="card-header">Students Page</div>
                <div class="card-body mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control mb-3" name="name" placeholder="Name"><br>
                    <label for="address"> Address</label>
                    <input type="text" class="form-control mb-3" name="address" placeholder="Address"><br>
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control mb-3" name="phone" placeholder="Phone"><br>
                    <input type="submit" value="Save" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection