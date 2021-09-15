<?php
$servername="localhost";
$username="root";
$password="";
$database="malgadi";
 $conn=mysqli_connect($servername,$username,$password,$database);
 if(!$conn)
 {
     die("<center>"."sorry we failed to connect:".mysqli_connect_error()."</center>");

 }
 ?>