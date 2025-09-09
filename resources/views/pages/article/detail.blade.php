@extends('components.layouts.app')

@section('title', 'Membangun Platform E-Learning dengan Fitur Interaktif - Elvacode')

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
                    <li><a href="{{ route('article.index') }}"
                            class="hover:text-white transition-colors duration-200">Artikel</a></li>
                    <li>/</li>
                    <li class="text-white font-semibold">Membangun Platform E-Learning dengan Fitur Interaktif</li>
                </ol>
            </nav>

            <div class="text-center">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold relative max-w-4xl mx-auto leading-16">
                    Membangun Platform E-Learning dengan Fitur Interaktif
                    <div
                        class="absolute inset-0 text-3xl sm:text-4xl md:text-5xl font-bold text-violet-300 opacity-30 blur-sm -z-10 max-w-4xl mx-auto leading-16">
                        Membangun Platform E-Learning dengan Fitur Interaktif
                    </div>
                </h1>
            </div>
        </div>
    </section>
    <section
        class="relative isolate overflow-hidden bg-white
        dark:bg-gray-900 
        transition-colors duration-300 ease-in-out group/section">

        <div class="max-w-7xl py-8 sm:py-16 mx-auto px-6 lg:px-8">
            <div class="w-full grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div class="lg:col-span-3 h-fit">
                    <div class="w-full rounded-2xl bg-slate-100 aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/background-it.jpg') }}" alt=""
                            class="w-full h-full object-cover">
                    </div>
                    <h1
                        class="text-2xl sm:text-3xl md:text-5xl leading-normal sm:leading-10 md:leading-16 font-semibold text-slate-800 dark:text-slate-200 mt-4">
                        Membangun Platform
                        E-Learning
                        dengan Fitur Interaktif</h1>
                    <div class="flex gap-4 mt-4 items-center">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/logos/icon-elvacode-2.png') }}" alt="Elvacode"
                                class="w-5 h-5 object-contain">
                            <h4 class="text-sm text-slate-600 dark:text-slate-400">Tim Elvacode</h4>
                        </div>
                        <div class="w-[3px] h-4 bg-slate-300 rounded-full"></div>
                        <div class="flex items-center gap-2">
                            <i data-feather="calendar" class="w-4 h-4 text-slate-500"></i>
                            <h4 class="text-sm text-slate-600 dark:text-slate-400">Juni 10, 2025</h4>
                        </div>
                        <div class="w-[3px] h-4 bg-slate-300 rounded-full"></div>
                        <div class="px-3 py-1 bg-violet-100 text-violet-800 text-sm font-medium rounded-full inline-block">
                            Website & Development
                        </div>
                    </div>
                    <article>
                        <p class="text-slate-700 dark:text-slate-400 text-lg leading-relaxed mt-8">
                            Taleify adalah platform e-learning yang dirancang untuk meningkatkan literasi dan keterampilan
                            membaca di kalangan anak-anak dan remaja. Dengan antarmuka yang ramah pengguna dan fitur-fitur
                            interaktif, Taleify bertujuan untuk membuat proses belajar menjadi menyenangkan dan efektif.
                        </p>
                        <h2 class="text-2xl font-semibold text-slate-800 dark:text-slate-200 mt-8">Latar Belakang</h2>
                        <p class="text-slate-700 dark:text-slate-400 text-lg leading-relaxed mt-4">
                            Dalam era digital saat ini, akses terhadap sumber belajar yang berkualitas sangat penting.
                            Taleify
                            hadir sebagai solusi untuk menyediakan platform yang mudah diakses oleh anak-anak dan remaja
                            guna
                            meningkatkan kemampuan literasi mereka melalui berbagai konten edukatif.
                        </p>
                        <h2 class="text-2xl font-semibold text-slate-800 dark:text-slate-200 mt-8">Fitur Utama</h2>
                        <ul class="list-disc list-inside text-slate-700 dark:text-slate-400 text-lg leading-relaxed mt-4">
                            <li class="mt-2">Katalog Buku Digital: Menyediakan berbagai buku digital yang dapat diakses
                                kapan saja.</li>
                            <li class="mt-2">Mode Interaktif: Fitur kuis dan permainan untuk meningkatkan keterlibatan
                                belajar.</li>
                            <li class="mt-2">Profil Pengguna: Memungkinkan pengguna untuk melacak kemajuan belajar mereka.
                            </li>
                            <li class="mt-2">Rekomendasi Personalisasi: Menyarankan konten berdasarkan minat dan tingkat
                                kemampuan pengguna.</li>
                        </ul>
                    </article>
                </div>
                <aside class="lg:col-span-1 flex flex-col gap-8">
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl p-4">
                        <h3 class="text-lg font-semibold text-slate-800 dark:text-slate-200 mb-3">Cari Artikel</h3>
                        <div class="relative">
                            <input type="text" placeholder="Cari..."
                                class="w-full rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-violet-500">
                            <button
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-500 dark:text-slate-400 hover:text-violet-600">
                                <i data-feather="search" class="w-5 h-5"></i>
                            </button>
                        </div>
                    </div>
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl p-4">
                        <h3 class="text-lg font-semibold text-slate-800 dark:text-slate-200 mb-3">Kategori</h3>
                        <ul class="flex flex-col gap-2 text-sm font-medium text-slate-600 dark:text-slate-400">
                            <li><a href="#" class="hover:text-violet-600 dark:hover:text-violet-400">Website &
                                    Development</a></li>
                            <li><a href="#" class="hover:text-violet-600 dark:hover:text-violet-400">UI/UX Design</a>
                            </li>
                            <li><a href="#" class="hover:text-violet-600 dark:hover:text-violet-400">SEO &
                                    Marketing</a></li>
                            <li><a href="#" class="hover:text-violet-600 dark:hover:text-violet-400">Bisnis
                                    Digital</a></li>
                            <li><a href="#" class="hover:text-violet-600 dark:hover:text-violet-400">Tips &
                                    Tutorial</a></li>
                        </ul>
                    </div>
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl p-4">
                        <h3 class="text-lg font-semibold text-slate-800 dark:text-slate-200 mb-3">Postingan Terbaru</h3>
                        <ul class="flex flex-col gap-4">
                            <li>
                                <a href="#" class="flex items-center gap-3 group">
                                    <div class="w-16 h-12 rounded-md overflow-hidden bg-slate-200 dark:bg-slate-700">
                                        <img src="{{ asset('assets/images/taleify-project.jpg') }}" alt=""
                                            class="w-full h-full object-cover group-hover:scale-105 transition">
                                    </div>
                                    <div>
                                        <h4
                                            class="text-sm font-semibold text-slate-700 dark:text-slate-300 group-hover:text-violet-600 line-clamp-2">
                                            Cara Memilih Hosting untuk Website Bisnis
                                        </h4>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">08 Sep 2025</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center gap-3 group">
                                    <div class="w-16 h-12 rounded-md overflow-hidden bg-slate-200 dark:bg-slate-700">
                                        <img src="{{ asset('assets/images/taleify-project.jpg') }}" alt=""
                                            class="w-full h-full object-cover group-hover:scale-105 transition">
                                    </div>
                                    <div>
                                        <h4
                                            class="text-sm font-semibold text-slate-700 dark:text-slate-300 group-hover:text-violet-600 line-clamp-2">
                                            Pentingnya Desain Responsif untuk UMKM
                                        </h4>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">05 Sep 2025</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>



@endsection
