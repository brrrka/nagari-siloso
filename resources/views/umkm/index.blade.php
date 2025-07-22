@extends('layouts.app')

@section('title', 'UMKM - Nagari Silungkang Oso')
@section('description', 'Daftar Usaha Mikro Kecil dan Menengah (UMKM) di Nagari Silungkang Oso, Kecamatan Silungkang,
    Kota Sawahlunto.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-yellow-500 to-orange-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">UMKM Nagari Silungkang Oso</h1>
                <p class="text-xl text-yellow-100">Usaha Mikro, Kecil, dan Menengah yang menggerakkan ekonomi nagari</p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Search and Filter -->
            <div class="mb-8 flex flex-col sm:flex-row gap-4">
                <div class="flex-1">
                    <form method="GET" action="{{ route('umkm') }}" class="relative">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari UMKM..."
                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
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
                    <a href="{{ route('umkm') }}"
                        class="px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200 {{ !request('category') ? 'bg-yellow-500 text-white' : 'bg-white text-gray-700 hover:bg-yellow-50' }}">
                        Semua Kategori
                    </a>
                    @foreach ($categories as $category)
                        <a href="{{ route('umkm', ['category' => $category]) }}"
                            class="px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200 {{ request('category') == $category ? 'bg-yellow-500 text-white' : 'bg-white text-gray-700 hover:bg-yellow-50' }}">
                            {{ $category }}
                        </a>
                    @endforeach
                </div>
            @endif

            <!-- UMKM Grid -->
            @if ($umkms->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
                    @foreach ($umkms as $umkm)
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="relative">
                                @if ($umkm->image)
                                    <img src="{{ Storage::url($umkm->image) }}" alt="{{ $umkm->name }}"
                                        class="w-full h-48 object-cover">
                                @else
                                    <div
                                        class="w-full h-48 bg-gradient-to-r from-yellow-400 to-orange-500 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                            </path>
                                        </svg>
                                    </div>
                                @endif
                                @if ($umkm->is_featured)
                                    <div class="absolute top-3 left-3">
                                        <span class="bg-yellow-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                                            ⭐ Unggulan
                                        </span>
                                    </div>
                                @endif
                                <div class="absolute top-3 right-3">
                                    <span class="bg-white text-gray-800 px-2 py-1 rounded-full text-xs font-medium">
                                        {{ $umkm->category }}
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="font-bold text-gray-900 text-lg mb-2">{{ $umkm->name }}</h3>
                                <p class="text-sm text-gray-600 mb-2">👤 {{ $umkm->owner }}</p>
                                <p class="text-sm text-gray-600 mb-3">📍 {{ $umkm->address }}</p>
                                <p class="text-gray-700 text-sm mb-4 line-clamp-3">{{ $umkm->description }}</p>

                                <div class="flex justify-between items-center">
                                    @if ($umkm->phone)
                                        <a href="tel:{{ $umkm->phone }}"
                                            class="text-green-600 hover:text-green-700 text-sm font-medium flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                                </path>
                                            </svg>
                                            {{ $umkm->phone }}
                                        </a>
                                    @endif
                                    <a href="{{ route('umkm.show', $umkm) }}"
                                        class="text-yellow-600 hover:text-yellow-700 font-medium text-sm">
                                        Detail →
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="flex justify-center">
                    {{ $umkms->withQueryString()->links() }}
                </div>
            @else
                <div class="text-center py-16">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                        </path>
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum ada UMKM terdaftar</h3>
                    <p class="text-gray-600">Data UMKM akan segera ditambahkan.</p>
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
