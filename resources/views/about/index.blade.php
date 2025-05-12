@extends('layouts.main')

@section('title', 'About')

@section('content')
  <section class="bg-gray-50 py-16">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-4xl font-semibold text-gray-800 mb-4">Tentang Kami</h2>
      <p class="text-xl text-gray-600 mb-8">
        Kami adalah tim kreatif yang berfokus pada solusi teknologi inovatif untuk berbagai kebutuhan digital Anda. Kami percaya bahwa setiap proyek adalah kesempatan untuk membawa perubahan positif melalui desain dan pengembangan yang intuitif.
      </p>
      
      <div class="grid md:grid-cols-2 gap-12">
        <div class="mb-8 md:mb-0">
          <h3 class="text-3xl font-semibold text-indigo-600 mb-4">Visi Kami</h3>
          <p class="text-lg text-gray-600">
            Visi kami adalah menjadi mitra terpercaya dalam mengembangkan solusi digital yang menginspirasi dan membantu bisnis Anda tumbuh. Kami bertujuan untuk memberikan pengalaman pengguna yang luar biasa dengan desain dan pengembangan perangkat lunak yang efisien.
          </p>
        </div>
        
        <div>
          <h3 class="text-3xl font-semibold text-indigo-600 mb-4">Misi Kami</h3>
          <p class="text-lg text-gray-600">
            Misi kami adalah untuk menyelesaikan setiap tantangan yang dihadapi oleh klien kami dengan solusi yang tepat dan inovatif. Kami bekerja dengan dedikasi untuk membangun aplikasi, situs web, dan produk digital yang memberikan nilai lebih bagi pelanggan kami.
          </p>
        </div>
      </div>
      
      <div class="mt-12">
        <h3 class="text-3xl font-semibold text-indigo-600 mb-4">Tim Kami</h3>
        <p class="text-lg text-gray-600 mb-6">
          Tim kami terdiri dari individu yang berpengalaman dan bersemangat untuk menciptakan dampak positif melalui teknologi. Kami bekerja bersama untuk mewujudkan visi klien kami dengan keterampilan yang saling melengkapi.
        </p>
        
        <div class="flex justify-center gap-8">
          <!-- Anggota Tim 1 -->
          <div class="text-center">
            <img src="https://via.placeholder.com/150" alt="Tim 1" class="w-32 h-32 rounded-full mx-auto mb-4">
            <h4 class="text-xl font-semibold text-gray-800">Aglaea</h4>
            <p class="text-gray-600">Lead Developer</p>
          </div>
          
          <!-- Anggota Tim 2 -->
          <div class="text-center">
            <img src="https://via.placeholder.com/150" alt="Tim 2" class="w-32 h-32 rounded-full mx-auto mb-4">
            <h4 class="text-xl font-semibold text-gray-800">Lingsha</h4>
            <p class="text-gray-600">UI/UX Designer</p>
          </div>
          
          <!-- Anggota Tim 3 -->
          <div class="text-center">
            <img src="https://via.placeholder.com/150" alt="Tim 3" class="w-32 h-32 rounded-full mx-auto mb-4">
            <h4 class="text-xl font-semibold text-gray-800">Herta</h4>
            <p class="text-gray-600">Project Manager</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
