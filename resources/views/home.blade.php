@extends('layouts.app')

@section('title', 'Portal Berita - Berita Terbaru')

@section('content')
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <div class="page-content py-10 sm:pt-10">
            	<!-- Main Banner Section -->
				<section class="main-banner my-4 relative xl:h-screen xl:min-h-237.5 xl:max-h-237.5 overflow-hidden before:bg-[url('../images/background/bg2.png')] before:size-full before:z-1 before:bg-center before:bg-no-repeat before:bg-cover before:absolute bg-no-repeat bg-cover 2xl:mx-10 sm:mx-3.5 mx-2 rounded-2xl max-sm:min-h-[500px]">
					<img class="size-full object-cover absolute" src="images/bg.jpeg" alt="img" data-speed=".20">
					<div class="container relative z-1 px-4 sm:px-6 lg:px-8">
						<div class="grid grid-cols-12 gap-5 items-start sm:pt-32.5 pt-20">
							<!-- Left Column -->
							<div class="xl:col-span-6 col-span-12 max-3xl:pl-20 pt-10 max-lg:pl-10 max-md:pl-0">
								<!-- Logo Section -->
								<div class="flex gap-4 sm:gap-3 lg:gap-4 mb-4 sm:mb-6 lg:mb-8 xl:justify-start justify-center">
									<img src="{{ asset('images/logo.jpg') }}" alt="logo-light" class="rounded-full object-cover" style="width: 60px;">
									<img src="{{ asset('images/logo.jpg') }}" alt="logo-light" class="rounded-full object-cover" style="width: 60px;">
									<img src="{{ asset('images/logo.jpg') }}" alt="logo-light" class="rounded-full object-cover" style="width: 60px;">
								</div>				
								<div class="3xl:pt-32 xl:pt-24 lg:pt-20 md:pt-16 sm:pt-12 pt-8 text-center">
									<div class="mb-8 sm:mb-12 md:mb-16">
										<!-- Welcome Badge -->
										<div class="mb-5 sm:mb-6">
											<span class="inline-block px-4 sm:px-5 py-2 sm:py-2.5 text-sm sm:text-base lg:text-lg font-medium text-white rounded-2xl border border-white/20 backdrop-blur-[20px] bg-white/10 transition-all duration-300 hover:bg-white/15">
												Selamat Datang di Pondok Pesantren
											</span>
										</div>

										<!-- Main Heading -->
										<h1 class="text-3xl xs:text-4xl sm:text-5xl md:text-6xl lg:text-5xl xl:text-8xl 2xl:text-9xl font-semibold headline text-white leading-tight sm:leading-tight md:leading-tight lg:leading-tight mb-3 sm:mb-4">
											Al Wahabiyyah 1
											<br class="hidden xs:block">
											<span class="block sm:inline">&amp; Al Lathifiyyah 2</span>
										</h1>

										<!-- Subtitle -->
										<p class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl text-primary font-medium mt-2 sm:mt-3">
											Bahrul Ulum Tambakberas Jombang
										</p>
									</div>

									<!-- CTA Button -->
									<div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 md:gap-5">
										<a href="{{ url('/daftar') }}" class="group relative inline-flex items-center justify-center w-full sm:w-auto min-w-[200px] bg-white hover:bg-gray-50 border border-white hover:border-primary rounded-full px-6 sm:px-8 py-3 sm:py-4 text-sm sm:text-base md:text-lg font-medium text-secondary hover:text-primary transition-all duration-500 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
											<span class="relative z-10 flex items-center justify-center gap-2 sm:gap-3">
												Daftar Sekarang
												<span class="bg-primary text-white rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center transition-all duration-500 group-hover:bg-secondary group-hover:scale-110">
													<svg class="w-4 h-4 sm:w-5 sm:h-5 transition-transform duration-500 group-hover:rotate-45" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M7 7H17V17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M7 17L17 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</span>
											</span>
										</a>
									</div>
								</div>
								
								<!-- Mobile Image -->
								<div class="xl:col-span-6 col-span-12 mt-8 sm:hidden">
									<div class="swiper slide-transited !overflow-visible">
										<div class="swiper-wrapper">
											<div class="swiper-slide !opacity-0 [.swiper-slide.swiper-slide-active]:!opacity-100">
												<div class="flex justify-center">
													<img src="images/ibuk.png" alt="img" class="wow bounceInUp object-cover w-full max-w-md">
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Stats Section -->
								<div class="flex items-center relative mt-8 mb-4 sm:mt-10 xl:w-full lg:w-[80%]">
									<div class="border-t border-l border-white/5 rounded-tl-xxl max-xl:rounded-bl-xxl py-2.5 px-3.5 sm:px-4.5 lg:px-7.5 dark:text-white w-[60%] bg-white/5 backdrop-blur-[20px] flex items-center shadow-[inset_0px_2px_2px_rgba(255,255,255,0.1)]">
										<span class="text-2xl sm:text-3xl lg:text-4xxxl font-semibold mr-2 sm:mr-2 lg:mr-3.75 text-white value" data-akhi="200">200</span>
										<span class="font-semibold text-2xl sm:text-3xl lg:text-4xxxl text-white">+</span>
										<p class="text-xs sm:text-sm lg:text-base font-medium text-white ml-2 sm:ml-2 text-left">
											Santri Mondok<br class="sm:hidden"> disini
										</p>
									</div>
									<div class="bg-primary py-2.5 px-3.5 sm:px-4.5 lg:px-7.5 w-[40%] rounded-tr-2lg max-xl:rounded-br-2lg">
										<div class="flex items-center">
											<span class="font-semibold text-2xl sm:text-3xl lg:text-4xxxl text-secondary">16</span>
											<p class="ml-2 sm:ml-2 lg:ml-3.75 text-xs sm:text-sm lg:text-base font-medium text-secondary">
												Lembaga<br> Pendidikan
											</p>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Desktop Image -->
							<div class="xl:col-span-6 col-span-12 max-sm:hidden hidden sm:block">
								<div class="swiper slide-transited !overflow-visible">
									<div class="swiper-wrapper">
										<div class="swiper-slide !opacity-0 [.swiper-slide.swiper-slide-active]:!opacity-100">
											<div class="xl:w-[50vw] relative xl:right-25 right-0 flex justify-end">
												<img src="images/ibuk.png" alt="img" class="wow bounceInUp object-cover max-lg:w-[90%] max-xl:w-[80%]">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						
					<!-- Social Media Sidebar -->
					<div class="absolute left-11 sm:left-6 lg:left-11 top-[30%] -translate-x-1/2 max-sm:hidden z-1">
						<ul class="mb-0 flex items-center [writing-mode:vertical-rl] relative">
							<li class="text-center mx-2 sm:mx-3 lg:mx-3.75">
								<a class="text-white/30 text-sm sm:text-base font-medium relative duration-500 flex items-center flex-col group hover:text-primary after:absolute after:-left-0.5 after:top-0 after:w-px after:h-0 after:bottom-auto after:bg-primary after:duration-500 hover:after:w-px hover:after:h-full" href="https://www.instagram.com" target="_blank" aria-label="Instagram">
									Instagram
									<i class="fa-brands fa-instagram text-white text-lg sm:text-xl absolute -z-1 h-full duration-500 opacity-0 flex items-center justify-center bg-pink group-hover:translate-x-6.5 group-hover:opacity-100 rotate-90"></i>
								</a>
							</li>
							<li class="text-center mx-2 sm:mx-3 lg:mx-3.75">
								<a class="text-white/30 text-sm sm:text-base font-medium relative duration-500 flex items-center flex-col group hover:text-primary after:absolute after:-left-0.5 after:top-0 after:w-px after:h-0 after:bottom-auto after:bg-primary after:duration-500 hover:after:w-px hover:after:h-full" href="https://www.facebook.com" target="_blank" aria-label="Facebook">
									Facebook
									<i class="fa-brands fa-facebook-f text-white text-lg sm:text-xl absolute -z-1 h-full duration-500 opacity-0 flex items-center justify-center bg-pink group-hover:translate-x-7.5 group-hover:opacity-100 rotate-90"></i>
								</a>
							</li>
							<li class="text-center mx-2 sm:mx-3 lg:mx-3.75">
								<a class="text-white/30 text-sm sm:text-base font-medium relative duration-500 flex items-center flex-col group hover:text-primary after:absolute after:-left-0.5 after:top-0 after:w-px after:h-0 after:bottom-auto after:bg-primary after:duration-500 hover:after:w-px hover:after:h-full" href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn">
									LinkedIn
									<i class="fa-brands fa-linkedin-in text-white text-lg sm:text-xl absolute -z-1 h-full duration-500 opacity-0 flex items-center justify-center bg-pink group-hover:translate-x-7.5 group-hover:opacity-100 rotate-90"></i>
								</a>
							</li>
							<li class="text-center mx-2 sm:mx-3 lg:mx-3.75">
								<a class="text-white/30 text-sm sm:text-base font-medium relative duration-500 flex items-center flex-col group hover:text-primary after:absolute after:-left-0.5 after:top-0 after:w-px after:h-0 after:bottom-auto after:bg-primary after:duration-500 hover:after:w-px hover:after:h-full" href="https://www.x.com" target="_blank" aria-label="twitter">
									x
									<i class="fa-brands fa-x-twitter text-white text-lg sm:text-xl absolute -z-1 h-full duration-500 opacity-0 flex items-center justify-center bg-pink group-hover:translate-x-7.5 group-hover:opacity-100 rotate-90"></i>
								</a>
							</li>
						</ul>
					</div>
				</section>
				<section class="xl:py-36.25 py-10">
					<div class="container">
						<div class="grid grid-cols-12 sm:gap-11.25">
							<div class="lg:col-span-5 col-span-12">
								<div class="overflow-hidden size-full relative">
									<div class="group dz-hover-item relative size-full">
										<a class="dz-hover-img rounded-2lg relative size-full" data-displacement="assets/images/1.avif" data-intensity="0.6" data-speedin="1" data-speedout="1">
											<img class="rounded-xxl size-full object-cover transform transition-transform duration-1000 group-hover:scale-110" src="images/model1.jpeg" alt="img">
										</a>
									</div>
								</div>
							</div>
							<div class="lg:col-span-7 col-span-12 2xl:ml-25 lg:ml-10 max-lg:mt-10">
								<h1 class="2xl:text-5xl lg:text-4xxl sm:text-4xl text-3xl font-semibold headline mb-3 dark:text-white text-secondary sm:pr-15">Ayo Mondok!</h1>
								<p class="sm:text-xl text-lg text-primary">di Pondok Pesantren Al Wahabiyyah 1 dan Al Lathifiyyah 2 Bahrul Ulum</p>
								<div class="mt-10">
									<div class="custom-accordion style-1 myAccordion">
										<div class="accordion-item">
											<div class="accordion-header open">
												<h4 class="acod-title w-full">
													<a class="text-secondary sm:text-lg text-base font-medium flex relative z-1 overflow-hidden w-full justify-between items-center arrow">
														Apa keunggulan mondok di pesantren kami?
														<span class="indicator bg-primary rounded-full size-7.5 flex items-center justify-center duration-500">
															<i class="las la-angle-down text-2sm"></i>
														</span>	
													</a>
												</h4>
											</div>
											<div class="accordion-content">
												<div class="content-inner">
													Pondok Pesantren Al Wahabiyyah 1 dan Al Lathifiyyah 2 Bahrul Ulum berkomitmen mencetak santri yang beriman, bertaqwa, berilmu, dan berakhlakul karimah. Pembelajaran mengintegrasikan pendidikan diniyah, akademik, dan pembinaan karakter, dibimbing langsung oleh para asatidz yang berpengalaman dalam suasana pesantren yang kondusif, disiplin, dan religius.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<div class="accordion-header">
												<h4 class="acod-title w-full">
													<a class="text-secondary sm:text-lg text-base font-medium flex relative z-1 overflow-hidden w-full justify-between items-center arrow">
														Untuk siapa Pondok Pesantren ini didirikan?
														<span class="indicator bg-primary rounded-full size-7.5 flex items-center justify-center duration-500">
															<i class="las la-angle-down text-2sm"></i>
														</span>	
													</a>
												</h4>
											</div>
											<div class="accordion-content">
												<div class="content-inner">
													Pesantren ini terbuka bagi pelajar dan generasi muda yang ingin menimba ilmu agama sekaligus membentuk karakter islami yang kuat. Cocok bagi santri yang ingin tumbuh menjadi pribadi mandiri, disiplin, berakhlak mulia, serta siap menghadapi tantangan zaman dengan bekal iman dan ilmu.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<div class="accordion-header">
												<h4 class="acod-title w-full">
													<a class="text-secondary sm:text-lg text-base font-medium flex relative z-1 overflow-hidden w-full justify-between items-center arrow">
														Ilmu apa saja yang akan didapatkan santri?
														<span class="indicator bg-primary rounded-full size-7.5 flex items-center justify-center duration-500">
															<i class="las la-angle-down text-2sm"></i>
														</span>	
													</a>
												</h4>
											</div>
											<div class="accordion-content">
												<div class="content-inner">
													Santri akan mempelajari ilmu-ilmu keislaman seperti Al-Qur’an, fiqih, akidah, akhlak, serta kitab-kitab klasik (kitab kuning). Selain itu, santri juga dibekali pendidikan formal dan pengembangan diri, sehingga mampu menyeimbangkan antara ilmu agama dan ilmu umum.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<div class="accordion-header">
												<h4 class="acod-title w-full">
													<a class="text-secondary sm:text-lg text-base font-medium flex relative z-1 overflow-hidden w-full justify-between items-center arrow">
														Bagaimana pesantren membentuk akhlak dan karakter santri?
														<span class="indicator bg-primary rounded-full size-7.5 flex items-center justify-center duration-500">
															<i class="las la-angle-down text-2sm"></i>
														</span>	
													</a>
												</h4>
											</div>
											<div class="accordion-content">
												<div class="content-inner">
													Pembentukan karakter dilakukan melalui pembiasaan ibadah, kedisiplinan, keteladanan guru, serta kehidupan berjamaah di pesantren. Santri dibina untuk hidup sederhana, bertanggung jawab, saling menghormati, dan mengamalkan nilai-nilai Islam dalam kehidupan sehari-hari.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="main-banner relative bg-bglight xl:h-187.5 overflow-hidden before:bg-[url('../images/background/bg2.png')] before:size-full before:z-1 before:bg-center before:bg-no-repeat before:bg-cover before:absolute bg-no-repeat bg-cover 2xl:mx-10 mx-3.5 rounded-2xl">
					<img class="size-full object-cover absolute scale-130" src="images/bg.jpeg" alt="img" data-speed=".5">
					<div class="container xl:py-32.5 py-10 relative z-1">
						<div class="grid grid-cols-12 gap-5 items-start">
							<div class="xl:col-span-4 col-span-12 pl-4 xl:pt-12.5">
								<h1 class="2xl:text-5xl lg:text-4xxl sm:text-4xl text-3xl font-semibold headline xl:mt-5 text-white">Tentang Pondok Kami</h1>
								<p class="sm:text-xl text-lg text-primary">Mengenal Lebih Dekat Visi, Misi, dan Perjalanan Kami</p>
							</div>
							<div class="xl:col-span-8 col-span-12">
								<div class="swiper tema-details">
									<div class="swiper-wrapper two-card-wrapper justify-center">
										<!-- Card Profil Pondok -->
										@if($profil)
										<div class="swiper-slide">
											<div class="rounded-xxl relative overflow-hidden group dz-hover-item h-full">
												<a href="{{ route('profil') }}" class="dz-hover-img rounded-2lg relative block h-full" data-displacement="assets/images/7.png" data-intensity="0.6" data-speedin="1" data-speedout="1">
													<div class="rounded-xxl relative size-full bg-white flex flex-col">
														<!-- Thumbnail jika ada -->
														@if($profil->thumbnail)
														<div class="h-48 overflow-hidden rounded-t-xl">
															<img src="{{ asset('storage/' . $profil->thumbnail) }}" alt="{{ $profil->title }}" class="w-full h-full object-cover">
														</div>
														@else
														<div class="h-48 bg-gradient-to-r from-primary to-secondary rounded-t-xl flex items-center justify-center">
															<svg class="size-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
															</svg>
														</div>
														@endif
														
														<!-- Konten -->
														<div class="p-4 flex-1">
															<h3 class="text-2xl font-bold text-secondary mb-3">{{ $profil->title }}</h3>
															<p class="text-gray-600 line-clamp-3">
																{{ Str::limit(strip_tags($profil->content), 150) }}
															</p>
														</div>
													</div>
												</a>
												<div class="absolute group-hover:right-2.5 group-hover:top-2.5 -right-13.5 -top-13.5 duration-500">
													<a href="{{ route('profil') }}" class="size-12.5 min-w-12.5 flex items-center justify-center rounded-full bg-primary overflow-hidden group/second">
														<svg class="group-hover/second:animate-toTopFromBottom" width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M15.8128 28.1873L28.1872 15.8129" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M15.8128 15.8127H28.1872V28.1871" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
												</div>
												<div class="absolute left-2.25 right-2.5 flex flex-col rounded-2lg bg-white shadow-md overflow-hidden translate-y-full group-hover:-translate-y-33 duration-500">
													<div class="bg-primary py-3.75 flex flex-col items-center w-full text-center rounded-2lg">
														<h5 class="text-xl font-bold! text-secondary">
															<a href="{{ route('profil') }}" class="hover:text-white duration-500">Baca Selengkapnya</a>
														</h5>
													</div>
													<div class="p-4 text-center">
														<p class="text-sm text-gray-600">{{ $profil->category->name ?? 'Profil' }}</p>
													</div>
												</div>
											</div>
										</div>
										@endif
										
										<!-- Card Sejarah Pondok -->
										@if($sejarah)
										<div class="swiper-slide">
											<div class="rounded-xxl relative overflow-hidden group dz-hover-item h-full">
												<a href="{{ route('sejarah') }}" class="dz-hover-img rounded-2lg relative block h-full" data-displacement="assets/images/7.png" data-intensity="0.6" data-speedin="1" data-speedout="1">
													<div class="rounded-xxl relative size-full bg-white flex flex-col">
														<!-- Thumbnail jika ada -->
														@if($sejarah->thumbnail)
														<div class="h-48 overflow-hidden rounded-t-xl">
															<img src="{{ asset('storage/' . $sejarah->thumbnail) }}" alt="{{ $sejarah->title }}" class="w-full h-full object-cover">
														</div>
														@else
														<div class="h-48 bg-gradient-to-r from-primary to-secondary rounded-t-xl flex items-center justify-center">
															<svg class="size-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
															</svg>
														</div>
														@endif
														
														<!-- Konten -->
														<div class="p-4 flex-1">
															<h3 class="text-2xl font-bold text-secondary mb-3">{{ $sejarah->title }}</h3>
															<p class="text-gray-600 line-clamp-3">
																{{ Str::limit(strip_tags($sejarah->content), 150) }}
															</p>
														</div>
													</div>
												</a>
												<div class="absolute group-hover:right-2.5 group-hover:top-2.5 -right-13.5 -top-13.5 duration-500">
													<a href="{{ route('sejarah') }}" class="size-12.5 min-w-12.5 flex items-center justify-center rounded-full bg-primary overflow-hidden group/second">
														<svg class="group-hover/second:animate-toTopFromBottom" width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M15.8128 28.1873L28.1872 15.8129" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M15.8128 15.8127H28.1872V28.1871" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
												</div>
												<div class="absolute left-2.25 right-2.5 flex flex-col rounded-2lg bg-white shadow-md overflow-hidden translate-y-full group-hover:-translate-y-33 duration-500">
													<div class="bg-primary py-3.75 flex flex-col items-center w-full text-center rounded-2lg">
														<h5 class="text-xl font-bold! text-secondary">
															<a href="{{ route('sejarah') }}" class="hover:text-white duration-500">Baca Selengkapnya</a>
														</h5>
													</div>
													<div class="p-4 text-center">
														<p class="text-sm text-gray-600">{{ $sejarah->category->name ?? 'Sejarah' }}</p>
													</div>
												</div>
											</div>
										</div>
										@endif
										
										<!-- Jika data tidak ditemukan, tampilkan placeholder -->
										@if(!$profil && !$sejarah)
										<div class="swiper-slide">
											<div class="rounded-xxl relative overflow-hidden group dz-hover-item h-full">
												<div class="rounded-xxl relative size-full min-h-382 bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center">
													<div class="text-center p-6">
														<p class="text-white/80">Data belum tersedia</p>
													</div>
												</div>
											</div>
										</div>
										@endif
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- News Section -->
				<section
					class="relative my-6 overflow-hidden rounded-2xl bg-cover bg-center	2xl:mx-10 sm:mx-4 mx-2 xl:min-h-[600px] max-sm:min-h-[520px]">
					<div class="relative z-10 xl:py-20 sm:py-16 py-12">
						<!-- Header -->
						<div class="container px-4 sm:px-6 lg:px-8">
							<div class="flex flex-col sm:flex-row gap-6 justify-between items-start sm:items-end mb-10">
								<div class="max-w-3xl">
									<h2
										class="font-semibold text-white
											2xl:text-[55px] lg:text-5xl sm:text-4xl text-2xl leading-tight mb-3">
										Berita dan Artikel
									</h2>
									<p class="text-gray-300 text-sm sm:text-base max-w-2xl">
										Temukan berita terbaru dan artikel menarik seputar perkembangan terkini
									</p>
								</div>

								<a href="/berita"
								class="btn group flex items-center gap-2 bg-white text-secondary
										border border-white shadow-sm hover:shadow-md transition-all
										px-5 sm:px-7 py-3 rounded-full">
									<span class="font-semibold text-sm sm:text-base">
										Berita Lainnya
									</span>
									<span
										class="flex items-center justify-center size-10 rounded-full
											bg-primary group-hover:scale-110 transition-transform">
										<svg width="18" height="18" viewBox="0 0 20 20" fill="none">
											<path d="M4.16663 10H15.8333" stroke="var(--secondary)" stroke-width="1.25"
												stroke-linecap="round" />
											<path d="M10 4.16666L15.8333 10L10 15.8333" stroke="var(--secondary)"
												stroke-width="1.25" stroke-linecap="round" />
										</svg>
									</span>
								</a>
							</div>
						</div>

						<!-- Swiper -->
						<div class="container-fluid sm:mt-12.5 mt-8 sm:!mx-5 px-2 sm:px-4 lg:px-5">
							<div class="swiper services-details">
								<div class="swiper-wrapper">
									@foreach ($posts as $p)
										<div class="swiper-slide">
											<div class="relative rounded-xxl bg-no-repeat bg-position-[50%] bg-size-[0] shadow-[0_4px_4px_rgba(0,0,0,2%)] mb-1.25 duration-500 overflow-hidden group hover:bg-cover bg-white mx-2" style="background-image: url('{{ asset('storage/' . $p->thumbnail) }}');">
												<div class="duration-500 group-hover:bg-linear-[var(--secondary-gradient)]">
													<div class="pt-6 sm:pt-8 lg:pt-10 ml-4 sm:ml-6 lg:ml-10">
														<a class="bg-primary text-secondary text-xs sm:text-sm lg:text-base font-semibold py-1.5 sm:py-2 px-3 sm:px-4 lg:px-5.75 inline-block rounded-2lg w-fit hover:bg-secondary hover:text-white duration-500">
															{{ $p->category->name }}
														</a>
													</div>
													<div class="flex items-center pt-6 sm:pt-8 lg:pt-8.5 pr-4 sm:pr-6 lg:pr-13.75 pb-4 sm:pb-5 lg:pb-6.25 pl-4 sm:pl-5 lg:pl-8.75 gap-3">
														<h4 class="text-secondary text-base sm:text-lg lg:text-xl font-semibold group-hover:text-white duration-500">
															<a href="{{ route('news.show', $p->slug) }}">
																{{ Str::limit($p->title, $loop->first ? 40 : 30) }}
															</a>
														</h4>
													</div>
													<div class="relative duration-500 group-hover:bg-white/10 group-hover:backdrop-blur-[10px]">
														<div class="">
															<img class="block w-full h-40 sm:h-48 lg:h-60 xl:h-48.75 object-cover [clip-path:inset(0_0_0_0)] group-hover:[clip-path:inset(100%_0_100%_0)] duration-500" src="{{ asset('storage/' . $p->thumbnail) }}" alt="{{ $p->title }}">
														</div>
														<div class="absolute inset-0 flex items-center justify-center opacity-0 scale-[0.5] duration-500 group-hover:opacity-100 group-hover:scale-[1]">
															<a href="{{ route('news.show', $p->slug) }}" class="size-12 sm:size-16 lg:size-20 min-w-12 sm:min-w-16 lg:min-w-20 flex items-center justify-center rounded-full bg-primary overflow-hidden group/second">
																<svg class="group-hover/second:animate-toTopFromBottom" width="24" height="24" sm:width="32" sm:height="32" lg:width="44" lg:height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M15.8128 28.1873L28.1872 15.8129" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
																	<path d="M15.8128 15.8127H28.1872V28.1871" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
															</a>
														</div>
													</div>
													<div class="pt-4 sm:pt-5 lg:pt-6.25 pb-6 sm:pb-8 lg:pb-10 pl-4 sm:pl-6 lg:pl-10 pr-4 sm:pr-6 lg:pr-8.75">
														<div class="flex items-center gap-2 mb-1">
															<span class="text-xs sm:text-sm lg:text-base text-black/75 group-hover:text-white duration-500">
																{{ $p->published_at->format('d M Y') }}
															</span>
														</div>
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
@endsection

