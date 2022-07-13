<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "bank system";

$connect = mysqli_connect($host, $username, $password, $database);
$retrieve1 =$_POST['abc2'];
$query_view="SELECT name1, cnic, phone_no, city, post, seniority, address from employers where cnic='$retrieve1'";
$trasport_query=mysqli_query($connect,$query_view);
if(mysqli_num_rows($trasport_query) > 0 )

      while($view=mysqli_fetch_assoc($trasport_query)){
    $viewname3 = $view['name1'];
    $viewphoneno = $view['phone_no'];
    $viewcity = $view['city'];
    $viewpost = $view['post'];
    $viewseniority = $view['seniority'];
    $viewaddress = $view['address'];

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
<th>PHONE NUMBER</th>
<th>CITY NAME</th>
<th>BRANCH POST</th>
<th>SENIORITY</th>
<th>ADDRESS</th>
</tr>
<TR>
<TD>$viewname3</TD>
<td>$viewphoneno</td>
<td>$viewcity</td>
<td>$viewpost</td>
<td>$viewseniority</td>
<td>$viewaddress</td>
</TR>

</table>
</center>
</body>
</html>";
}
else{
    "<h1 STYLE='color: #17a2b8; text-align: center'> RECORD NOT FOUND</h1>";
}
