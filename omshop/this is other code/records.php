<?php
    include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>

</head>
<body>

    <a href="index.php"> Add Data </a> &nbsp; | &nbsp;
    <a href="records.php"> View Records </a> <br>

    <h1> List of Records </h1>

    <table border = 1>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

        <?php
            $select = mysqli_query($conn, "SELECT * FROM profile");
            while($get_records = mysqli_fetch_array($select)) {

            
        ?>

        <tr>
            <td><?php echo $get_records['id']?></td>
            <td><?php echo $get_records['fn']?></td>
            <td><?php echo $get_records['email']?></td>
            <td><a href="update.php?id=<?php echo $get_records['id']; ?>"> Update </a></td>
            <td><a href="delete.php?id=<?php echo $get_records['id']; ?>"> Delete </a></td>

        </tr>

        <?php
        }
        ?>

    </table>
    
</body>
</html>