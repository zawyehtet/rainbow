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
 
<!-- Earnings (Monthly) Card Example -->
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2 ">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Now Showig movies</div>
                <div class="h5 mb-0 font-weight-bold text-primary">{{$movie_count}}(movies)</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-film  fa-2x text-primary"></i>
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
                <div class="h5 mb-0 font-weight-bold text-success">{{$halls}}(theaters)</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-theater-masks fa-2x text-success"></i>
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
                <div class="h5 mb-0 font-weight-bold text-info">{{$bookings}}  (check out)</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-ticket-alt fa-2x text-info"></i>
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
                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                    <p id="datetime"></p>
                </div>
                </div>
                <div class="col-auto">
                    <i class="far fa-clock  fa-2x text-warning"></i>
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
                <h6 class="m-0 font-weight-bold text-primary"> Monthly Sale(booking)</h6>
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
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">The most movies booking(chart)</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="monthlyMovieBarChart"></canvas>
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
                </div>
            @endforeach
        </div>
    </div>
</div>
<script>
    var chartValueFromLaravel = {!! json_encode($values) !!};
    var countsFromLaravel = {!! json_encode($counts) !!};
    var moviesValueFromLaravel = {!! json_encode($movies) !!};
    //php laravel to js
</script>
@endsection
