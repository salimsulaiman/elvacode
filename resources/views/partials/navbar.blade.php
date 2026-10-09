@php
    $isHome = request()->is('/');
    $serviceActive = request()->is('service*');

    $exploreItems = [
        [
            'route' => 'pricing.index',
            'icon' => 'tag',
            'title' => 'Harga & Paket',
            'desc' => 'Pilihan paket dan estimasi biaya',
            'active' => request()->is('service/pricing*'),
        ],
        [
            'route' => 'portfolio.index',
            'icon' => 'grid',
            'title' => 'Portofolio',
            'desc' => 'Contoh proyek website yang dibuat',
            'active' => request()->is('portfolio*'),
        ],
    ];

    $linkBase = 'rounded-full px-4 py-2 text-sm font-semibold transition-colors duration-150 ease-in-out';
    $linkActive = 'bg-slate-900/5 text-slate-900 dark:bg-white/10 dark:text-white';
    $linkIdle =
        'text-slate-600 hover:bg-slate-900/5 hover:text-slate-900 dark:text-slate-300 dark:hover:bg-white/10 dark:hover:text-white';

    $iconBtn =
        'flex h-10 w-10 items-center justify-center rounded-full border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-200 transition-colors duration-150 ease-in-out hover:bg-slate-900 hover:border-slate-900 hover:text-white dark:hover:bg-white dark:hover:border-white dark:hover:text-slate-900';

    $serviceItems = [
        [
            'route' => 'service.company-profile',
            'icon' => 'briefcase',
            'title' => 'Company Profile',
            'desc' => 'Website profesional untuk memperkenalkan bisnis dan membangun kredibilitas',
            'active' => request()->is('service/company-profile'),
        ],
        [
            'route' => 'service.online-store',
            'icon' => 'shopping-bag',
            'title' => 'Toko Online',
            'desc' => 'Website toko online untuk menjual produk dan menjangkau pelanggan',
            'active' => request()->is('service/online-store'),
        ],
        [
            'route' => 'service.custom',
            'icon' => 'code',
            'title' => 'Website Custom',
            'desc' => 'Website khusus sesuai kebutuhan bisnis dan alur kerja Anda',
            'active' => request()->is('service/custom'),
        ],
    ];
@endphp

