@extends('components.layouts.app')


@section('content')
    <section
        class="w-full dark:bg-slate-900 relative isolate h-auto overflow-hidden transition-colors duration-300 ease-in-out">
        <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75 animate-[pulse_8s_ease-in-out_infinite]">
            </div>
        </div>
        <div class="max-w-7xl mx-auto relative pt-14 px-6 lg:px-8">
            <div class="py-16 sm:py-36 lg:py-40">
                <div class="flex flex-col lg:flex-row gap-16 justify-between">
                    <div class="w-full lg:w-1/2">
                        <div class="text-start">
                            <h1
                                class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-semibold tracking-tight text-balance text-slate-800 dark:text-slate-300 leading-normal sm:leading-10 md:leading-16">
                                Solusi Digital & Jasa Pembuatan Website untuk Bisnis Anda
                            </h1>

                            <p
                                class="text-sm sm:text-base md:text-lg text-slate-700 dark:text-slate-400 font-medium mt-6 sm:mt-8">
                                Kami menyediakan jasa pembuatan website dengan harga terjangkau, dirancang dengan strategi
                                yang
                                tepat agar sesuai
                                dengan kebutuhan bisnis Anda.
                            </p>

                            <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6">
                                <a href="#create-website"
                                    class="rounded-full bg-slate-800 px-5 py-2.5 text-sm sm:text-base font-semibold text-white dark:text-slate-700 dark:bg-white shadow hover:bg-slate-700 dark:hover:bg-slate-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                                    Get started
                                </a>
                                <a href="{{ route('pricing.index') }}"
                                    class="text-sm sm:text-base font-semibold text-violet-900 hover:text-violet-700 dark:text-slate-300 dark:hover:text-slate-200">
                                    Lihat Paket<span aria-hidden="true"> →</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2 h-[350px] mt-12 lg:mt-0">
                        <div class="w-full relative h-full max-w-lg mx-auto">
                            <img src="{{ asset('assets/images/bloobs/asset-3.png') }}" alt=""
                                class="absolute top-0 left-0">
                            <img src="{{ asset('assets/images/bloobs/asset-7.png') }}" alt=""
                                class="absolute -top-10 left-16 z-10 w-20 animate-[pulse_8s_ease-in-out_infinite]">
                            <img src="{{ asset('assets/images/bloobs/asset-2.png') }}" alt=""
                                class="absolute top-0 right-0 z-10 invert dark:invert-0 animate-low-bounce">
                            <img src="{{ asset('assets/images/bloobs/asset-5.png') }}" alt=""
                                class="absolute -bottom-28 right-44 z-40 animate-[spin_8s_linear_infinite]">
                            <img src="{{ asset('assets/images/bloobs/asset-6.png') }}" alt=""
                                class="absolute top-20 right-0 z-20 animate-[spin_12s_linear_infinite]">
                            <div class="absolute h-96 inset-0 bg-cover bg-center z-30" role="img"
                                aria-label="Ilustrasi solusi digital dan layanan pembuatan website Elvacode"
                                style="
                                background-image: url('{{ asset('assets/images/solusi-digital.jpg') }}');
                                -webkit-mask-image: url('{{ asset('assets/images/bloobs/asset-1.png') }}');
                                -webkit-mask-repeat: no-repeat;
                                -webkit-mask-position: center;
                                -webkit-mask-size: contain;
                                mask-image: url('{{ asset('assets/images/bloobs/asset-1.png') }}');
                                mask-repeat: no-repeat;
                                mask-position: center;
                                mask-size: contain;
                            ">
                            </div>
                            <div
                                class="absolute z-40 w-64 h-24 bg-black/20 dark:bg-white/20 backdrop-blur-sm rounded-2xl -bottom-8 shadow animate-low-bounce">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="w-full bg-slate-100 dark:bg-slate-950 transition-colors duration-300 ease-in-out py-8"></div>
    {{-- <div class="w-full bg-slate-100 dark:bg-slate-950 transition-colors duration-300 ease-in-out">
        <div class="relative overflow-hidden py-4 md:py-8 whitespace-nowrap max-w-7xl mx-auto">
            <!-- Gradient kiri -->
            <div
                class="absolute top-0 left-0 w-[250px] h-full z-10 bg-gradient-to-l from-transparent to-slate-100 dark:to-slate-950 pointer-events-none transition-colors duration-300 ease-in-out">
            </div>
            <!-- Gradient kanan -->
            <div
                class="absolute top-0 right-0 w-[250px] h-full z-10 bg-gradient-to-r from-transparent to-slate-100 dark:to-slate-950 pointer-events-none transition-colors duration-300 ease-in-out">
            </div>

            @php
                $logos = [
                    asset('assets/logos/elvacode-logo.png'),
                    asset('assets/logos/logo-jatiunggul.png'),
                    asset('assets/logos/logo-taleify.png'),
                ];
            @endphp

            <!-- Kontainer slider -->
            <div class="inline-flex w-max animate-slide">
                @foreach ($logos as $index => $logo)
                    <img src="{{ $logo }}" alt="logo-{{ $index }}"
                        class="h-[32px] md:h-[40px] mx-[30px] inline-block grayscale hover:filter-none cursor-pointer" />
                @endforeach

                <!-- Duplikat supaya looping mulus -->
                @foreach ($logos as $index => $logo)
                    <img src="{{ $logo }}" alt="logo-dup-{{ $index }}"
                        class="h-[32px] md:h-[40px] mx-[30px] inline-block grayscale hover:filter-none cursor-pointer" />
                @endforeach
            </div>
        </div>
    </div> --}}

    <section id="create-website"
        class="w-full scroll-mt-20 dark:bg-slate-900 isolate relative h-auto overflow-hidden transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto relative px-6 lg:px-8 pt-20 pb-16 md:pb-48 group min-h-auto">
            <div class="w-full flex flex-col lg:flex-row gap-8 justify-between items-center">
                <div class="w-full lg:w-5/12">
                    <div class="flex gap-2 items-center">
                        <div
                            class="h-4 w-1 sm:h-5 sm:w-1.5 md:h-6 md:w-2 group-hover:w-3 group-hover:h-2 rotate-0 group-hover:rotate-180 rounded-full bg-violet-900 transition-all duration-300 ease-in-out">
                        </div>
                        <h1 class="text-sm sm:text-base font-semibold text-slate-800 dark:text-slate-300 uppercase">
                            Bangun Website Impian
                        </h1>
                    </div>

                    <h2
                        class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 dark:text-slate-300 mt-6 sm:mt-8 leading-normal sm:leading-10 md:leading-16">
                        Wujudkan ide kreatif Anda menjadi website profesional.
                    </h2>

                    <p
                        class="text-sm sm:text-base md:text-lg text-slate-700 dark:text-slate-400 font-medium sm:font-semibold mt-6 sm:mt-8">
                        Dari konsep hingga eksekusi, kami membantu membangun website impian Anda yang modern, responsif,
                        dan disesuaikan dengan kebutuhan bisnis agar tampil lebih percaya diri di dunia digital.
                    </p>
                </div>

                <div class="w-full lg:w-7/12 relative h-[400px] mt-12 lg:mt-0">
                    <div class="w-full relative h-full max-w-lg mx-auto">
                        <img src="{{ asset('assets/images/bloobs/asset-12.png') }}" alt=""
                            class="absolute top-0 left-0 ivert dark:invert-0 opacity-70 dark:opacity-30">
                        <img src="{{ asset('assets/images/bloobs/asset-11.png') }}" alt=""
                            class="absolute top-0 left-0 z-20 opacity-50">
                        <img src="{{ asset('assets/images/bloobs/asset-14.png') }}" alt=""
                            class="absolute -top-10 left-16 z-10 w-64 animate-[pulse_8s_ease-in-out_infinite]">
                        <img src="{{ asset('assets/images/bloobs/asset-9.png') }}" alt=""
                            class="absolute top-0 left-1/2 -translate-x-1/2 w-96 z-40 animate-[spin_30s_linear_infinite]">
                        <img src="{{ asset('assets/images/bloobs/asset-10.png') }}" alt=""
                            class="absolute top-0 left-1/2 -translate-x-1/2 w-96 z-40 animate-[spin_50s_linear_infinite]">
                        <div class="absolute h-96 inset-0 bg-cover bg-center z-30" role="img"
                            aria-label="Ilustrasi membangun website impian dengan desain modern dan profesional"
                            style="
                            background-image: url('{{ asset('assets/images/bangun-website-impian.jpg') }}');
                            -webkit-mask-image: url('{{ asset('assets/images/bloobs/asset-8.png') }}');
                            -webkit-mask-repeat: no-repeat;
                            -webkit-mask-position: center;
                            -webkit-mask-size: contain;
                            mask-image: url('{{ asset('assets/images/bloobs/asset-8.png') }}');
                            mask-repeat: no-repeat;
                            mask-position: center;
                            mask-size: contain;
                        ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div aria-hidden="true"
            class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75 animate-[pulse_10s_ease-in-out_infinite]">
            </div>
        </div>
    </section>
    <section
        class="w-full py-0 md:py-12 relative transition-colors duration-300 ease-in-out 
         bg-gradient-to-b from-slate-100 to-white 
         dark:from-slate-800 dark:to-slate-900">
        <div
            class="w-full max-w-6xl mx-auto px-6 sm:px-8 py-8 sm:py-12 rounded-none md:rounded-xl shadow bg-white dark:bg-slate-950 relative lg:absolute -top-0 lg:-top-24 left-1/2 transform -translate-x-1/2 flex flex-col md:flex-row gap-8 md:gap-6 justify-around items-center text-center md:text-left">
            <div class="flex flex-col gap-2 items-center">
                <h2 class="font-bold text-5xl sm:text-6xl md:text-7xl text-slate-800 dark:text-slate-400">95<span
                        class="text-3xl sm:text-4xl md:text-5xl">%</span></h2>
                <p class="text-slate-800 dark:text-slate-400 font-semibold">Kepuasan Klien</p>
            </div>
            <div class="hidden md:block self-stretch w-[3px] bg-slate-400 rounded-full"></div>
            <div class="flex flex-col gap-2 items-center">
                <h2 class="font-bold text-5xl sm:text-6xl md:text-7xl text-slate-800 dark:text-slate-400">50<span
                        class="text-3xl sm:text-4xl md:text-5xl">+</span></h2>
                <p class="text-slate-800 dark:text-slate-400 font-semibold">Proyek Selesai</p>
            </div>
            <div class="hidden md:block self-stretch w-[3px] bg-slate-400 rounded-full"></div>
            <div class="flex flex-col gap-2 items-center">
                <h2 class="font-bold text-5xl sm:text-6xl md:text-7xl text-slate-800 dark:text-slate-400">40<span
                        class="text-3xl sm:text-4xl md:text-5xl">+</span></h2>
                <p class="text-slate-800 dark:text-slate-400 font-semibold">Ide Terealisasi</p>
            </div>
            <div class="hidden md:block self-stretch w-[3px] bg-slate-400 rounded-full"></div>
            <div class="flex flex-col gap-2 items-center">
                <h2 class="font-bold text-5xl sm:text-6xl md:text-7xl text-slate-800 dark:text-slate-400">25<span
                        class="text-3xl sm:text-4xl md:text-5xl">+</span></h2>
                <p class="text-slate-800 dark:text-slate-400 font-semibold">Bisnis Berkembang</p>
            </div>


        </div>

        <div class="w-full max-w-7xl mx-auto relative px-6 lg:px-8 mt-8 md:mt-20 py-8 group">
            <div class="w-full flex flex-col lg:flex-row-reverse gap-20 justify-between">
                <div class="w-full lg:w-7/12">
                    <div class="flex gap-2 items-center">
                        <div
                            class="h-4 w-1 sm:h-5 sm:w-1.5 md:h-6 md:w-2 group-hover:w-3 group-hover:h-2 rotate-0 group-hover:rotate-180 rounded-full bg-violet-900 transition-all duration-300 ease-in-out">
                        </div>
                        <h1 class="text-sm sm:text-base font-semibold text-slate-800 dark:text-slate-300 uppercase">
                            Kenapa Harus Kami
                        </h1>
                    </div>

                    <h2
                        class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 dark:text-slate-300 mt-6 sm:mt-8 leading-normal sm:leading-10 md:leading-16">
                        Partner terpercaya untuk membangun website impian Anda.
                    </h2>

                    <p
                        class="text-sm sm:text-base md:text-lg text-slate-700 dark:text-slate-400 font-medium sm:font-semibold mt-6 sm:mt-8">
                        Kami bukan hanya membuat website, tetapi memberikan solusi digital yang sesuai dengan kebutuhan
                        bisnis Anda.
                        Dengan harga yang bersahabat, desain modern, dan strategi tepat sasaran, kami hadir untuk membantu
                        bisnis Anda tumbuh lebih cepat.
                    </p>

                    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div class="flex items-start gap-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 rounded-2xl bg-violet-100 dark:bg-violet-900 shrink-0">
                                <i data-feather="monitor" class="w-6 h-6 text-violet-700 dark:text-violet-300"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-800 dark:text-slate-200">Desain Modern</h3>
                                <p class="text-slate-600 dark:text-slate-400 text-sm">
                                    Tampilan website elegan, responsive, dan sesuai tren terkini.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 rounded-2xl bg-violet-100 dark:bg-violet-900 shrink-0">
                                <i data-feather="shield" class="w-6 h-6 text-violet-700 dark:text-violet-300"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-800 dark:text-slate-200">Keamanan Terjamin</h3>
                                <p class="text-slate-600 dark:text-slate-400 text-sm">
                                    Sistem dilengkapi proteksi keamanan agar data bisnis tetap aman.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 rounded-2xl bg-violet-100 dark:bg-violet-900 shrink-0">
                                <i data-feather="trending-up" class="w-6 h-6 text-violet-700 dark:text-violet-300"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-800 dark:text-slate-200">Optimasi Bisnis</h3>
                                <p class="text-slate-600 dark:text-slate-400 text-sm">
                                    Website dirancang untuk meningkatkan visibilitas dan konversi bisnis.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 rounded-2xl bg-violet-100 dark:bg-violet-900 shrink-0">
                                <i data-feather="clock" class="w-6 h-6 text-violet-700 dark:text-violet-300"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-800 dark:text-slate-200">Support Cepat</h3>
                                <p class="text-slate-600 dark:text-slate-400 text-sm">
                                    Tim support kami siap membantu setiap kendala kapan saja.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="w-full lg:w-5/12 relative mt-12">
                    <div class="w-full relative max-w-lg mx-auto aspect-square">
                        <img src="{{ asset('assets/images/bloobs/asset-12.png') }}" alt=""
                            class="absolute inset-0 w-full h-full object-contain invert dark:invert-0 opacity-70 dark:opacity-30">
                        <img src="{{ asset('assets/images/bloobs/asset-11.png') }}" alt=""
                            class="absolute inset-0 w-full h-full object-contain z-20 opacity-50">
                        <img src="{{ asset('assets/images/bloobs/asset-14.png') }}" alt=""
                            class="absolute -top-10 left-16 w-2/3 max-w-xs z-10 animate-[pulse_8s_ease-in-out_infinite]">
                        <img src="{{ asset('assets/images/bloobs/asset-9.png') }}" alt=""
                            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3/4 max-w-sm z-40 animate-[spin_30s_linear_infinite]">
                        <img src="{{ asset('assets/images/bloobs/asset-10.png') }}" alt=""
                            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3/4 max-w-sm z-40 animate-[spin_50s_linear_infinite]">
                        <div class="absolute inset-0 bg-cover bg-center z-30" role="img"
                            aria-label="Partner terpercaya dalam pembuatan website modern dan profesional"
                            style="
                background-image: url('{{ asset('assets/images/partner-terpercaya.jpg') }}');
                -webkit-mask-image: url('{{ asset('assets/images/bloobs/asset-8.png') }}');
                -webkit-mask-repeat: no-repeat;
                -webkit-mask-position: center;
                -webkit-mask-size: contain;
                mask-image: url('{{ asset('assets/images/bloobs/asset-8.png') }}');
                mask-repeat: no-repeat;
                mask-position: center;
                mask-size: contain;
            ">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="pricing" aria-label="Paket Harga Website Elvacode"
        class="w-full bg-white dark:bg-slate-900 group/section transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">
            <div class="flex gap-2 items-center">
                <div
                    class="h-4 w-1 sm:h-5 sm:w-1.5 md:h-6 md:w-2 group-hover/section:w-3 group-hover/section:h-2 rotate-0 group-hover/section:rotate-180 rounded-full bg-violet-900 transition-all duration-300 ease-in-out">
                </div>
                <h1 class="text-sm sm:text-base font-semibold text-slate-800 dark:text-slate-300 uppercase">
                    Harga Terbaik Kami Tawarkan
                </h1>
            </div>

            <h2
                class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 dark:text-slate-300 mt-6 sm:mt-8">
                Pilih Paket Website Sesuai Kebutuhan Anda
            </h2>

            <p
                class="text-sm sm:text-base md:text-lg text-slate-700 dark:text-slate-400 font-medium sm:font-semibold mt-6 sm:mt-8">
                Paket fleksibel sesuai kebutuhan Anda, dari solusi sederhana hingga website profesional.
            </p>

            @php
                $plans = [
                    [
                        'name' => 'Basic',
                        'price' => 'Rp 650.000',
                        'features' => [
                            'Cocok untuk: Personal Website, Startup, Bisnis Kecil',
                            'Tampilan Responsive',
                            '4 Statis Halaman',
                            'Free Domain & Server 1 Tahun',
                            '1x Revisi Desain',
                            'SSL/HTTP Secure',
                        ],
                    ],
                    [
                        'name' => 'Professional',
                        'price' => 'Rp 1.500.000',
                        'features' => [
                            'Cocok untuk: Portfolio Website, Bisnis Menengah',
                            'Tampilan Responsive',
                            '5 - 10 Statis Halaman',
                            'Free Domain & Server 1 Tahun',
                            '3x Revisi Desain',
                            'SSL/HTTP Secure',
                            'Free Maintenance 1 Tahun',
                        ],
                    ],
                    [
                        'name' => 'Advance',
                        'price' => 'Contact Us',
                        'features' => [
                            'Cocok untuk: Website E-commerce, Web Custom',
                            'Tampilan Responsive',
                            'Free Domain & Server 1 Tahun',
                            'SSL/HTTP Secure',
                            'Gratis Email Bisnis',
                            'Free Maintenance 1 Tahun',
                            '5x Revisi Desain',
                            'Custom Design',
                            'Custom Feature',
                            'Garansi 6 Bulan',
                        ],
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                @foreach ($plans as $plan)
                    <div
                        class="w-full overflow-hidden px-8 py-8 min-h-[350px] bg-slate-100 dark:bg-slate-800 rounded-2xl hover:bg-violet-500 transition-colors duration-150 ease-in-out flex flex-col justify-between group cursor-default">
                        <div class="flex flex-col gap-4">
                            <h4
                                class="text-slate-700 dark:text-slate-300 font-extrabold text-lg mt-2 text-center group-hover:text-white transition-colors duration-150 ease-in-out">
                                {{ $plan['name'] }}
                            </h4>
                            <h3
                                class="text-slate-700 dark:text-slate-300 font-extrabold text-4xl text-center group-hover:text-white transition-colors duration-150 ease-in-out">
                                {{ $plan['price'] }}
                            </h3>
                            <ul
                                class="list-disc text-slate-600 dark:text-slate-400 font-medium flex flex-col gap-2 mt-4 text-left pl-5 group-hover:text-white transition-colors duration-150 ease-in-out">
                                @foreach ($plan['features'] as $feature)
                                    <li>{{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <a href="https://wa.me/6287776421079?text=Halo%2C%20saya%20ingin%20menggunakan%20jasa%20Web%20Development%20Paket%20{{ urlencode($plan['name']) }}"
                            target="_blank"
                            class="mt-8 font-bold text-slate-700 dark:text-slate-200 w-full text-center p-2 rounded-full border border-slate-400 group-hover:border-white group-hover:text-white hover:bg-white hover:text-violet-600 transition-colors duration-150 ease-in-out">
                            Get Started
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section
        class="py-16 bg-gradient-to-b from-white to-slate-100 
         dark:bg-gradient-to-b dark:from-gray-900 dark:to-gray-800 
         transition-colors duration-300 ease-in-out group/section">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex gap-2 items-center">
                <div
                    class="h-4 w-1 sm:h-5 sm:w-1.5 md:h-6 md:w-2 group-hover/section:w-3 group-hover/section:h-2 rotate-0 group-hover/section:rotate-180 rounded-full bg-violet-900 transition-all duration-300 ease-in-out">
                </div>
                <h1 class="text-sm sm:text-base font-semibold text-slate-800 dark:text-slate-300 uppercase">
                    Layanan Terbaik Kami
                </h1>
            </div>

            <h2
                class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl max-w-2xl md:max-w-3xl font-bold text-slate-800 dark:text-slate-300 mt-6 sm:mt-8">
                Solusi Website Profesional untuk Bisnis dan Organisasi Anda
            </h2>

            <p
                class="text-sm sm:text-base md:text-lg text-slate-700 dark:text-slate-400 font-medium sm:font-semibold mt-6 sm:mt-8 max-w-2xl md:max-w-3xl">
                Kami menyediakan layanan pembuatan website modern, responsif, dan sesuai kebutuhan Anda.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">

                <div
                    class="group bg-slate-50 dark:bg-gray-900 rounded-xl shadow-sm hover:shadow-md transition p-6 flex flex-col items-center text-center">
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-sky-100 dark:bg-sky-900/50 rounded-full mb-4">
                        <i data-feather="briefcase" class="w-6 h-6 text-sky-600 dark:text-sky-400"></i>
                    </div>
                    <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-2">Company Profile</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">
                        Website elegan untuk memperkuat citra dan kredibilitas bisnis Anda.
                    </p>
                </div>

                <div
                    class="group bg-slate-50 dark:bg-gray-900 rounded-xl shadow-sm hover:shadow-md transition p-6 flex flex-col items-center text-center">
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-emerald-100 dark:bg-emerald-900/50 rounded-full mb-4">
                        <i data-feather="shopping-cart" class="w-6 h-6 text-emerald-600 dark:text-emerald-400"></i>
                    </div>
                    <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-2">Toko Online</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">
                        Solusi e-commerce modern untuk meningkatkan penjualan bisnis Anda.
                    </p>
                </div>

                <div
                    class="group bg-slate-50 dark:bg-gray-900 rounded-xl shadow-sm hover:shadow-md transition p-6 flex flex-col items-center text-center">
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-indigo-100 dark:bg-indigo-900/50 rounded-full mb-4">
                        <i data-feather="layers" class="w-6 h-6 text-indigo-600 dark:text-indigo-400"></i>
                    </div>
                    <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-2">Website Instansi</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">
                        Cocok untuk instansi pemerintah, sekolah, maupun organisasi non-profit.
                    </p>
                </div>

                <div
                    class="group bg-slate-50 dark:bg-gray-900 rounded-xl shadow-sm hover:shadow-md transition p-6 flex flex-col items-center text-center">
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-orange-100 dark:bg-orange-900/50 rounded-full mb-4">
                        <i data-feather="code" class="w-6 h-6 text-orange-600 dark:text-orange-400"></i>
                    </div>
                    <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-2">Custom Website</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">
                        Website custom dengan fitur fleksibel sesuai kebutuhan bisnis Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section
        class="py-16 bg-gradient-to-b from-slate-100 to-slate-50 dark:from-slate-800 dark:to-slate-900 transition-colors duration-300 ease-in-out group/section">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex gap-2 items-center">
                <div
                    class="h-4 w-1 sm:h-5 sm:w-1.5 md:h-6 md:w-2 group-hover/section:w-3 group-hover/section:h-2 rotate-0 group-hover/section:rotate-180 rounded-full bg-violet-900 dark:bg-violet-500 transition-all duration-300 ease-in-out">
                </div>
                <h1 class="text-sm sm:text-base font-semibold text-slate-800 dark:text-slate-300 uppercase">
                    Testimonial
                </h1>
            </div>

            <h2
                class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl max-w-md md:max-w-lg font-bold text-slate-800 dark:text-slate-100 mt-6 sm:mt-8">
                Apa Kata Mereka Tentang Kami
            </h2>

            <p
                class="text-sm sm:text-base md:text-lg text-slate-700 dark:text-slate-400 font-medium mt-6 sm:mt-8 max-w-2xl md:max-w-3xl">
                Mereka puas dengan website modern yang mudah digunakan dan mendukung pertumbuhan bisnis.
            </p>
            <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-8">
                @php
                    $testimonials = [
                        [
                            'name' => 'Salim Sulaiman',
                            'username' => '@salimsulaiman',
                            'message' =>
                                'Website yang dibuat sangat profesional, responsif, dan sesuai kebutuhan bisnis saya. Desainnya modern, mudah digunakan, serta membantu meningkatkan kepercayaan pelanggan terhadap brand kami.',
                            'image' => 'https://ui-avatars.com/api/?name=Salim+Sulaiman&background=random',
                        ],
                        [
                            'name' => 'Aisyah Putri',
                            'username' => '@aisyahputri',
                            'message' =>
                                'Timnya cepat tanggap dan hasil pekerjaannya benar-benar memuaskan. Proses komunikasi juga lancar, sehingga ide saya bisa diterjemahkan dengan baik menjadi website yang elegan dan fungsional.',
                            'image' => 'https://ui-avatars.com/api/?name=Aisyah+Putri&background=random',
                        ],
                        [
                            'name' => 'Budi Santoso',
                            'username' => '@budisantoso',
                            'message' =>
                                'Website yang mereka buat responsif, mudah digunakan, dan sangat membantu meningkatkan penjualan online saya. Dengan tampilan yang profesional, pelanggan jadi lebih percaya dan nyaman berbelanja.',
                            'image' => 'https://ui-avatars.com/api/?name=Budi+Santoso&background=random',
                        ],
                        [
                            'name' => 'Citra Dewi',
                            'username' => '@citradewi',
                            'message' =>
                                'Layanan yang diberikan sangat ramah dan hasil desain website terlihat elegan. Saya merasa terbantu karena website ini memudahkan pelanggan dalam mengakses informasi produk dan layanan kami.',
                            'image' => 'https://ui-avatars.com/api/?name=Citra+Dewi&background=random',
                        ],
                        [
                            'name' => 'Rizky Maulana',
                            'username' => '@rizkymaulana',
                            'message' =>
                                'Website yang dibuat tidak hanya cepat dan modern, tetapi juga benar-benar sesuai dengan ekspektasi saya. Kehadiran website ini membantu saya mengembangkan bisnis ke pasar yang lebih luas.',
                            'image' => 'https://ui-avatars.com/api/?name=Rizky+Maulana&background=random',
                        ],
                        [
                            'name' => 'Dewi Lestari',
                            'username' => '@dewilestari',
                            'message' =>
                                'Proses pengerjaan website dijelaskan dengan sangat detail dan hasil akhirnya luar biasa profesional. Saya merasa tenang karena seluruh kebutuhan bisnis saya bisa diakomodasi dengan baik melalui website ini.',
                            'image' => 'https://ui-avatars.com/api/?name=Dewi+Lestari&background=random',
                        ],
                    ];

                @endphp

                @foreach ($testimonials as $testimonial)
                    <div
                        class="w-full min-h-[200px] rounded-3xl bg-white dark:bg-gray-800 shadow-xs hover:rotate-3 hover:scale-105 transition-all duration-300 ease-in-out hover:shadow-2xl flex flex-col items-center gap-1 p-6">

                        <div class="rounded-full h-12 w-12 bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                            <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}"
                                class="w-full h-full object-cover object-center">
                        </div>

                        <h4 class="text-base text-slate-900 dark:text-slate-100 font-bold mt-2">{{ $testimonial['name'] }}
                        </h4>
                        <h5 class="text-xs text-slate-500 dark:text-slate-400 font-semibold">
                            {{ $testimonial['username'] }}</h5>
                        <p class="text-center text-[14px] mt-4 text-slate-600 dark:text-slate-300 font-medium">
                            {{ $testimonial['message'] }}
                        </p>

                        <div
                            class="w-8 h-8 flex items-center justify-center p-2 rounded-full border border-slate-300 dark:border-slate-600 mt-4">
                            <svg fill="currentColor" viewBox="0 0 8 8" class="w-5 text-slate-500 dark:text-slate-400"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 0c-1.65 0-3 1.35-3 3v3h3v-3h-2c0-1.11.89-2 2-2v-1zm5 0c-1.65 0-3 1.35-3 3v3h3v-3h-2c0-1.11.89-2 2-2v-1z"
                                    transform="translate(0 1)" />
                            </svg>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section
        class="relative isolate overflow-hidden py-24 sm:py-32 bg-white dark:bg-slate-950 transition-colors duration-500">
        <div aria-hidden="true"
            class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
            <div style="clip-path: polygon(50% 0%, 90% 25%, 90% 75%, 50% 100%, 10% 75%, 10% 25%)"
                class="relative mx-auto aspect-[1155/678] w-[36rem] 
         rotate-[30deg] bg-gradient-to-tr 
         from-pink-300 via-sky-200 to-purple-400 
         opacity-30 sm:w-[72rem] 
         animate-[pulse_8s_ease-in-out_infinite]">
            </div>
        </div>
        <div class="mx-auto max-w-xl sm:max-w-2xl text-center px-4">
            <img src="{{ asset('assets/logos/elvacode-logo.webp') }}" alt="Elvacode Logo"
                class="w-24 sm:w-28 md:w-32 mx-auto mb-8 sm:mb-12 dark:invert brightness-100">

            <h2
                class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight text-gray-900 dark:text-white">
                Tingkatkan Bisnis Anda dengan Website Profesional
            </h2>

            <p class="mt-4 sm:mt-6 text-base sm:text-lg md:text-xl leading-relaxed text-gray-600 dark:text-gray-300">
                Bersama <span class="font-semibold text-indigo-600 dark:text-indigo-400">Elvacode</span>,
                hadirkan website modern, cepat, dan elegan yang siap meningkatkan
                kehadiran digital Anda.
            </p>

            <div class="mt-6 sm:mt-8 md:mt-10 flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-x-6">
                <a href="{{ route('contact.index') }}"
                    class="rounded-2xl bg-violet-600 px-5 sm:px-6 py-2.5 sm:py-3 text-sm sm:text-base font-semibold 
                   text-white shadow-lg hover:bg-violet-700 focus-visible:outline 
                   focus-visible:outline-offset-2 focus-visible:outline-violet-600 transition">
                    Konsultasi Gratis
                </a>
                <a href="#"
                    class="text-sm sm:text-base font-semibold leading-6 text-gray-900 dark:text-gray-200 
                   hover:text-violet-600 dark:hover:text-violet-400 transition">
                    Lihat Portofolio →
                </a>
            </div>
        </div>
    </section>
@endsection
