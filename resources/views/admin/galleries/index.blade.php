@extends('layouts.admin')

@section('title', 'Kelola Galeri - Admin Nagari Silungkang Oso')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="mb-8 flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Kelola Galeri</h1>
                    <p class="text-gray-600 mt-2">Kelola foto dan dokumentasi nagari</p>
                </div>
                <a href="{{ route('admin.galleries.create') }}" class="btn-primary">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Tambah Foto
                </a>
            </div>

            <!-- Gallery Grid -->
            <div class="card">
                <div class="card-body p-0">
                    @if ($galleries->count() > 0)
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 p-6">
                            @foreach ($galleries as $gallery)
                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                    <div class="relative aspect-square">
                                        <img src="{{ Storage::url($gallery->image) }}" alt="{{ $gallery->title }}"
                                            class="w-full h-full object-cover">
                                        <div class="absolute top-2 right-2">
                                            <span
                                                class="bg-primary-600 text-white px-2 py-1 rounded-full text-xs">{{ $gallery->category }}</span>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <h3 class="font-semibold text-gray-900 mb-2 line-clamp-2">{{ $gallery->title }}</h3>
                                        @if ($gallery->description)
                                            <p class="text-sm text-gray-600 line-clamp-2 mb-3">{{ $gallery->description }}
                                            </p>
                                        @endif
                                        <div class="flex justify-end space-x-2">
                                            <a href="{{ route('admin.galleries.edit', $gallery) }}"
                                                class="text-yellow-600 hover:text-yellow-700">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <form action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST"
                                                class="inline" onsubmit="return confirm('Yakin ingin menghapus foto ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-700">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="px-6 py-4 border-t border-gray-200">
                            {{ $galleries->links() }}
                        </div>
                    @else
                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada foto</h3>
                            <p class="text-gray-600 mb-4">Mulai dengan menambahkan foto pertama.</p>
                            <a href="{{ route('admin.galleries.create') }}" class="btn-primary">
                                Tambah Foto
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
