@extends('layout.master')
@section('title','CreateShowingTime')

@section('content')

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
            </div>
            {{-- hall  loop  --}}
            <div class="form-group">
                <label for="hall_id"><i class="fas fa-landmark"></i> Hall</label>
                <select class="form-control" name="hall_id">
                    @foreach($halls as $hall)
                    <option value="{{$hall->id }}">{{$hall->name}}</option>  
                    @endforeach 
                </select>
                {{-- @endfor drop down loop  --}}
            </div>
            <div class="form-group">
                <label for="show_time"><i class="far fa-calendar-alt"></i>  Showing Time</label>
                <input type="datetime-local" class="form-control" name="show_time" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{url('/show')}}" class="btn btn-danger"> Cancel </a>
        </form>
        {{-- form end*********************************** --}}
    </div>
</div>
@endsection