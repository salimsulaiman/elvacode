@extends('components.layouts.app')

@section('title', 'Harga Paket - Elvacode')
@section('meta_description',
    'Paket pembuatan website dari Elvacode mulai Rp 650.000. Sudah termasuk domain, hosting,
    dan SSL. Pilih paket Essential, Professional, atau Premium sesuai kebutuhan bisnis Anda.')
@section('og_title', 'Harga Paket Website - Elvacode')

@section('content')
    @php
        $eyebrow = 'font-primary text-sm font-semibold uppercase tracking-widest text-slate-500 dark:text-slate-300';
        $slash = 'font-bold text-slate-800 dark:text-white';
        $heading =
            'font-primary section-title text-3xl sm:text-4xl md:text-5xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-tight md:leading-[1.15]';
        $body = 'text-sm sm:text-base text-slate-600 dark:text-slate-300 font-medium leading-relaxed';

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

        $allIncluded = [
            ['title' => 'Responsive', 'desc' => 'Tampil rapi di HP, tablet, dan komputer'],
            ['title' => 'Domain', 'desc' => 'Gratis 1 tahun'],
            ['title' => 'Hosting', 'desc' => 'Gratis 1 tahun'],
            ['title' => 'SSL/HTTPS', 'desc' => 'Website aman diakses'],
        ];

        $compare = [
            ['label' => 'Jumlah halaman', 'values' => ['4', '5 - 10', '10 - 15']],
            ['label' => 'Revisi desain', 'values' => ['1x', '2x', '3x']],
            ['label' => 'Maintenance gratis', 'values' => ['-', '1 tahun', '1 tahun']],
            ['label' => 'Email bisnis', 'values' => ['-', '-', 'Ya']],
            ['label' => 'Optimasi', 'values' => ['-', 'Kecepatan dasar', 'SEO & kecepatan lanjutan']],
            ['label' => 'Garansi', 'values' => ['-', '-', '3 bulan']],
        ];

        $faqs = [
            [
                'q' => 'Apakah harga sudah termasuk domain dan hosting?',
                'a' =>
                    'Ya. Semua paket sudah termasuk domain dan hosting gratis selama 1 tahun, lengkap dengan SSL/HTTPS.',
            ],
            [
                'q' => 'Apa bedanya revisi desain dengan maintenance?',
                'a' =>
                    'Revisi desain adalah perubahan tampilan selama proses pembuatan website. Maintenance adalah perawatan website setelah selesai, tersedia gratis 1 tahun pada paket Professional dan Premium.',
            ],
            [
                'q' => 'Bagaimana kalau kebutuhan saya tidak ada di paket ini?',
                'a' =>
                    'Untuk toko online atau website dengan fitur khusus, kami buatkan penawaran tersendiri lewat paket Enterprise. Hubungi kami dan ceritakan kebutuhannya.',
            ],
            [
                'q' => 'Bagaimana cara memesan?',
                'a' =>
                    'Klik tombol "Dapatkan Paket" pada paket yang Anda pilih. Anda akan diarahkan ke WhatsApp untuk berdiskusi langsung dengan kami.',
            ],
        ];
    @endphp

    <section
        class="section font-body relative w-full bg-violet-600 pt-36 sm:pt-44 pb-16 sm:pb-24 border-b border-violet-500/40">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">

            <nav aria-label="Breadcrumb">
                <ol class="flex items-center justify-center gap-2 text-sm font-medium text-violet-100">
                    <li>
                        <a href="/" class="transition-colors duration-150 ease-in-out hover:text-white">
                            Home
                        </a>
                    </li>
                    <li aria-hidden="true">/</li>
                    <li class="text-white font-semibold">Harga Paket</li>
                </ol>
            </nav>

            <h1
                class="font-primary section-title split mt-6 mx-auto max-w-4xl text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-white leading-[1.1]">
                Harga Paket
                <span class="font-bold text-slate-900">Website</span>
            </h1>

            <p class="section-desc mx-auto mt-6 max-w-xl text-sm sm:text-base font-medium leading-relaxed text-violet-100">
                Harga jelas, tanpa biaya tersembunyi. Pilih paket sesuai kebutuhan bisnis Anda.
            </p>
        </div>
    </section>

    <section id="pricing" aria-label="Paket Harga Website Elvacode"
        class="section font-body relative isolate bg-white dark:bg-slate-900 py-24 sm:py-32 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="flex gap-2 items-center">
                <h2 class="{{ $eyebrow }}">
                    <span class="{{ $slash }}">//</span>
                    Pilih Paket
                </h2>
            </div>

            <div class="mt-6 flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between lg:gap-16">
                <h3 class="{{ $heading }} max-w-3xl">
                    Paket Transparan &amp;
                    <span class="text-violet-500 dark:text-violet-300">Fleksibel.</span>
                </h3>

                <p class="section-desc {{ $body }} w-full lg:w-5/12 lg:max-w-md">
                    Dari website sederhana sampai solusi lengkap. Harga di bawah adalah harga promo yang sedang berlaku.
                </p>
            </div>

            <div class="mt-16 grid grid-cols-1 items-stretch gap-6 sm:mt-20 md:grid-cols-3">
                @foreach ($plans as $plan)
                    @php
                        $hl = $plan['highlight'];
                        $discount = round((($plan['original'] - $plan['price']) / $plan['original']) * 100);
                    @endphp

                    <div
                        class="relative flex w-full min-h-[350px] flex-col justify-between rounded-2xl px-6 py-8 transition-colors duration-150 ease-in-out group cursor-default lg:px-8
                        {{ $hl
                            ? 'z-10 border border-slate-900 bg-slate-900 shadow-xl dark:border-white dark:bg-white lg:scale-105'
                            : 'bg-slate-100 hover:bg-violet-500 dark:bg-slate-800' }}">

                        @if ($hl)
                            <span
                                class="absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 whitespace-nowrap rounded-full bg-violet-500 px-4 py-1 text-xs font-bold uppercase tracking-wide text-white shadow-md">
                                Paling Laris
                            </span>
                        @endif

                        <div class="flex flex-col gap-4">
                            <h4
                                class="mt-2 text-center font-primary text-lg font-extrabold transition-colors duration-150 ease-in-out
                                {{ $hl ? 'text-white dark:text-slate-900' : 'text-slate-700 group-hover:text-white dark:text-slate-300' }}">
                                {{ $plan['name'] }}
                            </h4>

                            <div class="flex flex-col items-center justify-center gap-2">
                                <div class="flex items-center gap-2">
                                    <span
                                        class="text-sm line-through transition-colors duration-150 ease-in-out
                                        {{ $hl ? 'text-slate-400 dark:text-slate-500' : 'text-slate-400 group-hover:text-violet-200 dark:text-slate-500' }}">
                                        Rp {{ number_format($plan['original'], 0, ',', '.') }}
                                    </span>
                                    <span
                                        class="rounded-full bg-violet-500 px-2 py-0.5 text-xs font-bold text-white transition-colors duration-150 ease-in-out
                                        {{ $hl ? '' : 'group-hover:bg-white group-hover:text-violet-600' }}">
                                        Hemat {{ $discount }}%
                                    </span>
                                </div>
                                <h3
                                    class="text-center font-primary text-3xl font-extrabold transition-colors duration-150 ease-in-out lg:text-4xl
                                    {{ $hl ? 'text-white dark:text-slate-900' : 'text-slate-700 group-hover:text-white dark:text-slate-300' }}">
                                    Rp {{ number_format($plan['price'], 0, ',', '.') }}
                                </h3>
                            </div>

                            <ul
                                class="mt-4 flex list-disc flex-col gap-2 pl-5 text-left text-sm font-medium transition-colors duration-150 ease-in-out
                                {{ $hl ? 'text-slate-300 dark:text-slate-700' : 'text-slate-600 group-hover:text-white dark:text-slate-400' }}">
                                @foreach ($plan['features'] as $feature)
                                    <li>{{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <a href="https://wa.me/6287835482333?text=Halo%2C%20saya%20ingin%20menggunakan%20jasa%20Web%20Development%20Paket%20{{ urlencode($plan['name']) }}"
                            target="_blank" rel="noopener"
                            class="mt-8 w-full rounded-full p-2 text-center font-bold transition-colors duration-150 ease-in-out
                            {{ $hl
                                ? 'border border-violet-500 bg-violet-500 text-white hover:border-violet-600 hover:bg-violet-600'
                                : 'border border-slate-400 text-slate-700 hover:bg-white hover:text-violet-600 group-hover:border-white group-hover:text-white dark:text-slate-200' }}">
                            Dapatkan Paket
                        </a>
                    </div>
                @endforeach
            </div>

            <div
                class="mt-12 flex flex-col gap-6 rounded-2xl border border-slate-900 bg-slate-900 px-6 py-6 transition-colors duration-300 ease-in-out hover:border-violet-500 dark:border-white dark:bg-white dark:hover:border-violet-400 lg:flex-row lg:items-center lg:gap-10 lg:px-8">

                <div class="lg:w-1/3">
                    <span class="text-xs font-semibold uppercase tracking-widest text-violet-300 dark:text-violet-600">
                        Opsional
                    </span>
                    <h4 class="mt-1 font-primary text-xl font-bold text-white dark:text-slate-900">
                        Enterprise
                    </h4>
                    <p class="mt-1 text-sm text-slate-300 dark:text-slate-600">
                        Website custom sesuai kebutuhan spesifik bisnis Anda. Harga menyesuaikan lingkup pekerjaan.
                    </p>
                </div>

                <div class="flex flex-wrap gap-2 lg:flex-1">
                    @foreach ($enterpriseTags as $tag)
                        <span
                            class="rounded-full border border-slate-700 px-3 py-1 text-xs font-medium text-slate-300 dark:border-slate-300 dark:text-slate-700">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>

                <a href="https://wa.me/6287835482333?text=Halo%2C%20saya%20ingin%20konsultasi%20website%20custom%20Paket%20Enterprise"
                    target="_blank" rel="noopener"
                    class="group/cta inline-flex shrink-0 items-center justify-center gap-3 rounded-full bg-white py-2 pl-6 pr-2 text-sm font-bold text-slate-900 transition-colors duration-150 ease-in-out hover:bg-violet-500 hover:text-white dark:bg-slate-900 dark:text-white dark:hover:bg-violet-500">
                    Konsultasi Gratis
                    <span
                        class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-900 text-white transition-colors duration-150 ease-in-out group-hover/cta:bg-white group-hover/cta:text-violet-600 dark:bg-white dark:text-slate-900">
                        <i data-feather="arrow-up-right" class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <section
        class="section font-body bg-slate-50 dark:bg-slate-950 py-24 sm:py-32 border-y border-slate-200 dark:border-slate-800 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex gap-2 items-center">
                <h2 class="{{ $eyebrow }}">
                    <span class="{{ $slash }}">//</span>
                    Di Semua Paket
                </h2>
            </div>

            <h3 class="{{ $heading }} mt-6 max-w-3xl">
                Yang Selalu Anda
                <span class="text-violet-500 dark:text-violet-300">Dapatkan.</span>
            </h3>

            <div class="mt-16 grid grid-cols-2 sm:mt-20 lg:grid-cols-4">
                @foreach ($allIncluded as $item)
                    <div
                        class="border-t border-slate-300 py-8 pr-4 dark:border-slate-700 lg:border-l lg:px-8 {{ $loop->first ? 'lg:border-l-0 lg:pl-0' : '' }}">
                        <h4
                            class="font-primary text-xl font-bold tracking-tight text-slate-800 dark:text-white sm:text-3xl">
                            {{ $item['title'] }}
                        </h4>
                        <p class="mt-2 max-w-[14rem] text-sm text-slate-600 dark:text-slate-400">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section font-body bg-white dark:bg-slate-900 py-24 sm:py-32 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex gap-2 items-center">
                <h2 class="{{ $eyebrow }}">
                    <span class="{{ $slash }}">//</span>
                    Perbandingan
                </h2>
            </div>

            <h3 class="{{ $heading }} mt-6 max-w-3xl">
                Bedanya Paket
                <span class="text-violet-500 dark:text-violet-300">Sekilas.</span>
            </h3>

            <div class="mt-16 overflow-x-auto sm:mt-20">
                <table class="w-full min-w-[640px] border-collapse text-left">
                    <thead>
                        <tr class="border-b border-slate-300 dark:border-slate-700">
                            <th class="py-4 pr-4"></th>
                            @foreach ($plans as $plan)
                                <th
                                    class="py-4 pr-4 font-primary text-lg font-bold {{ $plan['highlight'] ? 'text-violet-600 dark:text-violet-300' : 'text-slate-800 dark:text-white' }}">
                                    {{ $plan['name'] }}
                                </th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($compare as $row)
                            <tr class="border-b border-slate-200 dark:border-slate-800">
                                <th class="py-5 pr-4 text-sm font-semibold text-slate-500 dark:text-slate-400">
                                    {{ $row['label'] }}
                                </th>
                                @foreach ($row['values'] as $value)
                                    <td class="py-5 pr-4 text-sm font-medium text-slate-800 dark:text-white">
                                        {{ $value }}
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="faq" aria-label="Pertanyaan yang sering ditanyakan"
        class="section font-body bg-slate-50 dark:bg-slate-950 py-24 sm:py-32 border-y border-slate-200 dark:border-slate-800 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-12 lg:gap-20">

                <div class="lg:col-span-4">
                    <div class="flex gap-2 items-center">
                        <h2 class="{{ $eyebrow }}">
                            <span class="{{ $slash }}">//</span>
                            FAQ
                        </h2>
                    </div>

                    <h3 class="{{ $heading }} mt-6">
                        Pertanyaan Seputar
                        <span class="text-violet-500 dark:text-violet-300">Paket.</span>
                    </h3>

                    <a href="https://wa.me/6287835482333?text=Halo%20Elvacode,%20saya%20ingin%20bertanya%20tentang%20paket%20website."
                        target="_blank" rel="noopener"
                        class="group/link mt-8 inline-flex w-fit items-center gap-2 text-sm font-semibold text-slate-800 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:text-white dark:hover:text-violet-300">
                        Tanya via WhatsApp
                        <i data-feather="arrow-up-right"
                            class="h-4 w-4 transition-transform duration-150 ease-in-out group-hover/link:-translate-y-0.5 group-hover/link:translate-x-0.5"></i>
                    </a>
                </div>

                <div x-data="{ open: 0 }" class="border-t border-slate-300 dark:border-slate-700 lg:col-span-8">
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
                                        class="max-w-2xl pb-7 text-sm leading-relaxed text-slate-600 dark:text-slate-300 sm:text-base">
                                        {{ $faq['a'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    <section
        class="section font-body relative isolate overflow-hidden bg-slate-950 dark:bg-violet-500 py-28 sm:py-36 lg:py-48 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="flex justify-center">
                <h2
                    class="font-primary text-sm font-semibold uppercase tracking-widest text-slate-400 dark:text-violet-100">
                    <span class="font-bold text-white dark:text-slate-950">//</span>
                    Belum Yakin Pilih yang Mana?
                </h2>
            </div>

            <a href="https://wa.me/6287835482333?text=Halo%20Elvacode,%20saya%20bingung%20memilih%20paket%20website.%20Bisa%20dibantu?"
                target="_blank" rel="noopener" aria-label="Get in touch lewat WhatsApp"
                class="group/cta mt-10 flex items-center justify-center gap-4 sm:mt-14 sm:gap-8 lg:gap-12">

                <span
                    class="font-primary text-5xl font-bold leading-none tracking-tighter text-white transition-colors duration-300 ease-in-out group-hover/cta:text-violet-300 dark:text-slate-950 dark:group-hover/cta:text-white sm:text-7xl md:text-8xl lg:text-9xl xl:text-[10rem]">
                    Get in Touch
                </span>

                <span
                    class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-white text-slate-950 transition-colors duration-300 ease-in-out group-hover/cta:bg-violet-500 group-hover/cta:text-white dark:bg-slate-950 dark:text-white dark:group-hover/cta:bg-white dark:group-hover/cta:text-violet-600 sm:h-20 sm:w-20 md:h-24 md:w-24 lg:h-32 lg:w-32 xl:h-40 xl:w-40">
                    <i data-feather="arrow-up-right"
                        class="h-6 w-6 transition-transform duration-300 ease-in-out group-hover/cta:-translate-y-1 group-hover/cta:translate-x-1 sm:h-9 sm:w-9 md:h-11 md:w-11 lg:h-14 lg:w-14 xl:h-20 xl:w-20"></i>
                </span>
            </a>

            <p class="mt-10 text-center text-sm font-medium text-slate-400 dark:text-violet-100 sm:mt-14">
                Ceritakan kebutuhan Anda lewat WhatsApp. Kami bantu pilihkan paket yang paling sesuai.
            </p>
        </div>
    </section>
@endsection
