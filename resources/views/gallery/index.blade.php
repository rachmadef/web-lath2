@extends('layouts.app')

@section('title', 'Profil Pondok')

@section('content')

<div id="smooth-wrapper">
    <div id="smooth-content">
		<div class="">
			<section id="Work" class="relative lg:pt-42.25 pt-27.25 lg:pb-35.5 pb-15.5 z-0 portfolio">
				<div class="container">
					<div class="grid grid-cols-12">
						<div class="col-span-12">
							<div class="text-center">
								<h2 class="2xl:text-[90px]/[40px] xl:text-5xl lg:text-4xxl sm:text-4xl text-3xl dark:text-white text-secondary font-medium">Galeri</h2>
							</div>
							<div class="flex items-center justify-center site-filters md:py-10 py-5">
								<ul class="filters flex items-center gap-5 flex-wrap justify-center">
									<li data-filter="*"
										class="sm:text-xl text-base font-light font-display dark:text-white duration-500 active hover:bg-primary py-2 px-4 rounded-md">
										<a href="javascript:void(0);">View All</a>
									</li>

									@foreach($categories as $category)
										<li data-filter=".{{ $category->slug }}"
											class="sm:text-xl text-base font-light font-display dark:text-white duration-500 hover:bg-primary py-2 px-4 rounded-md">
											<a href="javascript:void(0);">
												{{ $category->name }}
											</a>
										</li>
									@endforeach
								</ul>
							</div>
							<div class="flex masonry2" data-masonry='{"percentPosition": true}'>
								<div class="grid-sizer md:w-1/2 w-full"></div>
								@foreach($galleries as $item)
								@php
									$cover = $item->images[0] ?? null;
								@endphp

								<div class="grid-item md:w-1/2 w-full {{ $item->category->slug }} mb-5 px-2.5">
									<div class="dlab-box dlab-gallery-box">
										<div class="workbox dz-hover-item rounded-2lg relative overflow-hidden group">

											<a href="{{ route('gallery.show', $item) }}" class="block">
												@if($cover)
													<img
														src="{{ asset('storage/'.$cover) }}"
														alt="{{ $item->title }}"
														class="rounded-2lg w-full h-[350px] object-cover"
													>
												@endif

												<span class="text-white xl:text-[34px]/10 text-2xl font-medium
													absolute z-2 bottom-6 left-6">
													{{ $item->title }}
												</span>
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


<button id="scrollProgress" title="Scroll to top" class="fixed z-1 right-5 bottom-5 size-10 rounded-full bg-secondary shadow-shadow-card cursor-pointer opacity-0 pointer-events-none duration-500 flex items-center justify-center">
		<span class="icon text-xs relative z-1"><i class="fa-solid fa-chevron-up text-primary"></i></span>
		<svg class="absolute top-0 left-0 -rotate-90" width="40" height="40">
			<circle cx="20" cy="20" r="17" stroke="var(--primary)" stroke-width="2" fill="none"
				stroke-linecap="round" stroke-dasharray="100.53" stroke-dashoffset="100.53"></circle>
		</svg>
	</button>

	@push('scripts')
		<script src="{{ asset('assets/vendor/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/MotionPathPlugin.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/ScrollSmoother.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendor/SplitText/SplitText.min.js') }}"></script> --}}
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="{{ asset('assets/vendor/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/vendor/apexchart/apexcharts.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/masonry/masonry-4.2.2.js') }}"></script><!-- MASONRY -->
	<script src="{{ asset('assets/vendor/masonry/isotope.pkgd.min.js') }}"></script><!-- MASONRY -->
	<script src="{{ asset('assets/vendor/three/three.js') }}"></script>
    <script src="{{ asset('assets/vendor/hovereffect/hover-effect.js') }}"></script>
    <script src="{{ asset('assets/js/dz.ajax.js') }}"></script>
    <script src="{{ asset('assets/js/scroll-magic.js') }}"></script>
    <script src="{{ asset('assets/js/animation.js') }}"></script>
    <script src="{{ asset('assets/js/dz.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
	@endpush

@endsection
