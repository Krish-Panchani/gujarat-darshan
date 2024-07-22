<?php
$linkClass = " px-4 py-2 mt-2 text-base font-bold bg-white rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline";
$dropdownLinkClass = "z-50 block px-4 py-2 mt-2 text-sm font-semibold bg-white rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline";

?>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="w-full text-gray-700 bg-white px-2">
    <div x-data="{ open: false }" class="flex flex-col max-w-screen-2xl px-4 mx-auto border-0 rounded-full md:border-2  border-black my-4 md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="p-4 flex flex-row items-center justify-between">
            <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg focus:outline-none focus:shadow-outline">
                <img class="w-40" src="logo.png" alt="Logo">
            </a>
            <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
            <a class="<?php echo $linkClass; ?>" href="/gujarattravels/">Home</a>
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <span class="text-base font-bold">Rental Service</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-5 h-5 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-60 z-50">
                    <div class="z-50 px-2 py-2 bg-white rounded-md shadow">
                        <?php
                        $menuItems = [
                            'Car Hire' => '/gujarattravels/car-hire-in-ahmedabad.php',
                            'Tempo Traveller Hire' => '/gujarattravels/hire-tempo-traveller-ahmedabad.php',
                            'Luxury Bus Hire' => '/gujarattravels/bus-hire-ahmedabad.php',
                            'Premium Category' => '/gujarattravels/bus-hire-ahmedabad.php',
                            'Urbania Hire' => '/gujarattravels/bus-hire-ahmedabad.php',
                        ];
                        ?>

                        <?php foreach ($menuItems as $text => $link) : ?>
                            <a class="block <?php echo $dropdownLinkClass; ?>" href="<?php echo $link; ?>"><?php echo $text; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <span class="text-base font-bold">Tour Packages</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-5 h-5 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-60 z-50">
                    <div class="z-50 px-2 py-2 bg-white rounded-md shadow">
                        <?php
                        $menuItems = [
                            'Rann of kutch package' => '/gujarattravels/tour-packages/rann-of-kutch-package.php',
                            'Dwarka tour packages' => '/gujarattravels/tour-packages/dwarka-tour-packages.php',
                            'somnath tour packages' => '/gujarattravels/tour-packages/somnath-tour-packages.php',
                            'dwarka somnath tour' => '/gujarattravels/tour-packages/dwarka-somnath-tour.php',
                            'pancha dwarka yatra' => '/gujarattravels/tour-packages/pancha-dwarka-yatra.php',
                            'statue of unity tour' => '/gujarattravels/tour-packages/statue-of-unity-tour.php',
                            'saurashtra tour ahmedabad' => '/gujarattravels/tour-packages/saurashtra-tour-ahmedabad.php',
                            'gir jungle safari' => '/gujarattravels/tour-packages/gir-jungle-safari.php',
                            'gujarat diu tour' => '/gujarattravels/tour-packages/gujarat-diu-tour.php',
                            'best of kutch tour' => '/gujarattravels/tour-packages/best-of-kutch-tour.php',
                            'colours of gujarat tour' => '/gujarattravels/tour-packages/colours-of-gujarat-tour.php',
                            'gujarat desert beach tour' => '/gujarattravels/tour-packages/gujarat-desert-beach-tour.php'
                        ];
                        ?>

                        <?php foreach ($menuItems as $text => $link) : ?>
                            <a class="block <?php echo $dropdownLinkClass; ?>" href="<?php echo $link; ?>"><?php echo $text; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <span class="text-base font-bold">Regular tour</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-5 h-5 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-72 z-50">
                    <div class="z-50 px-2 py-2 bg-white rounded-md shadow">
                        <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/2-Days-Statue-of-Unity-Tour.php">2 Days - Statue of Unity Tour</a>
                        <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/3-Days-Dwarka-Somnath-Tour.php">3 Days - Dwarka Somnath Tour</a>
                        <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/3-Days-Dwarka-Somnath-with-SOU.php">3 Days - Dwarka Somnath with SOU</a>
                        <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/4-Days-Dwarka-Somnath-Tour.php">4 Days - Dwarka Somnath Tour</a>
                        <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/4-Days-Saurashtra-Tour-with-Porbandar.php">4 Days - Saurashtra Tour with Porbandar</a>
                        <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/5-Days-Dwarka-Somnath-Diu-&-Gir-Tour.php">5 Days - Dwarka Somnath Diu & Gir Tour</a>
                        <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/6-Days-Dwarka-Somnath-Diu-&-Gir-Tour.php">6 Days - Dwarka Somnath Diu & Gir Tour</a>
                        <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/7-Days-Dwarka-Somnath-Diu-&-Gir-Tour.php">7 Days - Dwarka Somnath Diu & Gir Tour</a>
                        <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/8-Days-Dwarka-Somnath-with-Bhuj.php">8 Days - Dwarka Somnath with Bhuj</a>
                        <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/9-Days-Saurashtra-with-SOU-&-Kutch.php">9 Days - Saurashtra with SOU & Kutch</a>
                    </div>
                </div>
            </div>
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <span class="text-base font-bold">Hotels</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-5 h-5 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute bg-white right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-60 z-50">
                    <div class="z-50 px-2 py-2 bg-white rounded-md shadow ">
                        <?php
                        $hotels = [
                            'Hotels in Ahmedabad' => '/gujarattravels/Hotels/Hotels-in-Ahmedabad.php',
                            'Hotels in Dwarka' => '/gujarattravels/Hotels/Hotels-in-Dwarka.php',
                            'Hotels in Somnath' => '/gujarattravels/Hotels/Hotels-in-somnath',
                            'Hotels in Gir' => '/gujarattravels/Hotels/Hotels-in-Gir.php',
                            'Hotels in Diu' => '/gujarattravels/Hotels/Hotels-in-Diu.php',
                            'Hotels in SOU' => '/gujarattravels/Hotels/Hotels-in-SOU.php',
                            // 'Hotels in Rann of Kutch' => '/gujarattravels/Hotels/Hotels-in-Rann-of-Kutch.php'
                        ];
                        ?>

                        <?php foreach ($hotels as $text => $link) : ?>
                            <a class="block <?php echo $dropdownLinkClass; ?>" href="<?php echo $link; ?>"><?php echo $text; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <a class="<?php echo $linkClass; ?>" href="/gujarattravels/about-us">About</a>
            <a class="<?php echo $linkClass; ?>" href="/gujarattravels/contact-us">Contact</a>
        </nav>
    </div>
</div>