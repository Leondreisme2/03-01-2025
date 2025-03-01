<?php
    include "conn.php";

        $id = $_GET['id'];

        $delete = mysqli_query($conn, "DELETE FROM profile WHERE id = '$id'");
        
        if($delete == true) {
            ?>
                <script>
                    window.alert("Data Deleted!");
                    window.location.href = "records.php";
                </script>
            <?php
        }
?>