<?php
    if(!isset($_SESSION)) {
        session_start();
    }

?>

<?php include("header.php") ?>

    <section id="main" class="w-screen h-screen flex items-center p-5" style="background-image: url('resources/main.jpg');background-size: cover;background-repeat: no-repeat;">
        <div>
            <div class="text-3xl text-white font-bold">
                Memorable events don’t just happen. They happen to be our business
            </div>
            <a href="signup.php">
                <div class="px-5 py-3 bg-green-500 w-72 text-lg text-white rounded-xl text-center my-3">
                    Get Started
                </div>
            </a>
        </div>
    </section>

    <section class="flex justify-center py-20 flex flex-col space-y-10">
        <div class="font-bold text-2xl text-center">
        Trusted by companies and professionals
        </div>
        <div class="text-center">
        Useful platform
        </div>
        <div class="flex justify-evenly">
            <div class="h-32 w-72 bg-red-600 flex flex-col items-center justify-center rounded-lg text-white">
                <div>100%</div>
                <div>Availability</div>
            </div>
            <div class="h-32 w-72 bg-blue-600 flex flex-col items-center justify-center rounded-lg text-white">
                <div>24/7</div>
                <div>Accessibility</div>
            </div>
            <div class="h-32 w-72 bg-green-600 flex flex-col items-center justify-center rounded-lg text-white">
                <div>1000+</div>
                <div>Visitors</div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 flex justify-center py-14">
        <div class="font-bold text-2xl">
            What can you do
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


    <section class="py-20">
        <div class="flex justify-between px-5">
            <div class="flex flex-col">
                <div class="text-4xl font-bold">
                    Ready to dive in?
                </div>
                <div class="text-3xl text-blue-400 font-bold">
                Book an event today
            </div>
            </div>
                    
                
            <div>
            <a href="signup.php">
                <div class="px-5 py-3 bg-blue-500 w-72 text-lg text-white rounded-xl text-center my-3">
                    Book
                </div>
            </a>
        </div>
        </div>
    </section>


    <footer class="bg-green-600 text-white text-center p-5">
        <div>
            Venue booking system  (c) 2021
        </div>
    </footer>
</body>
</html>