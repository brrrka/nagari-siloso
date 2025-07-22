<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Nagari Silungkang Oso')</title>
    <meta name="description" content="@yield('description', 'Website resmi Nagari Silungkang Oso, Kecamatan Silungkang, Kota Sawahlunto, Sumatera Barat')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Additional Head Content -->
    @stack('head')
</head>

<body class="font-sans antialiased bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200">
        <!-- Top Bar -->
        <div class="bg-primary-600 text-white py-2">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center text-sm">
                    <div class="flex items-center space-x-4">
                        <span>📞 (0754) 123456</span>
                        <span>✉️ info@silungkangoso.com</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span>🌍 Nagari Silungkang Oso, Sawahlunto</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/logo_desa.jpg') }}" alt="Logo Nagari"
                        class="h-12 w-12 object-cover rounded-full">
                    <div>
                        <h1 class="text-xl font-bold text-gray-900">Nagari Silungkang Oso</h1>
                        <p class="text-sm text-gray-600">Kec. Silungkang, Kota Sawahlunto</p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        Beranda
                    </a>

                    <!-- Profil Dropdown -->
                    <div class="relative group">
                        <button
                            class="nav-link flex items-center {{ request()->routeIs('profile', 'vision-mission', 'organization-structure') ? 'active' : '' }}">
                            Profil
                            <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div
                            class="dropdown-menu opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <div class="py-1">
                                <a href="{{ route('profile') }}" class="dropdown-item">Profil Nagari</a>
                                <a href="{{ route('vision-mission') }}" class="dropdown-item">Visi & Misi</a>
                                <a href="{{ route('organization-structure') }}" class="dropdown-item">Struktur
                                    Organisasi</a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('articles.index') }}"
                        class="nav-link {{ request()->routeIs('articles.*') ? 'active' : '' }}">
                        Berita
                    </a>

                    <a href="{{ route('gallery.index') }}"
                        class="nav-link {{ request()->routeIs('gallery.*') ? 'active' : '' }}">
                        Galeri
                    </a>

                    <a href="{{ route('umkm') }}" class="nav-link {{ request()->routeIs('umkm*') ? 'active' : '' }}">
                        UMKM
                    </a>

                    <a href="{{ route('tourism') }}"
                        class="nav-link {{ request()->routeIs('tourism*') ? 'active' : '' }}">
                        Wisata
                    </a>

                    <!-- Layanan Dropdown -->
                    <div class="relative group">
                        <button
                            class="nav-link flex items-center {{ request()->routeIs('population.*', 'map') ? 'active' : '' }}">
                            Layanan
                            <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div
                            class="dropdown-menu opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <div class="py-1">
                                <a href="{{ route('population.index') }}" class="dropdown-item">Data Penduduk</a>
                                <a href="{{ route('map') }}" class="dropdown-item">Peta Nagari</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button"
                    class="md:hidden p-2 rounded-md text-gray-700 hover:text-primary-600 hover:bg-gray-100 transition-colors duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="md:hidden hidden pb-4 border-t border-gray-200 animate-slide-up">
                <div class="space-y-1 py-2">
                    <a href="{{ route('home') }}"
                        class="block px-3 py-2 text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-md transition-colors duration-200 {{ request()->routeIs('home') ? 'text-primary-600 bg-primary-50' : '' }}">
                        Beranda
                    </a>

                    <div class="px-3 py-2">
                        <div class="text-gray-500 font-medium text-sm mb-2">Profil</div>
                        <div class="space-y-1 ml-4 pl-4 border-l-2 border-gray-200">
                            <a href="{{ route('profile') }}"
                                class="block py-1 text-sm text-gray-700 hover:text-primary-600">Profil Nagari</a>
                            <a href="{{ route('vision-mission') }}"
                                class="block py-1 text-sm text-gray-700 hover:text-primary-600">Visi & Misi</a>
                            <a href="{{ route('organization-structure') }}"
                                class="block py-1 text-sm text-gray-700 hover:text-primary-600">Struktur Organisasi</a>
                        </div>
                    </div>

                    <a href="{{ route('articles.index') }}"
                        class="block px-3 py-2 text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-md transition-colors duration-200 {{ request()->routeIs('articles.*') ? 'text-primary-600 bg-primary-50' : '' }}">
                        Berita
                    </a>

                    <a href="{{ route('gallery.index') }}"
                        class="block px-3 py-2 text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-md transition-colors duration-200 {{ request()->routeIs('gallery.*') ? 'text-primary-600 bg-primary-50' : '' }}">
                        Galeri
                    </a>

                    <a href="{{ route('umkm') }}"
                        class="block px-3 py-2 text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-md transition-colors duration-200 {{ request()->routeIs('umkm*') ? 'text-primary-600 bg-primary-50' : '' }}">
                        UMKM
                    </a>

                    <a href="{{ route('tourism') }}"
                        class="block px-3 py-2 text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-md transition-colors duration-200 {{ request()->routeIs('tourism*') ? 'text-primary-600 bg-primary-50' : '' }}">
                        Wisata
                    </a>

                    <div class="px-3 py-2">
                        <div class="text-gray-500 font-medium text-sm mb-2">Layanan</div>
                        <div class="space-y-1 ml-4 pl-4 border-l-2 border-gray-200">
                            <a href="{{ route('population.index') }}"
                                class="block py-1 text-sm text-gray-700 hover:text-primary-600">Data Penduduk</a>
                            <a href="{{ route('map') }}"
                                class="block py-1 text-sm text-gray-700 hover:text-primary-600">Peta Nagari</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @if (session('success'))
            <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-md mx-4 mt-4"
                role="alert">
                <div class="flex">
                    <div class="py-1">
                        <svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11H7v6h2v-6zm0-4H7v2h2V7z" />
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold">Sukses!</p>
                        <p class="text-sm">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-md mx-4 mt-4" role="alert">
                <div class="flex">
                    <div class="py-1">
                        <svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 5H7v6h2V5zm0 8H7v2h2v-2z" />
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold">Error!</p>
                        <p class="text-sm">{{ session('error') }}</p>
                    </div>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- WhatsApp Float Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <a href="https://wa.me/6281234567890" target="_blank"
            class="bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg hover-lift transition-all duration-300 flex items-center justify-center group">
            <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-200" fill="currentColor"
                viewBox="0 0 24 24">
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.688" />
            </svg>
        </a>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- About -->
                <div class="col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <img src="{{ asset('images/logo_desa.jpg') }}" alt="Logo Nagari"
                            class="h-12 w-12 object-cover rounded-full">
                        <div>
                            <h3 class="text-lg font-bold">Nagari Silungkang Oso</h3>
                            <p class="text-gray-400 text-sm">Kec. Silungkang, Kota Sawahlunto</p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed mb-6">
                        Nagari Silungkang Oso adalah nagari yang berkomitmen untuk kemajuan dan kesejahteraan
                        masyarakatnya melalui pembangunan berkelanjutan dan pelestarian budaya Minangkabau.
                    </p>
                    <div class="space-y-2 text-sm text-gray-300">
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-primary-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>Silungkang Oso, Kec. Silungkang</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-primary-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            <span>(0754) 123456</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-primary-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span>info@silungkangoso.com</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('profile') }}"
                                class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                <svg class="w-3 h-3 mr-2 group-hover:translate-x-1 transition-transform duration-200"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                                Profil Nagari
                            </a></li>
                        <li><a href="{{ route('articles.index') }}"
                                class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                <svg class="w-3 h-3 mr-2 group-hover:translate-x-1 transition-transform duration-200"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                                Berita
                            </a></li>
                        <li><a href="{{ route('umkm') }}"
                                class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                <svg class="w-3 h-3 mr-2 group-hover:translate-x-1 transition-transform duration-200"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                                UMKM
                            </a></li>
                        <li><a href="{{ route('tourism') }}"
                                class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                <svg class="w-3 h-3 mr-2 group-hover:translate-x-1 transition-transform duration-200"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                                Wisata
                            </a></li>
                        <li><a href="{{ route('gallery.index') }}"
                                class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                <svg class="w-3 h-3 mr-2 group-hover:translate-x-1 transition-transform duration-200"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                                Galeri
                            </a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Layanan</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('population.index') }}"
                                class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                <svg class="w-3 h-3 mr-2 group-hover:translate-x-1 transition-transform duration-200"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                                Data Penduduk
                            </a></li>
                        <li><a href="{{ route('map') }}"
                                class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                <svg class="w-3 h-3 mr-2 group-hover:translate-x-1 transition-transform duration-200"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                                Peta Lokasi
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="flex flex-col sm:flex-row justify-between items-center">
                    <div class="text-sm text-gray-400">
                        © {{ date('Y') }} Nagari Silungkang Oso. All rights reserved.
                    </div>
                    <div class="flex items-center space-x-3 mt-2 sm:mt-0">
                        <img src="{{ asset('images/logo_kkn.png') }}" alt="Logo KKN" class="h-6 w-6 rounded">
                        <span class="text-xs text-gray-500">Website ini dibuat oleh Tim KKN Silungkang Oso 2025</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Mobile menu toggle with smooth animation
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');

            // Add animation class after showing
            if (!mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('animate-slide-up');
                void mobileMenu.offsetWidth; // Force reflow
                mobileMenu.classList.add('animate-slide-up');
            }
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Auto-hide success/error messages after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const alerts = document.querySelectorAll('[role="alert"]');
            alerts.forEach(function(alert) {
                setTimeout(function() {
                    alert.style.opacity = '0';
                    alert.style.transform = 'translateY(-10px)';
                    setTimeout(function() {
                        alert.remove();
                    }, 300);
                }, 5000);
            });
        });

        // Add scroll effect to header
        let lastScrollTop = 0;
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > 100) {
                header.classList.add('shadow-lg');
            } else {
                header.classList.remove('shadow-lg');
            }

            lastScrollTop = scrollTop;
        });
    </script>

    @stack('scripts')
</body>

</html>
