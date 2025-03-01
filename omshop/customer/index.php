<?php
    include "../conn.php";
    session_start();

    $myemail = $_SESSION["myemail"];

   $get_name = mysqli_query($conn,"SELECT * FROM customers WHERE Email = '$myemail' "); 

   while($row = mysqli_fetch_object($get_name)){

    $fn = $row -> FirstName; 
    $ln = $row -> LastName;
    $name = $fn." ".$ln;

   }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name;?></title>
</head>
<body>
    <h1>Welcome customer</h1>

    <a href="logout.php">LOGOUT </a>
</body>
</html>