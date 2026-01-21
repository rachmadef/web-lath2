@extends('layouts.app')

@section('title', $gallery->title)

@section('content')
<div id="smooth-wrapper">
    <div id="smooth-content">
        <section class="pt-32 pb-24">
            <div class="container mx-auto px-4">

                {{-- ================= HEADER ================= --}}
                <div class="text-center mb-16">
                    <h1
                        class="text-4xl md:text-5xl font-semibold tracking-tight text-secondary dark:text-white"
                    >
                        {{ $gallery->title }}
                    </h1>

                    @if ($gallery->event_date)
                        <div class="mt-4 flex justify-center">
                            <span
                                class="inline-flex items-center px-4 py-1.5 rounded-full
                                       text-sm font-medium
                                       bg-primary dark:bg-secondary text-secondary
                                       dark:text-white"
                            >
                                {{ $gallery->event_date->translatedFormat('d F Y') }}
                            </span>
                        </div>
                    @endif
                </div>

                {{-- ================= GRID FOTO ================= --}}
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"
                >
                    @foreach ($images as $image)
                        <div
                            class="group relative overflow-hidden rounded-2xl
                                   bg-white dark:bg-gray-900
                                   shadow-md hover:shadow-xl
                                   transition-all duration-500"
                        >
                            <a
                                href="{{ asset('storage/' . $image) }}"
                                target="_blank"
                                class="block"
                            >
                                <img src="{{ asset('storage/' . $image) }}" alt="{{ $gallery->title }}" class="w-full h-72 object-cover transform group-hover:scale-110 transition duration-700">

                                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition duration-500 flex items-center justify-center">
                                    <span class="opacity-0 group-hover:opacity-100 scale-75 group-hover:scale-100 transition duration-500 inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/90 text-gray-800">
                                        🔍
                                    </span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                {{-- ================= BACK BUTTON ================= --}}
                <div class="text-center mt-20">
                    <a
                        href="{{ route('gallery.index') }}"
                        class="inline-flex items-center gap-2
                               px-8 py-3 rounded-xl
                               bg-primary text-white font-medium
                               hover:bg-primary/90
                               transition duration-300"
                    >
                        ← Kembali ke Galeri
                    </a>
                </div>

            </div>
        </section>
    </div>
</div>
@endsection
