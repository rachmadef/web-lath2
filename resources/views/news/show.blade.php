@extends('layouts.app')

@section('title', 'Berita')

@section('content')
<div id="smooth-wrapper">
    <div id="smooth-content">
        <div class="page-content">
            <section class="2xl:pt-57 pt-30 2xl:pb-36.25 pb-10">
                <div class="container relative">
                    <div class="row justify-center xl:gap-17.75 gap-5 mx-auto">
                        <div class="lg:w-[80%] w-full mb-7.5">
                            <!-- Header Section -->
                            <div class="sm:pb-7.5 pb-3.75 text-center mb-10">
                                <!-- Category Badge -->
                                <div class="mb-5">
                                    <a href="{{ route('news.category', $post->category->slug) }}" class="inline-flex items-center bg-primary/10 dark:bg-primary/20 text-primary dark:text-primary-light px-5 py-2 rounded-lg text-sm font-semibold hover:bg-primary hover:text-white dark:hover:bg-primary transition-all duration-300">
                                        {{ $post->category->name }}
                                    </a>
                                </div>

                                <h1 class="2xl:text-7xl xl:text-5xl lg:text-4xxl sm:text-4xl text-3xl font-semibold headline mb-7.5 dark:text-white text-secondary leading-tight">
                                    {{ $post->title }}
                                </h1>
                                
                                <!-- Author & Date Info -->
                                <div class="flex flex-wrap items-center justify-center gap-4 sm:mb-7.5 mb-5">
                                    <div class="flex items-center text-base text-bodytext dark:text-gray-300">
                                        <svg class="w-5 h-5 mr-2 text-primary dark:text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                        {{ $post->published_at->format('d M Y') }}
                                    </div>
                                    <div class="hidden sm:block text-gray-400 dark:text-gray-500">•</div>
                                    <div class="flex items-center text-base text-bodytext dark:text-gray-300">
                                        <svg class="w-5 h-5 mr-2 text-primary dark:text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                        By {{ $post->author->name }}
                                    </div>
                                </div>
                            </div>

                            <!-- Hero Image -->
                            <div class="relative mb-10 overflow-hidden rounded-2xl shadow-xl dark:shadow-gray-900/30 group">
                                <img loading="lazy" src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" width="1600" height="960" class="w-full h-[400px] md:h-[500px] object-cover transition-transform duration-700 group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            </div>

                            <!-- Content Section -->
                            <div class="grid grid-cols-12 sm:gap-5">
                                <div class="col-span-12">
                                    <!-- Article Content -->
                                    <article class="prose prose-lg dark:prose-invert max-w-none lg:mb-15 mb-7.5">
                                        <div class="prose-headings:font-semibold prose-headings:text-secondary dark:prose-headings:text-white prose-p:text-bodytext dark:prose-p:text-gray-300 prose-p:leading-relaxed prose-img:rounded-xl prose-img:shadow-md prose-a:text-primary dark:prose-a:text-primary-light prose-a:no-underline hover:prose-a:underline prose-blockquote:border-l-4 prose-blockquote:border-primary dark:prose-blockquote:border-primary-light prose-blockquote:pl-4 prose-blockquote:italic prose-ul:marker:text-primary dark:prose-ul:marker:text-primary-light prose-ol:marker:text-primary dark:prose-ol:marker:text-primary-light">
                                            {!! $post->content !!}
                                        </div>
                                    </article>

                                    <!-- Tags Section -->
                                    <div class="mb-7.5">
                                        <div class="flex flex-wrap items-center gap-3 border-t border-gray-200 dark:border-gray-700 pt-6">
                                            <span class="text-lg font-semibold text-secondary dark:text-white flex items-center">
                                                <svg class="w-5 h-5 mr-2 text-primary dark:text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                                </svg>
                                                Tags:
                                            </span>
                                            <a href="{{ route('news.category', $post->category->slug) }}" class="inline-flex items-center bg-gray-100 dark:bg-emerald-800 hover:bg-primary hover:text-white dark:hover:bg-primary transition-all duration-300 text-bodytext dark:text-white px-4 py-2 rounded-lg text-sm font-medium">
                                                #{{ $post->category->name }}
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Share Section -->
                                    <div class="bg-gray-50 dark:bg-emerald-800/50 rounded-xl p-6 mb-7.5">
                                        <div class="flex flex-wrap items-center justify-between gap-4">
                                            <div class="flex items-center">
                                                <svg class="w-6 h-6 mr-3 text-primary dark:text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                                </svg>
                                                <span class="text-lg font-semibold text-secondary dark:text-white">Bagikan Artikel</span>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <a href="#" class="w-10 h-10 rounded-full bg-white dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-primary hover:text-white dark:hover:bg-primary transition-all duration-300 shadow-sm">
                                                    <svg class="w-5 h-5 text-primary hover:text-white trantition-all" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                                    </svg>
                                                </a>
                                                <a href="#" class="w-10 h-10 rounded-full bg-white dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-primary hover:text-white dark:hover:bg-primary transition-all duration-300 shadow-sm">
                                                    <svg class="w-5 h-5 text-primary hover:text-white trantition-all" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.213c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                                    </svg>
                                                </a>
                                                <a href="#" class="w-10 h-10 rounded-full bg-white dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-primary hover:text-white dark:hover:bg-primary transition-all duration-300 shadow-sm">
                                                    <svg class="w-5 h-5 text-primary hover:text-white trantition-all" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection