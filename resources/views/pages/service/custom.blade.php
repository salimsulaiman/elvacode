@extends('components.layouts.app')

@section('title', 'Website Custom - Elvacode')
@section('meta_description',
    'Jasa pembuatan website custom dari Elvacode. Sistem informasi, aplikasi web, dan fitur
    khusus yang dirancang sesuai cara kerja bisnis Anda.')
@section('og_title', 'Website Custom - Elvacode')

@section('content')
    @php
        $eyebrow = 'font-primary text-sm font-semibold uppercase tracking-widest text-slate-500 dark:text-slate-300';
        $slash = 'font-bold text-slate-800 dark:text-white';
        $heading =
            'font-primary section-title text-3xl sm:text-4xl md:text-5xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-tight md:leading-[1.15]';
        $body = 'text-sm sm:text-base text-slate-600 dark:text-slate-300 font-medium leading-relaxed';

        $btnPrimary =
            'group/cta inline-flex w-full sm:w-auto items-center justify-center gap-3 rounded-full bg-violet-600 py-2 pl-6 pr-2 text-sm font-bold text-white transition-colors duration-150 ease-in-out hover:bg-violet-500';
        $btnPrimaryIcon = 'flex h-8 w-8 items-center justify-center rounded-full bg-white text-violet-600';
        $btnGhost =
            'group/cta inline-flex w-full sm:w-auto items-center justify-center gap-3 rounded-full border border-slate-300 dark:border-slate-700 py-2 pl-6 pr-2 text-sm font-bold text-slate-800 dark:text-white transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:hover:border-violet-400 dark:hover:text-violet-300';
        $btnGhostIcon =
            'flex h-8 w-8 items-center justify-center rounded-full bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-white transition-colors duration-150 ease-in-out group-hover/cta:bg-violet-500 group-hover/cta:text-white';

        $examples = [
            'Sistem informasi sekolah atau instansi',
            'Aplikasi pemesanan dan reservasi',
            'Dashboard data dan laporan',
            'Portal anggota dengan login',
        ];

        $offers = [
            [
                'title' => 'Sistem Informasi',
                'desc' => 'Kelola data, laporan, dan operasional bisnis dalam satu sistem.',
            ],
            ['title' => 'Aplikasi Web', 'desc' => 'Aplikasi yang bisa dibuka lewat browser, tanpa instal apa pun.'],
            [
                'title' => 'Dashboard & Laporan',
                'desc' => 'Data Anda tampil jelas dalam tabel dan grafik yang mudah dibaca.',
            ],
            ['title' => 'Login & Hak Akses', 'desc' => 'Atur siapa yang boleh melihat dan mengubah data tertentu.'],
            ['title' => 'Integrasi', 'desc' => 'Hubungkan website dengan layanan lain yang sudah Anda pakai.'],
            ['title' => 'Fitur Khusus', 'desc' => 'Fitur yang tidak ada di template, dibuat sesuai alur kerja Anda.'],
        ];

        $steps = [
            ['title' => 'Konsultasi', 'desc' => 'Anda ceritakan kebutuhan dan kendala yang ingin diselesaikan.'],
            ['title' => 'Rancangan & Penawaran', 'desc' => 'Kami susun fitur, alur, dan estimasi biaya sebelum mulai.'],
            [
                'title' => 'Pengerjaan',
                'desc' => 'Website dikerjakan sesuai tahapan dan kesepakatan awal.',
            ],
            ['title' => 'Peluncuran', 'desc' => 'Website diuji lalu diluncurkan dan siap dipakai.'],
        ];

        $included = [
            ['title' => 'Custom Design', 'desc' => 'Tampilan dibuat khusus'],
            ['title' => 'Garansi', 'desc' => '6 bulan'],
            ['title' => 'Domain & Hosting', 'desc' => 'Gratis 1 tahun'],
            ['title' => 'Maintenance', 'desc' => 'Gratis 1 tahun'],
        ];
    @endphp

    <section
        class="section hero-section font-body relative w-full bg-white dark:bg-slate-900 pt-36 sm:pt-44 pb-24 sm:pb-32 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex gap-2 items-center">
                <h2 class="{{ $eyebrow }}">
                    <span class="{{ $slash }}">//</span>
                    Website Custom
                </h2>
            </div>

            <h1
                class="hero-title split font-primary mt-8 max-w-5xl text-4xl sm:text-6xl lg:text-7xl xl:text-8xl tracking-tight text-balance text-slate-800 dark:text-white leading-[1.05] font-medium">
                Website yang Dibuat Sesuai
                <span class="text-violet-500 dark:text-violet-300 font-bold">Cara Kerja</span> Bisnis Anda.
            </h1>

            <div
                class="mt-16 grid gap-12 border-t border-slate-200 pt-10 dark:border-slate-800 lg:grid-cols-12 lg:gap-16 sm:mt-24">
                <div class="hero-subtitle lg:col-span-6">
                    <p class="{{ $body }} max-w-md">
                        Butuh fitur yang tidak ada di template? Kami rancang dan bangun dari nol, sesuai kebutuhan dan
                        alur kerja Anda.
                    </p>

                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                        <a href="{{ route('contact.index') }}" class="{{ $btnPrimary }}">
                            Konsultasi Sekarang
                            <span class="{{ $btnPrimaryIcon }}">
                                <i data-feather="arrow-up-right"
                                    class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                            </span>
                        </a>
                        <a href="#yang-kami-buat" class="{{ $btnGhost }}">
                            Lihat Layanan
                            <span class="{{ $btnGhostIcon }}">
                                <i data-feather="arrow-down" class="h-4 w-4"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5 lg:col-start-8" data-parallax="20">
                    <h3
                        class="font-primary text-sm font-semibold uppercase tracking-widest text-violet-600 dark:text-violet-300">
                        Contoh yang Bisa Dibuat
                    </h3>
                    <ul class="mt-4 border-t border-slate-300 dark:border-slate-700">
                        @foreach ($examples as $example)
                            <li
                                class="flex items-center gap-4 border-b border-slate-300 py-4 text-base font-medium text-slate-800 dark:border-slate-700 dark:text-white">
                                <span class="font-primary text-sm font-semibold text-violet-600 dark:text-violet-300">
                                    {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                </span>
                                {{ $example }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="yang-kami-buat"
        class="section font-body scroll-mt-20 bg-slate-50 dark:bg-slate-950 py-24 sm:py-32 border-y border-slate-200 dark:border-slate-800 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid gap-8 lg:grid-cols-12 lg:items-end lg:gap-16">
                <div class="lg:col-span-7">
                    <div class="flex gap-2 items-center">
                        <h2 class="{{ $eyebrow }}">
                            <span class="{{ $slash }}">//</span>
                            Yang Kami Buat
                        </h2>
                    </div>

                    <h3 class="{{ $heading }} mt-6">
                        Dari Sistem Sederhana sampai
                        <span class="text-violet-500 dark:text-violet-300">Aplikasi</span> Lengkap.
                    </h3>
                </div>

                <p class="section-desc {{ $body }} lg:col-span-4 lg:col-start-9">
                    Setiap proyek dimulai dari masalah yang ingin Anda selesaikan, bukan dari template.
                </p>
            </div>

            <div class="mt-16 grid gap-x-10 gap-y-12 sm:mt-20 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($offers as $offer)
                    <div
                        class="group border-t border-slate-300 pt-6 transition-colors duration-300 ease-in-out hover:border-violet-500 dark:border-slate-700 dark:hover:border-violet-400">
                        <span class="font-primary text-sm font-semibold text-violet-600 dark:text-violet-300">
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </span>
                        <h4
                            class="font-primary mt-4 text-2xl font-semibold text-slate-800 transition-colors duration-300 ease-in-out group-hover:text-violet-600 dark:text-white dark:group-hover:text-violet-300">
                            {{ $offer['title'] }}
                        </h4>
                        <p class="mt-3 max-w-xs text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            {{ $offer['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section data-slide-section aria-label="Built around you"
        class="font-body overflow-hidden bg-slate-900 dark:bg-white py-24 sm:py-32 lg:py-40 transition-colors duration-500">
        <div data-slide="right"
            class="w-max whitespace-nowrap font-primary text-6xl font-bold leading-none tracking-tighter text-white dark:text-slate-900 sm:text-8xl lg:text-[10rem] xl:text-[12rem]">
            Built Around You
        </div>
        <div data-slide="left"
            class="mt-4 w-max whitespace-nowrap font-primary text-6xl font-bold leading-none tracking-tighter text-violet-300 dark:text-violet-600 sm:mt-6 sm:text-8xl lg:text-[10rem] xl:text-[12rem]">
            Made To Fit
        </div>
    </section>

    <section class="section font-body bg-white dark:bg-slate-900 py-24 sm:py-32 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex gap-2 items-center">
                <h2 class="{{ $eyebrow }}">
                    <span class="{{ $slash }}">//</span>
                    Cara Kerja
                </h2>
            </div>

            <h3 class="{{ $heading }} mt-6 max-w-3xl">
                Empat Langkah dari Ide sampai
                <span class="text-violet-500 dark:text-violet-300">Jadi.</span>
            </h3>

            <ol class="mt-16 grid gap-10 sm:mt-20 lg:grid-cols-4 lg:gap-8">
                @foreach ($steps as $step)
                    <li
                        class="relative border-l border-slate-300 pb-2 pl-8 dark:border-slate-700 lg:border-l-0 lg:border-t lg:pl-0 lg:pt-8">
                        <span
                            class="absolute -left-[7px] top-1 h-3.5 w-3.5 rounded-full border-2 border-white bg-violet-500 dark:border-slate-900 lg:-top-[7px] lg:left-0"></span>
                        <span class="font-primary text-sm font-semibold text-violet-600 dark:text-violet-300">
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </span>
                        <h4 class="font-primary mt-3 text-xl font-semibold text-slate-800 dark:text-white">
                            {{ $step['title'] }}
                        </h4>
                        <p class="mt-2 max-w-xs text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            {{ $step['desc'] }}
                        </p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <section
        class="section font-body bg-slate-50 dark:bg-slate-950 py-24 sm:py-32 border-y border-slate-200 dark:border-slate-800 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <div class="flex gap-2 items-center">
                        <h2 class="{{ $eyebrow }}">
                            <span class="{{ $slash }}">//</span>
                            Sudah Termasuk
                        </h2>
                    </div>

                    <h3 class="{{ $heading }} mt-6 max-w-3xl">
                        Bukan Hanya Fitur, Tapi
                        <span class="text-violet-500 dark:text-violet-300">Dukungannya.</span>
                    </h3>
                </div>
            </div>

            <div class="mt-16 grid grid-cols-2 sm:mt-20 lg:grid-cols-4">
                @foreach ($included as $item)
                    <div
                        class="border-t border-slate-300 py-8 pr-4 dark:border-slate-700 lg:border-l lg:px-8 {{ $loop->first ? 'lg:border-l-0 lg:pl-0' : '' }}">
                        <h4
                            class="font-primary text-xl font-bold tracking-tight text-slate-800 dark:text-white sm:text-2xl">
                            {{ $item['title'] }}
                        </h4>
                        <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>

            <p class="mt-6 max-w-xl text-sm leading-relaxed text-slate-500 dark:text-slate-400">
                Harga website custom menyesuaikan fitur dan tingkat kerumitannya. Konsultasikan dulu, kami beri
                estimasinya sebelum pengerjaan dimulai.
            </p>
        </div>
    </section>

    <section
        class="section font-body relative isolate overflow-hidden bg-slate-950 dark:bg-violet-500 py-28 sm:py-36 lg:py-48 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="flex justify-center">
                <h2
                    class="font-primary text-sm font-semibold uppercase tracking-widest text-slate-400 dark:text-violet-100">
                    <span class="font-bold text-white dark:text-slate-950">//</span>
                    Punya Kebutuhan Khusus?
                </h2>
            </div>

            <a href="https://wa.me/6287835482333?text=Halo%20Elvacode,%20saya%20tertarik%20membuat%20website%20custom.%20Bisa%20minta%20info%20lebih%20lanjut?"
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
                Ceritakan kebutuhan Anda lewat WhatsApp. Kami bantu menilai apa yang perlu dibuat.
            </p>
        </div>
    </section>
@endsection
