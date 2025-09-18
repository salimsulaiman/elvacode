<div class="w-full z-50 fixed top-0" x-data="themeSwitcher()" x-init="initTheme()">
    <nav class="w-full bg-transparent transition-all duration-300 ease-in-out" x-data="{ open: false, scrolled: false, service: false }"
        x-init="scrolled = window.scrollY > 10;
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 10
        })" x-cloak aria-label="Navigasi utama">

        <div class="w-full transition-all duration-300 ease-in-out {{ request()->is('/') ? '' : 'bg-white/90 dark:bg-slate-950/90 backdrop-blur-lg' }}"
            @if (request()->is('/')) :class="scrolled ? 'bg-white/90 dark:bg-slate-950/90 backdrop-blur-lg' : 'bg-transparent'" @endif>

            <div class="max-w-7xl mx-auto px-8 transition-all duration-300 ease-in-out flex justify-between items-center
            {{ request()->is('/') ? '' : 'py-4' }}"
                @if (request()->is('/')) :class="scrolled ? 'py-4' : 'py-8'" @endif>
                <a href="/" aria-label="Beranda Elvacode">
                    <img src="{{ asset('assets/logos/elvacode-logo.webp') }}" alt="Elvacode Logo"
                        class="h-5 dark:invert dark:grayscale">
                </a>
                <ul class="hidden xlg:flex gap-6 relative">
                    <li>
                        <a href="{{ route('home.index') }}"
                            class="font-semibold transition-colors duration-150 ease-in-out
                        {{ request()->is('/') ? 'text-violet-900 hover:text-violet-800 dark:hover:text-violet-300 dark:text-violet-400' : 'text-gray-800 dark:text-gray-200 hover:text-violet-900 dark:hover:text-violet-400' }}">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about.index') }}"
                            class="font-semibold transition-colors duration-150 ease-in-out
                        {{ request()->is('about') ? 'text-violet-900 hover:text-violet-800 dark:hover:text-violet-300 dark:text-violet-400' : 'text-gray-800 dark:text-gray-200 hover:text-violet-900 dark:hover:text-violet-400' }}">
                            Tentang Kami
                        </a>
                    </li>
                    <li class="relative">
                        <button type="button" @mouseenter="service = true" @mouseleave="service = false"
                            class="font-semibold transition-colors duration-150 ease-in-out flex items-center
                        {{ request()->is('service*') || request()->is('pricing') || request()->is('order-guide')
                            ? 'text-violet-900 hover:text-violet-800 dark:hover:text-violet-300 dark:text-violet-400'
                            : 'text-gray-800 dark:text-gray-200 hover:text-violet-900 dark:hover:text-violet-400' }}"
                            aria-haspopup="true" :aria-expanded="service.toString()">
                            Layanan
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <ul x-show="service" x-transition @mouseenter="service = true" @mouseleave="service = false"
                            class="absolute top-6 left-1/2 -translate-x-1/2 mt-2 w-80 bg-white dark:bg-slate-800 shadow-md rounded-xl py-2 z-50 px-2"
                            x-cloak>
                            <li>
                                <a href="{{ route('pricing.index') }}"
                                    class="flex items-center gap-4 px-4 py-2 rounded-lg transition-colors duration-150 ease-in-out
                                {{ request()->is('pricing')
                                    ? 'bg-violet-100 dark:bg-violet-900 text-violet-900 dark:text-violet-200'
                                    : 'text-gray-800 dark:text-gray-200 hover:bg-violet-100 dark:hover:bg-violet-900 hover:text-violet-900 dark:hover:text-violet-200' }}">
                                    <i data-feather="layout" class="w-4 h-4"></i>
                                    Paket Website
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('order-guide.index') }}"
                                    class="flex items-center gap-4 px-4 py-2 rounded-lg transition-colors duration-150 ease-in-out
                                {{ request()->is('order-guide')
                                    ? 'bg-violet-100 dark:bg-violet-900 text-violet-900 dark:text-violet-200'
                                    : 'text-gray-800 dark:text-gray-200 hover:bg-violet-100 dark:hover:bg-violet-900 hover:text-violet-900 dark:hover:text-violet-200' }}">
                                    <i data-feather="file-text" class="w-4 h-4"></i>
                                    Cara Pemesanan
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('portfolio.index') }}"
                            class="font-semibold transition-colors duration-150 ease-in-out
                        {{ request()->is('portfolio*') ? 'text-violet-900 hover:text-violet-800 dark:hover:text-violet-300 dark:text-violet-400' : 'text-gray-800 dark:text-gray-200 hover:text-violet-900 dark:hover:text-violet-400' }}">
                            Portofolio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('article.index') }}"
                            class="font-semibold transition-colors duration-150 ease-in-out
                        {{ request()->is('article*') ? 'text-violet-900 hover:text-violet-800 dark:hover:text-violet-300 dark:text-violet-400' : 'text-gray-800 dark:text-gray-200 hover:text-violet-900 dark:hover:text-violet-400' }}">
                            Artikel
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact.index') }}"
                            class="font-semibold transition-colors duration-150 ease-in-out
                        {{ request()->is('contact') ? 'text-violet-900 hover:text-violet-800 dark:hover:text-violet-300 dark:text-violet-400' : 'text-gray-800 dark:text-gray-200 hover:text-violet-900 dark:hover:text-violet-400' }}">
                            Kontak
                        </a>
                    </li>
                </ul>
                <div class="gap-4 items-center hidden xlg:flex">
                    <button @click="openSearch=true" aria-label="Buka pencarian">
                        <i data-feather="search"
                            class="w-6 h-6 text-gray-800 dark:text-gray-200 hover:text-violet-900 dark:hover:text-violet-400 cursor-pointer"></i>
                    </button>

                    <button @click="toggleTheme"
                        class="rounded-full p-1 hidden md:flex justify-center items-center cursor-pointer"
                        :class="theme === 'dark' ? 'bg-slate-800' : 'bg-slate-200'"
                        aria-label="Ganti tema tampilan">
                        <div class="rounded-full p-1 me-1"
                            :class="theme === 'light' ? 'bg-transparent' : 'bg-slate-600'">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                :class="theme === 'light' ? 'text-slate-700' : 'text-slate-100'" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12.79A9 9 0 1111.21 3a7 7 0 0010.58 9.79z" />
                            </svg>
                        </div>
                        <div class="rounded-full p-1 ms-1"
                            :class="theme === 'dark' ? 'bg-transparent' : 'bg-white'">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                :class="theme === 'dark' ? 'text-slate-100' : 'text-yellow-500'" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <circle cx="12" cy="12" r="5" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 1v2m0 18v2m11-11h-2M3 12H1m16.95 7.07l-1.41-1.41M6.46 6.46L5.05 5.05m13.9 0l-1.41 1.41M6.46 17.54l-1.41 1.41" />
                            </svg>
                        </div>
                    </button>

                    <a href="https://wa.me/6287835482333?text=Halo%20Elvacode,%20saya%20tertarik%20dengan%20jasa%20pembuatan%20website.%20Bisa%20minta%20info%20lebih%20lanjut?"
                        target="_blank" rel="noopener noreferrer"
                        class="bg-slate-950 hover:bg-slate-800 dark:bg-slate-800 dark:hover:bg-slate-700 text-sm px-4 py-3 rounded-full text-white transition-colors duration-150 ease-in-out items-center gap-2 hidden md:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="w-5 h-5">
                            <path
                                d="M16 .396C7.2.396.008 7.587.008 16.396c0 2.886.756 5.698 2.196 8.18L.004 32l7.656-2.184a15.902 15.902 0 0 0 8.34 2.312h.004c8.8 0 15.992-7.192 15.992-16 0-8.81-7.192-16-16-16zm0 29.278c-2.672 0-5.28-.72-7.56-2.08l-.54-.32-4.54 1.296 1.296-4.436-.352-.548c-1.38-2.18-2.108-4.708-2.108-7.268 0-7.476 6.08-13.556 13.56-13.556 3.62 0 7.02 1.412 9.58 3.972 2.56 2.564 3.976 5.96 3.976 9.58 0 7.48-6.084 13.56-13.56 13.56zm7.476-10.184c-.408-.204-2.42-1.196-2.796-1.336-.376-.14-.652-.204-.928.204s-1.064 1.336-1.304 1.612-.48.306-.888.102c-.408-.204-1.72-.632-3.276-2.016-1.212-1.08-2.032-2.416-2.272-2.824-.24-.408-.024-.628.18-.832.184-.184.408-.48.612-.72.204-.24.272-.408.408-.68.136-.272.068-.51-.034-.714-.102-.204-.928-2.24-1.272-3.06-.336-.808-.68-.7-.928-.712l-.796-.014c-.272 0-.714.102-1.088.51s-1.428 1.396-1.428 3.404 1.46 3.944 1.66 4.22c.204.272 2.868 4.38 6.952 6.14.972.42 1.732.672 2.324.864.976.312 1.86.268 2.56.164.78-.116 2.42-.988 2.76-1.944.34-.956.34-1.776.236-1.944-.1-.168-.368-.272-.776-.476z" />
                        </svg>
                        Hubungi Kami
                    </a>

                </div>
                <div class="flex items-center xlg:hidden gap-4">
                    <div @click="toggleTheme"
                        class="rounded-full bg-slate-200 dark:bg-slate-500 border border-slate-200 dark:border-slate-400 items-center justify-center cursor-pointer">

                        <div class="rounded-full p-2 flex justify-center items-center"
                            :class="theme === 'dark' ? 'bg-slate-700' : 'bg-white'">

                            <template x-if="theme === 'dark'">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path d="M21 12.79A9 9 0 1111.21 3a7 7 0 0010.58 9.79z"></path>
                                </svg>
                            </template>

                            <template x-if="theme === 'light'">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-yellow-500"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="5"></circle>
                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                </svg>
                            </template>

                        </div>
                    </div>
                    <button @click="open = !open" class="text-gray-800 dark:text-gray-200 focus:outline-none"
                        aria-label="Toggle menu navigasi">
                        <i data-feather="menu" class="w-6 h-6" x-show="!open"></i>
                        <i data-feather="x" class="w-6 h-6" x-show="open"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="fixed inset-0 bg-black/50 z-40 backdrop-blur-sm xlg:hidden" x-show="open" @click="open=false"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>

        @include('partials.sidebar')
    </nav>

</div>
<script>
    function themeSwitcher() {
        return {
            theme: localStorage.getItem('theme') ||
                (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'),
            initTheme() {
                this.applyTheme(this.theme);
            },
            toggleTheme() {
                this.theme = this.theme === 'light' ? 'dark' : 'light';
                this.applyTheme(this.theme);
                localStorage.setItem('theme', this.theme);
            },
            applyTheme(theme) {
                document.documentElement.classList.remove('light', 'dark');
                document.documentElement.classList.add(theme);
            }
        }
    }
</script>
