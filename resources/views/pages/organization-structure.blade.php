<!-- resources/views/pages/organization-structure.blade.php -->
@extends('layouts.app')

@section('title', 'Struktur Organisasi - Nagari Silungkang Oso')
@section('description', 'Struktur Organisasi Pemerintahan Nagari Silungkang Oso dan perangkat nagari.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Struktur Organisasi</h1>
                <p class="text-xl text-blue-100">Pemerintahan Nagari Silungkang Oso</p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Level 1: Wali Nagari (Gubernur Ferdinal) -->
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Kepala Pemerintahan</h2>
                <div
                    class="bg-white rounded-3xl shadow-2xl p-12 max-w-lg mx-auto border-4 border-blue-200 hover:shadow-3xl transition-all duration-300">
                    <div class="relative mb-8">
                        <div
                            class="w-64 h-64 rounded-full mx-auto mb-6 overflow-hidden shadow-2xl relative border-4 border-blue-300">
                            <img src="{{ asset('images/ferdinal.jpg') }}" alt="Ferdinal - Wali Nagari"
                                class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div
                                class="w-full h-full bg-gradient-to-br from-blue-500 to-blue-700 hidden items-center justify-center">
                                <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-4xl font-bold text-blue-800 mb-3">FERDINAL</h3>
                    <div class="bg-gradient-to-r from-blue-100 to-blue-200 rounded-xl p-4 mb-4">
                        <p class="text-xl font-bold text-blue-900">WALI NAGARI</p>
                        <p class="text-sm text-blue-700">(Gubernur)</p>
                    </div>
                    <div class="bg-yellow-50 rounded-lg p-3 border border-yellow-200">
                        <p class="text-sm text-yellow-800 font-semibold">Pemimpin Tertinggi Pemerintahan Nagari</p>
                    </div>
                </div>
            </div>

            {{-- <!-- BPN (Simplified) -->
            <div class="text-center mb-12">
                <div class="bg-white rounded-xl shadow-md p-6 max-w-md mx-auto border border-gray-200">
                    <div class="w-16 h-16 bg-gray-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-1">BPN</h3>
                    <p class="text-sm text-gray-500">Badan Permusyawaratan Nagari</p>
                </div>
            </div> --}}

            <!-- Level 2: Sekretaris Desa -->
            <div class="text-center mb-16">
                <h2 class="text-2xl font-bold text-gray-900 mb-8">Sekretariat</h2>
                <div
                    class="bg-white rounded-2xl shadow-xl p-8 max-w-md mx-auto border-2 border-green-200 hover:shadow-2xl transition-all duration-300">
                    <div class="w-48 h-48 rounded-full mx-auto mb-6 overflow-hidden shadow-xl border-2 border-green-300">
                        <img src="{{ asset('images/sabron.jpg') }}" alt="Sabron S.SOS - Sekretaris Desa"
                            class="w-full h-full object-cover"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div
                            class="w-full h-full bg-gradient-to-br from-green-400 to-green-600 hidden items-center justify-center">
                            <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-green-800 mb-2">SABRON, S.SOS</h3>
                    <div class="bg-green-100 rounded-lg p-3 mb-4">
                        <p class="text-lg font-bold text-green-800">SEKRETARIS DESA</p>
                    </div>
                    <p class="text-sm text-gray-600">Koordinator Administrasi Pemerintahan</p>
                </div>
            </div>

            <!-- Level 3: Kepala Seksi & Kepala Urusan -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-4">Perangkat Desa</h2>
                <p class="text-center text-gray-600 mb-12">Kepala Seksi (KASI) dan Kepala Urusan (KAUR)</p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Kasi Pemerintahan -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-l-4 border-blue-500">
                        <div class="w-36 h-36 rounded-full mx-auto mb-4 overflow-hidden shadow-md border-2 border-blue-200">
                            <img src="{{ asset('images/bambang-suherman.jpg') }}"
                                alt="Bambang Suherman SE - Kasi Pemerintahan" class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div
                                class="w-full h-full bg-gradient-to-br from-blue-100 to-blue-200 hidden items-center justify-center">
                                <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-blue-800 mb-2">KASI PEMERINTAHAN</h3>
                        <h4 class="text-base font-semibold text-gray-900 mb-3">Bambang Suherman, SE</h4>
                        <div class="bg-blue-50 rounded-lg p-2">
                            <p class="text-xs text-blue-700">Urusan Pemerintahan & Trantib</p>
                        </div>
                    </div>

                    <!-- Kasi Kesejahteraan -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-l-4 border-purple-500">
                        <div
                            class="w-36 h-36 rounded-full mx-auto mb-4 overflow-hidden shadow-md border-2 border-purple-200">
                            <img src="{{ asset('images/risko-muhammad.jpg') }}"
                                alt="Risko Muhammad A.md - Kasi Kesejahteraan" class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div
                                class="w-full h-full bg-gradient-to-br from-purple-100 to-purple-200 hidden items-center justify-center">
                                <svg class="w-12 h-12 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-purple-800 mb-2">KASI KESEJAHTERAAN</h3>
                        <h4 class="text-base font-semibold text-gray-900 mb-3">Risko Muhammad, A.md</h4>
                        <div class="bg-purple-50 rounded-lg p-2">
                            <p class="text-xs text-purple-700">Kesehatan & Sosial Masyarakat</p>
                        </div>
                    </div>

                    <!-- Kasi Pelayanan -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-l-4 border-green-500">
                        <div
                            class="w-36 h-36 rounded-full mx-auto mb-4 overflow-hidden shadow-md border-2 border-green-200">
                            <img src="{{ asset('images/imron-abadi.jpg') }}" alt="Imron Abadi - Kasi Pelayanan"
                                class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div
                                class="w-full h-full bg-gradient-to-br from-green-100 to-green-200 hidden items-center justify-center">
                                <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-green-800 mb-2">KASI PELAYANAN</h3>
                        <h4 class="text-base font-semibold text-gray-900 mb-3">Imron Abadi</h4>
                        <div class="bg-green-50 rounded-lg p-2">
                            <p class="text-xs text-green-700">Pelayanan Masyarakat</p>
                        </div>
                    </div>

                    <!-- Kaur TU & UMKR -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-l-4 border-yellow-500">
                        <div
                            class="w-36 h-36 rounded-full mx-auto mb-4 overflow-hidden shadow-md border-2 border-yellow-200">
                            <img src="{{ asset('images/yulmiati.jpg') }}" alt="Yulniati - Kaur TU & UMKR"
                                class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div
                                class="w-full h-full bg-gradient-to-br from-yellow-100 to-yellow-200 hidden items-center justify-center">
                                <svg class="w-12 h-12 text-yellow-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-yellow-800 mb-2">KAUR TU & UMKR</h3>
                        <h4 class="text-base font-semibold text-gray-900 mb-3">Yulmiati</h4>
                        <div class="bg-yellow-50 rounded-lg p-2">
                            <p class="text-xs text-yellow-700">Tata Usaha & Umum</p>
                        </div>
                    </div>

                    <!-- Kaur Keuangan -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-l-4 border-red-500">
                        <div class="w-36 h-36 rounded-full mx-auto mb-4 overflow-hidden shadow-md border-2 border-red-200">
                            <img src="{{ asset('images/sri-wahyuni.jpg') }}" alt="Sri Wahyuni Y A.Md - Kaur Keuangan"
                                class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div
                                class="w-full h-full bg-gradient-to-br from-red-100 to-red-200 hidden items-center justify-center">
                                <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-red-800 mb-2">KAUR KEUANGAN</h3>
                        <h4 class="text-base font-semibold text-gray-900 mb-3">Sri Wahyuni .Y, A.Md</h4>
                        <div class="bg-red-50 rounded-lg p-2">
                            <p class="text-xs text-red-700">Pengelolaan Keuangan</p>
                        </div>
                    </div>

                    <!-- Kaur Perencanaan -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-l-4 border-indigo-500">
                        <div
                            class="w-36 h-36 rounded-full mx-auto mb-4 overflow-hidden shadow-md border-2 border-indigo-200">
                            <img src="{{ asset('images/meri-susanti.jpg') }}" alt="Meri Susanti SE - Kaur Perencanaan"
                                class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div
                                class="w-full h-full bg-gradient-to-br from-indigo-100 to-indigo-200 hidden items-center justify-center">
                                <svg class="w-12 h-12 text-indigo-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-indigo-800 mb-2">KAUR PERENCANAAN</h3>
                        <h4 class="text-base font-semibold text-gray-900 mb-3">Meri Susanti, SE</h4>
                        <div class="bg-indigo-50 rounded-lg p-2">
                            <p class="text-xs text-indigo-700">Perencanaan Pembangunan</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Level 4: Staff -->
            <div class="mb-16">
                <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">Staff Pendukung</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">

                    <!-- Staff Kosong 1 -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center hover:bg-gray-200 transition-colors duration-300">
                        <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-gray-700">Staff Kasi Pemerintahan</p>
                        <p class="text-xs text-gray-500">Kosong</p>
                    </div>

                    <!-- Rival Kharisma -->
                    <div
                        class="bg-blue-50 rounded-lg p-4 text-center hover:bg-blue-100 transition-colors duration-300 border border-blue-200">
                        <div class="w-24 h-24 rounded-full mx-auto mb-2 overflow-hidden border border-blue-200">
                            <img src="{{ asset('images/rival-kharisma.jpg') }}" alt="Rival Kharisma S.Kom - Staff"
                                class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="w-full h-full bg-blue-200 hidden items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-sm font-medium text-blue-700">Staff Kasi Kesejahteraan</p>
                        <p class="text-xs text-blue-600">Rival Kharisma, S.Kom</p>
                    </div>

                    <!-- Staff Kosong 2 -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center hover:bg-gray-200 transition-colors duration-300">
                        <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-gray-700">Staff Kasi Pelayanan</p>
                        <p class="text-xs text-gray-500">Kosong</p>
                    </div>

                    <!-- Riko Alfiando -->
                    <div
                        class="bg-green-50 rounded-lg p-4 text-center hover:bg-green-100 transition-colors duration-300 border border-green-200">
                        <div class="w-24 h-24 rounded-full mx-auto mb-2 overflow-hidden border border-green-200">
                            <img src="{{ asset('images/riko-alfiando.jpg') }}" alt="Riko Alfiando - Staff"
                                class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="w-full h-full bg-green-200 hidden items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-sm font-medium text-green-700">Staff Kaur TU & Umum</p>
                        <p class="text-xs text-green-600">Riko Alfiando</p>
                    </div>

                    <!-- Rika Yulianti -->
                    <div
                        class="bg-purple-50 rounded-lg p-4 text-center hover:bg-purple-100 transition-colors duration-300 border border-purple-200">
                        <div class="w-24 h-24 rounded-full mx-auto mb-2 overflow-hidden border border-purple-200">
                            <img src="{{ asset('images/rika-yulianti.jpg') }}" alt="Rika Yulianti - Staff"
                                class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="w-full h-full bg-purple-200 hidden items-center justify-center">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-sm font-medium text-purple-700">Staff Kaur Keuangan</p>
                        <p class="text-xs text-purple-600">Rika Yulianti</p>
                    </div>

                    <!-- Staff Kosong 3 -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center hover:bg-gray-200 transition-colors duration-300">
                        <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-gray-700">Staff Kaur Perencanaan</p>
                        <p class="text-xs text-gray-500">Kosong</p>
                    </div>
                </div>
            </div>

            <!-- Level 5: Kepala Desa per Wilayah -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-4">Kepala Desa per Wilayah</h2>
                <p class="text-center text-gray-600 mb-12">Pemimpin di tingkat wilayah/jorong</p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                    <!-- Kades Lembah Galendo -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-blue-500">
                        <div
                            class="w-36 h-36 rounded-full mx-auto mb-4 overflow-hidden shadow-md border-2 border-blue-200">
                            <img src="{{ asset('images/agung-wijaya.jpg') }}"
                                alt="Agung Wijaya - Kepala Desa Lembah Galendo" class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div
                                class="w-full h-full bg-gradient-to-br from-blue-100 to-blue-200 hidden items-center justify-center">
                                <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-blue-800 mb-2">Lubuk Kubang</h3>
                        <h4 class="text-base font-semibold text-gray-900 mb-2">Agung Wijaya</h4>
                        <div class="bg-blue-50 rounded-lg p-2">
                            <p class="text-xs text-blue-700 font-medium">Kepala Desa</p>
                        </div>
                    </div>

                    <!-- Kades Lagan Duwur -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-green-500">
                        <div
                            class="w-36 h-36 rounded-full mx-auto mb-4 overflow-hidden shadow-md border-2 border-green-200">
                            <img src="{{ asset('images/andri.jpg') }}" alt="Andri - Kepala Desa Lagan Duwur"
                                class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div
                                class="w-full h-full bg-gradient-to-br from-green-100 to-green-200 hidden items-center justify-center">
                                <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-green-800 mb-2">Kebun Jeruk</h3>
                        <h4 class="text-base font-semibold text-gray-900 mb-2">ANDRI</h4>
                        <div class="bg-green-50 rounded-lg p-2">
                            <p class="text-xs text-green-700 font-medium">Kepala Desa</p>
                        </div>
                    </div>

                    <!-- Kades Singkarak -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-gray-400">
                        <div
                            class="w-36 h-36 rounded-full mx-auto mb-4 overflow-hidden shadow-md border-2 border-gray-200">
                            <!-- Untuk posisi kosong, tidak ada gambar -->
                            <div
                                class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                <svg class="w-10 h-10 text-gray-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-600 mb-2">SINGKARAK</h3>
                        <h4 class="text-base font-semibold text-gray-500 mb-2">Kosong</h4>
                    </div>

                    <!-- Kades Sungai Kalau -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-yellow-500">
                        <div
                            class="w-36 h-36 rounded-full mx-auto mb-4 overflow-hidden shadow-md border-2 border-yellow-200">
                            <img src="{{ asset('images/ade-erlan.jpg') }}" alt="Ade Erfan F - Kepala Desa Sungai Kalau"
                                class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div
                                class="w-full h-full bg-gradient-to-br from-yellow-100 to-yellow-200 hidden items-center justify-center">
                                <svg class="w-10 h-10 text-yellow-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-yellow-800 mb-2">Sawah Darek</h3>
                        <h4 class="text-base font-semibold text-gray-900 mb-2">Ade Erlan F</h4>
                        <div class="bg-yellow-50 rounded-lg p-2">
                            <p class="text-xs text-yellow-700 font-medium">Kepala Desa</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Organizational Chart Flow -->
            {{-- <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl p-8 lg:p-12 mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Alur Organisasi</h2>

                <div class="flex flex-col items-center space-y-8">
                    <!-- Flow Level 1 -->
                    <div class="flex items-center justify-center space-x-8">
                        <div class="bg-white rounded-lg p-4 shadow-md border-2 border-blue-300">
                            <p class="text-sm font-bold text-blue-800">WALI NAGARI</p>
                            <p class="text-xs text-blue-600">Ferdinal</p>
                        </div>
                        <div class="text-gray-400">↔</div>
                        <div class="bg-white rounded-lg p-4 shadow-md border border-gray-300">
                            <p class="text-sm font-bold text-gray-700">BPN</p>
                            <p class="text-xs text-gray-500">Pengawas</p>
                        </div>
                    </div>

                    <!-- Arrow Down -->
                    <div class="text-blue-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </div>

                    <!-- Flow Level 2 -->
                    <div class="bg-white rounded-lg p-4 shadow-md border-2 border-green-300">
                        <p class="text-sm font-bold text-green-800">SEKRETARIS DESA</p>
                        <p class="text-xs text-green-600">Sabron, S.SOS</p>
                    </div>

                    <!-- Arrow Down -->
                    <div class="text-blue-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </div>

                    <!-- Flow Level 3 -->
                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="bg-white rounded-lg p-3 shadow-md border border-blue-200 text-center">
                            <p class="text-xs font-bold text-blue-700">KASI PEMERINTAHAN</p>
                        </div>
                        <div class="bg-white rounded-lg p-3 shadow-md border border-purple-200 text-center">
                            <p class="text-xs font-bold text-purple-700">KASI KESEJAHTERAAN</p>
                        </div>
                        <div class="bg-white rounded-lg p-3 shadow-md border border-green-200 text-center">
                            <p class="text-xs font-bold text-green-700">KASI PELAYANAN</p>
                        </div>
                        <div class="bg-white rounded-lg p-3 shadow-md border border-yellow-200 text-center">
                            <p class="text-xs font-bold text-yellow-700">KAUR TU & UMKR</p>
                        </div>
                        <div class="bg-white rounded-lg p-3 shadow-md border border-red-200 text-center">
                            <p class="text-xs font-bold text-red-700">KAUR KEUANGAN</p>
                        </div>
                        <div class="bg-white rounded-lg p-3 shadow-md border border-indigo-200 text-center">
                            <p class="text-xs font-bold text-indigo-700">KAUR PERENCANAAN</p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
