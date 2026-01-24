@extends('layouts.app')

@section('title', 'Daftar')

@section('content')
<div id="smooth-wrapper" class="py-12 pb-24">
    <div id="smooth-content">
        <div class="page-content">

            {{-- ================= HEADER SECTION ================= --}}
            <section>
                <div class="2xl:pt-0 2xl:pb-36 sm:pt-32 sm:pb-20 pt-10">
                    <div class="container-fluid 3xl:!mx-20 mx-5 pb-12">

                        {{-- Header Title --}}
                        <div class="text-center mb-16">
                            <h2 class="2xl:text-7xl xl:text-5xl lg:text-4xl sm:text-4xl text-3xl font-bold text-secondary dark:text-primary mb-4">
                                Daftar Sekarang
                            </h2>
                            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                                Klik tombol di bawah untuk mendaftar atau pelajari informasi lengkap melalui panduan kami
                            </p>
                        </div>

                        {{-- ================= REGISTRATION BUTTONS ================= --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto mb-20">
                            @foreach([
                                ['https://s.id/psbwhb1','Daftar Putra'],
                                ['https://s.id/psblath2','Daftar Putri']
                            ] as [$link,$label])
                            <a href="{{ $link }}" 
                               target="_blank"
                               class="group relative flex items-center justify-between rounded-full bg-secondary hover:bg-primary dark:bg-primary px-4 py-2 sm:px-6 sm:py-3 shadow-sm dark:shadow-black/40 transition-all duration-300 ease-out hover:-translate-y-1 hover:shadow-lg hover:border-primary">
                                <span class="text-xl font-semibold tracking-tight text-primary dark:text-gray-100 group-hover:text-secondary transition-colors">
                                    {{ $label }}
                                </span>
                                <span class="flex items-center justify-center w-12 h-12 rounded-full bg-primary/10 dark:bg-primary/20 text-primary transition-all duration-300 group-hover:bg-secondary group-hover:text-white group-hover:scale-110">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </span>
                            </a>
                            @endforeach
                        </div>
                        {{-- ================= ACCORDION SECTION ================= --}}
                        <div class="max-w-4xl mx-auto">
                            <div class="space-y-3 md:space-y-4">
                                @foreach($contents as $item)
                                <div class="accordion-item bg-white dark:bg-gray-900 rounded-lg md:rounded-full shadow-lg dark:shadow-black/30 border border-gray-100 dark:border-gray-800 overflow-hidden transition-all duration-300 ease-out">
                                    
                                    {{-- Accordion Header --}}
                                    <button 
                                        onclick="toggleAccordion('accordion{{ $loop->iteration }}')"
                                        class="accordion-toggle w-full flex items-center justify-between px-4 py-4 md:px-6 md:py-5 text-left hover:bg-gray-50 dark:hover:bg-gray-200 transition-colors duration-200">
                                        
                                        <div class="flex items-center gap-3 md:gap-4">
                                            <span class="flex items-center justify-center w-10 h-10 md:w-12 md:h-12 rounded-full bg-secondary dark:bg-secondary text-primary dark:text-primary transition-all duration-300">
                                                @php
                                                    $icons = [
                                                        'persyaratan' => 'fa-list-check',
                                                        'alur' => 'fa-diagram-project',
                                                        'kontak' => 'fa-location-dot',
                                                        'brosur' => 'fa-book-open'
                                                    ];
                                                    $icon = $icons[$item->key] ?? 'fa-circle-info';
                                                @endphp
                                                <i class="fa-solid {{ $icon }} text-sm md:text-base"></i>
                                            </span>
                                            <h3 class="text-base sm:text-lg md:text-xl font-semibold text-secondary dark:text-secondary line-clamp-1">
                                                {{ $item->title }}
                                            </h3>
                                        </div>
                                        
                                        <span class="accordion-chevron text-secondary dark:text-secondary text-lg md:text-xl transition-transform duration-300 ml-2">
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </span>
                                    </button>

                                    {{-- Accordion Content --}}
                                    <div 
                                        id="accordion{{ $loop->iteration }}"
                                        class="accordion-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                        
                                        <div class="px-4 md:px-6 pb-4 md:pb-6 pt-2 border-t border-gray-100 dark:border-gray-800">
                                            <div class="prose prose-sm sm:prose-base md:prose-lg max-w-none 
                                                        prose-headings:text-emerald-900 dark:prose-headings:text-emerald-400 prose-headings:font-semibold
                                                        prose-p:text-gray-700 dark:prose-p:text-gray-300 prose-p:leading-relaxed
                                                        prose-ul:text-gray-700 dark:prose-ul:text-gray-300 prose-ul:pl-4 md:prose-ul:pl-5
                                                        prose-ol:text-gray-700 dark:prose-ol:text-gray-300 prose-ol:pl-4 md:prose-ol:pl-5
                                                        prose-li:my-1 md:prose-li:my-1.5 prose-li:marker:text-emerald-600 dark:prose-li:marker:text-emerald-400
                                                        prose-strong:text-emerald-800 dark:prose-strong:text-emerald-300 prose-strong:font-semibold
                                                        prose-blockquote:border-l-4 prose-blockquote:border-emerald-500 
                                                        prose-blockquote:pl-4 prose-blockquote:italic prose-blockquote:text-gray-600 dark:prose-blockquote:text-gray-400
                                                        prose-hr:border-gray-200 dark:prose-hr:border-gray-700">

                                                {{-- 🖼️ Gambar (jika ada) --}}
                                                @if($item->image)
                                                    <div class="mb-4 md:mb-6">
                                                        <img 
                                                            src="{{ asset('storage/' .$item->image) }}"
                                                            alt="{{ $item->title }}"
                                                            class="w-full max-h-[240px] md:max-h-[320px] object-contain rounded-lg md:rounded-xl shadow-md mx-auto cursor-zoom-in hover:scale-[1.02] transition-transform"
                                                        >
                                                        @if($item->key === 'brosur')
                                                            <a 
                                                                href="{{ asset('storage/'.$item->image) }}"
                                                                download
                                                                class="inline-flex items-center justify-center gap-2 mt-4 md:mt-5 px-4 py-2.5 md:px-6 md:py-3 rounded-lg md:rounded-xl
                                                                    bg-emerald-700 hover:bg-emerald-800
                                                                    text-white text-sm md:text-base font-semibold tracking-wide
                                                                    transition-all duration-300
                                                                    shadow-lg hover:shadow-xl w-full sm:w-auto"
                                                            >
                                                                <i class="fa-solid fa-download"></i>
                                                                Download Brosur
                                                            </a>
                                                        @endif
                                                    </div>
                                                @endif

                                                {{-- 📝 Konten teks (jika ada) --}}
                                                @if($item->content)
                                                    {!! $item->content !!}
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

{{-- ================= SCRIPT ================= --}}
<script>
// Accordion functionality
function toggleAccordion(id) {
    const accordion = document.getElementById(id);
    const isOpen = accordion.style.maxHeight && accordion.style.maxHeight !== '0px';

    // Close all accordions
    document.querySelectorAll('.accordion-content').forEach(item => {
        item.style.maxHeight = null;
    });

    // Reset semua chevron
    document.querySelectorAll('.accordion-chevron').forEach(chevron => {
        chevron.classList.remove('open');
        chevron.querySelector('i').classList.remove('fa-chevron-up');
        chevron.querySelector('i').classList.add('fa-chevron-down');
    });

    // Open accordion yang diklik
    if (!isOpen) {
        accordion.style.maxHeight = accordion.scrollHeight + 'px';

        const chevron = accordion.previousElementSibling.querySelector('.accordion-chevron');
        chevron.classList.add('open');
        chevron.querySelector('i').classList.remove('fa-chevron-down');
        chevron.querySelector('i').classList.add('fa-chevron-up');
    }

}


// Optional: Open first accordion by default on page load
document.addEventListener('DOMContentLoaded', function() {
    const firstAccordion = document.querySelector('.accordion-content');
    if (firstAccordion) {
        toggleAccordion(firstAccordion.id);
    }
});
</script>

<style>
/* Smooth accordion animations */
.accordion-content {
    transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.accordion-chevron {
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
.accordion-content .prose ol {
    list-style-type: decimal !important;
    list-style-position: outside !important;
}

.accordion-content .prose ul {
    list-style-type: disc !important;
    list-style-position: outside !important;
}

/* Custom scrollbar for accordion content */
.accordion-content .prose {
    overflow-y: auto;
    scrollbar-width: thin;
    scrollbar-color: #10b981 transparent;
}

.accordion-content .prose::-webkit-scrollbar {
    width: 6px;
}

.accordion-content .prose::-webkit-scrollbar-track {
    background: transparent;
}

.accordion-content .prose::-webkit-scrollbar-thumb {
    background-color: #10b981;
    border-radius: 20px;
}

/* Hover effect for accordion items */
.accordion-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.accordion-item:focus-within {
    box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.5);
}/* ===== FINAL FIX: FORCE NUMBERED LIST ===== */

/* Reset list bawaan prose */
.accordion-content .prose ol {
    list-style: none !important;
    padding-left: 0 !important;
    counter-reset: item;
}

/* Setiap item */
.accordion-content .prose ol > li {
    counter-increment: item;
    position: relative;
    padding-left: 2rem;
}

/* Angka manual */
.accordion-content .prose ol > li::before {
    content: counter(item) ".";
    position: absolute;
    left: 0;
    top: 0;
    font-weight: 600;
    color: #000000; /* emerald-600 */
}

/* Bullet list tetap normal */
.accordion-content .prose ul {
    list-style: disc !important;
    padding-left: 1.5rem !important;
}
/* Responsive line clamp for mobile */
.line-clamp-1 {
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 1;
}

/* Responsive image zoom on mobile */
@media (max-width: 640px) {
    .accordion-content img:hover {
        transform: none !important;
    }
}

/* Better touch targets for mobile */
@media (max-width: 768px) {
    .accordion-toggle {
        min-height: 3.5rem;
    }
    
    .accordion-content .prose {
        max-width: 100%;
        overflow-x: hidden;
    }
}
</style>
@endsection