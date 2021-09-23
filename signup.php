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
        <div class="w-72 space-y-10">
            <div class="font-bold text-2xl text-center">
                Register
            </div>

            <form action="db/register.php" method="post" class="flex flex-col">
                <div class="mb-3 flex flex-col space-y-3">
                    <input type="text" placeholder="Name" class="rounded-lg bg-gray-200 px-4 py-2" id="exampleInputName" name="name">
                  </div>
                <div class="mb-3 flex flex-col space-y-3">
                  <input type="email" placeholder="Email" class="rounded-lg bg-gray-200 px-4 py-2" id="exampleInputEmail1" name="email">
                </div>
                <div class="mb-3 flex flex-col space-y-3">
                  <input type="password" placeholder="Password" class="rounded-lg bg-gray-200 px-4 py-2" id="exampleInputPassword1" name="password">
                </div>
                
                <button type="submit" class="rounded-lg text-white bg-green-500 px-4 py-2 " name="submit">Submit</button>
              </form>

              <div class="text-center">

                Already have an account? <span class="text-blue-400"><a href="login.php">Login</a></span>
            </div>
        </div>
    </div>

</body>
</html>