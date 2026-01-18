<style>
    /* Sembunyikan topbar default Filament */
    header.fi-header > div.fi-topbar {
        display: none !important;
    }
</style>

<div class="custom-topbar flex items-center gap-x-4 px-4 md:px-6 py-3 bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800">
    <div class="flex items-center gap-x-4 flex-1">
        {{-- Logo/Brand --}}
        <div class="flex items-center gap-x-3">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="h-10 w-10 rounded-full object-cover">
            <span class="text-xl font-bold text-gray-900 dark:text-white">Portal Berita</span>
        </div>
    </div>

    {{-- Search Bar & User Avatar --}}
    <div class="flex items-center gap-x-4">
        {{-- Search Bar --}}
        <div class="relative hidden md:block">
            <input 
                type="text" 
                placeholder="Search" 
                class="w-64 rounded-lg border-gray-300 bg-gray-50 px-4 py-2 pl-10 text-sm text-gray-900 placeholder-gray-400 focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-500 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:placeholder-gray-500 dark:focus:border-primary-500 dark:focus:ring-primary-500"
            >
            <svg class="absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>

        {{-- User Avatar --}}
        <div class="flex items-center gap-x-2">
            <div class="h-10 w-10 rounded-full bg-gray-800 dark:bg-gray-700 flex items-center justify-center cursor-pointer hover:bg-gray-700 dark:hover:bg-gray-600 transition-colors">
                <span class="text-white text-sm font-semibold">{{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}</span>
            </div>
        </div>
    </div>
</div>

