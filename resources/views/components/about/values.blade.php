{{--
    resources/views/partials/about-values.blade.php

    Section "Nilai-Nilai Fundamental (Core Values)" dengan 4 kartu nilai
    di dalam panel biru muda. Pakai Tailwind CSS, konsisten dengan
    partial about lainnya.

    Cara pakai di halaman about:
    @include('partials.about-values')

    Konten (judul, subjudul, label kanan, daftar nilai) ada di variabel
    $values di bawah — ganti sesuai kebutuhan, atau kirim dari Controller.
--}}

@php
    $values = $values ?? [
        'title'    => 'Nilai-Nilai Fundamental (Core Values)',
        'subtitle' => 'Prinsip dasar yang memandu setiap baris kode dan keputusan perbankan kami.',
        'tag'      => 'Etika Kerja Terpercaya',
        'items'    => [
            [
                'title'       => 'Integritas Mutlak',
                'description' => 'Kepatuhan regulasi 100% dan transparansi total biaya tanpa syarat terselubung.',
                'icon'        => 'shield-check',
            ],
            [
                'title'       => 'Inovasi Cerdas',
                'description' => 'Menciptakan produk berbasis data yang relevan dengan kebutuhan dinamis masyarakat modern.',
                'icon'        => 'bulb',
            ],
            [
                'title'       => 'Keandalan Tangguh',
                'description' => 'Infrastruktur cloud berdaya tahan tinggi tanpa downtime transaksi di jam tersibuk.',
                'icon'        => 'refresh',
            ],
            [
                'title'       => 'Kemitraan Inklusif',
                'description' => 'Tumbuh bersama ekosistem terbuka bersama merchant, mitra B2B, dan regulator.',
                'icon'        => 'handshake',
            ],
        ],
    ];
@endphp

<section class="bg-white py-4 sm:py-6">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="rounded-2xl bg-blue-50/70 p-6 sm:p-8">

            {{-- Header --}}
            <div class="flex flex-col justify-between gap-3 sm:flex-row sm:items-start">
                <div>
                    <h2 class="text-lg font-bold text-slate-900 sm:text-xl">
                        {{ $values['title'] }}
                    </h2>
                    <p class="mt-1 text-sm text-slate-500">
                        {{ $values['subtitle'] }}
                    </p>
                </div>

                <span class="shrink-0 text-xs font-semibold uppercase tracking-wide text-blue-600">
                    {{ $values['tag'] }}
                </span>
            </div>

            {{-- Cards --}}
            <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($values['items'] as $item)
                    <div class="rounded-xl border border-slate-200 bg-white p-5">
                        <div class="flex items-center gap-2">
                            <span class="text-blue-600">
                                @switch($item['icon'])
                                    @case('shield-check')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 3l7 3v6c0 4.5-3 8-7 9-4-1-7-4.5-7-9V6l7-3Z" />
                                            <path d="M9.5 12.5 11 14l3.5-3.5" />
                                        </svg>
                                        @break

                                    @case('bulb')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 18h6" />
                                            <path d="M10 21h4" />
                                            <path d="M12 3a6 6 0 0 0-3.5 10.9c.6.4.9 1 .9 1.7V16h5.2v-.4c0-.7.3-1.3.9-1.7A6 6 0 0 0 12 3Z" />
                                        </svg>
                                        @break

                                    @case('refresh')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 4v5h5" />
                                            <path d="M20 20v-5h-5" />
                                            <path d="M4.5 15a8 8 0 0 0 14.1 3.1L20 20" />
                                            <path d="M19.5 9A8 8 0 0 0 5.4 5.9L4 4" />
                                        </svg>
                                        @break

                                    @case('handshake')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m2 12 4.5-4.5a2 2 0 0 1 2.8 0L11 9" />
                                            <path d="m22 12-4.5-4.5a2 2 0 0 0-2.8 0L13 9l-3 3 1.5 1.5a1.6 1.6 0 0 0 2.3 0" />
                                            <path d="m9 11 3 3" />
                                            <path d="M2 12v5a1 1 0 0 0 1 1h2" />
                                            <path d="M22 12v5a1 1 0 0 1-1 1h-2" />
                                        </svg>
                                        @break
                                @endswitch
                            </span>

                            <h3 class="text-sm font-semibold text-slate-900">
                                {{ $item['title'] }}
                            </h3>
                        </div>

                        <p class="mt-2 text-xs leading-relaxed text-slate-500">
                            {{ $item['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>