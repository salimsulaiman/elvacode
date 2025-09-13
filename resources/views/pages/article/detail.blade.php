@extends('components.layouts.app')

@section('title', $article->title . ' - Elvacode')
@section('meta_description', $article->excerpt ?? Str::limit(strip_tags($article->excerpt), 160))


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
                    <li class="text-white font-semibold">Detail Artikel</li>
                </ol>
            </nav>

            <div class="text-center">
                <h1
                    class="text-3xl sm:text-4xl md:text-5xl font-bold relative max-w-4xl mx-auto leading-normal sm:leading-10 md:leading-16">
                    {{ $article->title }}
                    <div
                        class="absolute inset-0 text-3xl sm:text-4xl md:text-5xl font-bold text-violet-300 opacity-30 blur-sm -z-10 max-w-4xl mx-auto leading-normal sm:leading-10 md:leading-16">
                        {{ $article->title }}
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
                        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}"
                            class="w-full h-full object-cover">
                    </div>
                    <h2
                        class="text-2xl sm:text-3xl md:text-5xl leading-normal sm:leading-10 md:leading-16 font-semibold text-slate-800 dark:text-slate-200 mt-4">
                        {{ $article->title }}</h2>
                    <div class="flex flex-wrap gap-3 mt-4 items-center text-sm">
                        <!-- Author -->
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/logos/icon-elvacode-2.png') }}" alt="Elvacode Icon"
                                class="w-5 h-5 object-contain">
                            <h4 class="text-slate-600 dark:text-slate-400">Tim Elvacode</h4>
                        </div>

                        <!-- Separator -->
                        <div class="hidden sm:block w-[3px] h-4 bg-slate-300 rounded-full"></div>

                        <!-- Date -->
                        <div class="flex items-center gap-2">
                            <i data-feather="calendar" class="w-4 h-4 text-slate-500"></i>
                            <h4 class="text-slate-600 dark:text-slate-400"> {{ $article->published_date ?? '-' }}</h4>
                        </div>

                        <!-- Separator -->
                        <div class="hidden sm:block w-[3px] h-4 bg-slate-300 rounded-full"></div>

                        <!-- Category -->
                        <div class="px-3 py-1 text-xs sm:text-sm font-medium rounded-full inline-block"
                            style="color: {{ $article->category->text_color }}; background-color: {{ $article->category->background_color }};">
                            {{ $article->category->name }}
                        </div>
                    </div>

                    <article
                        class="prose prose-neutral lg:prose-lg mt-6 custom-list prose-p:leading-loose dark:prose-invert">
                        {!! $article->content !!}
                    </article>
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
                        <h3 class="text-lg font-semibold text-slate-800 dark:text-slate-200 mb-3">Postingan Lainnya</h3>
                        <ul class="flex flex-col gap-4">
                            @foreach ($otherArticles as $otherArticle)
                                <li>
                                    <a href="{{ route('article.show', $otherArticle->slug) }}"
                                        class="flex items-center gap-3 group">
                                        <div class="w-16 h-12 rounded-md overflow-hidden bg-slate-200 dark:bg-slate-700">
                                            <img src="{{ asset('storage/' . $otherArticle->thumbnail) }}"
                                                alt="{{ $otherArticle->title }}"
                                                class="w-full h-full object-cover group-hover:scale-105 transition"
                                                loading="lazy">
                                        </div>
                                        <div>
                                            <h4
                                                class="text-sm font-semibold text-slate-700 dark:text-slate-300 group-hover:text-violet-600 line-clamp-2">
                                                {{ $otherArticle->title }}
                                            </h4>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">05 Sep 2025</p>
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
