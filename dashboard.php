<?php
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['user'])){
    header("Location: index.php");
}

include("header.php");

?>


    <section>
        <div class="p-5 text-4xl">
            Welcome <?php echo $_SESSION['name']; ?>
        </div>
    </section>
    
    <section>
        <div class="flex space-x-4 p-5">
            <a href="add_venue.php">
                <div class="px-4 py-2 bg-green-500 w-32 rounded-xl text-white text-center">
                    Add Venue
                </div>
            </a>

            <a href="bookings.php">
                <div class="px-4 py-2 bg-green-500 w-72 rounded-xl text-white text-center">
                    View your Bookings
                </div>
            </a>

            <a href="bookings.php">
                <div class="px-4 py-2 bg-green-500 w-72 rounded-xl text-white text-center">
                    Manage venues
                </div>
            </a>
        </div>
    </section>
</body>
</html>