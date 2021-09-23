<?php
include('./db/db.php');

$sql = "SELECT * From venues";
$query = mysqli_query($connection, $sql);
$rowCount = mysqli_num_rows($query);

if(!$query){
    die("SQL query failed: " . mysqli_error($connection));
}

?>