<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>@yield('title')</title>
    <style>
       
        .box{
            width:100px;
            height:30px;
            margin: 20px 20px;
            
        }
        
        /* .seat{
            margin: 5px 5px;
        } */
        
        .red{
            background:#f00;
            color:white;
            text-align: center;
        }
        .blue{
            background:cadetblue;
        }
        .white{
            background:green;
            color:white;
            text-align: center;
            
        }
        /* seat list css */
        
        .seat-list{
            /* border:1px solid black; */
            list-style: none;
            margin:6px;
        }
        .seat-item{
            display:block;
            float: left;
            height: 50px;
            margin:4px;
            padding:5px;
        }
        *{
            font-family: 'Merriweather', serif;
            
        }
        
    </style>
</head>
<body>
    
    <div class="container" id="main">
        @yield('content')
    </div>
	<script src="{{ url ('/js/main.js') }}"></script>
    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

</body>
</html>