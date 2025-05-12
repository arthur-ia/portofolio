@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="bg-indigo-600 text-white text-center py-16">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold mb-4">Selamat Datang di Portofolio Saya!</h1>
            <p class="text-lg mb-8">Saya adalah seorang Developer yang fokus pada pengembangan aplikasi web dan mobile. Mari jelajahi proyek-proyek saya!</p>
            <a href="#projects" class="bg-white text-indigo-600 py-2 px-6 rounded-full text-xl font-semibold hover:bg-indigo-100">Lihat Proyek Saya</a>
        </div>
    </section>

    <!-- About Me Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-semibold text-indigo-600 mb-4">Tentang Saya</h2>
            <p class="text-lg text-gray-700 mb-6">Saya adalah seorang pengembang dengan pengalaman dalam membuat berbagai aplikasi web dan mobile. Saya selalu berusaha untuk membuat solusi yang efisien dan mudah digunakan. Selamat menjelajahi portofolio saya!</p>
            <a href="{{route('about.index')}}" class="text-indigo-600 font-semibold hover:underline">Lebih Lanjut</a>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-semibold text-indigo-600 mb-8">Proyek Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/hsr picturre/aglaea/Aglaea.jpeg') }}" alt="Project 1" class="w-full h-56 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Proyek A</h3>
                    <p class="text-gray-700 mb-4">Deskripsi singkat tentang proyek A. Pengembangan aplikasi web dengan fitur-fitur canggih untuk mempermudah pengguna dalam berinteraksi.</p>
                    <a href="#" class="text-indigo-600 font-semibold hover:underline">Lihat Detail</a>
                </div>
                <!-- Project 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/hsr picturre/lingsha/lingsha (1).jpeg') }}" alt="Project 2" class="w-full h-56 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Proyek B</h3>
                    <p class="text-gray-700 mb-4">Deskripsi singkat tentang proyek B. Aplikasi mobile yang memungkinkan pengguna untuk mengakses informasi secara cepat dan mudah.</p>
                    <a href="#" class="text-indigo-600 font-semibold hover:underline">Lihat Detail</a>
                </div>
                <!-- Project 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/hsr picturre/the herta/ff55860a-67f6-41b8-9e29-596d70e08c03.jpeg') }}" alt="Project 3" class="w-full h-56 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Proyek C</h3>
                    <p class="text-gray-700 mb-4">Deskripsi singkat tentang proyek C. Pembuatan aplikasi untuk memudahkan manajemen data dan meningkatkan efisiensi operasional.</p>
                    <a href="#" class="text-indigo-600 font-semibold hover:underline">Lihat Detail</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-indigo-600 text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-semibold mb-4">Kontak Saya</h2>
            <p class="text-lg mb-6">Apakah Anda tertarik bekerja sama atau ingin berbicara lebih lanjut? Hubungi saya sekarang!</p>
            <a href="{{route('kontak.index')}}" class="bg-white text-indigo-600 py-2 px-6 rounded-full text-xl font-semibold hover:bg-indigo-100">Hubungi Saya</a>
        </div>
    </section>
@endsection
