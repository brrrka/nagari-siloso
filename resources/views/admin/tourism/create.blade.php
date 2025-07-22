@extends('layouts.admin')

@section('title', 'Tambah Wisata - Admin Nagari Silungkang Oso')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="mb-8">
                <div class="flex items-center space-x-2 text-sm text-gray-600 mb-2">
                    <a href="{{ route('admin.tourism.index') }}" class="hover:text-primary-600">Wisata</a>
                    <span>/</span>
                    <span>Tambah Wisata</span>
                </div>
                <h1 class="text-3xl font-bold text-gray-900">Tambah Destinasi Wisata</h1>
            </div>

            <form action="{{ route('admin.tourism.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Main Content -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- Basic Info -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="font-semibold text-gray-900">Informasi Dasar</h3>
                            </div>
                            <div class="card-body space-y-4">
                                <div>
                                    <label for="name" class="form-label">Nama Destinasi <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                                        class="form-input w-full" required>
                                    @error('name')
                                        <p class="form-error">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="category" class="form-label">Kategori <span
                                                class="text-red-500">*</span></label>
                                        <select id="category" name="category" class="form-select w-full" required>
                                            <option value="">Pilih Kategori</option>
                                            <option value="Alam" {{ old('category') == 'Alam' ? 'selected' : '' }}>Alam
                                            </option>
                                            <option value="Budaya" {{ old('category') == 'Budaya' ? 'selected' : '' }}>
                                                Budaya</option>
                                            <option value="Sejarah" {{ old('category') == 'Sejarah' ? 'selected' : '' }}>
                                                Sejarah</option>
                                            <option value="Religi" {{ old('category') == 'Religi' ? 'selected' : '' }}>
                                                Religi</option>
                                            <option value="Kuliner" {{ old('category') == 'Kuliner' ? 'selected' : '' }}>
                                                Kuliner</option>
                                            <option value="Petualangan"
                                                {{ old('category') == 'Petualangan' ? 'selected' : '' }}>Petualangan
                                            </option>
                                        </select>
                                        @error('category')
                                            <p class="form-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="location" class="form-label">Lokasi <span
                                                class="text-red-500">*</span></label>
                                        <input type="text" id="location" name="location" value="{{ old('location') }}"
                                            class="form-input w-full" required placeholder="Contoh: Jorong Koto Baru">
                                        @error('location')
                                            <p class="form-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <label for="description" class="form-label">Deskripsi <span
                                            class="text-red-500">*</span></label>
                                    <textarea id="description" name="description" rows="5" class="form-textarea w-full" required>{{ old('description') }}</textarea>
                                    @error('description')
                                        <p class="form-error">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Location Coordinates -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="font-semibold text-gray-900">Koordinat Lokasi</h3>
                                <p class="text-sm text-gray-600">Opsional - untuk menampilkan lokasi di peta</p>
                            </div>
                            <div class="card-body">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="latitude" class="form-label">Latitude</label>
                                        <input type="number" step="any" id="latitude" name="latitude"
                                            value="{{ old('latitude') }}" class="form-input w-full"
                                            placeholder="Contoh: -0.9471">
                                        @error('latitude')
                                            <p class="form-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="longitude" class="form-label">Longitude</label>
                                        <input type="number" step="any" id="longitude" name="longitude"
                                            value="{{ old('longitude') }}" class="form-input w-full"
                                            placeholder="Contoh: 100.6188">
                                        @error('longitude')
                                            <p class="form-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="text-xs text-gray-600">
                                        <strong>Tips:</strong> Buka Google Maps, klik kanan pada lokasi yang diinginkan,
                                        lalu salin koordinat yang muncul.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="space-y-6">
                        <!-- Status -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="font-semibold text-gray-900">Status</h3>
                            </div>
                            <div class="card-body">
                                <div class="flex items-center">
                                    <input type="checkbox" id="is_featured" name="is_featured" value="1"
                                        class="rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-500 focus:ring-primary-500"
                                        {{ old('is_featured') ? 'checked' : '' }}>
                                    <label for="is_featured" class="ml-2 text-sm text-gray-700">Destinasi Unggulan</label>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">Destinasi unggulan akan ditampilkan di halaman utama
                                </p>
                            </div>
                        </div>

                        <!-- Image Upload -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="font-semibold text-gray-900">Foto Destinasi</h3>
                            </div>
                            <div class="card-body">
                                <div
                                    class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md hover:border-primary-400 transition-colors">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="image"
                                                class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500">
                                                <span>Upload foto</span>
                                                <input id="image" name="image" type="file" class="sr-only"
                                                    accept="image/*">
                                            </label>
                                            <p class="pl-1">atau drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 2MB</p>
                                    </div>
                                </div>
                                @error('image')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <div class="flex justify-between space-x-3">
                                    <a href="{{ route('admin.tourism.index') }}" class="btn-secondary">
                                        Batal
                                    </a>
                                    <button type="submit" class="btn-primary">
                                        Simpan Destinasi
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
