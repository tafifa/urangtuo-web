{{-- resources/views/auth/register.blade.php --}}
@extends('layouts.app')

@section('title', 'Registrasi')

@section('content')
    @php
        $socialIcons = [
            'google' => 'https://cdn.cdnlogo.com/logos/g/35/google-icon.svg',
            'facebook' => 'https://cdn.cdnlogo.com/logos/f/83/facebook.svg',
            'apple' => 'https://cdn.cdnlogo.com/logos/a/90/apple.svg'
        ];
    @endphp

    <section class="bg-white min-h-screen">
        <div class="container mx-auto py-8 px-4">
            <div class="flex flex-col lg:flex-row max-w-4xl mx-auto gap-8">
                <!-- Left side with colored boxes -->
                <div class="hidden lg:flex flex-col items-center justify-center lg:w-1/2 space-y-8">
                    <h1 class="text-2xl font-semibold text-teal-600 text-center mb-8">
                        Bergabung dengan 1000+ Lansia untuk
                        <br>mulai mengenal kembali potensi diri
                    </h1>
                    
                    <div class="grid grid-cols-2 gap-4 w-full max-w-md">
                        <div class="bg-orange-400 p-6 rounded-lg text-white font-bold text-center shadow-md">CARE</div>
                        <div class="bg-teal-500 p-6 rounded-lg text-white font-bold text-center shadow-md">COMMUNITY</div>
                        <div class="bg-yellow-500 p-6 rounded-lg text-white font-bold text-center shadow-md">EMPOWER</div>
                        <div class="bg-blue-500 p-6 rounded-lg text-white font-bold text-center shadow-md">HELPFUL</div>
                    </div>
                </div>

                <!-- Right side with registration form -->
                <div class="w-full lg:w-1/2">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center gap-3 mb-8">
                            <div class="bg-teal-500 rounded-full p-2">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                                </svg>
                            </div>
                            <h2 class="text-xl font-semibold">Registrasi</h2>
                        </div>

                        <p class="text-gray-600 mb-6">Jelajahi Program & Layanan Pilihan dengan Mudah</p>

                        <form method="POST" action="{{ route('register') }}" class="space-y-6">
                            @csrf
                            
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                                <input type="text" 
                                       name="name" 
                                       id="name" 
                                       placeholder="nama lengkap"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 @error('name') border-red-500 @enderror"
                                       value="{{ old('name') }}" 
                                       required>
                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                <input type="email" 
                                       name="email" 
                                       id="email" 
                                       placeholder="alamat email"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 @error('email') border-red-500 @enderror"
                                       value="{{ old('email') }}" 
                                       required>
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="birth_date" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                                <input type="date" 
                                       name="birth_date" 
                                       id="birth_date" 
                                       placeholder="dd/mm/yyyy"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 @error('birth_date') border-red-500 @enderror"
                                       value="{{ old('birth_date') }}" 
                                       required>
                                @error('birth_date')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                                <div class="relative">
                                    <input type="password" 
                                           name="password" 
                                           id="password" 
                                           placeholder="password"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 pr-10 @error('password') border-red-500 @enderror"
                                           required>
                                    <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                </div>
                                @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900">Konfirmasi Password</label>
                                <div class="relative">
                                    <input type="password" 
                                           name="password_confirmation" 
                                           id="password_confirmation" 
                                           placeholder="ulangi password"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 pr-10"
                                           required>
                                    <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <button type="submit" 
                                    class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Register
                            </button>
                        </form>

                        <div class="mt-6 text-sm text-center text-gray-600">
                            <p>Belum punya akun? 
                                <a href="{{ route('masuk') }}" class="text-teal-600 hover:underline">
                                    Cari dan pilih layanan dengan mudah.
                                </a>
                            </p>
                            
                            <div class="flex justify-center space-x-4 mt-4">
                                @foreach($socialIcons as $provider => $icon)
                                    <button class="p-2 border rounded-lg hover:bg-gray-50 transition-colors duration-200">
                                        <img src="{{ $icon }}" class="w-5 h-5" alt="{{ ucfirst($provider) }}">
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection