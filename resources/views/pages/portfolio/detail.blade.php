@extends('components.layouts.app')

@section('title', 'Taleify - Elvacode')

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
                    <li><a href="{{ route('portfolio.index') }}"
                            class="hover:text-white transition-colors duration-200">Portofolio</a></li>
                    <li>/</li>
                    <li class="text-white font-semibold">Taleify</li>
                </ol>
            </nav>

            <div class="text-center">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold relative">
                    Taleify
                    <div
                        class="absolute inset-0 text-3xl sm:text-4xl md:text-5xl font-bold text-violet-300 opacity-30 blur-sm -z-10">
                        Taleify
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
            <div class="flex flex-col md:flex-row gap-8 md:gap-20 justify-between">
                <div class="w-full md:w-9/12">
                    <div class="w-full aspect-video rounded-2xl overflow-hidden bg-slate-200 dark:bg-slate-700">
                        <img src="{{ asset('assets/images/taleify-project.jpg') }}"
                            alt="Taleify Platform Literasi Digital - Proyek Website Elvacode"
                            class="w-full h-full object-cover object-center">
                    </div>
                    <h5
                        class="text-xs px-3 py-1 border border-slate-500 dark:border-slate-400 w-fit rounded-full text-slate-600 dark:text-slate-300 font-semibold mt-8">
                        Platform E-Learning
                    </h5>
                    <h2
                        class="text-4xl max-w-2xl md:max-w-xl font-bold text-slate-800 dark:text-slate-300 leading-tight mt-4">
                        Platform Literasi - Taleify
                    </h2>

                    <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed mt-4">
                        Taleify adalah sebuah platform literasi digital yang dirancang untuk menjadi wadah kreatif
                        bagi penulis dan pembaca. Project ini hadir untuk menjawab kebutuhan komunitas literasi di era
                        digital,
                        di mana pembaca dapat menemukan karya sastra dengan mudah dan penulis bisa mempublikasikan karyanya
                        tanpa hambatan.
                    </p>

                    <div class="mt-8">
                        <h3 class="text-2xl font-semibold text-slate-800 dark:text-slate-200 mb-3">Latar Belakang</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed">
                            Banyak penulis pemula kesulitan menemukan platform yang tepat untuk berbagi karya,
                            sementara pembaca membutuhkan tempat untuk menemukan bacaan berkualitas sesuai minat mereka.
                            Taleify menjembatani kebutuhan ini dengan menghadirkan platform yang sederhana, modern,
                            dan interaktif.
                        </p>
                    </div>

                    <div class="mt-8">
                        <h3 class="text-2xl font-semibold text-slate-800 dark:text-slate-200 mb-3">Fitur Utama</h3>
                        <ul class="list-disc list-inside space-y-2 text-slate-600 dark:text-slate-400 text-lg">
                            <li>Dashboard penulis untuk mengelola karya sastra</li>
                            <li>Kategori bacaan berdasarkan genre dan tema</li>
                            <li>Mode terang & gelap untuk kenyamanan membaca</li>
                            <li>Fitur interaktif seperti komentar dan rating pembaca</li>
                        </ul>
                    </div>

                    <div class="mt-8">
                        <h3 class="text-2xl font-semibold text-slate-800 dark:text-slate-200 mb-3">Hasil & Dampak</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed">
                            Dengan hadirnya Taleify, komunitas literasi memiliki ruang digital yang lebih modern,
                            ramah pengguna, dan mendukung perkembangan ekosistem penulis-pembaca di Indonesia.
                            Platform ini diharapkan dapat membantu penulis baru berkembang sekaligus memperkaya pengalaman
                            membaca masyarakat.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-3/12">
                    <h3 class="text-base text-slate-800 dark:text-white mb-4 font-semibold">Proyek Lainnya</h3>
                    <div class="w-full grid grid-cols-1 gap-4">
                        <a href="{{ route('portfolio.show', ['slug' => 'e-learning-platform']) }}"
                            class="w-full flex flex-col gap-2 group">
                            <div class="w-full rounded-xl overflow-hidden bg-slate-200 aspect-video">
                                <img src="{{ asset('assets/images/taleify-project.jpg') }}" alt="E-Learning Platform"
                                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-all duration-300 ease-in-out grayscale-100 group-hover:grayscale-0">
                            </div>
                            <h4
                                class="text-lg font-semibold text-slate-800 dark:text-slate-200 group-hover:text-violet-900 dark:group-hover:text-violet-300">
                                E-Learning Platform</h4>
                            <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2 font-medium">
                                Taleify adalah sebuah platform literasi digital yang dirancang untuk menjadi wadah kreatif
                                bagi penulis dan pembaca. Project ini hadir untuk menjawab kebutuhan komunitas literasi di
                                era
                                digital,
                                di mana pembaca dapat menemukan karya sastra dengan mudah dan penulis bisa mempublikasikan
                                karyanya
                                tanpa hambatan.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
