@php
    $sidebarServiceActive = request()->is('service*');

    $sidebarLinkBase =
        'flex items-center justify-between rounded-xl px-4 py-3 text-sm font-semibold transition-colors duration-150 ease-in-out';
    $sidebarLinkActive = 'bg-slate-900/5 text-slate-900 dark:bg-white/10 dark:text-white';
    $sidebarLinkIdle =
        'text-slate-600 hover:bg-slate-900/5 hover:text-slate-900 dark:text-slate-300 dark:hover:bg-white/10 dark:hover:text-white';

    $sidebarServiceItems = [
        [
            'route' => 'service.company-profile',
            'icon' => 'briefcase',
            'title' => 'Company Profile',
            'active' => request()->is('service/company-profile'),
        ],
        [
            'route' => 'service.online-store',
            'icon' => 'shopping-bag',
            'title' => 'Toko Online',
            'active' => request()->is('service/online-store'),
        ],
        [
            'route' => 'pricing.index',
            'icon' => 'tag',
            'title' => 'Harga & Paket',
            'active' => request()->is('service/pricing*'),
        ],
    ];
@endphp

<div class="font-body fixed top-0 right-0 z-50 flex h-full w-80 max-w-[85vw] transform flex-col overflow-y-auto border-l border-slate-200 bg-white p-6 shadow-xl transition-all duration-300 ease-in-out xlg:hidden dark:border-slate-800 dark:bg-slate-950"
    x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="translate-x-full"
    x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">

    <div class="flex items-center justify-between">
        <a href="{{ route('home.index') }}" aria-label="Beranda Elvacode" class="block w-fit">
            <img src="{{ asset('assets/logos/elvacode-logo.webp') }}" alt="Elvacode Logo"
                class="h-5 dark:invert dark:grayscale">
        </a>

        <button type="button" @click="open = false" aria-label="Tutup menu navigasi"
            class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-300 text-slate-700 transition-colors duration-150 ease-in-out hover:border-slate-900 hover:bg-slate-900 hover:text-white dark:border-slate-700 dark:text-slate-200 dark:hover:border-white dark:hover:bg-white dark:hover:text-slate-900">
            <i data-feather="x" class="h-4 w-4"></i>
        </button>
    </div>

    <form action="{{ route('article.index') }}" method="GET" class="relative mt-8">
        <input type="text" name="search" placeholder="Cari artikel..." value="{{ request('search') }}"
            class="w-full rounded-full border border-slate-300 bg-slate-50 py-2.5 pl-5 pr-12 text-sm text-slate-800 placeholder-slate-400 transition-colors duration-150 ease-in-out focus:border-violet-500 focus:outline-none focus:ring-2 focus:ring-violet-500/30 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-200 dark:placeholder-slate-500" />
        <button type="submit" aria-label="Cari"
            class="absolute inset-y-0 right-4 flex items-center text-slate-500 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:text-slate-400 dark:hover:text-violet-300">
            <i data-feather="search" class="h-4 w-4"></i>
        </button>
    </form>

    <nav class="mt-6 flex flex-col gap-1" aria-label="Navigasi seluler">
        <a href="{{ route('home.index') }}" @if (request()->is('/')) aria-current="page" @endif
            class="{{ $sidebarLinkBase }} {{ request()->is('/') ? $sidebarLinkActive : $sidebarLinkIdle }}">
            Beranda
        </a>

        <div>
            <button type="button" @click="service = !service" :aria-expanded="service.toString()"
                class="{{ $sidebarLinkBase }} w-full {{ $sidebarServiceActive ? $sidebarLinkActive : $sidebarLinkIdle }}">
                Layanan
                <span class="transition-transform duration-200 ease-in-out" :class="service ? 'rotate-180' : ''">
                    <i data-feather="chevron-down" class="h-4 w-4"></i>
                </span>
            </button>

            <div x-show="service" x-cloak x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1"
                class="mt-1 ml-4 flex flex-col gap-1 border-l border-slate-200 pl-3 dark:border-slate-800">
                @foreach ($sidebarServiceItems as $item)
                    <a href="{{ route($item['route']) }}" @if ($item['active']) aria-current="page" @endif
                        class="group/item flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold transition-colors duration-150 ease-in-out {{ $item['active'] ? 'bg-slate-900/5 text-slate-900 dark:bg-white/10 dark:text-white' : 'text-slate-600 hover:bg-slate-900/5 hover:text-slate-900 dark:text-slate-300 dark:hover:bg-white/10 dark:hover:text-white' }}">
                        {{ $item['title'] }}
                    </a>
                @endforeach
            </div>
        </div>

        <a href="{{ route('portfolio.index') }}" @if (request()->is('portfolio*')) aria-current="page" @endif
            class="{{ $sidebarLinkBase }} {{ request()->is('portfolio*') ? $sidebarLinkActive : $sidebarLinkIdle }}">
            Portofolio
        </a>

        <a href="{{ route('about.index') }}" @if (request()->is('about')) aria-current="page" @endif
            class="{{ $sidebarLinkBase }} {{ request()->is('about') ? $sidebarLinkActive : $sidebarLinkIdle }}">
            Tentang Kami
        </a>

        <a href="{{ route('article.index') }}" @if (request()->is('article*')) aria-current="page" @endif
            class="{{ $sidebarLinkBase }} {{ request()->is('article*') ? $sidebarLinkActive : $sidebarLinkIdle }}">
            Artikel
        </a>

        <a href="{{ route('contact.index') }}" @if (request()->is('contact')) aria-current="page" @endif
            class="{{ $sidebarLinkBase }} {{ request()->is('contact') ? $sidebarLinkActive : $sidebarLinkIdle }}">
            Kontak
        </a>
    </nav>

    <div class="mt-auto border-t border-slate-200 pt-6 dark:border-slate-800">
        <p class="text-sm font-semibold text-slate-900 dark:text-white">Butuh bantuan?</p>
        <p class="mt-0.5 text-xs leading-relaxed text-slate-500 dark:text-slate-400">
            Diskusikan kebutuhan website bisnismu bersama kami.
        </p>

        <a href="https://wa.me/6287835482333?text=Halo%20Elvacode,%20saya%20tertarik%20dengan%20jasa%20pembuatan%20website.%20Bisa%20minta%20info%20lebih%20lanjut?"
            target="_blank" rel="noopener noreferrer"
            class="group/cta mt-4 inline-flex w-full items-center justify-between gap-3 rounded-full bg-slate-900 py-1.5 pl-5 pr-1.5 text-sm font-bold text-white transition-colors duration-150 ease-in-out hover:bg-violet-500 hover:text-white dark:bg-white dark:text-slate-900 dark:hover:bg-violet-500 dark:hover:text-white">
            Hubungi Kami
            <span
                class="flex h-7 w-7 items-center justify-center rounded-full bg-white text-slate-900 transition-colors duration-150 ease-in-out group-hover/cta:bg-white group-hover/cta:text-violet-600 dark:bg-slate-900 dark:text-white dark:group-hover/cta:bg-white dark:group-hover/cta:text-violet-600">
                <i data-feather="arrow-up-right" class="h-4 w-4"></i>
            </span>
        </a>
    </div>
</div>
