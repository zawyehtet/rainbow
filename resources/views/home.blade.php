@extends('layout.master')
@section('content')
<div class="container" >
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="{{url('/data/pdf')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i>
             Generate Report
        </a>
    </div>
    {{-- <div class="row justify-content-center ">
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
    </div>  --}}
{{-- card count with icon --}}
<!-- Earnings (Monthly) Card Example -->
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">showing movie(count)</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$movies}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-film fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Theater(Hall)</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$halls}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-theater-masks fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">All Booking</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$bookings}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-ticket-alt fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                    yangon,hlaing township,
                    0912345678
                    expample@gmail.com
                </div>
                </div>
                <div class="col-auto">
                <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
{{-- end of the home page card --}}
{{-- chart from home page --}}
<div class="row">
    <div class="col-md-12">
        <!-- Area Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Area Chart for Monthly Sale</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="reportAreaChart"></canvas>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
{{-- end chart --}}
<div class="col-md-12">
        <div class="row">
            @foreach($shows as $sh)
                <div class="col-md-3 text-center" > 
                    <img src="/storage/{{ $sh->movie->image }}" >
                    <h5 class="card-title mt-2">{{$sh->movie->title}}</h5> 
                    {{-- <span>Cinema <i class="fas fa-caret-right"></i> {{$sh->hall->name}}</span><br>
                    <p>Time <i class="fas fa-caret-right"></i> {{$sh->show_time}}</p> --}}
                    {{-- <a href="/booking/show/{{ $sh->id }}/detail" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>   --}}
                </div>
            @endforeach
        </div>
    </div>
</div>
<script>
    var chartValueFromLaravel = {{ json_encode($values) }};
    //php laravel to js
</script>
@endsection
