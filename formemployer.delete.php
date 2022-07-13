<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "bank system";

$connect = mysqli_connect($host, $username, $password, $database);

$cnic1 = $_POST['b1'];

$sql= "delete from employers where cnic='$cnic1'";
$transport = mysqli_query($connect, $sql);

if ($transport)
{
    echo "
 <html>
  <div style='margin-top: 200px'>
    
    <CENTER>
         <h1>
    EMPLOYERS DATA SUCCESSFULLY DELETED
         </h1>
    </CENTER> 

  </div>
  
    
 
    </html>
    ";
}

else
    {
        echo "
 <html>
  <div style='margin-top: 200px'>
    
    <CENTER>
         <h1>
    TRY AGAIN
         </h1>
    </CENTER> 

  </div>
  
    
 
    </html>
    ";
    }
