@extends('layout.master')
@section('title','HallCreate')
@section('content')
    <form action="/hall/store" method="POST" class="col-md-6" >
        @csrf
        <div class="form-group ">
            <label for="status">Hall Name</label>
            <input type="text" class="form-control" name="name" aria-describedby="titleHelp" placeholder="Add hall name" required>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Confirm</button>
    </form>
@endsection