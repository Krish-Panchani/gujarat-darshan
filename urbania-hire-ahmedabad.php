<?php
$title = "Luxury Car Rental in Ahmedabad | Car Hire in Ahmedabad";
$desc = "Gujarat Darshan provides Luxury Car Rental Services in Ahmedabad, enhancing comfort and joy for any occasion. Book your car hire now for a memorable experience!";
require_once "_header.php"; ?>
<?php require_once "_navbar.php"; ?>
<?php require_once "_whatsapp_btn.php"; ?>

<div class="container mx-auto p-4">
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
            <section class="flex flex-col">
                <div class="flex flex-col max-w-screen-xl mx-auto px-4 py-8 gap-12 text-gray-600 overflow-hidden md:px-8">
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
                            Hire <span class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-transparent">17 Seater Urbania </span>
                            In Ahmedabad
                        </h1>
                        <p>
                            Looking to hire a spacious and comfortable vehicle for your group travel needs in Ahmedabad? Look no further! Our 17 Seater Urbania offers the perfect solution for transporting large groups with ease and style. Whether it's a family outing, corporate event, or a city tour, enjoy a smooth and luxurious ride with our top-notch service. <strong>Book your 17 Seater Urbania in Ahmedabad</strong> today and experience hassle-free travel like never before!
                        </p>
                        <div class="flex items-center gap-x-3 text-sm sm:text-xs">
                            <a href="https://api.whatsapp.com/send/?phone=919558955867" target="_blank" class="flex items-center justify-center gap-x-1 py-2 px-4 text-white font-medium bg-gray-800 duration-150 hover:bg-gray-700 active:bg-gray-900 rounded-full md:inline-flex">
                                Book Now
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                    <path fillRule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clipRule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- <div class="flex-1 sm:pt-4 pt-12">
                    <img src="./images/about-img.webp" class="max-w-xs sm:max-w-md " />
                </div> -->
                    <div class="flex flex-col md:flex-row mx-auto px-4 py-8 gap-8 text-gray-600 overflow-hidden md:px-4">
                        <div>
                            <section class="mb-8">
                                <h2 class="text-2xl font-bold py-4">Brand new 17 Seater Urbania Ahmedabad</h2>

                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <img src="images/urbania_img/urbania1.jpeg" alt="Tempo Traveller 1" class="w-full h-auto">
                                    <img src="images/urbania_img/urbania2.jpeg" alt="Tempo Traveller 1" class="w-full h-auto">
                                    <img src="images/urbania_img/urbania3.jpeg" alt="Tempo Traveller 1" class="w-full h-auto">
                                    <img src="images/urbania_img/urbania4.jpeg" alt="Tempo Traveller 1" class="w-full h-auto">
                                    <img src="images/urbania_img/urbania5.jpeg" alt="Tempo Traveller 1" class="w-full h-auto">
                                    <img src="images/urbania_img/urbania6.jpeg" alt="Tempo Traveller 1" class="w-full h-auto">
                                    <!-- <img src="https://via.placeholder.com/400" alt="Tempo Traveller 6" class="w-full h-auto"> -->
                                </div>
                            </section>

                            <section class="mb-8">
                                <h2 class="text-2xl font-bold py-4">
                                    17 Seater Force Urbania Rates in Ahmedabad
                                </h2>
                                <p>Our 17 Seater Force Urbania is available for hire at the best rates in Ahmedabad. The rate per km for our Force Urbania is 24 Rs. For more details on our Force Urbania rates, please refer to the table below.</p>
                                <table class="table-auto w-full bg-white shadow-md rounded my-4">
                                    <thead>
                                        <tr class="bg-gray-200">
                                            <th class="px-4 py-2">17 Seater Force Urbania</th>
                                            <th class="px-4 py-2">Rate/Prices</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tempo-table">
                                        <tr>
                                            <td class="border px-4 py-2">Capacity</td>
                                            <td class="border px-4 py-2">17+1</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Minimum KMs</td>
                                            <td class="border px-4 py-2">300km</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Tolltax</td>
                                            <td class="border px-4 py-2">To be Paid by Customer</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Border Tax</td>
                                            <td class="border px-4 py-2">If Applicable</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Parking Charge</td>
                                            <td class="border px-4 py-2">Customer</td>
                                        </tr>

                                        <tr>
                                            <td class="border px-4 py-2">Local Service</td>
                                            <td class="border px-4 py-2">-</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Extra KMS</td>
                                            <td class="border px-4 py-2">24 Rs.</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Extra HRS</td>
                                            <td class="border px-4 py-2">-</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Airport Service</td>
                                            <td class="border px-4 py-2">-</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Airport Duty</td>
                                            <td class="border px-4 py-2">On Request</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>

                            <section class="mb-8">
                                <h2 class="text-2xl font-bold">Vehicle Facilities</h2>
                                <ul class="list-disc pl-5">
                                    <li>1×1 Maharaja Coach Available</li>
                                    <li>Leather Fabric Upholstery</li>
                                    <li>Spacious & Comfortable Seats</li>
                                    <li>Music System</li>
                                    <li>LCD Screen – As Per Availability</li>
                                    <li>24 x 7 First Aid Kit</li>
                                    <li>Neat, Clean & Hygienic</li>
                                    <li>In Complimentary Water Bottle, Newspaper and Magazines</li>
                                </ul>
                            </section>

                            <section class="mb-8">
                                <h2 class="text-2xl font-bold">Best 17 Seater Force Urbania by Gujarat Darshan</h2>
                                <p>Whether you need to Hire a Force Urbania on rent in Ahmedabad, you are in perfect place. We will offer you financially savvy and efficient approach to contract/rental transport from Ahmedabad to any course in Gujarat and India. In the event that you are employing transport benefit for first time, then you may take help of our specialists, who will recommend you the best transport bargain according to your exact needs.</p>
                                <p>We take pride in being a dependable company offering Maharaja coach Force Urbania in Ahmedabad and have many loyal customers. Our services are available for both local and Indian customers. We are also your best online solution for <a href="/gujarattravel/car-hire-in-ahmedabad.php" class="text-red-500">car rentals in Ahmedabad</a>.</p>
                                <p>Our 17-seater Force Urbania in Ahmedabad, along with our drivers and partners, are well-mannered, smartly dressed, and have a professional demeanor. You can instantly book the coach online for weddings, family outings, school/university trips, religious tours in India, or office visits.</p>
                            </section>

                            <section class="mb-8">
                                <h2 class="text-2xl font-bold">Terms Of Service for Bus on Rent in Ahmedabad</h2>
                                <ul class="list-disc pl-5">
                                    <li>Parking, Toll Tax, Border Tax, State Permit Will Be Charged Extra On Actual.</li>
                                    <li>Driver Allowance Per Day – 200/- Extra, Night Charge Per Night – 100/- Extra.</li>
                                    <li>The Hours & KMs Are Computed From Our Ahmedabad Office To Ahmedabad Office.</li>
                                    <li>Tariff Will Be Changed As Per Fuel Rate Hike.</li>
                                    <li>All Above Rates May Be Differ During Season / Weekend.</li>
                                    <li>In Case Of Cancellation Of Duty, Minimum 8hrs/80kms Will Be Charged.</li>
                                    <li>GST Extra As Applicable [ At Present 5.00 % ]</li>
                                </ul>
                            </section>


                        </div>

                        <div class="mb-8">
                            <aside class="flex flex-col px-4 py-4 gap-6 mb-8 w-56 bg-gray-200 rounded-xl">
                                <h2 class="text-xl font-bold">Our Fleet</h2>
                                <ul class="pl-3 ">
                                    <li class="hover:text-red-500 hover:font-semibold"><a href="https://api.whatsapp.com/send/?phone=919558955867" target="_blank">11, 14, 17, 20 Seater Tempo Traveller</a></li>
                                    <li class="hover:text-red-500 hover:font-semibold"><a href="https://api.whatsapp.com/send/?phone=919558955867" target="_blank">Toyota Innova</a></li>
                                    <li class="hover:text-red-500 hover:font-semibold"><a href="https://api.whatsapp.com/send/?phone=919558955867" target="_blank">Toyota Etios</a></li>
                                    <li class="hover:text-red-500 hover:font-semibold"><a href="https://api.whatsapp.com/send/?phone=919558955867" target="_blank">Toyota Yaris</a></li>
                                    <li class="hover:text-red-500 hover:font-semibold"><a href="https://api.whatsapp.com/send/?phone=919558955867" target="_blank">Toyota Corolla</a></li>
                                    <li class="hover:text-red-500 hover:font-semibold"><a href="https://api.whatsapp.com/send/?phone=919558955867" target="_blank">20, 29, 41, 56 Seater Bus</a></li>
                                    <li class="hover:text-red-500 hover:font-semibold"><a href="https://api.whatsapp.com/send/?phone=919558955867" target="_blank">Tata Indica</a></li>
                                </ul>

                                <h2 class="text-xl font-bold">Featured Services</h2>
                                <ul class="pl-3">
                                    <li class="hover:text-red-500 hover:font-semibold"><a href="https://api.whatsapp.com/send/?phone=919558955867" target="_blank">Airport Taxi Transfer</a></li>
                                    <li class="hover:text-red-500 hover:font-semibold"><a href="https://api.whatsapp.com/send/?phone=919558955867" target="_blank">Railway Station Pick and Drop</a></li>
                                    <li class="hover:text-red-500 hover:font-semibold"><a href="https://api.whatsapp.com/send/?phone=919558955867" target="_blank">Gujarat Wildlife Tour</a></li>
                                    <li class="hover:text-red-500 hover:font-semibold"><a href="https://api.whatsapp.com/send/?phone=919558955867" target="_blank">Somnath – Dwarka</a></li>
                                    <li class="hover:text-red-500 hover:font-semibold"><a href="https://api.whatsapp.com/send/?phone=919558955867" target="_blank">Kutch Darshan</a></li>
                                    <li class="hover:text-red-500 hover:font-semibold"><a href="https://api.whatsapp.com/send/?phone=919558955867" target="_blank">Kutch – Full Moon</a></li>
                                </ul>
                                </ul>
                            </aside>
                            <div class="flex w-56 bg-gradient-to-r from-amber-500 to-pink-500 text-white p-4 rounded">
                                <div class="flex-col">
                                    <h2 class="text-2xl font-bold">Want To Hire? We Are Here</h2>
                                    <p><strong>gujaratdarshans.com</strong></p>
                                    <p><strong>+91 95589 55867</strong></p>
                                    <a href="https://api.whatsapp.com/send/?phone=919558955867">
                                        <button class="px-4 py-2 bg-white text-red-500 font-bold rounded mt-4">HIRE A CAR NOW</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>



</div>


<?php require_once "_footer.php"; ?>
</body>

</html>