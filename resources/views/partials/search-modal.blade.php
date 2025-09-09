<div x-show="openSearch" x-transition.opacity x-cloak
    class="fixed inset-0 z-50 flex items-start justify-center bg-white/80 dark:bg-slate-900/80 backdrop-blur-sm pt-28 px-6">
    <button @click="openSearch = false"
        class="absolute top-7 right-7 text-slate-600 hover:text-slate-900 dark:text-slate-300 dark:hover:text-white cursor-pointer">
        <i data-feather="x" class="w-6 h-6"></i>
    </button>
    <div x-transition x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2" class="w-full max-w-2xl">
        <div
            class="flex items-center gap-3 bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 shadow-lg px-5 py-4">
            <i data-feather="search" class="w-5 h-5 text-slate-500"></i>
            <input x-model="q" type="text" placeholder="Cari sesuatu..." x-ref="searchInput"
                class="w-full bg-transparent outline-none text-slate-800 dark:text-slate-200 placeholder-slate-400" />
            <kbd class="hidden md:block text-xs text-slate-500">Esc</kbd>
        </div>
        <div class="mt-3 text-sm text-slate-500 px-2">
            Tekan <span class="font-medium">Esc</span> untuk menutup
        </div>
    </div>
</div>
