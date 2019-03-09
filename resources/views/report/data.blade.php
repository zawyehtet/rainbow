<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pdf</title>
    {{-- <link rel="stylesheet" href="{{'style.css'}}"> --}}
    {{-- <link rel="stylesheet" href="{{ url ('/css/main.css') }}"> --}}
    <style>
        .frame{
            padding:20px;
            margin:80px;
            width:400px;
            height:auto;
            
        }
        hr{
            display: block;
            margin-top: 10px;
            margin-left: 2px;
            margin-right: 5px;
            border-color:black;
            border-width: 2px;
        }
        .name{
            background:darkgray;
            text-align: center;

        }
        .address{
                font-family: 'Roboto Condensed', sans-serif;
                line-height: 70%;
            }
        .extitle h4,span{
            line-height: 40%;

            }
        .name h1,.skill h3,.experience h3,.education h3,.awards h3{
            font-family: 'Oswald', sans-serif;
            letter-spacing: 3px;
            }
        .skill p,.experience p,span,ul,.color,.education .color, p ,span,.awards p,.i{
            font-family: 'Source Code Pro', monospace;
            /* color:RGB(66,66,66);  */
            }
        .experience .color,.education .color{
            color:RGB(233,29,99);
            }
        .i {
            color:RGB(46,68,64);
            }
    </style>
    
</head>
  <body class="body" >
      <div class="frame">
          <div class="name">
              <h1> RAINBOW</h1>
          </div>
          <div class="address">
              <p>BAHO STREET</p>
              <p>YANGON,HLAING TOWNSHIP</p>    
              <p class="color">(123) 456-7890</p>
              <p class="color">rainbowcinema@EXAMPLE.COM</p>
              <hr>
              
          </div>
          <div class="experience">
              <div class="extitle">
                <h3>TOTAL MOVIE____________{{$movie}}</h3>
                <h3>TOTAL HALL_____________{{$hall}}</h3>
                <h3>TOTAL BOOKING_________{{$booking}}</h3>
                <h3>TOTAL____________{{$price}}Ks</h3>

                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Aenean ac interdum nisi. Sed in consequat mi.</li>
                    <li>Sed in consequat mi, sed pulvinar lacinia felis eu finibus.</li>
                </ul>
            </div>
          </div>
      </div>
            <!-- skill field -->
  </body>
</html>