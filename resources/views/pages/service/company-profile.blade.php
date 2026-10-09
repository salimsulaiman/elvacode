@extends('components.layouts.app')

@section('title', 'Website Company Profile - Elvacode')
@section('meta_description',
    'Jasa pembuatan website company profile dari Elvacode. Perkenalkan bisnis Anda, bangun
    kepercayaan pelanggan, dan mudahkan mereka menghubungi Anda.')
@section('og_title', 'Website Company Profile - Elvacode')

@section('content')
    @php
        $companyProfiles = $companyProfiles ?? collect();
        $firstProject = $companyProfiles->first();
        $heroImage = $firstProject ? asset('storage/' . $firstProject->thumbnail) : null;

        $eyebrow = 'font-primary text-sm font-semibold uppercase tracking-widest text-slate-500 dark:text-slate-300';
        $slash = 'font-bold text-slate-800 dark:text-white';
        $heading =
            'font-primary section-title text-3xl sm:text-4xl md:text-5xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-tight md:leading-[1.15]';
        $body = 'text-sm sm:text-base text-slate-600 dark:text-slate-300 font-medium leading-relaxed';

        $btnPrimary =
            'group/cta inline-flex w-full sm:w-auto items-center justify-center gap-3 rounded-full bg-violet-600 py-2 pl-6 pr-2 text-sm font-bold text-white transition-colors duration-150 ease-in-out hover:bg-violet-500';
        $btnPrimaryIcon = 'flex h-8 w-8 items-center justify-center rounded-full bg-white text-violet-600 shrink-0';
        $btnGhost =
            'group/cta inline-flex w-full sm:w-auto items-center justify-center gap-3 rounded-full border border-slate-300 dark:border-slate-700 py-2 pl-6 pr-2 text-sm font-bold text-slate-800 dark:text-white transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:hover:border-violet-400 dark:hover:text-violet-300 shrink-0';
        $btnGhostIcon =
            'flex h-8 w-8 items-center justify-center rounded-full bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-white transition-colors duration-150 ease-in-out group-hover/cta:bg-violet-500 group-hover/cta:text-white';

        $offers = [
            ['title' => 'Tentang Bisnis', 'desc' => 'Ceritakan siapa Anda dan apa yang Anda kerjakan.'],
            ['title' => 'Layanan', 'desc' => 'Tampilkan produk atau jasa yang Anda tawarkan.'],
            ['title' => 'Portfolio', 'desc' => 'Tunjukkan hasil kerja dan pengalaman Anda.'],
            ['title' => 'Testimoni', 'desc' => 'Perlihatkan pendapat pelanggan yang pernah bekerja sama.'],
            ['title' => 'Kontak', 'desc' => 'Beri jalan mudah bagi pelanggan untuk menghubungi Anda.'],
        ];

        $reasons = [
            [
                'title' => 'Harga Jelas',
                'desc' => 'Paket mulai dari Rp 650.000. Rincian fitur bisa dilihat sebelum Anda memutuskan.',
            ],
            [
                'title' => 'Domain, Hosting & SSL',
                'desc' => 'Domain dan hosting gratis 1 tahun, sudah termasuk SSL agar website aman diakses.',
            ],
            ['title' => 'Revisi Desain', 'desc' => 'Revisi 1 sampai 3 kali, sesuai paket yang Anda pilih.'],
            ['title' => 'Maintenance Gratis', 'desc' => 'Gratis 1 tahun untuk paket Professional dan Premium.'],
        ];

        $workLayout = ['lg:col-span-8', 'lg:col-span-4 lg:mt-24', 'lg:col-span-5', 'lg:col-span-7 lg:mt-16'];
        $workRatio = ['aspect-[16/10]', 'aspect-[4/5]', 'aspect-[4/3]', 'aspect-[16/10]'];
    @endphp

    <section
        class="section hero-section font-body relative w-full bg-white dark:bg-slate-900 pt-36 sm:pt-44 pb-20 sm:pb-28 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex gap-2 items-center">
                <h2 class="{{ $eyebrow }}">
                    <span class="{{ $slash }}">//</span>
                    Website Company Profile
                </h2>
            </div>

            <div class="mt-8 grid gap-10 lg:grid-cols-12 lg:items-end lg:gap-16">
                <h1
                    class="hero-title split font-primary mt-8 text-4xl sm:text-5xl lg:text-6xl xl:text-6xl tracking-tight text-balance text-slate-800 dark:text-white leading-[1.08] font-medium lg:col-span-7">
                    Tampilkan Bisnis Anda
                    <span class="text-violet-500 dark:text-violet-300 font-bold">Seprofesional</span> Layanan yang Anda
                    Berikan.
                </h1>

                <div class="hero-subtitle lg:col-span-5">
                    <p class="{{ $body }}">
                        Website profesional untuk memperkenalkan bisnis dan membantu calon pelanggan menghubungi Anda.
                    </p>

                    <div class="mt-8 flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('contact.index') }}" class="{{ $btnPrimary }} w-full sm:w-auto justify-center">
                            Konsultasi Sekarang
                            <span class="{{ $btnPrimaryIcon }}">
                                <i data-feather="arrow-up-right"
                                    class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                            </span>
                        </a>

                        <a href="#selected-work" class="{{ $btnGhost }} w-full sm:w-auto justify-center">
                            Lihat Portfolio
                            <span class="{{ $btnGhostIcon }}">
                                <i data-feather="arrow-down" class="h-4 w-4"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            @php
                $fullPagePath = 'assets/images/fullpage-company-profile.jpg';

                $localFullPageFile = public_path($fullPagePath);
                $publicHtmlFullPageFile = base_path('../public_html/' . $fullPagePath);

                if (file_exists($localFullPageFile)) {
                    $fullPage = asset($fullPagePath);
                } elseif (file_exists($publicHtmlFullPageFile)) {
                    $fullPage = asset($fullPagePath);
                } else {
                    $fullPage = null;
                }

                $mockRatio = 'h-[calc(100svh-9rem)] sm:h-[calc(100svh-10rem)] md:h-[calc(100svh-12rem)]';
            @endphp

            <div class="mt-10 w-full sm:mt-20"
                @if ($fullPage) data-browser-scroll @else data-parallax="24" @endif>
                <div data-browser-frame class="mx-auto w-full md:w-[82%]">
                    @if ($fullPage)
                        <x-browser-mockup :src="$fullPage" :alt="$firstProject->name ?? 'Contoh website company profile'" url="jatiunggulpermai.com" :ratio="$mockRatio"
                            :scroll="true" />
                    @else
                        <x-browser-mockup :src="$heroImage" :alt="$firstProject->name ?? ''" url="jatiunggulpermai.com" :ratio="$mockRatio">
                            <x-site-wireframe variant="a" />
                        </x-browser-mockup>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section
        class="font-body bg-white dark:bg-slate-900 pt-6 sm:pt-10 lg:pt-14 pb-24 sm:pb-32 lg:pb-40 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 data-word-reveal
                class="font-primary max-w-5xl text-3xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold tracking-tight text-balance text-slate-800 dark:text-white leading-[1.12]">
                Website Anda Sering Menjadi
                <span class="text-violet-500 dark:text-violet-300">Kesan Pertama</span>
                bagi Calon Pelanggan.
            </h2>

            <p
                class="mt-10 sm:mt-14 max-w-xl text-base sm:text-lg font-medium leading-relaxed text-slate-600 dark:text-slate-300">
                Pastikan kesan pertama itu mencerminkan kualitas bisnis Anda.
            </p>
        </div>
    </section>

    <section
        class="font-body bg-slate-50 dark:bg-slate-950 py-24 sm:py-32 lg:py-40 border-y border-slate-200 dark:border-slate-800 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid gap-10 lg:grid-cols-12 lg:gap-16 lg:items-center">

                <div class="lg:col-span-6">
                    <div class="stat-number font-primary text-[8rem] sm:text-[12rem] lg:text-[15rem] font-bold leading-none tracking-tighter text-violet-600 dark:text-violet-300"
                        data-value="70">
                        <span class="stat-value">0</span><span>%</span>
                    </div>
                </div>

                <div class="lg:col-span-6 lg:border-l lg:border-slate-300 lg:pl-16 dark:lg:border-slate-700">
                    <p
                        class="font-primary text-xl sm:text-2xl lg:text-3xl font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-snug">
                        Pembelian B2B Bisa
                        <span class="text-violet-500 dark:text-violet-300">Dimulai Sebelum</span>
                        Calon Pembeli Menghubungi Anda.
                    </p>
                    <p class="{{ $body }} mt-8 max-w-md text-justify">
                        Artinya, calon pelanggan
                        <span class="font-semibold text-violet-500 dark:text-violet-300">mencari tahu sendiri lewat
                            website</span>
                        lebih dulu. Website Anda perlu
                        <span class="font-semibold text-violet-500 dark:text-violet-300">menjawab pertanyaan mereka</span>
                        sebelum mereka memutuskan menghubungi.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section
        class="section font-body bg-white dark:bg-slate-900 py-24 sm:py-32 border-y border-slate-200 dark:border-slate-800 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid gap-14 lg:grid-cols-12 lg:gap-20">

                <div class="lg:col-span-5">
                    <div class="flex gap-2 items-center">
                        <h2 class="{{ $eyebrow }}">
                            <span class="{{ $slash }}">//</span>
                            Yang Kami Tawarkan
                        </h2>
                    </div>

                    <h3 class="{{ $heading }} mt-6">
                        Semua Tentang Bisnis Anda dalam
                        <span class="text-violet-500 dark:text-violet-300">Satu</span> Website.
                    </h3>

                    <p class="section-desc {{ $body }} mt-6 sm:mt-8 max-w-md">
                        Kami membuatkan website company profile lengkap, rapi, dan nyaman dibuka dari HP maupun
                        komputer. Calon pelanggan jadi tahu bisnis Anda tanpa harus bertanya satu per satu.
                    </p>
                </div>

                <ul class="lg:col-span-7 border-t border-slate-300 dark:border-slate-700">
                    @foreach ($offers as $item)
                        <li
                            class="group grid grid-cols-12 items-baseline gap-4 border-b border-slate-300 py-6 transition-colors duration-300 ease-in-out hover:border-violet-500 dark:border-slate-700 dark:hover:border-violet-400 sm:py-8">
                            <span
                                class="font-primary col-span-2 text-sm font-semibold text-violet-600 dark:text-violet-300 sm:col-span-1">
                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </span>
                            <h4
                                class="font-primary col-span-10 text-2xl font-semibold tracking-tight text-slate-800 transition-colors duration-300 ease-in-out group-hover:text-violet-600 dark:text-white dark:group-hover:text-violet-300 sm:col-span-5 sm:text-3xl">
                                {{ $item['title'] }}
                            </h4>
                            <p
                                class="col-span-10 col-start-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400 sm:col-span-6 sm:col-start-auto">
                                {{ $item['desc'] }}
                            </p>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </section>

    <section
        class="section font-body bg-slate-50 dark:bg-slate-950 py-24 sm:py-32 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <div class="flex gap-2 items-center">
                        <h2 class="{{ $eyebrow }}">
                            <span class="{{ $slash }}">//</span>
                            Kenapa Elvacode
                        </h2>
                    </div>

                    <h3 class="{{ $heading }} mt-6 max-w-3xl">
                        Sudah Termasuk dalam
                        <span class="text-violet-500 dark:text-violet-300">Paket.</span>
                    </h3>
                </div>

                <a href="{{ route('pricing.index') }}"
                    class="group/link inline-flex w-fit items-center gap-2 text-sm font-semibold text-slate-800 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:text-white dark:hover:text-violet-300">
                    Lihat Paket Harga
                    <i data-feather="arrow-right" class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                </a>
            </div>

            <div class="mt-16 sm:mt-20 grid gap-x-8 gap-y-12 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($reasons as $reason)
                    <div
                        class="group border-t border-slate-200 pt-6 transition-colors duration-300 ease-in-out hover:border-violet-500 dark:border-slate-800 dark:hover:border-violet-400">
                        <span class="font-primary text-sm font-semibold text-violet-600 dark:text-violet-300">
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </span>
                        <h4 class="font-primary mt-4 text-xl font-semibold text-slate-800 dark:text-white">
                            {{ $reason['title'] }}
                        </h4>
                        <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            {{ $reason['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="font-body bg-slate-900 dark:bg-white py-28 sm:py-36 lg:py-44 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 data-word-reveal
                class="font-primary max-w-5xl text-3xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold tracking-tight text-balance text-white dark:text-slate-900 leading-[1.12]">
                Website yang Baik Menjelaskan Bisnis Anda
                <span class="text-violet-300 dark:text-violet-600">Sebelum Anda Sempat Bicara.</span>
            </h2>
        </div>
    </section>

    @if ($companyProfiles->isNotEmpty())
        <section id="selected-work" aria-label="Portfolio Company Profile"
            class="section font-body scroll-mt-20 bg-white dark:bg-slate-900 py-24 sm:py-32 transition-colors duration-300 ease-in-out">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
                    <div>
                        <div class="flex gap-2 items-center">
                            <h2 class="{{ $eyebrow }}">
                                <span class="{{ $slash }}">//</span>
                                Selected Work
                            </h2>
                        </div>

                        <h3 class="{{ $heading }} mt-6 max-w-3xl">
                            Website yang Sudah
                            <span class="text-violet-500 dark:text-violet-300">Kami Buat.</span>
                        </h3>
                    </div>

                    <a href="{{ route('portfolio.index') }}"
                        class="group/link inline-flex w-fit items-center gap-2 text-sm font-semibold text-slate-800 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:text-white dark:hover:text-violet-300">
                        Lihat Semua Portofolio
                        <i data-feather="arrow-right" class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                    </a>
                </div>

                <div class="mt-16 sm:mt-20 grid grid-cols-1 gap-x-8 gap-y-14 lg:grid-cols-12">
                    @foreach ($companyProfiles as $project)
                        <a href="{{ route('portfolio.show', $project->slug) }}"
                            class="group block {{ $workLayout[$loop->index % 4] }}">
                            <div
                                class="overflow-hidden rounded-2xl border border-slate-200 bg-slate-100 dark:border-slate-800 dark:bg-slate-800 {{ $workRatio[$loop->index % 4] }}">
                                <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->name }}"
                                    loading="lazy"
                                    class="h-full w-full object-cover object-top transition-transform duration-500 ease-in-out group-hover:scale-[1.02]">
                            </div>

                            <div class="mt-6 flex items-start justify-between gap-6">
                                <div class="min-w-0">
                                    <span
                                        class="text-xs font-semibold uppercase tracking-widest text-violet-600 dark:text-violet-300">
                                        {{ $project->category->name }}
                                    </span>
                                    <h4
                                        class="font-primary mt-2 line-clamp-1 text-2xl font-semibold text-slate-800 transition-colors duration-150 ease-in-out group-hover:text-violet-600 dark:text-white dark:group-hover:text-violet-300">
                                        {{ $project->name }}
                                    </h4>
                                    <p
                                        class="mt-2 line-clamp-2 max-w-xl text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                        {{ $project->summary }}
                                    </p>
                                </div>

                                <span
                                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-slate-300 text-slate-800 transition-colors duration-300 ease-in-out group-hover:border-violet-500 group-hover:bg-violet-500 group-hover:text-white dark:border-slate-700 dark:text-white dark:group-hover:border-violet-500">
                                    <i data-feather="arrow-up-right"
                                        class="h-4 w-4 transition-transform duration-300 ease-in-out group-hover:translate-x-0.5 group-hover:-translate-y-0.5"></i>
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @php
        $faqs = [
            [
                'q' => 'Berapa biaya membuat website company profile?',
                'a' =>
                    'Untuk website company profile yang lebih lengkap dan profesional, biasanya kebutuhan masuk ke Paket Professional atau Premium, dengan estimasi harga mulai dari Rp 1.500.000. Harga dapat disesuaikan dengan jumlah halaman dan fitur yang dibutuhkan.',
            ],
            [
                'q' => 'Apa saja yang sudah termasuk dalam paket?',
                'a' =>
                    'Paket mencakup domain dan hosting gratis selama 1 tahun, SSL/HTTPS, tampilan responsif di HP dan komputer, serta revisi desain. Jumlah halaman, fitur, dan revisi berbeda di setiap paket.',
            ],
            [
                'q' => 'Berapa lama pengerjaannya?',
                'a' =>
                    'Tergantung jumlah halaman, fitur, dan kelengkapan materi yang Anda siapkan. Perkiraan waktu pengerjaan kami sampaikan saat konsultasi sebelum proyek dimulai.',
            ],
            [
                'q' => 'Apa yang perlu saya siapkan?',
                'a' =>
                    'Cukup informasi dasar bisnis Anda, seperti nama, deskripsi, daftar layanan, logo, foto, dan informasi kontak. Jika belum lengkap, kami bantu arahkan saat konsultasi.',
            ],
            [
                'q' => 'Apakah desainnya bisa disesuaikan dengan bisnis saya?',
                'a' =>
                    'Bisa. Tampilan, warna, tipografi, dan susunan halaman disesuaikan dengan karakter bisnis Anda, bukan sekadar template yang diganti nama dan isinya.',
            ],
            [
                'q' => 'Bagaimana kalau ada yang ingin diubah setelah website jadi?',
                'a' =>
                    'Anda bisa menggunakan jatah revisi desain sesuai paket. Untuk paket Professional dan Premium, tersedia juga maintenance gratis selama 1 tahun.',
            ],
            [
                'q' => 'Bagaimana cara memulai?',
                'a' =>
                    'Hubungi kami lewat WhatsApp atau formulir kontak, ceritakan kebutuhan bisnis Anda, lalu kami bantu menentukan paket dan fitur yang paling sesuai.',
            ],
        ];
    @endphp

    <section id="faq" aria-label="Pertanyaan yang sering ditanyakan"
        class="section font-body bg-slate-50 dark:bg-slate-950 py-24 sm:py-32 border-y border-slate-200 dark:border-slate-800 transition-colors duration-300 ease-in-out">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="max-w-3xl">
                <div class="flex gap-2 items-center">
                    <h2 class="{{ $eyebrow }}">
                        <span class="{{ $slash }}">//</span>
                        FAQ
                    </h2>
                </div>

                <h3 class="{{ $heading }} mt-6">
                    Pertanyaan yang
                    <span class="text-violet-500 dark:text-violet-300">Sering</span> Ditanyakan.
                </h3>

                <p class="section-desc {{ $body }} mt-6 sm:mt-8 max-w-2xl">
                    Beberapa pertanyaan yang sering kami terima sebelum memulai pembuatan website.
                </p>

                <a href="https://wa.me/6287835482333?text=Halo%20Elvacode,%20saya%20ingin%20bertanya%20tentang%20website%20company%20profile."
                    target="_blank" rel="noopener"
                    class="group/link mt-8 inline-flex w-fit items-center gap-2 text-sm font-semibold text-slate-800 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:text-white dark:hover:text-violet-300">
                    Tanya via WhatsApp
                    <i data-feather="arrow-up-right" class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                </a>
            </div>

            <div x-data="{ open: 0 }" class="mt-16 sm:mt-20 border-t border-slate-300 dark:border-slate-700">

                @foreach ($faqs as $faq)
                    <div class="border-b border-slate-300 dark:border-slate-700">
                        <h4>
                            <button type="button"
                                @click="open = open === {{ $loop->index }} ? null : {{ $loop->index }}"
                                :aria-expanded="(open === {{ $loop->index }}).toString()"
                                aria-controls="faq-{{ $loop->index }}"
                                class="group flex w-full items-center justify-between gap-6 py-6 text-left sm:py-7">

                                <span
                                    class="font-primary text-lg font-semibold tracking-tight text-slate-800 transition-colors duration-300 ease-in-out group-hover:text-violet-600 dark:text-white dark:group-hover:text-violet-300 sm:text-xl"
                                    :class="open === {{ $loop->index }} ? 'text-violet-600 dark:text-violet-300' : ''">
                                    {{ $faq['q'] }}
                                </span>

                                <span
                                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border border-slate-300 text-slate-700 transition-all duration-300 ease-in-out group-hover:border-violet-500 dark:border-slate-700 dark:text-slate-200"
                                    :class="open === {{ $loop->index }} ?
                                        'rotate-45 border-violet-500 bg-violet-500 text-white dark:border-violet-500' :
                                        ''">
                                    <i data-feather="plus" class="h-4 w-4"></i>
                                </span>
                            </button>
                        </h4>

                        <div id="faq-{{ $loop->index }}"
                            class="grid transition-[grid-template-rows] duration-300 ease-in-out"
                            :class="open === {{ $loop->index }} ? 'grid-rows-[1fr]' : 'grid-rows-[0fr]'">

                            <div class="overflow-hidden">
                                <p
                                    class="max-w-3xl pb-7 text-sm leading-relaxed text-slate-600 dark:text-slate-300 sm:text-base">
                                    {{ $faq['a'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <script type="application/ld+json">
            {!! json_encode(
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => collect($faqs)->map(fn($f) => [
                        '@type' => 'Question',
                        'name' => $f['q'],
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => $f['a'],
                        ],
                    ])->all(),
                ],
                JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES,
            ) !!}
        </script>

    </section>

    <section
        class="section font-body relative isolate overflow-hidden bg-slate-950 dark:bg-violet-500 py-28 sm:py-36 lg:py-48 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="flex justify-center">
                <h2
                    class="font-primary text-sm font-semibold uppercase tracking-widest text-slate-400 dark:text-violet-100">
                    <span class="font-bold text-white dark:text-slate-950">//</span>
                    Siap Punya Website untuk Bisnis Anda?
                </h2>
            </div>

            <a href="https://wa.me/6287835482333?text=Halo%20Elvacode,%20saya%20tertarik%20membuat%20website%20company%20profile.%20Bisa%20minta%20info%20lebih%20lanjut?"
                target="_blank" rel="noopener" aria-label="Get in touch lewat WhatsApp"
                class="group/cta mt-10 flex items-center justify-center gap-4 sm:mt-14 sm:gap-8 lg:gap-12">

                <span
                    class="font-primary text-5xl font-bold leading-none tracking-tighter text-white transition-colors duration-300 ease-in-out group-hover/cta:text-violet-300 dark:text-slate-950 dark:group-hover/cta:text-white sm:text-7xl md:text-8xl lg:text-9xl xl:text-[10rem]">
                    Get in Touch
                </span>

                <span
                    class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-white text-slate-950 transition-colors duration-300 ease-in-out group-hover/cta:bg-violet-500 group-hover/cta:text-white dark:bg-slate-950 dark:text-white dark:group-hover/cta:bg-white dark:group-hover/cta:text-violet-600 sm:h-20 sm:w-20 md:h-24 md:w-24 lg:h-32 lg:w-32 xl:h-40 xl:w-40">
                    <i data-feather="arrow-up-right"
                        class="h-6 w-6 transition-transform duration-300 ease-in-out group-hover/cta:translate-x-1 group-hover/cta:-translate-y-1 sm:h-9 sm:w-9 md:h-11 md:w-11 lg:h-14 lg:w-14 xl:h-20 xl:w-20"></i>
                </span>
            </a>

            <p class="mt-10 text-center text-sm font-medium text-slate-400 dark:text-violet-100 sm:mt-14">
                Ceritakan kebutuhan Anda lewat WhatsApp. Kami bantu pilihkan paket yang paling sesuai.
            </p>
        </div>
    </section>
@endsection
