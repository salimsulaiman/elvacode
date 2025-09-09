@extends('components.layouts.app')

@section('title', 'Portofolio - Elvacode')

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
                    <li class="text-white font-semibold">Portofolio</li>
                </ol>
            </nav>

            <div class="text-center">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold relative">
                    Portofolio
                    <div
                        class="absolute inset-0 text-3xl sm:text-4xl md:text-5xl font-bold text-violet-300 opacity-30 blur-sm -z-10">
                        Portofolio
                    </div>
                </h1>
            </div>
        </div>
    </section>
    <section id="portfolio" aria-label="Portfolio Website Elvacode"
        class="relative isolate overflow-hidden bg-white
         dark:bg-gray-900 
         transition-colors duration-300 ease-in-out group/section">

        <div aria-hidden="true" class="absolute inset-x-0 top-0 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
            <div style="clip-path: polygon(50% 0%, 90% 25%, 90% 75%, 50% 100%, 10% 75%, 10% 25%)"
                class="relative mx-auto aspect-[1155/678] w-[36rem] 
         rotate-[30deg] bg-gradient-to-tr 
         from-pink-300 via-sky-200 to-purple-400 
         opacity-30 sm:w-[72rem] 
         animate-[pulse_8s_ease-in-out_infinite]">
            </div>
        </div>

        <div class="max-w-7xl py-8 sm:py-16 mx-auto px-6 lg:px-8">
            <h2
                class=" text-2xl sm:text-3xl md:text-4xl max-w-2xl md:max-w-xl font-bold text-slate-800 dark:text-slate-300">
                Hasil Karya Digital yang Telah Kami Bangun
            </h2>

            <p
                class=" text-sm sm:text-base md:text-lg text-slate-700 dark:text-slate-400 font-medium mt-6 sm:mt-8 max-w-2xl md:max-w-3xl">
                Berikut adalah beberapa proyek website yang telah kami kerjakan. Setiap proyek dirancang dengan fokus pada
                kebutuhan unik klien
            </p>
            <div class="w-full grid grid-cols-1 sm:grid-cols-2 gap-6 mt-12">
                <a href="{{ route('portfolio.show', ['slug' => 'taleify']) }}" class="w-full">
                    <div class="w-full flex flex-col gap-3 group">
                        <div class="w-full aspect-video rounded-2xl overflow-hidden bg-slate-200 dark:bg-slate-700">
                            <img src="{{ asset('assets/images/taleify-project.jpg') }}"
                                alt="Taleify - Platform E-Learning by Elvacode"
                                class="w-full h-full object-cover object-center group-hover:scale-105 transition-all duration-300 ease-in-out">
                        </div>
                        <h3
                            class="text-3xl font-semibold text-slate-800 dark:text-slate-200 group-hover:text-violet-900 dark:group-hover:text-violet-300">
                            Taleify
                        </h3>
                        <h5
                            class="text-xs px-3 py-1 border border-slate-500 dark:border-slate-400 w-fit rounded-full text-slate-600 dark:text-slate-300 font-semibold">
                            Platform E-Learning
                        </h5>
                        <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2 font-medium">
                            Taleify adalah platform e-learning interaktif yang membantu siswa belajar dengan lebih efektif
                            melalui materi digital modern.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>



@endsection
