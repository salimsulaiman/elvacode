@extends('components.layouts.app')

@section('title', 'Artikel - Elvacode')

@section('content')
    <section
        class="section font-body relative w-full bg-violet-600 pt-36 sm:pt-44 pb-16 sm:pb-24 border-b border-violet-400/40">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">

            <nav aria-label="Breadcrumb">
                <ol class="flex items-center justify-center gap-2 text-sm font-medium text-violet-100">
                    <li>
                        <a href="/" class="transition-colors duration-150 ease-in-out hover:text-white">
                            Home
                        </a>
                    </li>
                    <li aria-hidden="true">/</li>
                    <li class="text-white font-semibold">Artikel</li>
                </ol>
            </nav>

            <h1
                class="font-primary section-title split mt-6 mx-auto max-w-4xl text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-white leading-[1.1]">
                Artikel &amp;
                <span class="font-bold text-slate-900">Insight</span>
            </h1>
        </div>
    </section>
    <section
        class="section font-body relative isolate overflow-hidden bg-white dark:bg-slate-900 transition-colors duration-300 ease-in-out">

        <div class="max-w-7xl py-16 sm:py-24 mx-auto px-6 lg:px-8">
            @if (!request()->category && !request()->search && !request()->page)
                @php
                    $introLabel = $featuredArticle ? 'Sorotan Utama' : 'Jelajahi Artikel';
                    $introTitle = $featuredArticle ? 'Sorotan Utama dari' : 'Jelajahi Dunia';
                    $introAccent = $featuredArticle ? 'Elvacode' : 'Artikel Kami';
                    $introDesc = $featuredArticle
                        ? 'Temukan artikel pilihan unggulan yang mencerminkan standar kualitas dan arah pemikiran digital kami.'
                        : 'Temukan berbagai artikel menarik yang menginspirasi dan memperkaya wawasan Anda.';
                @endphp

                <div class="flex gap-2 items-center">
                    <h2 class="font-primary text-sm font-semibold text-slate-500 dark:text-slate-300 uppercase">
                        <span class="font-bold text-slate-800 dark:text-white">//</span>
                        {{ $introLabel }}
                    </h2>
                </div>

                <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-16 mt-6">
                    <h3
                        class="font-primary section-title split lg:flex-1 text-3xl sm:text-4xl md:text-5xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-16 max-w-3xl mx-auto lg:mx-0">
                        {{ $introTitle }}
                        <span class="font-bold text-violet-500 dark:text-violet-300">{{ $introAccent }}</span>
                    </h3>

                    <p
                        class="section-desc w-full lg:w-5/12 lg:max-w-md text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium text-justify lg:text-left">
                        {{ $introDesc }}
                    </p>
                </div>
                @if ($featuredArticle)
                    <a href="{{ route('article.show', $featuredArticle->slug) }}"
                        class="group relative mt-12 block w-full aspect-[4/5] sm:aspect-video md:aspect-[16/7] overflow-hidden rounded-2xl">
                        <img src="{{ asset('storage/' . $featuredArticle->thumbnail) }}" alt="{{ $featuredArticle->title }}"
                            class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">

                        <div
                            class="absolute inset-x-0 bottom-0 flex flex-col justify-end bg-gradient-to-t from-black/80 via-black/50 to-transparent p-5 sm:p-8">
                            <div class="max-w-4xl space-y-2 sm:space-y-4">
                                <h4
                                    class="line-clamp-2 text-lg font-semibold text-white group-hover:text-violet-200 sm:text-2xl">
                                    {{ $featuredArticle->title }}
                                </h4>
                                <p class="line-clamp-2 text-xs font-medium text-slate-200 sm:text-sm md:text-base">
                                    {{ $featuredArticle->excerpt }}
                                </p>
                            </div>

                            <div class="mt-4 flex flex-wrap items-center gap-3 text-xs sm:text-sm">
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('assets/logos/icon-elvacode-2.png') }}" alt="Elvacode Icon"
                                        class="h-5 w-5 object-contain">
                                    <span class="text-slate-200">Tim Elvacode</span>
                                </div>

                                <div class="hidden h-4 w-[3px] rounded-full bg-slate-300/70 sm:block"></div>

                                <div class="flex items-center gap-2">
                                    <i data-feather="calendar" class="h-4 w-4 text-slate-300"></i>
                                    <span class="text-slate-200">{{ $featuredArticle->published_date ?? '-' }}</span>
                                </div>

                                <div class="hidden h-4 w-[3px] rounded-full bg-slate-300/70 sm:block"></div>

                                <div class="hidden rounded-full px-3 py-1 text-xs font-medium sm:inline-block sm:text-sm"
                                    style="color: {{ $featuredArticle->category->text_color }}; background-color: {{ $featuredArticle->category->background_color }};">
                                    {{ $featuredArticle->category->name }}
                                </div>
                            </div>
                        </div>
                    </a>
                @endif
            @endif


            @if (!request()->category && !request()->search && !request()->page)
                @include('partials.popular-articles')
            @endif


            @if (request()->search || request()->category || request()->page)
                @php
                    if (request()->search) {
                        $hLabel = 'Pencarian';
                        $hTitle = 'Hasil Pencarian';
                        $hAccent = 'Artikel';
                    } elseif (request()->category) {
                        $hLabel = 'Kategori';
                        $hTitle = 'Artikel Berdasarkan';
                        $hAccent = 'Kategori';
                    } else {
                        $hLabel = 'Jelajahi Artikel';
                        $hTitle = 'Jelajahi Dunia';
                        $hAccent = 'Artikel Kami';
                    }
                @endphp

                <div class="flex gap-2 items-center">
                    <h2 class="font-primary text-sm font-semibold text-slate-500 dark:text-slate-300 uppercase">
                        <span class="font-bold text-slate-800 dark:text-white">//</span>
                        {{ $hLabel }}
                    </h2>
                </div>

                <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-16 mt-6">
                    <h3
                        class="font-primary section-title split lg:flex-1 text-3xl sm:text-4xl md:text-5xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-16 max-w-3xl mx-auto lg:mx-0">
                        {{ $hTitle }}
                        <span class="font-bold text-violet-500 dark:text-violet-300">{{ $hAccent }}</span>
                    </h3>

                    <p
                        class="section-desc w-full lg:w-5/12 lg:max-w-md text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium text-justify lg:text-left">
                        @if (request()->search)
                            Menampilkan artikel yang relevan dengan kata kunci
                            "<span class="font-semibold">{{ request('search') }}</span>".
                        @elseif (request()->category)
                            Jelajahi kumpulan artikel sesuai preferensi pembacaan Anda.
                        @else
                            Temukan berbagai artikel menarik yang menginspirasi dan memperkaya wawasan Anda.
                        @endif
                    </p>
                </div>
            @endif


            <div
                class="flex flex-col-reverse md:flex-row items-start md:items-center justify-between gap-2 mt-10 mb-6 md:mt-12 md:mb-8 w-full relative">
                <div
                    class="flex gap-2 overflow-x-auto scrollbar-hide px-0 py-2 scroll-smooth min-w-0 max-w-full md:max-w-[calc(100%-17rem)]">
                    <a href="{{ route('article.index', request()->except('category')) }}"
                        class="flex-shrink-0 px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all duration-200
                        {{ empty(request()->category)
                            ? 'bg-violet-600 text-white hover:bg-violet-500 dark:bg-violet-500 dark:hover:bg-violet-400 dark:text-white'
                            : 'bg-slate-100 text-gray-700 hover:bg-slate-200 dark:bg-slate-700 dark:text-gray-200 dark:hover:bg-slate-600' }}">
                        Semua
                    </a>

                    @foreach ($categories as $category)
                        <a href="{{ route('article.index', array_merge(request()->except('category'), ['category' => $category->slug])) }}"
                            class="flex-shrink-0 px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all duration-200
                            {{ request()->category === $category->slug
                                ? 'bg-violet-600 text-white hover:bg-violet-500 dark:bg-violet-500 dark:hover:bg-violet-400 dark:text-white'
                                : 'bg-slate-100 text-gray-700 hover:bg-slate-200 dark:bg-slate-700 dark:text-gray-200 dark:hover:bg-slate-600' }}">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>

                <!-- Form search -->
                <form action="{{ route('article.index') }}" method="GET"
                    class="relative w-full md:w-64 mt-2 md:mt-0 flex-shrink-0">
                    <input type="text" name="search" placeholder="Cari artikel..."
                        class="w-full rounded-full border border-slate-300 dark:border-slate-600 
                  bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 
                  px-4 py-2 focus:outline-none focus:ring-2 focus:ring-violet-500"
                        value="{{ request('search') }}">
                    <button type="submit"
                        class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-500 dark:text-slate-400 hover:text-violet-600">
                        <i data-feather="search" class="w-5 h-5"></i>
                    </button>
                </form>
            </div>

            @if ($articles->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach ($articles as $article)
                        <a href="{{ route('article.show', $article->slug) }}"
                            class="w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 p-4 rounded-2xl duration-300 ease-in-out">
                            <div class="w-full flex flex-col gap-3 group">
                                <div class="w-full aspect-video rounded-2xl overflow-hidden bg-slate-200 dark:bg-slate-700">
                                    <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}"
                                        class="w-full h-full object-cover object-center group-hover:scale-105 transition-all duration-300 ease-in-out">
                                </div>
                                <h5 class="text-xs w-fit rounded-full text-slate-600 dark:text-slate-300">
                                    Tim {{ $article->author->name }}
                                </h5>
                                <h4
                                    class="text-base font-semibold text-slate-800 dark:text-slate-200 group-hover:text-violet-900 dark:group-hover:text-violet-300 line-clamp-2">
                                    {{ $article->title }}
                                </h4>
                                <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2 font-medium">
                                    {{ $article->excerpt }}
                                </p>
                                <div class="flex w-full gap-4 items-center">
                                    <h5
                                        class="text-[10px] px-3 py-1 bg-slate-200 dark:bg-slate-700 w-fit rounded-full text-slate-600 dark:text-slate-300 font-semibold">
                                        {{ $article->category->name }}
                                    </h5>
                                    <h5
                                        class="text-[10px] w-fit rounded-full text-slate-600 dark:text-slate-300 font-semibold">
                                        {{ $article->published_date ?? '-' }}
                                    </h5>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="w-full mt-4">
                    {{ $articles->onEachSide(1)->links() }}
                </div>
            @else
                <p class="text-center text-slate-600 dark:text-slate-400 font-medium py-24">
                    Artikel tidak ditemukan.
                </p>
            @endif

            @if (request()->category || request()->search || request()->page)
                @include('partials.popular-articles')
            @endif
        </div>
    </section>




@endsection
