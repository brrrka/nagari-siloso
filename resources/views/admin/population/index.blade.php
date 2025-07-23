@extends('layouts.admin')

@section('title', 'Kelola Data Penduduk - Admin Desa Silungkang Oso')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="mb-8 flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Data Penduduk</h1>
                    <p class="text-gray-600 mt-2">Kelola data kependudukan desa</p>
                </div>
                <a href="{{ route('admin.population.create') }}" class="btn-primary">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Tambah Data
                </a>
            </div>

            <!-- Population Data Table -->
            <div class="card">
                <div class="card-body p-0">
                    @if ($populationData->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Kategori</th>
                                        <th>Jumlah</th>
                                        <th>Satuan</th>
                                        <th>Tahun</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($populationData as $data)
                                        <tr>
                                            <td>
                                                <div class="font-medium text-gray-900">{{ $data->category }}</div>
                                            </td>
                                            <td>
                                                <div class="text-2xl font-bold text-primary-600">
                                                    {{ number_format($data->value) }}</div>
                                            </td>
                                            <td>
                                                <span class="badge badge-gray">{{ $data->unit }}</span>
                                            </td>
                                            <td class="text-sm text-gray-500">
                                                {{ $data->year }}
                                            </td>
                                            <td class="text-sm text-gray-500 max-w-xs">
                                                {{ $data->description ? Str::limit($data->description, 50) : '-' }}
                                            </td>
                                            <td>
                                                <div class="flex space-x-2">
                                                    <a href="{{ route('admin.population.edit', $data) }}"
                                                        class="text-yellow-600 hover:text-yellow-700">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <form action="{{ route('admin.population.destroy', $data) }}"
                                                        method="POST" class="inline"
                                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="px-6 py-4 border-t border-gray-200">
                            {{ $populationData->links() }}
                        </div>
                    @else
                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada data penduduk</h3>
                            <p class="text-gray-600 mb-4">Mulai dengan menambahkan data penduduk.</p>
                            <a href="{{ route('admin.population.create') }}" class="btn-primary">
                                Tambah Data
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
