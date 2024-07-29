<?php
$title = "Taxi, Cab Hire in Ahmedabad News and Blog | Gujarat Darshan";
$desc = "Taxi, Cab Hire in Ahmedabad News and Blog: Latest news and blog posts about taxi and cab services in Ahmedabad, India.";
require_once "_header.php"; ?>
<?php require_once "_navbar.php"; ?>
<?php require_once "_db-conn.php"; ?>

<section>
    <div class="max-w-screen-xl mx-auto px-4 py-8 gap-12 text-gray-600 overflow-hidden md:px-8 md:flex">
        <div class="flex flex-col space-y-5 justify-center">
            <h1 class="text-4xl text-gray-800 font-extrabold sm:text-5xl">
                Explore our <span class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-transparent">Blogs </span>
            </h1>
        </div>

    </div>
</section>

<section class="flex justify-evenly">
    <div id="blog-container" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3">
        <!-- Skeleton Loader -->
        <div class="skeleton relative mx-4 mt-6 flex max-w-sm flex-col rounded-xl border-2 border-red-400 bg-clip-border text-gray-700 shadow-md backdrop-blur-xl">
            <div class="p-6">
                <div>
                    <p class="bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-right font-semibold text-transparent">Date</p>
                </div>
                <div class="grid h-40 w-72 flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700"></div>
                <h3 class="skeleton mt-4 text-center text-xl font-bold uppercase text-gray-800">Loading...</h3>
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
                <h3 class="skeleton mt-4 text-center text-xl font-bold uppercase text-gray-800">Loading...</h3>
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
                <h3 class="skeleton mt-4 text-center text-xl font-bold uppercase text-gray-800">Loading...</h3>
            </div>
            <div class="flex content-center items-center justify-between p-6 px-6 pt-0">
                <button class="skeleton mx-auto flex-1 rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 px-6 py-3 text-center text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">Loading..</button>
            </div>
        </div>

    </div>
</section>


<?php require_once "_footer.php"; ?>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const blogContainer = document.getElementById('blog-container');
        const skeletons = blogContainer.querySelectorAll('.skeleton');

        // Show skeleton loaders initially
        skeletons.forEach(el => el.classList.remove('hidden'));

        // Fetch data from the PHP endpoint
        fetch('api/fetch_blogs.php') // Use the actual path to your PHP file
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
                                    <h3 class="mt-4 text-center text-xl font-bold uppercase text-gray-800">${blog.title}</h3>
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


</body>

</html>
