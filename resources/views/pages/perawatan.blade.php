@extends('layouts.app')

@section('title', 'Perawatan')

@section('content')
    @php
        $cares = [
            [
                'name' => 'Layanan Fisioterapi',
                'organization' => 'RS. Santo Yusuf',
                'rating' => '5.0',
                'address' => 'Kota Bandung',
            ],
            [
                'name' => 'Perawatan Harian',
                'organization' => 'PSTW Budi Pertiwi',
                'rating' => '4.8',
                'address' => 'Cihapit, Bandung',
            ],
            [
                'name' => 'Home Care Service',
                'organization' => 'RSJP Paramarta',
                'rating' => '4.9',
                'address' => 'Soekarno-Hatta, Bandung',
            ],
            [
                'name' => 'Nazareth Santo Yusuf',
                'organization' => 'Dikelola RS. Santo Yusuf',
                'rating' => '5.0',
                'address' => 'Kota Bandung',
            ],
        ];
    @endphp

    <section class="bg-white min-h-screen">
        <div class="container">
            <!-- Tagline Section -->
            <div class="text-center container mx-auto px-16 p-4 py-8">
                <p class="text-6xl font-bold text-primary-dark">Dengan pendekatan holistik, kami memastikan
                </p>
                <p class="mt-2 text-6xl font-bold text-primary-dark">setiap Orang Tua merasa nyaman dan
                    diperhatikan</p>
                <p class="mt-4 text-3xl text-primary-dark">Jadikan Usia Lebih Bermakna, Temukan Beragam
                    Layanan Perawatan Sesuai Kebutuhan</p>
            </div>

            <!-- Tagline Description -->
            <div class="container mx-auto px-16 p-4 py-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Left column for image -->
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('assets/Img/pexels-olly-3768131.jpg') }}" alt="Person"
                            class="w-full max-w-md rounded-lg">
                    </div>

                    <!-- Right column for cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-1 gap-6">
                        <div class="text-left container mx-auto px-16 p-4 py-8">
                            <p class="text-lg font-bold text-tertiary-dark">Rekomendasi Layanan Perawatan
                                Komprehensif</p>
                            <p class="mt-2 text-lg font-bold text-primary-dark">Bekerjasama dengan 100+
                                tenaga ahli terbaik dibidangnya, dengan jam terbang tinggi.</p>
                        </div>
                        <div class="text-left container mx-auto px-16 p-4 py-8">
                            <p class="text-lg font-bold text-tertiary-dark">Sesuaikan Layanan Perawatan
                                dengan Kebutuhanmu</p>
                            <p class="mt-2 text-lg font-bold text-primary-dark">Pilihan jenis perawatan
                                terbaik, dengan rekomendasi tempat terbaik, dengan rekomendasi tempat terbaik untuk layanan
                                home care</p>
                        </div>
                        <div class="text-left container mx-auto px-16 p-4 py-8">
                            <p class="text-lg font-bold text-tertiary-dark">Bekerjasam dengan lebih dari 30
                                Mitra Rumah Sakit</p>
                            <p class="mt-2 text-lg font-bold text-primary-dark">Informasi lokasi yang akurat
                                dan penawaran layanan up-to date dari mitra rumah sakit terbaik</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Program Section -->
            <div class="container mx-auto px-16 p-4 py-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-primary">Paling Banyak Dicari</h2>
                    <a href="/cares" class="text-primary hover:underline">Selengkapnya →</a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($cares as $index => $care)
                        <div class="bg-white p-6 rounded-lg shadow-md flex flex-col h-ful">
                            <div class="flex-grow">
                                <h3 class="text-xl font-semibold mb-2">{{ $care['name'] }}</h3>
                                <p class="text-gray-600 mb-2 text-sm">{{ $care['organization'] }}</p>
                                <div class="flex items-center mb-2">
                                    <svg class="w-5 h-5 text-yellow-400 mr-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <p class="ml-1 text-sm font-bold text-gray-900">{{ $care['rating'] }}</p>
                                </div>
                                <p class="text-gray-600 text-sm">{{ $care['address'] }}</p>
                            </div>
                            <div class="mt-4">
                                <a href="#"
                                    class="block w-full px-4 py-2 bg-primary text-white text-center rounded-lg hover:bg-teal-700 transition duration-300">Detail
                                    →</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Tagline Section -->
            <div class="text-center container mx-auto px-16 p-4 py-8">
                <p class="text-6xl font-bold text-primary">Expert Care, Trusted Partners. Quality You Can
                </p>
                <p class="mt-2 text-6xl font-bold text-primary">Count On. <span
                        class="text-tertiary">Schedule a Consultation Today</span> </p>
            </div>

            <div class="text-center container mx-auto px-4 py-8 max-w-xs">
                <a href="#"
                    class="block w-full px-6 py-3 bg-tertiary text-white text-md font-semibold text-center rounded-lg shadow-lg hover:bg-tertiary-dark hover:shadow-xl transform hover:scale-105 transition duration-300 ease-in-out">
                    Booking Layanan →
                </a>
            </div>
        </div>
    </section>

@endsection
