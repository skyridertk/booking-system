<?php
    ob_start();

    if(!isset($_SESSION)) {
        session_start();
    }

    include('db.php');
    
    if(isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $email_check_query = mysqli_query($connection, "SELECT * FROM users WHERE email = '{$email}' ");
        $rowCount = mysqli_num_rows($email_check_query);

        if(!empty($name) && !empty($email) && !empty($password)){
            
            if($rowCount == 0) {
                
                $_name = mysqli_real_escape_string($connection, $name);
                $_email = mysqli_real_escape_string($connection, $email);
                $_password = mysqli_real_escape_string($connection, $password);
        
                $password_hash = password_hash($password, PASSWORD_BCRYPT);

                $sql = "INSERT INTO users (`name`, `email`, `password`) VALUES ('{$name}','{$email}','{$password_hash}')";
                
                $sqlQuery = mysqli_query($connection, $sql);

            
                if(!$sqlQuery){
                    die("MySQL query failed!" . mysqli_error($connection));

                } else {
                    $last_id = $connection->insert_id;

                    $_SESSION['id'] = $last_id;
                    $_SESSION['name'] = $name;
                    $_SESSION['email'] = $email;
                    $_SESSION['user'] = $last_id;
                }

                

            }

            header("Location: ../index.php");
        } else {
            
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    } 




?>