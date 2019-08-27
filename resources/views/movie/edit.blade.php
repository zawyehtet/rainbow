@extends('layout.master')
@section('title','Edit Movie')
@section('content')
<div class="col-md-8">
        {{-- start edit form action*********** --}}
    <form  action="/movie/update/{{$movie->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Image</label> <br>
            <img src="/storage/{{ $movie->image }}" width="100px" height="auto"/>
            <input type="file" class="form-control"  name="image" value="{{ $movie->image }}" >
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control"  name="status" value="{{ $movie->status }}" >
        </div>
        <div class="form-group>
            <label for="title">Title</label>
            <input type="text" class="form-control"  name="title" value="{{ $movie->title}}">
        </div>
        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="text" class="form-control"  name="duration" value="{{ $movie->duration}}" required>
        </div>
        <button type="submit" class="btn btn-facebook ">update</button>
        <a href="{{url('/movie')}}" class="btn btn-danger">cancel</a>
    </form>
    {{--  end form ************************  --}}
</div>

@endsection
