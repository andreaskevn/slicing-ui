<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<nav class="bg-white shadow px-4 py-3 sticky top-0 z-50" x-data="{ open: false }">
    <div class="container mx-auto flex items-center">
        <div class="flex items-center space-x-6">
            <div class="flex items-center space-x-2">
                <img src="assets/logo.webp" alt="Logo UMY" class="w-10 h-10 object-contain" />
            </div>

            <div class="hidden md:flex space-x-6 text-gray-700 font-medium">
                <a href="#" class="hover:text-blue-500">Home</a>
                <a href="#" class="hover:text-blue-500">Academy</a>
                <a href="#" class="hover:text-blue-500">Challenge</a>
                <a href="#" class="hover:text-blue-500">Event</a>
                <a href="#" class="hover:text-blue-500">Job</a>
            </div>
        </div>

        <div class="md:hidden ml-auto">
            <button @click="open = !open" class="text-gray-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <div class="md:hidden absolute top-full left-0 w-full bg-white shadow-md" x-show="open" x-transition
        @click.away="open = false">
        <div class="px-4 pt-2 pb-4 space-y-2">
            <a href="#" class="block text-gray-700 hover:bg-gray-100 rounded px-3 py-2">Home</a>
            <a href="#" class="block text-gray-700 hover:bg-gray-100 rounded px-3 py-2">Academy</a>
            <a href="#" class="block text-gray-700 hover:bg-gray-100 rounded px-3 py-2">Challenge</a>
            <a href="#" class="block text-gray-700 hover:bg-gray-100 rounded px-3 py-2">Event</a>
            <a href="#" class="block text-gray-700 hover:bg-gray-100 rounded px-3 py-2">Job</a>
        </div>
    </div>
</nav>
