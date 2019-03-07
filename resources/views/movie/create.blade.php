@extends('layout.master')
@section('title','Create')

@section('content')
<div class="container col-md-6 col-md-offset-2 ">
    <div class="well">
        {{-- form start********************************* --}}
        <form  action="/movie/store" method="post" enctype="multipart/form-data">
            @csrf
            <legend>Insert A new Movie</legend>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file"  name="image" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" name="status" aria-describedby="titleHelp" placeholder="status" required>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control"  name='title' placeholder="title" required>
            </div>
            <div class="form-group">
                <label for="duration">Duration</label>
                <input type="number" class="form-control" name="duration" id="duration" placeholder="duration with minutes" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{url('/movie')}}" class="btn btn-danger">Cancel</a>
        </form>
        {{-- form end*********************************** --}}
    </div>
</div>
@endsection