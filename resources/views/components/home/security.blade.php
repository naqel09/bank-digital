{{--
    resources/views/partials/security-section.blade.php

    Cara pakai di halaman home:
      @include('partials.security-section')

    Section ini pakai background gelap sendiri (bg-[#060B18]), jadi aman
    ditaruh langsung di antara section lain yang background-nya terang.
    Butuh Tailwind aktif (via @vite) di layout tempat partial ini dipanggil.
    Kalau mau font Plus Jakarta Sans persis seperti section sebelumnya,
    tambahkan di resources/css/app.css:

      @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
      .font-display{ font-family:'Plus Jakarta Sans', ui-sans-serif, system-ui; }
--}}
<section class="bg-[#060B18] py-16 sm:py-20 px-6">
  <div class="max-w-6xl mx-auto">

    <div class="inline-flex items-center gap-2 bg-white/5 border border-white/10 rounded-full px-3.5 py-1.5 mb-6">
      <svg class="w-3.5 h-3.5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
      </svg>
      <span class="text-[11px] font-semibold text-slate-200 tracking-wide">Proteksi Aset Tingkat Institusional</span>
    </div>

    <div class="grid lg:grid-cols-2 gap-14 items-start">

      <div>
        <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-white leading-[1.15] tracking-tight">
          Keamanan Berlapis Tanpa Kompromi untuk Setiap Rupiah Anda
        </h2>
        <p class="text-slate-400 text-[15px] leading-relaxed mt-5 max-w-lg">
          Sebagai bank umum berlisensi resmi di Indonesia, kami menggabungkan kepatuhan regulator perbankan tertinggi dengan teknologi enkripsi kriptografi militer modern.
        </p>

        <div class="mt-9 space-y-6">
          <div class="flex items-start gap-4">
            <div class="shrink-0 w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center">
              <svg class="w-4.5 h-4.5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6"/>
              </svg>
            </div>
            <div>
              <h3 class="text-white font-semibold text-[14.5px]">Regulasi OJK &amp; Jaminan Simpanan LPS</h3>
              <p class="text-slate-400 text-[13px] mt-1 leading-relaxed max-w-md">PT Bank Digital Indonesia Tbk berizin dan diawasi Otoritas Jasa Keuangan (OJK) serta simpanan nasabah dijamin oleh Lembaga Penjamin Simpanan (LPS) hingga Rp 2 Miliar per nasabah.</p>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <div class="shrink-0 w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center">
              <svg class="w-4.5 h-4.5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993M12 10.5a14.94 14.94 0 0 1-3.6 9.75"/>
              </svg>
            </div>
            <div>
              <h3 class="text-white font-semibold text-[14.5px]">Autentikasi Dua Faktor (2FA) &amp; Biometrik</h3>
              <p class="text-slate-400 text-[13px] mt-1 leading-relaxed max-w-md">Akses login dan otorisasi pemindahan dana diamankan dengan Face ID, Fingerprint scanner, serta kode OTP berenkripsi perangkat.</p>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <div class="shrink-0 w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center">
              <svg class="w-4.5 h-4.5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2Zm10-10V7a4 4 0 1 0-8 0v4h8Z"/>
              </svg>
            </div>
            <div>
              <h3 class="text-white font-semibold text-[14.5px]">Sertifikasi ISO 27001 &amp; PCI-DSS</h3>
              <p class="text-slate-400 text-[13px] mt-1 leading-relaxed max-w-md">Infrastruktur cloud berstandar bank tier-1 dengan enkripsi AES-256 pada seluruh lalu lintas data nasabah.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-2 gap-4">

        <div class="bg-white/[0.04] border border-white/10 rounded-2xl p-5">
          <div class="w-9 h-9 rounded-lg bg-white/5 flex items-center justify-center mb-4">
            <svg class="w-4.5 h-4.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/>
            </svg>
          </div>
          <p class="font-display text-3xl font-extrabold text-white">99.99%</p>
          <p class="text-white text-[13px] font-semibold mt-2">Uptime Server Perbankan</p>
          <p class="text-slate-400 text-[12.5px] mt-1 leading-relaxed">Akses transaksi 24 jam sehari tanpa henti.</p>
        </div>

        <div class="bg-white/[0.04] border border-white/10 rounded-2xl p-5">
          <div class="w-9 h-9 rounded-lg bg-white/5 flex items-center justify-center mb-4">
            <svg class="w-4.5 h-4.5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18M5 8l7-5 7 5M5 16l7 5 7-5"/>
            </svg>
          </div>
          <p class="font-display text-3xl font-extrabold text-white">Real-time</p>
          <p class="text-white text-[13px] font-semibold mt-2">Deteksi Fraud AI</p>
          <p class="text-slate-400 text-[12.5px] mt-1 leading-relaxed">Pemantauan anomali transaksi otomatis.</p>
        </div>

        <div class="bg-white/[0.04] border border-white/10 rounded-2xl p-5">
          <div class="w-9 h-9 rounded-lg bg-white/5 flex items-center justify-center mb-4">
            <svg class="w-4.5 h-4.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2Zm10-10V7a4 4 0 1 0-8 0v4h8Z"/>
            </svg>
          </div>
          <p class="font-display text-3xl font-extrabold text-white">256-Bit</p>
          <p class="text-white text-[13px] font-semibold mt-2">Tingkat Enkripsi Data</p>
          <p class="text-slate-400 text-[12.5px] mt-1 leading-relaxed">Protokol keamanan setara perbankan global.</p>
        </div>

        <div class="bg-white/[0.04] border border-white/10 rounded-2xl p-5">
          <div class="w-9 h-9 rounded-lg bg-white/5 flex items-center justify-center mb-4">
            <svg class="w-4.5 h-4.5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636a9 9 0 0 1 0 12.728M15.536 8.464a5 5 0 0 1 0 7.072M9 9v6l4-3-4-3Z"/>
            </svg>
          </div>
          <p class="font-display text-3xl font-extrabold text-white">24/7</p>
          <p class="text-white text-[13px] font-semibold mt-2">Bantuan Prioritas</p>
          <p class="text-slate-400 text-[12.5px] mt-1 leading-relaxed">Siap melayani via call center &amp; in-app chat.</p>
        </div>

      </div>
    </div>
  </div>
</section>