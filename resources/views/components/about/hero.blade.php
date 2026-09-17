{{--
    resources/views/partials/about-hero.blade.php

    Section "Tentang Kami" untuk halaman About.
    Pakai Tailwind CSS (sudah default di banyak starter kit Laravel:
    Breeze / Jetstream). Kalau project belum pakai Tailwind, tinggal
    kabari saya dan saya buatkan versi CSS murni.

    Cara pakai di halaman about:
    @include('partials.about-hero')

    Semua teks & angka statistik ada di variabel $stats di bawah,
    silakan ganti sesuai data asli (atau lempar dari Controller).
--}}

@php
    $stats = $stats ?? [
        [
            'label' => 'Nasabah Aktif',
            'value' => '1.8 Juta+',
            'note'  => '+42% Pertumbuhan Tahunan',
            'trend' => 'up',
            'icon'  => 'users',
        ],
        [
            'label' => 'Volume Transaksi',
            'value' => 'Rp 24+ Triliun',
            'note'  => 'Settled Real-Time BI-FAST',
            'trend' => null,
            'icon'  => 'swap',
        ],
        [
            'label' => 'Keandalan Sistem',
            'value' => '99.99%',
            'note'  => 'Dual Disaster Recovery Datacenter',
            'trend' => null,
            'icon'  => 'bolt',
        ],
        [
            'label' => 'Cakupan Nasional',
            'value' => '34 Provinsi',
            'note'  => '514 Kota & Kabupaten Terjangkau',
            'trend' => null,
            'icon'  => 'map',
        ],
    ];
@endphp

<section class="relative overflow-hidden bg-gradient-to-br from-slate-50 via-blue-50/40 to-slate-100 py-16 sm:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Top row: heading + description --}}
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-12 lg:gap-8">

            <div class="lg:col-span-7">
                {{-- Eyebrow badge --}}
                <div class="mb-6 inline-flex items-center gap-2 rounded-full bg-blue-100/70 px-4 py-1.5 text-sm text-blue-700 ring-1 ring-inset ring-blue-200">
                    <span class="font-medium">Tentang Kami</span>
                    <span class="text-blue-400">•</span>
                    <span>PT Bank Digital Indonesia Tbk</span>
                    <span class="ml-1 rounded-full bg-white px-2 py-0.5 text-xs font-medium text-slate-500 ring-1 ring-inset ring-slate-200">
                        Kode Saham: BDIN (IDX)
                    </span>
                </div>

                <h1 class="text-3xl font-bold leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-[2.65rem]">
                    Mendefinisikan Ulang Masa Depan
                    <span class="block text-blue-600">Perbankan Digital</span>
                    Indonesia
                </h1>
            </div>

            <div class="lg:col-span-5 lg:pt-2">
                <p class="text-base leading-relaxed text-slate-500">
                    Berdiri di persimpangan inovasi teknologi finansial mutakhir dan
                    tata kelola perbankan berstandar global, kami berdedikasi membuka
                    akses finansial yang adil, transparan, dan aman bagi jutaan
                    masyarakat dan pelaku usaha di seluruh Nusantara.
                </p>
            </div>
        </div>

        {{-- Stat cards --}}
        <div class="mt-12 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($stats as $stat)
                <div class="rounded-2xl border border-slate-200/70 bg-white/70 p-5 shadow-sm backdrop-blur-sm">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-medium uppercase tracking-wide text-slate-400">
                            {{ $stat['label'] }}
                        </span>

                        <span class="text-blue-500">
                            @switch($stat['icon'])
                                @case('users')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                    @break

                                @case('swap')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M7 3v18" />
                                        <path d="M17 3v18" />
                                        <path d="M3 7h8" />
                                        <path d="M13 17h8" />
                                        <path d="M17 3l4 4-4 4" />
                                        <path d="M7 21l-4-4 4-4" />
                                    </svg>
                                    @break

                                @case('bolt')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M13 2 3 14h7l-1 8 10-12h-7l1-8Z" />
                                    </svg>
                                    @break

                                @case('map')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 20 3 17V4l6 3 6-3 6 3v13l-6-3-6 3Z" />
                                        <path d="M9 4v13" />
                                        <path d="M15 7v13" />
                                    </svg>
                                    @break
                            @endswitch
                        </span>
                    </div>

                    <div class="mt-3 text-2xl font-bold text-slate-900">
                        {{ $stat['value'] }}
                    </div>

                    <div class="mt-2 flex items-center gap-1.5 text-xs text-slate-500">
                        @if ($stat['trend'] === 'up')
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-emerald-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M23 6 13.5 15.5 8.5 10.5 1 18" />
                                <path d="M17 6h6v6" />
                            </svg>
                            <span class="font-medium text-emerald-600">{{ $stat['note'] }}</span>
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-emerald-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                            <span>{{ $stat['note'] }}</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>