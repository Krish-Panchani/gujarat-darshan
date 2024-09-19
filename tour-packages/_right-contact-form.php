<div class="mt-12 mx-auto px-4 p-8 bg-white sm:max-w-lg sm:px-8 sm:rounded-xl shadow-lg">
    <h3 class="text-red-400 font-semibold">
        Contact Us
    </h3>
    <p class="text-black text-2xl font-semibold sm:text-3xl pb-6">
        Get Free Quote
    </p>
    <form action="/smtp/send.php" method="POST" class="space-y-5">
        <div>
            <label class="font-medium">
                Full Name
            </label>
            <input type="text" name="full_name" required placeholder="John Doe" class="w-full mt-2 px-3 py-2 text-gray-700 bg-transparent border border-gray-300 rounded-lg focus:border-blue-400 focus:ring focus:ring-blue-200 outline-none" />
        </div>
        <div>
            <label class="font-medium">
                Email
            </label>
            <input type="email" name="email" required placeholder="johndoe@example.com" class="w-full mt-2 px-3 py-2 text-gray-700 bg-transparent border border-gray-300 rounded-lg focus:border-blue-400 focus:ring focus:ring-blue-200 outline-none" />
        </div>
        <div>
            <label class="font-medium">
                Phone Number
            </label>
            <input type="tel" name="phone" required placeholder="+1 (555) 000-000" class="w-full mt-2 px-3 py-2 text-gray-700 bg-transparent border border-gray-300 rounded-lg focus:border-blue-400 focus:ring focus:ring-blue-200 outline-none" />
        </div>
        <div>
            <label class="font-medium">
                Preferred Destination
            </label>
            <input type="text" name="destination" required placeholder="Destination" class="w-full mt-2 px-3 py-2 text-gray-700 bg-transparent border border-gray-300 rounded-lg focus:border-blue-400 focus:ring focus:ring-blue-200 outline-none" />
        </div>
        <div>
            <label class="font-medium">
                Travel Dates
            </label>
            <div class="flex space-x-2">
                <input type="date" name="start_date" required class="w-full mt-2 px-3 py-2 text-gray-700 bg-transparent border border-gray-300 rounded-lg focus:border-blue-400 focus:ring focus:ring-blue-200 outline-none" />
                <input type="date" name="end_date" required class="w-full mt-2 px-3 py-2 text-gray-700 bg-transparent border border-gray-300 rounded-lg focus:border-blue-400 focus:ring focus:ring-blue-200 outline-none" />
            </div>
        </div>
        <div>
            <label class="font-medium">
                Number of Travelers
            </label>
            <input type="number" name="travelers" required min="1" placeholder="1" class="w-full mt-2 px-3 py-2 text-gray-700 bg-transparent border border-gray-300 rounded-lg focus:border-blue-400 focus:ring focus:ring-blue-200 outline-none" />
        </div>
        <div>
            <label class="font-medium">
                Additional Comments
            </label>
            <textarea name="comments" placeholder="Any additional comments..." class="w-full mt-2 h-36 px-3 py-2 resize-none bg-transparent border border-gray-300 rounded-lg focus:border-blue-400 focus:ring focus:ring-blue-200 outline-none"></textarea>
        </div>
        <button type="submit" class="w-full px-4 py-2 text-white font-medium bg-blue-500 hover:bg-blue-400 rounded-lg duration-150">
            Submit
        </button>
    </form>
</div>
