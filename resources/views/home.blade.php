@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <section class="bg-gradient-to-r from-blue-500 to-indigo-600 py-16">
        <div class="container mx-auto text-center text-white">
            <h1 class="text-5xl font-bold mb-4">Welcome to Our Platform</h1>
            <p class="text-lg mb-8">The best place to explore hidden gems and elevate your experiences.</p>
            <a href="#features" class="btn btn-primary">Explore Features</a>
        </div>
    </section>

    {{-- Features Section --}}
    <section id="features" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-semibold mb-12">Our Awesome Features</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="card bg-white shadow-lg">
                    <div class="card-body">
                        <div class="card-title text-xl font-bold">Feature One</div>
                        <p>Explore our top-notch tools to enhance your productivity and creativity.</p>
                    </div>
                </div>
                <div class="card bg-white shadow-lg">
                    <div class="card-body">
                        <div class="card-title text-xl font-bold">Feature Two</div>
                        <p>Seamlessly collaborate with your team members across projects and tasks.</p>
                    </div>
                </div>
                <div class="card bg-white shadow-lg">
                    <div class="card-body">
                        <div class="card-title text-xl font-bold">Feature Three</div>
                        <p>Enjoy cutting-edge technology that guarantees secure data storage and management.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials Section --}}
    <section class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-semibold mb-12">What Our Users Say</h2>
            <div class="carousel w-full">
                <div id="slide1" class="carousel-item relative w-full">
                    <div class="card bg-gray-100 shadow-lg p-8">
                        <div class="flex justify-center mb-4">
                            <img src="https://via.placeholder.com/100" alt="User Image" class="rounded-full">
                        </div>
                        <p class="text-lg">"This platform has transformed the way I work. Highly recommend it!"</p>
                        <h3 class="mt-4 font-bold">- Jane Doe</h3>
                    </div>
                    <a href="#slide3" class="absolute left-0 btn btn-circle">❮</a>
                    <a href="#slide2" class="absolute right-0 btn btn-circle">❯</a>
                </div>
                <div id="slide2" class="carousel-item relative w-full">
                    <div class="card bg-gray-100 shadow-lg p-8">
                        <div class="flex justify-center mb-4">
                            <img src="https://via.placeholder.com/100" alt="User Image" class="rounded-full">
                        </div>
                        <p class="text-lg">"The features are amazing, and the interface is intuitive!"</p>
                        <h3 class="mt-4 font-bold">- John Smith</h3>
                    </div>
                    <a href="#slide1" class="absolute left-0 btn btn-circle">❮</a>
                    <a href="#slide3" class="absolute right-0 btn btn-circle">❯</a>
                </div>
                <div id="slide3" class="carousel-item relative w-full">
                    <div class="card bg-gray-100 shadow-lg p-8">
                        <div class="flex justify-center mb-4">
                            <img src="https://via.placeholder.com/100" alt="User Image" class="rounded-full">
                        </div>
                        <p class="text-lg">"The best platform for project management and collaboration."</p>
                        <h3 class="mt-4 font-bold">- Sarah Lee</h3>
                    </div>
                    <a href="#slide2" class="absolute left-0 btn btn-circle">❮</a>
                    <a href="#slide1" class="absolute right-0 btn btn-circle">❯</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Call to Action Section --}}
    <section class="bg-gradient-to-r from-indigo-600 to-purple-600 py-16 text-white text-center">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold mb-4">Ready to get started?</h2>
            <p class="text-lg mb-8">Join us today and explore endless possibilities.</p>
            <a href="/register" class="btn btn-primary">Sign Up Now</a>
        </div>
    </section>

@endsection
