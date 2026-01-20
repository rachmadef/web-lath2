@extends('layouts.app')

@section('title', $post->title . ' | Berita')

@section('content')
<div id="smooth-wrapper">
    <div id="smooth-content">
        <div class="page-content py-10">
            <!-- Hero Section -->
            <section class="relative pb-10">
                <div class="container relative mx-auto px-4">
                    <div class="max-w-4xl mx-auto text-center">
                        <!-- Category Badge -->
                        <div class="inline-flex items-center mb-6">
                            <a href="{{ route('news.category', $post->category->slug) }}" 
                               class="inline-flex items-center bg-primary/10 hover:bg-primary/20 dark:bg-primary/20 dark:hover:bg-primary/30 text-primary dark:text-primary-light px-5 py-2 rounded-full text-sm font-semibold transition-all duration-300 group">
                                <span class="mr-2">{{ $post->category->name }}</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>

                        <!-- Title -->
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 dark:text-white text-gray-900 leading-tight">
                            {{ $post->title }}
                        </h1>
                        <!-- Meta Information -->
                        <div class="flex flex-wrap items-center justify-center gap-6 text-gray-600 dark:text-gray-300">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2 text-primary dark:text-primary-light">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                <p class="font-medium text-gray-900 dark:text-white">{{ $post->author->name }}</p>
                            </div>
                            
                            <div class="hidden md:block w-px h-6 bg-gray-300 dark:bg-gray-600"></div>
                            
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-primary dark:text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <time datetime="{{ $post->published_at->format('Y-m-d') }}" class="font-medium">
                                    {{ $post->published_at->translatedFormat('d F Y') }}
                                </time>
                            </div>
                            
                            <div class="hidden md:block w-px h-6 bg-gray-300 dark:bg-gray-600"></div>
                            
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-primary dark:text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="font-medium">{{ $post->reading_time }} min read</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main Content Section -->
            <section class="py-16 lg:py-24 bg-white dark:bg-emerald-800">
                <div class="container mx-auto px-4">
                    <div class="max-w-4xl mx-auto">
                        <!-- Featured Image -->
                        <div class="mb-12 rounded-2xl overflow-hidden shadow-2xl dark:shadow-gray-900/50 group relative">
                            <img loading="lazy" 
                                 src="{{ asset('storage/' . $post->thumbnail) }}" 
                                 alt="{{ $post->title }}" 
                                 class="w-full h-auto max-h-[600px] object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>

                        <!-- Article Content -->
                        <article class="prose prose-lg dark:prose-invert max-w-none mb-12">
                            <div class="prose-headings:font-bold prose-headings:text-gray-900 dark:prose-headings:text-white 
                                     prose-p:text-gray-700 dark:prose-p:text-gray-300 prose-p:leading-relaxed prose-p:text-lg
                                     prose-img:rounded-xl prose-img:shadow-lg prose-img:mx-auto
                                     prose-a:text-primary dark:prose-a:text-primary-light prose-a:no-underline hover:prose-a:underline
                                     prose-blockquote:border-l-4 prose-blockquote:border-primary dark:prose-blockquote:border-primary-light 
                                     prose-blockquote:pl-6 prose-blockquote:italic prose-blockquote:bg-gray-50 dark:prose-blockquote:bg-gray-800
                                     prose-ul:marker:text-primary dark:prose-ul:marker:text-primary-light
                                     prose-ol:marker:text-primary dark:prose-ol:marker:text-primary-light
                                     prose-hr:border-gray-200 dark:prose-hr:border-gray-700">
                                {!! $post->content !!}
                            </div>
                        </article>

                        <!-- Tags Section -->
                        <div class="mb-12 pt-8 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex flex-wrap items-center gap-3">
                                <span class="text-lg font-semibold text-gray-900 dark:text-white flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-primary dark:text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                    </svg>
                                    Tags Terkait:
                                </span>
                                @if($post->tags)
                                    @foreach(explode(',', $post->tags) as $tag)
                                        <a href="#" class="inline-flex items-center bg-gray-100 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 px-4 py-2 rounded-full text-sm font-medium transition-colors duration-300">
                                            #{{ trim($tag) }}
                                        </a>
                                    @endforeach
                                @endif
                                <a href="{{ route('news.category', $post->category->slug) }}" class="inline-flex items-center bg-primary/10 hover:bg-primary/20 dark:bg-primary/20 dark:hover:bg-primary/30 text-primary dark:text-primary-light px-4 py-2 rounded-full text-sm font-medium transition-colors duration-300">
                                    #{{ $post->category->name }}
                                </a>
                            </div>
                        </div>

                        <!-- Share Section -->
                        <div class="bg-gradient-to-r from-gray-50 to-white dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 mb-12 border border-gray-200 dark:border-gray-700">
                            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-primary/10 dark:bg-primary/20 flex items-center justify-center mr-4">
                                        <svg class="w-6 h-6 text-primary dark:text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1">Bagikan Artikel</h3>
                                        <p class="text-gray-600 dark:text-gray-300">Bantu sebarkan informasi ini</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-center gap-3">
                                    @php
                                        $shareUrl = url()->current();
                                        $shareTitle = urlencode($post->title);
                                        $shareText = urlencode("Baca artikel menarik: {$post->title}");
                                    @endphp
                                    
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}&quote={{ $shareTitle }}" 
                                       target="_blank"
                                       class="w-12 h-12 rounded-full bg-white dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-[#1877F2] hover:text-white dark:hover:bg-[#1877F2] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                        </svg>
                                    </a>
                                    
                                    <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareText }}" 
                                       target="_blank"
                                       class="w-12 h-12 rounded-full bg-white dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-[#1DA1F2] hover:text-white dark:hover:bg-[#1DA1F2] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.213c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                        </svg>
                                    </a>
                                    
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $shareUrl }}&title={{ $shareTitle }}" 
                                       target="_blank"
                                       class="w-12 h-12 rounded-full bg-white dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-[#0A66C2] hover:text-white dark:hover:bg-[#0A66C2] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                        </svg>
                                    </a>
                                    
                                    <button onclick="copyToClipboard('{{ $shareUrl }}')"
                                            class="w-12 h-12 rounded-full bg-white dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-gray-800 hover:text-white dark:hover:bg-gray-600 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 group">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                        </svg>
                                        <span class="absolute -top-8 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                            Salin Link
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script>
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(function() {
        alert('Link berhasil disalin!');
    }, function(err) {
        alert('Gagal menyalin link: ', err);
    });
}

// Intersection Observer for scroll animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-fade-in');
        }
    });
}, observerOptions);

// Observe elements
document.querySelectorAll('.prose img').forEach(img => observer.observe(img));
</script>

<style>
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in {
    animation: fadeIn 0.6s ease-out forwards;
}

.bg-grid-gray-100 {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='32' height='32' fill='none' stroke='rgb(243 244 246 / 0.5)'%3e%3cpath d='M0 .5H31.5V32'/%3e%3c/svg%3e");
}

.dark .bg-grid-gray-800 {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='32' height='32' fill='none' stroke='rgb(31 41 55 / 0.3)'%3e%3cpath d='M0 .5H31.5V32'/%3e%3c/svg%3e");
}
</style>
@endsection