@extends('components.layouts.app')

@section('title', __('privacy.title'))

@section('content')
    <section
        class="section font-body relative w-full bg-violet-600 pt-36 sm:pt-44 pb-16 sm:pb-24 border-b border-violet-400/40">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">

            <nav aria-label="Breadcrumb">
                <ol class="flex items-center justify-center gap-2 text-sm font-medium text-violet-100">
                    <li>
                        <a href="{{ url('/') }}" class="transition-colors duration-150 ease-in-out hover:text-white">
                            {{ __('privacy.breadcrumb_home') }}
                        </a>
                    </li>
                    <li aria-hidden="true">/</li>
                    <li class="text-white font-semibold">{{ __('privacy.title') }}</li>
                </ol>
            </nav>

            <h1
                class="font-primary section-title split mt-6 mx-auto max-w-4xl text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-white leading-[1.1]">
                {{ __('privacy.hero_title_1') }}
                <span class="font-bold text-slate-900">{{ __('privacy.hero_title_2') }}</span>
            </h1>
        </div>
    </section>

    <section class="w-full py-16 sm:py-24 bg-white dark:bg-slate-900 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-[16rem_minmax(0,1fr)] lg:gap-16">

                <aside class="hidden lg:block">
                    <div class="sticky top-32">
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                            {{ __('privacy.toc_title') }}
                        </p>
                        <ul class="mt-4 flex flex-col border-l border-slate-200 text-sm font-medium dark:border-slate-800">
                            <li>
                                <a href="#informasi"
                                    class="-ml-px block border-l border-transparent py-2 pl-4 text-slate-600 transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:text-slate-400 dark:hover:border-violet-300 dark:hover:text-violet-300">
                                    {{ __('privacy.sec1_title') }}
                                </a>
                            </li>
                            <li>
                                <a href="#penggunaan"
                                    class="-ml-px block border-l border-transparent py-2 pl-4 text-slate-600 transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:text-slate-400 dark:hover:border-violet-300 dark:hover:text-violet-300">
                                    {{ __('privacy.sec2_title') }}
                                </a>
                            </li>
                            <li>
                                <a href="#perlindungan"
                                    class="-ml-px block border-l border-transparent py-2 pl-4 text-slate-600 transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:text-slate-400 dark:hover:border-violet-300 dark:hover:text-violet-300">
                                    {{ __('privacy.sec3_title') }}
                                </a>
                            </li>
                            <li>
                                <a href="#pihak-ketiga"
                                    class="-ml-px block border-l border-transparent py-2 pl-4 text-slate-600 transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:text-slate-400 dark:hover:border-violet-300 dark:hover:text-violet-300">
                                    {{ __('privacy.sec4_title') }}
                                </a>
                            </li>
                            <li>
                                <a href="#cookie"
                                    class="-ml-px block border-l border-transparent py-2 pl-4 text-slate-600 transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:text-slate-400 dark:hover:border-violet-300 dark:hover:text-violet-300">
                                    {{ __('privacy.sec5_title') }}
                                </a>
                            </li>
                            <li>
                                <a href="#hak-anda"
                                    class="-ml-px block border-l border-transparent py-2 pl-4 text-slate-600 transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:text-slate-400 dark:hover:border-violet-300 dark:hover:text-violet-300">
                                    {{ __('privacy.sec6_title') }}
                                </a>
                            </li>
                            <li>
                                <a href="#perubahan"
                                    class="-ml-px block border-l border-transparent py-2 pl-4 text-slate-600 transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:text-slate-400 dark:hover:border-violet-300 dark:hover:text-violet-300">
                                    {{ __('privacy.sec7_title') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>

                <div class="max-w-3xl">
                    <p class="text-base sm:text-lg leading-relaxed font-medium text-slate-700 dark:text-slate-300">
                        {{ __('privacy.intro') }}
                    </p>

                    <div class="mt-12 flex flex-col">

                        <article id="informasi" class="scroll-mt-32 border-t border-slate-200 py-10 dark:border-slate-800">
                            <div class="flex items-baseline gap-4">
                                <span class="text-sm font-bold text-violet-500 dark:text-violet-300">01</span>
                                <h2 class="font-primary text-xl sm:text-2xl font-bold text-slate-800 dark:text-white">
                                    {{ __('privacy.sec1_title') }}
                                </h2>
                            </div>
                            <div class="mt-4 sm:pl-10">
                                <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-400">
                                    {{ __('privacy.sec1_desc') }}
                                </p>
                                <ul class="mt-4 flex flex-col gap-2.5 text-sm sm:text-base text-slate-700 dark:text-slate-300">
                                    @foreach (__('privacy.sec1_items') as $item)
                                        <li class="flex items-start gap-3">
                                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                            <span>{{ $item }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </article>

                        <article id="penggunaan" class="scroll-mt-32 border-t border-slate-200 py-10 dark:border-slate-800">
                            <div class="flex items-baseline gap-4">
                                <span class="text-sm font-bold text-violet-500 dark:text-violet-300">02</span>
                                <h2 class="font-primary text-xl sm:text-2xl font-bold text-slate-800 dark:text-white">
                                    {{ __('privacy.sec2_title') }}
                                </h2>
                            </div>
                            <div class="mt-4 sm:pl-10">
                                <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-400">
                                    {{ __('privacy.sec2_desc') }}
                                </p>
                                <ul class="mt-4 flex flex-col gap-2.5 text-sm sm:text-base text-slate-700 dark:text-slate-300">
                                    @foreach (__('privacy.sec2_items') as $item)
                                        <li class="flex items-start gap-3">
                                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                            <span>{{ $item }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </article>

                        <article id="perlindungan"
                            class="scroll-mt-32 border-t border-slate-200 py-10 dark:border-slate-800">
                            <div class="flex items-baseline gap-4">
                                <span class="text-sm font-bold text-violet-500 dark:text-violet-300">03</span>
                                <h2 class="font-primary text-xl sm:text-2xl font-bold text-slate-800 dark:text-white">
                                    {{ __('privacy.sec3_title') }}
                                </h2>
                            </div>
                            <div class="mt-4 sm:pl-10">
                                <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-400">
                                    {{ __('privacy.sec3_desc') }}
                                </p>
                            </div>
                        </article>

                        <article id="pihak-ketiga"
                            class="scroll-mt-32 border-t border-slate-200 py-10 dark:border-slate-800">
                            <div class="flex items-baseline gap-4">
                                <span class="text-sm font-bold text-violet-500 dark:text-violet-300">04</span>
                                <h2 class="font-primary text-xl sm:text-2xl font-bold text-slate-800 dark:text-white">
                                    {{ __('privacy.sec4_title') }}
                                </h2>
                            </div>
                            <div class="mt-4 sm:pl-10">
                                <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-400">
                                    {{ __('privacy.sec4_desc') }}
                                </p>
                                <ul class="mt-4 flex flex-col gap-2.5 text-sm sm:text-base text-slate-700 dark:text-slate-300">
                                    @foreach (__('privacy.sec4_items') as $item)
                                        <li class="flex items-start gap-3">
                                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                            <span>{{ $item }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </article>

                        <article id="cookie" class="scroll-mt-32 border-t border-slate-200 py-10 dark:border-slate-800">
                            <div class="flex items-baseline gap-4">
                                <span class="text-sm font-bold text-violet-500 dark:text-violet-300">05</span>
                                <h2 class="font-primary text-xl sm:text-2xl font-bold text-slate-800 dark:text-white">
                                    {{ __('privacy.sec5_title') }}
                                </h2>
                            </div>
                            <div class="mt-4 sm:pl-10">
                                <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-400">
                                    {{ __('privacy.sec5_desc') }}
                                </p>
                            </div>
                        </article>

                        <article id="hak-anda" class="scroll-mt-32 border-t border-slate-200 py-10 dark:border-slate-800">
                            <div class="flex items-baseline gap-4">
                                <span class="text-sm font-bold text-violet-500 dark:text-violet-300">06</span>
                                <h2 class="font-primary text-xl sm:text-2xl font-bold text-slate-800 dark:text-white">
                                    {{ __('privacy.sec6_title') }}
                                </h2>
                            </div>
                            <div class="mt-4 sm:pl-10">
                                <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-400">
                                    {{ __('privacy.sec6_desc') }}
                                </p>
                                <ul class="mt-4 flex flex-col gap-2.5 text-sm sm:text-base text-slate-700 dark:text-slate-300">
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                        <span>
                                            {{ __('privacy.sec6_email') }}
                                            <a href="mailto:admin@elvacode.com"
                                                class="font-semibold text-slate-800 underline decoration-slate-300 underline-offset-4 transition-colors duration-150 ease-in-out hover:text-violet-600 hover:decoration-violet-500 dark:text-white dark:decoration-slate-600 dark:hover:text-violet-300 dark:hover:decoration-violet-300">admin@elvacode.com</a>
                                        </span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                        <span>
                                            {{ __('privacy.sec6_phone') }}
                                            <a href="https://wa.me/6287835482333?text={{ rawurlencode(__('privacy.wa_text')) }}"
                                                target="_blank" rel="noopener noreferrer"
                                                class="font-semibold text-slate-800 underline decoration-slate-300 underline-offset-4 transition-colors duration-150 ease-in-out hover:text-violet-600 hover:decoration-violet-500 dark:text-white dark:decoration-slate-600 dark:hover:text-violet-300 dark:hover:decoration-violet-300">+62
                                                878-3548-2333</a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </article>

                        <article id="perubahan"
                            class="scroll-mt-32 border-t border-slate-200 py-10 dark:border-slate-800">
                            <div class="flex items-baseline gap-4">
                                <span class="text-sm font-bold text-violet-500 dark:text-violet-300">07</span>
                                <h2 class="font-primary text-xl sm:text-2xl font-bold text-slate-800 dark:text-white">
                                    {{ __('privacy.sec7_title') }}
                                </h2>
                            </div>
                            <div class="mt-4 sm:pl-10">
                                <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-400">
                                    {{ __('privacy.sec7_desc') }}
                                </p>
                            </div>
                        </article>

                    </div>

                    <div
                        class="rounded-2xl bg-slate-50 p-6 sm:p-8 dark:bg-slate-800/50 transition-colors duration-300 ease-in-out">
                        <p class="text-sm sm:text-base font-medium leading-relaxed text-slate-700 dark:text-slate-300">
                            {{ __('privacy.agreement') }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection