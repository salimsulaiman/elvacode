@extends('components.layouts.app')

@section('title', 'Tentang Kami - Elvacode')

@section('content')
    <section
        class="relative bg-gradient-to-br from-slate-900 via-indigo-900 to-violet-900 text-white py-20 sm:py-28 overflow-hidden bg-cover bg-center">
        <div class="absolute inset-0 overflow-hidden">
            <div
                class="absolute -top-24 left-1/2 -translate-x-1/2 w-[40rem] h-[40rem] bg-violet-500 opacity-20 blur-3xl rounded-full pulse-glow">
            </div>
            <div
                class="absolute top-20 right-1/4 w-64 h-64 bg-blue-400 opacity-15 blur-2xl rounded-full float-animation [animation-delay:-2s]">
            </div>
            <div
                class="absolute bottom-20 left-1/4 w-48 h-48 bg-purple-400 opacity-10 blur-2xl rounded-full float-animation [animation-delay:-4s]">
            </div>
            <div class="absolute top-32 left-1/3 w-32 h-32 bg-indigo-400 opacity-8 blur-xl rounded-full drift-animation">
            </div>
            <div
                class="absolute bottom-32 right-1/3 w-24 h-24 bg-violet-400 opacity-12 blur-xl rounded-full drift-animation [animation-delay:-7s]">
            </div>

            <div class="absolute inset-0 geometric-pattern"></div>

            <div
                class="absolute inset-0 opacity-5 [background-image:radial-gradient(circle,white_1px,transparent_1px)] [background-size:50px_50px]">
            </div>

            <div class="absolute inset-0 opacity-10">
                <div
                    class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-violet-400 to-transparent rotate-12 origin-left">
                </div>
                <div
                    class="absolute top-20 left-0 w-full h-px bg-gradient-to-r from-transparent via-blue-400 to-transparent -rotate-12 origin-left">
                </div>
                <div
                    class="absolute bottom-20 left-0 w-full h-px bg-gradient-to-r from-transparent via-indigo-400 to-transparent rotate-6 origin-left">
                </div>
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8 z-10">
            <nav class="flex justify-center mb-6" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-violet-200">
                    <li><a href="/" class="hover:text-white transition-colors duration-200">Home</a></li>
                    <li>/</li>
                    <li class="text-white font-semibold">Harga Paket</li>
                </ol>
            </nav>

            <div class="text-center">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold relative">
                    Harga Paket
                    <div
                        class="absolute inset-0 text-3xl sm:text-4xl md:text-5xl font-bold text-violet-300 opacity-30 blur-sm -z-10">
                        Harga Paket
                    </div>
                </h1>
            </div>
        </div>
    </section>
    <section id="pricing" aria-label="Paket Harga Website Elvacode"
        class="w-full overflow-hidden isolate dark:bg-slate-900 transition-colors duration-300 ease-in-out group/section relative">
        <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
            <div style="clip-path: polygon(50% 0%, 90% 25%, 90% 75%, 50% 100%, 10% 75%, 10% 25%)"
                class="relative mx-auto aspect-[1155/678] w-[36rem] 
         rotate-[30deg] bg-gradient-to-tr 
         from-pink-300 via-sky-200 to-purple-400 
         opacity-30 sm:w-[72rem] 
         animate-[pulse_8s_ease-in-out_infinite]">
            </div>
        </div>


        <div class="max-w-7xl mx-auto py-8 sm:py-16 px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 dark:text-slate-300">
                Paket Harga Transparan & Fleksibel
            </h2>

            <p
                class="text-sm sm:text-base md:text-lg text-slate-700 dark:text-slate-400 font-medium sm:font-semibold mt-6 sm:mt-8">
                Sesuaikan pilihan paket dengan kebutuhan Anda—mulai dari website sederhana hingga solusi profesional yang
                lengkap.
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
                            Dapatkan Paket
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection
