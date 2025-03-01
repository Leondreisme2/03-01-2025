<?php
include "conn.php";
session_start();

// This code is for registration
if(isset($_POST['reg'])){
    // echo "this is Reg!"; ging comment ko nlng kay gina pa delete ni sir

    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    //validate
    $check_email = mysqli_query($conn, "SELECT * FROM customers WHERE Email = '$email' ");
    $num_eamil = mysqli_num_rows($check_email);

    if($num_eamil <= 0){

        //insert data in your db
    $insert = mysqli_query($conn, "INSERT INTO customers VALUES('0', '$fn', '$ln', '$email', '$pass')");
    echo "Successfull Registration";



    if($insert == TRUE){
        ?>
            <script>
                alert("Successfull in Registration");
                window.location.href="index.php"
            </script>
        <?php    

    }else{
        ?>
            <script>
                alert("Error in Registration");
                window.location.href="index.php"
            </script>
        <?php 


    }

    }else{
        ?>
        <script>
            alert("Email Already Exist");
            window.location.href="index.php"
        </script>
    <?php 


    }
  
 
    
    
    // gina pa delete kay para sa bag ohanon lng
    // echo $fn."</br>";
    // echo $ln."</br>";
    // echo $email."</br>";
     //echo $pass."</br>";

    
    
}//Closing of registration


// this code is for log in  


if(isset($_POST['log'])){


    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $check_login = mysqli_query($conn,"SELECT * FROM customers WHERE Email = '$email'AND PASSWORD = '$pass' ");
    $num_login = mysqli_num_rows($check_login);


    if($num_login <= 0){
            $_SESSION['myemail'] = $email;
        ?>
            <script>
                alert("Successfull in \nWELCOME CUSTOMERS");
                window.location.href="customer/index.php";
            </script>
        <?php   
    }else{
        ?>
            <script>
                alert("WRONG EMAIL OR PASSWORD");
                window.location.href="index.php";
            </script>
        <?php 

    }

    // echo $email."</br>";
    // echo $pass."</br>";

    //echo "This is Login";


}




?>