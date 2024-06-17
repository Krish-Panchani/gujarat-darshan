<?php require_once "_header.php"; ?>
<?php require_once "_navbar.php"; ?>

<div class="w-full relative px-6">
      <div class="swiper vertical-slide-carousel swiper-container relative h-96">
      <div class="swiper-wrapper">
       <div class="swiper-slide">
         <div class="bg1 bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
           <span class="text-8xl font-bold text-white">Welcome to Gujarat Darshan</span>
         </div>
       </div>
       <div class="swiper-slide">
         <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
           <span class="text-3xl font-semibold text-indigo-600">Slide 2 </span>
         </div>
       </div>
       <div class="swiper-slide">
         <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
           <span class="text-3xl font-semibold text-indigo-600">Slide 3 </span>
         </div>
       </div>
      </div>
      <div class="swiper-pagination text-orange-500"></div>
      </div>
      </div>
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