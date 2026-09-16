{{-- ===== KALKULATOR SIMULASI DEPOSITO ===== --}}
<section class="w-full bg-slate-50 py-16">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
            x-data="{
                nominal: 50000000,
                tenor: 12,
                tenorOptions: [1, 3, 6, 12],
                rate: 5.75,
                get estimasiHasil() {
                    return Math.round(this.nominal * (this.rate / 100) * (this.tenor / 12));
                },
                get totalDana() {
                    return this.nominal + this.estimasiHasil;
                },
                formatRupiah(value) {
                    return 'Rp ' + Math.round(value).toLocaleString('id-ID');
                }
            }"
            class="bg-white rounded-3xl shadow-sm border border-slate-100 p-8"
        >
            {{-- Header --}}
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-8">
                <div>
                    <p class="text-xs font-bold tracking-widest uppercase text-blue-600 mb-1">Kalkulator Simulasi</p>
                    <h2 class="text-2xl font-bold text-slate-900">Simulasikan Pertumbuhan Uang Anda</h2>
                </div>
                <div class="inline-flex items-center gap-2 bg-slate-50 border border-slate-200 rounded-full px-4 py-2 text-sm text-slate-600 shrink-0">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                    </span>
                    Tingkat Bunga Terbaru: <strong class="text-slate-800">5.75% p.a.</strong>
                </div>
            </div>

            {{-- Body: 2 kolom --}}
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 items-start">

                {{-- ====== KIRI: Input ====== --}}
                <div class="lg:col-span-3 space-y-8">

                    {{-- Slider Nominal --}}
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <p class="text-sm font-semibold text-slate-700">Nominal Simpanan Deposito</p>
                            <span class="text-xl font-bold text-blue-600" x-text="formatRupiah(nominal)"></span>
                        </div>
                        <input
                            type="range"
                            min="1000000"
                            max="500000000"
                            step="1000000"
                            x-model.number="nominal"
                            class="w-full h-2 appearance-none rounded-full bg-slate-200 accent-blue-600 cursor-pointer"
                            style="background: linear-gradient(to right, #2563eb calc((var(--val, 50000000) - 1000000) / (500000000 - 1000000) * 100%), #e2e8f0 calc((var(--val, 50000000) - 1000000) / (500000000 - 1000000) * 100%))"
                            @input="$el.style.background = `linear-gradient(to right, #2563eb calc((${nominal} - 1000000) / (500000000 - 1000000) * 100%), #e2e8f0 calc((${nominal} - 1000000) / (500000000 - 1000000) * 100%))`"
                        >
                        <div class="flex justify-between text-xs text-slate-400 mt-2">
                            <span>Rp 1 Juta</span>
                            <span>Rp 250 Juta</span>
                            <span>Rp 500 Juta</span>
                        </div>
                    </div>

                    {{-- Pilihan Tenor --}}
                    <div>
                        <p class="text-sm font-semibold text-slate-700 mb-3">Pilihan Jangka Waktu</p>
                        <div class="grid grid-cols-4 gap-3">
                            <template x-for="opt in tenorOptions" :key="opt">
                                <button
                                    type="button"
                                    @click="tenor = opt"
                                    :class="tenor === opt
                                        ? 'bg-blue-600 text-white border-blue-600 shadow-md shadow-blue-200'
                                        : 'bg-white text-slate-600 border-slate-200 hover:border-blue-300 hover:bg-blue-50'"
                                    class="text-sm font-semibold py-2.5 rounded-xl border transition-all duration-150"
                                >
                                    <span x-text="opt + ' Bulan'"></span>
                                </button>
                            </template>
                        </div>
                    </div>

                    {{-- Catatan --}}
                    <div class="bg-blue-50 rounded-2xl p-4 flex items-start gap-3 mt-3">
                        <svg class="w-4 h-4 text-blue-500 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Simulasi ini mengasumsikan suku bunga tetap 5.75% per tahun dengan perhitungan bunga majemuk bulanan. Pajak bunga simpanan sesuai regulasi perbankan Indonesia yang berlaku.
                        </p>
                    </div>
                </div>

                {{-- ====== KANAN: Hasil ====== --}}
                <div class="lg:col-span-2 bg-[#0F172A] rounded-2xl p-6 flex flex-col">
                    <p class="text-[10px] font-bold tracking-widest uppercase text-slate-400 mb-5">Rincian Estimasi Hasil</p>
                    {{-- Row: Suku Bunga Efektif --}}
                    <div class="flex items-center justify-between py-4 border-b border-slate-700">
                        <span class="text-sm text-slate-400">Suku Bunga Efektif</span>
                        <span class="text-sm font-bold text-green-400">5.75% p.a.</span>
                    </div>
                    {{-- Row: Estimasi Imbal Hasil --}}
                    <div class="flex items-center justify-between py-4 border-b border-slate-700">
                        <span class="text-sm text-slate-400">Estimasi Imbal Hasil</span>
                        <span class="text-sm font-bold text-green-400" x-text="'+' + formatRupiah(estimasiHasil)"></span>
                    </div>
                    {{-- Total --}}
                    <div class="pt-5 mb-6">
                        <p class="text-xs text-slate-400 mb-1.5">Total Dana di Akhir Periode</p>
                        <p class="text-3xl font-extrabold text-white tracking-tight" x-text="formatRupiah(totalDana)"></p>
                    </div>
                    {{-- CTA Button --}}
                    <a href="#" class="mt-auto w-full inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-500 active:bg-blue-700 text-white text-sm font-semibold px-6 py-3.5 rounded-2xl transition-all duration-150">
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