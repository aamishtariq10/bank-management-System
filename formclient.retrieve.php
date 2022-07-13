<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "bank system";
$connect = mysqli_connect($host, $username, $password, $database);

$retrieve23 = $_POST['AT1'];

$query_view="SELECT name2,cnic, phoneno, city, accountno, ammount, address from client where accountno='$retrieve23'";
$transport_query=mysqli_query($connect,$query_view);
if(mysqli_num_rows($transport_query) > 0 )

    while($view=mysqli_fetch_assoc($transport_query))
    {
        $viewname2 = $view['name2'];
        $viewcnic2 = $view['cnic'];
        $viewphoneno2 = $view['phoneno'];
        $viewcity2 = $view['city'];
        $viewammount2 = $view['ammount'];
        $viewaddress2 = $view['address'];

        echo "
<html>
<head>
    <style>
        Table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
                    }
    </style>


</head>
<body>
<center>
    <table  style='margin-top: 200px ;'>
        <tr style='background-color: lightskyblue';>
            <th>NAME</th>
            <th>CNIC</th>
            <th>PHONE NUMBER</th>
            <th>CITY</th>
            <th>AMMOUNT</th>
            <th>ADDRESS</th>
        </tr>
        <TR>
            <TD>$viewname2</TD>
            <td>$viewcnic2</td>
            <td>$viewphoneno2</td>
            <td>$viewcity2</td>
            <td>$viewammount2</td>
            <td>$viewaddress2</td>
        </TR>
     </table>
 </center>   
 </body>    
</html>";}

else
{echo" ";}