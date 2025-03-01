<?php
    include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Update </title>
</head>
<body>

    <a href="index.php"> Add Data </a> &nbsp; | &nbsp;
    <a href="records.php"> View Records </a> <br>

    <h1> Update Profile </h1>

        <?php
            $id = $_GET['id'];

            $select_data = mysqli_query($conn, "SELECT * FROM profile WHERE id = '$id'");

            if($select_data) {
                while($row = mysqli_fetch_object($select_data)) {

                    $fn = $row -> fn;
                    $email = $row -> email;

                }
            }

        ?>

    <form action="process.php?id=<?php echo $id; ?>" method="POST">

        <label for="fn"> Full Name: </label> <br>
        <input type="text" name="fn" value="<?php echo $fn; ?>" required>

        <br><br>

        <label for="email"> Email Address: </label> <br>
        <input type="text" name="email" value="<?php echo $email; ?>" required>

        <br><br>

        <input type="submit" name="save" value="Save">
                    
    </form>

</body>
</html>