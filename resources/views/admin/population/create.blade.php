@extends('layouts.admin')

@section('title', 'Tambah Data Penduduk - Admin Desa Silungkang Oso')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="mb-8">
                <div class="flex items-center space-x-2 text-sm text-gray-600 mb-2">
                    <a href="{{ route('admin.population.index') }}" class="hover:text-primary-600">Data Penduduk</a>
                    <span>/</span>
                    <span>Tambah Data</span>
                </div>
                <h1 class="text-3xl font-bold text-gray-900">Tambah Data Penduduk</h1>
            </div>

            <form action="{{ route('admin.population.store') }}" method="POST">
                @csrf

                <div class="card">
                    <div class="card-body space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Category -->
                            <div>
                                <label for="category" class="form-label">Kategori <span
                                        class="text-red-500">*</span></label>
                                <input type="text" id="category" name="category" value="{{ old('category') }}"
                                    class="form-input w-full" placeholder="Contoh: Total Penduduk" required>
                                @error('category')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Value -->
                            <div>
                                <label for="value" class="form-label">Jumlah <span class="text-red-500">*</span></label>
                                <input type="number" id="value" name="value" value="{{ old('value') }}"
                                    class="form-input w-full" min="0" required>
                                @error('value')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Unit -->
                            <div>
                                <label for="unit" class="form-label">Satuan <span class="text-red-500">*</span></label>
                                <select id="unit" name="unit" class="form-select w-full" required>
                                    <option value="">Pilih Satuan</option>
                                    <option value="Jiwa" {{ old('unit') == 'Jiwa' ? 'selected' : '' }}>Jiwa</option>
                                    <option value="KK" {{ old('unit') == 'KK' ? 'selected' : '' }}>KK (Kepala Keluarga)
                                    </option>
                                    <option value="Orang" {{ old('unit') == 'Orang' ? 'selected' : '' }}>Orang</option>
                                    <option value="Unit" {{ old('unit') == 'Unit' ? 'selected' : '' }}>Unit</option>
                                    <option value="Persen" {{ old('unit') == 'Persen' ? 'selected' : '' }}>Persen (%)
                                    </option>
                                </select>
                                @error('unit')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Year -->
                            <div>
                                <label for="year" class="form-label">Tahun <span class="text-red-500">*</span></label>
                                <input type="number" id="year" name="year" value="{{ old('year', date('Y')) }}"
                                    class="form-input w-full" min="2000" max="{{ date('Y') + 1 }}" required>
                                @error('year')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Description -->
                        <div>
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea id="description" name="description" rows="3" class="form-textarea w-full"
                                placeholder="Keterangan tambahan tentang data ini...">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="flex justify-between space-x-3">
                            <a href="{{ route('admin.population.index') }}" class="btn-secondary">
                                Batal
                            </a>
                            <button type="submit" class="btn-primary">
                                Simpan Data
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
