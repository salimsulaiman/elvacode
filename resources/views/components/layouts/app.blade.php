<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('app.default_title'))</title>
    <meta name="description" content="@yield('meta_description', __('app.default_description'))">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords" content="jasa pembuatan website, website profesional, company profile, toko online, Elvacode, web development">

    <meta property="og:title" content="@yield('og_title', $article->title ?? __('app.default_title'))">
    <meta property="og:description" content="@yield('og_description', Str::limit(strip_tags($article->content ?? __('app.default_description')), 160))">
    <meta property="og:image" content="@yield('og_image', asset('storage/' . ($article->thumbnail ?? 'assets/images/preview-elvacode.jpg')))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="article">

    <meta name="twitter:title" content="@yield('twitter_title', $article->title ?? __('app.default_title'))">
    <meta name="twitter:description" content="@yield('twitter_description', Str::limit(strip_tags($article->content ?? __('app.default_description')), 160))">
    <meta name="twitter:image" content="@yield('twitter_image', asset('storage/' . ($article->thumbnail ?? 'assets/images/preview-elvacode.jpg')))">
    <meta name="twitter:card" content="summary_large_image">

    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.ga.measurement_id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', '{{ config('services.ga.measurement_id') }}');
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link
        rel="preload"
        href="{{ asset('fonts/PlusJakartaSans-VariableFont_wght.woff2') }}"
        as="font"
        type="font/woff2"
        crossorigin
    />

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="/favicon-48x48.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>

<body x-data="{ openSearch: false, q: '' }" @keydown.escape.window="openSearch = false" x-init="$watch('openSearch', value => value && $nextTick(() => $refs.searchInput.focus()))" class="bg-white dark:bg-slate-900 relative">
    @include('partials.navbar')
    
    <main class="w-full font-body">
        @yield('content')
        @include('partials.search-modal')
    </main>
    
    @include('partials.footer')

    <div x-data="{ show: window.scrollY > 200 }" @scroll.window.passive="show = window.scrollY > 200">
        <a href="https://wa.me/6287835482333?text={{ urlencode(__('app.wa_default_chat')) }}" target="_blank" rel="noopener noreferrer" aria-label="Chat via WhatsApp"
            :class="show ? '{{ request()->is('contact') || request()->is('*/contact') ? 'bottom-40' : 'bottom-24' }}' : '{{ request()->is('contact') || request()->is('*/contact') ? 'bottom-24' : 'bottom-6' }}'"
            class="fixed right-6 z-40 rounded-full p-3 shadow-lg transition-all duration-500 ease-in-out bg-slate-900 text-white hover:bg-slate-700 dark:bg-white dark:text-slate-900 dark:hover:bg-slate-200">
            <span class="absolute inset-0 -z-10 rounded-full bg-slate-900/40 animate-ping motion-reduce:animate-none dark:bg-white/40"></span>
            <svg xmlns="http://www.w3.org/2000/svg" class="relative h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
            </svg>
        </a>

        <button x-show="show" x-cloak x-transition:enter="transition duration-500 ease-out" x-transition:enter-start="opacity-0 translate-y-4 scale-75" x-transition:enter-end="opacity-100 translate-y-0 scale-100" x-transition:leave="transition duration-300 ease-in" x-transition:leave-start="opacity-100 translate-y-0 scale-100" x-transition:leave-end="opacity-0 translate-y-4 scale-75" @click="window.scrollTo({ top: 0, behavior: 'smooth' })" aria-label="Kembali ke atas"
            class="fixed right-6 z-40 rounded-full bg-violet-600 p-3 text-white shadow-lg transition-colors duration-300 hover:bg-violet-700 {{ request()->is('contact') || request()->is('*/contact') ? 'bottom-24' : 'bottom-6' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </button>
    </div>

    @yield('script')
</body>

</html>