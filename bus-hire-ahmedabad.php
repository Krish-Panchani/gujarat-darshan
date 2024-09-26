<?php
$title = "Luxury Bus on Rent in Ahmedabad | 20, 25, 33 & 49 Seater Bus on Rent";
$desc = "Looking for a luxury bus on rent in Ahmedabad? Gujarat Darshan offers 20, 25, 33, & 49-seater bus hire in Ahmedabad. AC & non-AC coaches and minibuses are available. Book Now!";
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
                        Hire <span class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-transparent">Bus </span>
                        In Ahmedabad
                    </h1>
                    <p><strong>Luxury bus hire in Ahmedabad</strong>, Gujarat is an excellent option for those looking to travel around the state. Not only is it an affordable way to get around, but it also allows you to see the sights and sounds of the state at your own pace.
                    </p>
                    <p>Gujarat Darshan is one of the most trusted tour and travel company in Ahmedabad. We offer best in class <strong>bus rental services</strong> for all types of occasions like local sightseeing, outstation trip, corporate events and wedding functions. We have a wide fleet of buses that includes Luxury, Volvo, Semi-Sleeper and Sleeper buses. All our buses are driven by experienced drivers and well-maintained to ensure a safe and comfortable journey.
                    </p>
                    <p>Hiring a bus in Ahmedabad is a great way to explore the state and its many attractions.
                    </p>
                    <div class="flex items-center gap-x-3 text-sm sm:text-xs">
                        <a href="#buses" class="flex items-center justify-center gap-x-1 py-2 px-4 text-white font-medium bg-gray-800 duration-150 hover:bg-gray-700 active:bg-gray-900 rounded-full md:inline-flex">
                            View Buses
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
<!-- <section class="py-14" id="buses">
    <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-4">
        <div class="relative max-w-2xl mx-auto sm:text-center">
            <div class="relative z-10">
                <h2 class="text-gray-800 text-3xl font-semibold sm:text-4xl">
                    Luxury Bus on Rent in Ahmedabad
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
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4 w-f">
                <?php
                $services = [
                    [
                        'image' => 'bus-hire.png',
                        'title' => '20 Seater Mini Bus',
                        'tag' => '20 People + 1 Cheaffeur',
                    ],
                    [
                        'image' => 'bus-hire.png',
                        'title' => '25 Seater Mini Bus',
                        'tag' => '25 People + 1 Cheaffeur',
                    ],
                    [
                        'image' => 'bus-hire.png',
                        'title' => '33 Seater Mini Bus',
                        'tag' => '33 People + 1 Cheaffeur',
                    ],
                    [
                        'image' => 'bus-hire.png',
                        'title' => '36 Seater Mini Bus',
                        'tag' => '36 People + 1 Cheaffeur',
                    ],
                    [
                        'image' => 'bus-hire.png',
                        'title' => '39 Seater Mini Bus',
                        'tag' => '39 People + 1 Cheaffeur',
                    ],
                    [
                        'image' => 'bus-hire.png',
                        'title' => '41 Seater Mini Bus',
                        'tag' => '41 People + 1 Cheaffeur',
                    ],
                    [
                        'image' => 'bus-hire.png',
                        'title' => '45 Seater Mini Bus',
                        'tag' => '45 People + 1 Cheaffeur',
                    ],
                    [
                        'image' => 'bus-hire.png',
                        'title' => '49 Seater Mini Bus',
                        'tag' => '`49 People + 1 Cheaffeur',
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
                        <a href="#" class="flex justify-end">
                            <button class="mt-6 select-none font-sans font-bold text-center uppercase transition-all text-xs py-3 px-6 rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20" type="button">
                                Book Now
                            </button>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section> -->

<section class="py-14" id="buses">
    <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-4">
        <div class="relative max-w-2xl mx-auto sm:text-center">
            <div class="relative z-10">
                <h2 class="text-gray-800 text-3xl font-semibold sm:text-4xl">
                    Luxury Bus on Rent in Ahmedabad
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
    </div>
</section>

<?php
$busRates = [
    '20 Seater' => [
        'Capacity' => '20+1',
        'Minimum KMs' => '300km',
        'Tolltax' => 'To be Paid by Customer',
        'Border Tax' => 'If Applicable',
        'Parking Charge' => 'Customer',
        'Local Service' => '-',
        'Extra KMS' => 'As per Inquiry',
        'Extra HRS' => '-',
        'Airport Service' => '-',
        'Airport Duty' => 'On Request',
        'Images' => [
            '20-25seater/20-25seater-1.jpg',
            '20-25seater/20-25seater-2.jpg',
            '20-25seater/20-25seater-3.jpg',
            '20-25seater/20-25seater-4.jpg',
            '20-25seater/20-25seater-5.jpg',
            '20-25seater/20-25seater-6.jpg',
        ]
    ],
    '25 Seater' => [
        'Capacity' => '25+1',
        'Minimum KMs' => '300km',
        'Tolltax' => 'To be Paid by Customer',
        'Border Tax' => 'If Applicable',
        'Parking Charge' => 'Customer',
        'Local Service' => '-',
        'Extra KMS' => 'As per Inquiry',
        'Extra HRS' => '-',
        'Airport Service' => '-',
        'Airport Duty' => 'On Request',
        'Images' => [
            '20-25seater/20-25seater-1.jpg',
            '20-25seater/20-25seater-2.jpg',
            '20-25seater/20-25seater-3.jpg',
            '20-25seater/20-25seater-4.jpg',
            '20-25seater/20-25seater-5.jpg',
            '20-25seater/20-25seater-6.jpg',
        ]
    ],
    '29 Seater' => [
        'Capacity' => '29+1',
        'Minimum KMs' => '300km',
        'Tolltax' => 'To be Paid by Customer',
        'Border Tax' => 'If Applicable',
        'Parking Charge' => 'Customer',
        'Local Service' => '-',
        'Extra KMS' => 'As per Inquiry',
        'Extra HRS' => '-',
        'Airport Service' => '-',
        'Airport Duty' => 'On Request',
        'Images' => [
            '29-33-37seater/29-33-37seater-1.jpg',
            '29-33-37seater/29-33-37seater-2.jpg',
            '29-33-37seater/29-33-37seater-3.jpg',
            '29-33-37seater/29-33-37seater-4.jpg',
            '29-33-37seater/29-33-37seater-5.jpg',
            '29-33-37seater/29-33-37seater-6.jpg',
        ]
    ],
    '33 Seater' => [
        'Capacity' => '33+1',
        'Minimum KMs' => '300km',
        'Tolltax' => 'To be Paid by Customer',
        'Border Tax' => 'If Applicable',
        'Parking Charge' => 'Customer',
        'Local Service' => '-',
        'Extra KMS' => 'As per Inquiry',
        'Extra HRS' => '-',
        'Airport Service' => '-',
        'Airport Duty' => 'On Request',
        'Images' => [
            '29-33-37seater/29-33-37seater-1.jpg',
            '29-33-37seater/29-33-37seater-2.jpg',
            '29-33-37seater/29-33-37seater-3.jpg',
            '29-33-37seater/29-33-37seater-4.jpg',
            '29-33-37seater/29-33-37seater-5.jpg',
            '29-33-37seater/29-33-37seater-6.jpg',
        ]
    ],
    '37 Seater' => [
        'Capacity' => '37+1',
        'Minimum KMs' => '300km',
        'Tolltax' => 'To be Paid by Customer',
        'Border Tax' => 'If Applicable',
        'Parking Charge' => 'Customer',
        'Local Service' => '-',
        'Extra KMS' => 'As per Inquiry',
        'Extra HRS' => '-',
        'Airport Service' => '-',
        'Airport Duty' => 'On Request',
        'Images' => [
            '29-33-37seater/29-33-37seater-1.jpg',
            '29-33-37seater/29-33-37seater-2.jpg',
            '29-33-37seater/29-33-37seater-3.jpg',
            '29-33-37seater/29-33-37seater-4.jpg',
            '29-33-37seater/29-33-37seater-5.jpg',
            '29-33-37seater/29-33-37seater-6.jpg',
        ]
    ],
    '41 Seater' => [
        'Capacity' => '41+1',
        'Minimum KMs' => '300km',
        'Tolltax' => 'To be Paid by Customer',
        'Border Tax' => 'If Applicable',
        'Parking Charge' => 'Customer',
        'Local Service' => '-',
        'Extra KMS' => 'As per Inquiry',
        'Extra HRS' => '-',
        'Airport Service' => '-',
        'Airport Duty' => 'On Request',
        'Images' => [
            '29-33-37seater/29-33-37seater-1.jpg',
            '29-33-37seater/29-33-37seater-2.jpg',
            '29-33-37seater/29-33-37seater-3.jpg',
            '29-33-37seater/29-33-37seater-4.jpg',
            '29-33-37seater/29-33-37seater-5.jpg',
            '29-33-37seater/29-33-37seater-6.jpg',
        ]
    ],
    '45 Seater' => [
        'Capacity' => '45+1',
        'Minimum KMs' => '300km',
        'Tolltax' => 'To be Paid by Customer',
        'Border Tax' => 'If Applicable',
        'Parking Charge' => 'Customer',
        'Local Service' => '-',
        'Extra KMS' => 'As per Inquiry',
        'Extra HRS' => '-',
        'Airport Service' => '-',
        'Airport Duty' => 'On Request',
        'Images' => [
            '29-33-37seater/29-33-37seater-1.jpg',
            '29-33-37seater/29-33-37seater-2.jpg',
            '29-33-37seater/29-33-37seater-3.jpg',
            '29-33-37seater/29-33-37seater-4.jpg',
            '29-33-37seater/29-33-37seater-5.jpg',
            '29-33-37seater/29-33-37seater-6.jpg',
        ]
    ],
    '49 Seater' => [
        'Capacity' => '49+1',
        'Minimum KMs' => '300km',
        'Tolltax' => 'To be Paid by Customer',
        'Border Tax' => 'If Applicable',
        'Parking Charge' => 'Customer',
        'Local Service' => '-',
        'Extra KMS' => 'As per Inquiry',
        'Extra HRS' => '-',
        'Airport Service' => '-',
        'Airport Duty' => 'On Request',
        'Images' => [
            '29-33-37seater/29-33-37seater-1.jpg',
            '29-33-37seater/29-33-37seater-2.jpg',
            '29-33-37seater/29-33-37seater-3.jpg',
            '29-33-37seater/29-33-37seater-4.jpg',
            '29-33-37seater/29-33-37seater-5.jpg',
            '29-33-37seater/29-33-37seater-6.jpg',
        ]
    ],
];
?>

<div class="flex flex-col md:flex-row mx-auto px-4 py-8 gap-8 text-gray-600 overflow-hidden md:px-4">
    <div>
        <section class="mb-8">
            <!-- Image Section -->
            <div id="image-grid" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Default to 20 Seater images initially -->
                <?php foreach ($busRates['20 Seater']['Images'] as $image): ?>
                    <img src="images/bus_img/<?php echo $image; ?>" alt="Bus 20 Seater" class="w-full h-auto">
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mb-8">

            <!-- Buttons -->
            <div class="mb-4 flex justify-center space-x-2">
                <?php foreach ($busRates as $busType => $rates): ?>
                    <button class="py-2 px-4 font-semibold border border-transparent rounded-full bg-gradient-to-r from-red-500 to-pink-500 text-white hover:shadow-lg transform transition-all duration-200" onclick="showTableAndImages('<?php echo strtolower(str_replace(' ', '-', $busType)); ?>')">
                        <?php echo $busType; ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <!-- Rate Tables -->
            <?php foreach ($busRates as $busType => $rates): ?>
                <div id="<?php echo strtolower(str_replace(' ', '-', $busType)); ?>" class="rate-table rounded-3xl shadow-lg overflow-hidden <?php echo $busType === '20 Seater' ? '' : 'hidden'; ?>">
                    <table class="table-auto w-full bg-white transition-all duration-300">
                        <thead class="bg-gradient-to-r from-red-400 to-pink-500 text-white">
                            <tr>
                                <th class="px-4 py-2 text-left">Service Type</th>
                                <th class="px-4 py-2 text-left">Rate/Prices</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rates as $item => $price): ?>
                                <?php if ($item !== 'Images'): // Skip the Images key 
                                ?>
                                    <tr class="hover:bg-gray-100 transition-colors duration-200">
                                        <td class="border px-4 py-2 font-semibold"><?php echo $item; ?></td>
                                        <td class="border px-4 py-2"><?php echo $price; ?></td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endforeach; ?>

            <a href="tel:09512646767" class="flex w-full">
                <button class="px-4 py-4 w-full text-xl bg-gradient-to-r from-amber-500 to-pink-500 text-white font-bold rounded mt-4">HIRE A BUS NOW</button>
            </a>
        </section>
    </div>
</div>

<script>
    function showTableAndImages(busType) {
        // Hide all tables
        const tables = document.querySelectorAll('.rate-table');
        tables.forEach(table => {
            table.classList.add('hidden');
        });

        // Show selected table
        const selectedTable = document.getElementById(busType);
        if (selectedTable) {
            selectedTable.classList.remove('hidden');
        }

        // Update image grid based on the selected bus type
        const imageGrid = document.getElementById('image-grid');
        imageGrid.innerHTML = ''; // Clear existing images

        const busImages = {
            '20-seater': [
                'images/bus_img/20-25seater/20-25seater-1.jpg',
                'images/bus_img/20-25seater/20-25seater-2.jpg',
                'images/bus_img/20-25seater/20-25seater-3.jpg',
                'images/bus_img/20-25seater/20-25seater-4.jpg',
                'images/bus_img/20-25seater/20-25seater-5.jpg',
                'images/bus_img/20-25seater/20-25seater-6.jpg',
            ],
            '25-seater': [
                'images/bus_img/20-25seater/20-25seater-1.jpg',
                'images/bus_img/20-25seater/20-25seater-2.jpg',
                'images/bus_img/20-25seater/20-25seater-3.jpg',
                'images/bus_img/20-25seater/20-25seater-4.jpg',
                'images/bus_img/20-25seater/20-25seater-5.jpg',
                'images/bus_img/20-25seater/20-25seater-6.jpg',
            ],
            '29-seater': [
                'images/bus_img/29-33-37seater/29-33-37seater-1.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-2.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-3.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-4.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-5.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-6.jpg',
            ],
            '33-seater': [
                'images/bus_img/29-33-37seater/29-33-37seater-1.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-2.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-3.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-4.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-5.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-6.jpg',
            ],
            '37-seater': [
                'images/bus_img/29-33-37seater/29-33-37seater-1.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-2.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-3.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-4.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-5.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-6.jpg',
            ],
            '41-seater': [
                'images/bus_img/29-33-37seater/29-33-37seater-1.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-2.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-3.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-4.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-5.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-6.jpg',
            ],
            '45-seater': [
                'images/bus_img/29-33-37seater/29-33-37seater-1.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-2.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-3.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-4.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-5.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-6.jpg',
            ],
            '49-seater': [
                'images/bus_img/29-33-37seater/29-33-37seater-1.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-2.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-3.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-4.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-5.jpg',
                'images/bus_img/29-33-37seater/29-33-37seater-6.jpg',
            ],
            // Add more bus types with their corresponding images here...
        };

        // Append new images for the selected bus type
        busImages[busType].forEach(imageSrc => {
            const imgElement = document.createElement('img');
            imgElement.src = imageSrc;
            imgElement.alt = busType;
            imgElement.classList.add('w-full', 'h-auto');
            imageGrid.appendChild(imgElement);
        });
    }
</script>


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

<section class="relative pb-8 bg-gray-900">
    <div class="relative z-10 max-w-screen-xl mx-auto px-4 md:px-8">
        <div class="z-10">
            <div class="max-w-6xl xl:mx-auto xl:text-center">
                <h3 class="text-white text-2xl font-semibold sm:text-3xl">
                    Mini luxury bus on rent in Ahmedabad
                </h3>
                <p class="mt-3 text-gray-300">
                    If you are planning a tour of Gujarat, hiring a mini bus is the best way to get around. Not only is it an affordable option, but it also allows you to see the sights and sounds of the state at your own pace.
                </p>
                <p class="mt-3 text-gray-300">
                    Gujarat Darshan is one of the most trusted tour and travel company in Ahmedabad. We offer best in class bus rental services for all types of occasions like local sightseeing, outstation trip, corporate events and wedding functions. We have a wide fleet of buses that includes Luxury, Volvo, Semi-Sleeper and Sleeper buses. All our buses are driven by experienced drivers and well-maintained to ensure a safe and comfortable journey.


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