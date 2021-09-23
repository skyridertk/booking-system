<?php
    if(!isset($_SESSION)) {
        session_start();
    }

?>

<?php include("header.php") ?>

    <section id="main" class="w-screen h-screen flex items-center p-5" style="background-image: url('resources/main.jpg');min-height: 500px;background-size: cover;background-repeat: no-repeat;background-position: center;background-attachment: fixed;">
        <div>
            <div class="text-3xl text-white font-bold">
                Memorable events don’t just happen. They happen to be our business
            </div>
            <a href="signup.php">
                <div class="transition duration-500 ease-in-out transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none px-5 py-3 bg-green-500 hover:bg-green-700 w-72 text-lg text-white rounded-xl text-center my-3">
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
        Choose us
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

    <section class="flex justify-center py-14">
        <div class="font-bold text-2xl">
            Our services
        </div>
    </section>

    

    <section class="w-screen h-min-screen flex flex-col p-5 space-y-32 items-center" >
    <div class="flex shadow-lg rounded-xl bg-yellow-200 w-8/12">
                <div class="w-6/12 flex bg-red-400 text-white flex-col justify-center items-center">
                <div>Conferences</div>
               
</div>
<div class="w-6/12 h-72 p-2 transform  translate-x-4 translate-y-4" style="background-image: url('resources/conf.jpg');background-size: cover;background-repeat: no-repeat;"></div>
            </div>
            <div class="flex w-8/12 shadow-lg rounded-xl bg-red-400">
            <div class="w-6/12 h-72 p-2 " style="background-image: url('resources/church.jpg');background-size: cover;background-repeat: no-repeat;"></div>
                <div class="w-6/12 bg-blue-500 text-white flex flex-col justify-center items-center transform  translate-x-4 translate-y-4">
                    <div>Church gatherings</div>
                    
                </div>
                
                            </div>
            <div class="flex w-8/12 shadow-lg rounded-xl bg-green-400">
                <div class="w-6/12 bg-yellow-500 flex flex-col justify-center items-center">
                <div>Car showcase</div>
               
</div>

<div class="w-6/12 h-72 p-2 transform  translate-x-4 translate-y-4" style="background-image: url('resources/talk.jpg');background-size: cover;background-repeat: no-repeat;"></div>
            </div>

            <div class="flex w-8/12 shadow-lg rounded-xl bg-blue-400">
            <div class="w-6/12 h-72 p-2 bg-red-100" style="background-image: url('resources/conf.jpg');background-size: cover;background-repeat: no-repeat;"></div>
                <div class="w-6/12 bg-green-500 text-white flex flex-col justify-center items-center transform  translate-x-4 translate-y-4">
                    <div>Weddings</div>
        
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
                Book a venue today
            </div>
            </div>
                    
                
            <div>
            <a href="signup.php">
                <div class="transition duration-500 ease-in-out transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none px-5 py-3 bg-blue-500 hover:bg-blue-600 w-72 text-lg text-white rounded-xl text-center my-3">
                    Book
                </div>
            </a>
        </div>
        </div>
    </section>


    <footer class="bg-green-900 text-white text-center p-5">
        <div>
            Venue booking system  (c) 2021
        </div>
    </footer>
</body>
</html>