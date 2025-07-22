@extends('layouts.admin')

@section('title', 'Kelola UMKM - Admin Nagari Silungkang Oso')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="mb-8 flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Kelola UMKM</h1>
                    <p class="text-gray-600 mt-2">Kelola data UMKM di nagari</p>
                </div>
                <a href="{{ route('admin.umkm.create') }}" class="btn-primary">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Tambah UMKM
                </a>
            </div>

            <!-- UMKM Table -->
            <div class="card">
                <div class="card-body p-0">
                    @if ($umkms->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama UMKM</th>
                                        <th>Pemilik</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Dibuat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($umkms as $umkm)
                                        <tr>
                                            <td>
                                                <div class="flex items-center">
                                                    @if ($umkm->image)
                                                        <img src="{{ Storage::url($umkm->image) }}"
                                                            alt="{{ $umkm->name }}"
                                                            class="w-12 h-12 rounded-lg object-cover mr-3">
                                                    @else
                                                        <div
                                                            class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mr-3">
                                                            <svg class="w-6 h-6 text-yellow-600" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    @endif
                                                    <div>
                                                        <div class="font-medium text-gray-900">{{ $umkm->name }}</div>
                                                        <div class="text-sm text-gray-500 line-clamp-1">
                                                            {{ Str::limit($umkm->description, 50) }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-sm">
                                                    <div class="font-medium text-gray-900">{{ $umkm->owner }}</div>
                                                    @if ($umkm->phone)
                                                        <div class="text-gray-500">{{ $umkm->phone }}</div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-gray">{{ $umkm->category }}</span>
                                            </td>
                                            <td>
                                                @if ($umkm->is_featured)
                                                    <span class="badge badge-warning">⭐ Unggulan</span>
                                                @else
                                                    <span class="badge badge-gray">Biasa</span>
                                                @endif
                                            </td>
                                            <td class="text-sm text-gray-500">
                                                {{ $umkm->created_at->format('d M Y') }}
                                            </td>
                                            <td>
                                                <div class="flex space-x-2">
                                                    <a href="{{ route('umkm.show', $umkm) }}" target="_blank"
                                                        class="text-blue-600 hover:text-blue-700" title="Lihat">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                            </path>
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <a href="{{ route('admin.umkm.edit', $umkm) }}"
                                                        class="text-yellow-600 hover:text-yellow-700" title="Edit">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <form action="{{ route('admin.umkm.destroy', $umkm) }}" method="POST"
                                                        class="inline"
                                                        onsubmit="return confirm('Yakin ingin menghapus UMKM ini?')">
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
                            {{ $umkms->links() }}
                        </div>
                    @else
                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada UMKM</h3>
                            <p class="text-gray-600 mb-4">Mulai dengan menambahkan UMKM pertama.</p>
                            <a href="{{ route('admin.umkm.create') }}" class="btn-primary">
                                Tambah UMKM
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
