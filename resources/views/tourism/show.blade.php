@extends('layouts.app')

@section('title', $tourism->name . ' - Wisata Nagari Silungkang Oso')
@section('description', 'Detail ' . $tourism->name . ' - ' . $tourism->description)

@section('content')
    <!-- Header -->
    <section class="bg-green-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-2 text-sm text-gray-600 mb-4">
                <a href="{{ route('tourism') }}" class="hover:text-green-600">Wisata</a>
                <span>/</span>
                <span>{{ $tourism->name }}</span>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <!-- Image -->
                    <div class="mb-8">
                        @if ($tourism->image)
                            <img src="{{ Storage::url($tourism->image) }}" alt="{{ $tourism->name }}"
                                class="w-full h-64 object-cover rounded-lg shadow-lg">
                        @else
                            <div
                                class="w-full h-64 bg-gradient-to-r from-green-500 to-teal-600 rounded-lg flex items-center justify-center">
                                <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                        @endif
                    </div>

                    <!-- Title and Description -->
                    <div class="mb-8">
                        <div class="flex items-center gap-3 mb-4">
                            <h1 class="text-3xl font-bold text-gray-900">{{ $tourism->name }}</h1>
                            @if ($tourism->is_featured)
                                <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                                    ⭐ Unggulan
                                </span>
                            @endif
                        </div>
                        <div class="prose max-w-none">
                            <p class="text-gray-700 leading-relaxed">{{ $tourism->description }}</p>
                        </div>
                    </div>

                    <!-- Map -->
                    @if ($tourism->latitude && $tourism->longitude)
                        <div class="mb-8">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Lokasi di Peta</h3>
                            <div class="bg-gray-200 rounded-lg h-64 flex items-center justify-center">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.1!2d{{ $tourism->longitude }}!3d{{ $tourism->latitude }}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2z{{ $tourism->latitude }},{{ $tourism->longitude }}!5e0!3m2!1sen!2sid!4v1000000000000!5m2!1sen!2sid"
                                    width="100%" height="256" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade" class="rounded-lg">
                                </iframe>
                            </div>
                        </div>
                    @endif

                    <!-- Related Tourism -->
                    @if ($relatedTourisms->count() > 0)
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Destinasi Lainnya</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                @foreach ($relatedTourisms as $related)
                                    <div class="bg-white rounded-lg shadow-md p-4">
                                        <h4 class="font-semibold text-gray-900 mb-2">{{ $related->name }}</h4>
                                        <p class="text-sm text-gray-600 mb-2">📍 {{ $related->location }}</p>
                                        <p class="text-sm text-gray-500 line-clamp-2 mb-3">
                                            {{ Str::limit($related->description, 80) }}</p>
                                        <a href="{{ route('tourism.show', $related) }}"
                                            class="text-green-600 hover:text-green-700 text-sm font-medium">
                                            Lihat Detail →
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Info Card -->
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Destinasi</h3>
                        <div class="space-y-4">
                            <div>
                                <span class="text-sm font-medium text-gray-500">Kategori:</span>
                                <p class="text-gray-900">{{ $tourism->category }}</p>
                            </div>
                            <div>
                                <span class="text-sm font-medium text-gray-500">Lokasi:</span>
                                <p class="text-gray-900">{{ $tourism->location }}</p>
                            </div>
                            @if ($tourism->latitude && $tourism->longitude)
                                <div>
                                    <span class="text-sm font-medium text-gray-500">Koordinat:</span>
                                    <p class="text-gray-900 text-sm">{{ $tourism->latitude }}, {{ $tourism->longitude }}
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Action Card -->
                    @if ($tourism->latitude && $tourism->longitude)
                        <div class="bg-blue-50 rounded-lg shadow-md p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Akses Lokasi</h3>
                            <div class="space-y-3">
                                <a href="https://maps.google.com/?q={{ $tourism->latitude }},{{ $tourism->longitude }}"
                                    target="_blank"
                                    class="flex items-center justify-center w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-4 rounded-lg font-medium transition-colors duration-200">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    Buka di Google Maps
                                </a>
                                <a href="https://www.google.com/maps/dir/?api=1&destination={{ $tourism->latitude }},{{ $tourism->longitude }}"
                                    target="_blank"
                                    class="flex items-center justify-center w-full bg-green-600 hover:bg-green-700 text-white py-3 px-4 rounded-lg font-medium transition-colors duration-200">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                                        </path>
                                    </svg>
                                    Petunjuk Arah
                                </a>
                            </div>
                        </div>
                    @endif

                    <!-- Back Link -->
                    <div class="text-center">
                        <a href="{{ route('tourism') }}"
                            class="inline-flex items-center text-green-600 hover:text-green-700 font-medium">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Kembali ke Daftar Wisata
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
