<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION['user'])){
        header("Location: lander.php");
    }

    include("./db/get_venues.php");

?>

<?php include("header.php") ?>

    <div class="p-5 min-h-screen">
        
        <?php

            if($rowCount <= 0) {
                echo 'No venues';
            } else {
                ?>
                <h1 class="text-6xl md:text-7xl font-bold mb-5 text-gray-600 text-center">
                    All Venues
                </h1>
                <?php
                
                echo '<div class="flex flex-wrap">';
                while($row = mysqli_fetch_array($query)) {
                    
                    echo '<div class="w-73 h-73 m-3 cursor-pointer shadow-lg p-1 bg-white rounded-lg" onclick="handleClick('.$row['id'].')">';
                        echo '<div>';
                        echo '<img src="db/uploads/'.$row["image"].'" class="w-64 h-40"/>';
                        echo '</div>';
                    
                    echo '</div>';
                }

                echo '</div>';
            }

        ?>



    </div>

    <script>

            function handleClick(id) {

                <?php
                    if(isset($_SESSION['user'])){

                        $_SESSION['venue_id'] = 12;

                        ?>

                        window.location = "book.php?venue="+id;

                        <?php
                    } else {
                        ?>
                        alert("Please login to book: ", id);

                        <?php
                    }
                ?>
                
            }

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>