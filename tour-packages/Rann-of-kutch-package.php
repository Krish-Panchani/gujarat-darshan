<?php require_once "_header.php"; ?>
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
            <?php require_once "../_breadcrumbs.php"; ?>
            <div class="max-w-screen-xl mx-auto px-4 py-10 gap-12 text-gray-600 overflow-hidden md:px-8 md:flex">
                <div class="flex flex-col space-y-5 max-w-4xl justify-between ">
                    <h1 class="text-4xl text-gray-800 font-extrabold sm:text-5xl">
                        <span class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-transparent">Run Of Kutch </span>
                        Tour Packages
                    </h1>
                    <p>
                        Embark on a holy pilgrimage to Somnath, Gujarat, and discover serenity amidst sacred sites. Our curated selection of hotels caters to every traveler's need, from budget-friendly options near the Somnath Temple to luxurious resorts with breathtaking views. Immerse yourself in Gujarati hospitality and create lasting memories in Somnath.
                    </p>

                </div>
            </div>

                <section class="flex justify-evenly flex-col md:flex-row">
                    <div class="mt-6 max-w-screen-xl mx-auto px-4 md:px-8">
                        <ul class="mt-6 space-y-6">
                        <?php require_once "../_db-conn.php"; ?>
                            <?php
                            $query = "SELECT * FROM tour_packages_gd WHERE package_name = 'Runn Of Kutch Package'";

                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                $tours = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                foreach ($tours as $tour) {
                                    $tour_name = $tour['tour_name'];
                                    $tour_price = $tour['tour_price'];
                                    $tour_duration = $tour['tour_duration'];
                                    $starting_point = $tour['starting_point'];
                                    $destination = $tour['destinations'];
                                    $tour_overview = $tour['tour_overview'];

                            ?>
                                    <li class="p-5 bg-white rounded-xl border-2 border-red-500 shadow-sm">
                                        <a :href="item.href">
                                            <div>
                                                <div class="justify-between sm:flex">
                                                    <div class="flex-1">
                                                        <h3 class="text-xl font-bold text-green-700"><?php echo $tour_name; ?></h3>
                                                        <p class="text-gray-500 mt-2 pr-2"> <?php echo $tour_overview; ?></p>
                                                        <p class="text-gray-500 mt-2 pr-2 flex items-center">
                                                            <svg class="w-5 h-5 font-semibold mr-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                                <circle cx="12" cy="12" r="9" />
                                                                <polyline points="12 7 12 12 15 15" />
                                                            </svg>

                                                            <span class="font-semibold mr-2">Duration:</span>
                                                            <?php echo $tour_duration; ?>
                                                        </p>
                                                        <p class="text-gray-500 mt-2 pr-2 flex items-center">
                                                            <svg class="w-5 h-5 font-semibold mr-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                                <path d="M9 5h10l2 2l-2 2h-10a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                                                <path d="M13 13h-7l-2 2l2 2h7a1 1 0 0 0 1 -1v-2a1 1 0 0 0 -1 -1" />
                                                                <line x1="12" y1="22" x2="12" y2="17" />
                                                                <line x1="12" y1="13" x2="12" y2="9" />
                                                                <line x1="12" y1="5" x2="12" y2="3" />
                                                            </svg>

                                                            <span class="font-semibold mr-2">Direction:</span>
                                                            <?php echo $destination; ?>
                                                        </p>
                                                    </div>
                                                    <div class="flex flex-col justify-center items-center mt-5 space-y-4 text-sm sm:mt-0 sm:space-y-2">
                                                        <span class="flex flex-col items-center text-gray-500">
                                                            <span class="font-bold text-green-500 text-xl">₹ <?php echo $tour_price; ?></span>
                                                            <span class="text-gray-500 font-semibold text-sm">Per Person</span>
                                                        </span>
                                                        <button class="flex items-center px-2 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                                                                <path fill-rule="evenodd" d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                                                                <path fill-rule="evenodd" d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                                                            </svg>


                                                            <span class="mx-1">View More</span>
                                                        </button>
                                                        <button class="flex items-center px-2 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-red-500 rounded-lg hover:bg-red-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                                                                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                                                            </svg>


                                                            <span class="mx-1">Enquiry Now</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="mt-4 items-center space-y-4 text-sm sm:flex sm:space-x-4 sm:space-y-0">
                                                    <span class="flex items-center text-gray-500">
                                                        <svg class="size-5 mr-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" />
                                                            <circle cx="7" cy="17" r="2" />
                                                            <circle cx="17" cy="17" r="2" />
                                                            <path d="M5 17h-2v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" />
                                                        </svg>
                                                        <span>Transfers</span>
                                                    </span>
                                                    <span class="flex items-center text-gray-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
                                                            <path d="M19.006 3.705a.75.75 0 1 0-.512-1.41L6 6.838V3a.75.75 0 0 0-.75-.75h-1.5A.75.75 0 0 0 3 3v4.93l-1.006.365a.75.75 0 0 0 .512 1.41l16.5-6Z" />
                                                            <path fill-rule="evenodd" d="M3.019 11.114 18 5.667v3.421l4.006 1.457a.75.75 0 1 1-.512 1.41l-.494-.18v8.475h.75a.75.75 0 0 1 0 1.5H2.25a.75.75 0 0 1 0-1.5H3v-9.129l.019-.007ZM18 20.25v-9.566l1.5.546v9.02H18Zm-9-6a.75.75 0 0 0-.75.75v4.5c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75H9Z" clip-rule="evenodd" />
                                                        </svg>
                                                        <span>Stay</span>
                                                    </span>

                                                    <span class="flex items-center text-gray-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
                                                            <path d="M4.5 4.5a3 3 0 0 0-3 3v9a3 3 0 0 0 3 3h8.25a3 3 0 0 0 3-3v-9a3 3 0 0 0-3-3H4.5ZM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06Z" />
                                                        </svg>
                                                        <span>Sightseening</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>

                    <div>
                        <div class="mt-12 mx-auto px-4 p-8 bg-white sm:max-w-lg sm:px-8 sm:rounded-xl">
                            <h3 class="text-red-400 font-semibold">
                                Contact Us
                            </h3>
                            <p class="text-black text-2xl font-semibold sm:text-3xl pb-6">
                                Get Free Quote
                            </p>
                            <form onsubmit="event.preventDefault()" class="space-y-5">
                                <div>
                                    <label class="font-medium">
                                        Full name
                                    </label>
                                    <input type="text" required class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-gray-800 shadow-sm rounded-lg" />
                                </div>
                                <div>
                                    <label class="font-medium">
                                        Email
                                    </label>
                                    <input type="email" required class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-gray-800 shadow-sm rounded-lg" />
                                </div>
                                <div>
                                    <label class="font-medium">
                                        Phone number
                                    </label>
                                    <div class="relative mt-2">
                                        <input type="text" placeholder="+1 (555) 000-000" required class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-gray-800 shadow-sm rounded-lg" />
                                    </div>
                                </div>
                                <div>
                                    <label class="font-medium">
                                        Message
                                    </label>
                                    <textarea required class="w-full mt-2 h-36 px-3 py-2 resize-none appearance-none bg-transparent outline-none border focus:border-gray-800 shadow-sm rounded-lg"></textarea>
                                </div>
                                <button class="w-full px-4 py-2 text-white font-medium bg-gray-800 hover:bg-gray-700 active:bg-gray-900 rounded-lg duration-150">
                                    Submit
                                </button>
                            </form>
                        </div>

                    </div>
                </section>
            </div>
        </section>
    </div>
</div>

<?php require_once "_footer.php"; ?>
</body>

</html>