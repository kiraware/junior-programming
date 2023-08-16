<?php
    /**
     * Trying to connect
     * HOST = 'localhost'
     * USER = 'root'
     * PASSWORD = ''
     * DATABASE = 'kodea'
     * */
    $con = new mysqli('localhost', 'root', '', 'kodea');

    // Checking connection
    if (!$con) {
        // Connection Failed
        die(mysqli_error($con));
    }
?>