@extends('layout.master')
@section('title','Create Movie')

@section('content')
@include('layout._header')
<div class="container col-md-6 col-md-offset-2 ">
    <div class="well">
        {{-- form start********************************* --}}
        <form  action="/movie/store" method="post" enctype="multipart/form-data">
            @csrf
            <legend>Insert A new Movie</legend>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file"  name="image" value="{{ old('Image') }}" >
                @if($errors->has("image"))
					<small class="form-text text-danger">
						{{ $errors->first('image') }}
					</small>
				@endif
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" name="status" aria-describedby="titleHelp" placeholder="status" value="{{ old('image') }}" >
                @if($errors->has("status"))
					<small class="form-text text-danger">
						{{ $errors->first('status') }}
					</small>
				@endif
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control"  name='title' placeholder="title" value="{{ old('title') }}">
                @if($errors->has("title"))
					<small class="form-text text-danger">
						{{ $errors->first('title') }}
					</small>
				@endif
            </div>
            <div class="form-group">
                <label for="duration">Duration</label>
                <input type="number" class="form-control" name="duration" id="duration" placeholder="duration with minutes" value="{{ old('duration') }}" >
                @if($errors->has("duration"))
					<small class="form-text text-danger">
						{{ $errors->first('duration') }}
					</small>
				@endif
            </div>
            
            <button type="submit" class="btn btn-success ">save</button>
            <a href="{{url('/movie')}}" class="btn btn-danger">cancel</a>
        </form>
        {{-- form end*********************************** --}}
    </div>
</div>
@endsection