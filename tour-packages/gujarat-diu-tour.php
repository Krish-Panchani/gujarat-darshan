<?php require_once "../_db-conn.php"; ?>
<?php

$id = 37;

$sql = "SELECT * FROM tour_packages_gd WHERE id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $tour = $result->fetch_assoc();

    $tour_name = $tour['tour_name'];
    $tour_price = $tour['tour_price'];
    $tour_duration = $tour['tour_duration'];
    $starting_point = $tour['starting_point'];
    $ending_point = $tour['ending_point'];
    $destination = $tour['destinations'];
    $tour_overview = $tour['tour_overview'];
    $tour_itinerary = $tour['tour_itinerary'];
    $tour_itinerary_array = json_decode($tour_itinerary, true);
    $meals = $tour['meals'];
    $title = $tour['title'];
    $desc = $tour['description'];
}


?>
<?php require_once "../_header.php"; ?>
<?php require_once "../_navbar.php"; ?>
<?php require_once "../_whatsapp_btn.php"; ?>
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
        <section>
            <div class="max-w-screen-xl mx-auto px-4 py-8 gap-12 text-gray-600 overflow-hidden md:px-8 md:flex">
                <div class="flex flex-col space-y-5 max-w-4xl justify-between ">
                    <h1 class="text-4xl text-gray-800 font-extrabold sm:text-5xl">
                        <span class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-transparent">Gujarat Diu Tour </span>
                        Package
                    </h1>
                    <p>
                        <?php echo $tour_overview; ?>
                    </p>

                </div>
            </div>
        </section>
    </div>

    <section class="tour-details-section relative mt-4 flex flex-col md:flex-row text-left w-[90%] m-auto gap-3 md:gap-0 z-20">

        <section class="tour_details flex flex-col w-full md:w-[70%] bg-white rounded-xl  h-auto gap-4">
            <div class="w-full flex flex-col shadow-lg h-auto py-3 p-3">
                <div class="tour-gallery-header px-2 py-4 w-full">
                    <div class="icon flex gap-2 items-center font-semibold">
                        <i class="fa-solid fa-map"></i>
                        <h3 class="text-xl font-bold">About Trip</h3>
                    </div>
                </div>
                <div class="tour-gallery w-full flex flex-col md:flex-row gap-3">
                    <div class="gallery-image w-full md:w-[40%] flex justify-center items-center">
                        <img class="rounded-xl w-full" src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8dHJhdmVsJTVDfGVufDB8fDB8fHww" alt="" />
                    </div>
                    <div class="gallery-desc flex flex-wrap w-full md:w-[60%]">
                        <?php
                        $gallery_desc_items = [
                            [
                                'icon' => 'fa-flag',
                                'label' => 'Tour Name',
                                'value' => $tour_name
                            ],
                            [
                                'icon' => 'fa-clock',
                                'label' => 'Tour Duration',
                                'value' => $tour_duration
                            ],
                            [
                                'icon' => 'fa-utensils',
                                'label' => 'Meals',
                                'value' => $meals
                            ],
                            [
                                'icon' => 'fa-map-marker-alt',
                                'label' => 'Starting Point',
                                'value' => $starting_point
                            ],
                            [
                                'icon' => 'fa-map-marker-alt',
                                'label' => 'Ending Point',
                                'value' => $ending_point
                            ],
                            [
                                'icon' => 'fa-map',
                                'label' => 'Destinations',
                                'value' => $destination
                            ],
                            [
                                'icon' => 'fa-car',
                                'label' => 'Transportation',
                                'value' => 'Air condition private vehicle with experienced driver'
                            ],
                            [
                                'icon' => 'fa-check',
                                'label' => 'Benefits',
                                'value' => 'Team of Highly experienced Experts, Hassle-Free Booking, Your Happiness Guaranteed, Best Price Guarantee'
                            ]
                        ];

                        foreach ($gallery_desc_items as $item) {
                            $icon = $item['icon'];
                            $label = $item['label'];
                            $value = $item['value'];
                        ?>
                            <div class="gallery-desc-item py-3 md:py-1 w-full md:w-1/2 flex gap-2">
                                <div class="gallery-desc-icon flex items-start pt-3">
                                    <i class="fa-solid <?php echo $icon; ?> text-base px-2"></i>
                                </div>
                                <div class="gallery-desc-content flex flex-col">
                                    <span class="font-bold text-sm md:text-base"><?php echo $label; ?></span>
                                    <span class="text-xs md:text-sm"><?php echo $value; ?></span>
                                </div>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="trip-itinerary w-full flex flex-col shadow-lg h-auto py-3 px-2">
                <div class="trip-itinerary-header flex justify-between px-2 py-4 w-full">
                    <div class="icon flex gap-2 items-center font-semibold">
                        <i class="fa-solid fa-map"></i>
                        <h3>Trip itinerary</h3>
                    </div>
                    <div class="flex gap-2 items-center">
                        <h3 class="uppercase text-[#be000b] font-semibold">Expand all</h3>
                        <i class="fa-solid fa-caret-down text-[#be000b]"></i>
                    </div>
                </div>
                <div class="trip-itinerary-details flex flex-col gap-2">

                    <?php
                    foreach ($tour_itinerary_array as $itinerary) {
                        $day = $itinerary['Day'];
                        $heading = $itinerary['Heading'];
                        $description = $itinerary['Description'];
                    ?>
                        <details class="border border-gray-400">
                            <summary class="font-bold border border-gray-400 list-none flex items-center">
                                <i class="fa-solid fa-location-dot p-4 bg-green-500 flex items-center justify-center text-white"></i>
                                <p class="pl-2 text-sm md:text-base"><?php echo htmlspecialchars($heading); ?></p>
                            </summary>
                            <p class="pl-3 ml-2 py-3 text-sm md:text-base border-l-2 border-dotted border-green-600">
                                <?php echo htmlspecialchars($description); ?>
                            </p>
                        </details>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="inclusion-excusion w-full flex flex-col shadow-lg h-auto py-3 px-2">
                <div class="inclusion-excusion-header flex justify-between px-2 py-4 w-full">
                    <div class="icon flex gap-2 items-center font-semibold">
                        <i class="fa-solid fa-map"></i>
                        <h3>Inclusion / Excusion</h3>
                    </div>
                </div>
                <div class="inclusion-exclusion-details w-full flex md:justify-between flex-col md:flex-row gap-2">
                    <div class="inclusion w-full md:w-1/2 flex flex-col gap-3">
                        <h3 class="uppercase font-semibold">inclusions</h3>
                        <?php
                        $inclusions = [
                            'Deluxe hotel night stays',
                            'Daily breakfast',
                            'AC Transport for transfers as well as sightseeing'
                        ];

                        foreach ($inclusions as $inclusion) {
                        ?>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-check p-3 flex items-center justify-center text-white bg-green-500"></i>
                                <span><?php echo $inclusion; ?></span>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="exclusion w-full md:w-1/2 flex flex-col gap-3">
                        <h3 class="uppercase font-semibold">exclusions</h3>
                        <?php
                        $exclusions = [
                            'Personal expenditures',
                            'Government service taxes',
                            'Anything that is not enlisted in our package ‘inclusion’'
                        ];

                        foreach ($exclusions as $exclusion) {
                        ?>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-xmark p-3 flex items-center justify-center text-white bg-red-500"></i>
                                <span><?php echo $exclusion; ?></span>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="tour-benefits">
                <div class="tour-benefits-header flex justify-between px-2 py-4 w-full">
                    <div class="icon flex gap-2 items-center font-bold">
                        <i class="fa-solid fa-map"></i>
                        <h3>Tour Benefits</h3>
                    </div>
                </div>
                <div class="tour-benefits-details flex flex-col gap-2">
                    <?php
                    $tour_benefits = [
                        [
                            'icon' => 'fa-solid fa-users',
                            'text' => 'Team Of Highly Experienced Experts'
                        ],
                        [
                            'icon' => 'fa-solid fa-credit-card',
                            'text' => 'No Booking Or Credit Card Fee'
                        ],
                        [
                            'icon' => 'fa-solid fa-check-circle',
                            'text' => 'Hassle-Free Booking'
                        ],
                        [
                            'icon' => 'fa-solid fa-smile',
                            'text' => 'Your Happiness Guaranteed'
                        ],
                        [
                            'icon' => 'fa-solid fa-tag',
                            'text' => 'Best Price Guarantee'
                        ]
                    ];

                    foreach ($tour_benefits as $benefit) {
                        $icon = $benefit['icon'];
                        $text = $benefit['text'];
                    ?>
                        <div class="flex p-2 items-center gap-2">
                            <i class="<?php echo $icon; ?>"></i>
                            <span class="text-sm md:text-base"><?php echo $text; ?></span>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div class="flex bg-gradient-to-r from-amber-500 to-pink-500 text-white p-4 rounded">
                <div class="flex-col">
                    <h2 class="text-2xl font-bold">Want customized Tour Package?</h2>
                    <p><strong>Call / Whatsapp now on</strong></p>
                    <p><strong>+91 95589 55867</strong></p>
                    <a href="https://api.whatsapp.com/send/?phone=919512646767" target="_blank">
                        <button class="px-4 py-2 bg-white text-red-500 font-bold rounded mt-4">GET Customized Tour Package Now</button>
                    </a>
                </div>
            </div>
        </section>
        <section class="tour_payment w-full md:w-[30%] bg-white p-3">
            <aside class="flex flex-col px-4 py-4 gap-6 mb-8  bg-gray-100 rounded-xl">
                <h2 class="text-xl font-bold">Tour Price Starting</h2>
                <p class="text-green-700 text-xl font-semibold">₹<?php echo $tour_price; ?> Rs. /-</p>
                <ul class="pl-3 ">
                    <li class="hover:text-red-500 hover:font-semibold"><i class="fa-solid fa-check"></i> Best price guaranteed</li>
                    <li class="hover:text-red-500 hover:font-semibold"><i class="fa-solid fa-check"></i> No booking Amount</li>
                    <li class="hover:text-red-500 hover:font-semibold"><i class="fa-solid fa-check"></i> hidden Charges</li>
                </ul>
                <a href="https://api.whatsapp.com/send/?phone=919512646767" target="_blank">
                    <button class="px-4 py-2 bg-white text-red-500 font-bold rounded mt-4">Book you Trip Now</button>
                </a>
            </aside>
            <div class="flex bg-gradient-to-r from-amber-500 to-pink-500 text-white p-4 rounded">
                <div class="flex-col">
                    <h2 class="text-2xl font-bold">Want To Hire? We Are Here</h2>
                    <p><strong>gujaratdarshans.com</strong></p>
                    <p><strong>+91 95589 55867</strong></p>
                    <a href="https://api.whatsapp.com/send/?phone=919512646767" target="_blank">
                        <button class="px-4 py-2 bg-white text-red-500 font-bold rounded mt-4">HIRE A CAR NOW</button>
                    </a>
                </div>
            </div>
        </section>
    </section>
</div>

<?php require_once "_footer.php"; ?>
</body>

</html>