<?php require_once "_header.php"; ?>
<?php require_once "_navbar.php"; ?>


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
        <section>
            <div class="max-w-screen-xl mx-auto px-4 py-16 gap-12 text-gray-600 overflow-hidden md:px-8 md:flex">
                <div class="flex flex-col space-y-5 max-w-xl justify-between ">
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
                        Hotels In <span class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-transparent">Somnath</span>
                    </h1>

                </div>
            </div>
            <div class="relative grid h-56 w-full max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
                <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images.unsplash.com/photo-1552960562-daf630e9278b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80')] bg-cover bg-clip-border bg-top text-gray-700 shadow-none">
                    <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
                </div>
                <div class="relative p-6 px-6 py-6 md:px-12">
                    <h2 class="block font-sans text-xl font-medium leading-[1.5] tracking-normal text-white antialiased">
                       Hotel Name
                    </h2>
                </div>
            </div>
        </section>

        <section>
           
        </section>
    </div>
</div>

<?php require_once "_footer.php"; ?>
</body>

</html>