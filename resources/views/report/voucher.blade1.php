<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pdf</title>
    <style>
        body{
    
        background:black;
   
    }
    .pdf{
        width: 80mm;
        height:auto;
        margin: 0px auto;
        background:white;
    }
    .name{
        text-align: center;
    
    }
    .frame{

        height: auto;
        padding: 10px 20px;  
    }
     ul{
        list-style:none;
    }
    .box{
        width:100%;
        font-size:11px;
        text-align:left;
    }
    .box .list1{
        float:left;
        text-align:left;
        padding:0px;
        
    }
    .box .list2{
        float:right;
        
    }
    .sold_list{
        width:100%;
        text-align:left;
        border-collapse: collapse;
        font-size:10px;
    }
    .sold_list th{
        border-bottom:1px dotted black;
        border-top:1px dotted black;
    }
    .sold_list th,td{
        padding: 8px;
    }
    .mark ,.footer{
        text-align:center;
    }

    .total_list{
        width:80%;
        text-align:right;
        border-collapse: collapse;
        font-size:12px;
        line-height: 80%;
        margin-left:50px;
    }
    /* .total_list th,td{
        padding: 8px;
    } */
   .footer{
       width:100%;
   }
   
    </style>
</head>
<body>
    <div class="pdf">
        <div class="frame">
            <div class="name">
                <h1>NooDi</h1>
                <p>Your Movie....your Happiness</p>
                <small><b>No.44 Lower Insein Road, Kyimyindine</b></small>
            </div>
            <!-- section of name field -->
            <!-- data list  -->
            <div class="box">
                <ul class="list1">
                    <li>Sales Person : admin</li>
                    <li>Cust: Table-02</li>
                </ul>
                <ul class="list2">
                    <li>Date : 13-03-2019</li>
                    <li>Time : 12:30 PM</li>
                    <li>INVO1-00000111</li>
                </ul>
            </div>
            <!-- start table -->
            <div class="experience">
                <table class="sold_list">
                    <tr>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Amount</th>
                    </tr>
                    <tr>
                        <td>ကြက်စကောထမင်း</td>
                        <td>2000</td>
                        <td>2</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td>PH7</td>
                        <td>400</td>
                        <td>1</td>
                        <td>300</td>
                    </tr>
                </table>
                
            </div>
            <hr style="border:1px solid black;">
            <div class="total_list">
                <!-- section of total table -->
                <table class="total_list">
                    <tr>
                        <td>Total</td>
                        <td>4900</td>
                    </tr>
                    <tr>
                        <td>Tax5%</td>
                        <td>245</td>
                    </tr>
                    <tr>
                        <td>Disc</td>
                        <td>800</td>
                    </tr>
                    <tr>
                        <td>Service charge0%</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Receved</td>
                        <td>4900</td>
                    </tr>
                    <tr>
                        <td>Net Amoutn</td>
                        <td>4156</td>
                    </tr>
                </table>
            </div>
            <p class="mark">*******************</p>
            <!-- section of footer -->
            <div class="footer">
                <p>Love what you eat.Eat what you love.</p>
            </div>
            <!-- end of the experience -->
        </div>
    </div>
</body>
</html>