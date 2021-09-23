<?php     
    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION['user'])){
        header("Location: index.php");
    }

    include("./db/get_bookings.php");
       
?>

    <?php include("header.php") ?>

    <div class="p-3">
        <h1>
            Booking History
        </h1>

        <?php
            if($rowCount <= 0) {
                echo 'No booking history';
            } else {
                ?>

                <table id="example" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th>Venue</th>
                        <th>Capacity</th>
                        <th>Book date</th>
                        <th>Responsible</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                while($row = mysqli_fetch_array($query)) {
                    
                    echo '<tr>';
                    echo '<td>'.$row['description'].'</td>';
                    echo '<td>'.$row['capacity'].'</td>';
                    echo '<td>'.$row['book_date'].'</td>';
                    echo '<td>'.$row['name'].'</td>';
                    echo '</tr>';
                }
                ?>
                <tbody>
                </table>
                <?php
            }

        ?>
            
    </div>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>