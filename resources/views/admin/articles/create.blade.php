@extends('layouts.admin')

@section('title', 'Tambah Artikel - Admin Desa Silungkang Oso')

@section('content')
<div class="min-h-screen bg-gray-100">
    <div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex items-center space-x-2 text-sm text-gray-600 mb-2">
                <a href="{{ route('admin.articles.index') }}" class="hover:text-primary-600">Artikel</a>
                <span>/</span>
                <span>Tambah Artikel</span>
            </div>
            <h1 class="text-3xl font-bold text-gray-900">Tambah Artikel</h1>
        </div>

        <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Title -->
                    <div class="card">
                        <div class="card-body">
                            <label for="title" class="form-label">Judul Artikel <span class="text-red-500">*</span></label>
                            <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-input w-full" required>
                            @error('title')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Excerpt -->
                    <div class="card">
                        <div class="card-body">
                            <label for="excerpt" class="form-label">Ringkasan <span class="text-red-500">*</span></label>
                            <textarea id="excerpt" name="excerpt" rows="3" class="form-textarea w-full" placeholder="Tulis ringkasan artikel..." required>{{ old('excerpt') }}</textarea>
                            @error('excerpt')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="card">
                        <div class="card-body">
                            <label for="content" class="form-label">Konten Artikel <span class="text-red-500">*</span></label>
                            <textarea id="content" name="content" rows="15" class="form-textarea w-full" placeholder="Tulis konten artikel..." required>{{ old('content') }}</textarea>
                            @error('content')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Publish -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="font-semibold text-gray-900">Publikasi</h3>
                        </div>
                        <div class="card-body">
                            <div class="flex items-center">
                                <input type="checkbox" id="is_published" name="is_published" value="1" class="rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-500 focus:ring-primary-500" {{ old('is_published') ? 'checked' : '' }}>
                                <label for="is_published" class="ml-2 text-sm text-gray-700">Publikasikan sekarang</label>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="flex justify-between space-x-3">
                                <a href="{{ route('admin.articles.index') }}" class="btn-secondary">
                                    Batal
                                </a>
                                <button type="submit" class="btn-primary">
                                    Simpan Artikel
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Featured Image -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="font-semibold text-gray-900">Gambar Utama</h3>
                        </div>
                        <div class="card-body">
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md hover:border-primary-400 transition-colors">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="featured_image" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                            <span>Upload gambar</span>
                                            <input id="featured_image" name="featured_image" type="file" class="sr-only" accept="image/*">
                                        </label>
                                        <p class="pl-1">atau drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 2MB</p>
                                </div>
                            </div>
                            @error('featured_image')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
