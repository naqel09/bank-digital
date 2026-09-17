{{--
    resources/views/partials/about-vision.blade.php

    Section "Landasan Strategis" — Visi, Misi & Komitmen Berkelanjutan.
    Pakai Tailwind CSS, konsisten dengan about-hero.blade.php.

    Cara pakai di halaman about:
    @include('partials.about-vision')

    Konten (label visi, judul, deskripsi, kutipan) ada di variabel
    $vision di bawah — ganti sesuai kebutuhan, atau kirim dari Controller.
--}}

@php
    $vision = $vision ?? [
        'eyebrow'     => 'Landasan Strategis',
        'title'       => 'Visi, Misi & Komitmen Berkelanjutan',
        'badge'       => 'Visi Korporasi 2030',
        'heading'     => 'Kedaulatan Finansial & Digital Nusantara',
        'description' => 'Menghadirkan infrastruktur perbankan mutakhir yang menjadi tulang punggung perekonomian digital Indonesia.',
        'quote'       => 'Menjadi institusi perbankan digital terdepan di Asia Tenggara yang mendorong inklusi keuangan berkelanjutan melalui kedaulatan teknologi nasional, keandalan ekosistem terbuka, dan perlindungan nilai aset masyarakat dengan standar tata kelola tertinggi.',
    ];
@endphp

<section class="bg-slate-50 py-16 sm:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Eyebrow + heading --}}
        <div class="mb-10">
            <div class="mb-3 flex items-center gap-2">
                <span class="h-4 w-1 rounded-sm bg-blue-600"></span>
                <span class="text-xs font-semibold uppercase tracking-wider text-blue-600">
                    {{ $vision['eyebrow'] }}
                </span>
            </div>
            <h2 class="text-2xl font-bold text-slate-900 sm:text-3xl">
                {{ $vision['title'] }}
            </h2>
        </div>

        {{-- Dark card --}}
        <div class="rounded-2xl bg-slate-900 p-6 shadow-xl ring-1 ring-slate-800 sm:p-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:items-center">

                {{-- Left: badge, heading, description --}}
                <div>
                    <span class="inline-block rounded-full bg-emerald-400/10 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-emerald-400">
                        {{ $vision['badge'] }}
                    </span>

                    <h3 class="mt-4 text-xl font-semibold leading-snug text-white sm:text-2xl">
                        {{ $vision['heading'] }}
                    </h3>

                    <p class="mt-3 max-w-md text-sm leading-relaxed text-slate-400">
                        {{ $vision['description'] }}
                    </p>
                </div>

                {{-- Right: quote box --}}
                <div class="rounded-xl bg-slate-800/60 p-6 ring-1 ring-inset ring-slate-700/60">
                    <p class="text-base font-medium leading-relaxed text-slate-100">
                        &ldquo;{{ $vision['quote'] }}&rdquo;
                    </p>
                </div>

            </div>
        </div>

    </div>
</section>