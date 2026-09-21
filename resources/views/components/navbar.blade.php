
<!-- resources/views/components/navbar.blade.php -->

<nav class="w-full bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Navbar Utama --}}
        <div class="flex items-center justify-between h-16">

            {{-- Logo --}}
            <div class="flex items-center gap-2 shrink-0">

                <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 text-white"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2.5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 4v16m8-8H4"
                        />
                    </svg>
                </div>

                <div class="leading-tight">
                    <p class="font-bold text-gray-900 text-sm">
                        BANK DIGITAL
                    </p>

                    <p class="text-[10px] text-gray-500 -mt-0.5">
                        INDONESIA
                    </p>
                </div>

            </div>


            {{-- Menu Tengah - Desktop --}}
            <div class="hidden md:flex items-center gap-8 mx-auto">

                <a
                    href="/"
                    class="text-sm font-medium text-gray-700 hover:text-blue-600 transition"
                >
                    Home
                </a>

                <a
                    href="#"
                    class="text-sm font-medium text-gray-700 hover:text-blue-600 transition"
                >
                    Tabungan & Bunga
                </a>

                <a
                    href="#"
                    class="text-sm font-medium text-gray-700 hover:text-blue-600 transition"
                >
                    Keamanan
                </a>

                <a
                    href="#"
                    class="text-sm font-medium text-gray-700 hover:text-blue-600 transition"
                >
                    Biaya & Limit
                </a>

                <a
                    href="/about"
                    class="text-sm font-medium text-gray-700 hover:text-blue-600 transition"
                >
                    Tentang Kami
                </a>

            </div>


            {{-- Kanan Desktop --}}
            <div class="hidden md:flex items-center gap-4 shrink-0">

                {{-- Buka Rekening --}}
                <a
                    href="#"
                    class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-5 py-2.5 rounded-full transition"
                >
                    Buka Rekening
                </a>


                {{-- Authentication --}}
                @auth

                    <button
                        type="button"
                        class="w-9 h-9 flex items-center justify-center rounded-full bg-gray-900 text-white hover:bg-gray-800 transition"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"
                            />
                        </svg>
                    </button>

                @else

                    <a
                        href="/login"
                        class="text-sm font-medium text-gray-700 hover:text-blue-600 transition"
                    >
                        Masuk
                    </a>

                @endauth

            </div>


            {{-- Hamburger Mobile --}}
            <button
                type="button"
                id="hamburgerButton"
                onclick="toggleMobileMenu()"
                class="sm:hidden flex items-center justify-center w-10 h-10 rounded-lg text-gray-700 hover:bg-gray-100 transition"
                aria-label="Buka menu"
            >

                {{-- Icon Hamburger --}}
                <svg
                    id="hamburgerIcon"
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>

                {{-- Icon X --}}
                <svg
                    id="closeIcon"
                    xmlns="http://www.w3.org/2000/svg"
                    class="hidden w-6 h-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>

            </button>

        </div>


        {{-- ====================================== --}}
        {{-- MENU MOBILE --}}
        {{-- ====================================== --}}

        <div
            id="mobileMenu"
            class="hidden md:hidden border-t border-gray-100 py-4"
        >

            {{-- Menu Navigasi --}}
            <div class="flex flex-col space-y-1">

                <a
                    href="/"
                    class="px-4 py-3 rounded-lg text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition"
                >
                    Home
                </a>

                <a
                    href="#"
                    class="px-4 py-3 rounded-lg text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition"
                >
                    Tabungan & Bunga
                </a>

                <a
                    href="#"
                    class="px-4 py-3 rounded-lg text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition"
                >
                    Keamanan
                </a>

                <a
                    href="#"
                    class="px-4 py-3 rounded-lg text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition"
                >
                    Biaya & Limit
                </a>

                <a
                    href="/about"
                    class="px-4 py-3 rounded-lg text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition"
                >
                    Tentang Kami
                </a>

            </div>


            {{-- Bagian Authentication Mobile --}}
            <div class="border-t border-gray-100 mt-3 pt-3">

                {{-- Buka Rekening --}}
                <a
                    href="#"
                    class="block text-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-5 py-3 rounded-lg transition"
                >
                    Buka Rekening
                </a>


                @auth

                    {{-- User --}}
                    <div class="mt-3 flex items-center gap-3 px-4 py-3 bg-gray-50 rounded-lg">

                        <div class="w-9 h-9 flex items-center justify-center rounded-full bg-gray-900 text-white">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-4 h-4"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"
                                />
                            </svg>
                        </div>

                        <div>
                            <p class="text-sm font-semibold text-gray-900">
                                Akun Saya
                            </p>

                            <p class="text-xs text-gray-500">
                                Anda sudah login
                            </p>
                        </div>

                    </div>

                @else

                    {{-- Masuk --}}
                    <a
                        href="/auth"
                        class="block text-center mt-3 px-5 py-3 rounded-lg border border-gray-200 text-sm font-semibold text-gray-700 hover:bg-gray-50 hover:text-blue-600 transition"
                    >
                        Masuk
                    </a>

                @endauth

            </div>

        </div>

    </div>
</nav>


{{-- ====================================== --}}
{{-- JAVASCRIPT HAMBURGER --}}
{{-- ====================================== --}}

<script>
    function toggleMobileMenu() {

        const mobileMenu = document.getElementById('mobileMenu');
        const hamburgerIcon = document.getElementById('hamburgerIcon');
        const closeIcon = document.getElementById('closeIcon');

        mobileMenu.classList.toggle('hidden');

        hamburgerIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    }
</script>
