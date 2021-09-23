<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<?php
if(isset($_SESSION['user'])){
        ?>
            <nav>
        <div class="px-3 py-3 flex justify-between w-full bg-white shadow-lg" >
            <div class="flex">
                <a href="index.php">
                <div class="font-bold text-lg">
                    Venue Booking system
                </div>
                </a>
            </div>
            <div class="flex px-2 space-x-4">
                <a class="uppercase" href="index.php">Browse</a>
                <a class="uppercase" href="about.php">About</a>
                <a class="uppercase" href="contact.php">Contact</a>
                <a class="uppercase" href="dashboard.php">Dashboard</a>
                <a class="uppercase" href="logout.php">Logout</a>
            </div>
        </div>
    </nav>
        <?php
    }

    else {
        ?>
            <nav>
                <div class="px-3 py-3 flex justify-between w-full bg-white shadow-lg" >
                    <div class="flex">
                        <a href="lander.php">
                        <div class="font-bold text-lg">
                            Venue Booking system
                        </div>
                        </a>
                    </div>
                    <div class="flex px-2 space-x-4">
                        <a class="uppercase" href="lander.php">Home</a>
                        <a class="uppercase" href="about.php">About</a>
                        <a class="uppercase" href="contact.php">Contact</a>
                        <a class="uppercase" href="login.php">Login</a>
                        <a class="uppercase" href="signup.php">Register</a>
                    </div>
                </div>
            </nav>
        <?php
    }
?>


    