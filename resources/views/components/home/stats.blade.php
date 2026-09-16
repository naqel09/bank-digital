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