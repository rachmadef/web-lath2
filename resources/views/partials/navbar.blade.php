<header class="absolute top-0 left-0 w-full z-50 site-header header-2 duration-500">
    <!-- main header -->
    <div class="main-bar-wraper">
        <div class="container-fluid px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between 2xl:gap-5 gap-3 py-4 sm:py-5 2xl:mx-15 mx-0">

                <!-- LOGO -->
                <div class="logo 2xl:me-5 h-8 w-8 sm:h-10 sm:w-10">
                    <div class="dark:inline-block hidden">
                        <a href="{{ route('home') }}" class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 text-secondary hover:text-primary dark:text-white transition-colors duration-300">
                                <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                                <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                            </svg>
                        </a>
                    </div>
                    <div class="dark:hidden block">
                        <a href="{{ route('home') }}" class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 text-secondary hover:text-primary transition-colors duration-300">
                                <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                                <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Desktop Navigation Menu dengan Active States -->
                <div class="header-nav navbar-collapse full-sidenav custom-scroll">
                    <ul class="nav navbar xl:flex xl:w-auto w-full list-none">
                        <li>
                            <a href="{{ route('home') }}" class="text-sm sm:text-base lg:text-lg px-5 py-2.5 font-medium block relative after:content-[''] after:absolute after:h-0.5 after:w-0 after:bg-primary after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:duration-500 
                                {{ request()->routeIs('home') 
                                    ? 'text-primary dark:text-primary-light after:w-3.75' 
                                    : 'text-gray-800 dark:text-gray-200 hover:text-primary dark:hover:text-primary-light xl:text-white hover:after:w-3.75' }}">
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('news.category', 'berita') }}" class="text-sm sm:text-base lg:text-lg px-5 py-2.5 font-medium block relative after:content-[''] after:absolute after:h-0.5 after:w-0 after:bg-primary after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:duration-500 
                                {{ request()->is('berita*') || request()->routeIs('news.*') 
                                    ? 'text-primary dark:text-primary-light after:w-3.75' 
                                    : 'text-gray-800 dark:text-gray-200 hover:text-primary dark:hover:text-primary-light xl:text-white hover:after:w-3.75' }}">
                                Berita
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('gallery.index') }}" class="text-sm sm:text-base lg:text-lg px-5 py-2.5 font-medium block relative after:content-[''] after:absolute after:h-0.5 after:w-0 after:bg-primary after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:duration-500 
                                {{ request()->routeIs('gallery.*') 
                                    ? 'text-primary dark:text-primary-light after:w-3.75' 
                                    : 'text-gray-800 dark:text-gray-200 hover:text-primary dark:hover:text-primary-light xl:text-white hover:after:w-3.75' }}">
                                <span>Galeri</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profil') }}" class="text-sm sm:text-base lg:text-lg px-5 py-2.5 font-medium block relative after:content-[''] after:absolute after:h-0.5 after:w-0 after:bg-primary after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:duration-500 
                                {{ request()->routeIs('profil') 
                                    ? 'text-primary dark:text-primary-light after:w-3.75' 
                                    : 'text-gray-800 dark:text-gray-200 hover:text-primary dark:hover:text-primary-light xl:text-white hover:after:w-3.75' }}">
                                Profil Pondok
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('sejarah') }}" class="text-sm sm:text-base lg:text-lg px-5 py-2.5 font-medium block relative after:content-[''] after:absolute after:h-0.5 after:w-0 after:bg-primary after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:duration-500 
                                {{ request()->routeIs('sejarah') 
                                    ? 'text-primary dark:text-primary-light after:w-3.75' 
                                    : 'text-gray-800 dark:text-gray-200 hover:text-primary dark:hover:text-primary-light xl:text-white hover:after:w-3.75' }}">
                                Sejarah
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Right Side Actions -->
                <div class="flex 2xl:gap-7.5 gap-2.5 sm:gap-3.5 ml-auto items-center">
                    <!-- Theme Toggle Button -->
                    <button type="button" class="theme-toggle-btn size-8 sm:size-10 lg:size-12 inline-flex items-center justify-center rounded-2lg border-2 dark:border-white border-secondary hover:bg-primary hover:border-primary transition-colors duration-300 cursor-pointer group">
                        <span class="dark:block hidden">
                            <svg width="18" height="18" class="sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-white group-hover:text-secondary group-hover:stroke-white transition-colors duration-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 2V4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 20V22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.93005 4.92999L6.34005 6.33999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.66 17.66L19.07 19.07" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12H4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 12H22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.34005 17.66L4.93005 19.07" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19.07 4.92999L17.66 6.33999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <span class="dark:hidden block">
                            <svg width="18" height="18" class="sm:w-5 sm:h-5 lg:w-6 lg:h-6 group-hover:stroke-white transition-colors duration-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 3C10.8065 4.19347 10.136 5.81217 10.136 7.5C10.136 9.18783 10.8065 10.8065 12 12C13.1935 13.1935 14.8122 13.864 16.5 13.864C18.1878 13.864 19.8065 13.1935 21 12C21 13.78 20.4722 15.5201 19.4832 17.0001C18.4943 18.4802 17.0887 19.6337 15.4442 20.3149C13.7996 20.9961 11.99 21.1743 10.2442 20.8271C8.49836 20.4798 6.89472 19.6226 5.63604 18.364C4.37737 17.1053 3.5202 15.5016 3.17294 13.7558C2.82567 12.01 3.0039 10.2004 3.68509 8.55585C4.36628 6.91131 5.51983 5.50571 6.99987 4.51677C8.47991 3.52784 10.22 3 12 3Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </button>
                    
                    <!-- Phone Number (Desktop Only) -->
                    <a href="tel:+1(123)456-78-90" class="max-lg:hidden text-sm sm:text-base lg:text-lg font-semibold capitalize dark:text-white text-secondary hover:text-primary dark:hover:text-primary transition-colors duration-300">
                        <i class="flaticon-phone-call mr-1.5 sm:mr-2.5 text-primary text-sm sm:text-base"></i>+1 (123) 456-78-90
                    </a>
                    
                    <!-- Register Button (Desktop Only) -->
                    <a href="{{ route('daftar') }}" class="btn group button--stroke flairBtn !pr-1 sm:!pr-1.25 pl-4 sm:pl-5 lg:pl-6.5 text-secondary max-2xl:hidden bg-primary border border-primary hover:!border-primary hover:bg-primary/90 transition-all duration-300 relative overflow-hidden">
                        <span class="button-flair absolute inset-0 bg-secondary transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></span>
                        <span class="button__label font-semibold pxl-button-text z-10 text-xs sm:text-sm lg:text-base relative">
                            Daftar Sekarang
                        </span>
                        <span class="inline-flex justify-center items-center size-7 sm:size-8 lg:size-10 ml-1.5 sm:ml-2 lg:ml-2.5 rounded-full bg-secondary group-hover:bg-primary text-primary group-hover:text-secondary duration-300 z-10 relative">
                            <svg class="group-hover:animate-bounce" width="14" height="14" class="sm:w-4 sm:h-4 lg:w-5 lg:h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="group-hover:stroke-secondary" d="M4.16663 10H15.8333" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="group-hover:stroke-secondary" d="M10 4.16666L15.8333 10L10 15.8333" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </a>
                    
                    <!-- Mobile Menu Hamburger -->
                    <button type="button" class="mobile-menu-btn relative xl:hidden flex items-center justify-center size-8 sm:size-10 lg:size-12 focus:outline-none group">
                        <span class="inline-block align-middle space-y-1.5 sm:space-y-2 lg:space-y-2.5">
                            <span class="bg-secondary dark:bg-white block h-0.5 w-5 sm:w-6 lg:w-7 duration-300 group-[.open]:rotate-45 group-[.open]:translate-y-2 sm:group-[.open]:translate-y-2.5 lg:group-[.open]:translate-y-3"></span>
                            <span class="bg-secondary dark:bg-white block h-0.5 w-3 sm:w-6 lg:w-7 duration-300 group-[.open]:opacity-0"></span>
                            <span class="bg-secondary dark:bg-white block h-0.5 w-5 sm:w-6 lg:w-7 duration-300 group-[.open]:-rotate-45 group-[.open]:-translate-y-2 sm:group-[.open]:-translate-y-2.5 lg:group-[.open]:-translate-y-3"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay fixed inset-0 bg-black/60 z-40 opacity-0 invisible transition-all duration-300"></div>

    <!-- Mobile Menu Sidebar (Left Position) -->
    <div class="mobile-menu-sidebar fixed inset-y-0 left-0 w-80 max-w-full bg-white dark:bg-gray-900 shadow-2xl z-50 transform -translate-x-full transition-transform duration-300 ease-in-out xl:hidden">
        <div class="h-full flex flex-col">
            <!-- Mobile Menu Header -->
            <div class="flex items-center justify-between p-4 bg-secondary rounded-b-lg">
                <a href="{{ route('home') }}" class="flex items-center">
                    <div class="size-10 sm:size-12 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full h-full text-primary dark:text-primary-light">
                            <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                            <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                            <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                        </svg>
                    </div>
                    <span class="ml-3 text-lg font-semibold text-white dark:text-gray-100">Menu</span>
                </a>
                <button type="button" class="mobile-menu-close-btn size-10 flex items-center justify-center rounded-lg hover:bg-white/20 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu Navigation dengan Active States -->
            <div class="flex-1 overflow-y-auto">
                <nav class="p-6">
                    <ul class="space-y-1">
                        <li>
                            <a href="{{ route('home') }}" class="flex items-center px-4 py-3 text-base font-medium rounded-lg transition-all duration-200
                                {{ request()->routeIs('home') 
                                    ? 'text-secondary dark:text-secondary-light bg-secondary/10 dark:bg-secondary/20 border-l-4 border-secondary dark:border-secondary-light' 
                                    : 'text-gray-400 hover:bg-gray-100 hover:text-primary' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('news.category', 'berita') }}" class="flex items-center px-4 py-3 text-base font-medium rounded-lg transition-all duration-200
                                {{ request()->is('berita*') || request()->routeIs('news.*')
                                    ? 'text-secondary dark:text-secondary-light bg-secondary/10 dark:bg-secondary/20 border-l-4 border-secondary dark:border-secondary-light' 
                                    : 'text-gray-400 hover:bg-gray-100 hover:text-primary' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                </svg>
                                Berita
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('gallery.index') }}" class="flex items-center px-4 py-3 text-base font-medium rounded-lg transition-all duration-200
                                {{ request()->routeIs('gallery.*')
                                    ? 'text-secondary dark:text-secondary-light bg-secondary/10 dark:bg-secondary/20 border-l-4 border-secondary dark:border-secondary-light' 
                                    : 'text-gray-400 hover:bg-gray-100 hover:text-primary' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Galeri
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profil') }}" class="flex items-center px-4 py-3 text-base font-medium rounded-lg transition-all duration-200
                                {{ request()->routeIs('profil')
                                    ? 'text-secondary dark:text-secondary-light bg-secondary/10 dark:bg-secondary/20 border-l-4 border-secondary dark:border-secondary-light' 
                                    : 'text-gray-400 hover:bg-gray-100 hover:text-primary' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                Profil Pondok
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('sejarah') }}" class="flex items-center px-4 py-3 text-base font-medium rounded-lg transition-all duration-200
                                {{ request()->routeIs('sejarah')
                                    ? 'text-secondary dark:text-secondary-light bg-secondary/10 dark:bg-secondary/20 border-l-4 border-secondary dark:border-secondary-light' 
                                    : 'text-gray-400 hover:bg-gray-100 hover:text-primary' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Sejarah
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Mobile Menu Footer -->
            <div class="p-6 bg-secondary rounded-t-lg">
                <div class="mb-6">
                    <h3 class="text-sm font-semibold text-primary uppercase tracking-wider mb-3">Hubungi Kami</h3>
                    <div class="space-y-2">
                        <a href="tel:+11234567890" class="flex items-center text-white hover:text-primary dark:hover:text-primary-light transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            +1 (123) 456-7890
                        </a>
                        <a href="mailto:info@pondokpesantren.com" class="flex items-center text-white hover:text-primary dark:hover:text-primary-light transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            info@pondokpesantren.com
                        </a>
                    </div>
                </div>
                <a href="{{ route('daftar') }}" class="block w-full text-center bg-primary dark:bg-primary-light text-white dark:text-gray-900 font-semibold py-3 px-4 rounded-lg hover:bg-primary/90 dark:hover:bg-primary-light/90 transition-colors duration-300 shadow-lg hover:shadow-xl">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileMenuCloseBtn = document.querySelector('.mobile-menu-close-btn');
    const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');
    const mobileMenuSidebar = document.querySelector('.mobile-menu-sidebar');
    const body = document.body;

    // Open mobile menu
    function openMobileMenu() {
        mobileMenuBtn.classList.add('open');
        mobileMenuOverlay.classList.remove('invisible', 'opacity-0');
        mobileMenuOverlay.classList.add('visible', 'opacity-100');
        mobileMenuSidebar.classList.remove('-translate-x-full');
        body.classList.add('overflow-hidden');
    }

    // Close mobile menu
    function closeMobileMenu() {
        mobileMenuBtn.classList.remove('open');
        mobileMenuOverlay.classList.remove('visible', 'opacity-100');
        mobileMenuOverlay.classList.add('invisible', 'opacity-0');
        mobileMenuSidebar.classList.add('-translate-x-full');
        body.classList.remove('overflow-hidden');
    }

    // Event Listeners
    mobileMenuBtn.addEventListener('click', openMobileMenu);
    mobileMenuCloseBtn.addEventListener('click', closeMobileMenu);
    mobileMenuOverlay.addEventListener('click', closeMobileMenu);

    // Close menu when clicking on mobile menu links
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu-sidebar a');
    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });

    // Close menu on ESC key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeMobileMenu();
        }
    });

    // Theme Toggle Functionality
    const themeToggleBtn = document.querySelector('.theme-toggle-btn');
    themeToggleBtn?.addEventListener('click', () => {
        const isDark = document.documentElement.classList.contains('dark');
        if (isDark) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }
    });

    // Check saved theme on load
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark' || (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    }
});
</script>