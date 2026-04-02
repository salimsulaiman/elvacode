@extends('components.layouts.app')

@section('title', 'Tentang Kami - Elvacode')

@section('content')
    <section
        class="relative bg-gradient-to-br from-slate-900 via-indigo-900 to-violet-900 text-white pt-36 sm:pt-40 pb-20 sm:pb-28 overflow-hidden bg-cover bg-center">
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
                    <li class="text-white font-semibold">Tentang Kami</li>
                </ol>
            </nav>

            <div class="text-center">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold relative">
                    Tentang Elvacode
                    <div
                        class="absolute inset-0 text-3xl sm:text-4xl md:text-5xl font-bold text-violet-300 opacity-30 blur-sm -z-10">
                        Tentang Elvacode
                    </div>
                </h1>
            </div>
        </div>
    </section>


    <section
        class="w-full overflow-hidden isolate dark:bg-slate-900 transition-colors duration-300 ease-in-out group relative">

        <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 sm:-top-80">

            <div
                class="relative mx-auto w-[28rem] h-[28rem]
        sm:w-[40rem] sm:h-[40rem]
        bg-gradient-to-bl from-blue-400 to-purple-500
        opacity-20 blur-2xl rounded-full">
            </div>

        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 pt-8 sm:pt-16 pb-4 sm:pb-12">
            <div class="flex flex-col-reverse lg:flex-row gap-4 lg:gap-20 justify-between items-center">

                <div class="w-full lg:w-6/12">

                    <h2
                        class="text-2xl sm:text-3xl md:text-4xl max-w-md md:max-w-lg font-bold text-slate-800 dark:text-white mt-6 sm:mt-8 leading-normal sm:leading-10">
                        Membantu bisnis berkembang melalui website berkualitas.
                    </h2>

                    <p
                        class="text-sm sm:text-base md:text-lg text-slate-700 dark:text-slate-300 font-medium mt-6 sm:mt-8 text-justify max-w-2xl md:max-w-3xl">
                        Kami adalah tim yang berfokus pada pembuatan website modern, cepat, dan responsif. Dengan pengalaman
                        lebih dari 2 tahun, kami menghadirkan solusi digital yang profesional dan efektif untuk mendukung
                        pertumbuhan bisnis Anda.
                    </p>

                    <video src="" class="w-full rounded-2xl aspect-video bg-slate-200 mt-8"></video>
                </div>

                <div class="w-full lg:w-6/12">
                    <div class="relative w-full">
                        <img src="{{ asset('assets/images/experience.png') }}" alt="Tentang Elvacode" class="w-full h-full">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section
        class="pt-4 pb-4 sm:pt-8 sm:pb-16 bg-gradient-to-b from-slate-50 via-indigo-50 to-white dark:from-slate-900 dark:via-slate-800 dark:to-slate-950 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2
                class="text-2xl sm:text-3xl md:text-4xl max-w-md md:max-w-lg font-bold text-slate-800 dark:text-white mt-6 sm:mt-8 leading-normal sm:leading-10">
                Pencapaian Elvacode
            </h2>

            <p
                class="text-sm sm:text-base md:text-lg text-slate-700 dark:text-slate-300 font-medium mt-6 sm:mt-8 text-justify max-w-2xl md:max-w-3xl">
                Kami berkomitmen menghadirkan solusi digital yang modern dan fungsional.
                Statistik berikut menjadi cerminan dedikasi kami pada setiap proyek.
            </p>

            <section aria-label="Statistik Keberhasilan Elvacode"
                class="font-medium mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="relative rounded-xl overflow-hidden shadow-lg aspect-[4/5] w-full h-full group">
                    <img src="{{ asset('assets/images/happy-client.jpg') }}"
                        alt="Klien Elvacode yang puas setelah menggunakan layanan"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">

                    <div
                        class="absolute rounded-2xl backdrop-blur-xs bottom-4 left-4 right-4 h-[100px] bg-black/40 flex flex-col justify-center items-start text-white px-4">
                        <h3 class="text-2xl md:text-4xl font-medium">95%</h3>
                        <p class="text-xs md:text-sm mt-0">Kepuasan Klien</p>
                    </div>
                </div>

                <div class="relative rounded-xl overflow-hidden shadow-lg aspect-[4/5] w-full h-full group">
                    <img src="{{ asset('assets/images/finish-project.jpg') }}"
                        alt="Proyek website Elvacode yang berhasil diselesaikan"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">

                    <div
                        class="absolute rounded-2xl backdrop-blur-xs bottom-4 left-4 right-4 h-[100px] bg-black/40 flex flex-col justify-center items-start text-white px-4">
                        <h3 class="text-2xl md:text-4xl font-medium">50+</h3>
                        <p class="text-xs md:text-sm mt-0">Proyek Selesai</p>
                    </div>
                </div>

                <div class="relative rounded-xl overflow-hidden shadow-lg aspect-[4/5] w-full h-full group">
                    <img src="{{ asset('assets/images/realitation-idea.jpg') }}"
                        alt="Ide klien yang berhasil direalisasikan menjadi website"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">

                    <div
                        class="absolute rounded-2xl backdrop-blur-xs bottom-4 left-4 right-4 h-[100px] bg-black/40 flex flex-col justify-center items-start text-white px-4">
                        <h3 class="text-2xl md:text-4xl font-medium">40+</h3>
                        <p class="text-xs md:text-sm mt-0">Ide Terealisasi</p>
                    </div>
                </div>

                <div class="relative rounded-xl overflow-hidden shadow-lg aspect-[4/5] w-full h-full group">
                    <img src="{{ asset('assets/images/business-growth.jpg') }}"
                        alt="Bisnis klien yang berkembang setelah memiliki website profesional"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">

                    <div
                        class="absolute rounded-2xl backdrop-blur-xs bottom-4 left-4 right-4 h-[100px] bg-black/40 flex flex-col justify-center items-start text-white px-4">
                        <h3 class="text-2xl md:text-4xl font-medium">25+</h3>
                        <p class="text-xs md:text-sm mt-0">Bisnis Berkembang</p>
                    </div>
                </div>
            </section>

        </div>
    </section>

    <section
        class="relative py-20 bg-gradient-to-r from-gray-50 to-white dark:from-gray-900 dark:to-slate-950 transition-colors duration-300 ease-in-out">
        <div class="mx-auto max-w-4xl text-center px-6 lg:px-8">
            <span
                class="inline-block px-4 py-1.5 mb-6 text-sm font-medium tracking-wide 
                      text-violet-700 dark:text-violet-300 bg-violet-100/70 dark:bg-violet-900/40 rounded-full">
                Mari Bekerja Sama
            </span>

            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-gray-900 dark:text-white">
                Siap Diskusi Proyek Website Anda?
            </h2>

            <p class="mt-4 text-lg leading-relaxed text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Kami membantu mewujudkan website sesuai kebutuhan bisnis Anda —
                modern, responsif, dan dikelola dengan sepenuh hati.
            </p>

            <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact.index') }}"
                    class="rounded-2xl bg-violet-600 px-5 sm:px-6 py-2.5 sm:py-3 text-sm sm:text-base font-semibold 
                   text-white shadow-lg hover:bg-violet-700 focus-visible:outline 
                   focus-visible:outline-offset-2 focus-visible:outline-violet-600 transition">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </section>



@endsection
