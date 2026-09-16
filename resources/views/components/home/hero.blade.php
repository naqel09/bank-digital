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