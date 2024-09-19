<?php
$title = "Best Tour Operator in Ahmedabad, Gujarat | Gujarat Darshan";
$desc = "Looking for a reliable and affordable tour operator in Ahmedabad? Look no further than Gujarat Darshan! We offer a wide range of tour packages that are perfect for both leisure and business travelers.";
require_once "_header.php"; ?>

<?php require_once "_navbar.php"; ?>
<?php require_once "_whatsapp_btn.php"; ?>


<div class="w-full relative px-6">
  <div class="swiper vertical-slide-carousel swiper-container relative h-96 rounded-3xl">
    <div class="swiper-wrapper">
      <div class="bg1 swiper-slide ">
        <div class="slide-div h-96 flex justify-center items-center flex-col">
          <h3 class="swiper-text px-4 text-3xl sm:text-6xl font-bold text-white">Welcome to Gujarat Darshan</h3>
          <div class="flex justify-center items-center gap-6">
            <a href="/contact-us">
              <button class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gradient-to-r from-rose-400 to-red-500 rounded-lg hover:bg-red-400 mt-8">Explore Now</button>
            </a>
            <button class="openModalBtn px-6 py-2 bg-indigo-600 text-white rounded-lg shadow-lg hover:bg-indigo-800 transition mt-8">
              Inquire Now
            </button>
          </div>
        </div>
      </div>
      <div class="bg2 swiper-slide">
        <div class="slide-div h-96 flex justify-center items-center flex-col">
          <h1 class="text-3xl sm:text-6xl px-4 font-semibold text-white">Best Tour Operator in Ahmedabad, Gujarat</h1>
          <a href="/contact-us">
            <button class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-green-600 rounded-lg hover:bg-green-500 mt-8">Our Packages</button>
          </a>
        </div>
      </div>
      <div class="bg3 swiper-slide">
        <div class="slide-div  h-96 flex justify-center items-center flex-col">
          <h3 class="text-3xl sm:text-6xl px-4 font-semibold text-white">Book your trip with Gujarat Darshan</h3>
          <a href="/contact-us">
            <button class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-red-600 rounded-lg hover:bg-red-500 mt-8">Contact Us</button>
          </a>
        </div>
      </div>
      <div class="bg2 swiper-slide">
        <div class="slide-div  h-96 flex justify-center items-center flex-col">
          <h2 class="text-3xl sm:text-6xl px-4 font-semibold text-white">Hire Tempo traveller with Gujarat Darshan</h2>
          <a href="/contact-us">
            <button class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-red-600 rounded-lg hover:bg-red-500 mt-8">Contact Us</button>
          </a>
        </div>
      </div>
    </div>
    <div class="swiper-pagination text-orange-500"></div>
  </div>
</div>
<?php require '_contact-form-popup.php'; ?>


