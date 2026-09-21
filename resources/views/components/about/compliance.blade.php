{{--
    Section: Kepatuhan Regulasi & Jaminan Keamanan Tertinggi
    Cara pakai: simpan file ini di resources/views/partials/compliance-section.blade.php
    lalu panggil di halaman about kamu dengan:
        @include('partials.compliance-section')

    Membutuhkan Tailwind CSS (default di Laravel Breeze/Jetstream, atau install
    manual: https://tailwindcss.com/docs/guides/laravel)
--}}

<section class="bg-white py-16 px-4">
    <div class="max-w-5xl mx-auto">

        {{-- Eyebrow badge --}}
        <div class="flex justify-center mb-4">
            <span class="inline-block text-xs font-semibold text-blue-600 bg-blue-50 px-4 py-1.5 rounded-full">
                STANDAR PENGAWASAN INSTITUSIONAL
            </span>
        </div>

        {{-- Heading --}}
        <h2 class="text-2xl md:text-3xl font-bold text-center text-slate-900 mb-3">
            Kepatuhan Regulasi &amp; Jaminan Keamanan Tertinggi
        </h2>

        {{-- Subheading --}}
        <p class="text-center text-slate-500 max-w-2xl mx-auto mb-10 leading-relaxed">
            Kepercayaan Anda adalah fondasi eksistensi kami. Operasional kami diaudit secara independen
            dan tunduk pada regulasi perbankan Indonesia yang paling ketat.
        </p>

        {{-- 4 Feature Cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">

            {{-- Card 1: OJK --}}
            <div class="bg-slate-50 rounded-2xl p-6 text-center">
                <div class="w-12 h-12 mx-auto mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                    <svg class="w-7 h-7 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3l7 3v6c0 4.5-3 8-7 9-4-1-7-4.5-7-9V6l7-3z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-slate-900 mb-1">Berizin &amp; Diawasi OJK</h3>
                <p class="text-xs font-medium text-blue-600 mb-2">No. Kep-118/D.03/2021</p>
                <p class="text-sm text-slate-500 leading-relaxed">
                    Izin operasional bank digital berlisensi penuh di bawah pengawasan
                    Otoritas Jasa Keuangan Republik Indonesia.
                </p>
            </div>

            {{-- Card 2: LPS --}}
            <div class="bg-slate-50 rounded-2xl p-6 text-center">
                <div class="w-12 h-12 mx-auto mb-4 rounded-full bg-green-100 flex items-center justify-center">
                    <svg class="w-7 h-7 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M4 21V9l8-6 8 6v12M9 21v-6h6v6" />
                    </svg>
                </div>
                <h3 class="font-semibold text-slate-900 mb-1">Penjaminan LPS</h3>
                <p class="text-xs font-medium text-green-600 mb-2">Hingga Rp 2 Miliar / Nasabah</p>
                <p class="text-sm text-slate-500 leading-relaxed">
                    Seluruh saldo simpanan tabungan dan deposito dijamin resmi oleh
                    Lembaga Penjamin Simpanan sesuai ketentuan suku bunga.
                </p>
            </div>

            {{-- Card 3: ISO 27001 & PCI-DSS --}}
            <div class="bg-slate-50 rounded-2xl p-6 text-center">
                <div class="w-12 h-12 mx-auto mb-4 rounded-full bg-slate-200 flex items-center justify-center">
                    <svg class="w-7 h-7 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 10-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-slate-900 mb-1">ISO 27001 &amp; PCI&ndash;DSS</h3>
                <p class="text-xs font-medium text-slate-600 mb-2">Sertifikasi Keamanan Level 1</p>
                <p class="text-sm text-slate-500 leading-relaxed">
                    Sistem Manajemen Keamanan Informasi terverifikasi internasional
                    dengan kepatuhan pemrosesan kartu debit global.
                </p>
            </div>

            {{-- Card 4: Audit Independen --}}
            <div class="bg-slate-50 rounded-2xl p-6 text-center">
                <div class="w-12 h-12 mx-auto mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                    <svg class="w-7 h-7 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-slate-900 mb-1">Audit Independen</h3>
                <p class="text-xs font-medium text-blue-600 mb-2">Opini WTP Berturut-turut</p>
                <p class="text-sm text-slate-500 leading-relaxed">
                    Laporan keuangan tahunan dan audit penetrasi siber rutin
                    dievaluasi oleh Kantor Akuntan Publik Big Four internasional.
                </p>
            </div>

        </div>

        {{-- Bottom transparency bar --}}
        <div class="bg-blue-50 rounded-2xl p-5 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <svg class="w-7 h-7 text-blue-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m0 0a2 2 0 002 2h2a2 2 0 002-2v-3a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                </svg>
                <div>
                    <p class="font-semibold text-slate-900">Pusat Transparansi Finansial Publik</p>
                    <p class="text-sm text-slate-500">
                        Akses publikasi laporan keuangan bulanan, kuartalan, dan tata kelola GCG kami secara terbuka.
                    </p>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-3 shrink-0">
                <a href="#" class="bg-white border border-slate-200 text-slate-700 text-sm font-medium px-4 py-2 rounded-lg hover:bg-slate-50 transition-colors whitespace-nowrap">
                    Unduh Laporan GCG 2024
                </a>
                <a href="#" class="bg-blue-600 text-white text-sm font-medium px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors whitespace-nowrap">
                    Keterbukaan Informasi BEI
                </a>
            </div>
        </div>

    </div>
</section>