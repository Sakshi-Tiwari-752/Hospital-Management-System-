<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname="appointments";

$conn = mysqli_connect($servername, $username, $password, $dbname);

 if($conn)
 {
   // echo "Connection ok";
  //  echo "<script>window.open('appointment.php' , '_self')</script>";
 }
else{
    echo "Connection failed".mysqli_connect_error();
}

?>
