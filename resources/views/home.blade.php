<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Beranda - Nagari Silungkang Oso')
@section('description',
    'Website resmi Nagari Silungkang Oso, Kecamatan Silungkang, Kota Sawahlunto, Sumatera Barat.
    Informasi terbaru seputar berita, UMKM, wisata, dan pelayanan masyarakat.')

    @push('head')
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
        <style>
            #home-map {
                height: 300px;
                width: 100%;
                border-radius: 8px;
            }

            .line-clamp-2 {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }

            .line-clamp-3 {
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
        </style>
    @endpush

@section('content')
    <!-- Hero Banner -->
    <section class="relative h-[600px] overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('images/hero-banner.jpg') }}" alt="Nagari Silungkang Oso" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-blue-900 bg-opacity-60"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
            <div class="text-white max-w-2xl">
                <h1 class="text-5xl font-bold mb-6">Selamat Datang di <span class="text-blue-300">Nagari Silungkang
                        Oso</span></h1>
                <p class="text-xl mb-8 leading-relaxed">Nagari yang maju, mandiri, dan sejahtera dengan kekayaan budaya
                    Minangkabau di Kota Sawahlunto, Sumatera Barat.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('profile') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors duration-300 text-center">
                        Profil Nagari
                    </a>
                    <a href="{{ route('tourism') }}"
                        class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-blue-900 px-8 py-3 rounded-lg font-semibold transition-colors duration-300 text-center">
                        Jelajahi Wisata
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-blue-100 rounded-full w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-2">3,250</h3>
                    <p class="text-gray-600">Jiwa Penduduk</p>
                </div>

                <div class="text-center">
                    <div class="bg-green-100 rounded-full w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 15V9a2 2 0 012-2h4a2 2 0 012 2v6"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-2">875</h3>
                    <p class="text-gray-600">Kepala Keluarga</p>
                </div>

                <div class="text-center">
                    <div class="bg-yellow-100 rounded-full w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-2">45+</h3>
                    <p class="text-gray-600">UMKM Aktif</p>
                </div>

                <div class="text-center">
                    <div class="bg-purple-100 rounded-full w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-2">15.5</h3>
                    <p class="text-gray-600">Km² Luas Wilayah</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Preview Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Lokasi Nagari Silungkang Oso</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Terletak di Kecamatan Silungkang, Kota Sawahlunto, dengan akses
                    mudah dan pemandangan alam yang indah</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Map -->
                <div class="lg:col-span-2">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div id="home-map"></div>
                    </div>
                </div>

                <!-- Location Info -->
                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Informasi Lokasi</h3>
                        <div class="space-y-3 text-sm">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold text-gray-900">Alamat</p>
                                    <p class="text-gray-600">Silungkang Oso, Kec. Silungkang<br>Kota Sawahlunto, Sumatera
                                        Barat</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                                    </path>
                                </svg>
                                <div>
                                    <p class="font-semibold text-gray-900">Koordinat</p>
                                    <p class="text-gray-600">-0.6742°, 100.7831°</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Akses Transportasi</h3>
                        <div class="space-y-3 text-sm">
                            <div>
                                <p class="font-semibold text-gray-900">Dari Padang</p>
                                <p class="text-gray-600">± 95 km (2 jam perjalanan)</p>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Dari Sawahlunto</p>
                                <p class="text-gray-600">± 8 km (15 menit perjalanan)</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('map') }}"
                            class="inline-flex items-center px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors duration-300">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                                </path>
                            </svg>
                            Lihat Peta Lengkap
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Berita Terkini</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Informasi dan berita terbaru seputar kegiatan dan perkembangan
                    Nagari Silungkang Oso</p>
            </div>

            @if ($featuredArticles && $featuredArticles->count() > 0)
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                    @foreach ($featuredArticles as $article)
                        <article
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="relative">
                                @if ($article->featured_image)
                                    <img src="{{ Storage::url($article->featured_image) }}" alt="{{ $article->title }}"
                                        class="w-full h-48 object-cover">
                                @else
                                    <div
                                        class="w-full h-48 bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center">
                                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H14">
                                            </path>
                                        </svg>
                                    </div>
                                @endif
                            </div>
                            <div class="p-6">
                                <h3 class="font-bold text-gray-900 mb-2 line-clamp-2">
                                    <a href="{{ route('articles.show', $article->slug) }}"
                                        class="hover:text-blue-600 transition-colors duration-300">
                                        {{ $article->title }}
                                    </a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-3 line-clamp-3">{{ $article->excerpt }}</p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>{{ $article->published_at->format('d M Y') }}</span>
                                    <a href="{{ route('articles.show', $article->slug) }}"
                                        class="text-blue-600 hover:text-blue-700 font-medium">
                                        Baca Selengkapnya →
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            @else
                <div class="text-center py-8">
                    <p class="text-gray-500">Belum ada artikel yang dipublikasikan.</p>
                </div>
            @endif

            <div class="text-center">
                <a href="{{ route('articles.index') }}"
                    class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-300">
                    Lihat Semua Berita
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- UMKM & Tourism Highlights -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- UMKM Section -->
                <div>
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">UMKM Unggulan</h2>
                        <p class="text-gray-600">Produk dan usaha terbaik dari masyarakat Nagari Silungkang Oso</p>
                    </div>

                    @if ($featuredUMKM && $featuredUMKM->count() > 0)
                        <div class="space-y-6">
                            @foreach ($featuredUMKM as $umkm)
                                <div class="flex bg-white rounded-lg p-4 hover:shadow-md transition-shadow duration-300">
                                    <div class="flex-shrink-0 mr-4">
                                        @if ($umkm->image)
                                            <img src="{{ Storage::url($umkm->image) }}" alt="{{ $umkm->name }}"
                                                class="w-16 h-16 rounded-lg object-cover">
                                        @else
                                            <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center">
                                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                                    </path>
                                                </svg>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-semibold text-gray-900 mb-1">{{ $umkm->name }}</h3>
                                        <p class="text-sm text-gray-600 mb-1">Pemilik: {{ $umkm->owner }}</p>
                                        <p class="text-sm text-gray-500 line-clamp-2">
                                            {{ Str::limit($umkm->description, 80) }}</p>
                                        <span
                                            class="inline-block mt-2 text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded">
                                            {{ $umkm->category }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-8">
                            <p class="text-gray-500">Belum ada data UMKM unggulan.</p>
                        </div>
                    @endif

                    <div class="mt-8">
                        <a href="{{ route('umkm') }}"
                            class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium">
                            Lihat Semua UMKM
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Tourism Section -->
                <div>
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Wisata Unggulan</h2>
                        <p class="text-gray-600">Destinasi wisata menarik di Nagari Silungkang Oso</p>
                    </div>

                    @if ($featuredTourism && $featuredTourism->count() > 0)
                        <div class="space-y-6">
                            @foreach ($featuredTourism as $tourism)
                                <div class="flex bg-white rounded-lg p-4 hover:shadow-md transition-shadow duration-300">
                                    <div class="flex-shrink-0 mr-4">
                                        @if ($tourism->image)
                                            <img src="{{ Storage::url($tourism->image) }}" alt="{{ $tourism->name }}"
                                                class="w-16 h-16 rounded-lg object-cover">
                                        @else
                                            <div
                                                class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center">
                                                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                </svg>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-semibold text-gray-900 mb-1">{{ $tourism->name }}</h3>
                                        <p class="text-sm text-gray-600 mb-1">📍 {{ $tourism->location }}</p>
                                        <p class="text-sm text-gray-500 line-clamp-2">
                                            {{ Str::limit($tourism->description, 80) }}</p>
                                        <span
                                            class="inline-block mt-2 text-xs bg-green-100 text-green-800 px-2 py-1 rounded">
                                            {{ $tourism->category }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-8">
                            <p class="text-gray-500">Belum ada data wisata unggulan.</p>
                        </div>
                    @endif

                    <div class="mt-8">
                        <a href="{{ route('tourism') }}"
                            class="inline-flex items-center text-green-600 hover:text-green-700 font-medium">
                            Lihat Semua Wisata
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Events -->
    @if ($upcomingEvents && $upcomingEvents->count() > 0)
        <section class="py-16 bg-blue-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Agenda Kegiatan</h2>
                    <p class="text-gray-600">Kegiatan dan acara terbaru yang akan berlangsung</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($upcomingEvents as $event)
                        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-start space-x-4">
                                <div class="bg-blue-100 rounded-lg p-3 flex-shrink-0">
                                    <div class="text-center">
                                        <div class="text-sm font-semibold text-blue-600">
                                            {{ $event->start_date->format('M') }}</div>
                                        <div class="text-2xl font-bold text-blue-800">
                                            {{ $event->start_date->format('d') }}</div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-gray-900 mb-2 line-clamp-2">{{ $event->title }}</h3>
                                    <p class="text-sm text-gray-600 mb-2">🕒 {{ $event->start_date->format('H:i') }} WIB
                                    </p>
                                    @if ($event->location)
                                        <p class="text-sm text-gray-600 mb-2">📍 {{ $event->location }}</p>
                                    @endif
                                    <p class="text-sm text-gray-500 line-clamp-2">
                                        {{ Str::limit($event->description, 100) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Services Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Layanan Masyarakat</h2>
                <p class="text-gray-600">Berbagai layanan yang tersedia untuk kemudahan masyarakat</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <a href="{{ route('articles.index') }}"
                    class="bg-gray-50 rounded-lg p-6 text-center hover:bg-blue-50 hover:shadow-md transition-all duration-300 group">
                    <div
                        class="bg-blue-100 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center group-hover:bg-blue-200">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H14">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Berita & Informasi</h3>
                    <p class="text-sm text-gray-600">Informasi terbaru dari nagari</p>
                </a>

                <a href="{{ route('population.index') }}"
                    class="bg-gray-50 rounded-lg p-6 text-center hover:bg-green-50 hover:shadow-md transition-all duration-300 group">
                    <div
                        class="bg-green-100 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center group-hover:bg-green-200">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Data Penduduk</h3>
                    <p class="text-sm text-gray-600">Informasi kependudukan nagari</p>
                </a>

                <a href="{{ route('umkm') }}"
                    class="bg-gray-50 rounded-lg p-6 text-center hover:bg-yellow-50 hover:shadow-md transition-all duration-300 group">
                    <div
                        class="bg-yellow-100 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center group-hover:bg-yellow-200">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">UMKM Nagari</h3>
                    <p class="text-sm text-gray-600">Usaha mikro kecil menengah</p>
                </a>

                <a href="{{ route('map') }}"
                    class="bg-gray-50 rounded-lg p-6 text-center hover:bg-purple-50 hover:shadow-md transition-all duration-300 group">
                    <div
                        class="bg-purple-100 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center group-hover:bg-purple-200">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Peta Nagari</h3>
                    <p class="text-sm text-gray-600">Lihat peta dan lokasi penting</p>
                </a>
            </div>
        </div>
    </section>

    @push('scripts')
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize home map
                const homeMap = L.map('home-map').setView([-0.6742, 100.7831], 12);

                // Add OpenStreetMap tiles
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors'
                }).addTo(homeMap);

                // Custom marker icon
                const mainIcon = L.divIcon({
                    className: 'custom-div-icon',
                    html: '<div style="background-color: #dc2626; width: 24px; height: 24px; border-radius: 50%; border: 3px solid white; box-shadow: 0 2px 6px rgba(0,0,0,0.4);"></div>',
                    iconSize: [24, 24],
                    iconAnchor: [12, 12]
                });

                // Add main nagari marker
                L.marker([-0.6742, 100.7831], {
                        icon: mainIcon
                    })
                    .addTo(homeMap)
                    .bindPopup(
                        '<div class="p-3"><h3 class="font-bold text-lg">Nagari Silungkang Oso</h3><p class="text-sm text-gray-600">Kec. Silungkang, Kota Sawahlunto</p></div>'
                    );

                // Add area boundary
                const nagariArea = [
                    [-0.6800, 100.7750],
                    [-0.6800, 100.7900],
                    [-0.6650, 100.7900],
                    [-0.6650, 100.7750]
                ];

                L.polygon(nagariArea, {
                    color: '#10b981',
                    weight: 2,
                    opacity: 0.8,
                    fillColor: '#10b981',
                    fillOpacity: 0.1
                }).addTo(homeMap);
            });
        </script>
    @endpush
@endsection
