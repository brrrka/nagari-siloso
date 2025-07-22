<!-- resources/views/gallery/index.blade.php -->
@extends('layouts.app')

@section('title', 'Galeri - Nagari Silungkang Oso')
@section('description', 'Galeri foto kegiatan dan dokumentasi Nagari Silungkang Oso, Kecamatan Silungkang, Kota
    Sawahlunto.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-purple-600 to-pink-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Galeri Nagari Silungkang Oso</h1>
                <p class="text-xl text-purple-100">Dokumentasi kegiatan dan keindahan nagari kami</p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Filter Categories -->
            @if ($categories->count() > 0)
                <div class="flex flex-wrap justify-center gap-3 mb-12">
                    <a href="{{ route('gallery.index') }}"
                        class="px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200 {{ !request('category') ? 'bg-primary-600 text-white' : 'bg-white text-gray-700 hover:bg-primary-50' }}">
                        Semua
                    </a>
                    @foreach ($categories as $category)
                        <a href="{{ route('gallery.index', ['category' => $category]) }}"
                            class="px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200 {{ request('category') == $category ? 'bg-primary-600 text-white' : 'bg-white text-gray-700 hover:bg-primary-50' }}">
                            {{ $category }}
                        </a>
                    @endforeach
                </div>
            @endif

            <!-- Gallery Grid -->
            @if ($galleries->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                    @foreach ($galleries as $gallery)
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 group">
                            <div class="relative aspect-square overflow-hidden">
                                <img src="{{ Storage::url($gallery->image) }}" alt="{{ $gallery->title }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 cursor-pointer"
                                    onclick="openModal('{{ Storage::url($gallery->image) }}', '{{ addslashes($gallery->title) }}', '{{ addslashes($gallery->description) }}')">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 cursor-pointer flex items-center justify-center">
                                    <svg class="w-12 h-12 text-white opacity-0 group-hover:opacity-100 transition-all duration-300"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="absolute top-3 right-3">
                                    <span class="bg-primary-600 text-white px-2 py-1 rounded-full text-xs font-medium">
                                        {{ $gallery->category }}
                                    </span>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-900 mb-2 line-clamp-2">{{ $gallery->title }}</h3>
                                @if ($gallery->description)
                                    <p class="text-sm text-gray-600 line-clamp-3">{{ $gallery->description }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="flex justify-center">
                    {{ $galleries->withQueryString()->links() }}
                </div>
            @else
                <div class="text-center py-16">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum ada foto</h3>
                    <p class="text-gray-600">Galeri masih kosong. Foto akan ditambahkan segera.</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden items-center justify-center p-4">
        <div class="relative max-w-4xl max-h-full">
            <button onclick="closeModal()" class="absolute -top-10 right-0 text-white hover:text-gray-300">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <img id="modalImage" src="" alt="" class="max-w-full max-h-96 object-contain rounded-lg">
            <div class="bg-white p-4 rounded-b-lg">
                <h3 id="modalTitle" class="font-bold text-gray-900 mb-2"></h3>
                <p id="modalDescription" class="text-gray-600 text-sm"></p>
            </div>
        </div>
    </div>

    @push('head')
        <style>
            .line-clamp-2 {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }

            .line-clamp-3 {
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            function openModal(imageSrc, title, description) {
                document.getElementById('modalImage').src = imageSrc;
                document.getElementById('modalTitle').textContent = title;
                document.getElementById('modalDescription').textContent = description || '';
                document.getElementById('imageModal').classList.remove('hidden');
                document.getElementById('imageModal').classList.add('flex');
                document.body.style.overflow = 'hidden';
            }

            function closeModal() {
                document.getElementById('imageModal').classList.add('hidden');
                document.getElementById('imageModal').classList.remove('flex');
                document.body.style.overflow = 'auto';
            }

            // Close modal when clicking outside
            document.getElementById('imageModal').addEventListener('click', function(e) {
                if (e.target === this) {
                    closeModal();
                }
            });

            // Close modal with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeModal();
                }
            });
        </script>
    @endpush
@endsection
