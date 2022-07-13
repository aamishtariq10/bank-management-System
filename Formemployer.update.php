<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "bank system";

$connect = mysqli_connect($host, $username, $password, $database);

$oldCNIC=$_POST['A12'];
$NEWCNIC=$_POST['A14'];
$NEWNAME=$_POST['A13'];
$NEWPHONENO1=$_POST['no12'];
$NEWCITYNAME=$_POST['A16'];
$NEWBRANCHPOST=$_POST['A17'];
$NEWSENIORITY=$_POST['A18'];
$NEWADDRESS=$_POST['A19'];

$query_update="UPDATE employers SET cnic='$NEWCNIC',name1='$NEWNAME',phone_no='$NEWPHONENO1',city='$NEWCITYNAME',post='$NEWBRANCHPOST',seniority='$NEWSENIORITY',address='$NEWADDRESS' WHERE cnic=$oldCNIC";
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
<th>PHONE NUMBER</th>
<th>CITY NAME</th>
<th>BRANCH POST</th>
<th>SENIORITY</th>
<th>ADDRESS</th>
</tr>
<TR>
<TD>$NEWNAME</TD>
<td>$NEWPHONENO1</td>
<td>$NEWCITYNAME</td>
<td>$NEWBRANCHPOST</td>
<td>$NEWSENIORITY</td>
<td>$NEWADDRESS</td>
</TR>

</table>
</center>
</body>
</html>";


