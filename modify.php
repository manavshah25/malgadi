<?php 

if(isset($_POST['submit']))
{
    include "db_connect.php";
    $product1=$_POST['product'];
    $description=$_POST['description'];
    $img=$_POST['imglink'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];

$sqlr = "UPDATE product_details SET img_link='$img',description='$description',quantity='$quantity',price='$price' WHERE product_name='$product1'";


if(mysqli_query($conn,$sqlr)){
   
   
    header("Location: admin.php");
}else{
    echo "Cant update user record";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <style>
        body{
            overflow:hidden;
        }
        
.svg3{
    transform: rotate(90deg);
    position: absolute;
    top: 80%;
    left: 10%;
}

.svg3 a:hover {
    border: 3px solid #ee6e73;
    border-radius: 20px;
    padding: 25px;
    transition-duration: 0.5s;
}


        </style>
</head>
<body>
<?php 
     include "db_connect.php";
    $product = $_GET['prodname'];
    if(isset($_GET['prodname']))
    
    {
        $sql = "SELECT * FROM product_details WHERE product_name='$product'";
        $res=mysqli_query($conn,$sql) or die("Query Failed");;
    
        if($res){
            $row =mysqli_fetch_assoc($res);
        }

    ?>
    
<form action="modify.php" method="post">

       <div class="container-login">


           <h2 style="margin-top:7px;font-weight:540;">Udate the Product !!</h2><br>
           <!-- <label for="productname">Product Name</label><br>
           <input type="text" name="productname" size="35px" placeholder="?>" required>
           <br>
           <br> -->
           <input type="hidden"  name="product" value="<?php echo $row['product_name']?>" >
           <label for="imglink">Image link</label><br>
           <input type="text" name="imglink" size="35px" placeholder="<?php echo $row['img_link']?>" required>
           <br>
           <br> 
           <label for="description">Description</label><br>
           <input type="text" name="description" size="35px"  placeholder="<?php echo $row['description']?>" required>
           <br>
           <br>
           <label for="quantity">Quantity Available</label><br>
           <input type="text" name="quantity" size="35px" placeholder="<?php echo $row['quantity']?>"  required>
           <br>
           <br>
           <label for="price">Price of Product</label><br>
           <input type="text" name="price" size="35px"  placeholder="<?php echo $row['price']?>"  required>
           <br>
           <br>
           <input type="submit" class="login-btn" value="UPDATE" name="submit"></input>  
</div>
</form>
<div class="svg3">
           <a href="admin.php"><img src="arrow.png" width="50"></a></div>
<?php }?>

</body>
</html>