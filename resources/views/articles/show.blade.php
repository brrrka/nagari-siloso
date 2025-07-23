@extends('layouts.app')

@section('title', $article->title . ' - Desa Silungkang Oso')
@section('description', $article->excerpt)

@section('content')
    <!-- Breadcrumb -->
    <section class="bg-gray-100 py-4">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-2 text-sm text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-primary-600">Beranda</a>
                <span>/</span>
                <a href="{{ route('articles.index') }}" class="hover:text-primary-600">Berita</a>
                <span>/</span>
                <span class="text-gray-900">{{ Str::limit($article->title, 50) }}</span>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <article class="py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Article Header -->
            <header class="mb-8">
                <h1 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4 leading-tight">{{ $article->title }}</h1>

                <div class="flex items-center text-sm text-gray-600 mb-6">
                    <time datetime="{{ $article->published_at->format('Y-m-d') }}">
                        {{ $article->published_at->format('d F Y') }}
                    </time>
                    <span class="mx-2">•</span>
                    <span>{{ $article->published_at->format('H:i') }} WIB</span>
                </div>

                @if ($article->featured_image)
                    <div class="mb-8">
                        <img src="{{ Storage::url($article->featured_image) }}" alt="{{ $article->title }}"
                            class="w-full h-64 lg:h-96 object-cover rounded-lg shadow-lg">
                    </div>
                @endif

                <div class="text-lg text-gray-700 leading-relaxed mb-8 font-medium">
                    {{ $article->excerpt }}
                </div>
            </header>

            <!-- Article Body -->
            <div class="prose prose-lg max-w-none">
                {!! nl2br(e($article->content)) !!}
            </div>

            <!-- Share Buttons -->
            <div class="mt-12 pt-8 border-t border-gray-200">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Bagikan Artikel</h3>
                        <div class="flex space-x-3">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                target="_blank"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                                Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($article->title) }}"
                                target="_blank"
                                class="bg-black hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                                Twitter
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($article->title . ' - ' . request()->fullUrl()) }}"
                                target="_blank"
                                class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                                WhatsApp
                            </a>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('articles.index') }}"
                            class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Kembali ke Berita
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Related Articles -->
    @if ($relatedArticles->count() > 0)
        <section class="py-12 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Berita Terkait</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ($relatedArticles as $related)
                        <article
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="relative">
                                @if ($related->featured_image)
                                    <img src="{{ Storage::url($related->featured_image) }}" alt="{{ $related->title }}"
                                        class="w-full h-40 object-cover">
                                @else
                                    <div
                                        class="w-full h-40 bg-gradient-to-r from-primary-500 to-primary-600 flex items-center justify-center">
                                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H14">
                                            </path>
                                        </svg>
                                    </div>
                                @endif
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-900 mb-2 line-clamp-2">
                                    <a href="{{ route('articles.show', $related->slug) }}"
                                        class="hover:text-primary-600 transition-colors duration-300">
                                        {{ $related->title }}
                                    </a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-3 line-clamp-2">{{ $related->excerpt }}</p>
                                <div class="text-xs text-gray-500">
                                    {{ $related->published_at->format('d M Y') }}
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @push('head')
        <style>
            .line-clamp-2 {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
        </style>
    @endpush
@endsection
