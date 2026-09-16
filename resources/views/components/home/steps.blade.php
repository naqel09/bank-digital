{{--
    resources/views/partials/steps-section.blade.php

    Cara pakai di halaman home:
      @include('partials.steps-section')

    Butuh Tailwind aktif (via @vite) di layout tempat partial ini dipanggil.
    Kalau mau font Plus Jakarta Sans persis seperti section sebelumnya,
    tambahkan di resources/css/app.css:

      @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
      .font-display{ font-family:'Plus Jakarta Sans', ui-sans-serif, system-ui; }

    Section ini statis (tanpa JS) -- angka 01/02/03 dan isi teks tinggal
    diganti manual, atau kalau kamu mau di-loop dari array/collection di
    controller, beri tahu saya dan saya ubah jadi @foreach.
--}}
<section class="py-16 sm:py-20 px-6" style="background: radial-gradient(80% 100% at 50% 0%, #EDF1F9 0%, #ffffff 70%);">
  <div class="max-w-5xl mx-auto text-center">

    <p class="text-[12px] font-bold text-[#2F6FED] tracking-wide">AKTIVASI CEPAT</p>
    <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-[#0B1E3D] mt-2 tracking-tight">
      3 Langkah Buka Rekening Tanpa Antre
    </h2>
    <p class="text-slate-500 text-[15px] leading-relaxed mt-4 max-w-xl mx-auto">
      Semua proses serba digital dari genggaman ponsel pintar Anda dalam waktu kurang dari 3 menit.
    </p>

    <div class="grid sm:grid-cols-3 gap-5 mt-12 text-left">

      <div class="bg-white border border-slate-100 rounded-2xl p-6 shadow-[0_1px_2px_rgba(11,30,61,0.03),0_12px_28px_-10px_rgba(11,30,61,0.10)]">
        <div class="w-9 h-9 rounded-full bg-blue-50 text-[#2F6FED] font-display font-bold text-[13px] flex items-center justify-center mb-5">01</div>
        <h3 class="font-display font-bold text-[#0B1E3D] text-[16px]">Unduh &amp; Registrasi</h3>
        <p class="text-slate-500 text-[13.5px] leading-relaxed mt-2">Masukkan nomor ponsel aktif, alamat email utama, dan buat 6 digit PIN keamanan transaksi Anda.</p>
        <div class="flex items-center gap-1.5 text-slate-400 text-[12.5px] mt-5">
          <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5h3A1.5 1.5 0 0 1 15 3v18a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 21V3a1.5 1.5 0 0 1 1.5-1.5ZM9 18h6"/>
          </svg>
          Tersedia di Google Play &amp; App Store
        </div>
      </div>

      <div class="bg-white border border-slate-100 rounded-2xl p-6 shadow-[0_1px_2px_rgba(11,30,61,0.03),0_12px_28px_-10px_rgba(11,30,61,0.10)]">
        <div class="w-9 h-9 rounded-full bg-blue-50 text-[#2F6FED] font-display font-bold text-[13px] flex items-center justify-center mb-5">02</div>
        <h3 class="font-display font-bold text-[#0B1E3D] text-[16px]">Verifikasi e-KTP &amp; Wajah</h3>
        <p class="text-slate-500 text-[13.5px] leading-relaxed mt-2">Ambil foto e-KTP dan lakukan selfie biometrik dalam 1 menit. Sistem AI kami memverifikasi identitas Anda secara instan dan aman.</p>
        <div class="flex items-center gap-1.5 text-slate-400 text-[12.5px] mt-5">
          <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2Zm10-10V7a4 4 0 1 0-8 0v4h8Z"/>
          </svg>
          Verifikasi Otomatis Terenkripsi
        </div>
      </div>

      <div class="bg-white border border-slate-100 rounded-2xl p-6 shadow-[0_1px_2px_rgba(11,30,61,0.03),0_12px_28px_-10px_rgba(11,30,61,0.10)]">
        <div class="w-9 h-9 rounded-full bg-blue-50 text-[#2F6FED] font-display font-bold text-[13px] flex items-center justify-center mb-5">03</div>
        <h3 class="font-display font-bold text-[#0B1E3D] text-[16px]">Rekening Langsung Aktif</h3>
        <p class="text-slate-500 text-[13.5px] leading-relaxed mt-2">Nomor rekening Anda langsung terbit. Siap dipakai transfer BI-FAST gratis, top-up e-wallet, belanja online, dan raih bunga tinggi.</p>
        <div class="flex items-center gap-1.5 text-emerald-600 text-[12.5px] mt-5">
          <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
          </svg>
          Siap Pakai Seketika
        </div>
      </div>

    </div>
  </div>
</section>