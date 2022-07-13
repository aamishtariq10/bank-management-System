<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "bank system";

$connect = mysqli_connect($host, $username, $password, $database);
$accountno1 = $_POST['AB1'];
$sql= "delete from client where accountno='$accountno1'";
$transport = mysqli_query($connect, $sql);

if ($transport)
{
    echo "
 <html>
  <div style='margin-top: 200px'>
        
    <CENTER>
         <h1>
    CLIENT'S DATA SUCCESSFULLY DELETED
         </h1>
    </CENTER> 

  </div>
</html>";
}
