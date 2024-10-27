@extends('layouts.app')

@section('title', 'Griya Lansia')

@section('content')
    @php
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
    @endphp

    <section class="bg-white min-h-screen">
        <div class="container">
            <div class="container mx-auto px-16 p-4 py-8 grid md:grid-cols-2 gap-8">
                <!-- Left Column -->
                <div class="space-y-6">
                    <h1 class="text-4xl font-bold text-primary-dark">
                        Jadikan Usia Emas Tanpa Cemas. <br> Mandiri dan Berani Tanpa Tapi
                    </h1>

                    <div class="flex space-x-8">
                        <div class="text-center">
                            <span class="text-4xl font-bold text-tertiary">20+</span>
                            <p class="text-primary-dark">Griya Lansia</p>
                        </div>
                        <div class="text-center">
                            <span class="text-4xl font-bold text-primary-dark">30+</span>
                            <p class="text-primary-dark">Rumah Sakit</p>
                        </div>
                        <div class="text-center">
                            <span class="text-4xl font-bold text-primary-dark">100+</span>
                            <p class="text-primary-dark">Perawat Ahli</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    <h2 class="text-4xl text-primary-dark font-bold mb-4">
                        Bagaimana Griya Lansia Membantu Lansia Mengaktualisasi Diri?
                    </h2>

                    <p class="text-primary-dark mb-4">Urang Tuo <span class="font-bold">Hadir!</span></p>

                    <p class="text-primary-dark text-justify">
                        Menjadi media informasi yang membantu lansia dan
                        keluarga menemukan kembali cerita masa senja
                        yang penuh makna. lewat rekomendasi griya lansia
                        dan informasi layanan yang tersedia, agar lansia
                        tetap berdaya sesuai dengan kebutuhannya.
                    </p>
                </div>
            </div>

            <!-- Griya Lansia Section -->
            <div class="container mx-auto px-16 p-4 py-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-primary-dark">Griya Lansia</h2>
                    {{-- <a href="/griya-lansia" class="text-primary-dark hover:underline">Selengkapnya →</a> --}}
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
                                        class="block w-full px-4 py-2 bg-info text-white text-center rounded-lg hover:bg-info-dark transition duration-300">Detail
                                        →</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Tagline Description -->
            <div class="container mx-auto px-16 p-4 py-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Left column for image -->
                    <div class="grid grid-cols-1 sm:grid-cols-1 gap-6">
                        <div class="text-justify container mx-auto px-16 p-4 py-8">
                            <p class="text-5xl font-bold text-primary-dark">Nikmati Layanan Griya Lansia <span class="text-tertiary">GRATIS</span></p>
                            <p class="mt-2 text-xl text-primary-dark">UPTD Panti Sosial dan Rehabilitasi Lansia Jawa Barat hadir menjadi rumah kedua bagi para orang tua. Terintegrasi dengan satuan pelayanan griya lansia di Regional Daerah Jawa Barat</p>
                        </div>
                        <div class="text-center container mx-auto px-4 py-8 max-w-xs">
                            <a href="#"
                                class="block w-full px-6 py-3 bg-info text-white text-md font-semibold text-center rounded-lg shadow-lg hover:bg-tertiary-dark hover:shadow-xl transform hover:scale-105 transition duration-300 ease-in-out">
                                Cek Syarat Assessment →
                            </a>
                        </div>
                    </div>

                    <!-- Right column for cards -->
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('assets/Img/pexels-tima-miroshnichenko-5591274.jpg') }}" alt="Person"
                            class="w-full max-w-md rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
