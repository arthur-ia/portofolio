@extends('layouts.main')

@section('title', 'Portofolio')

@section('content')
<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Portofolio Proyek</h2>
      <p class="text-gray-600 max-w-xl mx-auto">Beberapa karya terbaik yang pernah saya kerjakan. Dari web apps sampai sistem custom — semua dibangun dengan cinta dan semangat ngoding 200%.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Project Card -->
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
        <img src="{{ asset('images/hsr picturre/fugue/Fugue __ HSR.jpeg') }}" alt="Project 1" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Sistem Kredit Motor</h3>
          
          <p class="text-gray-600 mb-4">Aplikasi web untuk simulasi, pengajuan, dan verifikasi kredit motor. Dibangun dengan Laravel dan TailwindCSS.</p>
          <a href="{{route('portofoliokremo.index')}}" class="text-indigo-600 font-semibold hover:underline">Lihat Detail →</a>
        </div>
      </div>

      <!-- Project Card -->
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
        <img src="{{ asset('images/hsr picturre/seele/seele (1).jpeg') }}" alt="Project 2" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Dashboard Inventory</h3>
          <p class="text-gray-600 mb-4">Sistem manajemen stok barang berbasis web, real-time data tracking dan role-based access control.</p>
          <a href="#" class="text-indigo-600 font-semibold hover:underline">Lihat Detail →</a>
        </div>
      </div>

      <!-- Project Card -->
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
        <img src="{{ asset('images/hsr picturre/jade/𐙚      jade.jpeg') }}" alt="Project 3" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Company Profile</h3>
          <p class="text-gray-600 mb-4">Landing page profesional untuk branding perusahaan klien, responsif dan SEO-ready.</p>
          <a href="#" class="text-indigo-600 font-semibold hover:underline">Lihat Detail →</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
