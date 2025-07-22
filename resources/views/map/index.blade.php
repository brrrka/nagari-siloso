<!-- resources/views/map/index.blade.php -->
@extends('layouts.app')

@section('title', 'Peta Nagari - Nagari Silungkang Oso')
@section('description', 'Peta interaktif Nagari Silungkang Oso dan lokasi-lokasi penting di sekitarnya.')

@push('head')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        #map {
            height: 600px;
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .map-info-card {
            background: white;
            border-radius: 8px;
            padding: 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="bg-green-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Peta Nagari Silungkang Oso</h1>
                <p class="text-xl text-green-100">Eksplorasi lokasi dan tempat penting di nagari kami</p>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Map -->
                <div class="lg:col-span-3">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Peta Interaktif</h2>
                        <div id="map"></div>
                    </div>
                </div>

                <!-- Sidebar Info -->
                <div class="lg:col-span-1 space-y-6">
                    <!-- Legend -->
                    <div class="map-info-card">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Legenda</h3>
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <div class="w-4 h-4 bg-red-500 rounded-full"></div>
                                <span class="text-sm text-gray-700">Kantor Nagari</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-4 h-4 bg-blue-500 rounded-full"></div>
                                <span class="text-sm text-gray-700">Tempat Wisata</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-4 h-4 bg-green-500 rounded-full"></div>
                                <span class="text-sm text-gray-700">Sekolah</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-4 h-4 bg-yellow-500 rounded-full"></div>
                                <span class="text-sm text-gray-700">Kesehatan</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-4 h-4 bg-purple-500 rounded-full"></div>
                                <span class="text-sm text-gray-700">UMKM</span>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Info -->
                    <div class="map-info-card">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Informasi Lokasi</h3>
                        <div class="space-y-3 text-sm">
                            <div>
                                <span class="font-semibold text-gray-700">Koordinat Pusat:</span>
                                <p class="text-gray-600">-0.6742, 100.7831</p>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-700">Luas Wilayah:</span>
                                <p class="text-gray-600">15,5 km²</p>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-700">Ketinggian:</span>
                                <p class="text-gray-600">450-650 mdpl</p>
                            </div>
                        </div>
                    </div>

                    @if ($tourismLocations->count() > 0)
                        <!-- Tourism Locations -->
                        <div class="map-info-card">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Lokasi Wisata</h3>
                            <div class="space-y-3">
                                @foreach ($tourismLocations->take(5) as $location)
                                    <div class="flex items-start space-x-3">
                                        <div class="w-3 h-3 bg-blue-500 rounded-full mt-1"></div>
                                        <div>
                                            <h4 class="text-sm font-semibold text-gray-900">{{ $location->name }}</h4>
                                            <p class="text-xs text-gray-600">{{ $location->location }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Info Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-gray-900">Akses ke Nagari Silungkang Oso</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-blue-100 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3a1 1 0 011-1h6a1 1 0 011 1v4m-8 0a1 1 0 00-1 1v6a1 1 0 001 1h8a1 1 0 001-1V8a1 1 0 00-1-1H8z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Dari Padang</h3>
                    <p class="text-gray-600 text-sm">Jarak ± 95 km (2 jam perjalanan) via Jalan Raya Padang-Sawahlunto</p>
                </div>

                <div class="text-center">
                    <div class="bg-green-100 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Dari Sawahlunto</h3>
                    <p class="text-gray-600 text-sm">Jarak ± 8 km (15 menit perjalanan) via Jalan Silungkang</p>
                </div>

                <div class="text-center">
                    <div class="bg-yellow-100 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Transportasi Umum</h3>
                    <p class="text-gray-600 text-sm">Tersedia angkutan umum dan ojek online menuju lokasi</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize map centered on Silungkang Oso
            const map = L.map('map').setView([-0.6742, 100.7831], 13);

            // Add OpenStreetMap tiles
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Custom icons
            const icons = {
                office: L.divIcon({
                    className: 'custom-div-icon',
                    html: '<div style="background-color: #dc2626; width: 20px; height: 20px; border-radius: 50%; border: 2px solid white; box-shadow: 0 2px 4px rgba(0,0,0,0.3);"></div>',
                    iconSize: [20, 20],
                    iconAnchor: [10, 10]
                }),
                tourism: L.divIcon({
                    className: 'custom-div-icon',
                    html: '<div style="background-color: #2563eb; width: 20px; height: 20px; border-radius: 50%; border: 2px solid white; box-shadow: 0 2px 4px rgba(0,0,0,0.3);"></div>',
                    iconSize: [20, 20],
                    iconAnchor: [10, 10]
                }),
                school: L.divIcon({
                    className: 'custom-div-icon',
                    html: '<div style="background-color: #16a34a; width: 20px; height: 20px; border-radius: 50%; border: 2px solid white; box-shadow: 0 2px 4px rgba(0,0,0,0.3);"></div>',
                    iconSize: [20, 20],
                    iconAnchor: [10, 10]
                }),
                health: L.divIcon({
                    className: 'custom-div-icon',
                    html: '<div style="background-color: #eab308; width: 20px; height: 20px; border-radius: 50%; border: 2px solid white; box-shadow: 0 2px 4px rgba(0,0,0,0.3);"></div>',
                    iconSize: [20, 20],
                    iconAnchor: [10, 10]
                }),
                umkm: L.divIcon({
                    className: 'custom-div-icon',
                    html: '<div style="background-color: #9333ea; width: 20px; height: 20px; border-radius: 50%; border: 2px solid white; box-shadow: 0 2px 4px rgba(0,0,0,0.3);"></div>',
                    iconSize: [20, 20],
                    iconAnchor: [10, 10]
                })
            };

            // Add main nagari office marker
            L.marker([-0.6742, 100.7831], {
                    icon: icons.office
                })
                .addTo(map)
                .bindPopup(
                    '<div class="p-2"><h3 class="font-bold">Kantor Wali Nagari Silungkang Oso</h3><p class="text-sm text-gray-600">Pusat pemerintahan nagari</p></div>'
                    );

            // Sample locations around Silungkang Oso
            const sampleLocations = [{
                    lat: -0.6735,
                    lng: 100.7825,
                    type: 'school',
                    name: 'SDN 01 Silungkang Oso',
                    description: 'Sekolah Dasar Negeri'
                },
                {
                    lat: -0.6755,
                    lng: 100.7840,
                    type: 'health',
                    name: 'Pustu Silungkang Oso',
                    description: 'Pusat Kesehatan Masyarakat'
                },
                {
                    lat: -0.6720,
                    lng: 100.7850,
                    type: 'umkm',
                    name: 'Kerajinan Anyaman Bambu',
                    description: 'UMKM Kerajinan Tradisional'
                },
                {
                    lat: -0.6760,
                    lng: 100.7820,
                    type: 'umkm',
                    name: 'Warung Rendang Pak Amin',
                    description: 'Kuliner Tradisional Minang'
                }
            ];

            // Add tourism locations from database
            @if ($tourismLocations->count() > 0)
                const tourismLocations = [
                    @foreach ($tourismLocations as $location)
                        {
                            lat: {{ $location->latitude ?? -0.673 }},
                            lng: {{ $location->longitude ?? 100.7845 }},
                            type: 'tourism',
                            name: '{{ addslashes($location->name) }}',
                            description: '{{ addslashes($location->location) }}'
                        },
                    @endforeach
                ];

                tourismLocations.forEach(location => {
                    L.marker([location.lat, location.lng], {
                            icon: icons[location.type]
                        })
                        .addTo(map)
                        .bindPopup(
                            `<div class="p-2"><h3 class="font-bold">${location.name}</h3><p class="text-sm text-gray-600">${location.description}</p></div>`
                            );
                });
            @endif

            // Add sample locations
            sampleLocations.forEach(location => {
                L.marker([location.lat, location.lng], {
                        icon: icons[location.type]
                    })
                    .addTo(map)
                    .bindPopup(
                        `<div class="p-2"><h3 class="font-bold">${location.name}</h3><p class="text-sm text-gray-600">${location.description}</p></div>`
                        );
            });

            // Add area boundary (approximate)
            const nagariArea = [
                [-0.6800, 100.7750],
                [-0.6800, 100.7900],
                [-0.6650, 100.7900],
                [-0.6650, 100.7750]
            ];

            L.polygon(nagariArea, {
                color: '#10b981',
                weight: 2,
                opacity: 0.8,
                fillColor: '#10b981',
                fillOpacity: 0.1
            }).addTo(map).bindPopup(
                '<div class="p-2"><h3 class="font-bold">Wilayah Nagari Silungkang Oso</h3><p class="text-sm text-gray-600">Area perkiraan batas nagari</p></div>'
                );
        });
    </script>
@endpush
