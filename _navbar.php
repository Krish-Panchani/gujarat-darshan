<?php 
$linkClass = " px-4 py-2 mt-2 text-base font-bold bg-white rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline";
$dropdownLinkClass = "z-50 block px-4 py-2 mt-2 text-sm font-semibold bg-white rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline";

?>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="w-full text-gray-700 bg-white">
    <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
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
            <a class="<?php echo $linkClass;?>" href="#">Home</a>
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <span class="text-base font-bold">Tour packages</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-5 h-5 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-60 z-50">
                    <div class="z-50 px-2 py-2 bg-white rounded-md shadow">
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">Rann of kutch package</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">Dwarka tour packages</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">somnath tour packages</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">dwarka somnath tour</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">pancha dwarka yatra</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">statue of unity tour</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">saurashtra tour ahmedabad</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">gir jungle safari</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">gujarat diu tour</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">best of kutch tour</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">colours of gujarat tour</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">gujarat desert beach tour</a>
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
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">2 Days - Statue of Unity Tour</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">3 Days - Dwarka Somnath Tour</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">3 Days - Dwarka Somnath with SOU</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">4 Days - Dwarka Somnath Tour</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">4 Days - Saurashtra Tour with Porbandar</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">5 Days - Dwarka Somnath Diu & Gir Tour</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">6 Days - Dwarka Somnath Diu & Gir Tour</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">7 Days - Dwarka Somnath Diu & Gir Tour</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">8 Days - Dwarka Somnath with Bhuj</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">9 Days - Saurashtra with SOU & Kytch</a>
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
                        <a class="block <?php echo $dropdownLinkClass;?>" href="Hotels/Hotels-in-somnath">Hotels in Somnath</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">Hotels in Dwarka</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">Hotels in Ahmedabad</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">Hotels in Gir</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">Hotels in Diu</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">Hotels in Rajkot</a>
                        <a class="block <?php echo $dropdownLinkClass;?>" href="#">Hotels in Rann of Kutch</a>
                    </div>
                </div>
            </div>
            
            <a class="<?php echo $linkClass;?>" href="#">About</a>
            <a class="<?php echo $linkClass;?>" href="#">Contact</a>
        </nav>
    </div>
</div>