@extends('layout.master')
@section('content')
<div class="container" >
    
    <div class="row justify-content-center ">
        <div class="col-md-12 ">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="alert alert-success col-md-4"> <i class="ti-user"></i> You are logged in successfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
        </div>    
    </div> 
{{-- card count with icon --}}
<div class="row ">
    <div class="col-md-4 col-sm-4 ">
        <div class="wrimagecard wrimagecard-topimage">
            <a href="{{url('/movie')}}">
                <div class="wrimagecard-topimage_header" style="background-color: rgba(22, 160, 133, 0.1)">
                    <center><i class = "fa fa-film" style="color:#16A085"></i></center>
                </div>
                <div class="wrimagecard-topimage_title">
                    <h4>
                       MOVIE
                       <span class="float-lg-right p-2">{{$movies}}</span>
                    </h4>
                    
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="wrimagecard wrimagecard-topimage">
            <a href="{{url('/hall')}}">
                <div class="wrimagecard-topimage_header bg-warning" >
                    <center><i class = "fa fa-home icon-danger" ></i></center>
                </div>
                <div class="wrimagecard-topimage_title">
                    <h4>
                        THEATER<span class="float-lg-right p-2">{{$halls}}</span>
                    </h4>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="wrimagecard wrimagecard-topimage">
            <a href="{{url('/monthly/report')}}">
                <div class="wrimagecard-topimage_header  " style="background-color:darkcyan">
                    <h1><center><i class="fas fa-chart-line " style="color:yellow;"></i></center></h1>
                </div>
                <div class="wrimagecard-topimage_title">
                    <h4>MONTLY REPORT</h4>
                </div>
            </a>
        </div>
    </div>
</div>
{{-- end of the card --}}
<div class="col-md-12">
        <div class="row">
            @foreach($shows as $sh)
                <div class="col-md-3 text-center" > 
                    <img src="/storage/{{ $sh->movie->image }}" >
                    <h5 class="card-title">Movie <i class="fas fa-caret-right"></i> {{$sh->movie->title}}</h5> 
                    <span>Cinema <i class="fas fa-caret-right"></i> {{$sh->hall->name}}</span><br>
                    <p>Time <i class="fas fa-caret-right"></i> {{$sh->show_time}}</p>
                    {{-- <a href="/booking/show/{{ $sh->id }}/detail" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>   --}}
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
