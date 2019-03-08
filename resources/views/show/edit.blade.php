@extends('layout.master')
@section('title','ShowingTimeEdit')
@section('content')
@include('layout._header')
    {{-- start edit form action*********** /movie/update/{{$movie->id}}--}}
    <form  action="/show/update/{{$show->id}}" class="col-md-6" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="movie_id"><i class="fas fa-film"></i> Movie Title</label>
            <select class="form-control" name="movie_id">
                @foreach($movies as $mv)
                    <option value="{{$mv->id }}" @if($show->movie_id == $mv->id)  selected @endif >{{$mv->title}}</option>  
                @endforeach 
            </select>
        </div>
        {{-- movie poster section --}}
        <div class="form-group">
            <label for="hall_id"><i class="fas fa-landmark"></i> Cinema Hall</label>
            <select class="form-control" name="hall_id">
                @foreach($halls as $hl)
                <option value="{{$hl->id }}" @if($show->hall->id == $hl->id)  selected @endif >{{$hl->name}}</option>  
                @endforeach 
            </select>
        </div>
        {{-- cinema hall section --}}
        <div class="form-group">
            <label for="show_time"><i class="far fa-calendar-alt"></i> Time</label>
            <input type="datetime-local" class="form-control"  name="show_time"  value="{{$show->show_time->format('Y-m-d\TH:i')}}">
        </div>
        <button type="submit" class="btn border border-success">Update</button>
        <a href="{{url('/show')}}" class="btn border border-danger">Cancel</a>
    </form>
    {{-- end form ************************ --}}
@endsection