@extends('layouts.app')

@section('title', 'Berita & Artikel - Desa Silungkang Oso')
@section('description', 'Kumpulan berita dan artikel terbaru dari Desa Silungkang Oso')

@section('content')
    <!-- Hero Section -->
    <section class="bg-blue-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Berita & Artikel</h1>
                <p class="text-xl text-blue-100">Informasi terbaru dari Desa Silungkang Oso</p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Search Bar -->
            <div class="mb-8">
                <form method="GET" action="{{ route('articles.index') }}" class="max-w-md mx-auto">
                    <div class="relative">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari artikel..."
                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <button type="submit" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Articles Grid -->
            @if ($articles->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
                    @foreach ($articles as $article)
                        <article
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="relative">
                                @if ($article->featured_image)
                                    <img src="{{ Storage::url($article->featured_image) }}" alt="{{ $article->title }}"
                                        class="w-full h-48 object-cover">
                                @else
                                    <div
                                        class="w-full h-48 bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center">
                                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H14">
                                            </path>
                                        </svg>
                                    </div>
                                @endif
                            </div>
                            <div class="p-6">
                                <h3 class="font-bold text-gray-900 mb-2 line-clamp-2">
                                    <a href="{{ route('articles.show', $article->slug) }}"
                                        class="hover:text-blue-600 transition-colors duration-300">
                                        {{ $article->title }}
                                    </a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-3 line-clamp-3">{{ $article->excerpt }}</p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>{{ $article->published_at->format('d M Y') }}</span>
                                    <a href="{{ route('articles.show', $article->slug) }}"
                                        class="text-blue-600 hover:text-blue-700 font-medium">
                                        Baca Selengkapnya →
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="flex justify-center">
                    {{ $articles->links() }}
                </div>
            @else
                <div class="text-center py-16">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Tidak ada artikel</h3>
                    <p class="text-gray-600">Belum ada artikel yang dipublikasikan.</p>
                </div>
            @endif
        </div>
    </section>

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
@endsection
