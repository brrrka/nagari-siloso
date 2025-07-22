@extends('layouts.app')

@section('title', 'Data Penduduk - Nagari Silungkang Oso')
@section('description', 'Data kependudukan Nagari Silungkang Oso, Kecamatan Silungkang, Kota Sawahlunto, Sumatera
    Barat.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Data Penduduk</h1>
                <p class="text-xl text-blue-100">Informasi kependudukan Nagari Silungkang Oso</p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Summary Cards -->
            @if ($totalPopulation)
                <div class="mb-12">
                    <div class="text-center mb-8">
                        <div class="inline-flex items-center justify-center w-24 h-24 bg-blue-100 rounded-full mb-4">
                            <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-2">{{ number_format($totalPopulation->value) }}</h2>
                        <p class="text-xl text-gray-600">{{ $totalPopulation->unit }} - Total Penduduk</p>
                        <p class="text-sm text-gray-500 mt-2">Data tahun {{ $totalPopulation->year }}</p>
                    </div>
                </div>
            @endif

            <!-- Population Data Grid -->
            @if ($populationData->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-12">
                    @foreach ($populationData as $data)
                        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-gray-900 mb-2">
                                    {{ number_format($data->value) }}
                                </div>
                                <div class="text-sm text-gray-500 mb-1">{{ $data->unit }}</div>
                                <h3 class="font-semibold text-gray-800 mb-2">{{ $data->category }}</h3>
                                @if ($data->description)
                                    <p class="text-xs text-gray-600">{{ $data->description }}</p>
                                @endif
                                <div class="text-xs text-gray-400 mt-2">Tahun {{ $data->year }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Population Charts -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Gender Distribution -->
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-6">Distribusi Berdasarkan Jenis Kelamin</h3>
                        @php
                            $laki = $populationData->where('category', 'Laki-laki')->first();
                            $perempuan = $populationData->where('category', 'Perempuan')->first();
                            $total = ($laki->value ?? 0) + ($perempuan->value ?? 0);
                            $lakiPercent = $total > 0 ? round((($laki->value ?? 0) / $total) * 100, 1) : 0;
                            $perempuanPercent = $total > 0 ? round((($perempuan->value ?? 0) / $total) * 100, 1) : 0;
                        @endphp

                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-sm font-medium text-gray-700">Laki-laki</span>
                                    <span class="text-sm text-gray-600">{{ number_format($laki->value ?? 0) }}
                                        ({{ $lakiPercent }}%)</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-blue-600 h-3 rounded-full" style="width: {{ $lakiPercent }}%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-sm font-medium text-gray-700">Perempuan</span>
                                    <span class="text-sm text-gray-600">{{ number_format($perempuan->value ?? 0) }}
                                        ({{ $perempuanPercent }}%)</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-pink-500 h-3 rounded-full" style="width: {{ $perempuanPercent }}%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Age Distribution -->
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-6">Distribusi Berdasarkan Usia</h3>
                        @php
                            $usia0_17 = $populationData->where('category', 'Usia 0-17 Tahun')->first();
                            $usia18_64 = $populationData->where('category', 'Usia 18-64 Tahun')->first();
                            $usia65 = $populationData->where('category', 'Usia 65+ Tahun')->first();
                            $totalUsia = ($usia0_17->value ?? 0) + ($usia18_64->value ?? 0) + ($usia65->value ?? 0);
                        @endphp
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-sm font-medium text-gray-700">0-17 Tahun</span>
                                    <span class="text-sm text-gray-600">{{ number_format($usia0_17->value ?? 0) }}</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-green-500 h-3 rounded-full"
                                        style="width: {{ $totalUsia > 0 ? round((($usia0_17->value ?? 0) / $totalUsia) * 100, 1) : 0 }}%">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-sm font-medium text-gray-700">18-64 Tahun (Produktif)</span>
                                    <span class="text-sm text-gray-600">{{ number_format($usia18_64->value ?? 0) }}</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-orange-500 h-3 rounded-full"
                                        style="width: {{ $totalUsia > 0 ? round((($usia18_64->value ?? 0) / $totalUsia) * 100, 1) : 0 }}%">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-sm font-medium text-gray-700">65+ Tahun</span>
                                    <span class="text-sm text-gray-600">{{ number_format($usia65->value ?? 0) }}</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-purple-500 h-3 rounded-full"
                                        style="width: {{ $totalUsia > 0 ? round((($usia65->value ?? 0) / $totalUsia) * 100, 1) : 0 }}%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Info -->
                <div class="mt-12 bg-blue-50 rounded-lg p-8">
                    <div class="text-center">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Informasi Tambahan</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <div class="text-2xl font-bold text-blue-600 mb-2">15.5</div>
                                <div class="text-sm text-gray-700">Km² Luas Wilayah</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-blue-600 mb-2">
                                    {{ $totalPopulation ? round($totalPopulation->value / 15.5) : 0 }}
                                </div>
                                <div class="text-sm text-gray-700">Jiwa/Km² Kepadatan</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-blue-600 mb-2">
                                    @php
                                        $kk = $populationData->where('category', 'Kepala Keluarga')->first();
                                        echo $kk && $totalPopulation
                                            ? round($totalPopulation->value / $kk->value, 1)
                                            : 0;
                                    @endphp
                                </div>
                                <div class="text-sm text-gray-700">Rata-rata Jiwa/KK</div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="text-center py-16">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                        </path>
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Data belum tersedia</h3>
                    <p class="text-gray-600">Data penduduk akan segera diperbarui.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
