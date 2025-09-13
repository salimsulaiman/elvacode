@extends('components.layouts.app')

@section('title', 'Artikel - Elvacode')

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

            <p class=" text-sm sm:text-base md:text-lg text-slate-700 dark:text-slate-400 font-medium mt-6 sm:mt-8">
                Berikut adalah beberapa artikel terbaru dari Elvacode. Setiap artikel dirancang dengan fokus pada
                kebutuhan unik klien
            </p>

            <div class="w-full grid grid-cols-1 lg:grid-cols-4 gap-8 mt-12">
                <div class="lg:col-span-3 flex flex-col gap-6 h-fit">
                    @if ($articles->count() > 0)
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            @foreach ($articles as $article)
                                <a href="{{ route('article.show', $article->slug) }}"
                                    class="w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 p-4 rounded-2xl duration-300 ease-in-out">
                                    <div class="w-full flex flex-col gap-3 group">
                                        <div
                                            class="w-full aspect-video rounded-2xl overflow-hidden bg-slate-200 dark:bg-slate-700">
                                            <img src="{{ asset('storage/' . $article->thumbnail) }}"
                                                alt="{{ $article->title }}"
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

                        <div class="w-full">
                            {{ $articles->links() }}
                        </div>
                    @else
                        <p class="text-center text-slate-600 dark:text-slate-400 font-medium">
                            Artikel tidak ditemukan.
                        </p>
                    @endif
                </div>

                <aside class="lg:col-span-1 flex flex-col gap-8">
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl p-4">
                        <h3 class="text-lg font-semibold text-slate-800 dark:text-slate-200 mb-3">Cari Artikel</h3>
                        <form action="{{ route('article.index') }}" method="GET" class="relative">
                            <input type="text" name="search" placeholder="Cari..."
                                class="w-full rounded-xl border border-slate-300 dark:border-slate-600 
               bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 
               px-4 py-2 focus:outline-none focus:ring-2 focus:ring-violet-500"
                                value="{{ request('search') }}">
                            <button type="submit"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-500 dark:text-slate-400 hover:text-violet-600">
                                <i data-feather="search" class="w-5 h-5"></i>
                            </button>
                        </form>
                        @if (request('search'))
                            <p class="mt-3 text-sm text-slate-600 dark:text-slate-400">
                                Hasil pencarian untuk: <span class="font-semibold">{{ request('search') }}</span>
                            </p>
                        @endif
                    </div>
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl p-4">
                        <h3 class="text-lg font-semibold text-slate-800 dark:text-slate-200 mb-3">Kategori</h3>
                        <ul class="flex flex-col gap-2 text-sm font-medium text-slate-600 dark:text-slate-400">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('article.index', array_merge(request()->all(), ['category' => $category->slug])) }}"
                                        class="hover:text-violet-600 dark:hover:text-violet-400">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl p-4">
                        <h3 class="text-lg font-semibold text-slate-800 dark:text-slate-200 mb-3">Artikel Populer</h3>
                        <ul class="flex flex-col gap-4">
                            @foreach ($popularArticles as $popularArticle)
                                <li>
                                    <a href="{{ route('article.show', $popularArticle->slug) }}"
                                        class="flex items-center gap-3 group">
                                        <div class="w-16 h-12 rounded-md overflow-hidden bg-slate-200 dark:bg-slate-700">
                                            <img src="{{ asset('storage/' . $popularArticle->thumbnail) }}"
                                                alt="{{ $popularArticle->title }}"
                                                class="w-full h-full object-cover group-hover:scale-105 transition"
                                                loading="lazy">
                                        </div>
                                        <div>
                                            <h4
                                                class="text-sm font-semibold text-slate-700 dark:text-slate-300 group-hover:text-violet-600 line-clamp-2">
                                                {{ $popularArticle->title }}
                                            </h4>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">08 Sep 2025</p>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>




@endsection
