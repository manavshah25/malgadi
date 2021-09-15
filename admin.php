

<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
 
  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</head>

<body>

    <h2 class="admin">ADMIN TABLE</h2>
    <a id="siginout" href="logout.php">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 172 172" style=" fill:#000000;"><g transform="translate(5.59,5.59) scale(0.935,0.935)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g fill="#000000" stroke="#cccccc" stroke-width="12" stroke-linejoin="round"><path d="M125.29349,29.70807c2.59128,1.82132 3.21546,5.39843 1.39414,7.98971c-1.82132,2.59128 -5.39843,3.21546 -7.98971,1.39414c-9.29479,-6.54136 -20.49121,-10.42526 -32.69792,-10.42526c-31.73133,0 -57.33333,25.60201 -57.33333,57.33333c0,31.73133 25.60201,57.33333 57.33333,57.33333c12.20671,0 23.40313,-3.8839 32.69792,-10.42526c2.59128,-1.82132 6.16839,-1.19714 7.98971,1.39414c1.82132,2.59128 1.19714,6.16839 -1.39414,7.98971c-11.10441,7.81491 -24.64527,12.50808 -39.29349,12.50808c-37.92867,0 -68.8,-30.87133 -68.8,-68.8c0,-37.92867 30.87133,-68.8 68.8,-68.8c14.64823,0 28.18908,4.69317 39.29349,12.50807zM135.92031,59.01302l22.41823,22.41823c1.42648,1.08264 2.26523,2.76958 2.26743,4.56038c0.0022,1.7908 -0.83241,3.47979 -2.25623,4.56593l-22.42943,22.42942c-1.43802,1.49778 -3.5734,2.10113 -5.5826,1.57735c-2.0092,-0.52378 -3.57826,-2.09284 -4.10204,-4.10204c-0.52378,-2.0092 0.07957,-4.14458 1.57735,-5.5826l13.14636,-13.14636h-60.69271c-2.06765,0.02924 -3.99087,-1.05709 -5.03322,-2.843c-1.04236,-1.78592 -1.04236,-3.99474 0,-5.78066c1.04236,-1.78592 2.96558,-2.87225 5.03322,-2.843h60.69271l-13.14636,-13.14636c-1.6719,-1.62719 -2.19121,-4.10513 -1.31331,-6.26668c0.8779,-2.16155 2.97794,-3.57567 5.31096,-3.57628c1.54801,0.00009 3.03022,0.62609 4.10964,1.73568z"></path></g><path d="M0,172v-172h172v172z" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><g fill="#000000" stroke="none" stroke-width="1" stroke-linejoin="miter"><path d="M86,17.2c-37.92867,0 -68.8,30.87133 -68.8,68.8c0,37.92867 30.87133,68.8 68.8,68.8c14.64823,0 28.18908,-4.69316 39.29349,-12.50808c2.59128,-1.82132 3.21546,-5.39843 1.39414,-7.98971c-1.82132,-2.59128 -5.39843,-3.21546 -7.98971,-1.39414c-9.29479,6.54135 -20.49121,10.42526 -32.69792,10.42526c-31.73133,0 -57.33333,-25.60201 -57.33333,-57.33333c0,-31.73133 25.60201,-57.33333 57.33333,-57.33333c12.20671,0 23.40313,3.8839 32.69792,10.42526c2.59128,1.82132 6.1684,1.19714 7.98971,-1.39414c1.82132,-2.59128 1.19714,-6.1684 -1.39414,-7.98971c-11.10441,-7.81491 -24.64527,-12.50807 -39.29349,-12.50807zM131.81067,57.27734c-2.33302,0.00061 -4.43306,1.41473 -5.31096,3.57628c-0.8779,2.16155 -0.3586,4.6395 1.31331,6.26668l13.14636,13.14636h-60.69271c-2.06765,-0.02924 -3.99087,1.05709 -5.03322,2.843c-1.04236,1.78592 -1.04236,3.99474 0,5.78066c1.04236,1.78592 2.96558,2.87225 5.03322,2.843h60.69271l-13.14636,13.14636c-1.49778,1.43802 -2.10113,3.5734 -1.57735,5.5826c0.52378,2.0092 2.09284,3.57826 4.10204,4.10204c2.0092,0.52378 4.14458,-0.07957 5.5826,-1.57735l22.42943,-22.42942c1.42382,-1.08614 2.25843,-2.77513 2.25623,-4.56593c-0.0022,-1.7908 -0.84095,-3.47774 -2.26743,-4.56038l-22.41823,-22.41823c-1.07942,-1.10959 -2.56163,-1.73559 -4.10964,-1.73568z"></path></g><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path></g></g></svg>
                </a>
    <span>Product Access</span>
    <table>
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Item Price</th>
                <th>Description</th>
            </tr>
        </thead>
        <?php
        
        include "db_connect.php";
    
        $sql = "SELECT * FROM `product_details`";
        $result = mysqli_query($conn, $sql) or die("Query failed");
        if(mysqli_num_rows($result) > 0){
        ?>

        <tbody>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['product_name'];?></td>
                <td><?php echo $row['quantity'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['description'];?></td>
                <td><a href="modify.php?prodname=<?php echo $row['product_name']; ?>"><button class="btn">Modify</button></a></td>
                <td><a href="delete.php?prodname=<?php echo $row['product_name']; ?>"><button class="btn">Delete</button></a></td>
            </tr>
        <?php } ?>
        <?php } ?>
        </tbody>
        
    </table>

</body>

</html>
<?php

    }
    else {
      ?>
      <div class="session">
      <h style="text-align:center;">your session has been expired so login again for enjoying serivice</h><br>
      <a href="login.php">login again</a>
      </div>
      <?php
     
  }
   ?>
