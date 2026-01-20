@extends('layouts.app')

@section('title', 'Daftar')

@section('content')
<div id="smooth-wrapper" class="py-12 pb-24">
    <div id="smooth-content">
        <div class="page-content">

            {{-- ================= HEADER SECTION ================= --}}
            <section>
                <div class="2xl:pt-0 2xl:pb-36 sm:pt-32 sm:pb-20 pt-10">
                    <div class="container-fluid 3xl:!mx-20 mx-5 pb-12">

                        {{-- Header Title --}}
                        <div class="text-center mb-16">
                            <h2 class="2xl:text-7xl xl:text-5xl lg:text-4xl sm:text-4xl text-3xl font-semibold text-secondary dark:text-primary mb-4">
                                Daftar Sekarang
                            </h2>
                            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                                Klik tombol di bawah untuk mendaftar atau pelajari informasi lengkap melalui panduan kami
                            </p>
                        </div>

                        {{-- ================= REGISTRATION BUTTONS ================= --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto mb-20">
                            @foreach([
                                ['https://s.id/psbwhb1','Daftar Putra'],
                                ['https://s.id/psblath2','Daftar Putri']
                            ] as [$link,$label])
                            <a href="{{ $link }}" 
                               target="_blank"
                               class="group relative flex items-center justify-between rounded-full border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 px-8 py-6 sm:px-4 sm:py-3 shadow-sm dark:shadow-black/40 transition-all duration-300 ease-out hover:-translate-y-1 hover:shadow-lg hover:border-primary">
                                <span class="text-xl font-semibold tracking-tight text-secondary dark:text-gray-100 group-hover:text-primary transition-colors">
                                    {{ $label }}
                                </span>
                                <span class="flex items-center justify-center w-12 h-12 rounded-full bg-primary/10 dark:bg-primary/20 text-primary transition-all duration-300 group-hover:bg-primary group-hover:text-white group-hover:scale-110">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </span>
                            </a>
                            @endforeach
                        </div>

                        {{-- ================= GUIDE SECTION ================= --}}
                        <div class="text-center mb-12">
                            <h3 class="text-3xl font-semibold text-secondary dark:text-primary mb-2">
                                Panduan Pendaftaran
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Klik poin berikut untuk melihat detail informasi
                            </p>
                        </div>

                        {{-- Guide Buttons Grid --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                            @php
                                $buttons = [
                                    ['modal1','Persyaratan','fa-list-check'],
                                    ['modal2','Prosedur','fa-route'],
                                    ['modal3','Biaya','fa-money-bill-wave'],
                                    ['modal4','Jadwal','fa-calendar-days'],
                                    ['modal5','Alur','fa-diagram-project'],
                                    ['modal6','Kontak','fa-location-dot'],
                                ];
                            @endphp

                            @foreach($buttons as [$id,$label,$icon])
                            <button onclick="openModal('{{ $id }}')"
                                    class="modal-btn group relative flex items-center justify-center gap-4 rounded-full px-4 py-3 border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 text-secondary dark:text-gray-100 shadow-sm dark:shadow-black/30 transition-all duration-300 ease-out hover:-translate-y-1 hover:shadow-xl hover:border-primary cursor-pointer">
                                <span class="flex items-center justify-center w-12 h-12 rounded-full bg-primary/10 dark:bg-primary/20 text-primary transition-all duration-300 group-hover:bg-primary group-hover:text-white group-hover:scale-110">
                                    <i class="fa-solid {{ $icon }}"></i>
                                </span>
                                <span class="text-lg font-semibold tracking-tight group-hover:text-primary transition-colors">
                                    {{ $label }}
                                </span>
                            </button>
                            @endforeach
                        </div>

                    </div>
                </div>
            </section>

            {{-- ================= MODAL BACKDROP ================= --}}
            <div id="modalBackdrop" 
                 class="fixed inset-0 z-50 hidden bg-black/60 dark:bg-black/80 backdrop-blur-sm transition-opacity"></div>

            {{-- ================= MODALS ================= --}}
            @foreach($contents as $key => $item)
            <div id="modal{{ $loop->iteration }}"
                 class="modal fixed inset-0 z-50 hidden flex items-center justify-center px-4 sm:px-6">
                <div class="w-full max-w-3xl max-h-[90vh] flex flex-col rounded-2xl shadow-2xl bg-white transform scale-95 opacity-0 transition-all duration-300">
                    
                    {{-- Modal Header --}}
                    <div class="flex items-center justify-center px-6 py-4 bg-secondary rounded-t-2xl">  {{-- Changed to bg-primary for consistency --}}
                        <h3 class="text-xl sm:text-2xl font-semibold text-white">  {{-- Changed to text-white for contrast --}}
                            {{ $item->title }}
                        </h3>
                    </div>

                    {{-- Modal Content --}}
                    <div class="overflow-y-auto flex-1 px-6 py-4 bg-white">  {{-- Forced bg-white and text-gray-900 --}}
                        <div class="prose prose-invert max-w-none prose-ol:list-decimal prose-ul:list-disc prose-ol:pl-6 prose-ul:pl-6 prose-li:marker:text-primary prose-li:my-1 prose-p:mb-2 prose-ol:mt-2 prose-ul:mt-2 prose-headings:text-emerald-900 prose-p:text-emerald-900 dark:prose-invert">  {{-- Added overrides for black text on white bg --}}
                            {!! $item->content !!}
                        </div>
                    </div>

                    {{-- Modal Footer --}}
                    <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200 bg-white rounded-b-2xl">  {{-- Changed to bg-white --}}
                        <button onclick="closeModal('modal{{ $loop->iteration }}')"
                                class="px-6 py-2.5 w-full rounded-lg bg-emerald-800 cursor-pointer text-white hover:bg-secondary transition font-medium">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

{{-- ================= SCRIPT ================= --}}
<script>
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    const backdrop = document.getElementById('modalBackdrop');

    backdrop.classList.remove('hidden');
    modal.classList.remove('hidden');

    setTimeout(() => {
        modal.querySelector('div').classList.remove('scale-95', 'opacity-0');
        modal.querySelector('div').classList.add('scale-100', 'opacity-100');
    }, 10);

    document.body.style.overflow = 'hidden';
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    const backdrop = document.getElementById('modalBackdrop');

    modal.querySelector('div').classList.add('scale-95', 'opacity-0');

    setTimeout(() => {
        modal.classList.add('hidden');
        backdrop.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }, 300);
}

document.getElementById('modalBackdrop').addEventListener('click', () => {
    const open = document.querySelector('.modal:not(.hidden)');
    if (open) closeModal(open.id);
});

document.addEventListener('keydown', e => {
    if (e.key === 'Escape') {
        const open = document.querySelector('.modal:not(.hidden)');
        if (open) closeModal(open.id);
    }
});
</script>
<style>
/* Override untuk memastikan list muncul di modal */
.modal .prose ul {
    list-style-type: disc; /* Bullet default */
    padding-left: 1.5rem;
}
.modal .prose ol {
    list-style-type: decimal; /* Angka default */
    padding-left: 1.5rem;
}
.modal .prose li {
    margin-bottom: 0.25rem;
    color: #000000; /* Warna teks hitam */
}
.modal .prose li::marker {
    color: #000000; /* Warna marker sesuai primary (hijau) */
}
</style>
@endsection