<!-- resources/views/components/footer.blade.php -->
<footer class="w-full bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">

            {{-- Kolom 1: Brand & Regulasi --}}
            <div class="md:col-span-1">
                <div class="flex items-center gap-2">
                    <div class="w-7 h-7 bg-blue-600 rounded-full flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <span class="font-bold text-gray-900 text-sm">Bank Digital Indonesia</span>
                </div>

                <p class="text-sm text-gray-500 mt-4 leading-relaxed">
                    Inovasi perbankan digital generasi baru dengan kepatuhan institusional tingkat tinggi, likuiditas real-time BI-FAST, dan proteksi aset menyeluruh.
                </p>

                <div class="mt-5 bg-blue-50 rounded-xl p-4">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-xs font-semibold text-gray-900">REGULASI &amp; PENGAWASAN RESMI</p>
                    </div>
                    <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                        Berizin dan diawasi oleh Otoritas Jasa Keuangan (OJK) serta merupakan peserta penjaminan Lembaga Penjamin Simpanan (LPS).
                    </p>
                </div>
            </div>

            {{-- Kolom 2: Produk Simpanan --}}
            <div>
                <p class="text-sm font-semibold text-gray-900 mb-4">Produk Simpanan</p>
                <ul class="space-y-3 text-sm text-gray-500">
                    <li><a href="#" class="hover:text-blue-600 transition">Tabungan Fleksibel</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition">Deposito Berjangka Max</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition">Kartu Virtual &amp; Fisik</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition">Treasury Korporat</a></li>
                </ul>
            </div>

            {{-- Kolom 3: Bantuan & Panduan --}}
            <div>
                <p class="text-sm font-semibold text-gray-900 mb-4">Bantuan &amp; Panduan</p>
                <ul class="space-y-3 text-sm text-gray-500">
                    <li><a href="#" class="hover:text-blue-600 transition">Struktur Biaya &amp; Limit</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition">Pusat Keamanan Akun</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition">Kebijakan Privasi</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition">Syarat &amp; Ketentuan</a></li>
                </ul>
            </div>

            {{-- Kolom 4: Hubungi Kami --}}
            <div>
                <p class="text-sm font-semibold text-gray-900 mb-4">Hubungi Kami</p>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Layanan Nasabah Prioritas 24 Jam Non-Stop.
                </p>
                <p class="text-base font-bold text-gray-900 mt-3">085231869051</p>
                <a href="mailto:care@bankdigital.id" class="text-sm text-blue-600 hover:underline">care@bankdigital.id</a>

                <div class="mt-4 inline-flex items-center gap-2 bg-blue-50 text-blue-700 text-xs font-medium px-3 py-1.5 rounded-full">
                    <span class="w-1.5 h-1.5 bg-blue-600 rounded-full"></span>
                    Sistem Operasional Normal
                </div>
            </div>

        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="text-xs text-gray-400">
                &copy; {{ date('Y') }} PT Bank Digital Indonesia Tbk. All rights reserved.
            </p>
            <div class="flex items-center gap-6 text-xs text-gray-500">
                <a href="#" class="hover:text-blue-600 transition">Privasi</a>
                <a href="#" class="hover:text-blue-600 transition">Ketentuan Hukum</a>
                <a href="#" class="hover:text-blue-600 transition">Biaya Regulasi</a>
            </div>
        </div>
    </div>
</footer>