<?php

    $conn = mysqli_connect("localhost", "root", "");

    $db_name = "orocio";

    $db_connection = mysqli_select_db($conn, $db_name);
?>