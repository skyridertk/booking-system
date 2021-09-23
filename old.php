<nav style="padding: 20px; max-width: 100vw; display: flex; justify-content: space-between;">
        <a href="index.php" style="text-decoration: none; font-size: 30px;">
            Venue Directory
        </a>
        
        <?php
                if(isset($_SESSION['user']))
                {
                    echo '<div>';
                    echo '<a style="color: #111;; padding: 5px; text-decoration: none; margin: 3px;" href="bookings.php">History</a>';
                    echo '<a style="padding: 5px; text-decoration: none; margin: 3px;" href="add_venue.php">Post Venue</a>';
                    echo '</div>';
                    echo '<div>';
                    echo '<a class="btn btn-danger" style="padding-left: 20px; padding-right: 20px; margin: 3px; text-decoration: none;" href="logout.php">Signout</a>';
                    echo '</div>';
                }
        ?>
                   
        
    </nav>