@extends('layout.master')
@section('title','MonthlyBooking')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- Bar Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Bar Chart for Monthly Booking</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="reportBarChart"></canvas>
                    </div>
                    <hr>
                </div>
            </div>

            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Area Chart for Monthly Booking</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="reportAreaChart"></canvas>
                    </div>
                    <hr>
                </div>
            </div>

            {{-- mothly movie chart --}}
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">The most movie booking chart</h6>
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
    <script>
        var chartValueFromLaravel = {!! json_encode($values) !!};
        var countsFromLaravel = {!! json_encode($counts) !!};
        var moviesValueFromLaravel = {!! json_encode($movies) !!};
    </script>
    
@endsection