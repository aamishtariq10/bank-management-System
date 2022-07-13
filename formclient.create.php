<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "bank system";

$connect = mysqli_connect($host, $username, $password, $database);

$name4 = $_POST['c1'];
$cnic1 = $_POST['c2'];
$phoneno1 = $_POST['c3'];
$cityname1 = $_POST['c4'];
$accountno1  = $_POST['c5'];
$ammount1 = $_POST['c6'];
$address1 =  $_POST['c7'];echo $name4;
echo $cnic1;
echo $phoneno1;
echo $cityname1;
echo $accountno1;
echo $ammount1;
echo $address1;

$query = "insert into client (name2,cnic ,phoneno ,city , accountno, ammount, address) value('$name4','$cnic1','$phoneno1','$cityname1','$accountno1','$ammount1','$address1' )";

$transport  = mysqli_query($connect, $query);
if($transport)
{echo "
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
<h1 STYLE='margin-top: 100px'>
DATA SUCCESSFULLY SAVED
</h1>
<table  style='margin-top: 200px ;'>
<tr style='background-color: lightskyblue';>
<th>NAME</th>
<th>CNIC</th>
<th>PHONE NUMBER</th>
<th>CITY NAME</th>
<th>BRANCH POST</th>
<th>SENIORITY</th>
<th>ADDRESS</th>
</tr>
<TR>
<TD>$name</TD>
<td>$cnic</td>
<td>$phoneno</td>
<td>$cityname</td>
<td>$branchpost</td>
<td>$seniority</td>
<td>$address</td>
</TR>

</table>
</center>
</body>
</html>"
;}


