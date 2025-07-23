@extends('layouts.admin')

@section('title', 'Edit Foto - Admin Desa Silungkang Oso')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="mb-8">
                <div class="flex items-center space-x-2 text-sm text-gray-600 mb-2">
                    <a href="{{ route('admin.galleries.index') }}" class="hover:text-primary-600">Galeri</a>
                    <span>/</span>
                    <span>Edit Foto</span>
                </div>
                <h1 class="text-3xl font-bold text-gray-900">Edit Foto Galeri</h1>
            </div>

            <form action="{{ route('admin.galleries.update', $gallery) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Main Content -->
                    <div class="lg:col-span-2">
                        <div class="card">
                            <div class="card-body space-y-6">
                                <!-- Title -->
                                <div>
                                    <label for="title" class="form-label">Judul Foto <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" id="title" name="title"
                                        value="{{ old('title', $gallery->title) }}" class="form-input w-full" required>
                                    @error('title')
                                        <p class="form-error">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Description -->
                                <div>
                                    <label for="description" class="form-label">Deskripsi</label>
                                    <textarea id="description" name="description" rows="4" class="form-textarea w-full"
                                        placeholder="Tulis deskripsi foto...">{{ old('description', $gallery->description) }}</textarea>
                                    @error('description')
                                        <p class="form-error">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Category -->
                                <div>
                                    <label for="category" class="form-label">Kategori <span
                                            class="text-red-500">*</span></label>
                                    <select id="category" name="category" class="form-select w-full" required>
                                        <option value="">Pilih Kategori</option>
                                        <option value="Kegiatan"
                                            {{ old('category', $gallery->category) == 'Kegiatan' ? 'selected' : '' }}>
                                            Kegiatan</option>
                                        <option value="Budaya"
                                            {{ old('category', $gallery->category) == 'Budaya' ? 'selected' : '' }}>Budaya
                                        </option>
                                        <option value="Alam"
                                            {{ old('category', $gallery->category) == 'Alam' ? 'selected' : '' }}>Alam
                                        </option>
                                        <option value="Infrastruktur"
                                            {{ old('category', $gallery->category) == 'Infrastruktur' ? 'selected' : '' }}>
                                            Infrastruktur</option>
                                        <option value="Umum"
                                            {{ old('category', $gallery->category) == 'Umum' ? 'selected' : '' }}>Umum
                                        </option>
                                    </select>
                                    @error('category')
                                        <p class="form-error">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div>
                        <!-- Current Image -->
                        <div class="card mb-6">
                            <div class="card-header">
                                <h3 class="font-semibold text-gray-900">Foto Saat Ini</h3>
                            </div>
                            <div class="card-body">
                                @if ($gallery->image)
                                    <img src="{{ Storage::url($gallery->image) }}" alt="{{ $gallery->title }}"
                                        class="w-full h-48 object-cover rounded-lg mb-4">
                                @else
                                    <div class="w-full h-48 bg-gray-200 rounded-lg flex items-center justify-center mb-4">
                                        <span class="text-gray-500">Tidak ada foto</span>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Image Upload -->
                        <div class="card mb-6">
                            <div class="card-header">
                                <h3 class="font-semibold text-gray-900">Ganti Foto</h3>
                                <p class="text-sm text-gray-600">Kosongkan jika tidak ingin mengganti foto</p>
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
                                                class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
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
                                    <a href="{{ route('admin.galleries.index') }}" class="btn-secondary">
                                        Batal
                                    </a>
                                    <button type="submit" class="btn-primary">
                                        Update Foto
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
