@extends('components.layouts.app')

@section('title', 'Portofolio - Elvacode')

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

        <div aria-hidden="true" class="absolute top-0 right-0 -z-10 sm:-top-80">

            <div
                class="w-[28rem] h-[28rem]
        sm:w-[40rem] sm:h-[40rem]
        bg-gradient-to-tr from-violet-700 via-sky-600 to-cyan-500
        opacity-20 blur-2xl rounded-full">
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

            @if (!request()->category && !request()->page)
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 mt-8">
                    @foreach ($featuredPortfolios as $index => $featuredPortfolio)
                        @if ($index === 0)
                            <div class="xl:col-span-2">
                                <div
                                    class="w-full rounded-2xl h-auto flex flex-col-reverse gap-4 p-4
                    bg-slate-100 dark:bg-slate-800 shadow-2xs justify-end">

                                    <div class="w-full space-y-4 p-2">
                                        <h3
                                            class="text-xl sm:text-2xl font-semibold text-slate-800 dark:text-slate-200 line-clamp-2">
                                            {{ $featuredPortfolio->name }}
                                        </h3>

                                        <h6
                                            class="rounded-full block px-3 py-1 w-fit text-xs font-semibold
                            bg-violet-100 text-violet-700
                            dark:bg-violet-900 dark:text-violet-200">
                                            {{ $featuredPortfolio->category->name }}
                                        </h6>

                                        <p class="text-sm line-clamp-3 text-slate-600 dark:text-slate-400 text-justify">
                                            {{ $featuredPortfolio->summary }}
                                        </p>

                                        <a href="{{ route('portfolio.show', $featuredPortfolio->slug) }}"
                                            class="inline-flex items-center gap-2 px-4 py-2
                            rounded-full font-semibold text-sm
                            bg-violet-100 text-violet-700
                            dark:bg-violet-600 dark:text-violet-200
                            hover:bg-violet-200 dark:hover:bg-violet-700
                            transition-all duration-300 ease-out">
                                            Lihat Detail
                                            <div
                                                class="rounded-full w-6 h-6 flex items-center justify-center
                                bg-white dark:bg-slate-800">
                                                <i data-feather="arrow-right"
                                                    class="w-4 h-4 text-violet-700 dark:text-violet-200"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <div
                                        class="w-full rounded-2xl overflow-hidden
                        bg-slate-300 dark:bg-slate-700
                        aspect-[4/3] sm:aspect-[16/5]">
                                        <img src="{{ asset('storage/' . $featuredPortfolio->image) }}"
                                            class="w-full h-full object-cover object-center">
                                    </div>
                                </div>
                            </div>
                        @else
                            <div
                                class="w-full rounded-2xl h-auto flex flex-col-reverse gap-4 p-4
                    bg-slate-100 dark:bg-slate-800 shadow-2xs justify-end">

                                <div class="w-full space-y-4 p-2">
                                    <h3
                                        class="text-xl sm:text-2xl font-semibold text-slate-800 dark:text-slate-200 line-clamp-2">
                                        {{ $featuredPortfolio->name }}
                                    </h3>

                                    <h6
                                        class="rounded-full block px-3 py-1 w-fit text-xs font-semibold
                            bg-violet-100 text-violet-700
                            dark:bg-violet-900 dark:text-violet-200">
                                        {{ $featuredPortfolio->category->name }}
                                    </h6>

                                    <p class="text-sm line-clamp-3 text-slate-600 dark:text-slate-400 text-justify">
                                        {{ $featuredPortfolio->summary }}
                                    </p>

                                    <a href="{{ route('portfolio.show', $featuredPortfolio->slug) }}"
                                        class="inline-flex items-center gap-2 px-4 py-2
                            rounded-full font-semibold text-sm
                            bg-violet-100 text-violet-700
                            dark:bg-violet-600 dark:text-violet-200
                            hover:bg-violet-200 dark:hover:bg-violet-700
                            transition-all duration-300 ease-out">
                                        Lihat Detail
                                        <div
                                            class="rounded-full w-6 h-6 flex items-center justify-center
                                bg-white dark:bg-slate-800">
                                            <i data-feather="arrow-right"
                                                class="w-4 h-4 text-violet-700 dark:text-violet-200"></i>
                                        </div>
                                    </a>
                                </div>

                                <div
                                    class="w-full rounded-2xl overflow-hidden
                        bg-slate-300 dark:bg-slate-700
                        aspect-[4/3]">
                                    <img src="{{ asset('assets/images/jatiunggul_permai.jpg') }}"
                                        class="w-full h-full object-cover object-center">
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif


            <div
                class="flex flex-col-reverse md:flex-row items-start md:items-center justify-between gap-2 my-4 md:my-8 w-full relative">
                <div class="flex gap-2 overflow-x-auto scrollbar-hide px-0 py-2 scroll-smooth min-w-0 max-w-full">
                    <a href="{{ route('portfolio.index', request()->except('category')) }}"
                        class="flex-shrink-0 px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all duration-200
                        {{ empty(request()->category)
                            ? 'bg-violet-600 text-white hover:bg-violet-500 dark:bg-violet-500 dark:hover:bg-violet-400 dark:text-white'
                            : 'bg-slate-100 text-gray-700 hover:bg-slate-200 dark:bg-slate-700 dark:text-gray-200 dark:hover:bg-slate-600' }}">
                        Semua
                    </a>

                    @foreach ($categories as $category)
                        <a href="{{ route('portfolio.index', array_merge(request()->except('category'), ['category' => $category->slug])) }}"
                            class="flex-shrink-0 px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all duration-200
                            {{ request()->category === $category->slug
                                ? 'bg-violet-600 text-white hover:bg-violet-500 dark:bg-violet-500 dark:hover:bg-violet-400 dark:text-white'
                                : 'bg-slate-100 text-gray-700 hover:bg-slate-200 dark:bg-slate-700 dark:text-gray-200 dark:hover:bg-slate-600' }}">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="w-full grid grid-cols-1 sm:grid-cols-2 gap-6">
                @foreach ($portfolios as $portfolio)
                    <div
                        class="w-full rounded-2xl h-auto flex flex-col-reverse xl:flex-row gap-4 p-4
                    bg-slate-100 dark:bg-slate-800 shadow-2xs justify-end xl:justify-between">
                        <div class="w-full xl:w-1/2 space-y-4 p-2">
                            <h3
                                class="text-xl sm:text-2xl font-semibold
                            text-slate-800 dark:text-slate-200
                            line-clamp-2">
                                {{ $portfolio->name }}
                            </h3>

                            <h6
                                class="rounded-full block px-3 py-1 w-fit text-xs font-semibold
                            bg-violet-100 text-violet-700
                            dark:bg-violet-900 dark:text-violet-200">
                                {{ $portfolio->category->name }}
                            </h6>


                            <p
                                class="text-sm line-clamp-3
                            text-slate-600 dark:text-slate-400 text-justify">
                                {{ $portfolio->summary }}
                            </p>

                            <a href="{{ route('portfolio.show', $portfolio->slug) }}"
                                class="inline-flex items-center gap-2 px-4 py-2
                                rounded-full font-semibold text-sm
                                bg-violet-100 text-violet-700
                                dark:bg-violet-600 dark:text-violet-200
                                hover:bg-violet-200 dark:hover:bg-violet-700
                                transition-all duration-300 ease-out">
                                Lihat Detail
                                <div
                                    class="rounded-full w-6 h-6 flex items-center justify-center
                                bg-white dark:bg-slate-800">
                                    <i data-feather="arrow-right" class="w-4 h-4 text-violet-700 dark:text-violet-200"></i>
                                </div>
                            </a>
                        </div>

                        <div
                            class="w-full xl:w-1/2
                                    rounded-2xl overflow-hidden
                                    bg-slate-300 dark:bg-slate-700
                                    aspect-[4/3] lg:aspect-auto">
                            <img src="{{ asset('assets/images/jatiunggul_permai.jpg') }}" alt="Jati Unggul"
                                class="w-full h-full object-cover object-center">
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-6 w-full">
                {{ $portfolios->links() }}
            </div>
        </div>
    </section>



@endsection
