{{--
    Section: Karir & Hubungan Investor
    Letakkan file ini di: resources/views/partials/about-career-investor.blade.php
    Lalu panggil di halaman about dengan: @include('partials.about-career-investor')

    Membutuhkan Tailwind CSS (dan opsional heroicons/svg inline seperti di bawah).
--}}

<section class="py-12 px-4 sm:px-6 lg:px-8 bg-gray-50">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- Card 1: Lowongan Karir --}}
        <div class="relative rounded-2xl bg-slate-900 p-8 flex flex-col justify-between overflow-hidden">
            <div>
                <span class="inline-block text-xs font-medium text-emerald-300 bg-emerald-400/10 border border-emerald-400/20 rounded-full px-3 py-1">
                    Peluang Karir Terbuka
                </span>

                <h3 class="mt-5 text-2xl font-semibold text-white leading-snug">
                    Bangun Masa Depan Ekosistem FinTech Bersama Kami
                </h3>

                <p class="mt-4 text-slate-400 leading-relaxed">
                    Kami mencari rekayasawan perangkat lunak, analis kuantitatif, arsitek keamanan siber,
                    dan inovator produk yang berambisi membawa nama Indonesia ke panggung global.
                </p>
            </div>

            <div class="mt-8 flex items-center gap-4 flex-wrap">
                <a href=""
                    class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-500 transition-colors text-white font-medium text-sm rounded-xl px-5 py-3">
                    Jelajahi {{ $openPositionsCount ?? 24 }}+ Lowongan Aktif
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <span class="text-xs text-slate-500 leading-snug">
                    Penempatan SCBD Jakarta &amp; Hybrid Remote
                </span>
            </div>
        </div>

        {{-- Card 2: Sekretariat Perusahaan --}}
        <div class="rounded-2xl bg-white border border-gray-200 shadow-sm p-8 flex flex-col justify-between">
            <div>
                <span class="inline-block text-xs font-medium text-blue-700 bg-blue-50 border border-blue-100 rounded-full px-3 py-1">
                    Sekretariat Perusahaan
                </span>

                <h3 class="mt-5 text-2xl font-semibold text-gray-900 leading-snug">
                    Hubungan Investor, Media &amp; Kemitraan Strategis
                </h3>

                <p class="mt-4 text-gray-500 leading-relaxed">
                    Dukungan khusus untuk institusi keuangan mitra, analis bursa saham,
                    kemitraan API Banking B2B, serta pertanyaan media &amp; pers.
                </p>

                <ul class="mt-6 space-y-3 text-sm">
                    <li class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        <span class="text-gray-500">Investor Relations:</span>
                        <a href="mailto:investor@bankdigital.co.id" class="text-blue-600 hover:underline">investor@bankdigital.co.id</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-9-8.25V16.5A2.25 2.25 0 0 0 4.5 18.75h15A2.25 2.25 0 0 0 21.75 16.5V6.75A2.25 2.25 0 0 0 19.5 4.5h-15A2.25 2.25 0 0 0 2.25 6.75Z" />
                        </svg>
                        <span class="text-gray-500">Pertanyaan Media &amp; Pers:</span>
                        <a href="mailto:media@bankdigital.co.id" class="text-blue-600 hover:underline">media@bankdigital.co.id</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h1.5a1.5 1.5 0 0 0 1.5-1.5v-2.25a1.5 1.5 0 0 0-1.5-1.5h-2.25a1.5 1.5 0 0 0-1.5 1.5v.75a12.75 12.75 0 0 1-9-9h.75a1.5 1.5 0 0 0 1.5-1.5V4.5a1.5 1.5 0 0 0-1.5-1.5H3.75a1.5 1.5 0 0 0-1.5 1.5v2.25Z" />
                        </svg>
                        <span class="text-gray-500">Hotline Korporat SCBD:</span>
                        <a href="tel:+622150988888" class="text-blue-600 hover:underline">(021) 5098-8888 ext. 102</a>
                    </li>
                </ul>
            </div>

            <div class="mt-8 flex items-center gap-6 flex-wrap">
                <a href=""
                    class="inline-flex items-center gap-2 bg-blue-50 hover:bg-blue-100 transition-colors text-blue-700 font-medium text-sm rounded-xl px-5 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.126A59.77 59.77 0 0 1 21.485 12 59.77 59.77 0 0 1 3.27 20.875L6 12Zm0 0h7.5" />
                    </svg>
                    Hubungi Sekretariat
                </a>
                <a href="" class="inline-flex items-center gap-1 text-blue-600 hover:underline text-sm font-medium">
                    Jadwalkan Kunjungan Fisik SCBD
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                </a>
            </div>
        </div>

    </div>
</section>