@extends('layouts.app')

@section('container')
<!-- resources/views/components/hero.blade.php -->
<section class="w-full bg-blue-100 from-slate-50 to-white py-16 lg:py-10 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            {{-- KIRI: Teks & CTA --}}
            <div>
                <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 text-xs font-medium px-3 py-1.5 rounded-full">
                    <span class="w-1.5 h-1.5 bg-blue-600 rounded-full"></span>
                    Inovasi Perbankan Generasi Baru &bull; Bebas Biaya Admin Selamanya
                </div>

                <h1 class="mt-5 text-3xl sm:text-4xl lg:text-[2.6rem] font-bold text-gray-900 leading-tight">
                    Satu Aplikasi untuk Kendali Finansial Penuh, Tumbuh Cerdas Setiap Hari
                </h1>

                <p class="mt-5 text-gray-500 text-base leading-relaxed max-w-xl">
                    Buka rekening online hanya 3 menit dari smartphone Anda. Nikmati bunga deposito hingga 5.75% p.a., gratis transfer antar bank tanpa batas dengan BI-FAST, dan proteksi keamanan perbankan berstandar ISO 27001.
                </p>

                <div class="mt-8 flex flex-wrap items-center gap-3">
                    <a href="#" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-sm px-6 py-3 rounded-full transition">
                        Buka Rekening Sekarang
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="#" class="inline-flex items-center gap-2 text-gray-700 hover:text-blue-600 font-semibold text-sm px-6 py-3 rounded-full border border-gray-200 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Lihat Demo Aplikasi
                    </a>
                </div>

                <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-3 text-sm text-gray-500">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Berizin OJK
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Dijamin LPS
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        256-Bit SSL
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v9a2 2 0 002 2z"/></svg>
                        Bunga Harian
                    </div>
                </div>
            </div>

            {{-- KANAN: Kartu Aplikasi --}}
            <div class="relative">

                {{-- Notifikasi bunga (mengambang, kanan atas) --}}
                <div class="absolute -top-6 right-4 z-20 bg-white shadow-lg rounded-2xl px-4 py-3 flex items-center gap-3 border border-gray-100">
                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Bunga Deposito Masuk</p>
                        <p class="text-sm font-bold text-green-600">+Rp 1.533.000 (Okt 2024)</p>
                    </div>
                </div>

                {{-- Kartu utama --}}
                <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-6 pt-8 relative z-10">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 bg-gray-900 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400">SALDO AKTIF UTAMA</p>
                                <p class="text-sm font-semibold text-gray-900">Kantong Utama IDR</p>
                            </div>
                        </div>
                        <span class="text-xs font-medium text-gray-400">•••</span>
                    </div>

                    <p class="text-xs text-gray-400 mt-6">Total Likuiditas &amp; Simpanan</p>
                    <p class="text-3xl font-bold text-gray-900 mt-1">Rp <span>148.520.000</span></p>
                    <p class="text-xs text-green-600 font-medium mt-1">
                        <span class="inline-flex items-center gap-1">
                            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                            +5.75% p.a.
                        </span>
                        <span class="text-gray-400 font-normal"> &bull; Akumulasi bunga bulan berjalan</span>
                    </p>

                    {{-- Aksi cepat --}}
                    <div class="grid grid-cols-4 gap-3 mt-6">
                        <button class="flex flex-col items-center gap-2 bg-blue-600 rounded-2xl py-3 hover:bg-blue-700 transition">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            <span class="text-[11px] font-medium text-white">Transfer</span>
                        </button>
                        <button class="flex flex-col items-center gap-2 bg-gray-900 rounded-2xl py-3 hover:bg-gray-800 transition">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            <span class="text-[11px] font-medium text-white">Top Up</span>
                        </button>
                        <button class="flex flex-col items-center gap-2 bg-gray-100 rounded-2xl py-3 hover:bg-gray-200 transition">
                            <svg class="w-4 h-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l3 13h9l3-13M6 7l1.5-4h9L18 7M6 7h12"/></svg>
                            <span class="text-[11px] font-medium text-gray-700">Deposito</span>
                        </button>
                        <button class="flex flex-col items-center gap-2 bg-gray-100 rounded-2xl py-3 hover:bg-gray-200 transition">
                            <svg class="w-4 h-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4h4v4H4V4zm0 8h4v4H4v-4zm8-8h4v4h-4V4zm0 8h4v4h-4v-4z"/></svg>
                            <span class="text-[11px] font-medium text-gray-700">QRIS</span>
                        </button>
                    </div>

                    {{-- Imbal hasil deposito --}}
                    <div class="mt-5 bg-gray-50 rounded-2xl p-4">
                        <div class="flex items-center justify-between">
                            <p class="text-xs text-gray-500">Imbal Hasil Deposito Max</p>
                        </div>
                        <svg class="w-full h-10 mt-2" viewBox="0 0 200 40" fill="none" preserveAspectRatio="none">
                            <path d="M0 32 C 40 30, 60 20, 90 22 C 120 24, 140 8, 200 4" stroke="#2563eb" stroke-width="2.5" fill="none" stroke-linecap="round"/>
                            <circle cx="200" cy="4" r="4" fill="#2563eb"/>
                        </svg>
                    </div>
                </div>

                {{-- Notifikasi transfer BI-FAST (mengambang, kiri bawah) --}}
                <div class="absolute -bottom-6 -left-4 z-20 bg-white shadow-lg rounded-2xl px-4 py-3 flex items-center gap-3 border border-gray-100">
                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Transfer BI-FAST Instan</p>
                        <p class="text-sm font-bold text-green-600">Rp 0 Biaya Admin</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- resources/views/components/stats.blade.php -->
