@extends('layouts.app')

@section('title', 'Wisata - Nagari Silungkang Oso')
@section('description', 'Destinasi wisata menarik di Nagari Silungkang Oso, Kecamatan Silungkang, Kota Sawahlunto,
    Sumatera Barat.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-green-600 to-teal-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Wisata Nagari Silungkang Oso</h1>
                <p class="text-xl text-green-100">Jelajahi keindahan alam dan budaya nagari kami</p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Search and Filter -->
            <div class="mb-8 flex flex-col sm:flex-row gap-4">
                <div class="flex-1">
                    <form method="GET" action="{{ route('tourism') }}" class="relative">
                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="Cari destinasi wisata..."
                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        <button type="submit" class="sr-only">Search</button>
                    </form>
                </div>
            </div>

            <!-- Filter Categories -->
            @if ($categories->count() > 0)
                <div class="flex flex-wrap gap-3 mb-8">
                    <a href="{{ route('tourism') }}"
                        class="px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200 {{ !request('category') ? 'bg-green-600 text-white' : 'bg-white text-gray-700 hover:bg-green-50' }}">
                        Semua Kategori
                    </a>
                    @foreach ($categories as $category)
                        <a href="{{ route('tourism', ['category' => $category]) }}"
                            class="px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200 {{ request('category') == $category ? 'bg-green-600 text-white' : 'bg-white text-gray-700 hover:bg-green-50' }}">
                            {{ $category }}
                        </a>
                    @endforeach
                </div>
            @endif

            <!-- Tourism Grid -->
            @if ($tourisms->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
                    @foreach ($tourisms as $tourism)
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="relative">
                                @if ($tourism->image)
                                    <img src="{{ Storage::url($tourism->image) }}" alt="{{ $tourism->name }}"
                                        class="w-full h-48 object-cover">
                                @else
                                    <div
                                        class="w-full h-48 bg-gradient-to-r from-green-500 to-teal-600 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                @endif
                                @if ($tourism->is_featured)
                                    <div class="absolute top-3 left-3">
                                        <span class="bg-green-600 text-white px-2 py-1 rounded-full text-xs font-bold">
                                            ⭐ Unggulan
                                        </span>
                                    </div>
                                @endif
                                <div class="absolute top-3 right-3">
                                    <span class="bg-white text-gray-800 px-2 py-1 rounded-full text-xs font-medium">
                                        {{ $tourism->category }}
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="font-bold text-gray-900 text-lg mb-2">{{ $tourism->name }}</h3>
                                <p class="text-sm text-gray-600 mb-3 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    {{ $tourism->location }}
                                </p>
                                <p class="text-gray-700 text-sm mb-4 line-clamp-3">{{ $tourism->description }}</p>

                                <div class="flex justify-between items-center">
                                    @if ($tourism->latitude && $tourism->longitude)
                                        <a href="https://maps.google.com/?q={{ $tourism->latitude }},{{ $tourism->longitude }}"
                                            target="_blank"
                                            class="text-blue-600 hover:text-blue-700 text-sm font-medium flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                                                </path>
                                            </svg>
                                            Lokasi
                                        </a>
                                    @endif
                                    <a href="{{ route('tourism.show', $tourism) }}"
                                        class="text-green-600 hover:text-green-700 font-medium text-sm">
                                        Detail →
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="flex justify-center">
                    {{ $tourisms->withQueryString()->links() }}
                </div>
            @else
                <div class="text-center py-16">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum ada destinasi wisata</h3>
                    <p class="text-gray-600">Data wisata akan segera ditambahkan.</p>
                </div>
            @endif
        </div>
    </section>

    @push('head')
        <style>
            .line-clamp-3 {
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
        </style>
    @endpush
@endsection
