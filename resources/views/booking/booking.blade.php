@extends('layout.master')
@section('title','BookingPage')
@section('content')
@include('layout._header')
    <div class="col-md-12 bg-booking "  >
        <div class="row">
            @foreach($shows as $sh)
            <div class="col-md-6 border text-center">
                <div class="row">
                    <div>
                        <img src="/storage/{{ $sh->movie->image }}" width="100px" height="auto">
                    </div>
                    <div class=" border-bottom " style="margin-left:40px;" > 
                        <h5>Movie :  {{$sh->movie->title}}</h5>   
                        <h2>Theater :{{$sh->hall->name}}</h2>
                        <small class="text-muted">Show Time :{{$sh->show_time}}</small><br>
                        <a href="/booking/show/{{ $sh->id }}/detail" class="btn border border-success">
                        <i class="fa fa-arrow-circle-right icon-primary"></i>
                        </a>
                    </div>
                </div>
            </div>     
            @endforeach
        </div>
    </div>
    {{-- end of table  --}}
@endsection
