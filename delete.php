<?php 
include "db_connect.php";

$product = $_GET['prodname'];
$sql = "DELETE FROM product_details WHERE product_name = '$product'";

if(mysqli_query($conn,$sql)){
   

    header("Location: admin.php");
}else{
    echo "Cant delete user record";
}
?>