<section class="w-full bg-white py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 divide-x divide-gray-200">

            {{-- 1. Nasabah Aktif --}}
            <div class="text-center px-4">
                <p class="text-3xl font-bold text-blue-600">1.8 Juta+</p>
                <p class="text-sm font-semibold text-gray-900 mt-2">Nasabah Aktif</p>
                <p class="text-xs text-gray-400 mt-1">Tersebar di 38 Provinsi Indonesia</p>
            </div>

            {{-- 2. Total Transaksi Tahunan --}}
            <div class="text-center px-4">
                <p class="text-3xl font-bold text-gray-900">Rp 24+ Triliun</p>
                <p class="text-sm font-semibold text-gray-900 mt-2">Total Transaksi Tahunan</p>
                <p class="text-xs text-gray-400 mt-1">Pemrosesan aman &amp; reliabel</p>
            </div>

            {{-- 3. Suku Bunga Deposito --}}
            <div class="text-center px-4">
                <p class="text-3xl font-bold text-green-600">5.75%</p>
                <p class="text-sm font-semibold text-gray-900 mt-2">Suku Bunga Deposito p.a.</p>
                <p class="text-xs text-gray-400 mt-1">Bunga optimal dibayar harian</p>
            </div>

            {{-- 4. Rating --}}
            <div class="text-center px-4">
                <p class="text-3xl font-bold text-gray-900">
                    4.9 <span class="text-sm font-medium text-gray-400">/ 5.0</span>
                </p>
                <div class="flex items-center justify-center gap-0.5 mt-2">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.955a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.447a1 1 0 00-.363 1.118l1.287 3.955c.299.921-.755 1.688-1.54 1.118l-3.367-2.447a1 1 0 00-1.176 0l-3.367 2.447c-.784.57-1.838-.197-1.539-1.118l1.286-3.955a1 1 0 00-.363-1.118L2.98 9.382c-.783-.57-.38-1.81.588-1.81h4.163a1 1 0 00.95-.69l1.286-3.955z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-xs text-gray-400 mt-1">120rb+ ulasan di App Store &amp; Play Store</p>
            </div>

        </div>
    </div>
</section>

