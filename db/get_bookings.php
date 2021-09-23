<?php 
include('./db/db.php');

$sql ="SELECT description, book_date, capacity, us.name from bookings bk  inner join venues vs on bk.venue_id = vs.id inner join users us on vs.responsible_id = us.id where bk.id in (select id from bookings where user_id={$_SESSION['id']})";

$query = mysqli_query($connection, $sql);
$rowCount = mysqli_num_rows($query);

if(!$query){
    die("SQL query failed: " . mysqli_error($connection));
} 


?>