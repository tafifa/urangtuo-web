@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    @php
        $images = ['Mockup-01.png', 'Mockup-02.png', 'Mockup-01.png', 'Mockup-02.png'];
        $services = [
            [
                'name' => 'Perawatan',
                'description' =>
                    'Memberikan dukungan berupa konsultasi perawatan untuk lansia di rumah dan memberikan pelatihan keluarga yang merawat lansia.',
                'icon' => 'assets/Illustration/Il-Perawatan.png',
                'link' => '/perawatan',
            ],
            [
                'name' => 'Pemberdayaan',
                'description' =>
                    'Usaha kebutuhan lansia: Program pemberdayaan ekonomi lansia melalui pelatihan keterampilan dan membantu pemasaran produknya.',
                'icon' => 'assets/Illustration/Il-Pemberdayaan.png',
                'link' => '/pemberdayaan',
            ],
            [
                'name' => 'Griya Lansia',
                'description' =>
                    'Wisma dan perawatan khusus lansia: Menyediakan tempat tinggal dan perawatan 24/7 untuk lansia di lingkungan yang aman dan nyaman.',
                'icon' => 'assets/Illustration/Il-Griya Lansia.png',
                'link' => '/griya-lansia',
            ],
            [
                'name' => 'Komunitas',
                'description' =>
                    'Lansia aktif dengan teman: Mempertemukan dan mengadakan kegiatan sosial untuk lansia agar tetap aktif dan bahagia.',
                'icon' => 'assets/Illustration/Il-Komunitas.png',
                'link' => '/komunitas',
            ],
        ];
        $griyaLansia = [
            [
                'name' => 'Griya Lansia Dinas Sosial Jawa Barat',
                'description' => 'UPTD Induk Dinas Sosial Jawa Barat',
                'rating' => '5.0',
                'address' => 'Ciparay, Kab. Bandung',
            ],
            [
                'name' => 'Panti Sosial Budi Pertiwi',
                'description' => 'Dikelola Pemerintah',
                'rating' => '4.8',
                'address' => 'Cibogo, Bandung',
            ],
            [
                'name' => 'Panti Sosial Senjarawi',
                'description' => 'Dikelola Perorangan',
                'rating' => '4.9',
                'address' => 'Bandung',
            ],
            [
                'name' => 'Nazareth Santo Yusuf',
                'description' => 'Dikelola Perorangan',
                'rating' => '5.0',
                'address' => 'Kota Bandung',
            ],
        ];
        $programs = [
            [
                'name' => 'Kegiatan Menganyam',
                'organization' => 'UPTD Induk Dinas Sosial Jawa Barat',
                'rating' => '5.0',
                'fee' => 'Gratis',
                'capacity' => '100',
            ],
            [
                'name' => 'Kajian Rohani',
                'organization' => 'Panti Sosial Budi Luhur',
                'rating' => '4.8',
                'fee' => 'Gratis',
                'capacity' => '500',
            ],
            [
                'name' => 'Bakti Sosial Mahasiswa',
                'organization' => 'Panti Sosial Senjarawi',
                'rating' => '4.9',
                'fee' => 'Gratis',
                'capacity' => '50',
            ],
            [
                'name' => 'Pelatihan Keperawatan',
                'organization' => 'Nazareth Santo Yusuf',
                'rating' => '5.0',
                'fee' => 'Berbayar',
                'capacity' => '100',
            ],
        ];
    @endphp

    <section class="bg-white min-h-screen">
        <div class="container">
            <!-- Carousel wrapper -->
            <div id="indicators-carousel" class="relative container mx-auto px-16 p-4 py-8" data-carousel="slide"
                data-carousel-interval="3000">
                <!-- Auto slide every 3 seconds -->
                <div class="relative h-56 md:h-96 overflow-hidden rounded-lg">
                    @foreach ($images as $index => $image)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="{{ $index === 0 ? 'active' : '' }}">
                            <img src="{{ asset('assets/Banner/' . $image) }}"
                                class="absolute z-29 block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="Slide {{ $index + 1 }}">
                        </div>
                    @endforeach
                </div>

                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                    @foreach ($images as $index => $image)
                        <button type="button" class="w-3 h-3 rounded-full"
                            aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"
                            data-carousel-slide-to="{{ $index }}"></button>
                    @endforeach
                </div>
            </div>

            <!-- Tagline Section -->
            <div class="text-center container mx-auto px-16 p-4 py-8">
                <p class="text-6xl font-bold text-primary-dark">Lansia Berdaya</p>
                <p class="mt-2 text-6xl font-bold text-primary-dark">Wujudkan Komunitas Berkelanjutan</p>
                <p class="mt-4 text-3xl text-primary-dark">Jadikan usia lebih bermakna. Temukan Komunitas
                    untuk Berdaya dan Sejahtera Bersama</p>
            </div>

            <!-- Services Section -->
            <div class="bg-tertiary-light">
                <div class="container mx-auto px-16 p-4 py-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Left column for image -->
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('assets/Img/pexels-olly-3831645.png') }}" alt="Person"
                                class="w-full max-w-md rounded-lg">
                        </div>

                        <!-- Right column for cards -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            @foreach ($services as $service)
                                <div>
                                    <div class="bg-white p-6 rounded-xl shadow-md flex flex-col items-center">
                                        <img src="{{ asset($service['icon']) }}" alt="{{ $service['name'] }}"
                                            class="w-32 h-32 mb-4 object-contain">
                                        <p class="text-gray-600 my-4 mt-8 flex-grow text-justify">
                                            {{ $service['description'] }}
                                        </p>
                                    </div>

                                    <!-- Center the button and add padding on top -->
                                    <div class="flex justify-center pt-4">
                                        <a href="{{ $service['link'] }}"
                                            class="bg-primary text-white py-2 px-4 rounded-lg hover:bg-primary-dark transition duration-300 ease-in-out text-center">
                                            Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

            <!-- Griya Lansia Section -->
            <div class="container mx-auto px-16 p-4 py-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-primary">Griya Lansia</h2>
                    <a href="/griya-lansia" class="text-primary hover:underline">Selengkapnya →</a>
                </div>

                <div class="overflow-x-auto pb-6">
                    <div class="flex justify-between w-full min-w-max gap-4">
                        @foreach ($griyaLansia as $location)
                            <div class="bg-white p-6 rounded-lg shadow-md w-72 flex-shrink-0 flex flex-col h-[300px]">
                                <div class="flex-grow">
                                    <h3 class="text-xl font-semibold mb-2">{{ $location['name'] }}</h3>
                                    <p class="text-gray-600 mb-2 text-sm">{{ $location['description'] }}</p>
                                    <div class="flex items-center mb-4">
                                        <svg class="w-5 h-5 text-yellow-300 mr-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <p class="ml-2 text-sm font-bold text-gray-900">{{ $location['rating'] }}</p>
                                    </div>
                                    <p class="text-gray-600 text-sm">{{ $location['address'] }}</p>
                                </div>
                                <div class="mt-4">
                                    <a href="#"
                                        class="block w-full px-4 py-2 bg-primary text-white text-center rounded-lg hover:bg-primary-dark transition duration-300">Detail
                                        →</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="bg-info-light">
                <div class="mx-auto px-16 p-4 py-8 text-center">
                    <!-- Icon -->
                    <div class="w-24 h-24 mx-auto mb-6 flex items-center justify-center">
                        <img src="{{ asset('assets/Illustration/program.png') }}" alt="">
                    </div>

                    <!-- Title -->
                    <h2 class="text-3xl font-bold text-teal-600 mb-4">
                        Menghubungkan 20+ Griya Lansia<br>di Kota Bandung
                    </h2>

                    <!-- Description -->
                    <p class="text-gray-600 mb-8">
                        Hadir dengan visi menjadi platform yang mendukung kesejahteraan dan
                        pemberdayaan lansia yang holistik, Urang Tuo tidak hanya memberikan
                        berbagai pelayanan yang dibutuhkan, database yang lengkap pun
                        mendukung dan membantu pengguna menemukan program yang tepat,
                        dilengkapi dengan fitur aksesibilitas yang memberikan kemudahan akses
                        bagi siapapun termasuk disabilitas.
                    </p>

                    <!-- Stakeholder Support -->
                    <div class="">
                        <h3 class="text-xl font-semibold text-yellow-700 mb-4">Stakeholder Support</h3>
                        <img src="{{ asset('assets/Illustration/Logo Dinsos Jabar.png') }}" alt=""
                            class="w-24 h-24 mx-auto mb-6 flex items-center justify-center">
                    </div>
                </div>
            </div>

            <!-- Program Section -->
            <div class="container mx-auto px-16 p-4 py-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-primary">Program</h2>
                    <a href="/program" class="text-primary hover:underline">Selengkapnya →</a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($programs as $index => $program)
                        <div class="bg-white p-6 rounded-lg shadow-md flex flex-col h-ful">
                            <div class="flex-grow">
                                <h3 class="text-xl font-semibold mb-2">{{ $program['name'] }}</h3>
                                <p class="text-gray-600 mb-2 text-sm">{{ $program['organization'] }}</p>
                                <div class="flex items-center mb-2">
                                    <svg class="w-5 h-5 text-yellow-400 mr-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <p class="ml-1 text-sm font-bold text-gray-900">{{ $program['rating'] }}
                                        ({{ $program['fee'] }})
                                    </p>
                                </div>
                                <p class="text-gray-600 text-sm">Kapasitas {{ $program['capacity'] }} Orang</p>
                            </div>
                            <div class="mt-4">
                                <a href="#"
                                    class="block w-full px-4 py-2 bg-primary text-white text-center rounded-lg hover:bg-teal-700 transition duration-300">Selengkapnya
                                    →</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
