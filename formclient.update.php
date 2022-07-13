<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "bank system";

$connect = mysqli_connect($host, $username, $password, $database);
$oldaccountno=$_POST['M1'];
$newaccountno=$_POST['M2'];
$newname=$_POST['M3'];
$newcnic=$_POST['M4'];
$newphoneno=$_POST['M5'];
$newcity=$_POST['M6'];
$newammount=$_POST['M7'];
$newaddress=$_POST['M8'];

$query_update="UPDATE client SET accountno='$newaccountno',name2='$newname', cnic='newcnic',phoneno='$newphoneno',city='newcityname',ammount='$newammount',address='$newaddress' WHERE accountno=$oldaccountno";
$transport_q1=mysqli_query($connect,$query_update);

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
<H1 style='margin-top: 100px'>DATA SUCCESSFULLY UPDATED</H1>
<table  style='margin-top: 200px ;'>
<tr style='background-color: lightskyblue';>
<th>NAME</th>
<th>CNIC</th>
<th>PHONE NUMBER</th>
<th>CITY NAME</th>
<th>AMMOUNT</th>
<th>ADDRESS</th>
</tr>
<TR>
<TD>$newname</TD>
<td>$newcnic</td>
<td>$newphoneno</td>
<td>$newcity</td>
<td>$newammount</td>
<td>$newaddress</td>
</TR>

</table>
</center>
</body>
</html>";



