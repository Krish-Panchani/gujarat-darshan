<!-- form-modal.php -->
<div id="tourModal" class="fixed top-0 left-0 items-center justify-center bg-black bg-opacity-50 hidden z-50">
    <div class="relative bg-white rounded-lg shadow-lg max-w-lg w-full p-8 space-y-6 max-h-dvh overflow-y-auto">
        <button type="button" id="closeModal" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <h2 class="text-2xl font-semibold mb-4 text-center text-gray-800">Plan Your Perfect Tour</h2>

        <form id="tourForm" action="/smtp/send.php" method="POST" class="space-y-6">
            <div class="flex flex-col">
                <label for="full_name" class="text-sm font-medium text-gray-700">Your Name</label>
                <input type="text" id="full_name" name="full_name" required class="mt-2 px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <span id="nameError" class="text-red-500 text-sm hidden">Please enter your name.</span>
            </div>

            <div class="flex flex-col">
                <label for="email" class="text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" required class="mt-2 px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <span id="emailError" class="text-red-500 text-sm hidden">Please enter a valid Gmail address.</span>
            </div>

            <div class="flex flex-col">
                <label for="phone" class="text-sm font-medium text-gray-700">Contact Number</label>
                <input type="tel" id="phone" name="phone" required class="mt-2 px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <span id="phoneError" class="text-red-500 text-sm hidden">Please enter a valid phone number.</span>
            </div>

            <div class="flex flex-col">
                <label for="destination" class="text-sm font-medium text-gray-700">Preferred Destination</label>
                <input type="text" id="destination" name="destination" required class="mt-2 px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <span id="destinationError" class="text-red-500 text-sm hidden">Please enter a destination.</span>
            </div>

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

            <div class="flex flex-col">
                <label for="travelers" class="text-sm font-medium text-gray-700">Number of Travelers</label>
                <input type="number" id="travelers" name="travelers" min="1" max="50" required class="mt-2 px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <span id="travelersError" class="text-red-500 text-sm hidden">Please enter a valid number of travelers.</span>
            </div>

            <div class="flex flex-col">
                <label for="comments" class="text-sm font-medium text-gray-700">Additional Comments</label>
                <textarea id="comments" name="comments" rows="3" class="mt-2 px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Tell us anything else we should know..."></textarea>
            </div>

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
    const tourForm = document.getElementById('tourForm');

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
        if (event.target === modal) {
            modal.classList.add('hidden');
        }
    });

    // Form Validation
    tourForm.addEventListener('submit', (event) => {
        event.preventDefault();
        let valid = true;

        // Reset previous error messages
        document.querySelectorAll('.text-red-500').forEach(el => {
            el.classList.add('hidden');
        });

        // Validate Name
        const name = document.getElementById('full_name').value.trim();
        if (!name) {
            document.getElementById('nameError').classList.remove('hidden');
            valid = false;
        }

        // Validate Email (Gmail)
        const email = document.getElementById('email').value.trim();
        const emailRegex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
        if (!emailRegex.test(email)) {
            document.getElementById('emailError').classList.remove('hidden');
            valid = false;
        }

        // Validate Phone Number
        const phone = document.getElementById('phone').value.trim();
        const phoneRegex = /^\+?[0-9]{10,14}$/; // Adjust this regex based on your requirements
        if (!phoneRegex.test(phone)) {
            document.getElementById('phoneError').classList.remove('hidden');
            valid = false;
        }

        // Validate Destination
        const destination = document.getElementById('destination').value.trim();
        if (!destination) {
            document.getElementById('destinationError').classList.remove('hidden');
            valid = false;
        }

        // Validate Number of Travelers
        const travelers = parseInt(document.getElementById('travelers').value, 10);
        if (travelers < 1 || travelers > 50) {
            document.getElementById('travelersError').classList.remove('hidden');
            valid = false;
        }

        // Submit form if valid
        if (valid) {
            tourForm.submit();
        }
    });
</script>
