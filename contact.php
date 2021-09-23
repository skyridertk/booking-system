<?php
    if(!isset($_SESSION)) {
        session_start();
    }

?>

<?php include("header.php") ?>


    <section id="contact" class="flex justify-center min-h-screen">

        <div class="container flex flex-col p-8 items-center space-y-5">
            <div class="text-4xl font-bold uppercase"> Contact us</div>
            <div>
                Contact our team
            </div>
            <div class="flex p-3">

                <div>

                    <div class="flex space-x-5 items-center">
                    <a class="rounded-xl bg-red-400 text-white px-5 py-2" href="mailto:lynnmatope@gmail.com">
                            Email
                        </a>
                        <div>kev@gmail.com </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</body>

</html>