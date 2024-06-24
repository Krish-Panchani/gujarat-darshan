<?php
$title = "About Us | Best Tempo Rental Service in Ahmedabad | Gujarat Darshan";
$desc = "Looking for best tempo rental services in Ahmedabad? Hire tempo traveller from us and enjoy your trip now. Contact us or Book our Tempo Now!";
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
            <div class="max-w-screen-xl mx-auto px-4 py-16 gap-12 text-gray-600 overflow-hidden md:px-8 md:flex">
                <div class="flex flex-col space-y-5 max-w-xl justify-between ">
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
                        About <span class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-transparent">Gujarat Darshan</span>
                    </h1>
                    <p>We at <strong>Gujarat Darshan</strong> offers various type of <strong>Tour Packages, Travel Packages</strong> and also provide<a class="text-red-400 font-bold" href="https://www.gujaratdarshans.com/car-hire-in-ahmedabad/"> Car rental service</a>. Your complete package to travel your destination at one stop. Our passion to provide the best packages is to make your holidays more memorable and beautiful.

                    </p>
                    <p>
                        Every destination has its own beauty , and we make sure to give you the perfect holiday destination as you thought for! <strong>Packages for Family Trip</strong>, Honeymoon Trip, Solo trip, Business holiday, etc. Relax and leave on us about your travel planning!
                    </p>
                    <p>
                        From accommodation and transportation to sightseeing and activities, we take care of all your travel needs. Discover the wonders of Gujarat with Gujarat Darshan
                    </p>
                    <div class="flex items-center gap-x-3 text-sm sm:text-xs">
                        <a href="javascript:void(0)" class="flex items-center justify-center gap-x-1 py-2 px-4 text-white font-medium bg-gray-800 duration-150 hover:bg-gray-700 active:bg-gray-900 rounded-full md:inline-flex">
                            View Car Rentals
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
                <div class="flex-1 sm:pt-4 pt-12">
                    <!-- Replace with your image -->
                    <img src="./images/about-img.webp" class="max-w-xs sm:max-w-md " />
                </div>
            </div>
        </section>
    </div>
</div>

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
    </div>
    <div class="absolute inset-0 max-w-md mx-auto h-72 blur-[118px]" style="background: linear-gradient(152.92deg, rgba(192, 132, 252, 0.2) 4.54%, rgba(232, 121, 249, 0.26) 34.2%, rgba(192, 132, 252, 0.1) 77.55%)"></div>
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