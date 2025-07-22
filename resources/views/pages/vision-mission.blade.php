@extends('layouts.app')

@section('title', 'Visi & Misi - Nagari Silungkang Oso')
@section('description', 'Visi dan Misi Nagari Silungkang Oso dalam membangun nagari yang maju, mandiri, dan sejahtera.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-indigo-600 to-purple-700 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Visi & Misi</h1>
                <p class="text-xl text-indigo-100">Komitmen kami dalam membangun nagari yang lebih baik</p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Visi -->
            <div class="mb-20">
                <div class="text-center mb-12">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-blue-100 to-indigo-200 rounded-full mb-6">
                        <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">VISI</h2>
                </div>

                <div class="bg-gradient-to-r from-blue-50 to-indigo-100 rounded-2xl p-8 lg:p-12 shadow-lg">
                    <div class="text-center">
                        <blockquote class="text-2xl lg:text-3xl font-bold text-indigo-900 leading-tight">
                            "Terwujudnya Nagari Silungkang Oso yang Maju, Mandiri, dan Sejahtera
                            Berdasarkan Nilai-Nilai Adat Minangkabau dan Ajaran Islam"
                        </blockquote>
                    </div>
                </div>

                <!-- Vision Explanation -->
                <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="bg-green-100 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">MAJU</h3>
                        <p class="text-gray-600 text-sm">Berkembang dalam segala bidang dengan memanfaatkan teknologi dan
                            inovasi</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-blue-100 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">MANDIRI</h3>
                        <p class="text-gray-600 text-sm">Mampu memenuhi kebutuhan sendiri dan tidak bergantung pada pihak
                            lain</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-yellow-100 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">SEJAHTERA</h3>
                        <p class="text-gray-600 text-sm">Masyarakat yang sehat, makmur, dan bahagia lahir batin</p>
                    </div>
                </div>
            </div>

            <!-- Misi -->
            <div>
                <div class="text-center mb-12">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-green-100 to-emerald-200 rounded-full mb-6">
                        <svg class="w-10 h-10 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">MISI</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Langkah konkret untuk mewujudkan visi nagari</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="space-y-6">
                        <!-- Misi 1 -->
                        <div
                            class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-6 border-l-4 border-blue-500 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                                    <span class="text-white font-bold text-lg">1</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Peningkatan SDM</h3>
                                    <p class="text-gray-700">Meningkatkan kualitas sumber daya manusia melalui pendidikan,
                                        pelatihan, dan pemberdayaan masyarakat berbasis nilai-nilai budaya lokal.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Misi 2 -->
                        <div
                            class="bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-6 border-l-4 border-green-500 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                    <span class="text-white font-bold text-lg">2</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Pengembangan Ekonomi</h3>
                                    <p class="text-gray-700">Mengembangkan perekonomian nagari melalui pemberdayaan UMKM,
                                        pertanian, dan sektor pariwisata berkelanjutan.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Misi 3 -->
                        <div
                            class="bg-gradient-to-r from-yellow-50 to-yellow-100 rounded-xl p-6 border-l-4 border-yellow-500 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center">
                                    <span class="text-white font-bold text-lg">3</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Pembangunan Infrastruktur</h3>
                                    <p class="text-gray-700">Memperbaiki dan mengembangkan infrastruktur serta fasilitas
                                        umum untuk mendukung aktivitas masyarakat dan perekonomian nagari.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <!-- Misi 4 -->
                        <div
                            class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl p-6 border-l-4 border-purple-500 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center">
                                    <span class="text-white font-bold text-lg">4</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Pelestarian Budaya</h3>
                                    <p class="text-gray-700">Melestarikan dan mengembangkan budaya serta adat istiadat
                                        Minangkabau sebagai identitas dan kekuatan nagari.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Misi 5 -->
                        <div
                            class="bg-gradient-to-r from-red-50 to-red-100 rounded-xl p-6 border-l-4 border-red-500 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-10 h-10 bg-red-500 rounded-full flex items-center justify-center">
                                    <span class="text-white font-bold text-lg">5</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Pelayanan Publik</h3>
                                    <p class="text-gray-700">Meningkatkan kualitas pelayanan publik dan tata kelola
                                        pemerintahan nagari yang transparan, akuntabel, dan responsif.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Misi 6 -->
                        <div
                            class="bg-gradient-to-r from-indigo-50 to-indigo-100 rounded-xl p-6 border-l-4 border-indigo-500 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-10 h-10 bg-indigo-500 rounded-full flex items-center justify-center">
                                    <span class="text-white font-bold text-lg">6</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Lingkungan Lestari</h3>
                                    <p class="text-gray-700">Menciptakan lingkungan yang sehat, bersih, dan lestari melalui
                                        program-program konservasi dan pengelolaan lingkungan hidup.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gradient-to-r from-indigo-600 to-purple-700 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Mari Bersama Mewujudkan Visi Nagari</h2>
            <p class="text-xl text-indigo-100 mb-8">Partisipasi aktif seluruh masyarakat sangat dibutuhkan untuk mencapai
                nagari yang maju, mandiri, dan sejahtera.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('articles.index') }}"
                    class="bg-white text-indigo-600 hover:bg-gray-100 px-8 py-3 rounded-lg font-semibold transition-colors duration-300">
                    Lihat Program Kerja
                </a>
                <a href="{{ route('umkm') }}"
                    class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-indigo-600 px-8 py-3 rounded-lg font-semibold transition-colors duration-300">
                    Dukung UMKM Lokal
                </a>
            </div>
        </div>
    </section>
@endsection
