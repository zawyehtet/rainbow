@extends('layout.master')
@section('title','Booking')
@section('content')
@include('layout._header')
    <div class="col-md-12"  >
        <div class="row">
            {{-- @if(is_null($shows))
            <div class="alert alert-warning">
                <strong>Sorry!</strong> No Product Found.
            </div>                                      
            @else{ --}}
            
            @foreach($shows as $sh)
            <div class="col-md-10  text-center m-2">
                <div class="row">
                    <div>
                        <img src="/storage/{{ $sh->movie->image }}" width="100px" height="auto">
                    </div>
                    <div class="p-4" style="margin-left:40px;" > 
                        <h5>Movie :  {{$sh->movie->title}}</h5>   
                        <h2>Theater :{{$sh->hall->name}}</h2>
                        <small class="text-muted">Show Time :{{$sh->show_time}}</small><br>
                        <a href="/booking/show/{{ $sh->id }}/detail" class="btn btn-default btn-circle">
                        <i class="fa fa-arrow-circle-right icon-primary icon-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- end of table  --}}
@endsection
