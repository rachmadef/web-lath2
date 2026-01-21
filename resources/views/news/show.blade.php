@extends('layouts.app')

@section('title', $post->title . ' | Berita')

@section('content')
<div id="smooth-wrapper">
    <div id="smooth-content">
        <div class="page-content py-10">
            <!-- Hero Section -->
            <section class="relative pt-10">
                <div class="container relative mx-auto px-4">
                    <div class="max-w-4xl mx-auto text-center">
                        <!-- Category Badge -->
                        <div class="inline-flex items-center mb-6">
                            <a href="{{ route('news.category', $post->category->slug) }}" 
                               class="inline-flex items-center bg-secondary hover:bg-primary dark:bg-primary dark:hover:bg-secondary text-primary hover:text-secondary dark:text-primary dark:hover:text-white px-5 py-2 rounded-full text-sm font-semibold transition-all duration-300 group">
                                <span class="mr-2">{{ $post->category->name }}</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>

                        <!-- Title -->
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 text-secondary dark:text-white text-gray-900 leading-tight">
                            {{ $post->title }}
                        </h1>
                        <!-- Meta Information -->
                        <div class="flex flex-wrap items-center justify-center gap-6 text-gray-600 dark:text-gray-300">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2 text-primary dark:text-primary">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                <span class="font-medium">{{ $post->author->name }}</span>
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
            <section class="py-16 lg:py-24">
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
                        <div class="mb-12 pt-8 border-t border-emerald-900 dark:border-emerald-800">
                            <div class="flex flex-wrap items-center gap-3">
                                <span class="text-lg font-semibold text-gray-900 dark:text-primary flex items-center">
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
                                <a href="{{ route('news.category', $post->category->slug) }}" class="inline-flex items-center bg-primary hover:bg-secondary dark:bg-primary dark:hover:bg-white text-secondary hover:text-primary dark:text-secondary dark:hover:text-white px-4 py-2 rounded-full text-sm font-medium transition-colors duration-300">
                                    #{{ $post->category->name }}
                                </a>
                            </div>
                        </div>

                        <!-- Share Section -->
                        <div class="bg-emerald-950 rounded-2xl p-6 md:p-8 mb-12 border border-emerald-800">
                            <div class="flex flex-col md:flex-row items-center justify-between gap-6">

                                <!-- Left Info -->
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-full bg-primary/10 dark:bg-primary/20 flex items-center justify-center">
                                        <svg class="w-6 h-6 text-primary dark:text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                        </svg>
                                    </div>

                                    <div>
                                        <h3 class="text-lg md:text-xl font-bold text-gray-900 dark:text-white">
                                            Bagikan Artikel
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-300">
                                            Bantu sebarkan informasi ini
                                        </p>
                                    </div>
                                </div>

                                <!-- Share Buttons -->
                                @php
                                    $shareUrl   = url()->current();
                                    $shareTitle = urlencode($post->title);
                                    $shareText  = urlencode("Baca artikel menarik: {$post->title}");
                                @endphp

                                <div class="flex items-center gap-3">
                                    
                                    <!-- WhatsApp -->
                                    <a href="https://wa.me/?text={{ $shareText }}%20{{ $shareUrl }}"
                                    target="_blank" 
                                    class="w-12 h-12 rounded-full flex items-center justify-center text-secondary hover:text-white bg-white hover:bg-primary transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                        <i class="fa-brands fa-whatsapp text-xl"></i>
                                    </a>

                                    <!-- Telegram -->
                                    <a href="https://t.me/share/url?url={{ $shareUrl }}&text={{ $shareText }}"
                                    target="_blank"
                                    class="w-12 h-12 rounded-full flex items-center justify-center text-secondary hover:text-white bg-white hover:bg-primary transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                        <i class="fa-brands fa-telegram text-xl"></i>
                                    </a>
                                    <!-- Twitter/X -->
                                    <a href="https://twitter.com/intent/tweet?text={{ $shareText }}&url={{ $shareUrl }}"
                                    target="_blank"
                                    class="w-12 h-12 rounded-full flex items-center justify-center text-secondary hover:text-white bg-white hover:bg-primary transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                        <i class="fa-brands fa-twitter text-xl"></i>
                                    </a>
                                    <!-- Copy -->
                                    <button onclick="copyLink()"
                                            class="w-12 h-12 rounded-full flex items-center justify-center text-white bg-primary hover:bg-primary/90 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 cursor-pointer">
                                        <i class="fa-solid fa-copy text-xl"></i>
                                    </button>

                                    <!-- Native Share -->
                                    <button onclick="nativeShare()"
                                            class="w-12 h-12 rounded-full flex items-center justify-center text-white bg-primary hover:bg-primary/90 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 cursor-pointer">
                                        <i class="fa-solid fa-share text-xl"></i>
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
function showToast() {
    const toast = document.getElementById('toast-copy');
    if (!toast) return;

    toast.style.opacity = "1";

    setTimeout(() => {
        toast.style.opacity = "0";
    }, 1500);
}

function copyLink() {
    navigator.clipboard.writeText(window.location.href)
        .then(() => showToast())
        .catch(() => alert("Gagal menyalin link"));
}

function nativeShare() {
    if (navigator.share) {
        navigator.share({
            title: "{{ $post->title }}",
            text: "Baca artikel ini:",
            url: window.location.href
        });
    } else {
        alert("Perangkat tidak mendukung fitur Share.");
    }
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
/* Override untuk memastikan list muncul di modal */
.prose ul {
    list-style-type: disc; /* Bullet default */
    padding-left: 1.5rem;
}
.prose ol {
    list-style-type: decimal; /* Angka default */
    padding-left: 1.5rem;
}
.prose li {
    margin-bottom: 0.25rem;
    color: #4a5565; /* Warna teks hitam */
}
.prose li::marker {
    color: #4a5565; /* Warna marker sesuai primary (hijau) */
}
</style>

@endsection