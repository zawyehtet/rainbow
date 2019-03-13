@extends('layout.master')
@section('title','CreateShowingTime')

@section('content')
@include('layout._header')

<div class="container col-md-8 col-md-offset-2 ">
    <div class="well">
        {{-- form start********************************* --}}
        <form  action="/show/store" method="POST" >
            @csrf
            {{-- movie name looping******************** --}}
            <div class="form-group">
                <label for="movie_id"><i class="fas fa-film"></i> Movie</label>
                <select class="form-control" name="movie_id">
                    @foreach($movies as $movie)
                    <option value="{{$movie->id }}">{{$movie->title}}</option>  
                    @endforeach 
                </select>
                @if($errors->has("movie_id"))
					<small class="form-text text-danger">
						{{ $errors->first('movie_id') }}
					</small>
				@endif
            </div>
            {{-- hall  loop  --}}
            <div class="form-group">
                <label for="hall_id"><i class="fas fa-landmark"></i> Hall</label>
                <select class="form-control" name="hall_id">
                    @foreach($halls as $hall)
                    <option value="{{$hall->id }}">{{$hall->name}}</option>  
                    @endforeach 
                </select>
                @if($errors->has("hall_id"))
					<small class="form-text text-danger">
						{{ $errors->first('hall_id') }}
					</small>
				@endif
                {{-- @endfor drop down loop  --}}
            </div>
            <div class="form-group">
                <label for="show_time"><i class="far fa-calendar-alt"></i>  Showing Time</label>
                <input type="datetime-local" class="form-control" name="show_time">
                @if($errors->has("show_time"))
					<small class="form-text text-danger">
						{{ $errors->first('show_time') }}
					</small>
				@endif
            </div>
            
            <button type="submit" class="btn btn-success">save</button>
            <a href="{{url('/show')}}" class="btn btn-danger"> cancel </a>
        </form>
        {{-- form end*********************************** --}}
    </div>
</div>
@endsection