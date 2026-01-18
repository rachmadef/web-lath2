@extends('layouts.app')

@section('title', 'Profil Pondok')

@section('content')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <div class="page-content">
                <section class="2xl:pt-57 pt-30 2xl:pb-36.25 pb-10">
                    <div class="container relative flex">
                        <div class="row justify-center xl:gap-17.75 gap-5 mx-auto">
                            <div class="lg:w-[80%] w-full mb-7.5">
                                <div class="sm:pb-7.5 pb-3.75 text-center">
                                    <h1 class="2xl:text-7xl xl:text-5xl lg:text-4xxl sm:text-4xl text-3xl font-semibold headline mb-7.5 dark:text-white text-secondary">Profil Pondok Pesantren</h1>
                                    <div class="sm:mb-7.5 mb-5">
                                        <p class="text-base text-lightgreen dark:text-lightgrey">Al Wahabiyyah 1 & Al Lathifiyyah 2</p>
                                    </div>
                                    <div class="blog-slideshow swiper rounded-2xl">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img loading="lazy" src="images/bg.jpeg" alt="Profil Pondok" width="1600" height="960" class="size-full object-cover">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination-two absolute bottom-2.5 z-1 left-0 right-0 text-center"></div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 sm:gap-5">
                                    <div class="col-span-12">
                                        <div class="lg:mb-15 mb-7.5 xl:text-2xl sm:text-xl text-lg font-normal text-bodytext space-y-4">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            </p>
                                            <p>
                                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                            </p>
                                            <h2 class="text-3xl font-semibold text-secondary dark:text-white mt-5 mb-4">Visi dan Misi</h2>
                                            <p>
                                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                            </p>
                                            <h2 class="text-3xl font-semibold text-secondary dark:text-white mt-5 mb-4">Sejarah Pondok</h2>
                                            <p>
                                                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
                                            </p>
                                            <p>
                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                                            </p>
                                        </div>
                                        <div class="mb-7.5">
                                            <ul class="text-bodytext relative before:content-[''] before:absolute before:top-0 before:left-0 before:h-px before:w-full dark:before:bg-white/10 before:bg-black/10">
                                                <li class="inline-block px-2.25 sm:px-8.75 sm:py-6 py-3 first:ps-0">Kategori:</li>
                                                <li class="inline-block px-2.25 sm:px-8.75 sm:py-6 py-3 first:ps-0 dark:text-white text-secondary">Profil</li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection
