<!-- resources/views/pages/profile.blade.php -->
@extends('layouts.app')

@section('title', 'Profil Nagari - Nagari Silungkang Oso')
@section('description', 'Profil dan informasi umum Nagari Silungkang Oso, Kecamatan Silungkang, Kota Sawahlunto,
    Sumatera Barat.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-primary-600 to-blue-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Profil Nagari Silungkang Oso</h1>
                <p class="text-xl text-blue-100">Mengenal lebih dekat nagari yang kaya akan budaya dan tradisi Minangkabau
                </p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <div class="prose prose-lg max-w-none">
                        <div class="mb-12">
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">Sejarah Nagari</h2>
                            <div class="bg-blue-50 rounded-lg p-6 mb-6">
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    Nagari Silungkang Oso merupakan salah satu nagari yang terletak di Kecamatan Silungkang,
                                    Kota Sawahlunto, Provinsi Sumatera Barat. Nagari ini memiliki sejarah panjang yang erat
                                    kaitannya dengan perkembangan industri pertambangan batubara di daerah Sawahlunto pada
                                    era kolonial Belanda.
                                </p>
                                <p class="text-gray-700 leading-relaxed">
                                    Nama "Silungkang Oso" berasal dari bahasa Minangkabau, dimana "Silungkang" merujuk pada
                                    lokasi geografis yang berada di lereng bukit, sedangkan "Oso" memiliki makna khusus
                                    dalam
                                    tradisi setempat. Nagari ini telah berkembang menjadi kawasan yang memadukan nilai-nilai
                                    tradisional Minangkabau dengan perkembangan modern.
                                </p>
                            </div>
                        </div>

                        <div class="mb-12">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Kondisi Geografis</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div class="bg-green-50 rounded-lg p-4">
                                    <h4 class="font-semibold text-green-800 mb-2">Topografi</h4>
                                    <p class="text-gray-700 text-sm">Wilayah berbukit dengan ketinggian 450-650 mdpl,
                                        memberikan panorama alam yang indah dan udara yang sejuk.</p>
                                </div>
                                <div class="bg-yellow-50 rounded-lg p-4">
                                    <h4 class="font-semibold text-yellow-800 mb-2">Iklim</h4>
                                    <p class="text-gray-700 text-sm">Iklim tropis dengan suhu rata-rata 22-28°C, curah hujan
                                        tinggi mendukung pertanian.</p>
                                </div>
                            </div>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                Nagari Silungkang Oso memiliki luas wilayah sekitar 15,5 km² dengan topografi yang
                                bervariasi,
                                mulai dari dataran hingga perbukitan. Nagari ini berbatasan dengan beberapa nagari tetangga
                                dan
                                memiliki akses yang baik ke pusat Kota Sawahlunto.
                            </p>
                        </div>

                        <div class="mb-12">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Kehidupan Sosial Budaya</h3>
                            <div class="bg-purple-50 rounded-lg p-6 mb-6">
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    Masyarakat Nagari Silungkang Oso masih menjunjung tinggi nilai-nilai adat Minangkabau
                                    dengan
                                    sistem matrilineal dan filosofi <em>"Adat Basandi Syarak, Syarak Basandi
                                        Kitabullah"</em>.
                                    Kegiatan gotong royong, upacara adat, dan tradisi keagamaan masih terpelihara dengan
                                    baik hingga saat ini.
                                </p>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                        <span class="text-sm text-gray-700">Upacara Adat Tradisional</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                        <span class="text-sm text-gray-700">Kegiatan Gotong Royong</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                        <span class="text-sm text-gray-700">Festival Budaya Tahunan</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                        <span class="text-sm text-gray-700">Pengajian Rutin</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Potensi Ekonomi</h3>
                            <div class="space-y-4">
                                <div class="border-l-4 border-orange-500 pl-4">
                                    <h4 class="font-semibold text-gray-900 mb-1">Sektor Pertanian</h4>
                                    <p class="text-gray-700 text-sm">Budidaya padi, sayuran, dan tanaman hortikultura dengan
                                        hasil berkualitas tinggi.</p>
                                </div>
                                <div class="border-l-4 border-green-500 pl-4">
                                    <h4 class="font-semibold text-gray-900 mb-1">UMKM dan Kerajinan</h4>
                                    <p class="text-gray-700 text-sm">Kerajinan anyaman bambu, songket, dan produk olahan
                                        makanan tradisional.</p>
                                </div>
                                <div class="border-l-4 border-blue-500 pl-4">
                                    <h4 class="font-semibold text-gray-900 mb-1">Sektor Pariwisata</h4>
                                    <p class="text-gray-700 text-sm">Wisata alam, budaya, dan kuliner yang menarik
                                        pengunjung dari berbagai daerah.</p>
                                </div>
                                <div class="border-l-4 border-purple-500 pl-4">
                                    <h4 class="font-semibold text-gray-900 mb-1">Perdagangan</h4>
                                    <p class="text-gray-700 text-sm">Pasar tradisional dan toko-toko yang melayani kebutuhan
                                        masyarakat sehari-hari.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="space-y-8">
                        <!-- Data Nagari -->
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-xl p-6 shadow-md">
                            <h3 class="text-lg font-bold text-gray-900 mb-6 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                                Data Nagari
                            </h3>
                            <div class="space-y-4">
                                <div class="flex justify-between items-center py-2 border-b border-blue-200">
                                    <span class="text-sm font-medium text-gray-600">Luas Wilayah:</span>
                                    <span class="font-bold text-gray-900">15,5 km²</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-blue-200">
                                    <span class="text-sm font-medium text-gray-600">Jumlah Penduduk:</span>
                                    <span class="font-bold text-gray-900">3.250 jiwa</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-blue-200">
                                    <span class="text-sm font-medium text-gray-600">Jumlah KK:</span>
                                    <span class="font-bold text-gray-900">875 KK</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-blue-200">
                                    <span class="text-sm font-medium text-gray-600">Kecamatan:</span>
                                    <span class="font-bold text-gray-900">Silungkang</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-blue-200">
                                    <span class="text-sm font-medium text-gray-600">Kabupaten/Kota:</span>
                                    <span class="font-bold text-gray-900">Sawahlunto</span>
                                </div>
                                <div class="flex justify-between items-center py-2">
                                    <span class="text-sm font-medium text-gray-600">Provinsi:</span>
                                    <span class="font-bold text-gray-900">Sumatera Barat</span>
                                </div>
                            </div>
                        </div>

                        <!-- Kontak -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-100 rounded-xl p-6 shadow-md">
                            <h3 class="text-lg font-bold text-gray-900 mb-6 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                Kontak
                            </h3>
                            <div class="space-y-4">
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-semibold text-gray-900">Alamat</p>
                                        <p class="text-sm text-gray-700 leading-relaxed">Silungkang Oso, Kec. Silungkang,
                                            Kota Sawahlunto, Sumatera Barat</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-green-600 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                    <div>
                                        <p class="font-semibold text-gray-900">(0754) 123456</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-green-600 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    <div>
                                        <p class="font-semibold text-gray-900">info@silungkangoso.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Fasilitas Umum -->
                        <div class="bg-gradient-to-br from-orange-50 to-amber-100 rounded-xl p-6 shadow-md">
                            <h3 class="text-lg font-bold text-gray-900 mb-6">Fasilitas Umum</h3>
                            <div class="space-y-3">
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                                    <span class="text-sm text-gray-700">3 Sekolah Dasar</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                                    <span class="text-sm text-gray-700">1 Sekolah Menengah</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                                    <span class="text-sm text-gray-700">2 Puskesmas Pembantu</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                                    <span class="text-sm text-gray-700">5 Masjid</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                                    <span class="text-sm text-gray-700">2 Pasar Tradisional</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                                    <span class="text-sm text-gray-700">Balai Pertemuan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
