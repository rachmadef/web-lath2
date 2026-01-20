<!DOCTYPE html>
<html lang="id" class="dark h-full">
<head>
    <!-- Title -->
    <title>@yield('title', 'Portal Berita - Berita Terbaru')</title>

<!-- Primary Meta Tags -->
<meta name="title" content="Plexify - Business Consultant & Agency Tailwind CSS Template | DexignZone">
<meta name="description" content="Plexify is a modern Business Consultant & Agency Tailwind CSS template for consulting firms and agencies. Responsive, customizable, and conversion-focused.">
<meta name="keywords" content="Plexify, business consultant template, agency Tailwind CSS template, consulting firm website, corporate template, consulting agency UI, responsive agency template, Tailwind CSS, portfolio template, professional services website">
 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="author" content="DexignZone">
<meta name="robots" content="index, follow">
<meta name="format-detection" content="telephone=no">
 
<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:title" content="Plexify - Business Consultant & Agency Tailwind CSS Template | DexignZone">
<meta property="og:description" content="Plexify is a modern Business Consultant & Agency Tailwind CSS template for consulting firms and agencies. Responsive, customizable, and conversion-focused.">
{{-- <meta property="og:image" content="https://plexify.dexignzone.com/tailwind/social-image.png"> --}}
{{-- <meta property="og:url" content="https://plexify.dexignzone.com/tailwind/"> --}}
 
<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Plexify - Business Consultant & Agency Tailwind CSS Template | DexignZone">
<meta name="twitter:description" content="Plexify is a modern Business Consultant & Agency Tailwind CSS template for consulting firms and agencies. Responsive, customizable, and conversion-focused.">
{{-- <meta name="twitter:image" content="https://plexify.dexignzone.com/tailwind/social-image.png"> --}}

<!-- MOBILE SPECIFIC -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
<!-- FAVICONS ICON -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
<link rel="stylesheet" href="{{ asset('assets/icons/font-awesome/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/icons/line-awesome/css/line-awesome.min.css') }}">
<link rel="stylesheet" type="text/css"  href="{{ asset('assets/icons/flaticon/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/lightgallery/dist/css/lightgallery-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/nouislider/nouislider.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/star-rating/css/star-rating.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Marcellus&family=Paytone+One&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


</head>
<body class="selection:bg-primary selection:text-white flex flex-col min-h-screen">
    <div id="loading-area" class="pxl-loader style-3">
        <div class="loading-dot-spinner">
            <div class="loading-dot"></div>
        </div>
    </div>
    
    <div class="page-wraper flex flex-col flex-grow">
        @include('partials.navbar')
        
        <div id="smooth-wrapper" class="flex-grow">
            <div id="smooth-content">
                <div class="page-content px-4  pt-10">
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('partials.footer')
    </div>
	
    <button id="scrollProgress" title="Scroll to top" class="fixed z-1 right-5 bottom-5 size-10 rounded-full bg-secondary shadow-shadow-card cursor-pointer opacity-0 pointer-events-none duration-500 flex items-center justify-center">
        <span class="icon text-xs relative z-1"><i class="fa-solid fa-chevron-up text-primary"></i></span>
        <svg class="absolute top-0 left-0 -rotate-90" width="40" height="40">
            <circle cx="20" cy="20" r="17" stroke="var(--primary)" stroke-width="2" fill="none"
                stroke-linecap="round" stroke-dasharray="100.53" stroke-dashoffset="100.53"></circle>
        </svg>
    </button>
    <!-- Toast Copy -->
    <div id="toast-copy"
        class="fixed bottom-6 left-1/2 -translate-x-1/2 
                bg-gray-900 text-white text-sm 
                px-4 py-2 rounded-full shadow-lg
                opacity-0 pointer-events-none
                transition-opacity duration-300 z-50
                flex items-center gap-2">
        <i class="fa-solid fa-check text-green-400"></i>
        <span>Link berhasil disalin</span>
    </div>

    <!-- Vendor Scripts -->
    <script src="{{ asset('assets/vendor/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/MotionPathPlugin.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/ScrollSmoother.js') }}"></script>
    <script src="{{ asset('assets/vendor/SplitText/SplitText.js') }}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="{{ asset('assets/vendor/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/vendor/apexchart/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/vendor/three/three.js') }}"></script>
    <script src="{{ asset('assets/vendor/hovereffect/hover-effect.js') }}"></script>
    
    <!-- Main Scripts -->
    <script src="{{ asset('assets/js/animation.js') }}"></script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>
    <script src="{{ asset('assets/js/dz.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/dz.ajax.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Additional Scripts -->
    @stack('scripts')
</body>
</html>