<section class="py-8">
  <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-8">
    <div class="relative">

      <section>
        <div class="max-w-screen-xl mx-auto px-4 py-8 gap-12 text-gray-600 overflow-hidden md:px-8 md:flex">
          <div class="flex flex-col space-y-5  justify-between ">
            <h2 class="text-4xl text-gray-800 font-extrabold sm:text-5xl">
              Hire <span class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-transparent">Car, Bus and Tempo </span>
              rental Service
            </h2>
            <p>We also offer car, bus & tempo rental services for local, outstation & corporate functions. Our fleet of cars includes Luxury, Premium & Budget vehicles that are well-maintained and driven by experienced drivers.
            </p>

          </div>

          <!-- <div class="flex-1 sm:pt-4 pt-12">
                    <img src="./images/about-img.webp" class="max-w-xs sm:max-w-md " />
                </div> -->
        </div>
      </section>
    </div>
    <div class="relative mt-12">
      <ul class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <?php
        $services = [
          [
            'image' => 'toyota-innova-crysta-gujarat-darshan.png',
            'title' => 'Hire Car',
            'description' => 'We have a wide range of cars to suit your needs and budget. Just tell us what you need and we’ll provide it for you.',
            'url' => 'car-hire-in-ahmedabad.php'
          ],
          [
            'image' => 'tempo-hire.png',
            'title' => 'Hire Tempo',
            'description' => 'If you need a tempo for local or outstation travel, we’ve got you covered. Our tempo rental services are reliable and affordable.',
            'url' => 'hire-tempo-traveller-ahmedabad.php'
          ],
          [
            'image' => 'bus-hire.png',
            'title' => 'Hire Bus',
            'description' => 'Our buses are perfect for group travel. We have a variety of bus sizes to choose from, so just let us know how many people you’re travelling with and we’ll find the perfect bus for you.',
            'url' => 'bus-hire-ahmedabad.php'
          ],
        ];

        foreach ($services as $service) {
        ?>
          <li class="bg-white space-y-3 p-4 border rounded-lg">
            <img class="object-cover object-center" src="images/<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>">
            <h3 class="text-lg font-semibold text-gray-800"><?php echo $service['title']; ?></h3>
            <p class="mt-2 text-sm"><?php echo $service['description']; ?></p>
            <a href="/gujarattravels/<?php echo $service['url']; ?>" class="flex justify-end">
              <button class="mt-6 select-none font-sans font-bold text-center uppercase transition-all text-xs py-3 px-6 rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20" type="button">
                View All
              </button>
            </a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</section>

<section class="py-8">
  <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-8">
    <div class="relative">

      <section>
        <div class="max-w-screen-xl mx-auto px-4 py-8 gap-12 text-gray-600 overflow-hidden md:px-8 md:flex">
          <div class="flex flex-col space-y-5  justify-between ">
            <h2 class="text-4xl text-gray-800 font-extrabold sm:text-5xl">
              Discover India's <span class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-transparent">Enchantment </span> with Our Exquisite Tour Packages
            </h2>
            <p>Embark on unforgettable journeys through the heart of India with our carefully curated tour packages. From the vibrant cities to serene landscapes, we offer a diverse range of experiences tailored to your preferences. Explore the mystical <strong>Runn of Kutch</strong>, the holy <strong>city of Dwarka</strong>, and the cultural <strong>richness of Saurashtra</strong> with our expertly designed itineraries. Let us handle the logistics, so you can focus on creating lasting memories. Book your dream vacation today!
            </p>

          </div>

          <!-- <div class="flex-1 sm:pt-4 pt-12">
                    <img src="./images/about-img.webp" class="max-w-xs sm:max-w-md " />
                </div> -->
        </div>
      </section>
    </div>
    <div class="relative mt-12">
      <ul class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <?php
        $services = [
          [
            'image' => 'images/runn-of-kutch-tour-package.png', // Replace with actual image path
            'title' => 'Runn of Kutch Tour: Experience the White Desert Magic',
            'description' => 'Immerse yourself in the enchanting beauty of the world\'s largest salt desert. Explore the vibrant Rann Utsav, discover local culture, and savor authentic Gujarati cuisine on this unforgettable Runn of Kutch tour.',
            'url' => 'tour-packages/rann-of-kutch-package.php' // Replace with actual URL
          ],
          [
            'image' => 'images/dwarka-tour-package.png', // Replace with actual image path
            'title' => 'Dwarka Pilgrimage: Divine Journey to Krishna\'s Abode',
            'description' => 'Embark on a spiritual odyssey to the holy city of Dwarka. Visit sacred temples, take a dip in the Gomti River, and delve into the rich mythology of Lord Krishna. Book your Dwarka pilgrimage now.',
            'url' => 'tour-packages/dwarka-tour-packages.php' // Replace with actual URL
          ],
          [
            'image' => 'images/saurastra-tour-package.png', // Replace with actual image path
            'title' => 'Saurashtra Tour: Explore the Heart of Gujarat',
            'description' => 'Discover the cultural tapestry of Saurashtra. Explore historic landmarks, savor local delicacies, and witness vibrant traditions. Experience the best of Gujarat on our Saurashtra tour.',
            'url' => 'tour-packages/statue-of-unity-tour.php' // Replace with actual URL
          ]
        ];


        foreach ($services as $service) {
        ?>
          <li class="bg-white space-y-3 p-4 border rounded-lg">
            <img class="object-cover object-center" src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>">
            <h3 class="text-lg font-semibold text-gray-800"><?php echo $service['title']; ?></h3>
            <p class="mt-2 text-sm"><?php echo $service['description']; ?></p>
            <a href="/gujarattravels/<?php echo $service['url']; ?>" class="flex justify-end">
              <button class="mt-6 select-none font-sans font-bold text-center uppercase transition-all text-xs py-3 px-6 rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20" type="button">
                View All
              </button>
            </a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</section>

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


<section class="py-8">
  <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-8">
    <div class="relative">

      <section>
        <div class="max-w-screen-xl mx-auto px-4 py-8 gap-12 text-gray-600 overflow-hidden md:px-8 md:flex">
          <div class="flex flex-col space-y-5  justify-between ">
            <h2 class="text-4xl text-gray-800 font-extrabold sm:text-5xl">
              Explore <span class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-transparent">Our Blogs </span> that tell you more about Gujarat
            </h2>
            <p>Discover the hidden gems of Gujarat with our informative blogs. From the <strong>best places to visit in Ahmedabad</strong> to the top tourist attractions in Gandhinagar, our blogs cover a wide range of topics to help you plan your trip. Whether you’re a history buff, a foodie, or an adventure seeker, there’s something for everyone in our blog section. Start exploring today!
            </p>

          </div>
        </div>
      </section>
    </div>
    <section class="flex justify-evenly">
      <div id="blog-container" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3">
        <!-- Skeleton Loader -->
        <div class="skeleton relative mx-4 mt-6 flex max-w-sm flex-col rounded-xl border-2 border-red-400 bg-clip-border text-gray-700 shadow-md backdrop-blur-xl">
          <div class="p-6">
            <div>
              <p class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-right font-semibold text-transparent">Date</p>
            </div>
            <div class="grid h-40 w-72 flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700"></div>
            <span class="skeleton mt-4 text-center text-xl font-bold uppercase text-gray-800">Loading...</span>
          </div>
          <div class="flex content-center items-center justify-between p-6 px-6 pt-0">
            <button class="skeleton mx-auto flex-1 rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 px-6 py-3 text-center text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">Loading..</button>
          </div>
        </div>
        <div class="skeleton relative mx-4 mt-6 flex max-w-sm flex-col rounded-xl border-2 border-red-400 bg-clip-border text-gray-700 shadow-md backdrop-blur-xl">
          <div class="p-6">
            <div>
              <p class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-right font-semibold text-transparent">Date</p>
            </div>
            <div class="grid h-40 w-72 flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700"></div>
            <span class="skeleton mt-4 text-center text-xl font-bold uppercase text-gray-800">Loading...</span>
          </div>
          <div class="flex content-center items-center justify-between p-6 px-6 pt-0">
            <button class="skeleton mx-auto flex-1 rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 px-6 py-3 text-center text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">Loading..</button>
          </div>
        </div>
        <div class="skeleton relative mx-4 mt-6 flex max-w-sm flex-col rounded-xl border-2 border-red-400 bg-clip-border text-gray-700 shadow-md backdrop-blur-xl">
          <div class="p-6">
            <div>
              <p class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-right font-semibold text-transparent">Date</p>
            </div>
            <div class="grid h-40 w-72 flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700"></div>
            <span class="skeleton mt-4 text-center text-xl font-bold uppercase text-gray-800">Loading...</span>
          </div>
          <div class="flex content-center items-center justify-between p-6 px-6 pt-0">
            <button class="skeleton mx-auto flex-1 rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 px-6 py-3 text-center text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">Loading..</button>
          </div>
        </div>

      </div>
    </section>
    <div class="flex justify-center items-center gap-x-3 px-4 py-4 text-sm sm:text-xs">
      <a href="/gujarattravels/blogs.php" class="flex items-center justify-center gap-x-1 py-2 px-4 text-white font-medium bg-gray-800 duration-150 hover:bg-gray-700 active:bg-gray-900 rounded-full md:inline-flex">
        View All Blogs
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
          <path fillRule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clipRule="evenodd" />
        </svg>
      </a>
    </div>
  </div>
</section>


<div x-data="{ stats: [
        { data: '500+', desc: 'Satisfied Client' },
        { data: '200+', desc: 'Tour Planes' },
        { data: '350+', desc: 'Vehicle Hired' },
    ] 
}">

  <section class="py-28 bg-gray-900">
    <div class="relative z-10 max-w-screen-xl mx-auto px-4 md:px-8">
      <div class="flex flex-col sm:flex-row items-center z-10">
        <div class="z-10">
          <div class="max-w-2xl xl:mx-auto xl:text-center">
            <h3 class="text-white text-3xl font-semibold sm:text-4xl">
              Why choose Gujarat Darshan?
            </h3>
            <p class="mt-3 text-gray-300">
              There are many reasons to choose Gujarat Darshan as your tour operator in Ahmedabad. We are a reliable and affordable tour operator with over 20+years of experience. We offer a wide range of tour packages that are perfect for both leisure and business travelers. Also we have a team of knowledgeable and friendly tour guides who will make your trip even more enjoyable.
            </p>
          </div>
          <div class="mt-12">
            <ul class="flex-wrap gap-x-12 gap-y-10 items-center space-y-8 sm:space-y-0 sm:flex justify-center">
              <template x-for="(item, index) in stats" :key="index">
                <li class="sm:max-w-[15rem]">
                  <h4 class="text-4xl text-white font-semibold" x-text="item.data"></h4>
                  <p class="mt-3 text-gray-400 font-medium" x-text="item.desc"></p>
                </li>
              </template>
            </ul>
          </div>
        </div>
        <img src="images/choose-gujarat-darshan.png" alt="Why Choose Us?" class="pt-8 px-4">
      </div>
      <div class="absolute inset-0 max-w-md mx-auto h-80 blur-[118px] sm:h-72" style="background: linear-gradient(152.92deg, rgba(192, 132, 252, 0.2) 4.54%, rgba(232, 121, 249, 0.26) 34.2%, rgba(192, 132, 252, 0.1) 77.55%)"></div>
    </div>
  </section>
