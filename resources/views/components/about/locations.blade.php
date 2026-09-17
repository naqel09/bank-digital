{{-- Leaflet CSS --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

@php
    $locations = $locations ?? [
        [
            'name'    => 'Kantor Pusat (HQ Jakarta)',
            'region'  => 'DKI Jakarta',
            'status'  => 'Operasional',
            'address' => 'Menara Digital Mandiri Lt. 28-32, SCBD Lot 11, Jl. Jend. Sudirman Kav. 52-53, Jakarta Selatan 12190',
            'hours'   => 'Senin - Jumat (09:00 - 17:00 WIB)',
            'phone'   => '(021) 5099-8888',
            'rating'  => '4.8 (1.240 Ulasan)',
            'lat'     => -6.2274,
            'lng'     => 106.8078,
            'active'  => true,
        ],
        [
            'name'    => 'Digital Hub Surabaya',
            'region'  => 'Jawa Timur',
            'status'  => null,
            'address' => 'Pakuwon Tower Lt. 15, Jl. Embong Malang No. 21-31, Surabaya 60261',
            'hours'   => '08:30 - 16:30 WIB',
            'tag'     => 'Lounge Prioritas · Smart KYC Kiosk',
            'lat'     => -7.2659,
            'lng'     => 112.7378,
            'active'  => false,
        ],
        [
            'name'    => 'Experience Center Bandung',
            'region'  => 'Jawa Barat',
            'status'  => null,
            'address' => 'Dago Digital Complex Lt. 3, Jl. Ir. H. Juanda No. 108, Bandung 40132',
            'tag'     => 'Coworking Partner · Fintech Sandbox Hub',
            'lat'     => -6.8951,
            'lng'     => 107.6107,
            'active'  => false,
        ],
        [
            'name'    => 'Regional Hub Medan',
            'region'  => 'Sumatera Utara',
            'status'  => null,
            'address' => 'Podomoro City Office Tower Lt. 18, Jl. Putri Hijau No. 1, Medan',
            'lat'     => 3.5952,
            'lng'     => 98.6722,
            'active'  => false,
        ],
    ];

    $facilities = $facilities ?? [
        'Self-Service Smart Kiosk',
        'AI Banking Sandbox',
        'Private Wealth Lounge',
        'Security Ops Center (SOC)',
    ];
@endphp

<section class="bg-slate-50 py-16 sm:py-20" x-data="{ tab: 'kantor', activeIdx: 0 }">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Header --}}
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 lg:items-start">
            <div class="lg:col-span-7">
                <div class="mb-3 flex items-center gap-2">
                    <span class="h-4 w-1 rounded-sm bg-blue-600"></span>
                    <span class="text-xs font-semibold uppercase tracking-wider text-blue-600">Jaringan Kehadiran Fisik</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-900 sm:text-3xl">
                    Lokasi Kantor Pusat & Jaringan Layanan Nusantara
                </h2>
            </div>
            <div class="lg:col-span-5">
                <p class="text-sm leading-relaxed text-slate-500">
                    Kunjungi kantor pusat inovasi kami di SCBD Jakarta atau temukan
                    Digital Experience Center & Hub Operasional di berbagai kota besar Indonesia.
                </p>
            </div>
        </div>

        {{-- Content: list + map --}}
        <div class="mt-8 grid grid-cols-1 gap-6 lg:grid-cols-12">

            {{-- Left: tabs, search, location list --}}
            <div class="lg:col-span-5">
                <div class="rounded-2xl border border-slate-200 bg-white p-4">

                    {{-- Tabs --}}
                    <div class="flex rounded-lg bg-slate-100 p-1 text-sm">
                        <button type="button" @click="tab = 'kantor'"
                            :class="tab === 'kantor' ? 'bg-white shadow-sm text-slate-900' : 'text-slate-500'"
                            class="flex-1 rounded-md px-3 py-1.5 font-medium transition">
                            Kantor Pusat
                        </button>
                        <button type="button" @click="tab = 'hub'"
                            :class="tab === 'hub' ? 'bg-white shadow-sm text-slate-900' : 'text-slate-500'"
                            class="flex-1 rounded-md px-3 py-1.5 font-medium transition">
                            Digital Hub
                        </button>
                        <button type="button" @click="tab = 'lounge'"
                            :class="tab === 'lounge' ? 'bg-white shadow-sm text-slate-900' : 'text-slate-500'"
                            class="flex-1 rounded-md px-3 py-1.5 font-medium transition">
                            Prioritas Lounge
                        </button>
                    </div>

                    {{-- Search --}}
                    <div class="relative mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="7" /><path d="m21 21-4.3-4.3" />
                        </svg>
                        <input type="text" id="loc-search" placeholder="Cari kota atau nama kantor..."
                            class="w-full rounded-lg border border-slate-200 bg-slate-50 py-2 pl-9 pr-3 text-sm text-slate-700 placeholder:text-slate-400 focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"
                        />
                    </div>

                    {{-- Location list --}}
                    <div class="mt-4 max-h-[420px] space-y-1 overflow-y-auto" id="loc-list">
                        @foreach ($locations as $i => $loc)
                            <button type="button"
                                onclick="flyToLocation({{ $i }})"
                                id="loc-btn-{{ $i }}"
                                class="w-full rounded-lg px-2 py-3 text-left transition hover:bg-slate-50 {{ $loc['active'] ? 'bg-blue-50/60 ring-1 ring-blue-200' : '' }} loc-item"
                                data-name="{{ strtolower($loc['name']) }} {{ strtolower($loc['region']) }}">

                                <div class="flex items-start justify-between gap-2">
                                    <div class="flex items-center gap-2">
                                        <span class="mt-0.5 h-2 w-2 shrink-0 rounded-full {{ $loc['active'] ? 'bg-blue-600' : 'bg-slate-300' }}"></span>
                                        <span class="text-sm font-semibold text-slate-900">{{ $loc['name'] }}</span>
                                    </div>
                                    <span class="shrink-0 text-xs text-slate-400">{{ $loc['region'] }}</span>
                                </div>

                                @if (!empty($loc['status']))
                                    <span class="ml-4 mt-1 inline-block rounded-full bg-emerald-100 px-2 py-0.5 text-[11px] font-medium text-emerald-700">
                                        {{ $loc['status'] }}
                                    </span>
                                @endif

                                <p class="ml-4 mt-1 text-xs leading-relaxed text-slate-500">{{ $loc['address'] }}</p>

                                @if (!empty($loc['hours']) || !empty($loc['phone']))
                                    <div class="ml-4 mt-2 flex flex-wrap items-center gap-3 text-xs text-slate-500">
                                        @if (!empty($loc['hours']))
                                            <span class="flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                                                {{ $loc['hours'] }}
                                            </span>
                                        @endif
                                        @if (!empty($loc['phone']))
                                            <span class="flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.4 2.1L8 9.9a16 16 0 0 0 6 6l1.4-1.4a2 2 0 0 1 2.1-.4c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.7 2Z"/></svg>
                                                {{ $loc['phone'] }}
                                            </span>
                                        @endif
                                    </div>
                                @endif

                                @if (!empty($loc['tag']))
                                    <p class="ml-4 mt-2 text-xs text-slate-500">{{ $loc['tag'] }}</p>
                                @endif

                                @if (!empty($loc['rating']))
                                    <div class="ml-4 mt-2 flex items-center justify-between">
                                        <span class="flex items-center gap-1 text-xs font-medium text-amber-500">
                                            <svg class="h-3.5 w-3.5 fill-amber-400" viewBox="0 0 24 24"><path d="M12 2.5l2.9 6 6.6.6-5 4.4 1.5 6.5-6-3.6-6 3.6L7.5 13.5l-5-4.4 6.6-.6L12 2.5Z"/></svg>
                                            {{ $loc['rating'] }}
                                        </span>
                                        <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($loc['address']) }}" target="_blank" class="text-xs font-medium text-blue-600 hover:underline">Lihat Rute →</a>
                                    </div>
                                @endif
                            </button>
                            @if (!$loop->last)<div class="border-t border-slate-100"></div>@endif
                        @endforeach
                    </div>

                    {{-- Facilities --}}
                    <div class="mt-4 border-t border-slate-100 pt-4">
                        <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Fasilitas Standar di Setiap Hub</p>
                        <div class="mt-2 grid grid-cols-2 gap-x-3 gap-y-1.5">
                            @foreach ($facilities as $facility)
                                <span class="flex items-center gap-1.5 text-xs text-slate-600">
                                    <svg class="h-3.5 w-3.5 text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                                    {{ $facility }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            {{-- Right: Leaflet Map --}}
            <div class="lg:col-span-7">
                <div class="relative h-full min-h-[500px] overflow-hidden rounded-2xl border border-slate-200 shadow-sm">
                    <div id="leaflet-map" class="h-full min-h-[500px] w-full z-0"></div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Leaflet JS --}}
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
(function () {
    // Data lokasi
    const locations = @json($locations);

    // Inisialisasi peta — center di Indonesia
    const map = L.map('leaflet-map', {
        center: [-2.5, 117.0],
        zoom: 5,
        zoomControl: true,
        scrollWheelZoom: false,
    });

    // Basemap tile — OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        maxZoom: 18,
    }).addTo(map);

    // Custom icon biru
    function makeIcon(label, isActive) {
        return L.divIcon({
            className: '',
            html: `<div style="
                width:32px;height:32px;border-radius:50%;
                background:${isActive ? '#2563EB' : '#64748B'};
                border:3px solid white;
                box-shadow:0 2px 8px rgba(0,0,0,0.25);
                display:flex;align-items:center;justify-content:center;
                color:white;font-weight:700;font-size:13px;
                font-family:ui-sans-serif,system-ui,sans-serif;
            ">${label}</div>`,
            iconSize: [32, 32],
            iconAnchor: [16, 32],
            popupAnchor: [0, -36],
        });
    }

    // Tambahkan marker & popup untuk tiap lokasi
    const markers = locations.map((loc, i) => {
        const marker = L.marker([loc.lat, loc.lng], { icon: makeIcon(i + 1, loc.active) }).addTo(map);

        const popup = L.popup({ maxWidth: 260, className: 'bank-popup' }).setContent(`
            <div style="font-family:ui-sans-serif,system-ui,sans-serif;padding:4px 2px;">
                <div style="display:flex;align-items:center;gap:8px;margin-bottom:6px;">
                    <span style="width:22px;height:22px;border-radius:50%;background:#2563EB;color:white;font-size:11px;font-weight:700;display:flex;align-items:center;justify-content:center;flex-shrink:0;">${i+1}</span>
                    <span style="font-size:13px;font-weight:600;color:#0f172a;">${loc.name}</span>
                </div>
                <p style="font-size:11.5px;color:#64748b;margin:0 0 6px;line-height:1.5;">${loc.address}</p>
                ${loc.hours ? `<span style="font-size:11px;color:#64748b;">🕐 ${loc.hours}</span><br>` : ''}
                ${loc.phone ? `<span style="font-size:11px;color:#64748b;">📞 ${loc.phone}</span><br>` : ''}
                <a href="https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(loc.address)}" target="_blank"
                   style="display:inline-block;margin-top:8px;font-size:11.5px;font-weight:600;color:#2563EB;text-decoration:none;">
                   Lihat di Google Maps →
                </a>
            </div>
        `);

        marker.bindPopup(popup);

        // Klik marker → highlight list item
        marker.on('click', () => highlightListItem(i));

        return marker;
    });

    // Fungsi flyTo dipanggil dari tombol list
    window.flyToLocation = function (idx) {
        const loc = locations[idx];
        map.flyTo([loc.lat, loc.lng], 14, { duration: 1.2 });
        setTimeout(() => markers[idx].openPopup(), 800);
        highlightListItem(idx);
    };

    function highlightListItem(idx) {
        document.querySelectorAll('.loc-item').forEach((el, i) => {
            el.classList.toggle('bg-blue-50', i === idx);
            el.classList.toggle('ring-1', i === idx);
            el.classList.toggle('ring-blue-200', i === idx);
        });
    }

    // Search / filter list
    document.getElementById('loc-search').addEventListener('input', function () {
        const q = this.value.toLowerCase();
        document.querySelectorAll('.loc-item').forEach(el => {
            const match = el.dataset.name.includes(q);
            el.style.display = match ? '' : 'none';
        });
    });

    // Buka popup lokasi HQ (index 0) saat load
    setTimeout(() => {
        markers[0].openPopup();
    }, 500);
})();
</script>
