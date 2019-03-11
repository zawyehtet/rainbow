@extends('layout.master')
@section('title','MontlyBooking')
@section('content')
    <div class="row">
        <div class="col-md-12 chart-css">
            {{-- *************************chart start ************ --}}
            <div style="width:50%;height:300px;">
                <canvas id="myChart" width="400px" height="400px"></canvas>
            </div>
            <script>
                var chartValueFromLaravel = {{ json_encode($values) }};
    
                var ctx = document.getElementById("myChart");
    
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        datasets: [{
                            label: 'Montly Booking',
                            backgroundColor: 'blue',
                            borderColor: 'blue',
                            data: chartValueFromLaravel,
                            fill: true,
                        }]
                    },
                    options: {
                        responsive: true,
                        title: {
                            display: true,
                            text: 'Chart.js Line Chart'
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: false,
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        },
                        scales: {
                            xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                }
                            }]
                        }
                    }
                });    
            </script>
            {{-- ****************************chart end*********8* --}}
        </div>
    </div>    
@endsection