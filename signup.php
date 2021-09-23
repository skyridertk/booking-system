<?php     

    if(!isset($_SESSION)) {
        session_start();
    }

    if(isset($_SESSION['user'])){
        header("Location: index.php");
    }

    
;?>

<?php include("header.php") ?>

    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div style="width: 300px;">
            <h1>
                Register
            </h1>

            <php echo $email_exist; ?>

            <form action="db/register.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputName" name="name">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>