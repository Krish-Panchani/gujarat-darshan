<?php require_once "_header.php"; ?>
<?php require_once "../_db-conn.php"; ?>
<?php
$package_name = 'Dwarka Somnath & Gir Tour from Ahmedabad';
$query = "SELECT * FROM regular_packages WHERE tour_name = '$package_name'";

$result = mysqli_query($conn, $query);
if ($result) {
    $package = mysqli_fetch_assoc($result);
    $tour_overview = $package['tour_overview'];
    $tour_name = $package['tour_name'];
    $tour_duration = $package['tour_duration'];
    $meals = $package['meals'];
    $starting_ending = $package['starting_ending'];
    $destination_covered = $package['destination_covered'];
    $no_of_person = $package['no_of_person'];
    $vehicle_type = $package['vehicle_type'];
    $standard_cost = $package['standard_cost'];
    $deluxe_cost = $package['deluxe_cost'];
    $tour_highlights = $package['tour_highlights'];
    $tour_highlights_array = json_decode($tour_highlights, true);
    $inclusions = $package['inclusions'];
    $inclusions_array = json_decode($inclusions, true);
    $exclusions = $package['exclusions'];
    $exclusions_array = json_decode($exclusions, true);
    $img_path = $package['img_path'];
}
?>
<?php require_once "../_navbar.php"; ?>

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
                        <span class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-transparent"><?php echo $tour_name; ?></span>
                        Package
                    </h1>
                    <p>
                        <?php echo $tour_overview; ?>
                    </p>

                </div>
            </div>

            <section>

                <div class="relative flex flex-col mx-4 mt-6 text-gray-700 backdrop-blur-xl shadow-md bg-clip-border border-2 border-red-400 rounded-xl">
                    <div>
                        <div class=" grid flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
                            <img class=" h-96 w-full  object-cover object-center rounded-xl mt-4" src="../images/regular_tour/<?php echo $img_path; ?>" alt="<?php echo $tour_name; ?>">
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 text-center mt-4 uppercase"><?php echo $tour_name; ?></h3>



                        <div class="mt-12 p-6">
                            <ul class="grid gap-y-8 gap-x-12 sm:grid-cols-2 lg:grid-cols-3">
                                <li class="flex gap-4 py-4 border-2 border-gray-400 rounded-xl px-4">
                                    <div class="flex-none w-12 h-12 bg-green-50 text-green-600 rounded-lg flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                                        </svg>

                                    </div>
                                    <div>
                                        <h4 class="text-lg text-gray-800 font-semibold ">
                                            Tour Name
                                        </h4>
                                        <p class="mt-3">
                                            <?php echo $tour_name; ?>
                                        </p>
                                    </div>
                                </li>
                                <li class="flex gap-4 py-4 border-2 border-gray-400 rounded-xl px-4">
                                    <div class="flex-none w-12 h-12 bg-green-50 text-green-600 rounded-lg flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>

                                    </div>
                                    <div>
                                        <h4 class="text-lg text-gray-800 font-semibold">
                                            Tour Duration
                                        </h4>
                                        <p class="mt-3">
                                            <?php echo $tour_duration; ?>
                                        </p>
                                    </div>
                                </li>
                                <li class="flex gap-4 py-4 border-2 border-gray-400 rounded-xl px-4">
                                    <div class="flex-none w-12 h-12 bg-green-50 text-green-600 rounded-lg flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                            <path fill-rule="evenodd" d="M3 2.25a.75.75 0 0 1 .75.75v.54l1.838-.46a9.75 9.75 0 0 1 6.725.738l.108.054A8.25 8.25 0 0 0 18 4.524l3.11-.732a.75.75 0 0 1 .917.81 47.784 47.784 0 0 0 .005 10.337.75.75 0 0 1-.574.812l-3.114.733a9.75 9.75 0 0 1-6.594-.77l-.108-.054a8.25 8.25 0 0 0-5.69-.625l-2.202.55V21a.75.75 0 0 1-1.5 0V3A.75.75 0 0 1 3 2.25Z" clip-rule="evenodd" />
                                        </svg>

                                    </div>
                                    <div>
                                        <h4 class="text-lg text-gray-800 font-semibold">
                                            Starting & Ending
                                        </h4>
                                        <p class="mt-3">
                                            <?php echo $starting_ending; ?>
                                        </p>
                                    </div>
                                </li>
                                <li class="flex gap-4 py-4 border-2 border-gray-400 rounded-xl px-4">
                                    <div class="flex-none w-12 h-12 bg-green-50 text-green-600 rounded-lg flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                                        </svg>

                                    </div>
                                    <div>
                                        <h4 class="text-lg text-gray-800 font-semibold">
                                            Meals
                                        </h4>
                                        <p class="mt-3">
                                            <?php echo $meals; ?>
                                        </p>
                                    </div>
                                </li>
                                <li class="flex gap-4 py-4 border-2 border-gray-400 rounded-xl px-4">
                                    <div class="flex-none w-12 h-12 bg-green-50 text-green-600 rounded-lg flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                        </svg>

                                    </div>
                                    <div>
                                        <h4 class="text-lg text-gray-800 font-semibold">
                                            No Of Person
                                        </h4>
                                        <p class="mt-3">
                                            <?php echo $no_of_person; ?>
                                        </p>
                                    </div>
                                </li>
                                <li class="flex gap-4 py-4 border-2 border-gray-400 rounded-xl px-4">
                                    <div class="flex-none w-12 h-12 bg-green-50 text-green-600 rounded-lg flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                                        </svg>


                                    </div>
                                    <div>
                                        <h4 class="text-lg text-gray-800 font-semibold">
                                            Vehicle Type
                                        </h4>
                                        <p class="mt-3">
                                            <?php echo $vehicle_type; ?>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="flex gap-4 py-4 border-2 border-gray-400 rounded-xl px-4 mt-4">
                                <div class="flex-none w-12 h-12 bg-green-50 text-green-600 rounded-lg flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>


                                </div>
                                <div>
                                    <h4 class="text-lg text-gray-800 font-semibold">
                                        Destination Covered
                                    </h4>
                                    <p class="mt-3">
                                        <?php echo $destination_covered; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 pt-0 flex justify-between content-center items-center px-6">
                        <p class="text-sm flex items-center justify-center">
                            <span class="flex items-center pr-1 font-medium">
                                <svg class="w-8 h-8 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </span>
                            <strong class="text-xl font-bold items-center"><?php echo $standard_cost; ?></strong>
                        </p>
                        <p class="text-sm flex items-center justify-center">
                            <span class="flex items-center pr-1 font-medium">
                                <svg class="w-8 h-8 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </span>
                            <strong class="text-xl font-bold items-center"><?php echo $deluxe_cost; ?></strong>

                        </p>
                        <a href="https://wa.me/919558955867" target="_blank">
                            <!-- <span class="text-xl font-semibold">₹3300 /-</span> -->
                            <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" type="button">
                                Book Now
                            </button>
                        </a>


                    </div>
                </div>


            </section>
            <section>
                <div class="relative flex flex-col mx-4 mt-6 text-gray-700">

                    <div>
                        <h3 class="flex justify-start text-2xl font-bold px-4 bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-transparent">
                            Tour Highlights</h3>
                        <div class="grid grid-cols-1 gap-4 mt-8 xl:mt-8 xl:gap-4 md:grid-cols-2 xl:grid-cols-3">
                            <?php

                            foreach ($tour_highlights_array as $highlight) {
                            ?>
                                <div class="flex flex-col items-center p-4 text-center bg-gray-100 rounded-xl ">
                                    <h3 class="text-lg font-semibold text-gray-700 capitalize "><?php echo $highlight; ?>
                                    </h3>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="relative flex flex-col mx-4 mt-6 text-gray-700 backdrop-blur-xl shadow-md bg-clip-border border-2 border-red-400 rounded-xl px-4 py-4">

                    <div>
                        <h3 class="flex justify-center text-2xl font-bold px-4 bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-transparent">
                            Inclusion/Exclusion</h3>


                        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-16 md:grid-cols-2 xl:grid-cols-2">
                            <div class="flex flex-col items-start p-6 space-y-3 text-left bg-gray-100 rounded-xl">
                                <h3 class="text-2xl font-semibold text-gray-700 capitalize">Inclusion</h3>
                                <ul class="list-disc list-inside">
                                    <?php foreach ($inclusions_array as $i) { ?>
                                        <li><?php echo $i; ?></li>
                                    <?php } ?>
                                </ul>
                            </div>

                            <div class="flex flex-col items-start p-6 space-y-3 text-left bg-gray-100 rounded-xl">
                                <h3 class="text-2xl font-semibold text-gray-700 capitalize">Exclusion</h3>
                                <ul class="list-disc list-inside">
                                    <?php foreach ($exclusions_array as $e) { ?>
                                        <li><?php echo $e; ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
</div>

<?php require_once "_footer.php"; ?>
</body>

</html>