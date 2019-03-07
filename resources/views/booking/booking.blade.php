@extends('layout.master')
@section('title','BookingPage')
@section('content')

    <div class="col-md-12"style="margin-top:10px;" >
        <div class="row">
            @foreach($shows as $sh)
                <div class="col-md-3 border-bottom text-center" > 
                    <img src="/storage/{{ $sh->movie->image }}" width="100px" height="auto">
                        <h5>{{$sh->movie->title}}</h5>   
                    <h2>{{$sh->hall->name}}</h2>
                    <small class="text-muted">{{$sh->show_time}}</small><br>
                    <a href="/booking/show/{{ $sh->id }}/detail" class="btn bnt-success">
                    <i class="fa fa-arrow-circle-right icon-primary"></i>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    {{-- end of table  --}}
@endsection
