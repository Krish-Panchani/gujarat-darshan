<?php
$linkClass = " px-4 py-2 mt-2 text-base font-bold rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-red-100 focus:bg-red-200 focus:outline-none focus:shadow-outline uppercase";
$dropdownLinkClass = "z-50 block px-4 py-2 mt-2 text-sm font-semibold bg-white rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-red-100 focus:bg-red-200 focus:outline-none focus:shadow-outline";

?>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<main class="sticky top-0 left-0 py-2 z-50">
    <div class="w-full text-gray-700 backdrop-blur-xl px-2 rounded-full">
        <div x-data="{ open: false }" class="flex flex-col max-w-screen-2xl px-4 mx-auto border-0 rounded-full md:border-2  border-black md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="px-4 py-2 flex flex-row items-center justify-between">
                <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg focus:outline-none focus:shadow-outline">
                    <img class="w-36" src="/gujarattravels/images/logo.png" alt="Logo">
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
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-red-100 focus:bg-red-200 focus:outline-none focus:shadow-outline">
                        <span class="text-base font-bold uppercase">Rental Service</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-5 h-5 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-60 z-50">
                        <div class="z-50 px-2 py-2 bg-white rounded-md shadow">
                            <?php
                            $menuItems = [
                                'Car Hire' => '/gujarattravels/car-hire-in-ahmedabad',
                                'Tempo Traveller Hire' => '/gujarattravels/hire-tempo-traveller-ahmedabad',
                                'Luxury Bus Hire' => '/gujarattravels/bus-hire-ahmedabad',
                                'Premium Category' => '/gujarattravels/bus-hire-ahmedabad',
                                'Urbania Hire' => '/gujarattravels/urbania-hire-ahmedabad',
                            ];
                            ?>

                            <?php foreach ($menuItems as $text => $link) : ?>
                                <a class="block <?php echo $dropdownLinkClass; ?>" href="<?php echo $link; ?>"><?php echo $text; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-red-100 focus:bg-red-200 focus:outline-none focus:shadow-outline">
                        <span class="text-base font-bold uppercase">Tour Packages</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-5 h-5 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-60 z-50">
                        <div class="z-50 px-2 py-2 bg-white rounded-md shadow">
                            <?php
                            $menuItems = [
                                'Rann of kutch package' => '/gujarattravels/tour-packages/rann-of-kutch-package',
                                'Dwarka tour packages' => '/gujarattravels/tour-packages/dwarka-tour-packages',
                                'Somnath tour packages' => '/gujarattravels/tour-packages/somnath-tour-packages',
                                'Dwarka somnath tour' => '/gujarattravels/tour-packages/dwarka-somnath-tour',
                                'Pancha dwarka yatra' => '/gujarattravels/tour-packages/pancha-dwarka-yatra',
                                'Statue of unity tour' => '/gujarattravels/tour-packages/statue-of-unity-tour',
                                'Saurashtra tour ahmedabad' => '/gujarattravels/tour-packages/saurashtra-tour-ahmedabad',
                                'Gir jungle safari' => '/gujarattravels/tour-packages/gir-jungle-safari',
                                'Gujarat diu tour' => '/gujarattravels/tour-packages/gujarat-diu-tour',
                                'Best of kutch tour' => '/gujarattravels/tour-packages/best-of-kutch-tour',
                                'Colours of gujarat tour' => '/gujarattravels/tour-packages/colours-of-gujarat-tour',
                            ];
                            ?>

                            <?php foreach ($menuItems as $text => $link) : ?>
                                <a class="block <?php echo $dropdownLinkClass; ?>" href="<?php echo $link; ?>"><?php echo $text; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-red-100 focus:bg-red-200 focus:outline-none focus:shadow-outline">
                        <span class="text-base font-bold uppercase">Regular tour</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-5 h-5 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-72 z-50">
                        <div class="z-50 px-2 py-2 bg-white rounded-md shadow">
                            <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/2-Days-Statue-of-Unity-Tour">2 Days - Statue of Unity Tour</a>
                            <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/3-Days-Dwarka-Somnath-Tour">3 Days - Dwarka Somnath Tour</a>
                            <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/3-Days-Dwarka-Somnath-with-SOU">3 Days - Dwarka Somnath with SOU</a>
                            <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/4-Days-Dwarka-Somnath-Tour">4 Days - Dwarka Somnath Tour</a>
                            <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/4-Days-Saurashtra-Tour-with-Porbandar">4 Days - Saurashtra Tour with Porbandar</a>
                            <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/5-Days-Dwarka-Somnath-Diu-&-Gir-Tour">5 Days - Dwarka Somnath Diu & Gir Tour</a>
                            <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/6-Days-Dwarka-Somnath-Diu-&-Gir-Tour">6 Days - Dwarka Somnath Diu & Gir Tour</a>
                            <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/7-Days-Dwarka-Somnath-Diu-&-Gir-Tour">7 Days - Dwarka Somnath Diu & Gir Tour</a>
                            <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/8-Days-Dwarka-Somnath-with-Bhuj">8 Days - Dwarka Somnath with Bhuj</a>
                            <a class="block <?php echo $dropdownLinkClass; ?>" href="/gujarattravels/Regular-tour/9-Days-Saurashtra-with-SOU-&-Kutch">9 Days - Saurashtra with SOU & Kutch</a>
                        </div>
                    </div>
                </div>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-red-100 focus:bg-red-200 focus:outline-none focus:shadow-outline">
                        <span class="text-base font-bold uppercase">Hotels</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-5 h-5 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute bg-white right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-60 z-50">
                        <div class="z-50 px-2 py-2 bg-white rounded-md shadow ">
                            <?php
                            $hotels = [
                                'Hotels in Ahmedabad' => '/gujarattravels/Hotels/Hotels-in-Ahmedabad',
                                'Hotels in Dwarka' => '/gujarattravels/Hotels/Hotels-in-Dwarka',
                                'Hotels in Somnath' => '/gujarattravels/Hotels/Hotels-in-somnath',
                                'Hotels in Gir' => '/gujarattravels/Hotels/Hotels-in-Gir',
                                'Hotels in Diu' => '/gujarattravels/Hotels/Hotels-in-Diu',
                                'Hotels in SOU' => '/gujarattravels/Hotels/Hotels-in-SOU',
                                // 'Hotels in Rann of Kutch' => '/gujarattravels/Hotels/Hotels-in-Rann-of-Kutch'
                            ];
                            ?>

                            <?php foreach ($hotels as $text => $link) : ?>
                                <a class="block <?php echo $dropdownLinkClass; ?>" href="<?php echo $link; ?>"><?php echo $text; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <a class="<?php echo $linkClass; ?>" href="/gujarattravels/blogs.php">Blogs</a>
                <a class="<?php echo $linkClass; ?>" href="/gujarattravels/about-us">About</a>
                <a href="/gujarattravels/contact-us" class="px-2 mt-2">
                    <button class="select-none font-sans font-bold text-center uppercase transition-all text-xs py-3 px-6 rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20" type="button">
                        Contact Now
                    </button>
                </a>
            </nav>
        </div>
    </div>
</main>