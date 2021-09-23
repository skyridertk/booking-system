<?php     

    if(!isset($_SESSION)) {
        session_start();
    }

    if(isset($_SESSION['user'])){
        header("Location: index.php");
    }

?>

    <?php include("header.php") ?>

    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div style="width: 300px;">
            <h1>
                Sign In
            </h1>

            <form action="db\login.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email_signin" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                
                <button type="submit" class="btn btn-primary" name="login">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>