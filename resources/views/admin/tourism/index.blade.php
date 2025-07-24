@extends('layouts.admin')

@section('title', 'Kelola Wisata - Admin Desa Silungkang Oso')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="mb-8 flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Kelola Wisata</h1>
                    <p class="text-gray-600 mt-2">Kelola destinasi wisata di desa</p>
                </div>
                <a href="{{ route('admin.tourism.create') }}" class="btn-primary">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Tambah Wisata
                </a>
            </div>

            <!-- Tourism Table -->
            <div class="card">
                <div class="card-body p-0">
                    @if ($tourisms->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama Destinasi</th>
                                        <th>Kategori</th>
                                        <th>Lokasi</th>
                                        <th>Status</th>
                                        <th>Koordinat</th>
                                        <th>Dibuat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tourisms as $tourism)
                                        <tr>
                                            <!-- Nama Destinasi -->
                                            <td>
                                                <div class="flex items-center">
                                                    @if ($tourism->image)
                                                        <img src="{{ Storage::url($tourism->image) }}"
                                                            alt="{{ $tourism->name }}"
                                                            class="w-12 h-12 rounded-lg object-cover mr-3">
                                                    @else
                                                        <div
                                                            class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                                            <svg class="w-6 h-6 text-green-600" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                                </path>
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    @endif
                                                    <div>
                                                        <div class="font-medium text-gray-900">{{ $tourism->name }}</div>
                                                        <div class="text-sm text-gray-500">
                                                            {{ Str::limit($tourism->description, 50) }}</div>
                                                    </div>
                                                </div>
                                            </td>

                                            <!-- Kategori -->
                                            <td>
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                    {{ $tourism->category }}
                                                </span>
                                            </td>

                                            <!-- Lokasi -->
                                            <td>
                                                <div class="text-sm text-gray-900">{{ $tourism->location }}</div>
                                            </td>

                                            <!-- Status -->
                                            <td>
                                                @if ($tourism->is_featured)
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                            </path>
                                                        </svg>
                                                        Unggulan
                                                    </span>
                                                @else
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                                        Biasa
                                                    </span>
                                                @endif
                                            </td>

                                            <!-- Koordinat -->
                                            <td>
                                                @if ($tourism->latitude && $tourism->longitude)
                                                    <div class="text-xs text-gray-600">
                                                        <div>{{ number_format($tourism->latitude, 6) }}</div>
                                                        <div>{{ number_format($tourism->longitude, 6) }}</div>
                                                    </div>
                                                @else
                                                    <span class="text-xs text-gray-400">Tidak ada</span>
                                                @endif
                                            </td>

                                            <!-- Dibuat -->
                                            <td>
                                                <div class="text-sm text-gray-600">
                                                    {{ $tourism->created_at->format('d M Y') }}
                                                </div>
                                                <div class="text-xs text-gray-400">
                                                    {{ $tourism->created_at->format('H:i') }}
                                                </div>
                                            </td>

                                            <!-- Aksi -->
                                            <td>
                                                <div class="flex items-center space-x-2">
                                                    <a href="{{ route('admin.tourism.edit', $tourism) }}"
                                                        class="text-yellow-600 hover:text-yellow-700" title="Edit">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <form action="{{ route('admin.tourism.destroy', $tourism) }}"
                                                        method="POST" class="inline"
                                                        onsubmit="return confirm('Yakin ingin menghapus destinasi wisata ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-600 hover:text-red-700"
                                                            title="Hapus">
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
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="px-6 py-4 border-t border-gray-200">
                            {{ $tourisms->links() }}
                        </div>
                    @else
                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada destinasi wisata</h3>
                            <p class="text-gray-600 mb-4">Mulai dengan menambahkan destinasi wisata pertama.</p>
                            <a href="{{ route('admin.tourism.create') }}" class="btn-primary">
                                Tambah Wisata
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
