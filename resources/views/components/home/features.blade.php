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