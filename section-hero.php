<?php require_once "_header.php"; ?>
<?php require_once "_navbar.php"; ?>
<section
  class="tour-details-section mt-10 flex flex-col md:flex-row text-left w-[90%] m-auto gap-3 md:gap-0"
>
  <section
    class="tour_details flex flex-col w-full md:w-[70%] bg-slate-100 p-3 h-auto gap-4"
  >
    <div class="tour-overview w-full flex flex-col shadow-lg h-auto">
      <div class="tour-overview-header flex justify-between p-2 w-full">
        <div class="icon flex gap-2 items-center font-semibold">
          <i class="fa-solid fa-map"></i>
          <h3>Tour overview</h3>
        </div>
        <div class="flex gap-2 items-center">
          <h3 class="uppercase text-[#be000b] font-semibold">Expand all</h3>
          <i class="fa-solid fa-caret-down text-[#be000b]"></i>
        </div>
      </div>
      <div class="tour-overview-desc p-2">
        <p class="text-sm">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit
          voluptatibus ducimus reprehenderit voluptates ipsa doloremque nisi
          consectetur deleniti commodi. Incidunt laboriosam inventore ut?
        </p>
      </div>
    </div>
    <div class="w-full flex flex-col shadow-lg h-auto py-3">
      <div class="tour-gallery-header px-2 py-4 w-full">
        <div class="icon flex gap-2 items-center font-semibold">
          <i class="fa-solid fa-map"></i>
          <h3>Trip itinerary</h3>
        </div>
      </div>
      <div class="tour-gallery w-full flex flex-col md:flex-row gap-3">
        <div
          class="gallery-image w-full md:w-[40%] flex justify-center items-center"
        >
          <img
            class="rounded-xl w-full"
            src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8dHJhdmVsJTVDfGVufDB8fDB8fHww"
            alt=""
          />
        </div>
        <div class="gallery-desc flex flex-wrap w-full md:w-[60%]">
          <div class="gallery-desc-item py-3 md:py-1 w-1/2 flex gap-2">
            <div class="gallery-desc-icon">
              <i class="fa-solid fa-flag text-sm"></i>
            </div>
            <div class="gallery-desc-content flex flex-col">
              <span class="font-semibold text-base">Tour Name</span>
              <span class="text-xs">Dwarka Somnath Tour</span>
            </div>
          </div>
          <div class="gallery-desc-item py-3 md:py-1 w-1/2 flex gap-2">
            <div class="gallery-desc-icon">
              <i class="fa-solid fa-flag text-sm"></i>
            </div>
            <div class="gallery-desc-content flex flex-col">
              <span class="font-semibold text-base">Tour Name</span>
              <span class="text-xs">Dwarka Somnath Tour</span>
            </div>
          </div>
          <div class="gallery-desc-item py-3 md:py-1 w-1/2 flex gap-2">
            <div class="gallery-desc-icon">
              <i class="fa-solid fa-flag text-sm"></i>
            </div>
            <div class="gallery-desc-content flex flex-col">
              <span class="font-semibold text-base">Tour Name</span>
              <span class="text-xs">Dwarka Somnath Tour</span>
            </div>
          </div>
          <div class="gallery-desc-item py-3 md:py-1 w-1/2 flex gap-2">
            <div class="gallery-desc-icon">
              <i class="fa-solid fa-flag text-sm"></i>
            </div>
            <div class="gallery-desc-content flex flex-col">
              <span class="font-semibold text-base">Tour Name</span>
              <span class="text-xs">Dwarka Somnath Tour</span>
            </div>
          </div>
          <div class="gallery-desc-item py-3 md:py-1 w-1/2 flex gap-2">
            <div class="gallery-desc-icon">
              <i class="fa-solid fa-flag text-sm"></i>
            </div>
            <div class="gallery-desc-content flex flex-col">
              <span class="font-semibold text-base">Tour Name</span>
              <span class="text-xs">Dwarka Somnath Tour</span>
            </div>
          </div>
          <div class="gallery-desc-item py-3 md:py-1 w-1/2 flex gap-2">
            <div class="gallery-desc-icon">
              <i class="fa-solid fa-flag text-sm"></i>
            </div>
            <div class="gallery-desc-content flex flex-col">
              <span class="font-semibold text-base">Tour Name</span>
              <span class="text-xs">Dwarka Somnath Tour</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="trip-itinerary w-full flex flex-col shadow-lg h-auto py-3">
      <div class="trip-itinerary-header flex justify-between px-2 py-4 w-full">
        <div class="icon flex gap-2 items-center font-semibold">
          <i class="fa-solid fa-map"></i>
          <h3>Trip itinerary</h3>
        </div>
        <div class="flex gap-2 items-center">
          <h3 class="uppercase text-[#be000b] font-semibold">Expand all</h3>
          <i class="fa-solid fa-caret-down text-[#be000b]"></i>
        </div>
      </div>
      <div class="trip-itinerary-details flex flex-col gap-2">
        <details class="border border-gray-400">
          <summary
            class="font-bold border border-gray-400 list-none flex items-center"
          >
            <i
              class="fa-solid fa-location-dot p-4 bg-green-500 flex items-center justify-center text-white"
            ></i>
            <p class="pl-2 text-sm md:text-base">Day 1: Arrive Dwarka</p>
          </summary>
          <p class="pl-10 py-2 text-sm md:text-base">
            Epcot is a theme park at Walt Disney World Resort featuring exciting
            attractions, international pavilions, award-winning fireworks and
            seasonal special events.
          </p>
        </details>
        <details class="border border-gray-400">
          <summary
            class="font-bold border border-gray-400 list-none flex items-center"
          >
            <i
              class="fa-solid fa-location-dot p-4 bg-green-500 flex items-center justify-center text-white"
            ></i>
            <p class="pl-2 text-sm md:text-base">Day 2: Arrive Dwarka</p>
          </summary>
          <p class="pl-10 py-2 text-sm md:text-base">
            Epcot is a theme park at Walt Disney World Resort featuring exciting
            attractions, international pavilions, award-winning fireworks and
            seasonal special events.
          </p>
        </details>
      </div>
    </div>
    <div class="inclusion-excusion w-full flex flex-col shadow-lg h-auto py-3">
      <div
        class="inclusion-excusion-header flex justify-between px-2 py-4 w-full"
      >
        <div class="icon flex gap-2 items-center font-semibold">
          <i class="fa-solid fa-map"></i>
          <h3>Inclusion / Excusion</h3>
        </div>
        <div class="flex gap-2 items-center">
          <h3 class="uppercase text-[#be000b] font-semibold">Expand all</h3>
          <i class="fa-solid fa-caret-down text-[#be000b]"></i>
        </div>
      </div>
      <div
        class="inclusion-exclusion-details w-full flex md:justify-between flex-col md:flex-row gap-2"
      >
        <div class="inclusion w-full md:w-1/2 flex flex-col gap-3">
          <h3 class="uppercase font-semibold">inclusions</h3>
          <div class="flex items-center gap-2">
            <i
              class="fa-solid fa-check p-3 flex items-center justify-center text-white bg-green-500"
            ></i>
            <span>Deluxe hotel night stays</span>
          </div>
          <div class="flex items-center gap-2">
            <i
              class="fa-solid fa-check p-3 flex items-center justify-center text-white bg-green-500"
            ></i>
            <span>Deluxe hotel night stays</span>
          </div>
          <div class="flex items-center gap-2">
            <i
              class="fa-solid fa-check p-3 flex items-center justify-center text-white bg-green-500"
            ></i>
            <span>Deluxe hotel night stays</span>
          </div>
        </div>
        <div class="exclusion w-full md:w-1/2 flex flex-col gap-3">
          <h3 class="uppercase font-semibold">exclusions</h3>
          <div class="flex items-center gap-2">
            <i
              class="fa-solid fa-xmark p-3 flex items-center justify-center text-white bg-red-500"
            ></i>
            <span>Deluxe hotel night stays</span>
          </div>
          <div class="flex items-center gap-2">
            <i
              class="fa-solid fa-xmark p-3 flex items-center justify-center text-white bg-red-500"
            ></i>
            <span>Deluxe hotel night stays</span>
          </div>
          <div class="flex items-center gap-2">
            <i
              class="fa-solid fa-xmark p-3 flex items-center justify-center text-white bg-red-500"
            ></i>
            <span>Deluxe hotel night stays</span>
          </div>
        </div>
      </div>
    </div>
    <div class="tour-hotels">
      <div class="tour-hotels-header flex justify-between px-2 py-4 w-full">
        <div class="icon flex gap-2 items-center font-semibold">
          <i class="fa-solid fa-map"></i>
          <h3>Tour hotels</h3>
        </div>
      </div>
      <div class="hotels-table-large hidden md:block">
        <table class="flex flex-col">
          <tr class="grid grid-cols-4 p-2 border border-gray-400">
            <th
              class="uppercase font-semibold flex items-center text-sm lg:text-base p-2"
            >
              city
            </th>
            <th
              class="uppercase font-semibold flex items-center text-sm lg:text-base p-2"
            >
              Standard hotels
            </th>
            <th
              class="uppercase font-semibold flex items-center text-sm lg:text-base p-2"
            >
              Deluxe hotels
            </th>
            <th
              class="uppercase font-semibold flex items-center text-sm lg:text-base p-2"
            >
              Luxury hotels
            </th>
          </tr>
          <tr class="grid grid-cols-4 p-2 border border-gray-400">
            <td>Dwarka</td>
            <td>Rudra Plaza</td>
            <td>The Dwarka</td>
            <td>VIST Devbhumi</td>
          </tr>
        </table>
      </div>
      <div class="hotels-table-small block md:hidden">
        <div class="flex flex-col">
          <div
            class="flex justify-between px-2 py-3 border border-gray-400 bg-blue-50"
          >
            <h2 class="uppercase font-semibold text-sm">city</h2>
            <p class="text-sm">Dwarka</p>
          </div>
          <div
            class="flex justify-between px-2 py-3 border border-gray-400 bg-blue-50"
          >
            <h2 class="uppercase font-semibold text-sm">city</h2>
            <p class="text-sm">Dwarka</p>
          </div>
          <div
            class="flex justify-between px-2 py-3 border border-gray-400 bg-blue-50"
          >
            <h2 class="uppercase font-semibold text-sm">city</h2>
            <p class="text-sm">Dwarka</p>
          </div>
          <div
            class="flex justify-between px-2 py-3 border border-gray-400 bg-blue-50"
          >
            <h2 class="uppercase font-semibold text-sm">city</h2>
            <p class="text-sm">Dwarka</p>
          </div>
        </div>
      </div>
    </div>
    <div class="tour-benefits">
      <div class="tour-benefits-header flex justify-between px-2 py-4 w-full">
        <div class="icon flex gap-2 items-center font-semibold">
          <i class="fa-solid fa-map"></i>
          <h3>Tour Benefits</h3>
        </div>
      </div>
      <div class="tour-benefits-details flex flex-col gap-2">
        <div class="flex p-2 items-center gap-2">
          <i class="fa-solid fa-map"></i>
          <span class="text-sm md:text-base">Lorem ipsum dolor sit amet.</span>
        </div>
        <div class="flex p-2 items-center gap-2">
          <i class="fa-solid fa-map"></i>
          <span class="text-sm md:text-base">Lorem ipsum dolor sit amet.</span>
        </div>
        <div class="flex p-2 items-center gap-2">
          <i class="fa-solid fa-map"></i>
          <span class="text-sm md:text-base">Lorem ipsum dolor sit amet.</span>
        </div>
      </div>
    </div>
  </section>
  <section class="tour_payment flex w-full md:w-[30%] bg-slate-400 p-3">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus doloremque
    eos omnis maxime consequuntur assumenda praesentium est sit quisquam dolore,
    possimus, incidunt quo aliquid! Deleniti cupiditate, corrupti at perferendis
    ipsam iste asperiores repudiandae nihil architecto excepturi voluptatem quas
    veniam perspiciatis sed voluptas molestiae explicabo laudantium, consectetur
    assumenda sequi! Dignissimos in rerum corporis est quidem rem quasi!
  </section>
</section>

<?php require_once "_footer.php"; ?>
</body>

</html>