@extends('layout')
@section('content')
    <div class="container">
        
        <div class="card">
            <form action="{{ url('/teachers/'.$teachers->id) }}" method="post">
                {{-- {!! csrf_field() !!} --}}
                @csrf
                @method("PATCH")
                <div class="card-header">Edit Page</div>
                <div class="card-body mb-3">
                    <input type="hidden" value="{{ $teachers->id }}">
                    <label for="name">Name</label>
                    <input type="text" class="form-control mb-3" name="name" value="{{ $teachers->name }}"><br>
                    <label for="address"> Address</label>
                    <input type="text" class="form-control mb-3" name="address" value="{{ $teachers->address }}"><br>
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control mb-3" name="phone" value="{{ $teachers->phone }}"><br>
                    <input type="submit" value="Update" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection