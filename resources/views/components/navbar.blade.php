<nav class="bg-neutral-light shadow-lg py-4 lg:px-16 px-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('assets/Logo/Logo Primary.png') }}" alt="Logo" class="w-16 md:w-24 lg:w-32 h-auto">
        </div>

        <!-- Mobile Menu Icon -->
        <div class="lg:hidden flex items-center text-primary text-2xl">
            <button data-collapse-toggle="mobile-menu" type="button" class="focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <!-- Menu (for larger screens) -->
        <div class="hidden lg:flex items-center space-x-8">
            <a href="/beranda" class="text-gray-700 hover:text-primary transition font-medium">Home</a>
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class="relative focus:outline-none font-medium text-gray-700 hover:text-primary transition"
                type="button">
                Program <i class="fa-solid fa-chevron-down pl-2"></i>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown" class="z-50 hidden bg-neutral-light rounded-lg w-44 shadow-lg absolute mt-2">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="/perawatan" class="block px-4 py-2 hover:bg-gray-100 transition">Perawatan</a>
                    </li>
                    <li>
                        <a href="/pemberdayaan" class="block px-4 py-2 hover:bg-gray-100 transition">Pemberdayaan</a>
                    </li>
                    <li>
                        <a href="/komunitas" class="block px-4 py-2 hover:bg-gray-100 transition">Komunitas</a>
                    </li>
                </ul>
            </div>


            <!-- Search Bar -->
            <div>
                <input type="text" placeholder="Search Griya Lansia"
                    class="bg-gray-200 border border-gray-300 rounded-lg py-2 px-4 text-gray-700 focus:ring-primary focus:border-primary transition" />
            </div>
        </div>

        <!-- Buttons and Profile Icon -->
        <div class="hidden lg:flex items-center space-x-4">
            <a href="/register"
                class="bg-primary text-neutral-light px-4 py-2 rounded-lg hover:bg-primary-dark transition font-medium">Daftar</a>
            <a href="/masuk"
                class="border border-primary text-primary px-4 py-2 rounded-lg hover:bg-primary hover:text-white transition font-medium">Masuk</a>
        </div>
    </div>

    <!-- Mobile Menu (collapsed) -->
    <div id="mobile-menu" class="hidden lg:hidden mt-4">
        <ul class="space-y-4">
            <li><a href="/beranda" class="block text-gray-700 hover:text-primary transition">Home</a></li>
            <li><a href="/perawatan" class="block text-gray-700 hover:text-primary transition">Perawatan</a></li>
            <li><a href="/pemberdayaan" class="block text-gray-700 hover:text-primary transition">Pemberdayaan</a></li>
            <li><a href="/komunitas" class="block text-gray-700 hover:text-primary transition">Komunitas</a></li>
            <li><a href="/register" class="block text-primary hover:text-primary-dark transition">Daftar</a></li>
            <li><a href="/masuk" class="block text-primary hover:text-primary-dark transition">Masuk</a></li>
        </ul>
    </div>
</nav>