</div>



<script>
  var swiper = new Swiper(".vertical-slide-carousel", {
    loop: true,
    direction: 'vertical',
    mousewheelControl: true,
    mousewheel: {
      releaseOnEdges: true,
    },
    spaceBetween: 30,
    grabCursor: true,
    pagination: {
      el: ".vertical-slide-carousel .swiper-pagination",
      clickable: true,
    },
  });
</script>

<!-- <script src="/js/index.js"></script> -->

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const blogContainer = document.getElementById('blog-container');
    const skeletons = blogContainer.querySelectorAll('.skeleton');

    // Show skeleton loaders initially
    skeletons.forEach(el => el.classList.remove('hidden'));

    // Fetch data from the PHP endpoint
    fetch('api/fetch_index_blogs.php') // Use the actual path to your PHP file
      .then(response => response.json())
      .then(data => {
        // Hide skeleton loaders
        skeletons.forEach(el => el.classList.add('hidden'));

        if (data.success) {
          // Inject the actual blog data
          data.data.forEach(blog => {
            const blogHtml = `
                            <div class="relative mx-4 mt-6 flex max-w-sm flex-col rounded-xl border-2 border-red-400 bg-clip-border text-gray-700 shadow-md backdrop-blur-xl">
                                <div class="p-6">
                                    <div>
                                        <p class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-right font-semibold text-transparent">${blog.date}</p>
                                    </div>
                                    <div class="grid w-full max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
                                        <img class="object-cover object-center" src="${blog.img}" alt="${blog.title}">
                                    </div>
                                    <h3 class="mt-4 text-center text-lg font-bold text-gray-800">${blog.title}</h3>
                                </div>
                                <div class="p-6 pt-0 flex justify-between content-center items-center px-6">
                                <a href="/gujarattravels/blogs/${blog.slug}">
                                    <button class="flex justify-end rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 px-6 py-3 text-center text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">Read Now</button>
                                </div>
                                </a>
                            </div>
                        `;
            blogContainer.insertAdjacentHTML('beforeend', blogHtml);
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

<script>
  // Get modal, button, and close elements
  const modal = document.getElementById('myModal');
  const openModalBtn = document.getElementById('openModal');
  const closeModalBtn = document.getElementById('closeModal');

  // When the user clicks the button, open the modal
  openModalBtn.addEventListener('click', () => {
    modal.classList.remove('hidden');
  });

  // When the user clicks the "close" button, hide the modal
  closeModalBtn.addEventListener('click', () => {
    modal.classList.add('hidden');
  });

  // Close the modal if user clicks outside of the modal content
  window.addEventListener('click', (event) => {
    if (event.target == modal) {
      modal.classList.add('hidden');
    }
  });
</script>

<?php require_once "_footer.php"; ?>