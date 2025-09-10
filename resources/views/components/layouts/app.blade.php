<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Elvacode - Solusi Jasa Website Profesional')</title>
    <meta name="description" content="@yield('meta_description', 'Elvacode - Jasa pembuatan website profesional dan responsif untuk bisnis, startup, dan personal. Solusi modern, aman, dan terjangkau untuk meningkatkan kehadiran digital Anda.')">
    <meta name="keywords"
        content="jasa pembuatan website, website profesional, company profile, toko online, Elvacode, web development">

    <meta property="og:title" content="Elvacode - Solusi Jasa Website Profesional">
    <meta property="og:description"
        content="Elvacode menyediakan jasa pembuatan website profesional, responsif, dan terjangkau untuk membantu bisnis Anda tumbuh di dunia digital.">
    <meta property="og:image" content="{{ asset('assets/images/preview-elvacode.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Elvacode - Solusi Jasa Website Profesional">
    <meta name="twitter:description"
        content="Elvacode menyediakan jasa pembuatan website profesional, responsif, dan terjangkau untuk membantu bisnis Anda tumbuh di dunia digital.">
    <meta name="twitter:image" content="{{ asset('assets/images/preview-elvacode.jpg') }}">

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

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/logos/icon-elvacode-2.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body x-data="{ openSearch: false, q: '' }" @keydown.escape.window="openSearch = false" x-init="$watch('openSearch', value => value && $nextTick(() => $refs.searchInput.focus()))"
    class="bg-white dark:bg-slate-900 relative">
    @include('partials.navbar')
    <main class="w-full font-dmsans">
        @yield('content')
        @include('partials.search-modal')
    </main>
    @include('partials.footer')
    <div x-data="{ show: false }" x-init="window.addEventListener('scroll', () => { show = window.scrollY > 200 })">
        <!-- Floating Button -->
        <button x-show="show" @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="fixed bottom-24 right-2 z-40 p-3 rounded-full bg-violet-600 text-white shadow-lg hover:bg-violet-700 transition duration-300">
            <!-- Panah ke atas (SVG) -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </button>
    </div>


    @yield('script')
    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</body>

</html>
