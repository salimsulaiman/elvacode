<div class="fixed top-0 right-0 w-72 h-full bg-white dark:bg-slate-900 shadow-lg z-50 p-6 transform xlg:hidden transition-all duration-300 ease-in-out overflow-y-auto"
    x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="translate-x-full"
    x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
    <div class="flex flex-col space-y-6 mt-2">

        <a href="{{ route('home.index') }}" class="block w-fit dark:invert mb-8"><img
                src="{{ asset('assets/logos/elvacode-logo.webp') }}" alt="" class="w-28">
        </a>
        <div @click="toggleTheme"
            class="rounded-full bg-slate-200 dark:bg-slate-500 p-1 absolute left-6 -bottom-1 border-2 border-slate-400 flex xlg:hidden items-center justify-center cursor-pointer">

            <div class="rounded-full p-2 flex justify-center items-center"
                :class="theme === 'dark' ? 'bg-slate-700' : 'bg-white'">

                <template x-if="theme === 'dark'">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path d="M21 12.79A9 9 0 1111.21 3a7 7 0 0010.58 9.79z"></path>
                    </svg>
                </template>

                <template x-if="theme === 'light'">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-yellow-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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


        <div class="relative">
            <input type="text" placeholder="Cari sesuatu..."
                class="w-full px-4 py-2 pr-12 rounded-xl bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-800 dark:text-slate-200 placeholder-slate-400 focus:ring-2 focus:ring-violet-500 focus:outline-none transition-colors duration-300 ease-in-out" />
            <button type="button"
                class="absolute inset-y-0 right-3 flex items-center text-slate-500 hover:text-violet-600 dark:text-slate-400 dark:hover:text-violet-300">
                <i data-feather="search" class="w-5 h-5"></i>
            </button>
        </div>

        <nav
            class="flex flex-col text-base font-medium divide-y divide-slate-200 dark:divide-slate-700 transition-colors duration-300 ease-in-out">
            <a href="{{ route('home.index') }}"
                class="py-3 transition
                 {{ request()->is('/') ? 'text-violet-900 dark:text-violet-400' : 'text-slate-700 dark:text-slate-200 hover:text-violet-600 dark:hover:text-violet-400' }}">
                Beranda
            </a>
            <a href="{{ route('about.index') }}"
                class="py-3 transition
                 {{ request()->is('about') ? 'text-violet-900 dark:text-violet-400' : 'text-slate-700 dark:text-slate-200 hover:text-violet-600 dark:hover:text-violet-400' }}">
                Tentang Kami
            </a>

            <div class="py-3">
                <button @click="service = !service"
                    class="w-full flex justify-between items-center transition-colors duration-300 ease-in-out
                     {{ request()->is('service*') || request()->is('pricing') || request()->is('order-guide') ? 'text-violet-900 dark:text-violet-400' : 'text-slate-700 dark:text-slate-200 hover:text-violet-600 dark:hover:text-violet-400' }}">
                    Layanan
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 ml-1 transform transition-transform duration-300"
                        :class="service ? 'rotate-180' : 'rotate-0'" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="service" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 -translate-y-2 scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                    x-transition:leave="transition ease-in-out duration-300"
                    x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                    x-transition:leave-end="opacity-0 -translate-y-2 scale-95"
                    class="flex flex-col mt-3 ml-3 divide-y divide-slate-200 dark:divide-slate-700 overflow-hidden rounded-lg">
                    <a href="{{ route('pricing.index') }}"
                        class="py-3 transition
                         {{ request()->is('pricing') ? 'text-violet-900 dark:text-violet-400' : 'text-slate-600 dark:text-slate-300 hover:text-violet-600 dark:hover:text-violet-400' }}">
                        Paket Website
                    </a>
                    <a href="{{ route('order-guide.index') }}"
                        class="pt-3 pb-0 transition
                         {{ request()->is('order-guide') ? 'text-violet-900 dark:text-violet-400' : 'text-slate-600 dark:text-slate-300 hover:text-violet-600 dark:hover:text-violet-400' }}">
                        Cara Pemesanan
                    </a>
                </div>
            </div>

            <a href="{{ route('portfolio.index') }}"
                class="py-3 transition
                 {{ request()->is('portfolio') ? 'text-violet-900 dark:text-violet-400' : 'text-slate-700 dark:text-slate-200 hover:text-violet-600 dark:hover:text-violet-400' }}">
                Portofolio
            </a>
            <a href="{{ route('article.index') }}"
                class="py-3 transition
                 {{ request()->is('article*') ? 'text-violet-900 dark:text-violet-400' : 'text-slate-700 dark:text-slate-200 hover:text-violet-600 dark:hover:text-violet-400' }}">
                Artikel
            </a>
            <a href="{{ route('contact.index') }}"
                class="py-3 transition
                 {{ request()->is('contact') ? 'text-violet-900 dark:text-violet-400' : 'text-slate-700 dark:text-slate-200 hover:text-violet-600 dark:hover:text-violet-400' }}">
                Kontak
            </a>
        </nav>
    </div>
</div>
