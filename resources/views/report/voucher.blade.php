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
    
    </style>
</head>
<body >
    <div class="frame">
        <div class="name">
            <h3>Monthly Sale</h3>
        </div>
        <!-- section of name field -->
        <div class="address">
            <p>yangon ,hlaing </p>    
            <p >(+959)9456789,wpa30@gmail.com</p>
        </div>
        
        
        <!-- section of address -->
        <div class="list">
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
                       Total Price:
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
        <div class="">
            
            <p>Items Sold are not exchangeable</p>
            <h3>"Thank You"</h3>
        
        </div>
        <!-- end of the experience -->
    </div>
</body>
</html>