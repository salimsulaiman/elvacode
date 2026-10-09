@extends('components.layouts.app')

@section('title', $article->title . ' - Elvacode')
@section('meta_description', $article->excerpt ?? Str::limit(strip_tags($article->excerpt), 160))

@section('og_image', asset('storage/' . $article->thumbnail))
@section('twitter_image', asset('storage/' . $article->thumbnail))



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
                    <li>
                        <a href="{{ route('article.index') }}"
                            class="transition-colors duration-150 ease-in-out hover:text-white">
                            Artikel
                        </a>
                    </li>
                    <li aria-hidden="true">/</li>
                    <li class="text-white font-semibold">Detail Artikel</li>
                </ol>
            </nav>

            <h1
                class="font-primary section-title mt-6 mx-auto max-w-7xl text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold sm:font-semibold tracking-tight text-balance text-white leading-[1.15]">
                {{ $article->title }}
            </h1>
        </div>
    </section>
    <section
        class="font-body relative isolate overflow-hidden bg-white dark:bg-slate-900 transition-colors duration-300 ease-in-out">

        <div class="max-w-7xl py-16 sm:py-24 mx-auto px-6 lg:px-8">
            <div class="w-full grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div class="lg:col-span-3 h-fit">
                    <div class="w-full rounded-2xl bg-slate-200 dark:bg-slate-800 aspect-video overflow-hidden">
                        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}"
                            class="w-full h-full object-cover">
                    </div>
                    <h2
                        class="font-primary text-2xl sm:text-3xl md:text-5xl leading-normal sm:leading-10 md:leading-16 font-semibold text-slate-800 dark:text-slate-200 mt-4">
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
                    <div class="flex gap-2 items-center mt-3 flex-wrap">
                        <h5 class="text-slate-600 dark:text-slate-400 text-xs">Shared with</h5>
                        <div class="flex gap-2 items-center">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('article.show', $article->slug)) }}"
                                class="group" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                                    viewBox="0 0 50 50"
                                    class="fill-gray-500 group-hover:fill-gray-700 transition-colors duration-300">
                                    <path
                                        d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M37,19h-2c-2.14,0-3,0.5-3,2 v3h5l-1,5h-4v15h-5V29h-4v-5h4v-3c0-4,2-7,6-7c2.9,0,4,1,4,1V19z">
                                    </path>
                                </svg>
                            </a>
                            <a href="https://x.com/intent/tweet?text={{ urlencode($article->title) }}&url={{ urlencode(route('article.show', $article->slug)) }}"
                                class="group" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="fill-gray-500 group-hover:fill-gray-700 transition-colors duration-300"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                </svg>
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($article->title . ' ' . route('article.show', $article->slug)) }}"
                                class="group" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                                    viewBox="0 0 50 50"
                                    class="fill-gray-500 group-hover:fill-gray-700 transition-colors duration-300">
                                    <path
                                        d="M25,2C12.318,2,2,12.318,2,25c0,3.96,1.023,7.854,2.963,11.29L2.037,46.73c-0.096,0.343-0.003,0.711,0.245,0.966 C2.473,47.893,2.733,48,3,48c0.08,0,0.161-0.01,0.24-0.029l10.896-2.699C17.463,47.058,21.21,48,25,48c12.682,0,23-10.318,23-23 S37.682,2,25,2z M36.57,33.116c-0.492,1.362-2.852,2.605-3.986,2.772c-1.018,0.149-2.306,0.213-3.72-0.231 c-0.857-0.27-1.957-0.628-3.366-1.229c-5.923-2.526-9.791-8.415-10.087-8.804C15.116,25.235,13,22.463,13,19.594 s1.525-4.28,2.067-4.864c0.542-0.584,1.181-0.73,1.575-0.73s0.787,0.005,1.132,0.021c0.363,0.018,0.85-0.137,1.329,1.001 c0.492,1.168,1.673,4.037,1.819,4.33c0.148,0.292,0.246,0.633,0.05,1.022c-0.196,0.389-0.294,0.632-0.59,0.973 s-0.62,0.76-0.886,1.022c-0.296,0.291-0.603,0.606-0.259,1.19c0.344,0.584,1.529,2.493,3.285,4.039 c2.255,1.986,4.158,2.602,4.748,2.894c0.59,0.292,0.935,0.243,1.279-0.146c0.344-0.39,1.476-1.703,1.869-2.286 s0.787-0.487,1.329-0.292c0.542,0.194,3.445,1.604,4.035,1.896c0.59,0.292,0.984,0.438,1.132,0.681 C37.062,30.587,37.062,31.755,36.57,33.116z">
                                    </path>
                                </svg></a>
                        </div>
                    </div>

                    <article
                        class="prose prose-neutral lg:prose-lg mt-6 custom-list prose-p:leading-loose dark:prose-invert text-justify">
                        {!! $article->content !!}
                    </article>
                </div>
                <aside class="lg:col-span-1">
                    <div class="flex flex-col gap-10 lg:sticky lg:top-28">
                        <div class="w-full">
                            <form action="{{ route('article.index') }}" method="GET" class="relative">
                                <input type="text" name="search" placeholder="Cari artikel..."
                                    class="w-full rounded-full border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-violet-500"
                                    value="{{ request('search') }}">
                                <button type="submit" aria-label="Cari"
                                    class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-500 dark:text-slate-400 hover:text-violet-600">
                                    <i data-feather="search" class="h-5 w-5"></i>
                                </button>
                            </form>
                        </div>

                        <div class="w-full">
                            <h3 class="font-primary text-sm font-semibold uppercase text-slate-500 dark:text-slate-300">
                                <span class="font-bold text-slate-800 dark:text-white">//</span>
                                Postingan Lainnya
                            </h3>

                            <div class="mt-6 grid grid-cols-1 gap-6">
                                @foreach ($otherArticles as $otherArticle)
                                    <a href="{{ route('article.show', $otherArticle->slug) }}"
                                        class="group flex w-full flex-col gap-3">
                                        <div
                                            class="aspect-video w-full overflow-hidden rounded-xl bg-slate-200 dark:bg-slate-800">
                                            <img src="{{ asset('storage/' . $otherArticle->thumbnail) }}"
                                                alt="{{ $otherArticle->title }}" loading="lazy"
                                                class="h-full w-full object-cover object-center transition-transform duration-300 ease-in-out group-hover:scale-105">
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <i data-feather="calendar"
                                                class="h-4 w-4 text-slate-500 dark:text-slate-400"></i>
                                            <span class="text-xs text-slate-500 dark:text-slate-400">
                                                {{ $otherArticle->published_date ?? '-' }}
                                            </span>
                                        </div>
                                        <h4
                                            class="line-clamp-2 text-base font-semibold text-slate-800 transition-colors duration-150 ease-in-out group-hover:text-violet-600 dark:text-slate-200 dark:group-hover:text-violet-300">
                                            {{ $otherArticle->title }}
                                        </h4>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>



@endsection
