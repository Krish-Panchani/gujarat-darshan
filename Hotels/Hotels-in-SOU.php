<?php require_once "_header.php"; ?>
<?php require_once "../_navbar.php"; ?>

<?php
$hotel_in = "Statue of uinty";
?>
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
            <div class="max-w-screen-xl mx-auto px-4 py-16 gap-12 text-gray-600 overflow-hidden md:px-8 md:flex">
                <div class="flex flex-col space-y-5 max-w-4xl justify-between ">
                    <h1 class="text-4xl text-gray-800 font-extrabold sm:text-5xl">
                        Hotels In <span class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-transparent"><?php echo $hotel_in; ?></span>
                    </h1>
                    <p>
                        Embark on a holy pilgrimage to Somnath, Gujarat, and discover serenity amidst sacred sites. Our curated selection of hotels caters to every traveler's need, from budget-friendly options near the Somnath Temple to luxurious resorts with breathtaking views. Immerse yourself in Gujarati hospitality and create lasting memories in Somnath.
                    </p>

                </div>
            </div>

            <section class="flex justify-evenly">
                <div id="hotel-container" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3">
                    <!-- Skeleton Loader -->
                    <div class="relative flex flex-col mx-4 mt-6 text-gray-700 backdrop-blur-xl shadow-md bg-clip-border border-2 border-red-400 rounded-xl max-w-sm skeleton">
                        <div class="p-6">
                            <div class="grid h-40 w-72 flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700"></div>
                            <h3 class="text-xl font-bold text-gray-800 text-center mt-4 uppercase skeleton">Loading...</h3>
                        </div>
                        <div class="p-6 pt-0 flex justify-between content-center items-center px-6">
                            <button class="font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none skeleton">Loading..</button>
                        </div>
                    </div>
                    <div class="relative flex flex-col mx-4 mt-6 text-gray-700 backdrop-blur-xl shadow-md bg-clip-border border-2 border-red-400 rounded-xl max-w-sm skeleton">
                        <div class="p-6">
                            <div class="grid h-40 w-72 flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700"></div>
                            <h3 class="text-xl font-bold text-gray-800 text-center mt-4 uppercase skeleton">Loading...</h3>
                        </div>
                        <div class="p-6 pt-0 flex justify-between content-center items-center px-6">
                            <button class="font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none skeleton">Loading..</button>
                        </div>
                    </div>
                    <div class="relative flex flex-col mx-4 mt-6 text-gray-700 backdrop-blur-xl shadow-md bg-clip-border border-2 border-red-400 rounded-xl max-w-sm skeleton">
                        <div class="p-6">
                            <div class="grid h-40 w-72 flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700"></div>
                            <h3 class="text-xl font-bold text-gray-800 text-center mt-4 uppercase skeleton">Loading...</h3>
                        </div>
                        <div class="p-6 pt-0 flex justify-between content-center items-center px-6">
                            <button class="font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none skeleton">Loading..</button>
                        </div>
                    </div>

                </div>
            </section>
        </section>
    </div>
</div>

<?php require_once "_footer.php"; ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const blogContainer = document.querySelector('#hotel-container'); // Ensure this ID matches your container
        const skeletons = blogContainer.querySelectorAll('.skeleton');

        // Show skeleton loaders initially
        skeletons.forEach(el => el.classList.remove('hidden'));

        // Define the parameter for the API call
        const hotelIn = 'Statue of uinty'; // Replace with actual value or dynamic input

        // Fetch data from the PHP endpoint
        fetch(`../api/fetch_hotels.php?hotel_in=${encodeURIComponent(hotelIn)}`)
            .then(response => response.json())
            .then(data => {
                // Hide skeleton loaders
                skeletons.forEach(el => el.classList.add('hidden'));

                if (data.success) {
                    // Inject the actual hotel data
                    data.data.forEach(hotel => {
                        const hotelHtml = `
                            <div class="relative flex flex-col mx-4 mt-6 text-gray-700 backdrop-blur-xl shadow-md bg-clip-border border-2 border-red-400 rounded-xl max-w-sm">
                                <div class="p-6">
                                    <div class="grid h-56 w-full max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
                                        <img class="object-cover object-center" src="../images/hotels_img/${hotel.img_1}" alt="${hotel.hotel_name}">
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-800 text-center mt-4 uppercase">${hotel.hotel_name}</h3>
                                    <div class="flex items-center mt-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="flex-shrink-0 w-6 mr-2">
                                            <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                                        </svg>
                                        <p class="text-sm font-bold truncate">
                                            <span>${hotel.hotel_location}</span>
                                        </p>
                                    </div>
                                    <p class="text-sm pt-4 line-clamp-4">
                                        ${hotel.hotel_desc}
                                    </p>
                                </div>
                                <div class="p-6 pt-0 flex justify-between content-center items-center px-6">
                                    <p class="text-sm flex items-center justify-center">(
                                        <span class="flex items-center pr-1 font-medium">
                                            ${hotel.hotel_rating}
                                            <svg class="w-4 h-4 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                            </svg>
                                        </span>
                                        <strong class="font-semibold items-center">Ratings on Google</strong>
                                        )
                                    </p>
                                    <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" type="button">
                                        Book Now
                                    </button>
                                </div>
                            </div>
                        `;
                        blogContainer.insertAdjacentHTML('beforeend', hotelHtml);
                    });
                } else {
                    console.error('Error:', data.message);
                }
            })
            .catch(error => {
                console.error('Fetch error:', error);
            });
    });
</script>

</body>

</html>