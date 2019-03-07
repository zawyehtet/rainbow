@extends('layout.master')
@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="header">
                <h1><i class="fab fa-galactic-senate"></i>  Rainbow Cinema</h1>
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <span class="text-success">You are logged in successfully!</span>
        </div>    
    </div> 
{{-- card count with icon --}}
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="wrimagecard wrimagecard-topimage">
            <a href="#">
                <div class="wrimagecard-topimage_header" style="background-color: rgba(22, 160, 133, 0.1)">
                    <center><i class = "fa fa-film" style="color:#16A085"></i></center>
                </div>
                <div class="wrimagecard-topimage_title">
                    <h4>
                       Movie
                       <span class="float-lg-right">{{$movies}}</span>
                    </h4>
                    
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="wrimagecard wrimagecard-topimage">
            <a href="#">
                <div class="wrimagecard-topimage_header bg-warning" >
                    <center><i class = "fa fa-home icon-danger" ></i></center>
                </div>
                <div class="wrimagecard-topimage_title">
                    <h4>
                        Theatre<span class="float-lg-right">{{$halls}}</span>
                    </h4>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="wrimagecard wrimagecard-topimage">
            <a href="#">
                <div class="wrimagecard-topimage_header bg-info" >
                    <center><i class = "fa fa-clock icon-primary"></i></center>
                </div>
                <div class="wrimagecard-topimage_title">
                <div id="timediv"></div>
                </div>
                
            </a>
        </div>
    </div>
</div>
{{-- end of the card --}}
<div class="col-md-12">
        <div class="row">
            @foreach($shows as $sh)
                <div class="col-md-3 border border-info text-center" > 
                    <img src="/storage/{{ $sh->movie->image }}" >
                    <h5 class="card-title">Movie <i class="fas fa-caret-right"></i> {{$sh->movie->title}}</h5> 
                    <span>Cinema <i class="fas fa-caret-right"></i> {{$sh->hall->name}}</span><br>
                    <p>Time <i class="fas fa-caret-right"></i> {{$sh->show_time}}</p>

                    <a href="/booking/show/{{ $sh->id }}/detail" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>  
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
