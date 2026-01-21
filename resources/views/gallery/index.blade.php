@extends('layouts.app')

@section('title', 'Profil Pondok')

@section('content')

<div id="smooth-wrapper">
    <div id="smooth-content">

        <section id="Work" class="relative lg:pt-24 pt-24 lg:pb-35.5 pb-16 z-0 portfolio">

            <div class="container">

                <div class="grid grid-cols-12">
                    <div class="col-span-12">

                        {{-- ================= HEADING ================= --}}
                        <div class="text-center mb-10 lg:mb-14">
                            <h2 class="2xl:text-[90px]/[1] xl:text-5xl lg:text-4xl sm:text-4xl text-3xl font-display font-medium text-secondary dark:text-white tracking-tight">
                                Galeri
                            </h2>
                            <p class="mt-4 text-base sm:text-lg text-secondary opacity-70 dark:text-white dark:opacity-70 max-w-xl mx-auto">
                                Dokumentasi kegiatan dan momen berharga di Pondok
                            </p>
                            <div class="mt-6 flex justify-center">
                                <span class="h-[2px] w-20 bg-primary/70 rounded-full"></span>
                            </div>
                        </div>

                        {{-- ================= FILTER ================= --}}
                        <div class="flex items-center bg-secondary rounded-xl justify-center site-filters md:py-4 py-6 mb-10">
                            <ul class="filters flex flex-wrap items-center justify-center gap-2 sm:gap-4">

                                <li data-filter="*" class="filter-item cursor-pointer px-4 py-2 border border-primary rounded-full text-primary hover:bg-primary hover:text-secondary font-bold active">
                                    <span class="filter-pill">
                                        View All
                                    </span>
                                </li>

                                @foreach($categories as $category)
                                <li data-filter=".{{ $category->slug }}" class="filter-item cursor-pointer px-4 py-2 border border-primary rounded-full text-primary hover:bg-primary hover:text-secondary font-bold">
                                    <span class="filter-pill">
                                        {{ $category->name }}
                                    </span>
                                </li>
                                @endforeach

                            </ul>
                        </div>

                        {{-- ================= GALLERY GRID ================= --}}
                        <div class="flex masonry2 gap-y-8" data-masonry='{"percentPosition": true}'>

                            <div class="grid-sizer md:w-1/2 w-full"></div>

                            @foreach($galleries as $item)
                            @php
                                $cover = $item->images[0] ?? null;
                            @endphp

                            <div class="grid-item md:w-1/2 w-full {{ $item->category->slug }} px-2.5">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="workbox dz-hover-item group relative overflow-hidden rounded-3xl bg-black/5 dark:bg-white/5">

                                        <a href="{{ route('gallery.show', $item) }}" class="block relative overflow-hidden group">

                                            @if($cover)
                                            <img
                                                src="{{ asset('storage/'.$cover) }}"
                                                alt="{{ $item->title }}"
                                                class="w-full h-[240px] sm:h-[300px] lg:h-[360px] object-cover transition-all duration-700 ease-out group-hover:scale-110 group-hover:rotate-[0.5deg]"
                                            >
                                            @endif

                                            <div class="absolute inset-0 bg-secondary opacity-0 transition-opacity duration-500 group-hover:opacity-80"></div>

                                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000 ease-out"></div>

                                            <div class="pointer-events-none absolute inset-0 rounded-3xl ring-0 ring-primary/0 transition-all duration-500 group-hover:ring-2 group-hover:ring-primary/40"></div>

                                            <div class="absolute inset-x-0 bottom-0 p-6 translate-y-8 opacity-0 transition-all duration-500 ease-out group-hover:translate-y-0 group-hover:opacity-100">
                                                <h3 class="text-white text-center text-lg sm:text-xl xl:text-2xl font-medium leading-snug">
                                                    {{ $item->title }}
                                                </h3>
                                            </div>

                                            <div class="absolute inset-0 flex items-center justify-center opacity-0 scale-90 transition-all duration-500 ease-out group-hover:opacity-100 group-hover:scale-100">
                                                <div class="flex flex-col items-center gap-2 px-5 py-4 rounded-full bg-primary backdrop-blur shadow-2xl shadow-primary/40">
                                                    <i class="fa-solid fa-eye text-secondary text-lg"></i>
                                                    <span class="text-xs text-secondary tracking-wide">
                                                        Lihat Galeri
                                                    </span>
                                                </div>
                                            </div>

                                        </a>

                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                </div>

            </div>

        </section>

        {{-- ================= SCROLL TO TOP ================= --}}
        <button id="scrollProgress" class="fixed right-5 bottom-5 z-50 size-10 rounded-full bg-secondary shadow-shadow-card opacity-0 pointer-events-none transition-all duration-500 flex items-center justify-center hover:scale-105">
            <span class="text-xs">
                <i class="fa-solid fa-chevron-up text-primary"></i>
            </span>
            <svg class="absolute top-0 left-0 -rotate-90" width="40" height="40">
                <circle
                    cx="20"
                    cy="20"
                    r="17"
                    stroke="var(--primary)"
                    stroke-width="2"
                    fill="none"
                    stroke-linecap="round"
                    stroke-dasharray="100.53"
                    stroke-dashoffset="100.53"
                ></circle>
            </svg>
        </button>

        @push('scripts')
        <script src="{{ asset('assets/vendor/gsap/gsap.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/gsap/ScrollTrigger.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/gsap/ScrollSmoother.js') }}"></script>
        <script src="{{ asset('assets/vendor/masonry/masonry-4.2.2.js') }}"></script>
        <script src="{{ asset('assets/vendor/masonry/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        @endpush

    </div>
</div>

@endsection
