@extends('layouts.app')

@section('title', 'Pemberdayaan')

@section('content')
    @php
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
            <!-- Hero Section -->
            <div class="relative container mx-auto px-16 p-4 py-8">
                <div class="relative h-56 md:h-96 overflow-hidden rounded-lg">
                    <img src="{{ asset('assets/Banner/Mockup-01.png') }}"
                        class="absolute z-29 block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="Banner Image">
                </div>
            </div>

            <div class="font-metropolis text-center container mx-auto px-4 py-8 max-w-xs">
                <a href="#"
                    class="block w-full px-6 py-3 bg-info text-white text-md font-semibold text-center rounded-lg shadow-lg hover:bg-info-dark hover:shadow-xl transform hover:scale-105 transition duration-300 ease-in-out">
                    Ikuti Program →
                </a>
            </div>

            <!-- Tagline Description -->
            <div class="container mx-auto px-16 p-4 py-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Left column for image -->
                    <div class="grid grid-cols-1 sm:grid-cols-1 gap-6">
                        <div class="text-right container mx-auto px-16 p-4 py-8">
                            <p class="text-4xl font-metropolis font-bold text-primary">Mari Dampingi Lansia Untuk Tetap
                                Berdaya dan Berkarya dengan Potensinya</p>
                            <p class="mt-2 text-xl font-metropolis font-bold text-primary">Dengan Pendekatan Personal,
                                Mendampingi Lansia Mencapai Potensi Maksimal</p>
                        </div>
                    </div>

                    <!-- Right column for cards -->
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('assets/Img/pexels-kampus-6023607.jpg') }}" alt="Person"
                            class="w-full max-w-md rounded-lg">
                    </div>
                </div>
            </div>

            <!-- Program Section -->
            <div class="container mx-auto px-16 p-4 py-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-primary">Paling Diminati</h2>
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

            <!-- Tagline Section -->
            <div class="text-center container mx-auto px-16 p-4 py-8">
                <p class="text-5xl font-metropolis font-bold text-primary"> <span class="text-tertiary">Gali Potensi Lebih
                        Mandiri</span> Lewat Program yang dirancang oleh tim Urang Tuo</p>
                <p class="mt-2 text-2xl font-metropolis font-bold text-primary">Bergabung dengan 1000+ Lansia untuk mulai
                    mengenal kembali potensi diri</p>
            </div>

            <div class="font-metropolis text-center container mx-auto px-4 py-8 max-w-xs">
                <a href="#"
                    class="block w-full px-6 py-3 bg-tertiary text-white text-md font-semibold text-center rounded-lg shadow-lg hover:bg-tertiary-dark hover:shadow-xl transform hover:scale-105 transition duration-300 ease-in-out">
                    Program Tersedia →
                </a>
            </div>
            
        </div>
    </section>
@endsection
