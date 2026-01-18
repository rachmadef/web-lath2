<header class="absolute top-0 left-0 w-full z-99 site-header header-2 duration-500">
    <!-- main header -->
    <div class="main-bar-wraper">
        <div class="container-fluid px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between 2xl:gap-5 gap-3 py-4 sm:py-5 2xl:mx-15 mx-0">
                <div class="logo 2xl:me-5 h-8 w-8 sm:h-10 sm:w-10">
                    <div class="dark:inline-block hidden">
                        <a href="{{ route('home') }}" class="flex items-center justify-center">
                            <!-- Heroicon: Home Modern (sesuai untuk pondok pesantren) -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 text-secondary hover:text-primary dark:text-white">
                                <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                                <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                            </svg>
                        </a>
                    </div>
                    <div class="dark:hidden block">
                        <a href="{{ route('home') }}" class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 text-secondary">
                                <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                                <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="header-nav navbar-collapse full-sidenav custom-scroll">
                    <div class="logo xl:hidden xl:mb-0 mb-8 sm:mb-12.5">
                        <div class="dark:block hidden">
                            <a href="index.html" class="flex items-center justify-center h-12 w-12">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1.09M4.5 8.205l3-1.09m12.75 3.91l-4.5 1.637m-7.5-1.637l4.5 1.637" />
                                </svg>
                            </a>
                        </div>
                        <div class="dark:hidden block">
                            <a href="index.html" class="flex items-center justify-center h-12 w-12">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full text-secondary">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1.09M4.5 8.205l3-1.09m12.75 3.91l-4.5 1.637m-7.5-1.637l4.5 1.637" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="xl:hidden block">
                        <div class="mb-5 sm:mb-7.5">
                            <div class="relative flex flex-wrap items-stretch w-full mb-4 sm:mb-5">
                                <input name="dzSearch" required="required" type="search" class="py-3 sm:py-3.75 text-sm sm:text-2sm outline-none flex-auto w-[1%] border-b border-secondary" placeholder="Search...">
                                <div class="absolute top-1/2 -translate-y-1/2 right-3 sm:right-3.75 z-9">
                                    <button name="submit" value="Submit" type="submit">
                                        <i class="fa-solid fa-magnifying-glass text-secondary text-sm sm:text-base"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav navbar xl:flex xl:w-auto w-full">
                        <li class="">
                            <a href="{{ route('home') }}" class="text-sm sm:text-base lg:text-lg"><span>Beranda</span></a>
                        </li>
                        <li>
                            <a href="{{ route('news.category', 'berita') }}">
                                Berita
                            </a>
                        </li>
                        <li><a href="{{ route('gallery.index') }}" class="text-sm sm:text-base lg:text-lg"><span>Galeri</span></a>
                        </li>
                        <li>
                            <a href="{{ route('profil') }}" class="nav-link {{ request()->routeIs('profil') ? 'active' : '' }}">
                                Profil Pondok
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('sejarah') }}" class="nav-link {{ request()->routeIs('sejarah') ? 'active' : '' }}">
                                Sejarah
                            </a>
                        </li>
                    </ul>
                    <div class="xl:hidden block">
                        <div class="mb-4 sm:mb-5">
                            <h3 class="text-secondary md:text-xl text-lg sm:text-2xl font-semibold"> Send a message </h3>
                            <a class="text-base sm:text-lg text-bodytext opacity-60 hover:opacity-100 block hover:underline" href="mailto:hello@example.com">hello@example.com</a>
                            <a class="text-base sm:text-lg text-bodytext opacity-60 hover:opacity-100 block hover:underline" href="mailto:hello@example.com">hello@example.com</a>
                        </div>
                        <div class="mb-4 sm:mb-5">
                            <h3 class="text-secondary md:text-xl text-lg sm:text-2xl font-semibold"> Call us </h3>
                            <a class="text-base sm:text-lg text-bodytext opacity-60 hover:opacity-100 block hover:underline" href="tel:12345678910">+1 234 567 8910</a>
                            <a class="text-base sm:text-lg text-bodytext opacity-60 hover:opacity-100 block hover:underline" href="tel:12345678910">+1 234 567 8910</a>
                        </div>
                        <div class="mb-4 sm:mb-5">
                            <h2 class="text-secondary md:text-xl text-lg sm:text-2xl font-semibold"> Visit Us </h2>
                            <a class="text-base sm:text-lg text-bodytext opacity-60 hover:opacity-100 block hover:underline" href="javasript:void(0);">Chicago HQ Estica Cop. Macomb, MI 48042</a>
                        </div>
                    </div>
                </div>
                <div class="flex 2xl:gap-7.5 gap-2.5 sm:gap-3.5 ml-auto items-center">
                    <button type="button" class="size-8 sm:size-10 lg:size-12 inline-flex items-center justify-center rounded-2lg border-2 dark:border-white border-secondary hover:bg-primary theme-btn cursor-pointer">
                        <span class="dark-theme dark:block hidden">
                            <svg width="18" height="18" sm:width="20" sm:height="20" lg:width="24" lg:height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="dark:stroke-[#fff]" d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" stroke="var(--secondary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="dark:stroke-[#fff]" d="M12 2V4" stroke="var(--secondary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="dark:stroke-[#fff]" d="M12 20V22" stroke="var(--secondary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="dark:stroke-[#fff]" d="M4.93005 4.92999L6.34005 6.33999" stroke="var(--secondary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="dark:stroke-[#fff]" d="M17.66 17.66L19.07 19.07" stroke="var(--secondary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="dark:stroke-[#fff]" d="M2 12H4" stroke="var(--secondary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="dark:stroke-[#fff]" d="M20 12H22" stroke="var(--secondary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="dark:stroke-[#fff]" d="M6.34005 17.66L4.93005 19.07" stroke="var(--secondary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="dark:stroke-[#fff]" d="M19.07 4.92999L17.66 6.33999" stroke="var(--secondary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <span class="light-theme dark:hidden block">
                            <svg width="18" height="18" sm:width="20" sm:height="20" lg:width="24" lg:height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 3C10.8065 4.19347 10.136 5.81217 10.136 7.5C10.136 9.18783 10.8065 10.8065 12 12C13.1935 13.1935 14.8122 13.864 16.5 13.864C18.1878 13.864 19.8065 13.1935 21 12C21 13.78 20.4722 15.5201 19.4832 17.0001C18.4943 18.4802 17.0887 19.6337 15.4442 20.3149C13.7996 20.9961 11.99 21.1743 10.2442 20.8271C8.49836 20.4798 6.89472 19.6226 5.63604 18.364C4.37737 17.1053 3.5202 15.5016 3.17294 13.7558C2.82567 12.01 3.0039 10.2004 3.68509 8.55585C4.36628 6.91131 5.51983 5.50571 6.99987 4.51677C8.47991 3.52784 10.22 3 12 3Z" stroke="var(--secondary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </button>
                    <a href="tel:+1(123)456-78-90" class="max-lg:hidden text-sm sm:text-base lg:text-lg font-semibold capitalize dark:text-white text-secondary"><i class="flaticon-phone-call mr-1.5 sm:mr-2.5 text-primary text-sm sm:text-base"></i>+1 (123) 456-78-90</a>
                    <a href="{{ route('daftar') }}" class="btn group button--stroke flairBtn !pr-1 sm:!pr-1.25 pl-4 sm:pl-5 lg:pl-6.5 text-secondary max-2xl:hidden bg-primary border border-primary hover:!border-primary">
                        <span class="button-flair"></span>
                        <span class="button__label font-semibold pxl-button-text z-0 text-xs sm:text-sm lg:text-base">Daftar Sekarang</span>
                        <span class="inline-flex justify-center items-center size-7 sm:size-8 lg:size-10 ml-1.5 sm:ml-2 lg:ml-2.5 rounded-full bg-secondary group-hover:bg-primary text-primary duration-100 z-0">
                            <svg class="group-hover:animate-toLeftFromRight" width="14" height="14" sm:width="16" sm:height="16" lg:width="20" lg:height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="group-hover:stroke-secondary" d="M4.16663 10H15.8333" stroke="#B3E719" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="group-hover:stroke-secondary" d="M10 4.16666L15.8333 10L10 15.8333" stroke="#B3E719" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </a>
                    <div class="menu-btn relative xl:hidden flex items-center justify-center size-8 sm:size-10 lg:size-12">
                        <span class="inline-block align-middle space-y-1.5 sm:space-y-2 lg:space-y-2.5 toogle-btn">
                            <span class="bg-secondary dark:bg-white block h-0.5 w-5 sm:w-6 lg:w-7 duration-300"></span>
                            <span class="bg-secondary dark:bg-white block h-0.5 w-5 sm:w-6 lg:w-7 duration-300"></span>
                            <span class="bg-secondary dark:bg-white block h-0.5 w-5 sm:w-6 lg:w-7 duration-300"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>