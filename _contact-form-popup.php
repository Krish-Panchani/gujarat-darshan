<!-- form-modal.php -->
<div id="tourModal" class="absolute top-0 left-0 items-center justify-center bg-black bg-opacity-50 hidden z-50">
    <div class="relative bg-white rounded-lg shadow-lg max-w-lg w-full p-8 space-y-6 max-h-28 overflow-y-auto">
        <!-- Close Button (can be fixed on top if needed) -->
        <button type="button" id="closeModal" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <h2 class="text-2xl font-semibold mb-4 text-center text-gray-800">Plan Your Perfect Tour</h2>

        <!-- Tour Inquiry Form -->
        <form action="/smtp/send.php" method="POST" class="space-y-6">
            
            <!-- Name Field -->
            <div class="flex flex-col">
                <label for="name" class="text-sm font-medium text-gray-700">Your Name</label>
                <input type="text" id="name" name="name" required class="mt-2 px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            
            <!-- Email Field -->
            <div class="flex flex-col">
                <label for="email" class="text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" required class="mt-2 px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <!-- Contact Number Field -->
            <div class="flex flex-col">
                <label for="phone" class="text-sm font-medium text-gray-700">Contact Number</label>
                <input type="tel" id="phone" name="phone" required class="mt-2 px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            
            <!-- Destination Field -->
            <div class="flex flex-col">
                <label for="destination" class="text-sm font-medium text-gray-700">Preferred Destination</label>
                <input type="text" id="destination" name="destination" required class="mt-2 px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <!-- Travel Dates Fields -->
            <div class="flex justify-between space-x-4">
                <div class="flex flex-col w-1/2">
                    <label for="start_date" class="text-sm font-medium text-gray-700">Start Date</label>
                    <input type="date" id="start_date" name="start_date" required class="mt-2 px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div class="flex flex-col w-1/2">
                    <label for="end_date" class="text-sm font-medium text-gray-700">End Date</label>
                    <input type="date" id="end_date" name="end_date" required class="mt-2 px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
            </div>

            <!-- Number of Travelers -->
            <div class="flex flex-col">
                <label for="travelers" class="text-sm font-medium text-gray-700">Number of Travelers</label>
                <input type="number" id="travelers" name="travelers" min="1" max="50" required class="mt-2 px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <!-- Additional Comments -->
            <div class="flex flex-col">
                <label for="comments" class="text-sm font-medium text-gray-700">Additional Comments</label>
                <textarea id="comments" name="comments" rows="3" class="mt-2 px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Tell us anything else we should know..."></textarea>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-between items-center">
                <button type="button" id="closeModal" class="px-4 py-2 bg-red-500 text-white rounded-lg shadow-md hover:bg-red-700 transition">Cancel</button>
                <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-700 transition">Submit Inquiry</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Script -->
<script>
    // Modal Handling
    const modal = document.getElementById('tourModal');
    const openModalBtns = document.querySelectorAll('.openModalBtn');
    const closeModalBtn = document.getElementById('closeModal');

    // Open modal when button is clicked
    openModalBtns.forEach(button => {
        button.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });
    });

    // Close modal when the close button is clicked
    closeModalBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    // Close the modal if the user clicks outside of the modal content
    window.addEventListener('click', (event) => {
        if (event.target == modal) {
            modal.classList.add('hidden');
        }
    });
</script>
