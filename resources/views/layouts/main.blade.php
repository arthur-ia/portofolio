<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portofolio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <!-- Navbar -->
    <header class="bg-white shadow-md sticky top-0 z-10">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-indigo-600 hover:text-indigo-800 transition duration-300">BayuDev</a>
                </div>
                
                <!-- Navigation untuk desktop -->
                <nav class="hidden md:flex space-x-8">
                    <a href="{{route('home.index')}}" class="text-gray-800 hover:text-indigo-600 font-medium transition duration-300">Beranda</a>
                    <a href="{{route('about.index')}}" class="text-gray-800 hover:text-indigo-600 font-medium transition duration-300">Tentang</a>
                    <a href="{{route('layanan.index')}}" class="text-gray-800 hover:text-indigo-600 font-medium transition duration-300">Layanan</a>
                    <a href="{{route('portofolio.index')}}" class="text-gray-800 hover:text-indigo-600 font-medium transition duration-300">Portfolio</a>
                    <a href="{{route('kontak.index')}}" class="text-gray-800 hover:text-indigo-600 font-medium transition duration-300">Kontak</a>
                </nav>
                
                <!-- Tombol mobile menu -->
                <button class="md:hidden focus:outline-none" id="mobile-menu-button">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile menu (hidden by default) -->
            <div class="md:hidden hidden py-4" id="mobile-menu">
                <ul class="space-y-2">
                    <li><a href="{{route('home.index')}}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-50 rounded">Beranda</a></li>
                    <li><a href="{{route('about.index')}}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-50 rounded">Tentang</a></li>
                    <li><a href="{{route('layanan.index')}}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-50 rounded">Layanan</a></li>
                    <li><a href="{{route('portofolio.index')}}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-50 rounded">Portfolio</a></li>
                    <li><a href="{{route('kontak.index')}}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-50 rounded">Kontak</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        <div class="container mx-auto px-4 py-8">
            @yield('content')
           
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 mt-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Kolom 1 -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Tentang Kami</h3>
                    <p class="text-gray-400">Kami adalah perusahaan yang berdedikasi untuk memberikan solusi terbaik bagi kebutuhan digital Anda.</p>
                </div>
                
                <!-- Kolom 2 -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Beranda</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Tentang</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Layanan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Blog</a></li>
                    </ul>
                </div>
                
                <!-- Kolom 3 -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Layanan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Web Development</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Mobile Apps</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">UI/UX Design</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Digital Marketing</a></li>
                    </ul>
                </div>
                
                <!-- Kolom 4 -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Hubungi Kami</h3>
                    <address class="text-gray-400 not-italic">
                        <p>Jl. Contoh No. 123</p>
                        <p>Jakarta, Indonesia</p>
                        <p>Email: info@example.com</p>
                        <p>Telp: (021) 123-4567</p>
                    </address>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('d M Y') }} BayuDev. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Toggle mobile menu
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>

</body>
</html>
