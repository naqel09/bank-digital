<!-- resources/views/components/navbar.blade.php -->
<nav class="w-full bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            {{-- Logo --}}
            <div class="flex items-center gap-2 shrink-0">
                <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                </div>
                <div class="leading-tight">
                    <p class="font-bold text-gray-900 text-sm">BANK DIGITAL</p>
                    <p class="text-[10px] text-gray-500 -mt-0.5">INDONESIA</p>
                </div>
            </div>

            {{-- Menu Tengah --}}
            <div class="hidden md:flex items-center gap-8 mx-auto">
                <a href="/" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition">Home</a>
                <a href="#" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition">Tabungan &amp;
                    Bunga</a>
                <a href="#" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition">Keamanan</a>
                <a href="#" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition">Biaya &amp;
                    Limit</a>
                <a href="/about" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition">Tentang Kami</a>
            </div>

            {{-- Kanan: Masuk, Buka Rekening, Profil --}}
            <div class="flex items-center gap-4 shrink-0">
                {{-- <a href="{{ route('login') ?? '#' }}" class="text-sm font-medium text-gray-700 hover:text-blue-600
                transition"> --}}

                <a href="#"
                    class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-5 py-2.5 rounded-full transition">
                    Buka Rekening
                </a>
                @auth
                <button type="button"
                    class="w-9 h-9 flex items-center justify-center rounded-full bg-gray-900 text-white hover:bg-gray-800 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
                    </svg>
                </button>

                @else
                <a href="/auth" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition">
                    Masuk
                </a>
                @endauth
            </div>
        </div>
    </div>
</nav>