@extends('layouts.app')

@section('title', $umkm->name . ' - UMKM Nagari Silungkang Oso')
@section('description', 'Detail ' . $umkm->name . ' - ' . $umkm->description)

@section('content')
    <!-- Header -->
    <section class="bg-yellow-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-2 text-sm text-gray-600 mb-4">
                <a href="{{ route('umkm') }}" class="hover:text-yellow-600">UMKM</a>
                <span>/</span>
                <span>{{ $umkm->name }}</span>
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
                        @if ($umkm->image)
                            <img src="{{ Storage::url($umkm->image) }}" alt="{{ $umkm->name }}"
                                class="w-full h-64 object-cover rounded-lg shadow-lg">
                        @else
                            <div
                                class="w-full h-64 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-lg flex items-center justify-center">
                                <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg>
                            </div>
                        @endif
                    </div>

                    <!-- Title and Description -->
                    <div class="mb-8">
                        <div class="flex items-center gap-3 mb-4">
                            <h1 class="text-3xl font-bold text-gray-900">{{ $umkm->name }}</h1>
                            @if ($umkm->is_featured)
                                <span class="bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                                    ⭐ Unggulan
                                </span>
                            @endif
                        </div>
                        <div class="prose max-w-none">
                            <p class="text-gray-700 leading-relaxed">{{ $umkm->description }}</p>
                        </div>
                    </div>

                    <!-- Related UMKM -->
                    @if ($relatedUmkms->count() > 0)
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">UMKM Lainnya</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                @foreach ($relatedUmkms as $related)
                                    <div class="bg-white rounded-lg shadow-md p-4">
                                        <h4 class="font-semibold text-gray-900 mb-2">{{ $related->name }}</h4>
                                        <p class="text-sm text-gray-600 mb-2">👤 {{ $related->owner }}</p>
                                        <p class="text-sm text-gray-500 line-clamp-2 mb-3">
                                            {{ Str::limit($related->description, 80) }}</p>
                                        <a href="{{ route('umkm.show', $related) }}"
                                            class="text-yellow-600 hover:text-yellow-700 text-sm font-medium">
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
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi UMKM</h3>
                        <div class="space-y-4">
                            <div>
                                <span class="text-sm font-medium text-gray-500">Pemilik:</span>
                                <p class="text-gray-900">{{ $umkm->owner }}</p>
                            </div>
                            <div>
                                <span class="text-sm font-medium text-gray-500">Kategori:</span>
                                <p class="text-gray-900">{{ $umkm->category }}</p>
                            </div>
                            <div>
                                <span class="text-sm font-medium text-gray-500">Alamat:</span>
                                <p class="text-gray-900">{{ $umkm->address }}</p>
                            </div>
                            @if ($umkm->phone)
                                <div>
                                    <span class="text-sm font-medium text-gray-500">Telepon:</span>
                                    <p class="text-gray-900">{{ $umkm->phone }}</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Contact Card -->
                    @if ($umkm->phone)
                        <div class="bg-green-50 rounded-lg shadow-md p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Hubungi UMKM</h3>
                            <div class="space-y-3">
                                <a href="https://wa.me/62{{ ltrim($umkm->phone, '0') }}" target="_blank"
                                    class="flex items-center justify-center w-full bg-green-500 hover:bg-green-600 text-white py-3 px-4 rounded-lg font-medium transition-colors duration-200">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.688" />
                                    </svg>
                                    WhatsApp
                                </a>
                            </div>
                        </div>
                    @endif

                    <!-- Back Link -->
                    <div class="text-center">
                        <a href="{{ route('umkm') }}"
                            class="inline-flex items-center text-yellow-600 hover:text-yellow-700 font-medium">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Kembali ke Daftar UMKM
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
