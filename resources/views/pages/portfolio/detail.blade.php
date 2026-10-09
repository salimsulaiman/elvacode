@extends('components.layouts.app')

@section('title', $portfolio->name . ' - Elvacode')
@section('meta_description', $portfolio->summary ?? Str::limit(strip_tags($portfolio->summary), 160))

@section('content')
    <section
        class="section font-body relative w-full bg-violet-600 pt-36 sm:pt-44 pb-16 sm:pb-24 border-b border-violet-500/40">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">

            <nav aria-label="Breadcrumb">
                <ol class="flex flex-wrap items-center justify-center gap-2 text-sm font-medium text-violet-100">
                    <li>
                        <a href="/" class="transition-colors duration-150 ease-in-out hover:text-white">
                            Home
                        </a>
                    </li>
                    <li aria-hidden="true">/</li>
                    <li>
                        <a href="{{ route('portfolio.index') }}"
                            class="transition-colors duration-150 ease-in-out hover:text-white">
                            Portofolio
                        </a>
                    </li>
                    <li aria-hidden="true">/</li>
                    <li class="text-white font-semibold">Detail Portofolio</li>
                </ol>
            </nav>

            <h1
                class="font-primary section-title mt-6 mx-auto max-w-4xl text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold sm:font-semibold tracking-tight text-balance text-white leading-[1.15]">
                {{ $portfolio->name }}
            </h1>
        </div>
    </section>
    <section class="font-body relative isolate bg-white dark:bg-slate-900 transition-colors duration-300 ease-in-out">

        <div class="max-w-7xl py-16 sm:py-24 mx-auto px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12 lg:gap-16 justify-between">
                <div class="w-full lg:w-9/12">
                    <div
                        class="w-full aspect-video rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-800 bg-slate-200 dark:bg-slate-800">
                        <img src="{{ asset('storage/' . $portfolio->thumbnail) }}" alt="{{ $portfolio->name }}"
                            class="w-full h-full object-cover object-center">
                    </div>
                    <h5
                        class="text-xs px-3 py-1 border border-slate-500 dark:border-slate-400 w-fit rounded-full text-slate-600 dark:text-slate-300 font-semibold mt-8">
                        {{ $portfolio->category->name }}
                    </h5>
                    <h2
                        class="font-primary text-4xl w-full font-bold text-slate-800 dark:text-slate-300 leading-normal sm:leading-10 md:leading-16 mt-4">
                        {{ $portfolio->name }}
                    </h2>

                    <div class="mt-10 flex gap-2 items-center">
                        <h2 class="font-primary text-sm font-semibold text-slate-500 dark:text-slate-300 uppercase">
                            <span class="font-bold text-slate-800 dark:text-white">//</span>
                            Tentang Proyek
                        </h2>
                    </div>

                    <p
                        class="font-body mt-4 w-full text-base font-medium leading-relaxed text-slate-700 dark:text-slate-300 text-justify">
                        {{ $portfolio->summary }}
                    </p>

                    <hr class="my-10 border-t border-slate-200 dark:border-slate-800">

                    <article
                        class="font-body prose prose-neutral mt-8 custom-list prose-p:leading-loose dark:prose-invert text-justify max-w-none">
                        {!! $portfolio->content !!}
                    </article>


                </div>
                <aside class="w-full lg:w-3/12">
                    <div>
                        <h3 class="font-primary text-sm font-semibold uppercase text-slate-500 dark:text-slate-300">
                            <span class="font-bold text-slate-800 dark:text-white">//</span>
                            Proyek Lainnya
                        </h3>

                        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-6">
                            @foreach ($otherPortfolios as $otherPortfolio)
                                <a href="{{ route('portfolio.show', $otherPortfolio->slug) }}"
                                    class="group flex w-full flex-col gap-3">
                                    <div
                                        class="aspect-video w-full overflow-hidden rounded-xl border border-slate-200 dark:border-slate-800 bg-slate-200 dark:bg-slate-800">
                                        <img src="{{ asset('storage/' . $otherPortfolio->thumbnail) }}"
                                            alt="{{ $otherPortfolio->name }}" loading="lazy"
                                            class="h-full w-full object-cover object-center grayscale transition duration-300 ease-in-out group-hover:scale-105 group-hover:grayscale-0">
                                    </div>
                                    <h4
                                        class="font-primary text-lg font-semibold text-slate-800 transition-colors duration-150 ease-in-out group-hover:text-violet-600 dark:text-slate-200 dark:group-hover:text-violet-300">
                                        {{ $otherPortfolio->name }}
                                    </h4>
                                    <p class="line-clamp-2 text-sm font-medium text-slate-600 dark:text-slate-400">
                                        {{ $otherPortfolio->summary }}
                                    </p>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>



@endsection
