@extends('components.layouts.app')

@section('title', 'Portofolio - Elvacode')

@section('content')
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
                    <li class="text-white font-semibold">Portofolio</li>
                </ol>
            </nav>

            <h1
                class="font-primary section-title split mt-6 mx-auto max-w-4xl text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-white leading-[1.1]">
                Karya
                <span class="font-bold text-slate-900">Kami</span>
            </h1>
        </div>
    </section>
    <section id="portfolio" aria-label="Portfolio Website Elvacode"
        class="section font-body relative isolate overflow-hidden bg-white dark:bg-slate-900 transition-colors duration-300 ease-in-out">

        <div class="max-w-7xl py-16 sm:py-24 mx-auto px-6 lg:px-8">
            <div class="flex gap-2 items-center">
                <h2 class="font-primary text-sm font-semibold text-slate-500 dark:text-slate-300 uppercase">
                    <span class="font-bold text-slate-800 dark:text-white">//</span>
                    Portofolio
                </h2>
            </div>

            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-16 mt-6">
                <h3
                    class="font-primary section-title split lg:flex-1 text-3xl sm:text-4xl md:text-5xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-16 max-w-3xl mx-auto lg:mx-0">
                    Hasil Karya Digital yang Telah
                    <span class="font-bold text-violet-500 dark:text-violet-300">Kami</span> Bangun
                </h3>

                <p
                    class="section-desc w-full lg:w-5/12 lg:max-w-md text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium text-justify lg:text-left">
                    Berikut adalah beberapa proyek website yang telah kami kerjakan. Setiap proyek dirancang dengan fokus
                    pada
                    kebutuhan unik klien.
                </p>
            </div>

            @php
                $featuredPortfolio = $featuredPortfolios->first();
            @endphp

            @if (!request()->category && !request()->page && $featuredPortfolio)
                <a href="{{ route('portfolio.show', $featuredPortfolio->slug) }}"
                    class="group mt-12 flex flex-col-reverse overflow-hidden rounded-2xl bg-slate-50 transition-colors duration-300 ease-in-out hover:bg-slate-900 sm:mt-16 dark:bg-slate-800/50 dark:hover:bg-slate-700/60">

                    <div class="flex flex-col gap-4 p-6 sm:p-8">
                        <span
                            class="w-fit rounded-full border border-slate-300 px-3 py-1 text-xs font-semibold text-slate-600 transition-colors duration-300 ease-in-out group-hover:border-slate-600 group-hover:text-slate-300 dark:border-slate-700 dark:text-slate-300 dark:group-hover:border-slate-500 dark:group-hover:text-slate-200">
                            {{ $featuredPortfolio->category->name }}
                        </span>

                        <h3
                            class="font-primary line-clamp-2 text-xl font-semibold text-slate-800 transition-colors duration-300 ease-in-out group-hover:text-white sm:text-2xl dark:text-white dark:group-hover:text-white">
                            {{ $featuredPortfolio->name }}
                        </h3>

                        <p
                            class="line-clamp-3 max-w-full text-justify text-sm leading-relaxed text-slate-600 transition-colors duration-300 ease-in-out group-hover:text-slate-300 dark:text-slate-400 dark:group-hover:text-slate-300">
                            {{ $featuredPortfolio->summary }}
                        </p>

                        <span
                            class="mt-2 inline-flex w-fit items-center gap-3 rounded-full bg-slate-900 py-1.5 pl-5 pr-1.5 text-sm font-bold text-white transition-colors duration-300 ease-in-out group-hover:bg-violet-500 group-hover:text-white dark:bg-white dark:text-slate-900 dark:group-hover:bg-violet-500 dark:group-hover:text-white">
                            Lihat Detail
                            <span
                                class="flex h-7 w-7 items-center justify-center rounded-full bg-white text-slate-900 transition-colors duration-300 ease-in-out group-hover:bg-white group-hover:text-violet-600 dark:bg-slate-900 dark:text-white dark:group-hover:bg-white dark:group-hover:text-violet-600">
                                <i data-feather="arrow-up-right"
                                    class="h-4 w-4 transition-transform duration-300 ease-in-out"></i>
                            </span>
                        </span>
                    </div>

                    <div
                        class="aspect-[4/3] w-full overflow-hidden rounded-b-4xl bg-slate-200 sm:aspect-[16/6] dark:bg-slate-700">
                        <img src="{{ asset('storage/' . $featuredPortfolio->thumbnail) }}"
                            alt="{{ $featuredPortfolio->name }}" loading="lazy"
                            class="h-full w-full object-cover object-top">
                    </div>
                </a>
            @endif


            <div
                class="flex flex-col-reverse md:flex-row items-start md:items-center justify-between gap-2 mt-12 mb-6 md:mt-16 md:mb-8 w-full relative">
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
            <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                @foreach ($portfolios as $portfolio)
                    <a href="{{ route('portfolio.show', $portfolio->slug) }}"
                        class="group flex flex-col overflow-hidden rounded-2xl bg-slate-50 transition-colors duration-300 ease-in-out hover:bg-slate-900 dark:bg-slate-800/50 dark:hover:bg-slate-700/60">

                        <div class="aspect-[4/3] w-full overflow-hidden rounded-b-3xl bg-slate-200 dark:bg-slate-700">
                            <img src="{{ asset('storage/' . $portfolio->thumbnail) }}" alt="{{ $portfolio->name }}"
                                loading="lazy"
                                class="h-full w-full object-cover object-top group-hover:scale-105 transition-transform duration-300 ease-in-out">
                        </div>

                        <div class="flex flex-1 flex-col gap-3 p-6">
                            <span
                                class="w-fit rounded-full border border-slate-300 px-3 py-1 text-xs font-semibold text-slate-600 transition-colors duration-300 ease-in-out group-hover:border-slate-600 group-hover:text-slate-300 dark:border-slate-700 dark:text-slate-300 dark:group-hover:border-slate-500 dark:group-hover:text-slate-200">
                                {{ $portfolio->category->name }}
                            </span>

                            <h3
                                class="font-primary line-clamp-2 text-xl font-semibold text-slate-800 transition-colors duration-300 ease-in-out group-hover:text-white dark:text-white dark:group-hover:text-white">
                                {{ $portfolio->name }}
                            </h3>

                            <p
                                class="line-clamp-3 text-justify text-sm leading-relaxed text-slate-600 transition-colors duration-300 ease-in-out group-hover:text-slate-300 dark:text-slate-400 dark:group-hover:text-slate-300">
                                {{ $portfolio->summary }}
                            </p>

                            <span
                                class="mt-auto inline-flex items-center gap-2 pt-2 text-sm font-semibold text-slate-800 transition-colors duration-300 ease-in-out group-hover:text-violet-300 dark:text-white dark:group-hover:text-violet-300">
                                Lihat Detail
                                <i data-feather="arrow-up-right"
                                    class="h-4 w-4 transition-transform duration-300 ease-in-out group-hover:-translate-y-0.5 group-hover:translate-x-0.5"></i>
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-6 w-full">
                {{ $portfolios->links() }}
            </div>
        </div>
    </section>



@endsection
