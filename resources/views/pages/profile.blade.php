@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    @php
        $user = [
            'avatar' => 'assets/default-avatar.png',
            'join_date' => '28-08-2024',
            'owner' => 'Sendiri',
            'name' => 'Bapak Edi',
            'family_contact' => '+62',
            'relationship' => 'Istri',
            'address' => 'Jl. Antapani - Bandung',
            'username' => 'bapakedi_',
            'email' => 'punyabapakedi@email.com'
        ];
    @endphp

    <section class="bg-white min-h-screen">
        <div class="container mx-auto py-8 px-4">
            <!-- Profile Card -->
            <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-sm p-6">
                <!-- Profile Header -->
                <div class="flex items-start gap-6 mb-8">
                    <!-- Profile Image -->
                    <div class="relative">
                        <img src="{{ asset($user['avatar']) }}" 
                             alt="Profile Picture" 
                             class="w-24 h-24 rounded-full object-cover border-2 border-gray-200">
                        <button class="text-sm text-teal-600 hover:text-teal-700 mt-2">
                            Edit Profile
                        </button>
                    </div>

                    <!-- Basic Info -->
                    <div class="flex-1">
                        <button class="float-right px-4 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700">
                            Verifikasi Akun
                        </button>
                        <p class="text-gray-500 text-sm mb-1">Bergabung Sejak</p>
                        <p class="text-gray-700">{{ $user['join_date'] }}</p>
                    </div>
                </div>

                <!-- Profile Form -->
                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Column 1 -->
                    <div class="space-y-4">
                        <div>
                            <label class="text-gray-500 text-sm block mb-1">Pemilik Akun</label>
                            <div class="relative">
                                <input type="text" 
                                       value="{{ $user['owner'] }}" 
                                       class="w-full px-4 py-2 border rounded-lg pr-10" 
                                       readonly>
                                <svg class="w-5 h-5 absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                            </div>
                        </div>

                        <div>
                            <label class="text-gray-500 text-sm block mb-1">Nama</label>
                            <div class="relative">
                                <input type="text" 
                                       value="{{ $user['name'] }}" 
                                       class="w-full px-4 py-2 border rounded-lg pr-10">
                                <svg class="w-5 h-5 absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="space-y-4">
                        <div>
                            <label class="text-gray-500 text-sm block mb-1">Kontak Keluarga</label>
                            <div class="relative">
                                <input type="text" 
                                       value="{{ $user['family_contact'] }}" 
                                       class="w-full px-4 py-2 border rounded-lg pr-10">
                                <svg class="w-5 h-5 absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                            </div>
                        </div>

                        <div>
                            <label class="text-gray-500 text-sm block mb-1">Hubungan</label>
                            <div class="relative">
                                <input type="text" 
                                       value="{{ $user['relationship'] }}" 
                                       class="w-full px-4 py-2 border rounded-lg pr-10">
                                <svg class="w-5 h-5 absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                            </div>
                        </div>

                        <div>
                            <label class="text-gray-500 text-sm block mb-1">Alamat</label>
                            <div class="relative">
                                <input type="text" 
                                       value="{{ $user['address'] }}" 
                                       class="w-full px-4 py-2 border rounded-lg pr-10">
                                <svg class="w-5 h-5 absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Column 3 -->
                    <div class="space-y-4">
                        <div>
                            <label class="text-gray-500 text-sm block mb-1">Username</label>
                            <div class="relative">
                                <input type="text" 
                                       value="{{ $user['username'] }}" 
                                       class="w-full px-4 py-2 border rounded-lg pr-10">
                                <svg class="w-5 h-5 absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                            </div>
                        </div>

                        <div>
                            <label class="text-gray-500 text-sm block mb-1">Email</label>
                            <div class="relative">
                                <input type="email" 
                                       value="{{ $user['email'] }}" 
                                       class="w-full px-4 py-2 border rounded-lg pr-10">
                                <svg class="w-5 h-5 absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                            </div>
                        </div>

                        <div>
                            <label class="text-gray-500 text-sm block mb-1">Password</label>
                            <div class="relative">
                                <input type="password" 
                                       value="********" 
                                       class="w-full px-4 py-2 border rounded-lg pr-10">
                                <svg class="w-5 h-5 absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Program History Section -->
                <div class="mt-8">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-medium text-teal-600">Riwayat Program</h3>
                        <button>
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                    
                    <div class="bg-gray-50 rounded-lg p-6 flex justify-between items-center">
                        <p class="text-gray-500">Belum ada riwayat program diikuti</p>
                        <button class="px-4 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700">
                            Ikuti Program
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection