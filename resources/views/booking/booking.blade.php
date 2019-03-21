@extends('layout.master')
@section('title','Showing movie list')
@section('content')
@include('layout._header')
<div class="col-md-12">
    <div class="row">       
        @foreach($shows as $sh)
        <div class="card text-center col-md-3">
            <img src="/storage/{{ $sh->movie->image }}" class="card-img-top m-5 " style="width:150px; height:auto;" >
            <div class="card-body">
                <h5 class="card-title">Movie :  {{$sh->movie->title}}</h5>
                <h6>Theater :{{$sh->hall->name}}</h6>
                <p class="card-text">Show Time :{{$sh->show_time}}</p>
            </div>
            <div class="card-footer ">
                <a href="/booking/show/{{ $sh->id }}/detail" class="btn btn-primary btn-circle">
                <i class="fa fa-arrow-circle-right icon-primary icon-lg"></i>
                </a>
            </div>
        </div>
        @endforeach        
    </div>
    {{-- end of table  --}}
</div>
@endsection

{{-- start of slide --}}

{{-- slide  --}}


    
