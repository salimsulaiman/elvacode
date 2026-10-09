@extends('components.layouts.app')

@section('title', 'Tentang Kami - Elvacode')

@section('content')
    <section
        class="section font-body relative w-full bg-violet-600 pt-36 sm:pt-44 pb-16 sm:pb-24 border-b border-violet-400/40">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">

            <nav aria-label="Breadcrumb">
                <ol class="flex items-center justify-center gap-2 text-sm font-medium text-violet-100">
                    <li>
                        <a href="/" class="transition-colors duration-150 ease-in-out hover:text-white">
                            Home
                        </a>
                    </li>
                    <li aria-hidden="true">/</li>
                    <li class="text-white font-semibold">Tentang Kami</li>
                </ol>
            </nav>

            <h1
                class="font-primary section-title split mt-6 mx-auto max-w-4xl text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-white leading-[1.1]">
                Mengenal Lebih Dekat
                <span class="font-bold text-slate-900">Elvacode</span>
            </h1>
        </div>
    </section>

    <section
        class="section font-body w-full bg-white dark:bg-slate-900 py-24 sm:py-32 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-16 lg:grid-cols-12 lg:gap-20">

                <div class="lg:col-span-7">
                    <div class="flex gap-2 items-center">
                        <h2 class="font-primary text-sm font-semibold text-slate-500 dark:text-slate-300 uppercase">
                            <span class="font-bold text-slate-800 dark:text-white">//</span>
                            Siapa Kami
                        </h2>
                    </div>

                    <h3
                        class="font-primary section-title split mt-6 max-w-3xl text-3xl sm:text-4xl md:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-20">
                        Website
                        <span class="font-bold text-violet-500 dark:text-violet-300">Profesional</span>
                        untuk Bisnis Anda
                    </h3>

                    <p
                        class="section-desc mt-6 sm:mt-8 max-w-2xl text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium leading-relaxed text-justify">
                        Kami adalah tim yang berfokus pada pembuatan website modern, cepat, dan responsif. Dengan pengalaman
                        lebih dari 2 tahun, kami menghadirkan solusi digital yang profesional dan efektif untuk mendukung
                        pertumbuhan bisnis Anda.
                    </p>

                    <div
                        class="mt-10 aspect-video w-full overflow-hidden rounded-2xl border border-slate-200 bg-slate-100 dark:border-slate-800 dark:bg-slate-800 sm:mt-12">
                        <iframe src="https://www.youtube.com/embed/CMzboyx0WtE" title="Video Elvacode" loading="lazy"
                            class="h-full w-full"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="flex flex-col justify-center lg:col-span-5">
                    <div
                        class="grid grid-cols-2 divide-x divide-slate-200 dark:divide-slate-800 lg:grid-cols-1 lg:divide-x-0 lg:divide-y">

                        <div class="py-8 pr-4 sm:pr-8 lg:py-12 lg:pr-0">
                            <div class="stat-number font-primary text-6xl font-bold leading-none tracking-tighter text-slate-800 dark:text-white sm:text-8xl lg:text-[164px]"
                                data-value="95">
                                <span class="stat-value">0</span><span class="text-violet-500 dark:text-violet-300">%</span>
                            </div>
                            <p class="mt-4 text-sm font-semibold text-slate-800 dark:text-white sm:text-base">
                                Kepuasan pelanggan
                            </p>
                            <p class="mt-1.5 max-w-xs text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Mayoritas klien puas dengan hasil, kualitas, dan layanan kami.
                            </p>
                        </div>

                        <div class="py-8 pl-4 sm:pl-8 lg:py-12 lg:pl-0">
                            <div class="stat-number font-primary text-6xl font-bold leading-none tracking-tighter text-slate-800 dark:text-white sm:text-8xl lg:text-9xl"
                                data-value="2">
                                <span class="stat-value">0</span><span class="text-violet-500 dark:text-violet-300">+</span>
                            </div>
                            <p class="mt-4 text-sm font-semibold text-slate-800 dark:text-white sm:text-base">
                                Tahun pengalaman
                            </p>
                            <p class="mt-1.5 max-w-xs text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Berpengalaman membangun website untuk berbagai jenis bisnis.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    @php
        $stats = [
            [
                'value' => 95,
                'suffix' => '%',
                'label' => 'Kepuasan Klien',
                'image' => 'happy-client.jpg',
                'alt' => 'Klien Elvacode yang puas setelah menggunakan layanan',
            ],
            [
                'value' => 50,
                'suffix' => '+',
                'label' => 'Proyek Selesai',
                'image' => 'finish-project.jpg',
                'alt' => 'Proyek website Elvacode yang berhasil diselesaikan',
            ],
            [
                'value' => 40,
                'suffix' => '+',
                'label' => 'Ide Terealisasi',
                'image' => 'realitation-idea.jpg',
                'alt' => 'Ide klien yang berhasil direalisasikan menjadi website',
            ],
            [
                'value' => 25,
                'suffix' => '+',
                'label' => 'Bisnis Berkembang',
                'image' => 'business-growth.jpg',
                'alt' => 'Bisnis klien yang berkembang setelah memiliki website profesional',
            ],
        ];
    @endphp

    <section
        class="section font-body w-full bg-slate-50 dark:bg-slate-950 py-20 sm:py-32 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="flex gap-2 items-center">
                <h2 class="font-primary text-sm font-semibold text-slate-500 dark:text-slate-300 uppercase">
                    <span class="font-bold text-slate-800 dark:text-white">//</span>
                    Pencapaian
                </h2>
            </div>

            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-16 mt-6">
                <h3
                    class="font-primary section-title split lg:flex-1 text-3xl sm:text-4xl md:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-16 max-w-2xl mx-auto lg:mx-0">
                    Pencapaian <span class="font-bold text-violet-500 dark:text-violet-300">Elvacode</span>
                </h3>

                <p
                    class="section-desc w-full lg:w-5/12 lg:max-w-md text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium text-justify lg:text-left">
                    Kami berkomitmen menghadirkan solusi digital yang modern dan fungsional. Statistik berikut menjadi
                    cerminan dedikasi kami pada setiap proyek.
                </p>
            </div>

            <div aria-label="Statistik Keberhasilan Elvacode"
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mt-12 sm:mt-16">
                @foreach ($stats as $stat)
                    <div
                        class="relative aspect-[4/5] w-full overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-800 bg-slate-200 dark:bg-slate-800">
                        <img src="{{ asset('assets/images/' . $stat['image']) }}" alt="{{ $stat['alt'] }}" loading="lazy"
                            class="h-full w-full object-cover">

                        <div
                            class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-slate-950/90 via-slate-950/60 to-transparent px-6 pb-6 pt-16 text-white">
                            <h3 class="stat-number font-primary text-4xl md:text-5xl font-bold tracking-tight"
                                data-value="{{ $stat['value'] }}">
                                <span class="stat-value">0</span><span>{{ $stat['suffix'] }}</span>
                            </h3>
                            <p class="mt-1 text-sm font-medium text-slate-300">{{ $stat['label'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <section
        class="section font-body relative isolate overflow-hidden py-24 sm:py-32 bg-slate-900 dark:bg-violet-600 transition-colors duration-500">
        <div class="mx-auto max-w-3xl text-center px-6">

            <div class="flex justify-center">
                <h2 class="font-primary text-sm font-semibold text-slate-400 dark:text-violet-100 uppercase">
                    <span class="font-bold text-white dark:text-white">//</span>
                    Mari Bekerja Sama
                </h2>
            </div>

            <h3
                class="font-primary section-title split mt-6 text-3xl sm:text-4xl md:text-5xl font-bold sm:font-semibold tracking-tight text-balance text-white dark:text-white leading-normal sm:leading-10 md:leading-16">
                Siap Diskusi Proyek
                <span class="font-bold text-violet-300 dark:text-white">Website</span> Anda?
            </h3>

            <p
                class="section-desc mt-6 sm:mt-8 mx-auto max-w-xl text-sm sm:text-base leading-relaxed text-slate-300 dark:text-violet-100 font-medium">
                Kami membantu mewujudkan website sesuai kebutuhan bisnis Anda, modern, responsif, dan dikelola dengan
                sepenuh hati.
            </p>

            <div class="mt-10 flex justify-center">
                <a href="{{ route('contact.index') }}"
                    class="group/cta w-full sm:w-auto inline-flex items-center justify-center gap-3 rounded-full bg-white dark:bg-white py-2 pl-6 pr-2 text-sm font-bold text-slate-900 dark:text-violet-700 transition-colors duration-150 ease-in-out hover:bg-violet-500 hover:text-white dark:hover:bg-violet-100 dark:hover:text-violet-700">
                    Konsultasi Gratis
                    <span
                        class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-900 dark:bg-violet-600 text-white transition-colors duration-150 ease-in-out group-hover/cta:bg-white group-hover/cta:text-violet-600">
                        <i data-feather="arrow-up-right" class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>
@endsection
