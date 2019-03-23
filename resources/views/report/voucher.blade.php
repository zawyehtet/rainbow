<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pdf</title>
    <style>
    
   body{
       
   }
    .frame{
        border:1px solid black;
        width:200px;
        height:auto;
        margin: 0 auto; 
        padding:1px 20px;  
        text-align:center;
        background:white;
    }
    .list{
        display:inline-block;
        text-align:center;
        margin-top: 5px;
    }
    hr{
        border:1px dotted black;
    }
    .address{
        text-align:left;
        font-size:15px;
    }
    .footer{
        width:100%;
        font-size:12px;
    }
    .foot{
        width:100%;
        text-align: center;
    }
    
    </style>
</head>
<body >
    <div class="frame">
        <div class="name">
            <h3>Monthly Ticket Report</h3>
        </div>
        <!-- section of name field -->
        <div class="address">
            <p>Yangon / Hlaing Township</p>    
            <p >(+959)9456789/wpa30@gmail.com</p>
        </div>
        <!-- section of address -->
        <div class="list" style="text-align:left;">
            <table>
                <tr>
                    <th>
                    Movie:
                    </th>
                </tr>
                @foreach($movies as $mv)
                <tr>
                    <td>{{$mv->title}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="list">
            <table>
                <tr>
                    <th>
                         Price:
                    </th>
                </tr>
                @foreach($movie_id as $mi)
                <tr>
                    <td>{{$mi->total_price}}(MMK)</td>
                </tr>
                @endforeach
            </table>
        </div>
        <hr>
        <div class="total">
            <p>Total: {{$price}} (MMK)</p>
        </div>
        <p class="foot">********************</p>
        <div class="footer">
            
            <p>Items Sold are not exchangeable</p>
            <h3>"Thank You"</h3>
        
        </div>
        <!-- end of the experience -->
    </div>
</body>
</html>