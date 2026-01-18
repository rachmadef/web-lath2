@extends('layouts.app')

@section('title', $post->title)

@section('content')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <div class="page-content">
                <section class="2xl:pt-57 pt-30 2xl:pb-36.25 pb-10">
                    <div class="container relative flex">
                        <div class="row justify-center xl:gap-17.75 gap-5 mx-auto">
                            <div class="lg:w-[80%] w-full mb-7.5">
                                <div class="sm:pb-7.5 pb-3.75 text-center">
                                    <h1 class="2xl:text-7xl xl:text-5xl lg:text-4xxl sm:text-4xl text-3xl font-semibold headline mb-7.5 dark:text-white text-secondary">{{ $post->title }}</h1>
                                    <div class="sm:mb-7.5 mb-5">
                                        <ul class="text-base text-lightgreen dark:text-lightgrey uppercase mt-auto">
                                            <li class="inline-block relative pe-2.5">{{ $post->published_at->format('d M Y') }}</li>
                                            <li class="inline-block relative ps-3.75 before:content-['/'] before:absolute before:text-lightgreen dark:before:text-lightgrey before:size-full before:top-0 before:left-0">By {{ $post->author->name }}</li>
                                        </ul>
                                    </div>
                                    <div class="blog-slideshow swiper rounded-2xl">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img loading="lazy" src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" width="1600" height="960" class="size-full object-cover">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination-two absolute bottom-2.5 z-1 left-0 right-0 text-center"></div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 sm:gap-5">
                                    <div class="col-span-12">
                                        <div class="lg:mb-15 mb-7.5 xl:text-2xl sm:text-xl text-lg font-normal text-bodytext space-y-4">
                                            {!! $post->content !!}
                                        </div>
                                        <div class="mb-7.5">
                                            <ul class="text-bodytext relative before:content-[''] before:absolute before:top-0 before:left-0 before:h-px before:w-full dark:before:bg-white/10 before:bg-black/10">
                                                <li class="inline-block px-2.25 sm:px-8.75 sm:py-6 py-3 first:ps-0">Tags:</li>
                                                <li class="inline-block px-2.25 sm:px-8.75 sm:py-6 py-3 first:ps-0 dark:text-white text-secondary">{{ $post->category->name }}</li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            @endsection
