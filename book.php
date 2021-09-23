<?php
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_GET['venue'])){
    header("Location: index.php");
}

$_SESSION['venue'] = $_GET['venue'];

include ("./db/get_venue.php");


?>
    <?php include("header.php") ?>

    <div>
    
    <?php

    while($row = mysqli_fetch_array($query)) {

        echo '<div class="flex h-screen flex-col">';
            echo '<div class="px-5 py-2 mt-5">';
            echo '<span class="font-bold">Posted by</span>: '.$row["name"];
            echo '</div>';

            echo '<div class="px-5 py-2">';
            echo '<span class="font-bold">Capacity</span>: '.$row["capacity"];
            echo '</div>';

            echo '<div class="px-5 py-2">';
            echo '<div class="font-bold">Description</div>';
            echo $row["description"];
            echo '</div>';

            echo '<div class="p-5">';
            echo '<hr />';
            echo '</div>';

            echo '<div class="flex">';

                echo '<div class="flex w-6/12 p-5">';

                    echo '<img src="db/uploads/'.$row["image"].'"/>';

                echo '</div>';


                echo '<div class="w-6/12 p-5 space-y-3">';
                    echo '<div class="text-lg">';
                        echo 'Please choose date to book';
                    echo '</div>';

                    echo '<form action="./db/book_venue.php" method="post"  >';

                        echo '<div class="space-y-2">';
                            echo '<input type="date" name="book_date" class="py-3 px-5" required/>';

                            echo '<div>';
                                echo '<button class="px-4 py-2 bg-green-600 text-white mt-2 rounded-xl" type="submit" name="submit">';
                                    echo 'Proceed';
                                echo '</button>';
                            echo '</div>';
                        echo '</div>';

                    echo '</form>';

                echo '</div>';
            echo '</div>';

        echo '</div>';
        
        break;
    }

    ?>
    

    

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>