<div x-show="openSearch" x-transition.opacity x-cloak
    class="fixed inset-0 z-50 flex items-start justify-center bg-white/80 dark:bg-slate-900/80 backdrop-blur-sm pt-28 px-6">
    <button @click="openSearch = false"
        class="absolute top-7 right-7 text-slate-600 hover:text-slate-900 dark:text-slate-300 dark:hover:text-white cursor-pointer">
        <i data-feather="x" class="w-6 h-6"></i>
    </button>
    <div x-transition x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2" class="w-full max-w-2xl"
        x-data="{
            articles: [], portfolios: [], loading: false, searched: false, timer: null, ctrl: null,
            get hasResults() { return this.articles.length || this.portfolios.length },
            init() {
                this.$watch('q', value => this.onInput(value));
                this.$watch('openSearch', open => { if (!open) this.reset(); });
            },
            reset() { clearTimeout(this.timer); this.ctrl?.abort(); this.q = ''; this.articles = []; this.portfolios = []; this.loading = false; this.searched = false; },
            onInput(value) {
                clearTimeout(this.timer);
                this.ctrl?.abort();
                if (value.trim().length < 2) { this.articles = []; this.portfolios = []; this.loading = false; this.searched = false; return; }
                this.loading = true;
                this.timer = setTimeout(() => this.fetchResults(value.trim()), 250);
            },
            async fetchResults(term) {
                this.ctrl = new AbortController();
                try {
                    const res = await fetch('{{ lroute('search.suggest') }}?q=' + encodeURIComponent(term), { signal: this.ctrl.signal, headers: { 'Accept': 'application/json' } });
                    const data = await res.json();
                    this.articles = data.articles; this.portfolios = data.portfolios;
                    this.searched = true; this.loading = false;
                } catch (e) { if (e.name !== 'AbortError') this.loading = false; }
            }
        }">
        <form action="{{ lroute('article.index') }}" method="GET">
            <div
                class="flex items-center gap-3 bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 shadow-lg px-5 py-4">
                <i data-feather="search" class="w-5 h-5 text-slate-500"></i>
                <input x-model="q" type="text" name="search" placeholder="{{ __('search_modal.placeholder') }}" x-ref="searchInput"
                    class="w-full bg-transparent outline-none text-slate-800 dark:text-slate-200 placeholder-slate-400" />
                <kbd class="hidden md:block text-xs text-slate-500">Esc</kbd>
            </div>
        </form>

        <div x-show="q.trim().length >= 2" x-cloak
            class="mt-3 max-h-[60vh] overflow-y-auto bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 shadow-lg p-2">
            <template x-for="group in [{ key: 'articles', label: @js(__('search_modal.articles')), items: articles }, { key: 'portfolios', label: @js(__('search_modal.portfolios')), items: portfolios }]" :key="group.key">
                <div x-show="group.items.length" class="mb-1">
                    <div class="px-3 pt-2 pb-1 text-xs font-semibold uppercase tracking-wide text-slate-400" x-text="group.label"></div>
                    <template x-for="item in group.items" :key="item.url">
                        <a :href="item.url" class="flex items-center gap-3 rounded-xl px-3 py-2 hover:bg-slate-100 dark:hover:bg-slate-700/60">
                            <template x-if="item.image">
                                <img :src="item.image" :alt="item.title" loading="lazy" class="w-14 h-10 rounded-lg object-cover shrink-0 bg-slate-200 dark:bg-slate-700">
                            </template>
                            <div class="min-w-0">
                                <div class="truncate text-sm font-medium text-slate-800 dark:text-slate-100" x-text="item.title"></div>
                                <div x-show="item.meta" class="truncate text-xs text-slate-500" x-text="item.meta"></div>
                            </div>
                        </a>
                    </template>
                </div>
            </template>

            <div x-show="loading && !hasResults" class="px-3 py-4 text-sm text-slate-500">...</div>
            <div x-show="searched && !loading && !hasResults" class="px-3 py-4 text-sm text-slate-500">
                {{ __('search_modal.no_results') }} "<span x-text="q"></span>"
            </div>
            <a x-show="hasResults" :href="'{{ lroute('article.index') }}?search=' + encodeURIComponent(q.trim())"
                class="block px-3 py-2 mt-1 text-sm text-center text-slate-600 dark:text-slate-300 hover:underline border-t border-slate-100 dark:border-slate-700">
                {{ __('search_modal.see_all') }} "<span x-text="q"></span>"
            </a>
        </div>

        <div class="mt-3 text-sm text-slate-500 px-2">
            {{ __('search_modal.press') }} <span class="font-medium">Esc</span> {{ __('search_modal.to_close') }}
        </div>
    </div>
</div>