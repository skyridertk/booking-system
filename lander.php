<?php
    if(!isset($_SESSION)) {
        session_start();
    }

?>

<?php include("header.php") ?>

    <section id="main" class="w-screen h-screen flex items-center p-5">
        <div>
            <div class="text-3xl ext-white font-bold">
                Memorable events don’t just happen. They happen to be our business
            </div>
            <a href="signup.php">
                <div class="px-3 py-2 bg-red-900 w-32 text-white rounded-xl m-3 text-center">
                    Get Started
                </div>
            </a>
        </div>
    </section>

    <section id="stats" class="bg-red-50 h-72 p-5">
        <div class="flex justify-between px-10">
            <div>
                Used by 10000+
            </div>
            <div>
                Secure
            </div>
            <div>
                Trusted
            </div>
        </div>
    </section>

    <section class="w-screen h-screen flex p-5">
        <div>
            <div>
                Conferences
            </div>
            <div>
                Church Gatherings
            </div>
            <div>
                Fun fairs
            </div>
            <div>
                Car showcase
            </div>
            <div>
                Business talks
            </div>
            <div>
                Wedding reception
            </div>
        </div>
    </section>

    <footer class="h-72 bg-red-100">
        <div>
            Venue booking system 2021
        </div>
    </footer>
</body>
</html>