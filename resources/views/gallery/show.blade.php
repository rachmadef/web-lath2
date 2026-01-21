@extends('layouts.app')

@section('title', $gallery->title)

@section('content')
<div id="smooth-wrapper">
    <div id="smooth-content">
        <section class="pt-32 pb-20">
            <div class="container">

                {{-- Header --}}
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-semibold dark:text-white">
                        {{ $gallery->title }}
                    </h1>

                    @if($gallery->event_date)
                        <p class="text-gray-500 mt-2">
                            {{ $gallery->event_date->translatedFormat('d F Y') }}
                        </p>
                    @endif
                </div>

                {{-- Grid Foto --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($images as $image)
                        <div class="overflow-hidden rounded-xl">
                            <a href="{{ asset('storage/'.$image) }}" target="_blank">
                                <img
                                    src="{{ asset('storage/'.$image) }}"
                                    alt="{{ $gallery->title }}"
                                    class="w-full h-72 object-cover hover:scale-105 transition duration-500"
                                >
                            </a>
                        </div>
                    @endforeach
                </div>

                {{-- Back --}}
                <div class="text-center mt-14">
                    <a href="{{ route('gallery.index') }}"
                       class="inline-block px-6 py-3 rounded-lg bg-primary text-white">
                        ← Kembali ke Galeri
                    </a>
                </div>

            </div>
        </section>
    </div>
</div>
@endsection