<!-- resources/views/components/features.blade.php -->
<section class="w-full bg-blue-200 bg-slate-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="text-center max-w-2xl mx-auto">
            <p class="text-xs font-semibold text-blue-600 tracking-wide">KEUNGGULAN LAYANAN</p>
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-3">
                Mengapa Jutaan Orang Beralih ke Bank Digital?
            </h2>
            <p class="text-sm text-gray-500 mt-3 leading-relaxed">
                Teknologi cerdas yang membebaskan Anda dari antrean kantor cabang konvensional dan beban potongan biaya tersembunyi.
            </p>
        </div>

        {{-- Grid Kartu --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-12">

            @php
                $features = [
                    [
                        'icon' => 'wallet',
                        'title' => 'Kantong Tabungan & Deposito Fleksibel',
                        'desc' => 'Pisahkan kebutuhan sehari-hari, liburan, dan dana darurat ke dalam kantong khusus terpisah. Nikmati imbal hasil harian yang langsung dicairkan.',
                        'cta' => 'Pelajari Kantong Simpanan',
                    ],
                    [
                        'icon' => 'transfer',
                        'title' => 'Transfer BI-FAST Rp 0 Tanpa Batas',
                        'desc' => 'Kirim uang antar bank seketika dalam hitungan detik tanpa potongan biaya sepeser pun dengan integrasi resmi jalur BI-FAST Bank Indonesia.',
                        'cta' => 'Detail Limit Transaksi',
                    ],
                    [
                        'icon' => 'card',
                        'title' => 'Manajemen Kartu & Kendali Penuh',
                        'desc' => 'Buat kartu debit virtual instan untuk belanja online global, atur limit transaksi harian mandiri, dan bekukan kartu seketika melalui sentuhan jari.',
                        'cta' => 'Fitur Keamanan Kartu',
                    ],
                    [
                        'icon' => 'chart',
                        'title' => 'Analisis Finansial & Auto-Budgeting',
                        'desc' => 'Laporan pengeluaran otomatis terkategori rapi secara visual, membantu Anda membaca tren arus kas bulanan serta mengakselerasi rencana menabung.',
                        'cta' => 'Eksplorasi Analitik',
                    ],
                ];
            @endphp

            @foreach ($features as $item)
                <div class="bg-white rounded-2xl border border-gray-100 p-6 hover:shadow-md transition">
                    {{-- Icon --}}
                    <div class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center">
                        @switch($item['icon'])
                            @case('wallet')
                                <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 7a2 2 0 012-2h9l4 4v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 13a1 1 0 100-2 1 1 0 000 2z"/>
                                </svg>
                                @break
                            @case('transfer')
                                <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4M16 17H4m0 0l4 4m-4-4l4-4"/>
                                </svg>
                                @break
                            @case('card')
                                <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="6" width="18" height="12" rx="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18"/>
                                </svg>
                                @break
                            @case('chart')
                                <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 17l5-5 4 4 8-8m0 0h-5m5 0v5"/>
                                </svg>
                                @break
                        @endswitch
                    </div>

                    {{-- Judul --}}
                    <h3 class="text-sm font-semibold text-gray-900 mt-5 leading-snug">
                        {{ $item['title'] }}
                    </h3>

                    {{-- Deskripsi --}}
                    <p class="text-xs text-gray-500 mt-3 leading-relaxed">
                        {{ $item['desc'] }}
                    </p>

                    {{-- CTA --}}
                    <a href="#" class="inline-flex items-center gap-1 text-xs font-semibold text-blue-600 hover:text-blue-700 mt-5 transition">
                        {{ $item['cta'] }}
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</section>

<!-- resources/views/components/deposit-calculator.blade.php -->
{{-- Pastikan Alpine.js sudah dimuat di layout kamu, contoh via CDN di <head>:
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
--}}

<!-- resources/views/components/deposit-calculator.blade.php -->
{{-- Pastikan Alpine.js sudah dimuat di layout kamu, contoh via CDN di <head>:
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
--}}

<section class="w-full bg-white py-10">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
            x-data="depositCalculator()"
            class="border-t border-gray-200 pt-8"
        >
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-6">

                {{-- KIRI: Input Simulasi --}}
                <div class="lg:col-span-3">
                    {{-- Nominal --}}
                    <div class="flex items-center justify-between">
                        <label class="text-sm font-medium text-gray-700">Nominal Simpanan Deposito</label>
                        <span class="text-lg font-bold text-blue-600" x-text="formatRupiah(nominal)"></span>
                    </div>

                    <input
                        type="range"
                        min="1000000"
                        max="500000000"
                        step="1000000"
                        x-model.number="nominal"
                        class="w-full mt-4 accent-blue-600"
                    >
                    <div class="flex items-center justify-between text-xs text-gray-400 mt-1">
                        <span>Rp 1 Juta</span>
                        <span>Rp 250 Juta</span>
                        <span>Rp 500 Juta</span>
                    </div>

                    {{-- Jangka Waktu --}}
                    <p class="text-sm font-medium text-gray-700 mt-8">Pilihan Jangka Waktu</p>
                    <div class="grid grid-cols-4 gap-3 mt-4">
                        <template x-for="opt in tenorOptions" :key="opt">
                            <button
                                type="button"
                                @click="tenor = opt"
                                :class="tenor === opt
                                    ? 'bg-blue-600 text-white border-blue-600'
                                    : 'bg-gray-50 text-gray-700 border-gray-200 hover:bg-gray-100'"
                                class="text-sm font-medium py-2.5 rounded-xl border transition"
                            >
                                <span x-text="opt + ' Bulan'"></span>
                            </button>
                        </template>
                    </div>

                    {{-- Catatan --}}
                    <div class="mt-8 bg-blue-50 rounded-xl p-4 flex items-start gap-3">
                        <svg class="w-4 h-4 text-blue-600 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-xs text-gray-500 leading-relaxed">
                            Simulasi ini mengasumsikan suku bunga tetap 5.75% per tahun dengan perhitungan bunga majemuk bulanan. Pajak bunga simpanan sesuai regulasi perbankan Indonesia yang berlaku.
                        </p>
                    </div>
                </div>

                {{-- KANAN: Hasil Estimasi --}}
                <div class="lg:col-span-2 bg-gray-900 rounded-2xl p-6 flex flex-col">
                    <p class="text-xs font-semibold text-gray-400 tracking-wide">RINCIAN ESTIMASI HASIL</p>

                    <div class="flex items-center justify-between mt-5">
                        <span class="text-sm text-gray-400">Suku Bunga Efektif</span>
                        <span class="text-sm font-semibold text-green-400">5.75% p.a.</span>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <span class="text-sm text-gray-400">Estimasi Imbal Hasil</span>
                        <span class="text-sm font-semibold text-green-400" x-text="'+' + formatRupiah(estimasiHasil)"></span>
                    </div>

                    <div class="border-t border-gray-700 mt-5 pt-5">
                        <p class="text-xs text-gray-400">Total Dana di Akhir Periode</p>
                        <p class="text-2xl font-bold text-white mt-1" x-text="formatRupiah(totalDana)"></p>
                    </div>

                    <a href="#" class="mt-auto inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-6 py-4 rounded-full transition">
                        Mulai Menabung Sekarang
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    function depositCalculator() {
        return {
            nominal: 50000000,
            tenor: 12,
            tenorOptions: [1, 3, 6, 12],
            rate: 5.75,

            get estimasiHasil() {
                // Bunga sederhana proporsional terhadap jangka waktu (bulan)
                return Math.round(this.nominal * (this.rate / 100) * (this.tenor / 12));
            },

            get totalDana() {
                return this.nominal + this.estimasiHasil;
            },

            formatRupiah(value) {
                return 'Rp ' + Math.round(value).toLocaleString('id-ID');
            }
        }
    }
</script>
@endsection