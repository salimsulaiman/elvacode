@extends('components.layouts.app')


@section('content')
    <section
        class="w-full bg-white dark:bg-slate-950 relative isolate h-auto md:h-screen overflow-hidden transition-colors duration-300 ease-in-out bg-cover">
        <div class="absolute inset-0 right-0 -top-40 -z-10 overflow-hidden">
            <div
                class="w-[600px] h-[600px] bg-gradient-to-tr from-pink-300 via-indigo-400 to-white opacity-20 blur-2xl rounded-full">
            </div>
        </div>
        <div
            class="max-w-7xl h-full flex flex-col items-center justify-center mx-auto relative pt-14 px-6 lg:px-8 section hero-section">
            <div class="w-full py-16 sm:py-36 lg:py-40 relative z-20">
                <div class="w-full flex flex-col lg:flex-row gap-10 lg:gap-16 justify-between items-center">
                    <div class="lg:w-7/12 flex flex-col items-center lg:items-start text-center lg:text-left">
                        <div class="flex gap-2 items-center">
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-400 uppercase">
                                <span class="font-bold text-slate-800 dark:text-white">//</span>
                                Website Solutions
                            </span>
                        </div>
                        <h1
                            class="font-primary hero-title split text-3xl sm:text-4xl md:text-5xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-16 max-w-4xl mx-auto lg:mx-0 mt-6">
                            Solusi
                            <span class="font-bold text-violet-500 dark:text-violet-300">
                                Website
                            </span>
                            Profesional untuk Bisnis Anda
                        </h1>

                        <p
                            class="hero-subtitle text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium mt-6 sm:mt-8 max-w-lg mx-auto lg:mx-0 text-justify">
                            Kami menyediakan jasa pembuatan website dengan harga terjangkau, dirancang dengan strategi
                            yang tepat agar sesuai dengan kebutuhan bisnis Anda.
                        </p>

                        <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row items-center lg:items-center gap-4 sm:gap-6">
                            <a href="#create-website"
                                class="rounded-full bg-slate-800 px-5 py-2.5 text-sm sm:text-base font-semibold text-white dark:text-slate-700 dark:bg-white shadow hover:bg-slate-700 dark:hover:bg-slate-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                                Mulai Jelajahi
                            </a>
                            <a href="{{ route('pricing.index') }}"
                                class="text-sm sm:text-base font-semibold text-violet-900 hover:text-violet-700 dark:text-slate-300 dark:hover:text-slate-200">
                                Lihat Paket<span aria-hidden="true"> →</span>
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-5/12 relative mt-4 sm:mt-12 lg:mt-0 bottom-0">
                        <img src="{{ asset('assets/images/hero-image.png') }}" alt="Hero Image"
                            class="w-full relative bottom-0 right-0 scale-100 mx-auto lg:absolute lg:-bottom-48 lg:-right-44 lg:scale-200">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="relative max-w-7xl mx-auto overflow-hidden py-6 bg-slate-100 dark:bg-slate-800">

        <div
            class="pointer-events-none absolute left-0 top-0 h-full w-64 bg-gradient-to-r from-white dark:from-slate-900 to-transparent z-10">
        </div>
        <div
            class="pointer-events-none absolute right-0 top-0 h-full w-64 bg-gradient-to-l from-white dark:from-slate-900 to-transparent z-10">
        </div>

        <div class="relative overflow-hidden">
            <div class="flex w-max min-w-full flex-nowrap animate-marquee gap-20 hover:[animation-play-state:paused]">

                <img src="{{ asset('assets/logos/project/elvacourse-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/jatiunggul-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/obsidea-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/taleify-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/velobike-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/morvix-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />

                <img src="{{ asset('assets/logos/project/elvacourse-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/jatiunggul-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/obsidea-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/taleify-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/velobike-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/morvix-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />

            </div>
        </div>
    </div>
    <section id="create-website"
        class="section w-full scroll-mt-18 dark:bg-slate-900 isolate relative h-auto overflow-hidden transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto relative px-6 lg:px-8 pt-32 pb-16 md:pb-64 group min-h-auto">
            <div class="w-full flex flex-col lg:flex-row gap-8 justify-between items-center">
                <div class="w-full lg:w-5/12">
                    <div class="flex gap-2 items-center">
                        <h2 class="text-sm font-semibold text-slate-600 dark:text-slate-400 uppercase">
                            <span class="font-bold text-slate-800 dark:text-white">//</span>
                            Bangun Website Impian
                        </h2>
                    </div>

                    <h3
                        class="font-primary section-title split text-3xl sm:text-4xl md:text-5xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-16 max-w-4xl mx-auto lg:mx-0 mt-6">
                        Wujudkan Website <span class="font-bold text-violet-500 dark:text-violet-300">Profesional</span>
                        Anda
                    </h3>

                    <p
                        class="section-desc text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium mt-6 sm:mt-8 text-justify">
                        Dari konsep hingga eksekusi, kami membantu membangun website impian Anda yang modern, responsif,
                        dan disesuaikan dengan kebutuhan bisnis agar tampil lebih percaya diri di dunia digital.
                    </p>
                </div>

                <div
                    class="w-full lg:w-7/12 relative mt-6 md:mt-12 lg:mt-0 
            h-[250px] sm:h-[320px] md:h-[380px] lg:h-[400px]">

                    <img src="{{ asset('assets/images/create-website.png') }}" alt="Create Website"
                        class="w-full lg:absolute lg:top-0">

                </div>
            </div>
        </div>
        <div aria-hidden="true" class="absolute inset-0 top-[calc(100%-13rem)] -z-10">

            <div
                class="relative mx-auto w-[500px] h-[500px]
        -translate-x-1/2 left-1/2
        bg-gradient-to-tr from-pink-400 to-indigo-500
        opacity-20 blur-xl rounded-full
        sm:w-[700px] sm:h-[700px]">
            </div>

        </div>
    </section>
    <section
        class="w-full py-0 md:py-32 relative transition-colors duration-300 ease-in-out
         bg-slate-50 dark:bg-slate-800">
        <div
            class="w-full max-w-7xl mx-auto px-6 sm:px-10 lg:px-16 xl:px-24 py-12 sm:py-16 lg:py-24 rounded-none md:rounded-2xl shadow-xl bg-slate-950 dark:bg-white relative lg:absolute top-0 md:-top-24 lg:-top-36 left-1/2 -translate-x-1/2 grid grid-cols-1 md:grid-cols-2 items-center gap-10 md:gap-12 lg:gap-20 text-center md:text-left justify-items-center md:justify-items-start transition-colors duration-300 ease-in-out border border-slate-900 dark:border-slate-100">

            <div class="space-y-4 w-full">
                <img src="{{ asset('assets/logos/elvacode-logo.webp') }}" alt="Logo Elvacode"
                    class="w-28 sm:w-32 mx-auto md:mx-0 mb-6 invert dark:invert-0 transition duration-300">
                <h2 class="font-primary text-white dark:text-slate-800 font-bold text-lg sm:text-xl lg:text-2xl">
                    Membangun
                    <span class="text-violet-300 dark:text-violet-500 font-extrabold">Website</span>,
                    Mengembangkan
                    <span class="text-violet-300 dark:text-violet-500 font-extrabold">Bisnis</span>
                </h2>
                <p class="text-sm sm:text-base text-slate-300 dark:text-slate-700">
                    Elvacode berkomitmen menghadirkan website berkualitas yang terbukti membantu bisnis tumbuh dan meraih
                    kepercayaan pelanggan
                </p>
            </div>

            <div
                class="w-full grid grid-cols-2 gap-x-4 gap-y-8 sm:gap-x-6 sm:gap-y-10 transition-colors duration-300 ease-in-out">

                <div class="flex flex-col gap-2">
                    <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-4 mb-1 justify-center md:justify-start">
                        <div
                            class="w-8 h-8 shrink-0 bg-slate-700 dark:bg-slate-100 rounded-full flex items-center justify-center transition-colors duration-300 ease-in-out">
                            <i data-feather="smile" class="w-4 h-4 text-slate-300 dark:text-slate-600"></i>
                        </div>
                        <h2 class="stat-number font-bold text-4xl sm:text-5xl text-white dark:text-slate-800"
                            data-value="95" data-suffix="%">
                            <span class="stat-value">0</span><span class="text-2xl sm:text-3xl">%</span>
                        </h2>
                    </div>
                    <p
                        class="ms-0 sm:ms-12 text-slate-300 dark:text-slate-800 font-semibold text-xs sm:text-sm text-center md:text-left">
                        Kepuasan Klien
                    </p>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-4 mb-1 justify-center md:justify-start">
                        <div
                            class="w-8 h-8 shrink-0 bg-slate-700 dark:bg-slate-100 rounded-full flex items-center justify-center transition-colors duration-300 ease-in-out">
                            <i data-feather="check-circle" class="w-4 h-4 text-slate-300 dark:text-slate-600"></i>
                        </div>
                        <h2 class="stat-number font-bold text-4xl sm:text-5xl text-white dark:text-slate-800"
                            data-value="50" data-suffix="+">
                            <span class="stat-value">0</span><span class="text-2xl sm:text-3xl">+</span>
                        </h2>
                    </div>
                    <p
                        class="ms-0 sm:ms-12 text-slate-300 dark:text-slate-800 font-semibold text-xs sm:text-sm text-center md:text-left">
                        Proyek Selesai
                    </p>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col sm:flex-row items-center gap-2 sm:gap-4 mb-1 justify-center md:justify-start">
                        <div
                            class="w-8 h-8 shrink-0 bg-slate-700 dark:bg-slate-100 rounded-full flex items-center justify-center transition-colors duration-300 ease-in-out">
                            <i data-feather="zap" class="w-4 h-4 text-slate-300 dark:text-slate-600"></i>
                        </div>
                        <h2 class="stat-number font-bold text-4xl sm:text-5xl text-white dark:text-slate-800"
                            data-value="40" data-suffix="+">
                            <span class="stat-value">0</span><span class="text-2xl sm:text-3xl">+</span>
                        </h2>
                    </div>
                    <p
                        class="ms-0 sm:ms-12 text-slate-300 dark:text-slate-800 font-semibold text-xs sm:text-sm text-center md:text-left">
                        Ide Terealisasi
                    </p>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col sm:flex-row items-center gap-2 sm:gap-4 mb-1 justify-center md:justify-start">
                        <div
                            class="w-8 h-8 shrink-0 bg-slate-700 dark:bg-slate-100 rounded-full flex items-center justify-center transition-colors duration-300 ease-in-out">
                            <i data-feather="trending-up" class="w-4 h-4 text-slate-300 dark:text-slate-600"></i>
                        </div>
                        <h2 class="stat-number font-bold text-4xl sm:text-5xl text-white dark:text-slate-800"
                            data-value="25" data-suffix="+">
                            <span class="stat-value">0</span><span class="text-2xl sm:text-3xl">+</span>
                        </h2>
                    </div>
                    <p
                        class="ms-0 sm:ms-12 text-slate-300 dark:text-slate-800 font-semibold text-xs sm:text-sm text-center md:text-left">
                        Bisnis Berkembang
                    </p>
                </div>

            </div>
        </div>


        <div class="section w-full max-w-7xl mx-auto relative px-6 lg:px-8 mt-8 md:-mt-12 lg:mt-48 py-8 group">
            <div class="w-full flex flex-col lg:flex-row-reverse gap-20 justify-between items-center">
                <div class="w-full lg:w-7/12">
                    <div class="flex gap-2 items-center">
                        <h2 class="text-sm font-semibold text-slate-500 dark:text-slate-300 uppercase">
                            <span class="font-bold text-slate-800 dark:text-white">//</span>
                            Kenapa Harus Kami
                        </h2>
                    </div>

                    <h3
                        class="font-primary section-title split text-3xl sm:text-4xl md:text-7xl font-bold sm:font-semibold text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-20 mx-auto lg:mx-0 mt-6">
                        Partner Website <span class="text-violet-500 dark:text-violet-300 font-bold">Profesional</span>
                    </h3>

                    <p
                        class="section-desc text-sm sm:text-base text-slate-700 dark:text-white font-medium mt-6 sm:mt-8 text-justify">
                        Kami membangun website <span class="text-violet-500 dark:text-violet-300 font-bold">modern</span>
                        dan <span class="text-violet-500 dark:text-violet-300 font-bold">responsive</span> yang disesuaikan
                        dengan kebutuhan bisnis Anda.

                        Dengan proses yang jelas dan harga yang transparan, kami menghadirkan solusi website yang
                        profesional dan fungsional.

                    </p>

                    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div class="flex items-start gap-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 rounded-2xl bg-violet-100 dark:bg-violet-500 shrink-0">
                                <i data-feather="monitor" class="w-6 h-6 text-violet-700 dark:text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Desain Modern</h3>
                                <p class="text-slate-600 dark:text-slate-400 text-sm">
                                    Website elegan, responsif, dan sesuai kebutuhan bisnis.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 rounded-2xl bg-violet-100 dark:bg-violet-500 shrink-0">
                                <i data-feather="shield" class="w-6 h-6 text-violet-700 dark:text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Keamanan Terjamin</h3>
                                <p class="text-slate-600 dark:text-slate-400 text-sm">
                                    Sistem aman, terlindungi, dan menjaga data bisnis Anda.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 rounded-2xl bg-violet-100 dark:bg-violet-500 shrink-0">
                                <i data-feather="trending-up" class="w-6 h-6 text-violet-700 dark:text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Optimasi Bisnis</h3>
                                <p class="text-slate-600 dark:text-slate-400 text-sm">
                                    Website optimal untuk meningkatkan visibilitas dan konversi.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 rounded-2xl bg-violet-100 dark:bg-violet-500 shrink-0">
                                <i data-feather="clock" class="w-6 h-6 text-violet-700 dark:text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Support Cepat</h3>
                                <p class="text-slate-600 dark:text-slate-400 text-sm">
                                    Tim support responsif untuk membantu kebutuhan bisnis Anda.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div data-laptop-parallax
                    class="relative mx-auto mt-2 w-full max-w-[420px] aspect-[1/1.05]
           sm:max-w-[520px] md:mt-6 md:max-w-[600px]
           lg:mt-0 lg:w-5/12 lg:max-w-none">

                    <img data-layer="back" src="{{ asset('assets/images/laptop.png') }}"
                        alt="Contoh website - tampilan belakang" loading="lazy" decoding="async"
                        class="absolute left-0 top-0 w-[80%] h-auto will-change-transform select-none pointer-events-none">

                    <img data-layer="front" src="{{ asset('assets/images/laptop-v2.png') }}"
                        alt="Contoh website - tampilan depan" loading="lazy" decoding="async"
                        class="absolute -bottom-10 right-0 w-[80%] h-auto will-change-transform select-none pointer-events-none">
                </div>

            </div>
        </div>
    </section>
    <section id="pricing" aria-label="Paket Harga Website Elvacode"
        class="section w-full bg-white dark:bg-slate-900 group/section transition-colors duration-300 ease-in-out relative z-20">
        <div class="max-w-7xl mx-auto py-32 px-6 lg:px-8">
            <div class="flex gap-2 items-center">
                <h2 class="text-sm font-semibold text-slate-600 dark:text-slate-400 uppercase">
                    <span class="font-bold text-slate-800 dark:text-white">//</span>
                    Harga Terbaik Kami Tawarkan
                </h2>
            </div>

            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-16 mt-6 mb-20">
                <h3
                    class="font-primary section-title split lg:flex-1 max-w-2xl text-3xl sm:text-4xl md:text-5xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-16 mx-auto lg:mx-0">
                    Pilih <span class="text-violet-500 dark:text-violet-300 font-bold">Paket</span> Website Sesuai
                    Kebutuhan
                    Anda
                </h3>

                <p
                    class="section-desc w-full lg:w-5/12 lg:max-w-md text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium text-justify lg:text-left">
                    Paket fleksibel sesuai kebutuhan Anda, dari solusi sederhana hingga website profesional.
                </p>
            </div>

            @php
                $plans = [
                    [
                        'name' => 'Essential',
                        'price' => 650000,
                        'original' => 1000000,
                        'highlight' => false,
                        'features' => [
                            'Cocok untuk: Personal Website, Startup, Bisnis Kecil',
                            'Tampilan Responsive',
                            '4 Halaman Statis',
                            'Free Domain (web.id / my.id)',
                            'Free Hosting 1 Tahun',
                            '1x Revisi Desain',
                            'SSL/HTTPS Secure',
                            'Gratis Logo Sederhana',
                            'Panduan Penggunaan Website',
                        ],
                    ],
                    [
                        'name' => 'Professional',
                        'price' => 1500000,
                        'original' => 2500000,
                        'highlight' => true,
                        'features' => [
                            'Cocok untuk: Portfolio Website, Bisnis Menengah',
                            'Tampilan Responsive',
                            '5 - 10 Halaman Statis',
                            'Free Domain (web.id / my.id / .com)',
                            'Free Hosting 1 Tahun',
                            '2x Revisi Desain',
                            'SSL/HTTPS Secure',
                            'Free Maintenance 1 Tahun',
                            'Optimasi Kecepatan Dasar',
                            'Gratis Logo Sederhana',
                        ],
                    ],
                    [
                        'name' => 'Premium',
                        'price' => 3000000,
                        'original' => 5000000,
                        'highlight' => false,
                        'features' => [
                            'Cocok untuk: Company Profile Lengkap, Bisnis Berkembang',
                            'Tampilan Responsive',
                            '10 - 15 Halaman Statis',
                            'Free Domain (web.id / my.id / .com / .id)',
                            'Free Hosting 1 Tahun',
                            '3x Revisi Desain',
                            'SSL/HTTPS Secure',
                            'Gratis Email Bisnis',
                            'Free Maintenance 1 Tahun',
                            'Optimasi SEO Dasar',
                            'Optimasi Kecepatan Lanjutan',
                            'Integrasi WhatsApp & Google Maps',
                            'Gratis Logo Profesional',
                            'Garansi 3 Bulan',
                        ],
                    ],
                ];

                $enterpriseTags = [
                    'Website E-commerce',
                    'Custom Design',
                    'Custom Feature',
                    'Domain .co.id',
                    'Email Bisnis',
                    'Garansi 6 Bulan',
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-16 items-stretch">
                @foreach ($plans as $plan)
                    @php
                        $hl = $plan['highlight'];
                        $discount = round((($plan['original'] - $plan['price']) / $plan['original']) * 100);
                    @endphp

                    <div
                        class="relative w-full px-6 lg:px-8 py-8 min-h-[350px] rounded-2xl transition-colors duration-150 ease-in-out flex flex-col justify-between group cursor-default
                    {{ $hl
                        ? 'bg-slate-900 dark:bg-white border border-slate-900 dark:border-white shadow-xl md:scale-105 z-10'
                        : 'bg-slate-100 dark:bg-slate-800 hover:bg-violet-500' }}">

                        @if ($hl)
                            <span
                                class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 whitespace-nowrap rounded-full bg-violet-500 px-4 py-1 text-xs font-bold uppercase tracking-wide text-white shadow-md">
                                Paling Laris
                            </span>
                        @endif

                        <div class="flex flex-col gap-4">
                            <h4
                                class="font-extrabold text-lg mt-2 text-center transition-colors duration-150 ease-in-out
                            {{ $hl ? 'text-white dark:text-slate-900' : 'text-slate-700 dark:text-slate-300 group-hover:text-white' }}">
                                {{ $plan['name'] }}
                            </h4>

                            <div class="flex flex-col items-center gap-2 justify-center">
                                <div class="flex items-center gap-2">
                                    <span
                                        class="text-sm line-through transition-colors duration-150 ease-in-out
                                    {{ $hl
                                        ? 'text-slate-400 dark:text-slate-500'
                                        : 'text-slate-400 dark:text-slate-500 group-hover:text-violet-200' }}">
                                        Rp {{ number_format($plan['original'], 0, ',', '.') }}
                                    </span>
                                    <span
                                        class="rounded-full px-2 py-0.5 text-xs font-bold transition-colors duration-150 ease-in-out
                                    {{ $hl
                                        ? 'bg-violet-500 text-white'
                                        : 'bg-violet-500 text-white group-hover:bg-white group-hover:text-violet-600' }}">
                                        Hemat {{ $discount }}%
                                    </span>
                                </div>
                                <h3
                                    class="font-extrabold text-3xl lg:text-4xl text-center transition-colors duration-150 ease-in-out
                                {{ $hl ? 'text-white dark:text-slate-900' : 'text-slate-700 dark:text-slate-300 group-hover:text-white' }}">
                                    Rp {{ number_format($plan['price'], 0, ',', '.') }}
                                </h3>
                            </div>

                            <ul
                                class="list-disc font-medium flex flex-col gap-2 mt-4 text-left pl-5 text-sm transition-colors duration-150 ease-in-out
                            {{ $hl ? 'text-slate-300 dark:text-slate-700' : 'text-slate-600 dark:text-slate-400 group-hover:text-white' }}">
                                @foreach ($plan['features'] as $feature)
                                    <li>{{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <a href="https://wa.me/6287835482333?text=Halo%2C%20saya%20ingin%20menggunakan%20jasa%20Web%20Development%20Paket%20{{ urlencode($plan['name']) }}"
                            target="_blank"
                            class="mt-8 font-bold w-full text-center p-2 rounded-full transition-colors duration-150 ease-in-out
                        {{ $hl
                            ? 'bg-violet-500 text-white border border-violet-500 hover:bg-violet-600 hover:border-violet-600'
                            : 'text-slate-700 dark:text-slate-200 border border-slate-400 group-hover:border-white group-hover:text-white hover:bg-white hover:text-violet-600' }}">
                            Dapatkan Paket
                        </a>
                    </div>
                @endforeach
            </div>

            <div
                class="mt-12 flex flex-col lg:flex-row lg:items-center gap-6 lg:gap-10 rounded-2xl border border-slate-900 dark:border-white bg-slate-900 dark:bg-white px-6 py-6 lg:px-8 transition-colors duration-300 ease-in-out hover:border-violet-500 dark:hover:border-violet-400">

                <div class="lg:w-1/3">
                    <span class="text-xs font-semibold uppercase tracking-widest text-violet-300 dark:text-violet-600">
                        Opsional
                    </span>
                    <h4 class="mt-1 text-xl font-bold text-white dark:text-slate-900">
                        Enterprise
                    </h4>
                    <p class="mt-1 text-sm text-slate-300 dark:text-slate-600">
                        <span class="text-violet-300 dark:text-violet-500 font-bold">Website custom</span> sesuai kebutuhan
                        spesifik bisnis Anda. Harga menyesuaikan lingkup pekerjaan.
                    </p>
                </div>

                <div class="flex flex-wrap gap-2 lg:flex-1">
                    @foreach ($enterpriseTags as $tag)
                        <span
                            class="rounded-full border border-slate-700 dark:border-slate-300 px-3 py-1 text-xs font-medium text-slate-300 dark:text-slate-700">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>

                <a href="https://wa.me/6287835482333?text=Halo%2C%20saya%20ingin%20konsultasi%20website%20custom%20Paket%20Enterprise"
                    target="_blank"
                    class="group/cta shrink-0 inline-flex items-center justify-center gap-3 rounded-full bg-white dark:bg-slate-900 py-2 pl-6 pr-2 text-sm font-bold text-slate-900 dark:text-white transition-colors duration-150 ease-in-out hover:bg-violet-500 hover:text-white dark:hover:bg-violet-500">
                    Konsultasi Gratis
                    <span
                        class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-900 dark:bg-white text-white dark:text-slate-900 transition-colors duration-150 ease-in-out group-hover/cta:bg-white group-hover/cta:text-violet-600">
                        <i data-feather="arrow-up-right"
                            class="h-4 w-4 transition-transform duration-150 ease-in-out group-hover/cta:translate-x-0.5 group-hover/cta:-translate-y-0.5"></i>
                    </span>
                </a>
            </div>

        </div>
    </section>
    <section data-type-section
        class="relative isolate overflow-hidden bg-slate-900 dark:bg-white py-24 sm:py-32 lg:py-40 transition-colors duration-500">

        <div data-type-block class="mx-auto max-w-5xl px-6 lg:px-8">
            <p class="text-sm font-semibold uppercase text-slate-400 dark:text-slate-500">
                <span class="font-bold text-white dark:text-slate-900">//</span>
                What We Do
            </p>

            <h2 data-type-text
                class="mt-8 font-display text-3xl sm:text-5xl lg:text-6xl font-semibold tracking-tight text-balance leading-[1.15] text-white dark:text-slate-900">
                We design and build modern
                <span class="text-violet-300 dark:text-violet-500">websites</span>
                that help your
                <span class="text-violet-300 dark:text-violet-500">business</span>
                grow, stand out, and turn visitors into customers.
            </h2>
        </div>
    </section>
    <section class="section py-24 bg-white dark:bg-slate-900 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="flex gap-2 items-center">
                <h2 class="text-sm font-semibold text-slate-500 dark:text-slate-300 uppercase">
                    <span class="font-bold text-slate-800 dark:text-white">//</span>
                    Layanan Kami
                </h2>
            </div>

            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-16 mt-6">
                <h3
                    class="font-primary section-title split lg:flex-1 text-3xl sm:text-4xl md:text-5xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-16 max-w-3xl mx-auto lg:mx-0">
                    Layanan <span class="font-bold text-violet-500 dark:text-violet-300">Website</span> untuk Semua
                    Kebutuhan
                </h3>

                <p
                    class="section-desc w-full lg:w-5/12 lg:max-w-md text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium text-justify lg:text-left">
                    Dari company profile hingga sistem custom, kami bantu wujudkan website modern dan responsif.
                </p>
            </div>

            @php
                $services = [
                    [
                        'icon' => 'briefcase',
                        'title' => 'Company Profile',
                        'desc' => 'Website elegan untuk memperkuat citra dan kredibilitas bisnis Anda.',
                    ],
                    [
                        'icon' => 'shopping-cart',
                        'title' => 'Toko Online',
                        'desc' => 'Solusi e-commerce modern untuk meningkatkan penjualan bisnis Anda.',
                    ],
                    [
                        'icon' => 'layers',
                        'title' => 'Website Instansi',
                        'desc' => 'Cocok untuk instansi pemerintah, sekolah, maupun organisasi non-profit.',
                    ],
                    [
                        'icon' => 'code',
                        'title' => 'Custom Website',
                        'desc' => 'Website dengan fitur fleksibel yang dirancang sesuai kebutuhan bisnis Anda.',
                    ],
                    [
                        'icon' => 'user',
                        'title' => 'Portfolio & Personal',
                        'desc' => 'Tampilkan karya dan profil profesional Anda dengan desain yang berkesan.',
                    ],
                    [
                        'icon' => 'book-open',
                        'title' => 'Website Sekolah',
                        'desc' => 'Informasi akademik, berita, dan pendaftaran siswa dalam satu platform.',
                    ],
                    [
                        'icon' => 'monitor',
                        'title' => 'Landing Page',
                        'desc' => 'Halaman tunggal yang fokus pada konversi untuk promosi dan kampanye.',
                    ],
                    [
                        'icon' => 'settings',
                        'title' => 'Sistem Informasi',
                        'desc' => 'Aplikasi web untuk mengelola data, laporan, dan operasional bisnis.',
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mt-12 sm:mt-16">
                @foreach ($services as $service)
                    <div
                        class="group relative flex flex-col gap-4 rounded-2xl border border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/50 p-6 transition-colors duration-300 ease-in-out hover:bg-slate-900 hover:border-slate-900 dark:hover:bg-white dark:hover:border-white">

                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 transition-colors duration-300 ease-in-out group-hover:bg-violet-500 group-hover:border-violet-500 group-hover:text-white dark:group-hover:bg-violet-500 dark:group-hover:border-violet-500 dark:group-hover:text-white">
                            <i data-feather="{{ $service['icon'] }}" class="h-5 w-5"></i>
                        </div>

                        <div class="flex flex-col gap-2">
                            <h4
                                class="text-lg font-semibold text-slate-800 dark:text-white transition-colors duration-300 ease-in-out group-hover:text-white dark:group-hover:text-slate-900">
                                {{ $service['title'] }}
                            </h4>
                            <p
                                class="text-sm leading-relaxed text-slate-600 dark:text-slate-400 transition-colors duration-300 ease-in-out group-hover:text-slate-300 dark:group-hover:text-slate-600">
                                {{ $service['desc'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section
        class="section w-full py-16 bg-white dark:bg-slate-900 transition-colors duration-300 ease-in-out group/section">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex gap-2 items-center">
                <div
                    class="h-4 w-1 sm:h-5 sm:w-1.5 md:h-6 md:w-2 group-hover/section:w-3 group-hover/section:h-2 rotate-0 group-hover/section:rotate-180 rounded-full bg-violet-900 dark:bg-violet-500 transition-all duration-300 ease-in-out">
                </div>
                <h2 class="text-sm sm:text-base font-semibold text-slate-800 dark:text-slate-300 uppercase">
                    Portofolio
                </h2>
            </div>

            <h3
                class="section-title text-2xl sm:text-3xl md:text-4xl lg:text-5xl max-w-md md:max-w-lg font-bold text-slate-800 dark:text-slate-100 mt-6 sm:mt-8 leading-normal sm:leading-10 md:leading-16">
                Proyek yang Telah Kami Kerjakan
            </h3>

            <div class="mt-6 sm:mt-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4 md:gap-6">
                <p
                    class="section-desc text-sm sm:text-base md:text-lg text-slate-700 dark:text-slate-300 font-medium text-justify max-w-2xl md:max-w-3xl">
                    Beragam website dan aplikasi yang kami bangun dengan fokus pada desain modern, performa optimal, dan
                    kebutuhan bisnis klien.
                </p>

                <a href="{{ route('portfolio.index') }}"
                    class="inline-flex items-center gap-2 text-sm sm:text-base font-semibold text-violet-600 dark:text-violet-400 hover:underline whitespace-nowrap">
                    Jelajahi Portfolio
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
            <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-8">
                @foreach ($portfolios as $portfolio)
                    <a href="{{ route('portfolio.show', $portfolio->slug) }}"
                        class="group p-4 sm:p-6 rounded-2xl sm:rounded-3xl bg-slate-100 dark:bg-slate-800
                            h-[380px] sm:h-[450px] relative overflow-hidden
                            transition-all duration-300
                            hover:bg-violet-600 active:bg-violet-600
                            dark:hover:bg-violet-700 dark:active:bg-violet-700
                            cursor-pointer block">


                        <h3
                            class="text-xl sm:text-xl text-slate-800 dark:text-slate-100 font-bold line-clamp-2
                                transition-colors duration-300
                                group-hover:text-white group-active:text-white
                                leading-6">
                            {{ $portfolio->name }}
                        </h3>

                        <p
                            class="text-slate-700 dark:text-slate-300 text-sm mt-4
                                    transition-colors duration-300
                                    group-hover:text-white group-active:text-white
                                    line-clamp-2">

                            {{ $portfolio->summary }}
                        </p>

                        <div
                            class="w-full absolute bg-slate-400 dark:bg-slate-600 bottom-0
                                    h-[200px] sm:h-[230px] left-0 right-0
                                    rounded-t-2xl sm:rounded-t-3xl z-30 overflow-hidden
                                    transition-transform duration-300
                                    group-hover:scale-[1.02] group-active:scale-[1.02]">

                            <img src="{{ asset('storage/' . $portfolio->image) }}" alt="Portfolio Web Design"
                                class="w-full h-full object-cover object-center">
                        </div>

                        <div
                            class="w-full absolute bg-slate-300/60 dark:bg-slate-500/60
                             
                                bottom-6 group-hover:bottom-7 group-active:bottom-7
                                h-[200px] sm:h-[230px] left-0 right-0
                                rounded-t-2xl sm:rounded-t-3xl z-20 scale-95 sm:scale-90
                                transition-all duration-300
                                group-hover:scale-[0.97] sm:group-hover:scale-95 group-active:scale-[0.97] sm:group-active:scale-95">

                        </div>

                        <div
                            class="w-full absolute bg-slate-300/40 dark:bg-slate-500/40
                                 
                                    bottom-12 group-hover:bottom-14 group-active:bottom-14
                                    h-[200px] sm:h-[230px] left-0 right-0
                                    rounded-t-2xl sm:rounded-t-3xl z-10 scale-85 sm:scale-80
                                    transition-all duration-300
                                    group-hover:scale-[0.92] sm:group-hover:scale-90 group-active:scale-[0.97] sm:group-active:scale-90">

                        </div>

                        <div
                            class="rounded-full bg-white dark:bg-slate-900
                                    h-8 w-8 sm:h-12 sm:w-12
                                    absolute z-40 bottom-3 right-3 sm:bottom-4 sm:right-4
                                    flex items-center justify-center shadow-lg
                                    transition-all duration-300
                                    group-hover:scale-110 group-active:scale-110
                                    group-hover:-rotate-45 group-active:-rotate-45">

                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-slate-800 dark:text-slate-100
                                transition-colors duration-300
                                group-hover:text-violet-600 group-active:text-violet-600
                                dark:group-hover:text-violet-400 dark:group-active:text-violet-400"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </div>

                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section py-24 bg-slate-50 dark:bg-slate-950 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="flex gap-2 items-center">
                <h2 class="text-sm font-semibold text-slate-500 dark:text-slate-300 uppercase">
                    <span class="font-bold text-slate-800 dark:text-white">//</span>
                    Testimonial
                </h2>
            </div>

            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-16 mt-6 mb-24">
                <h3
                    class="font-primary section-title split lg:flex-1 text-3xl sm:text-4xl md:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-20 max-w-3xl mx-auto lg:mx-0">
                    Apa Kata <span class="font-bold text-violet-500 dark:text-violet-300">Mereka</span> Tentang Kami
                </h3>

                <p
                    class="section-desc w-full lg:w-5/12 lg:max-w-md text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium text-justify lg:text-left">
                    Mereka puas dengan website modern yang mudah digunakan dan mendukung pertumbuhan bisnis.
                </p>
            </div>

            @php
                $testimonials = [
                    [
                        'name' => 'Salim Sulaiman',
                        'username' => '@salimsulaiman',
                        'message' =>
                            'Website yang dibuat sangat profesional, responsif, dan sesuai kebutuhan bisnis saya. Desainnya modern, mudah digunakan, serta membantu meningkatkan kepercayaan pelanggan terhadap brand kami.',
                    ],
                    [
                        'name' => 'Aisyah Putri',
                        'username' => '@aisyahputri',
                        'message' =>
                            'Timnya cepat tanggap dan hasil pekerjaannya benar-benar memuaskan. Proses komunikasi juga lancar, sehingga ide saya bisa diterjemahkan dengan baik menjadi website yang elegan dan fungsional.',
                    ],
                    [
                        'name' => 'Budi Santoso',
                        'username' => '@budisantoso',
                        'message' =>
                            'Website yang mereka buat responsif, mudah digunakan, dan sangat membantu meningkatkan penjualan online saya. Dengan tampilan yang profesional, pelanggan jadi lebih percaya dan nyaman berbelanja.',
                    ],
                    [
                        'name' => 'Citra Dewi',
                        'username' => '@citradewi',
                        'message' =>
                            'Layanan yang diberikan sangat ramah dan hasil desain website terlihat elegan. Saya merasa terbantu karena website ini memudahkan pelanggan dalam mengakses informasi produk dan layanan kami.',
                    ],
                    [
                        'name' => 'Rizky Maulana',
                        'username' => '@rizkymaulana',
                        'message' =>
                            'Website yang dibuat tidak hanya cepat dan modern, tetapi juga benar-benar sesuai dengan ekspektasi saya. Kehadiran website ini membantu saya mengembangkan bisnis ke pasar yang lebih luas.',
                    ],
                    [
                        'name' => 'Dewi Lestari',
                        'username' => '@dewilestari',
                        'message' =>
                            'Proses pengerjaan website dijelaskan dengan sangat detail dan hasil akhirnya luar biasa profesional. Saya merasa tenang karena seluruh kebutuhan bisnis saya bisa diakomodasi dengan baik melalui website ini.',
                    ],
                ];

                if (!function_exists('censorText')) {
                    function censorText($text)
                    {
                        return preg_replace_callback(
                            '/\b(\w)(\w+)\b/u',
                            function ($matches) {
                                return $matches[1] . str_repeat('*', mb_strlen($matches[2]));
                            },
                            $text,
                        );
                    }
                }
            @endphp

            <div x-data="{
                canPrev: false,
                canNext: true,
                progress: 0,
                update() {
                    const el = this.$refs.track;
                    const max = el.scrollWidth - el.clientWidth;
                    this.canPrev = el.scrollLeft > 4;
                    this.canNext = el.scrollLeft < max - 4;
                    this.progress = max > 0 ? el.scrollLeft / max : 1;
                },
                scrollByItem(dir) {
                    const el = this.$refs.track;
                    const item = el.children[0];
                    const step = item.offsetWidth + 32;
                    el.scrollBy({ left: dir * step, behavior: 'smooth' });
                }
            }" x-init="$nextTick(() => update())" @resize.window.debounce.150ms="update()"
                class="mt-12 sm:mt-16">

                <div x-ref="track" @scroll.passive="update()"
                    class="flex gap-8 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-2 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                    @foreach ($testimonials as $testimonial)
                        <figure
                            class="snap-start shrink-0 w-[85%] sm:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.334rem)] flex flex-col justify-between gap-8 border-l border-slate-300 dark:border-slate-800 pl-6">

                            <div class="flex flex-col gap-5">
                                <svg viewBox="0 0 24 24" fill="currentColor"
                                    class="h-8 w-8 text-violet-500 dark:text-violet-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.17 6C4.86 6 3 7.86 3 10.17V17c0 .55.45 1 1 1h5c.55 0 1-.45 1-1v-5c0-.55-.45-1-1-1H6.2c.1-1.1 1-2 2.1-2h.2c.55 0 1-.45 1-1V7c0-.55-.45-1-1-1H7.17zM17.17 6C14.86 6 13 7.86 13 10.17V17c0 .55.45 1 1 1h5c.55 0 1-.45 1-1v-5c0-.55-.45-1-1-1h-2.8c.1-1.1 1-2 2.1-2h.2c.55 0 1-.45 1-1V7c0-.55-.45-1-1-1h-1.33z" />
                                </svg>

                                <blockquote class="text-base leading-relaxed text-slate-700 dark:text-slate-300">
                                    {{ $testimonial['message'] }}
                                </blockquote>
                            </div>

                            <figcaption class="flex items-center gap-3">
                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-slate-900 dark:bg-white text-xs font-bold uppercase text-white dark:text-slate-900">
                                    {{ \Illuminate\Support\Str::of($testimonial['name'])->explode(' ')->map(fn($w) => mb_substr($w, 0, 1))->take(2)->implode('') }}
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-sm font-semibold text-slate-800 dark:text-white">
                                        {{ censorText($testimonial['name']) }}
                                    </span>
                                    <span class="text-xs font-medium text-slate-500 dark:text-slate-400">
                                        {{ censorText($testimonial['username']) }}
                                    </span>
                                </div>
                            </figcaption>
                        </figure>
                    @endforeach
                </div>

                <div class="mt-10 flex items-center gap-6">
                    <div class="h-px flex-1 bg-slate-300 dark:bg-slate-800 relative overflow-hidden">
                        <div class="absolute inset-y-0 left-0 w-full origin-left bg-slate-800 dark:bg-white transition-transform duration-300 ease-out"
                            :style="`transform: scaleX(${Math.max(0.15, progress)})`"></div>
                    </div>

                    <div class="flex items-center gap-2">
                        <button type="button" @click="scrollByItem(-1)" :disabled="!canPrev"
                            aria-label="Testimonial sebelumnya"
                            class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-200 transition-colors duration-150 ease-in-out hover:bg-slate-900 hover:text-white hover:border-slate-900 dark:hover:bg-white dark:hover:text-slate-900 dark:hover:border-white disabled:opacity-30 disabled:pointer-events-none">
                            <i data-feather="arrow-left" class="h-4 w-4"></i>
                        </button>
                        <button type="button" @click="scrollByItem(1)" :disabled="!canNext"
                            aria-label="Testimonial berikutnya"
                            class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-200 transition-colors duration-150 ease-in-out hover:bg-slate-900 hover:text-white hover:border-slate-900 dark:hover:bg-white dark:hover:text-slate-900 dark:hover:border-white disabled:opacity-30 disabled:pointer-events-none">
                            <i data-feather="arrow-right" class="h-4 w-4"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section
        class="section relative isolate overflow-hidden py-24 sm:py-32 bg-slate-950 dark:bg-white transition-colors duration-500">
        <div class="mx-auto max-w-7xl text-center px-6">

            <img src="{{ asset('assets/logos/elvacode-logo.webp') }}" alt="Elvacode Logo"
                class="w-24 sm:w-28 md:w-32 mx-auto mb-8 sm:mb-10 invert dark:invert-0 transition duration-300">

            <div class="flex justify-center">
                <h2 class="text-sm font-semibold text-slate-400 dark:text-slate-500 uppercase">
                    <span class="font-bold text-white dark:text-slate-900">//</span>
                    Mulai Sekarang
                </h2>
            </div>

            <h3
                class="font-primary section-title split mt-6 text-3xl sm:text-4xl md:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-white dark:text-slate-900 leading-normal sm:leading-10 md:leading-20">
                Tingkatkan Bisnis Anda dengan Website
                <span class="font-bold text-violet-300 dark:text-violet-500">Profesional</span>
            </h3>

            <p
                class="section-desc mt-6 sm:mt-8 mx-auto max-w-xl text-sm sm:text-base leading-relaxed text-slate-300 dark:text-slate-600 font-medium">
                Bersama <span class="font-semibold text-white dark:text-slate-900">Elvacode</span>, hadirkan website
                modern, cepat, dan elegan yang siap meningkatkan kehadiran digital Anda.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact.index') }}"
                    class="group/cta w-full sm:w-auto inline-flex items-center justify-center gap-3 rounded-full bg-white dark:bg-slate-900 py-2 pl-6 pr-2 text-sm font-bold text-slate-900 dark:text-white transition-colors duration-150 ease-in-out hover:bg-violet-500 hover:text-white dark:hover:bg-violet-500">
                    Konsultasi Gratis
                    <span
                        class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-900 dark:bg-white text-white dark:text-slate-900 transition-colors duration-150 ease-in-out group-hover/cta:bg-white group-hover/cta:text-violet-600">
                        <i data-feather="arrow-up-right"
                            class="h-4 w-4 transition-transform duration-150 ease-in-out group-hover/cta:translate-x-0.5 group-hover/cta:-translate-y-0.5"></i>
                    </span>
                </a>

                <a href="{{ route('portfolio.index') }}"
                    class="group/cta w-full sm:w-auto inline-flex items-center justify-center gap-3 rounded-full border border-slate-600 dark:border-slate-300 py-2 pl-6 pr-2 text-sm font-bold text-white dark:text-slate-900 transition-colors duration-150 ease-in-out hover:border-violet-400 hover:text-violet-300 dark:hover:border-violet-500 dark:hover:text-violet-600">
                    Lihat Portofolio
                    <span
                        class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-800 dark:bg-slate-100 text-white dark:text-slate-900 transition-colors duration-150 ease-in-out group-hover/cta:bg-violet-500 group-hover/cta:text-white">
                        <i data-feather="arrow-right"
                            class="h-4 w-4 transition-transform duration-150 ease-in-out group-hover/cta:translate-x-0.5"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>
@endsection
