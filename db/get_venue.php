<?php 
include('./db/db.php');

$sql = "select * from venues v inner join users u on v.responsible_id = u.id where v.id=".$_SESSION['venue'];
$query = mysqli_query($connection, $sql);
$rowCount = mysqli_num_rows($query);

if(!$query){
    die("SQL query failed: " . mysqli_error($connection));
}


?>