@push('styles')
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/magnific.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/nice-select.min.css') }}">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Responsive adjustments -->
    <style>	
        @media (max-width: 640px) {
            .main-banner {
                margin-left: 0.5rem;
                margin-right: 0.5rem;
            }
            
            .services-details .swiper-slide {
                width: 85% !important;
            }
        }
        
        @media (max-width: 768px) {
            .main-banner h1 {
                font-size: 1.75rem;
                line-height: 2.25rem;
            }
            
            .services-details .swiper-slide {
                width: 75%;
            }
        }
        
        @media (min-width: 769px) and (max-width: 1024px) {
            .services-details .swiper-slide {
                width: 50%;
            }
        }
        
        @media (min-width: 1025px) {
            .services-details .swiper-slide {
                width: 33.333%;
            }
        }
        
        /* Ensure proper container spacing */
        .container, .container-fluid {
            padding-left: 1rem;
            padding-right: 1rem;
        }
        
        @media (min-width: 640px) {
            .container, .container-fluid {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }
        
        @media (min-width: 768px) {
            .container, .container-fluid {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }
    </style>
@endpush

@push('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Vendor JS -->
    <script src="{{ asset('assets/vendor/js/layout.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/magnific.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/owl.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/counter-up.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/waypoint.min.js') }}"></script>
    <!-- WOW.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
        
        // Initialize swiper for responsive news slider
        $(document).ready(function() {
            if ($('.services-details').length) {
                var newsSwiper = new Swiper('.services-details', {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1.5,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 25,
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                        1280: {
                            slidesPerView: 3,
                            spaceBetween: 35,
                        }
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            }
        });
    </script>
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
@endpush

					<!-- <section class="main-banner relative bg-bglight xl:h-187.5 overflow-hidden before:bg-[url('../images/background/bg2.png')] before:size-full before:z-1 before:bg-center before:bg-no-repeat before:bg-cover before:absolute bg-no-repeat bg-cover 2xl:mx-10 mx-3.5 rounded-2xl">
						<img class="size-full object-cover absolute scale-130 -mt-30" src="assets/images/background/bg1.png" alt="img" data-speed=".5">
						<div class="container xl:py-32.5 py-10 relative z-1">
							<div class="grid grid-cols-12 gap-5 items-start">
								<div class="xl:col-span-4 col-span-12 xl:pt-12.5">
									<h1 class="2xl:text-5xl lg:text-4xxl sm:text-4xl text-3xl font-semibold headline xl:mt-5 text-white">The Team Behind Your Success</h1>
									<div class="mt-10">
										<a href="team.html" class="btn !px-1.25 text-secondary bg-white border border-white hover:border-primary group 
										shadow-[0px_5px_10px_rgba(27,76,64,0.05)] button--stroke flairBtn">
											<div class="relative z-1">
												<img src="assets/images/avatar/pic1.png" alt="img" class="inline-block size-10 -me-3.75 last:me-0 rounded-full border-2 border-white relative object-cover duration-500 hover:z-1">
												<img src="assets/images/avatar/pic2.png" alt="img" class="inline-block size-10 -me-3.75 last:me-0 rounded-full border-2 border-white relative object-cover duration-500 hover:z-1">
												<img src="assets/images/avatar/pic3.png" alt="img" class="inline-block size-10 -me-3.75 last:me-0 rounded-full border-2 border-white relative object-cover duration-500 hover:z-1">
											</div>
											<span class="button-flair"></span>
											<span class="pxl-button-text mx-2.5 button__label" data-original-text="View All Services">View All members</span>
											<span class="inline-flex justify-center items-center size-11.25 rounded-full bg-primary text-secondary duration-100 z-0">
												<svg class="group-hover:animate-toLeftFromRight" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M4.16663 10H15.8333" stroke="var(--secondary)" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10 4.16666L15.8333 10L10 15.8333" stroke="var(--secondary)" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</span>
										</a>
									</div>
								</div>
								<div class="xl:col-span-8 col-span-12">
									<div class="swiper tema-details">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="rounded-xxl relative overflow-hidden group dz-hover-item">
													<a class="dz-hover-img rounded-2lg relative" data-displacement="assets/images/7.png" data-intensity="0.6" data-speedin="1" data-speedout="1">
														<img src="assets/images/team/1.png" alt="img" width="277" height="382" class="rounded-xxl relative size-full object-cover">
													</a>
													<div class="absolute group-hover:right-2.5 group-hover:top-2.5 -right-13.5 -top-13.5 duration-500">
														<a href="team.html" class="size-12.5 min-w-12.5 flex items-center justify-center rounded-full bg-primary overflow-hidden group/second">
															<svg class="group-hover/second:animate-toTopFromBottom" width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M15.8128 28.1873L28.1872 15.8129" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M15.8128 15.8127H28.1872V28.1871" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</a>
													</div>
													<div class="absolute left-2.25 right-2.5 flex flex-col rounded-2lg bg-white overflow-hidden translate-y-full group-hover:-translate-y-33 duration-500">
														<div class="bg-primary py-3.75 flex flex-col items-center w-full text-center rounded-2lg">
															<h5 class="text-xl font-bold! text-secondary"><a href="team.html" class="hover:text-white duration-500">Sophia Carter</a></h5>
															<span class="text-sm font-medium text-secondary/80">Marketing Head</span>
														</div>
														<div class="flex items-center justify-center gap-7.5 py-2.5">
															<div class=""> 
																<a href="https://www.linkedin.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-linkedin-in"></i> </a>
															</div>
															<div class=""> 
																<a href="https://twitter.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-x-twitter"></i> </a>
															</div>
															<div class=""> 
																<a href="https://facebook.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-facebook-f"></i> </a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="rounded-xxl relative overflow-hidden group dz-hover-item">
													<a class="dz-hover-img rounded-2lg relative" data-displacement="assets/images/7.png" data-intensity="0.6" data-speedin="1" data-speedout="1">
														<img src="assets/images/team/2.png" alt="img" width="277" height="382" class="rounded-xxl relative size-full object-cover">
													</a>
													<div class="absolute group-hover:right-2.5 group-hover:top-2.5 -right-13.5 -top-13.5 duration-500">
														<a href="team.html" class="size-12.5 min-w-12.5 flex items-center justify-center rounded-full bg-primary overflow-hidden group/second">
															<svg class="group-hover/second:animate-toTopFromBottom" width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M15.8128 28.1873L28.1872 15.8129" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M15.8128 15.8127H28.1872V28.1871" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</a>
													</div>
													<div class="absolute left-2.25 right-2.5 flex flex-col rounded-2lg bg-white overflow-hidden translate-y-full group-hover:-translate-y-33 duration-500">
														<div class="bg-primary py-3.75 flex flex-col items-center w-full text-center rounded-2lg">
															<h5 class="text-xl font-bold! text-secondary"><a href="team.html" class="hover:text-white duration-500">Peter Pan</a></h5>
															<span class="text-sm font-medium text-secondary/80">Marketing Head</span>
														</div>
														<div class="flex items-center justify-center gap-7.5 py-2.5">
															<div class=""> 
																<a href="https://www.linkedin.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-linkedin-in"></i> </a>
															</div>
															<div class=""> 
																<a href="https://twitter.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-x-twitter"></i> </a>
															</div>
															<div class=""> 
																<a href="https://facebook.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-facebook-f"></i> </a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="rounded-xxl relative overflow-hidden group dz-hover-item">
													<a class="dz-hover-img rounded-2lg relative" data-displacement="assets/images/7.png" data-intensity="0.6" data-speedin="1" data-speedout="1">
														<img src="assets/images/team/3.png" alt="img" width="277" height="382" class="rounded-xxl relative size-full object-cover">
													</a>
													<div class="absolute group-hover:right-2.5 group-hover:top-2.5 -right-13.5 -top-13.5 duration-500">
														<a href="team.html" class="size-12.5 min-w-12.5 flex items-center justify-center rounded-full bg-primary overflow-hidden group/second">
															<svg class="group-hover/second:animate-toTopFromBottom" width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M15.8128 28.1873L28.1872 15.8129" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M15.8128 15.8127H28.1872V28.1871" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</a>
													</div>
													<div class="absolute left-2.25 right-2.5 flex flex-col rounded-2lg bg-white overflow-hidden translate-y-full group-hover:-translate-y-33 duration-500">
														<div class="bg-primary py-3.75 flex flex-col items-center w-full text-center rounded-2lg">
															<h5 class="text-xl font-bold! text-secondary"><a href="team.html" class="hover:text-white duration-500">Master Chef</a></h5>
															<span class="text-sm font-medium text-secondary/80">Marketing Head</span>
														</div>
														<div class="flex items-center justify-center gap-7.5 py-2.5">
															<div class=""> 
																<a href="https://www.linkedin.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-linkedin-in"></i> </a>
															</div>
															<div class=""> 
																<a href="https://twitter.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-x-twitter"></i> </a>
															</div>
															<div class=""> 
																<a href="https://facebook.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-facebook-f"></i> </a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="rounded-xxl relative overflow-hidden group">
													<img src="assets/images/team/1.png" alt="img" width="277" height="382" class="rounded-xxl relative w-full">
													<div class="absolute group-hover:right-2.5 group-hover:top-2.5 -right-13.5 -top-13.5 duration-500">
														<a href="team.html" class="size-12.5 min-w-12.5 flex items-center justify-center rounded-full bg-primary overflow-hidden group/second">
															<svg class="group-hover/second:animate-toTopFromBottom" width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M15.8128 28.1873L28.1872 15.8129" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M15.8128 15.8127H28.1872V28.1871" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</a>
													</div>
													<div class="absolute left-2.25 right-2.5 flex flex-col rounded-2lg bg-white overflow-hidden translate-y-full group-hover:-translate-y-33 duration-500">
														<div class="bg-primary py-3.75 flex flex-col items-center w-full text-center rounded-2lg">
															<h5 class="text-xl font-bold! text-secondary"><a href="team.html" class="hover:text-white duration-500">Sophia Carter</a></h5>
															<span class="text-sm font-medium text-secondary/80">Marketing Head</span>
														</div>
														<div class="flex items-center justify-center gap-7.5 py-2.5">
															<div class=""> 
																<a href="https://www.linkedin.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-linkedin-in"></i> </a>
															</div>
															<div class=""> 
																<a href="https://twitter.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-x-twitter"></i> </a>
															</div>
															<div class=""> 
																<a href="https://facebook.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-facebook-f"></i> </a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="rounded-xxl relative overflow-hidden group">
													<img src="assets/images/team/2.png" alt="img" width="277" height="382" class="rounded-xxl relative w-full">
													<div class="absolute group-hover:right-2.5 group-hover:top-2.5 -right-13.5 -top-13.5 duration-500">
														<a href="team.html" class="size-12.5 min-w-12.5 flex items-center justify-center rounded-full bg-primary overflow-hidden group/second">
															<svg class="group-hover/second:animate-toTopFromBottom" width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M15.8128 28.1873L28.1872 15.8129" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M15.8128 15.8127H28.1872V28.1871" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</a>
													</div>
													<div class="absolute left-2.25 right-2.5 flex flex-col rounded-2lg bg-white overflow-hidden translate-y-full group-hover:-translate-y-33 duration-500">
														<div class="bg-primary py-3.75 flex flex-col items-center w-full text-center rounded-2lg">
															<h5 class="text-xl font-bold! text-secondary"><a href="team.html" class="hover:text-white duration-500">Peter Pan</a></h5>
															<span class="text-sm font-medium text-secondary/80">Marketing Head</span>
														</div>
														<div class="flex items-center justify-center gap-7.5 py-2.5">
															<div class=""> 
																<a href="https://www.linkedin.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-linkedin-in"></i> </a>
															</div>
															<div class=""> 
																<a href="https://twitter.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-x-twitter"></i> </a>
															</div>
															<div class=""> 
																<a href="https://facebook.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-facebook-f"></i> </a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="rounded-xxl relative overflow-hidden group">
													<img src="assets/images/team/3.png" alt="img" width="277" height="382" class="rounded-xxl relative w-full">
													<div class="absolute group-hover:right-2.5 group-hover:top-2.5 -right-13.5 -top-13.5 duration-500">
														<a href="team.html" class="size-12.5 min-w-12.5 flex items-center justify-center rounded-full bg-primary overflow-hidden group/second">
															<svg class="group-hover/second:animate-toTopFromBottom" width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M15.8128 28.1873L28.1872 15.8129" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M15.8128 15.8127H28.1872V28.1871" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</a>
													</div>
													<div class="absolute left-2.25 right-2.5 flex flex-col rounded-2lg bg-white overflow-hidden translate-y-full group-hover:-translate-y-33 duration-500">
														<div class="bg-primary py-3.75 flex flex-col items-center w-full text-center rounded-2lg">
															<h5 class="text-xl font-bold! text-secondary"><a href="team.html" class="hover:text-white duration-500">Master Chef</a></h5>
															<span class="text-sm font-medium text-secondary/80">Marketing Head</span>
														</div>
														<div class="flex items-center justify-center gap-7.5 py-2.5">
															<div class=""> 
																<a href="https://www.linkedin.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-linkedin-in"></i> </a>
															</div>
															<div class=""> 
																<a href="https://twitter.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-x-twitter"></i> </a>
															</div>
															<div class=""> 
																<a href="https://facebook.com/" target="_blank" class="text-base text-secondary duration-500 hover:text-primary"> <i class="fa-brands fa-facebook-f"></i> </a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="mt-10 py-3 px-5 rounded-2lg border dark:border-white/5 border-black/10 shadow-[inset_0px_2px_2px_rgba(255,255,255,0.1)] backdrop-blur-[20px] bg-white/5 sm:flex justify-between items-center">
										<span class="sm:text-2xl text-xl font-medium text-white">Your Next Career Move Starts Here</span>
										<div class="flex items-center">
											<span class="text-white/90 text-medium sm:mr-5 mr-3">Start With Us</span>
											<a href="team.html" class="size-10 min-w-10 flex items-center justify-center rounded-full bg-primary overflow-hidden group/second">
												<svg class="group-hover/second:animate-toTopFromBottom" width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15.8128 28.1873L28.1872 15.8129" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M15.8128 15.8127H28.1872V28.1871" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</a>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</section>

                	<section class="xl:py-36.25 py-10">
						<div class="container">
							<div class="grid grid-cols-12 sm:gap-11.25">
								<div class="lg:col-span-5 col-span-12">
									<div class="overflow-hidden size-full relative">
										<div class="group dz-hover-item relative size-full">
											<a class="dz-hover-img rounded-2lg relative size-full" data-displacement="assets/images/1.avif" data-intensity="0.6" data-speedin="1" data-speedout="1">
												<img class="rounded-xxl size-full object-cover" src="assets/images/faqs/1.png" alt="img">
											</a>
										</div>
										<div class="absolute rounded-2xl sm:py-4.5 py-4 px-4 bg-black/35 backdrop-blur-[20px] bottom-7.5 left-8.5 flex items-center sm:gap-3.75 gap-2.75 sm:w-85 w-65">
											<img src="assets/images/chat/1.png" alt="chat" class="max-sm:size-12">
											<div class="">
												<p class="text-white text-base font-medium sm:mb-2.5 mb-0.5">Google Analytics</p>
												<div class="flex items-center">
													<div class="mr-2.5">	
														<span class="sm:text-xl text-base font-bold text-white value" data-akhi="34">34</span>
														<span class="sm:text-xl text-base font-bold text-white">%</span>
														<span class="sm:text-xl text-base font-bold text-white">Roi</span>
													</div>	
													<div>	
														<span class="sm:text-xl text-base font-bold text-primary value" data-akhi="34">87</span>
														<span class="sm:text-xl text-base font-bold text-primary">%</span>
														<span class="sm:text-xl text-base font-bold text-primary">Growth</span>
													</div>	
												</div>	
											</div>	
										</div>
									</div>
								</div>
								<div class="lg:col-span-7 col-span-12 2xl:ml-25 lg:ml-10 max-lg:mt-10">
									<h1 class="2xl:text-5xl lg:text-4xxl sm:text-4xl text-3xl font-semibold headline mb-3 dark:text-white text-secondary sm:pr-15">Got Questions? We've Got Answers</h1>
									<p class="sm:text-2xl text-xl">We have professional experts around world.</p>
									<div class="mt-10">
										<div class="custom-accordion style-1 myAccordion">
											<div class="accordion-item">
												<div class="accordion-header">
													<h4 class="acod-title w-full">
														<a class="text-secondary sm:text-lg text-base font-medium flex relative z-1 overflow-hidden w-full justify-between items-center arrow">
															What does a business financial consultant do?
															<span class="indicator bg-primary rounded-full size-7.5 flex items-center justify-center duration-500">
																<i class="las la-angle-down text-2sm"></i>
															</span>	
														</a>
													</h4>
												</div>
												<div class="accordion-content">
													<div class="content-inner">
														Both! You can book a one-time strategy session or choose a monthly support package for continuous guidance.
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<div class="accordion-header">
													<h4 class="acod-title w-full">
														<a class="text-secondary sm:text-lg text-base font-medium flex relative z-1 overflow-hidden w-full justify-between items-center arrow">
															Who do you work with?
															<span class="indicator bg-primary rounded-full size-7.5 flex items-center justify-center duration-500">
																<i class="las la-angle-down text-2sm"></i>
															</span>	
														</a>
													</h4>
												</div>
												<div class="accordion-content">
													<div class="content-inner">
														Both! You can book a one-time strategy session or choose a monthly support package for continuous guidance.
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<div class="accordion-header open">
													<h4 class="acod-title w-full">
														<a class="text-secondary sm:text-lg text-base font-medium flex relative z-1 overflow-hidden w-full justify-between items-center arrow">
															Do you offer one-time consultations or ongoing support?
															<span class="indicator bg-primary rounded-full size-7.5 flex items-center justify-center duration-500">
																<i class="las la-angle-down text-2sm"></i>
															</span>	
														</a>
													</h4>
												</div>
												<div class="accordion-content" style="max-height: 84px;">
													<div class="content-inner">
														Both! You can book a one-time strategy session or choose a monthly support package for continuous guidance.
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<div class="accordion-header">
													<h4 class="acod-title w-full">
														<a class="text-secondary sm:text-lg text-base font-medium flex relative z-1 overflow-hidden w-full justify-between items-center arrow">
															Can you help if my books are a mess?
															<span class="indicator bg-primary rounded-full size-7.5 flex items-center justify-center duration-500">
																<i class="las la-angle-down text-2sm"></i>
															</span>	
														</a>
													</h4>
												</div>
												<div class="accordion-content">
													<div class="content-inner">
														Both! You can book a one-time strategy session or choose a monthly support package for continuous guidance.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					
					<section class="xl:pb-36.25 pb-10">
						<div class="container">
							<div class="max-w-200 mx-auto text-center">
								<h1 class="2xl:text-5xl lg:text-4xxl sm:text-4xl text-3xl font-semibold headline mb-6.25 dark:text-white text-secondary">Success Stories: How Feedback Fuels Our Growth</h1>
								<p class="sm:text-base text-sm text-secondary bg-primary rounded-full py-2.5 sm:px-5 px-3 font-semibold inline-block">Plexify is rated <span class="font-extrabold">4.5 / 5</span> average from 200 reviews on Google, Clutch!</p>
							</div>
							<div class="grid grid-cols-12 gap-5 mt-12.5">
								<div class="lg:col-span-4 col-span-12">
									<div class="bg-secondary rounded-xxl xl:pt-19 xl:pb-17.5 p-10 max-xl:px-5 text-center h-full">
										<h3 class="sm:text-7xxxl font-semibold text-8xl text-white mb-3.75">4.5</h3>
										<div class="flex items-center justify-center sm:mb-17.5 mb-5">
											<span class="text-lg text-white font-medium"> Star Rating on</span><img src="assets/images//trustpilot-logo.png" alt="img" class="w-20.75 h-5 ml-1.25">
										</div>
										<h4 class="sm:text-2xxl text-2xl text-white font-semibold sm:mb-9.25 mb-5">10 Years Experience in Digital marketing</h4>
										<a href="https://www.trustpilot.com/" class="btn !pr-1.25 xl:pl-7.5 pl-2.5 text-secondary bg-white border border-white group 
										shadow-[0px_5px_10px_rgba(27,76,64,0.05)] !h-15 button--stroke flairBtn">
											<span class="button-flair"></span>
											<span class="pxl-button-text text-xl font-semibold button__label" data-original-text="View All Services">Rate Us on Trustpilot</span>
											<span class="inline-flex justify-center items-center size-12 xl:ml-10 ml-2.5 rounded-full bg-primary text-secondary duration-100 z-0">
												<svg class="group-hover:animate-toTopFromBottom" width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15.8128 28.1873L28.1872 15.8129" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M15.8128 15.8127H28.1872V28.1871" stroke="#1B4C40" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</span>
										</a>
									</div>
								</div>
								<div class="lg:col-span-8 col-span-12">
									<div class="bg-white rounded-xxl lg:h-full flex flex-wrap testimonial-swiper-wrapper">
										<div class="md:w-[63%] w-full swiper testimonial-swiper sm:h-full">
											<div class="swiper-wrapper h-full">
												<div class="swiper-slide">
													<div class="sm:p-12.5 p-5">
														<div class="flex items-center gap-1 sm:mb-6.25 mb-2.5">
															<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 0L13.9095 6.99537L21.4616 7.60081L15.7077 12.5296L17.4656 19.8992L11 15.95L4.53436 19.8992L6.29227 12.5296L0.538379 7.60081L8.09046 6.99537L11 0Z" fill="#F9BC2F"/>
															</svg>                                                            
															<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 0L13.9095 6.99537L21.4616 7.60081L15.7077 12.5296L17.4656 19.8992L11 15.95L4.53436 19.8992L6.29227 12.5296L0.538379 7.60081L8.09046 6.99537L11 0Z" fill="#F9BC2F"/>
															</svg>                                                            
															<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 0L13.9095 6.99537L21.4616 7.60081L15.7077 12.5296L17.4656 19.8992L11 15.95L4.53436 19.8992L6.29227 12.5296L0.538379 7.60081L8.09046 6.99537L11 0Z" fill="#F9BC2F"/>
															</svg>                                                            
															<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 0L13.9095 6.99537L21.4616 7.60081L15.7077 12.5296L17.4656 19.8992L11 15.95L4.53436 19.8992L6.29227 12.5296L0.538379 7.60081L8.09046 6.99537L11 0Z" fill="#F9BC2F"/>
															</svg>                                                            
															<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 0L13.9095 6.99537L21.4616 7.60081L15.7077 12.5296L17.4656 19.8992L11 15.95L4.53436 19.8992L6.29227 12.5296L0.538379 7.60081L8.09046 6.99537L11 0Z" fill="#F9BC2F"/>
															</svg>                                                            
														</div>
														<p class="xl:text-2xxl sm:text-2xl text-lg text-secondary font-light">This template has <strong class="font-bold">great documentation</strong> and support. It's very flexible and has so many options to implement to your website. I am happy that i decided to buy it.</p>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="sm:p-12.5 p-5">
													<div class="flex items-center gap-1 sm:mb-6.25 mb-2.5">
														<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11 0L13.9095 6.99537L21.4616 7.60081L15.7077 12.5296L17.4656 19.8992L11 15.95L4.53436 19.8992L6.29227 12.5296L0.538379 7.60081L8.09046 6.99537L11 0Z" fill="#F9BC2F"/>
														</svg>                                                            
														<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11 0L13.9095 6.99537L21.4616 7.60081L15.7077 12.5296L17.4656 19.8992L11 15.95L4.53436 19.8992L6.29227 12.5296L0.538379 7.60081L8.09046 6.99537L11 0Z" fill="#F9BC2F"/>
														</svg>                                                            
														<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11 0L13.9095 6.99537L21.4616 7.60081L15.7077 12.5296L17.4656 19.8992L11 15.95L4.53436 19.8992L6.29227 12.5296L0.538379 7.60081L8.09046 6.99537L11 0Z" fill="#F9BC2F"/>
														</svg>                                                            
														<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11 0L13.9095 6.99537L21.4616 7.60081L15.7077 12.5296L17.4656 19.8992L11 15.95L4.53436 19.8992L6.29227 12.5296L0.538379 7.60081L8.09046 6.99537L11 0Z" fill="#F9BC2F"/>
														</svg>                                                            
														<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11 0L13.9095 6.99537L21.4616 7.60081L15.7077 12.5296L17.4656 19.8992L11 15.95L4.53436 19.8992L6.29227 12.5296L0.538379 7.60081L8.09046 6.99537L11 0Z" fill="#F9BC2F"/>
														</svg>                                                            
													</div>
													<p class="xl:text-2xxl sm:text-2xl text-lg text-secondary font-light">Building with this template was a breeze. <strong class="font-bold">Well-documented and beautifully designed</strong> — exactly what I needed.</p>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="sm:p-12.5 p-5">
														<div class="flex items-center gap-1 sm:mb-6.25 mb-2.5">
															<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 0L13.9095 6.99537L21.4616 7.60081L15.7077 12.5296L17.4656 19.8992L11 15.95L4.53436 19.8992L6.29227 12.5296L0.538379 7.60081L8.09046 6.99537L11 0Z" fill="#F9BC2F"/>
															</svg>                                                            
															<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 0L13.9095 6.99537L21.4616 7.60081L15.7077 12.5296L17.4656 19.8992L11 15.95L4.53436 19.8992L6.29227 12.5296L0.538379 7.60081L8.09046 6.99537L11 0Z" fill="#F9BC2F"/>
															</svg>                                                            
															<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 0L13.9095 6.99537L21.4616 7.60081L15.7077 12.5296L17.4656 19.8992L11 15.95L4.53436 19.8992L6.29227 12.5296L0.538379 7.60081L8.09046 6.99537L11 0Z" fill="#F9BC2F"/>
															</svg>                                                            
															<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 0L13.9095 6.99537L21.4616 7.60081L15.7077 12.5296L17.4656 19.8992L11 15.95L4.53436 19.8992L6.29227 12.5296L0.538379 7.60081L8.09046 6.99537L11 0Z" fill="#F9BC2F"/>
															</svg>                                                            
															<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 0L13.9095 6.99537L21.4616 7.60081L15.7077 12.5296L17.4656 19.8992L11 15.95L4.53436 19.8992L6.29227 12.5296L0.538379 7.60081L8.09046 6.99537L11 0Z" fill="#F9BC2F"/>
															</svg>                                                            
														</div>
														<p class="xl:text-2xxl sm:text-2xl text-lg text-secondary font-light">The flexibility is unmatched. <strong class="font-bold">Every component feels thoughtfully crafted</strong>, and integrating it was seamless. Everything is structured and easy to follow.</p>
													</div>
												</div>
											</div>
											<div class="flex items-center absolute right-12.5 xl:!bottom-12.5 sm:!bottom-5 !-bottom-0">
                                                <div class="swiper-button-next testimonial-button-next !relative !size-auto !mt-auto duration-500 opacity-30 hover:opacity-100" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-c38a1b3ef3f5bc03">
                                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 13.3335L3.33333 20.0002L10 26.6668" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M36.6666 20H3.33329" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>                                                          
                                                </div>
                                                <div class="swiper-button-prev testimonial-button-prev !relative !size-auto !mt-auto duration-500 opacity-30 hover:opacity-100" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-c38a1b3ef3f5bc03">
                                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M30 13.3335L36.6667 20.0002L30 26.6668" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M3.33325 20H36.6666" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>                                                            
                                                </div>
                                            </div>
										</div>
										<div class="md:w-[37%] w-full swiper testimonial-thumbs sm:h-full relative after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:w-px after:max-h-90 after:h-full after:bg-[#ECECDE] lg:after:block after:hidden rounded-br-xxl rounded-tr-xxl">
											<div class="swiper-wrapper">
												<div class="swiper-slide !h-full">
													<div class="flex flex-col h-full">
														<div class="flex-1 relative after:absolute after:bg-linear-[var(--secondary2-gradient)] after:inset-0 after:z-1 after:translate-y-full after:duration-500 after:opacity-0 hover:after:opacity-100 hover:after:translate-y-0 group">
															<img src="assets/images/team/1.png" alt="img" class="size-full object-cover group-hover:scale-[1.1] group-hover:rotate-[2deg] duration-500 max-md:rounded-xxl">
															<div class="absolute -bottom-6.75 left-7.5 z-2 group-hover:bottom-6.75 duration-500">
																<span class="text-xl text-white font-medium">Olivia Mitchell</span>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide !h-full">
													<div class="flex flex-col h-full">
														<div class="flex-1 relative after:absolute after:bg-linear-[var(--secondary2-gradient)] after:inset-0 after:z-1 after:translate-y-full after:duration-500 after:opacity-0 hover:after:opacity-100 hover:after:translate-y-0 group">
															<img src="assets/images/team/2.png" alt="img" class="size-full object-cover group-hover:scale-[1.1] group-hover:rotate-[2deg] duration-500 max-md:rounded-xxl">
															<div class="absolute -bottom-6.75 left-7.5 z-2 group-hover:bottom-6.75 duration-500">
																<span class="text-xl text-white font-medium">Hugh Jackman</span>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide !h-full">
													<div class="flex flex-col h-full">
														<div class="flex-1 relative after:absolute after:bg-linear-[var(--secondary2-gradient)] after:inset-0 after:z-1 after:translate-y-full after:duration-500 after:opacity-0 hover:after:opacity-100 hover:after:translate-y-0 group">
															<img src="assets/images/team/3.png" alt="img" class="size-full object-cover group-hover:scale-[1.1] group-hover:rotate-[2deg] duration-500 max-md:rounded-xxl">
															<div class="absolute -bottom-6.75 left-7.5 z-2 group-hover:bottom-6.75 duration-500">
																<span class="text-xl text-white font-medium">Michael Reed</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>	
								</div>	
							</div>	
						</div>
					</section>
					
					<section class="main-banner relative bg-bglight xl:h-screen xl:min-h-212.5 xl:max-h-212.5 overflow-hidden before:bg-[url('../images/background/bg2.png')] before:size-full before:z-1 before:bg-center before:bg-no-repeat before:bg-cover before:absolute bg-no-repeat bg-cover 2xl:mx-10 mx-3.5 rounded-2xl">
						<img class="size-full object-cover absolute scale-130" src="assets/images/background/bg1.png" alt="img" data-speed=".5">
						<div class="container lg:py-25 py-10 relative z-1">
							<div class="grid grid-cols-12">
								<div class="lg:col-span-7 col-span-12 xl:mr-32 lg:mr-10 max-lg:mb-10">
									<h1 class="2xl:text-5xl lg:text-4xxl sm:text-4xl text-3xl font-semibold headline sm:mb-15 mb-10 text-white">Schedule Your Consultation Today Grow Faster</h1>
									<div id="grow-chart" class="sm:pb-5 rounded-2lg bg-white/5 backdrop-blur-[142px] border border-white/10"></div>
								</div>
								<div class="lg:col-span-5 col-span-12">
									<div class="bg-white rounded-xxl xl:p-12.5 p-7.5">
										<div class="sm:mb-6.75">
											<h2 class="sm:text-3xl text-2xl font-semibold text-secondary">Let’s connect <br>and Collaborate</h2>
										</div>
										<form class="dz-form dzForm" method="POST" action="assets/script/contact_smtp.php">
											<div class="dzSubscribeMsg"></div>
											<input type="hidden" class="block w-full sm:h-18.5 h-12.5 rounded-5xl border border-primary/20 sm:py-5 sm:px-10 py-1.25 px-3.75 sm:text-base text-sm text-bodycolor bg-white outline-0 placeholder:text-bodycolor" name="dzToDo" value="Contact">
											<input type="hidden" class="block w-full sm:h-18.5 h-12.5 rounded-5xl border border-primary/20 sm:py-5 sm:px-10 py-1.25 px-3.75 sm:text-base text-sm text-bodycolor bg-white outline-0 placeholder:text-bodycolor" name="reCaptchaEnable" value="0">
											<div class="dzFormMsg"></div>
											<div class="row">
												<div class="sm:w-1/2 w-full">
													<div class="mb-5">
														<input required type="text" name="dzName" id="fullname" placeholder="Full Name" class="block w-full text-base font-medium h-12.5 text-secondary placeholder:text-secondary/50 border-b-2 border-[#1B4C401A] hover:border-primary duration-500">
													</div>
												</div>
												<div class="sm:w-1/2 w-full">
													<div class="mb-5">
														<input required type="email" name="dzEmail" id="emailaddress" placeholder="Email Address" class="block w-full text-base font-medium h-12.5 text-secondary placeholder:text-secondary/50 border-b-2 border-[#1B4C401A] hover:border-primary duration-500">
													</div>
												</div>
												<div class="sm:w-1/2 w-full">
													<div class="mb-5">
														<input required type="number" name="number" id="number" placeholder="Phone Number" class="block w-full text-base font-medium h-12.5 text-secondary placeholder:text-secondary/50 border-b-2 border-[#1B4C401A] hover:border-primary duration-500">
													</div>
												</div>
												
												<div class="sm:w-1/2 w-full">
													<div class="relative custom-select mb-5">
														<div data-label="Color" class="border-b-2 border-[#1B4C401A] hover:border-primary duration-300">
															<select name="dzOther[Services]" class="dynamic-select" id="sortingSelect">
																<option value="Choose a Options" selected>Choose a Options</option>
																<option value="Work With Me">Work With Me</option>
																<option value="Join the Conversation">Join the Conversation</option>
																<option value="Collaborate Now">Collaborate Now</option>
																<option value="Get in Touch">Get in Touch</option>
															</select>
														</div>
													</div>
												</div>
												<div class="w-full">
													<div class="mb-5">
														<textarea placeholder="Write here" name="dzMessage" id="message" class="block w-full text-base font-medium h-37.5 text-secondary placeholder:text-secondary/50 border-b-2 border-[#1B4C401A] hover:border-primary duration-500" placeholder="Message"></textarea>
													</div>
												</div>
												<div class="mb-5">
													<div class="input-recaptcha max-sm:scale-[0.8] max-sm:relative max-sm:-left-7.5">
														<div class="g-recaptcha" data-sitekey="Put Your ReCapctha Site Key" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
														<input class="form-control hidden" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
													</div>
												</div>
											</div>
											<button name="submit" type="submit" value="Submit"  class="btn bg-secondary text-white py-5 pl-6.25 pr-1.25 group">
												<span class="pxl-button-text" data-original-text="Let’s Connect">Submit Message</span>
												<span class="inline-flex justify-center items-center size-10 ml-2.5 rounded-full bg-primary text-secondary duration-100 z-0">
													<svg class="group-hover:animate-toLeftFromRight" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M4.16663 10H15.8333" stroke="var(--secondary)" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M10 4.16666L15.8333 10L10 15.8333" stroke="var(--secondary)" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</span>
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</section>	
					
					<section class="xl:py-36.25 py-10">
						<div class="container">
							<div class="flex items-center justify-between">
								<div>
									<h2 class="2xl:text-5xl lg:text-4xxl sm:text-4xl text-3xl font-semibold headline dark:text-white text-secondary">Fresh Business <span class="text-primary black">Tips</span></h2>
								</div>
								<div>
									<a href="blog.html" class="magneticBtn sm:size-17.5 size-12 sm:min-w-17.5 min-w-12 flex items-center justify-center rounded-full bg-primary overflow-hidden group/second">
										<svg class="group-hover/second:animate-toTopFromBottom max-sm:w-8" width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.2344 12.2344H28.6406V28.6406" stroke="#1B4C40" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M12.2344 28.6406L28.6406 12.2344" stroke="#1B4C40" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
								</div>
							</div>
							<div class="grid grid-cols-12 mt-11.75">
								<div class="xl:col-span-9 col-span-12 xl:mr-13.5">
									<div class="swiper tips-details">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="xl:min-w-60 bg-white rounded-xxl shadow-md flex flex-col md:flex-row overflow-hidden">
													 Left Image
													<div class="group dz-hover-item relative md:w-auto w-full">
														<a class="dz-hover-img rounded-xxl relative" data-displacement="assets/images/4.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">															
															<img src="assets/images/tips/1.png" alt="Team Planning" class="rounded-xxl size-full object-cover">
														</a>
													</div>
													 Right Content 
													<div class="md:w-[60%] w-full 2xl:p-11.25 lg:p-7.25 p-4.25 flex flex-col justify-between">
														<div class="mb-20">
															 Category Tag 
															<a class="bg-primary text-secondary text-base font-semibold py-2 px-5.75 inline-block rounded-2lg w-fit hover:bg-secondary hover:text-white duration-500">
															  Financial
															</a>

															 Title 
															<h2 class="my-3 text-secondary xl:text-3xl/10 sm:text-2xxl text-2xl font-semibold hover:text-primary duration-500 item-title">
																<a href="blog.html">
																  How to Create a Profitable Business Budget That Actually Works
																</a>
															</h2>

															 Description 
															<p class="text-base text-bodytext sm:pr-13.75 font-semibold">
															  Build a smart business budget that supports growth, controls spending, and maximizes long-term profitability.
															</p>
														</div>	

														 Footer 
														<div class="flex items-center lg:text-sm text-xs text-bodytext font-semibold">
															<span>15 Jun 2025</span>
															<span class="mx-2">|</span>
															<a href="blog.html">By <span class="text-lightgreen text-sm font-semibold relative after:absolute after:h-px after:bg-[#D9D9D9] after:w-0 hover:after:w-full after:duration-500 after:left-0 hover:after:left-none after:bottom-0 border-b border-[#687B76]">Michael Reed</span></a>
															<span class="inline-flex 2xl:w-37.5 xl:w-25 w-12.5 h-px bg-[#D9D9D9] lg:mx-4.5 mx-2.5"></span>
															<a href="blog.html" class="overflow-hidden inline-flex justify-center items-center sm:size-11.25 size-8 rounded-full border border-[#E6E6E6] text-secondary duration-100 z-0">
																<svg class="hover:animate-toLeftFromRight" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M4.16663 10H15.8333" stroke="var(--secondary)" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M10 4.16666L15.8333 10L10 15.8333" stroke="var(--secondary)" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
																</svg>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="xl:min-w-60 bg-white rounded-xxl shadow-md flex flex-col md:flex-row overflow-hidden">
													 Left Image
													<div class="group dz-hover-item relative md:w-auto w-full">
														<a class="dz-hover-img rounded-xxl relative" data-displacement="assets/images/4.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">															
															<img src="assets/images/tips/2.png" alt="Team Planning" class="rounded-xxl size-full object-cover">
														</a>
													</div>
													<div class="md:w-[60%] w-full 2xl:p-11.25 lg:p-7.25 p-4.25 flex flex-col justify-between">
														<div class="mb-20">
															<a class="bg-primary text-secondary text-base font-semibold py-2 px-5.75 inline-block rounded-2lg w-fit hover:bg-secondary hover:text-white duration-500">
															  Financial
															</a>

															<h2 class="my-3 text-secondary xl:text-3xl/10 sm:text-2xxl text-2xl font-semibold hover:text-primary duration-500 item-title"><a href="blog.html">
															  The Beginner’s Guide to Understanding Your Business Numbers
															  </a>
															</h2>

															<p class="text-base text-bodytext sm:pr-13.75 font-semibold">
															  Build a smart business budget that supports growth, controls spending, and maximizes long-term profitability.
															</p>
														</div>	

														<div class="flex items-center lg:text-sm text-xs text-bodytext font-semibold">
															<span>15 Jun 2025</span>
															<span class="mx-2">|</span>
															<a href="blog.html">By <span class="text-lightgreen text-sm font-semibold relative after:absolute after:h-px after:bg-lightgreen after:w-0 hover:after:w-full after:duration-500 after:left-0 hover:after:left-none after:bottom-0 border-b border-[#687B76]">Michael Reed</span></a>
															<span class="inline-flex 2xl:w-37.5 xl:w-25 w-12.5 h-px bg-[#D9D9D9] lg:mx-4.5 mx-2.5"></span>
															<a href="blog.html" class="overflow-hidden inline-flex justify-center items-center sm:size-11.25 size-8 rounded-full border border-[#E6E6E6] text-secondary duration-100 z-0">
																<svg class="hover:animate-toLeftFromRight" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M4.16663 10H15.8333" stroke="var(--secondary)" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M10 4.16666L15.8333 10L10 15.8333" stroke="var(--secondary)" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
																</svg>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="xl:min-w-60 bg-white rounded-xxl shadow-md flex flex-col md:flex-row overflow-hidden">
													<div class="group dz-hover-item relative md:w-auto w-full">
														<a class="dz-hover-img rounded-xxl relative" data-displacement="assets/images/4.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">															
															<img src="assets/images/tips/3.png" alt="Team Planning" class="rounded-xxl size-full object-cover">
														</a>
													</div>
													<div class="md:w-[60%] w-full 2xl:p-11.25 lg:p-7.25 p-4.25 flex flex-col justify-between">
														<div class="mb-20">
															<a class="bg-primary text-secondary text-base font-semibold py-2 px-5.75 inline-block rounded-2lg w-fit hover:bg-secondary hover:text-white duration-500">
															  Financial
															</a>

															<h2 class="my-3 text-secondary xl:text-3xl/10 sm:text-2xxl text-2xl font-semibold hover:text-primary duration-500 item-title"><a href="blog.html">
															  5 Financial Mistakes Small Business Owners Make—and How to Avoid Them
															  </a>
															</h2>

															<p class="text-base text-bodytext sm:pr-13.75 font-semibold">
															  Build a smart business budget that supports growth, controls spending, and maximizes long-term profitability.
															</p>
														</div>	

														<div class="flex items-center lg:text-sm text-xs text-bodytext font-semibold">
															<span>15 Jun 2025</span>
															<span class="mx-2">|</span>
															<a href="blog.html">By <span class="text-lightgreen text-sm font-semibold relative after:absolute after:h-px after:bg-lightgreen after:w-0 hover:after:w-full after:duration-500 after:left-0 hover:after:left-none after:bottom-0 border-b border-[#687B76]">Michael Reed</span></a>
															<span class="inline-flex 2xl:w-37.5 xl:w-25 w-12.5 h-px bg-[#D9D9D9] lg:mx-4.5 mx-2.5"></span>
															<a href="blog.html" class="overflow-hidden inline-flex justify-center items-center sm:size-11.25 size-8 rounded-full border border-[#E6E6E6] text-secondary duration-100 z-0">
																<svg class="hover:animate-toLeftFromRight" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M4.16663 10H15.8333" stroke="var(--secondary)" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M10 4.16666L15.8333 10L10 15.8333" stroke="var(--secondary)" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
																</svg>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="xl:col-span-3 col-span-12">
									<div class="2xl:min-w-84 bg-white rounded-xxl shadow xl:py-8.25 xl:px-8.75 px-4.75 py-6.75 max-xl:mt-5">
										<h3 class="text-lightgreen text-base font-semibold mb-3.75">Latest News</h3>

										<div class="border-t border-bordergraylight py-3">
											<h5 class="text-secondary xl:text-lg/6 text-base font-semibold mb-1.75 hover:text-primary duration-500 item-title">
												<a href="blog.html" class="block">
													5 Financial Mistakes Small Business Owners Make—and How to Avoid Them
												</a>
											</h5>	
											<p class="text-primary/80 text-sm font-bold">22 Jun 2025</p>
										</div>

										<div class="border-t border-bordergraylight py-3">
											<h5 class="text-secondary xl:text-lg/6 text-base font-semibold mb-1.75 hover:text-primary duration-500 item-title">
												<a href="blog.html" class="block">
													How to Create a Profitable Business Budget That Actually Works
												</a>
											</h5>
											<p class="text-primary/80 text-sm font-bold">20 Jun 2025</p>
										</div>

										<div class="border-t border-bordergraylight pt-3">
											<h5 class="text-secondary xl:text-lg/6 text-base font-semibold mb-1.75 hover:text-primary duration-500 item-title">
												<a href="blog.html" class="block">
													The Beginner’s Guide to Understanding Your Business Numbers
												</a>
											</h5>	
											<p class="text-primary/80 text-sm font-bold">15 Jun 2025</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
 					<section class="xl:pt-36.25 pt-11.25">
                        <div class="container">
                            <div class="grid grid-cols-12 2xl:gap-10 gap-5">
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="xl:mb-10 mb-5">
										<h2 class="2xl:text-5xl lg:text-4xxl sm:text-4xl text-3xl font-semibold headline dark:text-white text-secondary mb-5">Meet Your Financial Partner in Growth</h2>
                                        <p class="sm:text-xl text-lg font-normal">With over 18 years of experience helping businesses unlock financial clarity and growth, I bring personalized strategy, practical insights, and ongoing support. Whether you’re just starting out or scaling fast, I’m here to guide every step.</p>
                                    </div>
									<div class="grid grid-cols-12">
										<div class="sm:col-span-6 col-span-12">
											<div class="bg-secondary p-7.5 pb-0 rounded-xxl">
												<div class="flex justify-between items-center">
													<div>
														<span class="text-base font-semibold text-white block">Revenue</span>
														<div class="flex items-center">
															<span class="text-2xxl font-extrabold text-white block">$</span>
															<span class="text-2xxl font-extrabold text-white block value" data-akhi="25.6">25.6</span>
															<span class="text-2xxl font-extrabold text-white block">M</span>
														</div>	
													</div>
													<img class="size-11.25" src="assets/images/favicon.png" alt="img">
												</div>
												<div class="flex items-center mt-3">
													<div class="flex items-center gap-1.25 mr-3.75">
														<span>
															<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect y="0.5" width="10" height="10" rx="2" fill="#B3E719"/>
															</svg>
														</span>
														<span class="text-white text-2xs font-semibold">Profit</span>
													</div>
													<div class="flex items-center gap-1.25 ">
														<span>
															<svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect y="0.5" width="10" height="10" rx="2" fill="#5F8179"/>
															</svg>
														</span>
														<span class="text-white text-2xs font-semibold">Profit</span>
													</div>
													<div class="ml-10">
														<span class="text-[#08A36B] text-2sm font-medium">+</span>	
														<span class="text-[#08A36B] text-2sm font-medium value" data-akhi="8.50">8.50</span>
														<span class="text-[#08A36B] text-2sm font-medium">%</span>
													</div>
												</div>
												<div class="-mx-5">
													<div id="chartBarRunning"></div>
												</div>
											</div>
										</div>	
										<div class="sm:col-span-6 col-span-12 sm:ml-7.5 md:mt-3.5 mt-5">
											<div class="skrollable skrollable-between max-xxl:hidden bg-white size-39 relative rounded-full max-sm:mx-auto" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" style="transform: translateY(-12.8719px);">
												<div class="word-rotate-box !bg-transparent animate-rotate size-[155px]">
													<svg class="absolute -rotate-2 top-4 left-2" width="70" height="80" viewBox="0 0 73 99" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M72.9496 1.40506C72.8656 0.632279 72.1708 0.0726486 71.3996 0.170049C60.5409 1.54147 50.0676 5.10012 40.6147 10.6362C30.7568 16.4095 22.2316 24.2028 15.599 33.5043C8.96632 42.8058 4.37625 53.4052 2.13016 64.6063C-0.0236346 75.3472 0.0246055 86.4084 2.26627 97.1214C2.42548 97.8822 3.18097 98.3568 3.93894 98.1843V98.1843C4.6969 98.0119 5.17028 97.2579 5.01155 96.4969C2.85765 86.1712 2.81443 75.5113 4.89017 65.1597C7.0582 54.3479 11.4888 44.1169 17.8909 35.1386C24.2931 26.1604 32.522 18.6379 42.0373 13.0653C51.1476 7.7298 61.2398 4.29719 71.7038 2.96896C72.475 2.87107 73.0336 2.17783 72.9496 1.40506V1.40506Z" fill="var(--color-primary)"/>
													</svg>
													<span class="word-rotate one-third text-bodytext">Years of Experiences</span>
													<span class="counter block animate-rotate [animation-direction:reverse] badge__emoji value" data-akhi="18">18</span>  
												</div>
											</div>
											<div class="mb-7 max-sm:text-center">
												<p class="text-xl drak:text-secondary font-semibold mb-3">Introducing Our Financial Advisory Experts</p>
												<div class="flex items-center gap-3.5 md:mt-0 mt-2.5 border-b border-bordergray pb-5 max-sm:justify-center">
													<div>
														<img src="assets/images/avatar/pic1.png" alt="img" class="inline-block sm:size-11.25 size-10 -me-3.75 last:me-0 rounded-full border-2 border-white relative object-cover duration-500 hover:z-1">
														<img src="assets/images/avatar/pic2.png" alt="img" class="inline-block sm:size-11.25 size-10 -me-3.75 last:me-0 rounded-full border-2 border-white relative object-cover duration-500 hover:z-1">
														<img src="assets/images/avatar/pic3.png" alt="img" class="inline-block sm:size-11.25 size-10 -me-3.75 last:me-0 rounded-full border-2 border-white relative object-cover duration-500 hover:z-1">
													</div>
													<div>
														<div class="flex 2xl:gap-1.25 gap-0.25 text-lightgreen text-base font-medium">
															<div> 
																<span class="value" data-akhi="25">25</span> 
																<span>+</span>
															</div>
															<span>Members</span>
														</div>
													</div>
												</div>
											</div>
											<a href="about-us.html" class="btn group button--stroke flairBtn !pr-1.25 pl-7.5 text-secondary bg-primary border !border-primary">
												<span class="button-flair"></span>
												<span class="pxl-button-text font-semibold button__label" data-original-text="Let’s Connect">More about</span>
												<span class="inline-flex justify-center items-center size-10 ml-2.5 rounded-full bg-secondary !text-white duration-100 z-0 group-hover:bg-primary">
													<svg class="group-hover:animate-toLeftFromRight" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path class="group-hover:stroke-secondary" d="M4.16663 10H15.8333" stroke="#fff" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
													<path class="group-hover:stroke-secondary" d="M10 4.16666L15.8333 10L10 15.8333" stroke="#fff" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</span>
											</a>
										</div>
									</div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
									<div class="group dz-hover-item relative">
										<a class="dz-hover-img rounded-2lg relative" data-displacement="assets/images/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
											<img class="rounded-2xl" src="assets/images/about-us/1.png" alt="img">
										</a>
									</div>
									<div class="grid grid-cols-12 gap-x-5 gap-y-2.5 mt-3.75">
										<div class="sm:col-span-6 col-span-12">
											<div class="bg-white rounded-xxl 2xl:p-4 p-3 flex items-center gap-2.5">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_100_7)">
												<path d="M7.93897 12.051C7.83464 12.163 7.66731 12.1887 7.53364 12.115L1.46431 8.75571C1.37297 8.70505 1.28464 8.68371 1.20264 8.68371C1.03964 8.68371 0.90164 8.76771 0.810974 8.87105C0.674307 9.02671 0.58464 9.30305 0.78164 9.56971L7.72997 18.9714C7.91197 19.2174 8.19131 19.349 8.48997 19.3317C8.79231 19.3144 9.05431 19.152 9.20797 18.8857L19.2493 1.50471C19.4333 1.18638 19.2843 0.915048 19.1013 0.779382C18.9186 0.644382 18.6383 0.590715 18.4 0.845715L7.93897 12.051Z" fill="#B3E719"/>
												</g>
												<defs>
												<clipPath id="clip0_100_7">
												<rect width="20" height="20" fill="white"/>
												</clipPath>
												</defs>
												</svg>
												<span class="text-secondary text-lg font-semibold">Expertise and experience</span>
											</div>
										</div>
										<div class="sm:col-span-6 col-span-12">
											<div class="bg-white rounded-xxl 2xl:p-4 p-3 flex items-center gap-2.5">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_100_7)">
												<path d="M7.93897 12.051C7.83464 12.163 7.66731 12.1887 7.53364 12.115L1.46431 8.75571C1.37297 8.70505 1.28464 8.68371 1.20264 8.68371C1.03964 8.68371 0.90164 8.76771 0.810974 8.87105C0.674307 9.02671 0.58464 9.30305 0.78164 9.56971L7.72997 18.9714C7.91197 19.2174 8.19131 19.349 8.48997 19.3317C8.79231 19.3144 9.05431 19.152 9.20797 18.8857L19.2493 1.50471C19.4333 1.18638 19.2843 0.915048 19.1013 0.779382C18.9186 0.644382 18.6383 0.590715 18.4 0.845715L7.93897 12.051Z" fill="#B3E719"/>
												</g>
												<defs>
												<clipPath id="clip0_100_7">
												<rect width="20" height="20" fill="white"/>
												</clipPath>
												</defs>
												</svg>
												<span class="text-secondary text-lg font-semibold">Commitment excellences</span>
											</div>
										</div>
										<div class="sm:col-span-6 col-span-12">
											<div class="bg-white rounded-xxl 2xl:p-4 p-3 flex items-center gap-2.5">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_100_7)">
												<path d="M7.93897 12.051C7.83464 12.163 7.66731 12.1887 7.53364 12.115L1.46431 8.75571C1.37297 8.70505 1.28464 8.68371 1.20264 8.68371C1.03964 8.68371 0.90164 8.76771 0.810974 8.87105C0.674307 9.02671 0.58464 9.30305 0.78164 9.56971L7.72997 18.9714C7.91197 19.2174 8.19131 19.349 8.48997 19.3317C8.79231 19.3144 9.05431 19.152 9.20797 18.8857L19.2493 1.50471C19.4333 1.18638 19.2843 0.915048 19.1013 0.779382C18.9186 0.644382 18.6383 0.590715 18.4 0.845715L7.93897 12.051Z" fill="#B3E719"/>
												</g>
												<defs>
												<clipPath id="clip0_100_7">
												<rect width="20" height="20" fill="white"/>
												</clipPath>
												</defs>
												</svg>
												<span class="text-secondary text-lg font-semibold">Client Centric approach</span>
											</div>
										</div>
										<div class="sm:col-span-6 col-span-12">
											<div class="bg-white rounded-xxl 2xl:p-4 p-3 flex items-center gap-2.5">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_100_7)">
												<path d="M7.93897 12.051C7.83464 12.163 7.66731 12.1887 7.53364 12.115L1.46431 8.75571C1.37297 8.70505 1.28464 8.68371 1.20264 8.68371C1.03964 8.68371 0.90164 8.76771 0.810974 8.87105C0.674307 9.02671 0.58464 9.30305 0.78164 9.56971L7.72997 18.9714C7.91197 19.2174 8.19131 19.349 8.48997 19.3317C8.79231 19.3144 9.05431 19.152 9.20797 18.8857L19.2493 1.50471C19.4333 1.18638 19.2843 0.915048 19.1013 0.779382C18.9186 0.644382 18.6383 0.590715 18.4 0.845715L7.93897 12.051Z" fill="#B3E719"/>
												</g>
												<defs>
												<clipPath id="clip0_100_7">
												<rect width="20" height="20" fill="white"/>
												</clipPath>
												</defs>
												</svg>
												<span class="text-secondary text-lg font-semibold">Strategic planning</span>
											</div>
										</div>
									</div>
                                </div>
                            </div>
						</div>
                    </section> -->