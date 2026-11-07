@extends('components.layouts.app')

@section('title', __('terms.title'))

@section('content')
    <section
        class="section font-body relative w-full bg-violet-600 pt-36 sm:pt-44 pb-16 sm:pb-24 border-b border-violet-400/40">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">

            <nav aria-label="Breadcrumb">
                <ol class="flex items-center justify-center gap-2 text-sm font-medium text-violet-100">
                    <li>
                        <a href="{{ url('/') }}" class="transition-colors duration-150 ease-in-out hover:text-white">
                            {{ __('terms.breadcrumb_home') }}
                        </a>
                    </li>
                    <li aria-hidden="true">/</li>
                    <li class="text-white font-semibold">{{ __('terms.title') }}</li>
                </ol>
            </nav>

            <h1
                class="font-primary section-title split mt-6 mx-auto max-w-4xl text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-white leading-[1.1]">
                {{ __('terms.hero_title_1') }}
                <span class="font-bold text-slate-900">{{ __('terms.hero_title_2') }}</span>
            </h1>
        </div>
    </section>

    <section class="w-full py-16 sm:py-24 bg-white dark:bg-slate-900 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-[16rem_minmax(0,1fr)] lg:gap-16">

                <aside class="hidden lg:block">
                    <div class="sticky top-32">
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                            {{ __('terms.toc_title') }}
                        </p>
                        <ul class="mt-4 flex flex-col border-l border-slate-200 text-sm font-medium dark:border-slate-800">
                            @foreach (__('terms.sections') as $section)
                                <li>
                                    <a href="#{{ $section['id'] }}"
                                        class="-ml-px block border-l border-transparent py-2 pl-4 text-slate-600 transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:text-slate-400 dark:hover:border-violet-300 dark:hover:text-violet-300">
                                        {{ $section['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>

                <div class="max-w-3xl">
                    <p class="text-base sm:text-lg leading-relaxed font-medium text-slate-700 dark:text-slate-300">
                        {{ __('terms.intro') }}
                    </p>

                    <div class="mt-12 flex flex-col">
                        @foreach (__('terms.sections') as $section)
                            <article id="{{ $section['id'] }}"
                                class="scroll-mt-32 border-t border-slate-200 py-10 dark:border-slate-800">
                                <div class="flex items-baseline gap-4">
                                    <span class="text-sm font-bold text-violet-500 dark:text-violet-300">
                                        {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                    <h2 class="font-primary text-xl sm:text-2xl font-bold text-slate-800 dark:text-white">
                                        {{ $section['title'] }}
                                    </h2>
                                </div>

                                <div class="mt-4 sm:pl-10">
                                    <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-400">
                                        {{ $section['text'] }}
                                    </p>

                                    @if (!empty($section['items']))
                                        <ul class="mt-4 flex flex-col gap-2.5 text-sm sm:text-base text-slate-700 dark:text-slate-300">
                                            @foreach ($section['items'] as $item)
                                                <li class="flex items-start gap-3">
                                                    <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                                    <span>{{ $item }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    @if (!empty($section['contact']))
                                        <ul class="mt-4 flex flex-col gap-2.5 text-sm sm:text-base text-slate-700 dark:text-slate-300">
                                            <li class="flex items-start gap-3">
                                                <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                                <span>
                                                    {{ __('terms.contact_email') }}
                                                    <a href="mailto:admin@elvacode.com"
                                                        class="font-semibold text-slate-800 underline decoration-slate-300 underline-offset-4 transition-colors duration-150 ease-in-out hover:text-violet-600 hover:decoration-violet-500 dark:text-white dark:decoration-slate-600 dark:hover:text-violet-300 dark:hover:decoration-violet-300">admin@elvacode.com</a>
                                                </span>
                                            </li>
                                            <li class="flex items-start gap-3">
                                                <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                                <span>
                                                    {{ __('terms.contact_phone') }}
                                                    <a href="https://wa.me/6287835482333?text={{ rawurlencode(__('terms.wa_text')) }}"
                                                        target="_blank" rel="noopener noreferrer"
                                                        class="font-semibold text-slate-800 underline decoration-slate-300 underline-offset-4 transition-colors duration-150 ease-in-out hover:text-violet-600 hover:decoration-violet-500 dark:text-white dark:decoration-slate-600 dark:hover:text-violet-300 dark:hover:decoration-violet-300">+62 878-3548-2333</a>
                                                </span>
                                            </li>
                                        </ul>
                                    @endif
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <div class="rounded-2xl bg-slate-50 p-6 sm:p-8 dark:bg-slate-800/50 transition-colors duration-300 ease-in-out">
                        <p class="text-sm sm:text-base font-medium leading-relaxed text-slate-700 dark:text-slate-300">
                            {{ __('terms.agreement') }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection