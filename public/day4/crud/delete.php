<?php
    require 'connect.php';

    if (isset($_GET['userId'])) {
        $id = $_GET['userId'];

        $sql = "DELETE FROM `crud` WHERE id=$id";
        $result = mysqli_query($con, $sql);

        if ($result) {
            // echo 'Deleted Successfully';
            header('location:display.php');
        } else {
            die(mysqli_error($con));
        }
    }
?>