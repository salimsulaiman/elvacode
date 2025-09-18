@extends('components.layouts.app')

@section('title', 'Artikel - Elvacode')

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
                    <li class="text-white font-semibold">Artikel</li>
                </ol>
            </nav>

            <div class="text-center">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold relative">
                    Artikel
                    <div
                        class="absolute inset-0 text-3xl sm:text-4xl md:text-5xl font-bold text-violet-300 opacity-30 blur-sm -z-10">
                        Artikel
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
            <h2
                class=" text-2xl sm:text-3xl md:text-4xl max-w-2xl md:max-w-xl font-bold text-slate-800 dark:text-slate-300">
                Artikel Terbaru dari Elvacode
            </h2>

            <p
                class=" text-sm sm:text-base md:text-lg text-slate-700 dark:text-slate-400 font-medium mt-6 sm:mt-8 max-w-2xl">
                Berikut adalah beberapa artikel terbaru dari Elvacode. Setiap artikel dirancang dengan fokus pada
                kebutuhan unik klien
            </p>

            @if (!request()->category)
                <a href="{{ route('article.show', $latestArticle->slug) }}"
                    class="w-full hidden sm:block aspect-video md:aspect-[16/7] mt-8 rounded-2xl relative overflow-hidden group">
                    <img src="{{ asset('storage/' . $latestArticle->thumbnail) }}" alt="{{ $latestArticle->title }}"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">

                    <div
                        class="absolute left-0 right-0 bottom-0 flex flex-col justify-end 
               bg-gradient-to-t from-black/70 via-black/50 to-transparent 
               p-6 sm:p-8 backdrop-blur-sm">
                        <div class="max-w-4xl space-y-3 sm:space-y-4">
                            <h4
                                class="text-lg sm:text-2xl font-semibold text-white group-hover:text-violet-200 line-clamp-1 md:line-clamp-2">
                                {{ $latestArticle->title }}
                            </h4>
                            <p class="text-xs sm:text-sm md:text-base text-slate-200 line-clamp-2 font-medium">
                                {{ $latestArticle->excerpt }}
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-4 items-center text-xs sm:text-sm">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/logos/icon-elvacode-2.png') }}" alt="Elvacode Icon"
                                    class="w-5 h-5 object-contain">
                                <span class="text-slate-200">Tim Elvacode</span>
                            </div>

                            <div class="hidden sm:block w-[3px] h-4 bg-slate-300/70 rounded-full"></div>

                            <div class="flex items-center gap-2">
                                <i data-feather="calendar" class="w-4 h-4 text-slate-300"></i>
                                <span class="text-slate-200">
                                    {{ $latestArticle->published_date ?? '-' }}
                                </span>
                            </div>

                            <div class="hidden sm:block w-[3px] h-4 bg-slate-300/70 rounded-full"></div>

                            <div class="px-3 py-1 text-xs hidden sm:text-sm font-medium rounded-full sm:inline-block"
                                style="color: {{ $latestArticle->category->text_color }};
                        background-color: {{ $latestArticle->category->background_color }};">
                                {{ $latestArticle->category->name }}
                            </div>
                        </div>
                    </div>
                </a>
            @endif

            <div
                class="flex flex-col-reverse md:flex-row items-start md:items-center justify-between gap-2 my-4 md:my-8 w-full relative">
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


            @if (request('search'))
                <div class="text-sm text-gray-700 dark:text-gray-300 mb-8">
                    Hasil pencarian untuk: <span class="font-medium">{{ request('search') }}</span>
                </div>
            @endif

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
                    {{ $articles->links() }}
                </div>
            @else
                <p class="text-center text-slate-600 dark:text-slate-400 font-medium">
                    Artikel tidak ditemukan.
                </p>
            @endif

            <h3 class="text-lg font-semibold text-slate-800 dark:text-slate-200 mb-3 mt-8">Artikel Populer</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                @foreach ($popularArticles as $popularArticle)
                    <a href="{{ route('article.show', $popularArticle->slug) }}"
                        class="w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 p-4 rounded-2xl duration-300 ease-in-out">
                        <div class="w-full flex flex-col gap-3 group">
                            <div class="w-full aspect-video rounded-2xl overflow-hidden bg-slate-200 dark:bg-slate-700">
                                <img src="{{ asset('storage/' . $popularArticle->thumbnail) }}"
                                    alt="{{ $popularArticle->title }}"
                                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-all duration-300 ease-in-out">
                            </div>
                            <h5 class="text-xs w-fit rounded-full text-slate-600 dark:text-slate-300">
                                Tim {{ $popularArticle->author->name }}
                            </h5>
                            <h4
                                class="text-base font-semibold text-slate-800 dark:text-slate-200 group-hover:text-violet-900 dark:group-hover:text-violet-300 line-clamp-2">
                                {{ $popularArticle->title }}
                            </h4>
                            <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2 font-medium">
                                {{ $popularArticle->excerpt }}
                            </p>
                            <div class="flex w-full gap-4 items-center">
                                <h5
                                    class="text-[10px] px-3 py-1 bg-slate-200 dark:bg-slate-700 w-fit rounded-full text-slate-600 dark:text-slate-300 font-semibold">
                                    {{ $popularArticle->category->name }}
                                </h5>
                                <h5
                                    class="text-[10px] w-fit rounded-full text-slate-600 dark:text-slate-300 font-semibold">
                                    {{ $popularArticle->published_date ?? '-' }}
                                </h5>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>




@endsection
