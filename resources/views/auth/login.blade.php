@extends('layouts.app')

@section('container')
    <div class="min-h-screen flex items-center justify-center px-4 py-10">
        <div class="w-full max-w-6xl">

            {{-- Badge status layanan --}}
            <div
                class="inline-flex items-center gap-2 bg-white border border-slate-200 rounded-full px-4 py-1.5 mb-8 text-xs font-medium text-slate-600 shadow-sm">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
                </span>
                <span class="uppercase text-[10px] font-bold tracking-wider text-slate-500">Layanan Perbankan Aktif 24/7 &bull; BI-FAST Optimal</span>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">

                {{-- Kolom kiri: headline & fitur --}}
                <div>
                    <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 leading-tight">
                        Akses Perbankan Digital yang
                        <span class="block text-blue-600">Aman &amp; Tepercaya</span>
                    </h1>
                    <p class="mt-5 text-slate-500 text-lg leading-relaxed max-w-lg">
                        Solusi tata kelola likuiditas institusional dan tabungan pintar dengan
                        perlindungan kriptografi kelas perbankan global.
                    </p>

                    <div class="mt-8 space-y-4">

                        <div class="flex items-start gap-4 bg-white border border-slate-50 rounded-2xl p-5 shadow-sm">
                            <div class="shrink-0 w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 16.5a4.5 4.5 0 0 1 9 0" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900">Keamanan Berlapis</h3>
                                <p class="text-sm text-slate-500 mt-1">Verifikasi 2-Faktor dinamis dan pencegahan
                                    anomali cerdas berbasis AI berkecepatan tinggi.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 bg-white border border-slate-50 rounded-2xl p-5 shadow-sm mt-3">
                            <div class="shrink-0 w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900">Bebas Biaya Transfer BI-FAST Rp 0</h3>
                                <p class="text-sm text-slate-500 mt-1">Pengiriman dana seketika tanpa limitasi waktu ke
                                    seluruh perbankan nasional berizin.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 bg-white border border-slate-50 rounded-2xl p-5 shadow-sm">
                            <div class="shrink-0 w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900">Proteksi Simpanan Terjamin</h3>
                                <p class="text-sm text-slate-500 mt-1">Diawasi Otoritas Jasa Keuangan (OJK) serta
                                    simpanan dilindungi Lembaga Penjamin Simpanan (LPS).</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4  bg-blue-100 border border-slate-50 rounded-2xl p-5 shadow-sm">
                            <svg class="w-5 h-5 text-blue-500 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v4m0 4h.01M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0Z" />
                            </svg>
                            <div>
                                <h4 class="font-semibold text-slate-800 text-sm">Pemberitahuan Keamanan Penting</h4>
                                <p class="text-sm text-slate-500 mt-1">Bank Digital tidak pernah menanyakan kata
                                    sandi, 6-digit PIN transaksi, maupun kode One-Time Password (OTP) melalui
                                    telepon, email, pesan singkat, atau media sosial.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 flex items-center gap-3">
                        <div class="flex -space-x-2">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="w-8 h-8 rounded-full border-2 border-slate-50 object-cover">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-8 h-8 rounded-full border-2 border-slate-50 object-cover">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User" class="w-8 h-8 rounded-full border-2 border-slate-50 object-cover">
                        </div>
                        <div>
                            <div class="flex items-center gap-0.5 text-amber-400">
                                @for ($i = 0; $i < 5; $i++) <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                    </svg>
                                    @endfor
                                    <span class="ml-1.5 text-sm font-semibold text-slate-700">4.9 / 5.0</span>
                            </div>
                            <p class="text-xs text-slate-400">Dipercaya oleh 1.8 Juta+ nasabah di seluruh penjuru
                                Indonesia</p>
                        </div>
                    </div>
                </div>

                {{-- Kolom kanan: kartu login --}}
                <div class="bg-white border border-slate-200 rounded-3xl shadow-xl p-8">

                    @if ($errors->any())
                    <div class="mb-5 rounded-xl bg-red-50 border border-red-200 text-red-700 text-sm px-4 py-3">
                        {{ $errors->first() }}
                    </div>
                    @endif

                    {{-- Tab switcher --}}
                    <div class="grid grid-cols-2 gap-1 bg-slate-100 rounded-xl p-1 mb-6" role="tablist">
                        <button type="button" x-data
                            onclick="document.getElementById('panel-akun').classList.remove('hidden'); document.getElementById('panel-qr').classList.add('hidden'); this.classList.add('bg-white','shadow-sm','text-slate-900'); this.nextElementSibling.classList.remove('bg-white','shadow-sm','text-slate-900');"
                            class="flex items-center justify-center gap-2 rounded-lg py-2.5 text-sm font-medium bg-white shadow-sm text-slate-900 transition">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0ZM12 14a7 7 0 0 0-7 7h14a7 7 0 0 0-7-7Z" />
                            </svg>
                            Masuk dengan Akun
                        </button>
                        <button type="button"
                            onclick="document.getElementById('panel-qr').classList.remove('hidden'); document.getElementById('panel-akun').classList.add('hidden'); this.classList.add('bg-white','shadow-sm','text-slate-900'); this.previousElementSibling.classList.remove('bg-white','shadow-sm','text-slate-900');"
                            class="flex items-center justify-center gap-2 rounded-lg py-2.5 text-sm font-medium text-slate-500 transition">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 4h6v6H4V4Zm10 0h6v6h-6V4ZM4 14h6v6H4v-6Zm10 3h3m-3 3h6v-6h-3" />
                            </svg>
                            Masuk dengan QR
                        </button>
                    </div>

                    {{-- Panel: login akun --}}
                    <div id="panel-akun">
                                            @if (session()->has('error'))
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl relative text-sm">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}" class="space-y-5">
                            @csrf

                            <div>
                                <label for="identifier" class="block text-sm font-medium text-slate-700 mb-1.5">
                                    Email
                                </label>
                                <div class="relative">
                                    <svg class="w-5 h-5 text-slate-400 absolute left-3 top-1/2 -translate-y-1/2"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0ZM12 14a7 7 0 0 0-7 7h14a7 7 0 0 0-7-7Z" />
                                    </svg>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                                        placeholder="Contoh: nasabah@domain.id"
                                        class="w-full rounded-xl border border-slate-200 bg-slate-50 pl-10 pr-4 py-3 text-sm text-slate-900 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required autofocus>
                                </div>
                            </div>

                            <div>
                                <div class="flex items-center justify-between mb-1.5">
                                    <label for="password" class="block text-sm font-medium text-slate-700">Kata Sandi
                                        (Password)</label>
                                    <a href="#" class="text-sm text-blue-600 hover:text-blue-700">Lupa Kata Sandi?</a>
                                </div>
                                <div class="relative">
                                    <svg class="w-5 h-5 text-slate-400 absolute left-3 top-1/2 -translate-y-1/2"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 15v2m-6 4h12a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2Zm10-10V7a4 4 0 1 0-8 0v4h8Z" />
                                    </svg>
                                    <input type="password" id="password" name="password"
                                        placeholder="Masukkan kata sandi akun Anda"
                                        class="w-full rounded-xl border border-slate-200 bg-slate-50 pl-10 pr-10 py-3 text-sm text-slate-900 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required>
                                    <button type="button"
                                        onclick="const p=document.getElementById('password'); p.type = p.type === 'password' ? 'text' : 'password';"
                                        class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7Z" />
                                            <circle cx="12" cy="12" r="3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer">
                                    <input type="checkbox" name="remember"
                                        class="rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                                    Ingat Saya di Perangkat Ini
                                </label>
                                <span class="text-xs text-slate-400">(Perangkat Pribadi)</span>
                            </div>

                            <button type="submit"
                                class="w-full flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-xl py-3.5 transition cursor-pointer">
                                Masuk ke Rekening
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m0 0-6-6m6 6-6 6" />
                                </svg>
                            </button>

                            <p class="text-center text-xs text-slate-400 flex items-center justify-center gap-1.5">
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z" />
                                </svg>
                                Dilindungi oleh Enkripsi 256-Bit &amp; Anti-Fraud AI
                            </p>

                            <div class="relative py-2">
                                <div class="absolute inset-0 flex items-center">
                                    <div class="w-full border-t border-slate-200"></div>
                                </div>
                                <div
                                    class="relative flex justify-center text-xs uppercase tracking-wide text-slate-400 bg-white px-3 mx-auto w-fit">
                                    Atau Akses Cepat</div>
                            </div>

                            <button type="button"
                                class="w-full flex items-center justify-center gap-2 bg-blue-50 border border-transparent hover:bg-blue-100 text-slate-700 font-medium rounded-xl py-3 transition">
                                <svg class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" />
                                </svg>
                                Masuk Lebih Cepat dengan Passkey / Face ID
                            </button>

                            <p class="text-center text-sm text-slate-500">
                                Belum memiliki rekening Bank Digital?
                                <a href="#" class="text-blue-600 font-medium hover:text-blue-700">Buka Rekening Sekarang
                                    (Hanya
                                    3 Menit)</a>
                            </p>
                        </form>
                    </div>
                    {{-- Panel: login QR --}}
                    <div id="panel-qr" class="hidden text-center py-6">
                        <div
                            class="w-48 h-48 mx-auto bg-slate-50 border border-slate-200 rounded-2xl flex items-center justify-center">
                            <img src="https://png.pngtree.com/png-vector/20191027/ourmid/pngtree-qr-code-vector-hidden-text-or-url-scanning-smartphone-technology-isolated-png-image_1886134.jpg" alt="">
                        </div>
                        <p class="text-sm text-slate-500 mt-4">Pindai kode QR ini menggunakan aplikasi Bank Digital di
                            ponsel Anda untuk masuk secara instan.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


