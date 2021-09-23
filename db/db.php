<?php 
    ob_start();

    if(!isset($_SESSION)) {
        session_start();
    }

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "venues_booking";
    
    $connection = mysqli_connect($hostname, $username, $password, $dbname, 3306) or die("Database connection not established.")

?>