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

            <form id="registration" action="db/register.php" method="post" class="flex flex-col">
                <div class="mb-3 flex flex-col space-y-3">
                    <input type="text" placeholder="Name" class="rounded-lg bg-gray-200 px-4 py-2" id="exampleInputName" name="name" required>
                  </div>
                <div class="mb-3 flex flex-col space-y-3">
                  <input type="email" placeholder="Email" class="rounded-lg bg-gray-200 px-4 py-2" id="exampleInputEmail1" name="email" required>
                </div>
                <div class="mb-3 flex flex-col space-y-3">
                  <input type="password" placeholder="Password" class="rounded-lg bg-gray-200 px-4 py-2" id="exampleInputPassword1" name="password" required>
                </div>
                
                <button type="submit" class="rounded-lg text-white bg-green-500 px-4 py-2 " name="submit">Submit</button>
              </form>

              <div class="text-center">

                Already have an account? <span class="text-blue-400"><a href="login.php">Login</a></span>
            </div>
        </div>
    </div>
<script>
    // Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("#registration").validate({
    // Specify validation rules
    rules: {

      name: "required",
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 4
      }
    },
    // Specify validation error messages
    messages: {
      name: "Please enter your name",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 4 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
</body>
</html>