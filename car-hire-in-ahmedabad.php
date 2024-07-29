<?php
$title = "Luxury Car Rental in Ahmedabad | Car Hire in Ahmedabad";
$desc = "Gujarat Darshan provides Luxury Car Rental Services in Ahmedabad, enhancing comfort and joy for any occasion. Book your car hire now for a memorable experience!";
require_once "_header.php"; ?>
<?php require_once "_navbar.php"; ?>


<div class="relative" x-data="{ state: false }">
    <div class="absolute inset-0 blur-xl h-[580px]" style="
      background: linear-gradient(
         143.6deg,
        rgba(192, 132, 252, 0) 20.79%,
        rgba(232, 121, 249, 0.26) 40.92%,
        rgba(204, 171, 238, 0) 70.35%
      );
    "></div>
    <div class="relative">

        <!-- Section -->
        <section>
            <div class="max-w-screen-xl mx-auto px-4 py-8 gap-12 text-gray-600 overflow-hidden md:px-8 md:flex">
                <div class="flex flex-col space-y-5  justify-between ">
                    <!-- <a href="javascript:void(0)" class="inline-flex gap-x-6 items-center rounded-full p-1 pr-6 border text-sm font-medium duration-150 hover:bg-white">
                        <span class="inline-block rounded-full px-3 py-1 bg-indigo-600 text-white">
                            News
                        </span>
                        <p class="flex items-center">
                            Read the launch post from here
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fillRule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clipRule="evenodd" />
                            </svg>
                        </p>
                    </a> -->
                    <h1 class="text-4xl text-gray-800 font-extrabold sm:text-5xl">
                        Hire <span class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-transparent">Car </span>
                        In Ahmedabad
                    </h1>
                    <p>There are many reasons to consider hiring a car when visiting Gujarat. Not only is it a convenient way to get around, but it also gives you the freedom to explore the state at your own pace. Gujarat Darshan provides top-notch <strong>Luxury Car Rental In Ahmedabad</strong>, catering to the needs of both locals and tourists.
                    </p>
                    <div class="flex items-center gap-x-3 text-sm sm:text-xs">
                        <a href="#cars" class="flex items-center justify-center gap-x-1 py-2 px-4 text-white font-medium bg-gray-800 duration-150 hover:bg-gray-700 active:bg-gray-900 rounded-full md:inline-flex">
                            View Cars
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fillRule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clipRule="evenodd" />
                            </svg>
                        </a>
                        <a href="javascript:void(0)" class="flex items-center justify-center gap-x-1 py-2 px-4 text-gray-700 hover:text-gray-900 font-medium duration-150 md:inline-flex">
                            Contact Us Now
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fillRule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clipRule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- <div class="flex-1 sm:pt-4 pt-12">
                    <img src="./images/about-img.webp" class="max-w-xs sm:max-w-md " />
                </div> -->
            </div>
        </section>
    </div>
