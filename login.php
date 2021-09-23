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
        <div class="w-72 space-y-10">
            <div class="font-bold text-2xl text-center">
                Sign in
            </div>

            <form action="db\login.php" method="post"  class="flex flex-col">
                <div class="mb-3 flex flex-col space-y-3">
                    <input type="email" placeholder="Email" class="rounded-lg bg-gray-50 px-4 py-2" id="email"  name="email">
                </div>
                <div class="mb-3 flex flex-col space-y-3">
                    <input type="password" placeholder="Password" class="rounded-lg bg-gray-50 px-4 py-2" id="password" name="password">
                </div>
                
                <button type="submit" class="rounded-lg text-white bg-green-500 px-4 py-2 " name="login">Submit</button>
            </form>

            <div class="text-center">

               New to the platform? <span class="text-blue-400"><a href="signup.php">Signup</a></span>
            </div>
        </div>
    </div>

</body>

</html>