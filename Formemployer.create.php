<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "bank system";

$connect = mysqli_connect($host, $username, $password, $database);

$name = $_POST['namea1'];
$cnic = $_POST['cnica2'];
$phoneno = $_POST['phonenoa3'];
$cityname = $_POST['citya4'];
$branchpost= $_POST['posta5'];
$seniority= $_POST['gradea6'];
$address= $_POST['addressa7'];


$query = "insert into employers (name1,cnic ,phone_no ,city ,post ,seniority ,address) value('$name','$cnic','$phoneno','$cityname','$branchpost','$seniority','$address' )";

$transport  = mysqli_query($connect, $query);
if($transport);
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
</html>";}


