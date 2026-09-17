{{--
    resources/views/partials/about-pillars.blade.php

    Section 3 kartu "Pilar" strategis.
    Pakai Tailwind CSS, konsisten dengan partial about lainnya.

    Cara pakai di halaman about:
    @include('partials.about-pillars')

    Konten tiap pilar ada di array $pillars di bawah — ganti sesuai
    kebutuhan, atau kirim dari Controller.
--}}

@php
    $pillars = $pillars ?? [
        [
            'label'       => 'Pilar 01',
            'title'       => 'Transformasi Digital Berpusat Pada Manusia',
            'description' => 'Menyederhanakan kompleksitas transaksi finansial melalui antarmuka cerdas, proses onboarding kilat, dan layanan 24/7 tanpa friksi administratif yang membebani nasabah.',
            'icon'        => 'people',
        ],
        [
            'label'       => 'Pilar 02',
            'title'       => 'Perlindungan Kriptografi & Keamanan Tertinggi',
            'description' => 'Mengimplementasikan enkripsi tingkat militer (AES-256 & HSM), pemantauan anti-fraud kecerdasan buatan, serta audit berkala untuk menjaga keutuhan simpanan setiap detik.',
            'icon'        => 'shield',
        ],
        [
            'label'       => 'Pilar 03',
            'title'       => 'Akselerasi Pertumbuhan UMKM & Korporasi Lokal',
            'description' => 'Menyediakan API perbankan institusional, pembiayaan modal kerja cepat, dan manajemen kas pintar untuk memberdayakan pengusaha nasional tumbuh tanpa batas.',
            'icon'        => 'storefront',
        ],
    ];
@endphp

<section class="bg-white py-16 sm:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($pillars as $pillar)
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

                    <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                        @switch($pillar['icon'])
                            @case('people')
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="8" r="3.2" />
                                    <path d="M5.5 20c.7-3.4 3.3-5.5 6.5-5.5s5.8 2.1 6.5 5.5" />
                                    <path d="M9.5 8.6c-.2-.2-.5-.3-.8-.3a1.7 1.7 0 1 0 0 3.4" />
                                </svg>
                                @break

                            @case('shield')
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 3l7 3v6c0 4.5-3 8-7 9-4-1-7-4.5-7-9V6l7-3Z" />
                                </svg>
                                @break

                            @case('storefront')
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 9.5 4.5 4h15L21 9.5" />
                                    <path d="M3 9.5a2.5 2.5 0 0 0 5 0 2.5 2.5 0 0 0 5 0 2.5 2.5 0 0 0 5 0 2.5 2.5 0 0 0 5 0" />
                                    <path d="M5 10v9.5h14V10" />
                                    <path d="M10 19.5V14h4v5.5" />
                                </svg>
                                @break
                        @endswitch
                    </div>

                    <span class="text-xs font-semibold uppercase tracking-wide text-blue-600">
                        {{ $pillar['label'] }}
                    </span>

                    <h3 class="mt-2 text-lg font-semibold leading-snug text-slate-900">
                        {{ $pillar['title'] }}
                    </h3>

                    <p class="mt-3 text-sm leading-relaxed text-slate-500">
                        {{ $pillar['description'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>