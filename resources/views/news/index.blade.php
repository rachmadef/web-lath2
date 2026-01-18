@extends('layouts.app')

@section('title', 'Berita')

@section('content')
		<div id="smooth-wrapper">
            <div id="smooth-content">
                <div class="page-content">
                    <section>
                        <div class="2xl:pt-58 2xl:pb-37.5 sm:pt-40 sm:pb-20 pt-30 pb-12.5">
                            <div class="container">
                                <div class="row">
                                    <div class="w-full">
                                        <div class="text-center xl:mb-37.5 sm:mb-20 mb-7.5">
											<h2 class="2xl:text-7xl xl:text-5xl lg:text-4xxl sm:text-4xl text-3xl font-semibold headline dark:text-white text-secondary mb-4.5">
												{{ optional($category)->name }}
											</h2>
										</div>	
                                    </div>
                                </div>
                                <div class="row justify-center">
									<div class="xl:w-[70%] lg:w-[80%] w-full">
										<div class="grid grid-cols-1 lg:grid-cols-2 gap-7.5">
											@foreach ($posts as $post)
											<div class="group bg-white rounded-xxl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
												<!-- Image Container -->
												<div class="relative overflow-hidden">
													<a href="{{ route('news.show', $post->slug) }}" class="dz-hover-img block relative" data-displacement="{{ asset('storage/' . $post->thumbnail) }}" data-intensity="0.6" data-speedin="1" data-speedout="1">
														<img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="w-full h-56 lg:h-64 object-cover rounded-t-xxl group-hover:scale-105 transition-transform duration-500">
														<div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
													</a>
													
													<!-- Category Badge -->
													<div class="absolute top-4 left-4">
														<a href="{{ route('news.category', optional($post->category)->slug) }}" class="bg-primary text-secondary text-xs font-semibold py-1.5 px-4 rounded-lg inline-block hover:bg-secondary hover:text-white transition-colors duration-300">
															{{ optional($post->category)->name }}
														</a>
													</div>
												</div>

												<!-- Content Container -->
												<div class="p-6 lg:p-7">
													<!-- Date -->
													<div class="flex items-center text-sm text-gray-500 mb-3">
														<svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
														</svg>
														<span>{{ optional($post->published_at)->format('d M Y') }}</span>
													</div>

													<!-- Title -->
													<h2 class="mb-3 text-secondary text-xl lg:text-2xl font-semibold line-clamp-2 group-hover:text-primary transition-colors duration-300">
														<a href="{{ route('news.show', $post->slug) }}">
															{{ $post->title }}
														</a>
													</h2>

													<!-- Description -->
													<p class="text-gray-600 text-sm lg:text-base mb-5 line-clamp-3">
														{{ Str::limit(strip_tags($post->content), 120) }}
													</p>

													<!-- Footer -->
													<div class="flex items-center justify-between pt-5 border-t border-gray-100">
														<!-- Author -->
														<div class="flex items-center">
															<div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center mr-2.5">
																<svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
																	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
																</svg>
															</div>
															<span class="text-sm text-gray-700 font-medium">{{ $post->author->name }}</span>
														</div>

														<!-- Read More Button -->
														<a href="{{ route('news.show', $post->slug) }}" class="flex items-center text-primary font-medium text-sm group/btn">
															<span class="mr-2">Baca Selengkapnya</span>
															<div class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center group-hover/btn:bg-secondary transition-colors duration-300">
																<svg class="w-4 h-4 group-hover/btn:translate-x-0.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
																	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
																</svg>
															</div>
														</a>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>
								</div>
								<div class="grid grid-cols-12 gap-5 sm:mt-12.5 mt-5">
									<div class="col-span-12 text-center">
										<a href="{{ route('news.category', $category->slug) }}" class="btn button--stroke flairBtn py-5 pl-6.25 pr-1.25 bg-primary border border-primary group">
											<span class="button-flair"></span>
											<span class="button__label text-base pxl-button-text dark:text-secondary z-0 group-hover:text-primary duration-500" data-original-text="Get Starts">Load More</span>
											<span class="bg-white rounded-full size-10 flex items-center justify-center ml-2.5 z-0">
												<svg class="animate-rotate" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1_1045)">
												<path d="M14.375 2.5V6.25H10.625" stroke="#1B4C40" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M0.625 12.5V8.75H4.375" stroke="#1B4C40" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M2.19375 5.62499C2.51073 4.72923 3.04946 3.92836 3.75967 3.29712C4.46988 2.66588 5.32842 2.22484 6.25518 2.01515C7.18194 1.80546 8.14672 1.83395 9.0595 2.09797C9.97227 2.36199 10.8033 2.85293 11.475 3.52499L14.375 6.24999M0.625 8.74999L3.525 11.475C4.19672 12.147 5.02773 12.638 5.94051 12.902C6.85328 13.166 7.81806 13.1945 8.74482 12.9848C9.67159 12.7751 10.5301 12.3341 11.2403 11.7028C11.9505 11.0716 12.4893 10.2707 12.8063 9.37499" stroke="#1B4C40" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
												</g>
												<defs>
												<clipPath id="clip0_1_1045">
												<rect width="15" height="15" fill="white"/>
												</clipPath>
												</defs>
												</svg>
											</span>
										</a>
									</div>
								</div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
@endsection