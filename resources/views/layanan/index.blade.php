@extends('layouts.main')

@section('title', 'Layanan')

@section('content')
<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-extrabold text-gray-900 mb-4">Layanan Kami</h2>
      <p class="text-gray-600 max-w-xl mx-auto">Kami menawarkan solusi digital yang membantu bisnis Anda tumbuh dengan cepat, modern, dan efisien.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Layanan 1 -->
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-md transition duration-300">
        <div class="mb-4 text-indigo-600">
          <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1M4 12h16M4 8h16M4 4h16" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-center">Web Development</h3>
        <p class="text-gray-600 text-sm text-center">Website custom yang responsif, cepat, dan SEO-friendly sesuai kebutuhan Anda.</p>
      </div>

      <!-- Layanan 2 -->
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-md transition duration-300">
        <div class="mb-4 text-indigo-600">
          <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a3.5 3.5 0 10-7.18 0A5.59 5.59 0 003 19.95h18a5.59 5.59 0 00-5.41-5.58z" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-center">UI/UX Design</h3>
        <p class="text-gray-600 text-sm text-center">Desain antarmuka yang intuitif, estetik, dan user-friendly untuk pengalaman optimal.</p>
      </div>

      <!-- Layanan 3 -->
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-md transition duration-300">
        <div class="mb-4 text-indigo-600">
          <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2a4 4 0 014-4h7m0 0V7a2 2 0 00-2-2h-4.586a1 1 0 00-.707.293l-7.414 7.414A1 1 0 006 14.586V19a2 2 0 002 2h5a2 2 0 002-2v-2z" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-center">Aplikasi Mobile</h3>
        <p class="text-gray-600 text-sm text-center">Pengembangan aplikasi Android/iOS native & hybrid dengan performa tinggi.</p>
      </div>

      <!-- Layanan 4 -->
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-md transition duration-300">
        <div class="mb-4 text-indigo-600">
          <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h2l1.5 9h11l1.5-9H21M5 10V5a2 2 0 012-2h10a2 2 0 012 2v5" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-center">Digital Marketing</h3>
        <p class="text-gray-600 text-sm text-center">Strategi SEO, media sosial, dan iklan berbayar untuk mendongkrak visibilitas Anda.</p>
      </div>
    </div>
  </div>
</section>
@endsection
