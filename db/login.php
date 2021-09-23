<?php

    include('db.php');

    if(isset($_POST['login'])) {

        $email_signin  = $_POST['email'];
        $password_signin = $_POST['password'];

        $user_email = filter_var($email_signin, FILTER_SANITIZE_EMAIL);
        $pswd = mysqli_real_escape_string($connection, $password_signin);

        $sql = "SELECT * From users WHERE email = '{$email_signin}' ";
        $query = mysqli_query($connection, $sql);
        $rowCount = mysqli_num_rows($query);

        if(!$query){
           die("SQL query failed: " . mysqli_error($connection));
        }

        if(!empty($email_signin) && !empty($password_signin)){
            
            if($rowCount > 0)  {
               
                while($row = mysqli_fetch_array($query)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email  = $row['email'];
                    $pass_word = $row['password'];
                }

                $password = password_verify($password_signin, $pass_word);

                if($email_signin == $email && $password_signin == $password) {
                    
                    $_SESSION['id'] = $id;
                    $_SESSION['name'] = $name;
                    $_SESSION['email'] = $email;
                    $_SESSION['user'] = $id;

                 }

            }

            header("Location: ../index.php");

        } else {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

    }

?>