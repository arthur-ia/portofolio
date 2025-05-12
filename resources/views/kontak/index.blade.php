@extends('layouts.main')

@section('title', 'Kontak')

@section('content')
<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-extrabold text-gray-900 mb-4">Hubungi Kami</h2>
      <p class="text-gray-600 max-w-xl mx-auto">Ada pertanyaan, proyek, atau ingin bekerja sama? Kirim pesan lewat form berikut, kami akan segera merespons.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Form Kontak -->
      <form action="#" method="POST" class="bg-gray-50 p-6 rounded-2xl shadow">
        @csrf
        <div class="mb-4">
          <label for="name" class="block text-gray-700 font-semibold mb-2">Nama</label>
          <input type="text" id="name" name="name" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Nama lengkap">
        </div>
        <div class="mb-4">
          <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
          <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Email aktif">
        </div>
        <div class="mb-4">
          <label for="message" class="block text-gray-700 font-semibold mb-2">Pesan</label>
          <textarea id="message" name="message" rows="5" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Tulis pesan Anda..."></textarea>
        </div>
        <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition">Kirim Pesan</button>
      </form>

      <!-- Info Kontak -->
      <div class="bg-white p-6 rounded-2xl shadow">
        <h3 class="text-xl font-semibold mb-4 text-gray-800">Informasi Kontak</h3>
        <ul class="space-y-4 text-gray-600">
          <li>
            <strong>Alamat:</strong><br>
            Jl. Contoh No. 123, Jakarta
          </li>
          <li>
            <strong>Email:</strong><br>
            info@example.com
          </li>
          <li>
            <strong>Telepon:</strong><br>
            (021) 123-4567
          </li>
          <li>
            <strong>Jam Kerja:</strong><br>
            Senin - Jumat: 09.00 - 17.00 WIB
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection
