<div class="mb-6">
    <div class="rounded-xl border bg-white px-6 py-4">
        <h2 class="text-base font-semibold text-gray-900">
            Portal Berita
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Selamat datang kembali,
            <span class="font-medium text-gray-900">
                {{ auth()->user()->name }}
            </span>
        </p>

        <p class="mt-1 text-xs text-gray-500">
            {{ now()->translatedFormat('l, d F Y') }}
        </p>
    </div>
</div>
