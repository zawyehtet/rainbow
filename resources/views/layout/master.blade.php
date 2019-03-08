<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="{{ url ('/css/main.css') }}">
    <title>@yield('title')</title>
    <style>
       
            
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
	
	<script src="{{ url ('/js/main.js') }}"></script>
    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
       
 
    </script>
</body>
</html>