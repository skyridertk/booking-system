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
    <h1 class="text-4xl md:text-4xl font-bold mb-5 text-gray-600 text-center">Trusted by individuals and organisations</h1>
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

    <section class="flex justify-center py-14 flex flex-col">
        <h1 class="text-6xl md:text-7xl font-bold mb-5 text-gray-600 text-center">
            Our services
</h1>
<div class="text-center mb-10">
                    <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
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

    <section>
    <div class="min-w-screen min-h-screen flex items-center justify-center py-5">
    <div class="w-full bg-white px-5 py-16 md:py-24 text-gray-800">
        <div class="w-full max-w-6xl mx-auto">
            <div class="text-center max-w-xl mx-auto">
                <h1 class="text-6xl md:text-7xl font-bold mb-5 text-gray-600">What people <br>are saying.</h1>
                <div class="text-center mb-10">
                    <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                </div>
            </div>
            <div class="-mx-3 md:flex items-start">
                <div class="px-3 md:w-1/3">
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=1" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">Kenzie Edgar.</h6>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Officially, this is my favourite playground<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=2" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">Stevie Tifft.</h6>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>I started using this platform recently and I must say I'm very impressed with the work<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                </div>
                <div class="px-3 md:w-1/3">
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=3" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">Tommie Ewart.</h6>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Very intuitive and ease to use platform<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6 ">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=4" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">Chibaba Godfree</h6>
                            </div>
                        </div>
                        <div class="w-full ">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Mukubata basa<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                </div>
                <div class="px-3 md:w-1/3">
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=5" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">Nevada Herbertson.</h6>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>We where able to find a venue for out wedding. It is very useful keep up the good work<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=6" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">Kris Stanton.</h6>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>There are two type of people in this world: those who like venue booking system and those who dont know about it<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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