<div class="font-body w-full z-50 fixed top-0" x-data="themeSwitcher()" x-init="initTheme()">
    <nav class="w-full bg-transparent" x-data="{ open: false, scrolled: false, service: false }" x-init="scrolled = window.scrollY > 10;
    window.addEventListener('scroll', () => {
        scrolled = window.scrollY > 10
    })" x-cloak aria-label="Navigasi utama">

        <div class="w-full border-b transition-all duration-300 ease-in-out {{ $isHome ? '' : 'border-slate-200 bg-white/90 backdrop-blur-lg dark:border-slate-800 dark:bg-slate-950/90' }}"
            @if ($isHome) :class="scrolled ? 'border-slate-200 bg-white/90 backdrop-blur-lg dark:border-slate-800 dark:bg-slate-950/90' : 'border-transparent bg-transparent'" @endif>

            <div class="max-w-7xl mx-auto px-6 lg:px-8 flex items-center justify-between transition-all duration-300 ease-in-out {{ $isHome ? '' : 'py-6' }}"
                @if ($isHome) :class="scrolled ? 'py-8' : 'py-6'" @endif>

                <a href="{{ route('home.index') }}" aria-label="Beranda Elvacode" class="shrink-0">
                    <img src="{{ asset('assets/logos/elvacode-logo.webp') }}" alt="Elvacode Logo"
                        class="h-5 dark:invert dark:grayscale">
                </a>

                <ul class="hidden xlg:flex items-center gap-1">
                    <li>
                        <a href="{{ route('home.index') }}" @if (request()->is('/')) aria-current="page" @endif
                            class="{{ $linkBase }} {{ request()->is('/') ? $linkActive : $linkIdle }}">
                            Beranda
                        </a>
                    </li>

                    <li class="relative" @mouseenter="service = true" @mouseleave="service = false"
                        @keydown.escape="service = false">
                        <button type="button" @click="service = !service" aria-haspopup="true"
                            :aria-expanded="service.toString()"
                            class="{{ $linkBase }} inline-flex items-center gap-1 {{ $serviceActive ? $linkActive : $linkIdle }}">
                            Layanan
                            <span class="transition-transform duration-200 ease-in-out"
                                :class="service ? 'rotate-180' : ''">
                                <i data-feather="chevron-down" class="h-4 w-4"></i>
                            </span>
                        </button>

                        <div x-show="service" x-cloak x-transition:enter="transition ease-out duration-150"
                            x-transition:enter-start="opacity-0 translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-1"
                            class="absolute -left-28 top-full z-50 w-[48rem] max-w-[calc(100vw-2rem)] pt-3 2xl:-left-36 2xl:w-[56rem]">

                            <div
                                class="grid grid-cols-12 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-xl shadow-slate-900/10 dark:border-slate-800 dark:bg-slate-900 dark:shadow-black/40">

                                <div class="col-span-7 p-5 2xl:p-6">
                                    <p
                                        class="px-1 pb-3 text-[11px] font-semibold uppercase tracking-wider text-slate-400 dark:text-slate-500">
                                        Layanan
                                    </p>

                                    <ul class="space-y-2" role="menu">
                                        @foreach ($serviceItems as $item)
                                            <li role="none">
                                                <a href="{{ route($item['route']) }}" role="menuitem"
                                                    @if ($item['active']) aria-current="page" @endif
                                                    class="group/item flex items-start gap-3 rounded-xl border p-3 transition-colors duration-150 ease-in-out
                                {{ $item['active']
                                    ? 'border-violet-200 bg-violet-50/60 dark:border-violet-500/30 dark:bg-violet-500/10'
                                    : 'border-slate-200 hover:border-slate-300 hover:bg-slate-50 dark:border-slate-800 dark:hover:border-slate-700 dark:hover:bg-slate-800/60' }}">

                                                    <span
                                                        class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg border transition-colors duration-150 ease-in-out
                                    {{ $item['active']
                                        ? 'border-violet-500 bg-violet-500 text-white'
                                        : 'border-slate-200 bg-white text-slate-600 group-hover/item:border-violet-500 group-hover/item:bg-violet-500 group-hover/item:text-white dark:border-slate-700 dark:bg-slate-900 dark:text-slate-300 dark:group-hover/item:border-violet-500 dark:group-hover/item:bg-violet-500 dark:group-hover/item:text-white' }}">
                                                        <i data-feather="{{ $item['icon'] }}" class="h-4 w-4"></i>
                                                    </span>

                                                    <span class="flex min-w-0 flex-col">
                                                        <span
                                                            class="text-sm font-semibold text-slate-900 dark:text-white">
                                                            {{ $item['title'] }}
                                                        </span>
                                                        <span
                                                            class="mt-0.5 text-xs leading-relaxed text-slate-500 dark:text-slate-400">
                                                            {{ $item['desc'] }}
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div
                                    class="col-span-5 flex flex-col border-l border-slate-200 p-5 dark:border-slate-800 2xl:p-6">
                                    <p
                                        class="px-1 pb-3 text-[11px] font-semibold uppercase tracking-wider text-slate-400 dark:text-slate-500">
                                        Eksplorasi
                                    </p>

                                    <ul class="space-y-1 mb-2" role="menu">
                                        @foreach ($exploreItems as $item)
                                            <li role="none">
                                                <a href="{{ route($item['route']) }}" role="menuitem"
                                                    @if ($item['active']) aria-current="page" @endif
                                                    class="group/explore flex items-center gap-3 rounded-lg px-4 py-2.5 transition-colors duration-150 ease-in-out hover:bg-slate-100 dark:hover:bg-slate-800 {{ $item['active'] ? 'bg-slate-100 dark:bg-slate-800' : '' }}">
                                                    <span
                                                        class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg transition-colors duration-150 ease-in-out
                                    {{ $item['active']
                                        ? 'bg-violet-500 text-white'
                                        : 'bg-slate-100 text-slate-600 group-hover/explore:bg-violet-500 group-hover/explore:text-white dark:bg-slate-800 dark:text-slate-300 dark:group-hover/explore:bg-violet-500 dark:group-hover/explore:text-white' }}">
                                                        <i data-feather="{{ $item['icon'] }}" class="h-4 w-4"></i>
                                                    </span>
                                                    <span class="flex min-w-0 flex-col">
                                                        <span
                                                            class="text-sm font-semibold text-slate-800 dark:text-slate-100">
                                                            {{ $item['title'] }}
                                                        </span>
                                                        <span
                                                            class="text-xs leading-snug text-slate-500 dark:text-slate-400">
                                                            {{ $item['desc'] }}
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <div class="mt-auto border-t border-slate-200 px-1 pt-4 dark:border-slate-800">
                                        <p class="text-sm font-semibold text-slate-900 dark:text-white">Butuh solusi
                                            lain?</p>
                                        <p class="mt-0.5 text-xs leading-relaxed text-slate-500 dark:text-slate-400">
                                            Diskusikan kebutuhan bisnismu bersama kami.
                                        </p>
                                        <a href="https://wa.me/6287835482333?text=Halo%20Elvacode,%20saya%20ingin%20konsultasi%20kebutuhan%20website."
                                            target="_blank" rel="noopener noreferrer"
                                            class="mt-3 inline-flex items-center gap-1.5 rounded-full border border-slate-300 px-4 py-3 text-xs font-semibold text-slate-700 transition-colors duration-150 ease-in-out hover:border-slate-900 hover:bg-slate-900 hover:text-white dark:border-slate-700 dark:text-slate-200 dark:hover:border-white dark:hover:bg-white dark:hover:text-slate-900">
                                            Konsultasi Gratis
                                            <i data-feather="arrow-up-right" class="h-3.5 w-3.5"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <a href="{{ route('portfolio.index') }}"
                            @if (request()->is('portfolio*')) aria-current="page" @endif
                            class="{{ $linkBase }} {{ request()->is('portfolio*') ? $linkActive : $linkIdle }}">
                            Portofolio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about.index') }}"
                            @if (request()->is('about')) aria-current="page" @endif
                            class="{{ $linkBase }} {{ request()->is('about') ? $linkActive : $linkIdle }}">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('article.index') }}"
                            @if (request()->is('article*')) aria-current="page" @endif
                            class="{{ $linkBase }} {{ request()->is('article*') ? $linkActive : $linkIdle }}">
                            Artikel
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact.index') }}"
                            @if (request()->is('contact')) aria-current="page" @endif
                            class="{{ $linkBase }} {{ request()->is('contact') ? $linkActive : $linkIdle }}">
                            Kontak
                        </a>
                    </li>
                </ul>

                <div class="flex items-center gap-3">
                    <button type="button" @click="openSearch = true" aria-label="Buka pencarian"
                        class="{{ $iconBtn }} hidden xlg:flex">
                        <i data-feather="search" class="h-4 w-4"></i>
                    </button>

                    <button type="button" @click="toggleTheme" aria-label="Ganti tema tampilan"
                        class="{{ $iconBtn }}">
                        <svg x-show="theme === 'light'" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 12.79A9 9 0 1111.21 3a7 7 0 0010.58 9.79z" />
                        </svg>
                        <svg x-show="theme === 'dark'" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="5" />
                            <line x1="12" y1="1" x2="12" y2="3" />
                            <line x1="12" y1="21" x2="12" y2="23" />
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
                            <line x1="1" y1="12" x2="3" y2="12" />
                            <line x1="21" y1="12" x2="23" y2="12" />
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
                        </svg>
                    </button>

                    <a href="https://wa.me/6287835482333?text=Halo%20Elvacode,%20saya%20tertarik%20dengan%20jasa%20pembuatan%20website.%20Bisa%20minta%20info%20lebih%20lanjut?"
                        target="_blank" rel="noopener noreferrer"
                        class="group/cta hidden xlg:inline-flex items-center justify-center gap-3 rounded-full bg-slate-900 dark:bg-white py-1.5 pl-5 pr-1.5 text-sm font-bold text-white dark:text-slate-900 transition-colors duration-150 ease-in-out hover:bg-violet-500 hover:text-white dark:hover:bg-violet-500 dark:hover:text-white">
                        Hubungi Kami
                        <span
                            class="flex h-7 w-7 items-center justify-center rounded-full bg-white dark:bg-slate-900 text-slate-900 dark:text-white transition-colors duration-150 ease-in-out group-hover/cta:bg-white group-hover/cta:text-violet-600 dark:group-hover/cta:bg-white dark:group-hover/cta:text-violet-600">
                            <i data-feather="arrow-up-right"
                                class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                        </span>
                    </a>

                    <button type="button" @click="open = !open" aria-label="Toggle menu navigasi"
                        :aria-expanded="open.toString()" class="{{ $iconBtn }} xlg:hidden">
                        <span x-show="!open"><i data-feather="menu" class="h-4 w-4"></i></span>
                        <span x-show="open" x-cloak><i data-feather="x" class="h-4 w-4"></i></span>
                    </button>
                </div>
            </div>
        </div>

        <div class="fixed inset-0 bg-black/50 z-40 backdrop-blur-sm xlg:hidden" x-show="open" @click="open = false"
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