</div>
<section class="py-14" id="cars">
    <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-4">
        <div class="relative max-w-2xl mx-auto sm:text-center">
            <div class="relative z-10">
                <h2 class="text-gray-800 text-3xl font-semibold sm:text-4xl">
                    Best Cars on Rent in Ahmedabad
                </h2>
            </div>
            <div class="absolute inset-0 max-w-xs mx-auto h-44 blur-[118px]" style="
          background: linear-gradient(
            152.92deg,
            rgba(192, 132, 252, 0.2) 4.54%,
            rgba(232, 121, 249, 0.26) 34.2%,
            rgba(192, 132, 252, 0.1) 77.55%
          );
        "></div>
        </div>
        <div class="relative mt-12">
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 w-full">
                <?php
                $services = [
                    [
                        'image' => 'car-hire.png',
                        'title' => 'Maruti Swift Dzire',
                        'tag' => '4+1 comfortable seating',
                    ],
                    [
                        'image' => 'car-hire.png',
                        'title' => 'Maruti Ertiga',
                        'tag' => '6+1 comfortable seating',
                    ],
                    [
                        'image' => 'car-hire.png',
                        'title' => 'Toyota Crysta',
                        'tag' => '6+1 comfortable seating',
                    ],
                    [
                        'image' => 'car-hire.png',
                        'title' => 'Toyota Innova',
                        'tag' => '6+1 comfortable seating',
                    ],
                    [
                        'image' => 'car-hire.png',
                        'title' => 'Kia Carens',
                        'tag' => '6+1 comfortable seating',
                    ],
                ];

                foreach ($services as $service) {
                ?>
                    <div class="bg-white space-y-3 p-4 border-2 border-red-400 rounded-lg">
                        <img class="object-cover object-center" src="images/<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>">
                        <h3 class="text-lg font-semibold text-gray-800 text-center"><?php echo $service['title']; ?></h3>
                        <ul class="flex flex-col">
                            <li class="flex items-center text-base mt-2">
                                <svg class="w-6 h-6 text-gray-800 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd" />
                                </svg>
                                <?php echo $service['tag']; ?>
                            </li>
                            <li class="flex items-center text-base mt-2">
                                <svg class="w-6 h-6 text-gray-800 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd" />
                                </svg>
                                1 Cheaffeur + 1 Cleaner
                            </li>
                            <li class="flex items-center text-base mt-2">
                                <svg class="w-6 h-6 text-gray-800 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd" />
                                </svg>
                                300 kms per Day
                            </li>
                            <li class="flex items-center text-base mt-2">
                                <svg class="w-6 h-6 text-gray-800 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd" />
                                </svg>
                                300 rs Driver Allowance
                            </li>
                            <li class="flex items-center text-base mt-2">
                                <svg class="w-6 h-6 text-gray-800 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd" />
                                </svg>
                                Toll Tax and Parking Extra
                            </li>
                        </ul>
                        <a href="https://api.whatsapp.com/send/?phone=919558955867" target="_blank" class="flex justify-end">
                            <button class="mt-6 select-none font-sans font-bold text-center uppercase transition-all text-xs py-3 px-6 rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20" type="button">
                                Book Now
                            </button>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h3 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">
        Our Fleet Is Always Ready For You
        </h3>

        <div class="flex justify-center mx-auto mt-6">
            <span class="inline-block w-40 h-1 bg-red-500 rounded-full"></span>
            <span class="inline-block w-3 h-1 mx-1 bg-red-500 rounded-full"></span>
            <span class="inline-block w-1 h-1 bg-blue-red rounded-full"></span>
        </div>

        <div class="flex items-start max-w-6xl mx-auto mt-16">
            <div class="flex flex-col">
                <p class="text-center text-gray-500 lg:mx-8">
                Our fleet of vehicles is well-kept and has all modern amenities to give you a relaxed travel experience. We have a variety of cars available on rent, whether you need a car for work or tourist purposes. Our skilled drivers make sure you get there on time and in style.
                </p>
                <p class="text-center text-gray-500 lg:mx-8">
                Travel in Ahmedabad without fuss by booking your <strong>car rental in Ahmedabad</strong> with Gujarat Darshan right away.
                </p>

                <!-- <div class="flex flex-col items-center justify-center mt-8">
                    <img class="object-cover rounded-full w-14 h-14" src="https://images.unsplash.com/photo-1499470932971-a90681ce8530?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                    <div class="mt-4 text-center">
                        <h1 class="font-semibold text-gray-800 dark:text-white">Mia Brown</h1>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Marketer</span>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>


<section class="relative py-28 bg-gray-900">
    <div class="relative z-10 max-w-screen-xl mx-auto px-4 text-gray-300 justify-between gap-24 lg:flex md:px-8">
        <div class="max-w-xl">
            <h3 class="text-white text-3xl font-semibold sm:text-4xl">
                Let us show you the Gujarat
            </h3>
            <p class="mt-3">
                Let us show you the Gujarat that few know of – its rich tradition, diverse culture, delectable cuisine and its scintillating crafts.
            </p>
        </div>
        <div class="mt-12 lg:mt-0">
            <ul class="grid gap-8 sm:grid-cols-2">
                <?php
                $features = [
                    [
                        'icon' => '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.583 8.445h.01M10.86 19.71l-6.573-6.63a.993.993 0 0 1 0-1.4l7.329-7.394A.98.98 0 0 1 12.31 4l5.734.007A1.968 1.968 0 0 1 20 5.983v5.5a.992.992 0 0 1-.316.727l-7.44 7.5a.974.974 0 0 1-1.384.001Z"/>
                ',
                        'title' => 'Reasonable Price',
                        'desc' => 'We offer one of the most reasonable price throughout the market.'
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
              ',
                        'title' => '20+ Years of Experience',
                        'desc' => 'We are very proud to say that we can give you the best advice for your trip.'
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                ',
                        'title' => 'Professional Local Tour Guide',
                        'desc' => 'You will be full of information with our exceptional local tour guide.'
                    ],
                ];

                foreach ($features as $feature) {
                ?>
                    <li class="flex gap-x-4">
                        <div class="flex-none w-12 h-12 bg-gray-700 text-red-400 rounded-lg flex items-center justify-center">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <?php echo $feature['icon']; ?>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg text-gray-100 font-semibold">
                                <?php echo $feature['title']; ?>
                            </h4>
                            <p class="mt-3">
                                <?php echo $feature['desc']; ?>
                            </p>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="absolute inset-0 max-w-md mx-auto h-72 blur-[118px]" style="background: linear-gradient(152.92deg, rgba(192, 132, 252, 0.2) 4.54%, rgba(232, 121, 249, 0.26) 34.2%, rgba(192, 132, 252, 0.1) 77.55%)"></div>
    </div>
</section>

<section class="relative pb-8 bg-gray-900">
    <div class="relative z-10 max-w-screen-xl mx-auto px-4 md:px-8">
        <div class="z-10">
            <div class="max-w-6xl xl:mx-auto xl:text-center">
                <h3 class="text-white text-2xl font-semibold sm:text-3xl">
                Let Us Give You the Most Comfortable Trip in Gujarat
                </h3>
                <p class="mt-3 text-gray-300">
                Whether you’re travelling within Ahmedabad or visiting Modhera Sun Temple or having a fun time at the lovely beaches of Kutch, our services for <strong>Car Hire in Ahmedabad</strong> provide a variety of vehicle options.
                </p>
                <p class="mt-3 text-gray-300">
                From bustling cities to breath-taking natural settings, this charming state has something to please everyone and Gujarat Darshan’s car rental services is a great way to make the most of your time because there are so many things to see and do in Gujarat.
                </p>
                
            </div>
        </div>
    </div>
    <div class="absolute inset-0 max-w-md mx-auto h-80 blur-[118px] sm:h-72" style="background: linear-gradient(152.92deg, rgba(192, 132, 252, 0.2) 4.54%, rgba(232, 121, 249, 0.26) 34.2%, rgba(192, 132, 252, 0.1) 77.55%)"></div>
    </div>
</section>

<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("dropdown", () => ({
            open: false,
            toggle() {
                this.open = !this.open;
            },
            close() {
                this.open = false;
            },
            init() {
                this.$watch("open", (value) => {
                    if (value) {
                        this.$nextTick(() => {
                            window.addEventListener("click", this.close);
                        });
                    } else {
                        window.removeEventListener("click", this.close);
                    }
                });
            },
        }));
    });
</script>
<?php require_once "_footer.php"; ?>
</body>

</html>