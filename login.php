<?php

session_start();
$showError=false;
$showErrorsever=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $servername="localhost";
$username="root";
$password="";
$database="malgadi";
     $conn=mysqli_connect($servername,$username,$password,$database);
     if(!$conn)
     {
         die("<center>"."sorry we failed to connect:".mysqli_connect_error()."</center>");
    
     }
   
 else{


    $username=$_POST["username"];

    $password=$_POST["password"];
    if($username=="admin" && $password=="admin123");
    {
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        header("location: admin.php");


    }
    $var= base64_encode($password);
    $s="SELECT * FROM `admin_table` WHERE `username`='$username' and `password`='$var'";
        $re=mysqli_query($conn,$s);
        $dras= mysqli_num_rows($re);

        if($dras!=1)
        {
            
            $showError="invaild ceretainals";
        }
        else{

            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
            $sql="SELECT * FROM `admin_table`";
            $ret=mysqli_query($conn,$sql);
            $usercount= mysqli_num_rows($ret);
            $_SESSION['email']=$row['email id'];
            $_SESSION['usercount']=$usercount;
            header("location: front.php");



      
           

        }
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style1.css">
        <style>
body {
    overflow: hidden;
}
        </style>
    </head>

    <body>

        </header>
        <?php
if($showError){
        echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong>'.$showError.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';}
        if($showErrorsever){
            echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong>'.$showErrorsever.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>';}
    ?>



            <form action="login.php" method="post">
                <div class="container-login1" id="login3">

                    <h2> User Login</h2>

                    <label for="username">Username</label><br>
                    <input type="text" name="username" size="40px" placeholder="Username" required>
                    <br>
                    <br>
                    <br>
                    <label for="password">Password</label>
                    <div class="forget1"><a href="forgot1.php">Forgot Passward</a></div>
                    <input type="password" name="password" class="login_user" id="email" size="40px" placeholder="password" required><i class="fas fa-eye"></i>
                    <br>
                    <br>
                    <br>
                    <input type="submit" class="login-btn9" value="LOG IN" name="submit"></input>

                    <h4 style="margin-left:10px;font-size:20px;">
                        New user ?
                        <div id="myBtn9">
                            <a href="sigin.php"> sign up</h>
                </a></div>
                    </h4>
                </div>
            </form>
<div class="svg1">
           <a href="index.html"><img src="arrow.png" width="50"></a></div>
            <script>
                let pho = document.querySelector('.svg1');
                pho.addEventListener("click", function() {
                   pho.style.color = "red";
                })
            </script>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

            <section>
                <!-- <button><a href="index.php">Home page</a></button> -->
            </section>

    </body>

    </html>