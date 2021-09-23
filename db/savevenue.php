<?php

include('db.php');

$upload_dir = 'uploads\\';
$server_url = $_SERVER['REQUEST_URI'];

if(isset($_POST["submit"])){
    $description = $_POST["description"];
    $capacity = $_POST["capacity"];
    $id = $_SESSION["id"];

    print_r(json_encode($_FILES["fileToUpload"]));
    
    $image = $_FILES["fileToUpload"];

    $image_name = $image["name"];
    $image_tmp_name = $image["tmp_name"];
    $error = $image["error"];

    if($error > 0){
        
        die(array("message" => "Error uploading file"));

        header("Location: ../index.php");
    }

    $random_name = rand(1000,1000000)."-".$image_name;
    $upload_name = $upload_dir.strtolower($random_name);
    $upload_name = preg_replace('/\s+/', '-', $upload_name);


    if(move_uploaded_file($image_tmp_name , $upload_name)) {

        $image_url = $random_name;
        
        $sql = "INSERT INTO venues (`responsible_id`,`description`,`capacity`, `image`) VALUES ('{$id}','{$description}','{$capacity}', '{$image_url}')";
                
        $sqlQuery = mysqli_query($connection, $sql);
        
        if(!$sqlQuery){
            
            die(array("message" => mysqli_error($connection), "status" => 1));
        }

        header("Location: ../index.php");
    }else
    {
        
        die(array("message" => "Error uploading file [H]"));
        header("Location: ../index.php");
    }
    
} 

   