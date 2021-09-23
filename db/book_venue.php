<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    include('db.php');

    global $error;

    if(isset($_POST['submit'])) {
        $venue  = $_SESSION['venue'];
        $book_date  = $_POST['book_date'];
        $id = $_SESSION['id'];

        

        $email_check_query = mysqli_query($connection, "SELECT * FROM bookings WHERE book_date = '{$book_date}' and venue_id = '{$venue}'");
        $rowCount = mysqli_num_rows($email_check_query);


        if($rowCount == 0){
            $sql = "INSERT INTO bookings (`user_id`,`book_date`, `venue_id`) VALUES ('{$id}', '{$book_date}', '{$venue}')";
                    
            $sqlQuery = mysqli_query($connection, $sql);

            if(!$sqlQuery){
                die("MySQL query failed!" . mysqli_error($connection));
            } 

            header("Location: ../index.php");
        } else {
            $error = "Failed to book";

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        
        
        
    }

?>