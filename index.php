<?php require_once "_header.php"; ?>
<?php require_once "_navbar.php"; ?>

<div class="w-full relative px-6">
  <div class="swiper vertical-slide-carousel swiper-container relative h-96 rounded-3xl">
    <div class="swiper-wrapper">
      <div class="bg1 swiper-slide ">
        <div class="slide-div h-96 flex justify-center items-center flex-col">
          <span class="swiper-text px-4 text-3xl sm:text-6xl font-bold text-white">Welcome to Gujarat Darshan</span>
          <a href="/contact-us">
            <button class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gradient-to-r from-rose-400 to-red-500 rounded-lg hover:bg-red-400 mt-8">Explore Now</button>
          </a>
        </div>
      </div>
      <div class="bg2 swiper-slide">
        <div class="slide-div h-96 flex justify-center items-center flex-col">
          <span class="text-3xl sm:text-6xl px-4 font-semibold text-white">Explore the Glory of Gujarat</span>
          <a href="/contact-us">
            <button class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-green-600 rounded-lg hover:bg-green-500 mt-8">Our Packages</button>
          </a>
        </div>
      </div>
      <div class="bg3 swiper-slide">
        <div class="slide-div  h-96 flex justify-center items-center flex-col">
          <span class="text-3xl sm:text-6xl px-4 font-semibold text-white">Book your trip with Gujarat Darshan</span>
          <a href="/contact-us">
            <button class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-red-600 rounded-lg hover:bg-red-500 mt-8">Contact Us</button>
          </a>
        </div>
      </div>
    </div>
    <div class="swiper-pagination text-orange-500"></div>
  </div>
</div>

<section class="py-14">
  <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-8">
    <div class="relative max-w-2xl mx-auto sm:text-center">
      <div class="relative z-10">
        <h3 class="text-gray-800 text-3xl font-semibold sm:text-4xl">
          Car, Bus and Tempo Rental Services
        </h3>
        <p class="mt-3">
          We also offer car, bus & tempo rental services for local, outstation & corporate functions. Our fleet of cars includes Luxury, Premium & Budget vehicles that are well-maintained and driven by experienced drivers.
        </p>
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
      <ul class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <?php
        $services = [
          [
            'image' => 'car-hire.png',
            'title' => 'Hire Car',
            'description' => 'We have a wide range of cars to suit your needs and budget. Just tell us what you need and we’ll provide it for you.',
          ],
          [
            'image' => 'tempo-hire.png',
            'title' => 'Hire Tempo',
            'description' => 'If you need a tempo for local or outstation travel, we’ve got you covered. Our tempo rental services are reliable and affordable.',
          ],
          [
            'image' => 'bus-hire.png',
            'title' => 'Hire Bus',
            'description' => 'Our buses are perfect for group travel. We have a variety of bus sizes to choose from, so just let us know how many people you’re travelling with and we’ll find the perfect bus for you.',
          ],
        ];

        foreach ($services as $service) {
        ?>
          <li class="bg-white space-y-3 p-4 border rounded-lg">
            <img class="object-cover object-center" src="images/<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>">
            <h3 class="text-lg font-semibold text-gray-800"><?php echo $service['title']; ?></h3>
            <p class="mt-2 text-sm"><?php echo $service['description']; ?></p>
            <a href="#" class="flex justify-end">
              <button class="mt-6 select-none font-sans font-bold text-center uppercase transition-all text-xs py-3 px-6 rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20" type="button">
                Book Now
              </button>
            </a>
          </li>
        <?php } ?>
      </ul>
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

<?php require_once "_footer.php"; ?>