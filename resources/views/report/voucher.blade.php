<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pdf</title>
    <style>
        body{
    
    background:grey;
   
    }
    .pdf{
        width: 817px;
        margin: 0px auto;
        background:white;
    }
    .frame{
        width: 655px;
        height: auto;
        padding: 0.5in 0;
        margin: 0 auto;    
    }
    .address{
        font-family: 'Roboto Condensed', sans-serif;
        line-height: 70%;
    }
    hr{
        display: block;
        margin-top: 10px;
        margin-left: 2px;
        margin-right: 5px;
        border-color:black;
        border-width: 2px;
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
<body>
    <div class="pdf">
        <div class="frame">
            <div class="name">
                <h1>WPA30 CINEMA</h1>
                <hr>
            </div>
            <!-- section of name field -->
            <div class="address">
                <p>Baho Street  </p>
                <p>Yangon ,Hlaing </p>    
                <p class="color">094567890</p>
                <p class="color">RAINBOW@EXAMPLE.COM</p>
                <p class="color">CASHER: Admin</p>
            </div>
            <!-- section of address -->
            <hr>
            <div class="experience">
                <div class="extitle">
                    <h3>Movie : BLADE RUNNER</h3>
                    <h3>Theater   : HALL A</h3>
                    <h3>Showing date: 14-MAR-2019</h3>
                    <h3>Showing time: 02:00:PM</h3>
                    <h3>Seat  : 11</h3>
                    <h3>Row        : 2</h3>
                    <hr>
                    <h3>Total(MMK):2000 KS</h3>
                    <hr>

                </div>
            </div>
            <div class="experience">
                <div class="extitle">
                    <p>Items Sold are not exchangeable</p>
                    {{-- <p>ကျေးဇူးပြုပြီး  ကောင်တာမှမထွက်ခွာမှီ လက်မှက်များကို သေချာစွာ စစ်ဆေးပေးပါ  ပြန်လည်လှဲပေးမည်မဟုက်ပါ
                    "ကျေးဇူးအထူးတင်ပါသည်"</p> --}}
                    <h3>"Thank You"</h3>
                </div>
            </div>
            <!-- end of the experience -->
        </div>
    </div>
</body>
</html>