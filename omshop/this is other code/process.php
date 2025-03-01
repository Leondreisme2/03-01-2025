<?php
    include "conn.php";

    if(isset($_POST['submit'])) {
        $fn = $_POST['fn'];
        $email = $_POST['email'];

        $val = mysqli_query($conn, "SELECT * FROM profile WHERE email = '$email'");
        $val_num = mysqli_num_rows($val);

        if($val_num >= 1) {
            ?>

            <script>
                alert("This email is already taken!");
                window.location.href = "index.php";
            </script>

            <?php
        }
        else {
            $insert = mysqli_query($conn, "INSERT INTO profile
            VALUES('0', '$fn', '$email')");

            if($insert == true) {
                ?>
                    <script>
                        alert("Data successfully inserted!");
                        window.location.href = "records.php";
                    </script>
                <?php
            }
            else {
                ?>
                    <script>
                        alert("Error!");
                        window.location.href = "index.php";
                    </script>
                <?php
            }

        }
    }

    if(isset($_POST['save'])) {

        $id = $_GET['id'];
        $fn = $_POST['fn'];
        $email = $_POST['email'];

        $update = mysqli_query($conn, "UPDATE profile
        SET fn = '$fn', email = '$email'
        WHERE id = '$id'");

        if($update == true) {
            ?>
                <script>
                    window.alert("Data Updated!");
                    window.location.href = "records.php";
                </script>
            <?php
        }
    }

?>