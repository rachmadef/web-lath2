@extends('layouts.app')

@section('title', $post->title . ' | Profil')

@section('content')
<div id="smooth-wrapper">
    <div id="smooth-content">
        <div class="page-content">
            <!-- Hero Section -->
            <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 bg-gradient-to-br from-primary/5 via-white to-primary/5 dark:from-primary/10 dark:via-gray-900 dark:to-primary/10">
                <div class="absolute inset-0 bg-grid-gray-100 dark:bg-grid-gray-800/[0.03] bg-[size:20px_20px]"></div>
                <div class="container relative mx-auto px-4">
                    <div class="max-w-4xl mx-auto text-center">
                        <!-- Breadcrumb Navigation -->
                        <nav class="flex justify-center mb-6" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                                <li class="inline-flex items-center">
                                    <a href="{{ url('/') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary dark:text-gray-300 dark:hover:text-primary-light transition-colors">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                                        </svg>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" fill="currentColor" viewBox="0 0 6 10">
                                            <path d="M5.293 4.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L1 7.586 5.293 3.293z"/>
                                        </svg>
                                        @if($post->category)
                                            <a href="{{ route('news.category', $post->category->slug) }}" class="ms-1 text-sm font-medium text-gray-700 hover:text-primary dark:text-gray-300 dark:hover:text-primary-light transition-colors">
                                                {{ $post->category->name }}
                                            </a>
                                        @else
                                            <span class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">Profil</span>
                                        @endif
                                    </div>
                                </li>
                                <li aria-current="page">
                                    <div class="flex items-center">
                                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" fill="currentColor" viewBox="0 0 6 10">
                                            <path d="M5.293 4.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L1 7.586 5.293 3.293z"/>
                                        </svg>
                                        <span class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">{{ Str::limit($post->title, 30) }}</span>
                                    </div>
                                </li>
                            </ol>
                        </nav>

                        <!-- Title with Decorative Elements -->
                        <div class="relative mb-8">
                            <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-gradient-to-r from-transparent via-primary to-transparent rounded-full"></div>
                            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold dark:text-white text-gray-900 leading-tight mb-6">
                                {{ $post->title }}
                            </h1>
                            <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-gradient-to-r from-primary-light to-primary dark:from-primary dark:to-primary-light rounded-full"></div>
                        </div>

                        <!-- Meta Information -->
                        <div class="flex flex-wrap items-center justify-center gap-4 text-gray-600 dark:text-gray-300 mb-8">
                            <div class="flex items-center bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm px-4 py-2 rounded-full">
                                <svg class="w-5 h-5 mr-2 text-primary dark:text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <time datetime="{{ $post->published_at->format('Y-m-d') }}" class="font-medium">
                                    {{ $post->published_at->translatedFormat('d F Y') }}
                                </time>
                            </div>
                            
                            <div class="flex items-center bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm px-4 py-2 rounded-full">
                                <svg class="w-5 h-5 mr-2 text-primary dark:text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <span class="font-medium">By {{ $post->author->name }}</span>
                            </div>
                        </div>

                        <!-- Excerpt -->
                        @if($post->excerpt)
                        <div class="max-w-3xl mx-auto">
                            <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl p-6 border border-gray-200 dark:border-gray-700">
                                <p class="text-lg md:text-xl text-gray-700 dark:text-gray-300 leading-relaxed italic">
                                    "{{ $post->excerpt }}"
                                </p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </section>

            <!-- Main Content Section -->
            <section class="py-16 lg:py-24 bg-white dark:bg-gray-900">
                <div class="container mx-auto px-4">
                    <div class="max-w-4xl mx-auto">
                        <!-- Featured Image with Animation -->
                        <div class="mb-12 rounded-2xl overflow-hidden shadow-2xl dark:shadow-gray-900/50 relative group">
                            <div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10"></div>
                            <img loading="lazy" 
                                 src="{{ asset('storage/' . $post->thumbnail) }}" 
                                 alt="{{ $post->title }}" 
                                 class="w-full h-auto max-h-[600px] object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>

                        <!-- Article Content -->
                        <article class="prose prose-lg dark:prose-invert max-w-none mb-12">
                            <div class="prose-headings:font-bold prose-headings:text-gray-900 dark:prose-headings:text-white 
                                     prose-headings:relative prose-headings:before:absolute prose-headings:before:-left-4 
                                     prose-headings:before:top-1/2 prose-headings:before:-translate-y-1/2 
                                     prose-headings:before:w-2 prose-headings:before:h-6 prose-headings:before:bg-gradient-to-b 
                                     prose-headings:before:from-primary prose-headings:before:to-primary-light 
                                     prose-headings:before:rounded-full
                                     prose-p:text-gray-700 dark:prose-p:text-gray-300 prose-p:leading-relaxed prose-p:text-lg
                                     prose-img:rounded-xl prose-img:shadow-lg prose-img:mx-auto
                                     prose-a:text-primary dark:prose-a:text-primary-light prose-a:no-underline hover:prose-a:underline
                                     prose-blockquote:border-l-4 prose-blockquote:border-primary dark:prose-blockquote:border-primary-light 
                                     prose-blockquote:pl-6 prose-blockquote:italic prose-blockquote:bg-gradient-to-r 
                                     prose-blockquote:from-primary/5 prose-blockquote:to-transparent
                                     prose-ul:marker:text-primary dark:prose-ul:marker:text-primary-light
                                     prose-ol:marker:text-primary dark:prose-ol:marker:text-primary-light
                                     prose-hr:border-gray-200 dark:prose-hr:border-gray-700
                                     prose-table:border prose-table:border-gray-200 dark:prose-table:border-gray-700
                                     prose-th:bg-gray-100 dark:prose-th:bg-gray-800
                                     prose-td:border-t prose-td:border-gray-200 dark:prose-td:border-gray-700">
                                {!! $post->content !!}
                            </div>
                        </article>

                        <!-- Stats Section (for Profile Pages) -->
                        @if(in_array($post->category->slug ?? '', ['profil', 'sejarah']))
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                            <div class="bg-gradient-to-br from-primary/10 to-primary/5 dark:from-primary/20 dark:to-primary/10 rounded-2xl p-6 text-center transform hover:-translate-y-1 transition-transform duration-300">
                                <div class="text-3xl font-bold text-primary dark:text-primary-light mb-2">10+</div>
                                <div class="text-gray-700 dark:text-gray-300 font-medium">Tahun Pengalaman</div>
                            </div>
                            <div class="bg-gradient-to-br from-primary/10 to-primary/5 dark:from-primary/20 dark:to-primary/10 rounded-2xl p-6 text-center transform hover:-translate-y-1 transition-transform duration-300">
                                <div class="text-3xl font-bold text-primary dark:text-primary-light mb-2">50+</div>
                                <div class="text-gray-700 dark:text-gray-300 font-medium">Proyek Selesai</div>
                            </div>
                            <div class="bg-gradient-to-br from-primary/10 to-primary/5 dark:from-primary/20 dark:to-primary/10 rounded-2xl p-6 text-center transform hover:-translate-y-1 transition-transform duration-300">
                                <div class="text-3xl font-bold text-primary dark:text-primary-light mb-2">100%</div>
                                <div class="text-gray-700 dark:text-gray-300 font-medium">Kepuasan Klien</div>
                            </div>
                        </div>
                        @endif

                        <!-- Tags Section -->
                        <div class="mb-12 pt-8 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex flex-wrap items-center gap-3">
                                <span class="text-lg font-semibold text-gray-900 dark:text-white flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-primary dark:text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                    </svg>
                                    Kategori:
                                </span>
                                @if($post->category)
                                    <a href="{{ route('news.category', $post->category->slug) }}" 
                                       class="inline-flex items-center bg-primary/10 hover:bg-primary/20 dark:bg-primary/20 dark:hover:bg-primary/30 text-primary dark:text-primary-light px-4 py-2 rounded-full text-sm font-medium transition-all duration-300 group">
                                        <span>{{ $post->category->name }}</span>
                                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>

                        <!-- Call to Action Section -->
                        <div class="bg-gradient-to-r from-primary/10 via-white to-primary/10 dark:from-primary/20 dark:via-gray-800 dark:to-primary/20 rounded-2xl p-8 mb-12 border border-gray-200 dark:border-gray-700">
                            <div class="text-center">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Tertarik dengan informasi kami?</h3>
                                <p class="text-gray-600 dark:text-gray-300 mb-6 max-w-2xl mx-auto">
                                    Dapatkan informasi terbaru dan update dari kami dengan mengikuti media sosial atau berlangganan newsletter.
                                </p>
                                <div class="flex flex-wrap gap-4 justify-center">
                                    <a href="{{ route('news.category', 'berita') }}" 
                                       class="inline-flex items-center bg-primary hover:bg-primary-dark dark:bg-primary-light dark:hover:bg-primary text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                                        </svg>
                                        Lihat Berita Lainnya
                                    </a>
                                    <a href="{{ url('/') }}" 
                                       class="inline-flex items-center bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 hover:border-primary dark:hover:border-primary-light text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary-light px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:-translate-y-1 shadow hover:shadow-md">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                        </svg>
                                        Kembali ke Home
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Share Section -->
                        <div class="bg-gray-50 dark:bg-gray-800/50 rounded-2xl p-8 border border-gray-200 dark:border-gray-700">
                            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-primary/10 dark:bg-primary/20 flex items-center justify-center mr-4">
                                        <svg class="w-6 h-6 text-primary dark:text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1">Bagikan Halaman</h3>
                                        <p class="text-gray-600 dark:text-gray-300">Bantu sebarkan informasi ini</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-center gap-3">
                                    @php
                                        $shareUrl = url()->current();
                                        $shareTitle = urlencode($post->title);
                                    @endphp
                                    
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" 
                                       target="_blank"
                                       class="w-10 h-10 rounded-full bg-white dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-[#1877F2] hover:text-white dark:hover:bg-[#1877F2] transition-all duration-300 shadow hover:shadow-md">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                        </svg>
                                    </a>
                                    
                                    <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareTitle }}" 
                                       target="_blank"
                                       class="w-10 h-10 rounded-full bg-white dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-[#1DA1F2] hover:text-white dark:hover:bg-[#1DA1F2] transition-all duration-300 shadow hover:shadow-md">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.213c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                        </svg>
                                    </a>
                                    
                                    <a href="https://wa.me/?text={{ $shareTitle }}%20{{ $shareUrl }}" 
                                       target="_blank"
                                       class="w-10 h-10 rounded-full bg-white dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-[#25D366] hover:text-white dark:hover:bg-[#25D366] transition-all duration-300 shadow hover:shadow-md">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.76.982.998-3.677-.236-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.9 6.994c-.004 5.45-4.438 9.88-9.888 9.88m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.333.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.333 11.893-11.893 0-3.18-1.264-6.177-3.557-8.44"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<style>
@keyframes float {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

.animate-float {
    animation: float 3s ease-in-out infinite;
}

.bg-grid-gray-100 {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='32' height='32' fill='none' stroke='rgb(243 244 246 / 0.5)'%3e%3cpath d='M0 .5H31.5V32'/%3e%3c/svg%3e");
}

.dark .bg-grid-gray-800 {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='32' height='32' fill='none' stroke='rgb(31 41 55 / 0.3)'%3e%3cpath d='M0 .5H31.5V32'/%3e%3c/svg%3e");
}

.prose-headings:before {
    content: '';
}
</style>
@endsection