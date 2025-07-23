@extends('layouts.app')

@section('title', 'Visi & Misi - Nagari Silungkang Oso')
@section('description', 'Visi dan Misi Nagari Silungkang Oso dalam membangun nagari yang maju, mandiri, dan sejahtera.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Visi & Misi</h1>
                <p class="text-xl text-blue-100">Komitmen kami dalam membangun desa yang lebih baik</p>
            </div>
        </div>
    </section>

    <!-- Motto Section -->
    <section class="py-16 bg-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div
                    class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-full mb-6">
                    <svg class="w-10 h-10 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                        </path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-blue-900 mb-6">MOTTO</h2>
            </div>

            <div
                class="bg-gradient-to-r from-yellow-50 to-yellow-100 rounded-2xl p-8 lg:p-12 shadow-lg border border-yellow-200">
                <div class="text-center">
                    <blockquote class="text-xl lg:text-lg font-bold text-yellow-800 leading-tight">
                        "LURUSKAN JALAN UNTUK KEADILAN BERINOVASI TANPA KORUPSI"
                    </blockquote>
                </div>
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
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">VISI</h2>
                </div>

                <div class="bg-gradient-to-r from-blue-50 to-indigo-100 rounded-2xl p-8 lg:p-12 shadow-lg">
                    <div class="text-center">
                        <blockquote class="text-lg lg:text-xl font-bold text-indigo-900 leading-relaxed">
                            "MEMBANGUN POTENSI DESA DENGAN DATA UNTUK MENINGKATKAN KESEJAHTERAAN MASYARAKAT DAN KUALITAS
                            HIDUP SERTA PENANGGULANGAN KEMISKINAN DESA MELALUI PEMANFAATAN SUMBER DAYA ALAM DAN LINGKUNGAN
                            SECARA BERKELANJUTAN"
                        </blockquote>
                    </div>
                </div>

                <!-- Vision Explanation -->
                <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="bg-green-100 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">BERBASIS DATA</h3>
                        <p class="text-gray-600 text-sm">Menggunakan data akurat untuk pengambilan keputusan yang tepat
                            dalam pembangunan desa</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-blue-100 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">KESEJAHTERAAN</h3>
                        <p class="text-gray-600 text-sm">Meningkatkan kualitas hidup dan kesejahteraan seluruh masyarakat
                            desa</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-emerald-100 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9m0 9c-5 0-9-4-9-9s4-9 9-9">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">BERKELANJUTAN</h3>
                        <p class="text-gray-600 text-sm">Pemanfaatan sumber daya alam yang ramah lingkungan dan
                            berkelanjutan</p>
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
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Langkah konkret untuk mewujudkan visi desa</p>
                </div>

                <div class="space-y-6">
                    <!-- Misi 1 -->
                    <div
                        class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-6 border-l-4 border-blue-500 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                                <span class="text-white font-bold text-lg">1</span>
                            </div>
                            <div>
                                <p class="text-gray-700">Mewujudkan reformasi system kerja dan kinerja Pemerintahan Desa
                                    guna meningkatkan kualitas pelayanan yang maksimal melalui inovasi pelayanan dasar
                                    kepada masyarakat guna meningkatkan daya saing desa;</p>
                            </div>
                        </div>
                    </div>

                    <!-- Misi 2 -->
                    <div
                        class="bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-6 border-l-4 border-green-500 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                <span class="text-white font-bold text-lg">2</span>
                            </div>
                            <div>
                                <p class="text-gray-700">Mewujudkan kepemimpinan yang baik, bijaksana, tegas dan berwibawa;
                                </p>
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
                                <p class="text-gray-700">Mengoptimalkan peran dan partisipasi masyarakat dalam membangun
                                    desa melalui perencanaan dari bawah sesuai dengan kebutuhan masyarakat;</p>
                            </div>
                        </div>
                    </div>

                    <!-- Misi 4 -->
                    <div
                        class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl p-6 border-l-4 border-purple-500 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-start space-x-4">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center">
                                <span class="text-white font-bold text-lg">4</span>
                            </div>
                            <div>
                                <p class="text-gray-700">Meningkatkan pengembangan ekonomi masyarakat di bidang pertanian
                                    serta peternakan yang berkelanjutan melalui inovasi dengan memaksimalkan asset yang
                                    dimiliki desa;</p>
                            </div>
                        </div>
                    </div>

                    <!-- Misi 5 -->
                    <div
                        class="bg-gradient-to-r from-teal-50 to-teal-100 rounded-xl p-6 border-l-4 border-teal-500 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center">
                                <span class="text-white font-bold text-lg">5</span>
                            </div>
                            <div>
                                <p class="text-gray-700">Meningkatkan kesehatan, kebersihan, keindahan serta pengelolaan
                                    potensi desa dibidang pariwisata;</p>
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
                                <p class="text-gray-700">Meningkatkan kesejahteraan serta kemandirian masyarakat desa dari
                                    segi ekonomi, pendidikan, kesehatan melalui basis data yang tepat dan akurat serta
                                    pemanfaatan lahan tidur menjadi produktif untuk membuka lapangan usaha bagi masyarakat
                                    desa;</p>
                            </div>
                        </div>
                    </div>

                    <!-- Misi 7 -->
                    <div
                        class="bg-gradient-to-r from-pink-50 to-pink-100 rounded-xl p-6 border-l-4 border-pink-500 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-pink-500 rounded-full flex items-center justify-center">
                                <span class="text-white font-bold text-lg">7</span>
                            </div>
                            <div>
                                <p class="text-gray-700">Meningkatkan kehidupan sosial yang harmonis, toleran, saling
                                    menghormati dalam kehidupan berbudaya berlandaskan keimanan dan ketakwaan dengan
                                    melibatkan tokoh masyarakat, tokoh adat dan tokoh agama;</p>
                            </div>
                        </div>
                    </div>

                    <!-- Misi 8 -->
                    <div
                        class="bg-gradient-to-r from-orange-50 to-orange-100 rounded-xl p-6 border-l-4 border-orange-500 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-start space-x-4">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center">
                                <span class="text-white font-bold text-lg">8</span>
                            </div>
                            <div>
                                <p class="text-gray-700">Mengedepankan kejujuran, keadilan, transparansi dalam kehidupan
                                    sehari hari baik dalam pemerintahan maupun dengan masyarakat desa;</p>
                            </div>
                        </div>
                    </div>

                    <!-- Misi 9 -->
                    <div
                        class="bg-gradient-to-r from-emerald-50 to-emerald-100 rounded-xl p-6 border-l-4 border-emerald-500 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-start space-x-4">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-emerald-500 rounded-full flex items-center justify-center">
                                <span class="text-white font-bold text-lg">9</span>
                            </div>
                            <div>
                                <p class="text-gray-700">Memelihara keseimbangan lingkungan dan pembangunan yang
                                    berkelanjutan dengan memanfaatkan sumber daya alam untuk mewujudkan lingkungan yang
                                    bersih dan sehat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Mari Bersama Mewujudkan Visi Desa</h2>
            <p class="text-xl text-blue-100 mb-8">Partisipasi aktif seluruh masyarakat sangat dibutuhkan untuk mencapai
                desa yang maju, mandiri, dan sejahtera.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('articles.index') }}"
                    class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-3 rounded-lg font-semibold transition-colors duration-300">
                    Lihat Program Kerja
                </a>
                <a href="{{ route('umkm') }}"
                    class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-3 rounded-lg font-semibold transition-colors duration-300">
                    Dukung UMKM Lokal
                </a>
            </div>
        </div>
    </section>
@endsection
