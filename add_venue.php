<?php
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['user'])){
    header("Location: index.php");
}


?>
  <?php include("header.php") ?>
    
    <div style="display: flex; justify-content: center;padding: 10px; margin-top: 10px;">
        <div style="width: 400px;">
            <h1>
                Add Venue
            </h1>

            <form action="db\savevenue.php" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <input type="text" class="form-control" id="description" name="description" />
                </div>
                <div class="mb-3">
                  <label for="capacity" class="form-label">Capacity</label>
                  <input type="number" class="form-control" id="capacity" name="capacity" />
                </div>
                <div class="mb-3">
                  <label for="image" class="form-label">Image</label>
                  <!-- <input id="image" type="file" class="border-gray-200 border-2 px-10 py-2 rounded-lg"  /> -->
                  <input type="file" name="fileToUpload" id="fileToUpload">

                </div>
        
                <button type="submit" class="btn btn-primary" style="width: 100%;" name="submit">Add</button>
              </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>