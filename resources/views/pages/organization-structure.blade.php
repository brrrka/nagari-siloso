<!-- resources/views/pages/organization-structure.blade.php -->
@extends('layouts.app')

@section('title', 'Struktur Organisasi - Nagari Silungkang Oso')
@section('description', 'Struktur Organisasi Pemerintahan Nagari Silungkang Oso dan perangkat nagari.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-teal-600 to-cyan-700 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Struktur Organisasi</h1>
                <p class="text-xl text-teal-100">Pemerintahan Nagari Silungkang Oso</p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Wali Nagari -->
            <div class="text-center mb-16">
                <div
                    class="bg-white rounded-2xl shadow-xl p-8 max-w-md mx-auto hover:shadow-2xl transition-shadow duration-300">
                    <div class="relative mb-6">
                        <div
                            class="w-32 h-32 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full mx-auto mb-4 flex items-center justify-center shadow-lg">
                            <svg class="w-16 h-16 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 bg-yellow-400 rounded-full p-2">
                            <svg class="w-6 h-6 text-yellow-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Bapak Suryadi, S.Sos</h3>
                    <p class="text-blue-600 font-bold text-lg mb-2">Wali Nagari</p>
                    <p class="text-sm text-gray-600 mb-4">Periode 2022-2028</p>
                    <div class="bg-blue-50 rounded-lg p-3">
                        <p class="text-xs text-blue-800 font-medium">Pemimpin tertinggi pemerintahan nagari</p>
                    </div>
                </div>
            </div>

            <!-- Perangkat Nagari -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-4">Perangkat Nagari</h2>
                <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Tim kerja yang mendukung pelaksanaan
                    pemerintahan dan pelayanan masyarakat</p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Sekretaris Nagari -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-24 h-24 bg-gradient-to-br from-green-100 to-green-200 rounded-full mx-auto mb-4 flex items-center justify-center shadow-md">
                            <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1">Ibu Sari Dewi, S.Pd</h3>
                        <p class="text-green-600 font-semibold mb-3">Sekretaris Nagari</p>
                        <div class="bg-green-50 rounded-lg p-3">
                            <p class="text-xs text-green-800">Koordinator administrasi dan dokumentasi</p>
                        </div>
                    </div>

                    <!-- Kaur Pemerintahan -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-24 h-24 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full mx-auto mb-4 flex items-center justify-center shadow-md">
                            <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1">Bapak Ahmad Yani</h3>
                        <p class="text-blue-600 font-semibold mb-3">Kaur Pemerintahan</p>
                        <div class="bg-blue-50 rounded-lg p-3">
                            <p class="text-xs text-blue-800">Urusan pemerintahan dan trantib</p>
                        </div>
                    </div>

                    <!-- Kaur Pembangunan -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-24 h-24 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-full mx-auto mb-4 flex items-center justify-center shadow-md">
                            <svg class="w-12 h-12 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1">Bapak Rizal Efendi, ST</h3>
                        <p class="text-yellow-600 font-semibold mb-3">Kaur Pembangunan</p>
                        <div class="bg-yellow-50 rounded-lg p-3">
                            <p class="text-xs text-yellow-800">Infrastruktur dan pembangunan</p>
                        </div>
                    </div>

                    <!-- Kaur Kesejahteraan -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-24 h-24 bg-gradient-to-br from-purple-100 to-purple-200 rounded-full mx-auto mb-4 flex items-center justify-center shadow-md">
                            <svg class="w-12 h-12 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1">Ibu Fitri Handayani</h3>
                        <p class="text-purple-600 font-semibold mb-3">Kaur Kesejahteraan</p>
                        <div class="bg-purple-50 rounded-lg p-3">
                            <p class="text-xs text-purple-800">Kesehatan dan sosial masyarakat</p>
                        </div>
                    </div>

                    <!-- Kaur Keuangan -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-24 h-24 bg-gradient-to-br from-red-100 to-red-200 rounded-full mx-auto mb-4 flex items-center justify-center shadow-md">
                            <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1">Bapak Dedi Syahputra</h3>
                        <p class="text-red-600 font-semibold mb-3">Kaur Keuangan</p>
                        <div class="bg-red-50 rounded-lg p-3">
                            <p class="text-xs text-red-800">Pengelolaan keuangan nagari</p>
                        </div>
                    </div>

                    <!-- Kaur Umum -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-24 h-24 bg-gradient-to-br from-indigo-100 to-indigo-200 rounded-full mx-auto mb-4 flex items-center justify-center shadow-md">
                            <svg class="w-12 h-12 text-indigo-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V3.5a2.5 2.5 0 00-5 0V6m5 0a3 3 0 013 3v7a3 3 0 01-3 3H8a3 3 0 01-3-3V9a3 3 0 013-3h0">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1">Ibu Rina Marlina</h3>
                        <p class="text-indigo-600 font-semibold mb-3">Kaur Umum</p>
                        <div class="bg-indigo-50 rounded-lg p-3">
                            <p class="text-xs text-indigo-800">Urusan umum dan perlengkapan</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Badan Permusyawaratan Nagari -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-4">Badan Permusyawaratan Nagari (BPN)</h2>
                <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Lembaga legislatif yang mengawasi dan
                    mendampingi pemerintahan nagari</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Ketua BPN -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-28 h-28 bg-gradient-to-br from-orange-100 to-orange-200 rounded-full mx-auto mb-4 flex items-center justify-center shadow-md">
                            <svg class="w-14 h-14 text-orange-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Bapak H. Sofyan</h3>
                        <p class="text-lg text-gray-600 mb-1">Datuak Rajo</p>
                        <p class="text-orange-600 font-semibold mb-3">Ketua BPN</p>
                        <div class="bg-orange-50 rounded-lg p-3">
                            <p class="text-xs text-orange-800 font-medium">Memimpin sidang dan koordinasi BPN</p>
                        </div>
                    </div>

                    <!-- Wakil Ketua BPN -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-28 h-28 bg-gradient-to-br from-teal-100 to-teal-200 rounded-full mx-auto mb-4 flex items-center justify-center shadow-md">
                            <svg class="w-14 h-14 text-teal-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Bapak Zulkifli, S.Ag</h3>
                        <p class="text-teal-600 font-semibold mb-3">Wakil Ketua BPN</p>
                        <div class="bg-teal-50 rounded-lg p-3">
                            <p class="text-xs text-teal-800 font-medium">Mendampingi ketua dalam menjalankan tugas</p>
                        </div>
                    </div>

                    <!-- Sekretaris BPN -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-28 h-28 bg-gradient-to-br from-pink-100 to-pink-200 rounded-full mx-auto mb-4 flex items-center justify-center shadow-md">
                            <svg class="w-14 h-14 text-pink-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Ibu Yuliana, S.Pd</h3>
                        <p class="text-pink-600 font-semibold mb-3">Sekretaris BPN</p>
                        <div class="bg-pink-50 rounded-lg p-3">
                            <p class="text-xs text-pink-800 font-medium">Administrasi dan dokumentasi BPN</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tugas dan Fungsi -->
            <div class="bg-gradient-to-r from-blue-50 to-indigo-100 rounded-2xl p-8 lg:p-12">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Tugas dan Fungsi Organisasi</h2>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Wali Nagari -->
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 3l14 9-14 9V3z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Wali Nagari</h3>
                        </div>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li class="flex items-start">
                                <div class="w-1.5 h-1.5 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                <span>Memimpin penyelenggaraan pemerintahan nagari</span>
                            </li>
                            <li class="flex items-start">
                                <div class="w-1.5 h-1.5 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                <span>Mengkoordinasikan kegiatan pembangunan</span>
                            </li>
                            <li class="flex items-start">
                                <div class="w-1.5 h-1.5 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                <span>Memberikan pelayanan kepada masyarakat</span>
                            </li>
                            <li class="flex items-start">
                                <div class="w-1.5 h-1.5 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                <span>Membina ketentraman dan ketertiban</span>
                            </li>
                        </ul>
                    </div>

                    <!-- BPN -->
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">BPN</h3>
                        </div>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li class="flex items-start">
                                <div class="w-1.5 h-1.5 bg-orange-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                <span>Mengawasi kinerja Wali Nagari</span>
                            </li>
                            <li class="flex items-start">
                                <div class="w-1.5 h-1.5 bg-orange-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                <span>Menampung aspirasi masyarakat</span>
                            </li>
                            <li class="flex items-start">
                                <div class="w-1.5 h-1.5 bg-orange-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                <span>Menyetujui Peraturan Nagari</span>
                            </li>
                            <li class="flex items-start">
                                <div class="w-1.5 h-1.5 bg-orange-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                <span>Mengawasi APB Nagari</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
