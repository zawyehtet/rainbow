<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>@yield('title')</title>
    <style>
        *{
            font-family: 'Merriweather', serif;
            
        }
        .main{
            min-height: 1000px;
        }
        a.nav-link:hover {
            color: white;
        }
        .icon-danger {
            color: red;
        }
        .my-sidebar:before{
            content: "";
            position: fixed;
            z-index: -1;
            width: inherit;
            top: 0;
            left: 0;
            bottom: 0;
            background-color: inherit;
            border-right: 1px solid #e3e3e3;
        }
        /* table css */
        table {
            border-collapse: collapse;
        }
        th{
            background-color:gray;
            color:white;
        }
        /* table, th, td {
        border: 1px solid black; */
        }
        /* ******* */
        .booking-border{
            border:1px solid black;
            max-width:150px;
            
        }
        /* icon card */
        .wrimagecard{	
        margin-top: 0;
        margin-bottom: 1.5rem;
        text-align: left;
        position: relative;
        background: #fff;
        box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
        border-radius: 4px;
        transition: all 0.3s ease;
        }
        .wrimagecard .fa{
            position: relative;
            font-size: 70px;
        }
        .wrimagecard-topimage_header{
        padding: 20px;
        }
        a.wrimagecard:hover, .wrimagecard-topimage:hover {
            box-shadow: 2px 4px 8px 0px rgba(46,61,73,0.2);
        }
        .wrimagecard-topimage a {
            width: 100%;
            height: 100%;
            display: block;
        }
        .wrimagecard-topimage_title {
            padding: 20px 24px;
            height: 80px;
            padding-bottom: 0.75rem;
            position: relative;
        }
        .wrimagecard-topimage a {
            border-bottom: none;
            text-decoration: none;
            color: #525c65;
            transition: color 0.3s ease;
        }
    </style>
</head>
<body>
    @include('layout._navbar')
    <div class="container-fluid" id="main" style="margin-top:20px;">
        <div class="row row-offcanvas row-offcanvas-left">
            @include('layout._sidebar')
            {{-- end of sidebar --}}
            <div class="col bg-white main pt-5 mt-3">
                @yield('content')
            </div>
    </div>
	
	
    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#showTime').datetimepicker();
        });
        var interval = setInterval(timestamphome, 1000);
        function timestamphome(){
        var date;
        date = new Date();   
        var time = document.getElementById('timediv'); 
        time.innerHTML = date.toLocaleTimeString();
        }
 
    </script>
</body>
</html>