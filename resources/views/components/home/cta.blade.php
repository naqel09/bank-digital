{{--
    resources/views/partials/cta-banner.blade.php

    Cara pakai di halaman home:
      @include('partials.cta-banner')

    Butuh Tailwind aktif (via @vite) di layout tempat partial ini dipanggil.
    Kalau mau font Plus Jakarta Sans persis seperti section sebelumnya,
    tambahkan di resources/css/app.css:

      @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
      .font-display{ font-family:'Plus Jakarta Sans', ui-sans-serif, system-ui; }

    Kode QR di sini masih placeholder ikon -- kalau kamu mau QR asli yang
    mengarah ke link download App Store/Play Store, beri tahu saya URL-nya
    dan saya generate QR code-nya sebagai gambar.
--}}
<div class="max-w-6xl mx-auto px-6 py-16">
  <section class="rounded-3xl px-7 py-8 sm:px-10 sm:py-9" style="background: linear-gradient(120deg, #1D4ED8 0%, #2563EB 45%, #1E40AF 100%);">
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">

      <div class="max-w-xl">
        <span class="inline-block bg-white/15 text-white text-[11px] font-semibold px-3 py-1.5 rounded-full mb-4">
          Mulai Langkah Finansial Pertama Anda
        </span>
        <h2 class="font-display text-2xl sm:text-[1.85rem] font-extrabold text-white leading-[1.2]">
          Siap Mengambil Kendali Penuh Atas Keuangan Anda?
        </h2>
        <p class="text-blue-100 text-[14px] leading-relaxed mt-3">
          Bergabunglah bersama lebih dari 1.8 juta masyarakat Indonesia lainnya yang telah menikmati kemudahan, kecepatan, dan bunga tinggi perbankan masa depan.
        </p>
      </div>

      <div class="flex flex-col items-start lg:items-end gap-3 shrink-0">
        <a href="#" class="inline-flex items-center gap-2 bg-white hover:bg-blue-50 text-[#1D4ED8] font-semibold text-[14px] px-6 py-3 rounded-xl transition">
          Buka Rekening Gratis
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m0 0-6-6m6 6-6 6"/></svg>
        </a>

        <div class="flex items-center gap-2.5 bg-white/10 rounded-xl px-3 py-2">
          <div class="w-8 h-8 rounded-md bg-white/90 flex items-center justify-center shrink-0">
            <svg class="w-5 h-5 text-[#1D4ED8]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 4h6v6H4V4Zm10 0h6v6h-6V4ZM4 14h6v6H4v-6Zm10 3h3m-3 3h6v-6h-3"/>
            </svg>
          </div>
          <div class="text-white text-[11.5px] leading-tight">
            <p class="font-semibold">Pindai untuk Unduh</p>
            <p class="text-blue-100">Tersedia di Android &amp; iOS</p>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>