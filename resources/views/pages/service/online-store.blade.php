@extends('components.layouts.app')

@section('title', __('online_store.meta_title'))
@section('meta_description', __('online_store.meta_description'))
@section('og_title', __('online_store.og_title'))

@section('content')
    @php
        $onlineStores = $onlineStores ?? collect();

        $eyebrow = 'font-primary text-sm font-semibold uppercase tracking-widest text-slate-500 dark:text-slate-300';
        $slash = 'font-bold text-slate-800 dark:text-white';
        $heading =
            'font-primary section-title text-3xl sm:text-4xl md:text-5xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-tight md:leading-[1.15]';
        $body = 'text-sm sm:text-base text-slate-600 dark:text-slate-300 font-medium leading-relaxed';

        $btnPrimary =
            'group/cta inline-flex w-full sm:w-auto items-center justify-center gap-3 rounded-full bg-violet-600 py-2 pl-6 pr-2 text-sm font-bold text-white transition-colors duration-150 ease-in-out hover:bg-violet-500';
        $btnPrimaryIcon = 'flex h-8 w-8 items-center justify-center rounded-full bg-white text-violet-600';
        $btnGhost =
            'group/cta inline-flex w-full sm:w-auto items-center justify-center gap-3 rounded-full border border-slate-300 dark:border-slate-700 py-2 pl-6 pr-2 text-sm font-bold text-slate-800 dark:text-white transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:hover:border-violet-400 dark:hover:text-violet-300';
        $btnGhostIcon =
            'flex h-8 w-8 items-center justify-center rounded-full bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-white transition-colors duration-150 ease-in-out group-hover/cta:bg-violet-500 group-hover/cta:text-white';

        $workLayout = ['', 'md:mt-16', '', 'md:mt-16'];
    @endphp

    <section
        class="section hero-section font-body relative w-full bg-white dark:bg-slate-900 pt-36 sm:pt-44 pb-20 sm:pb-28 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="mx-auto flex max-w-4xl flex-col items-center text-center">
                <div class="flex gap-2 items-center justify-center">
                    <h2 class="{{ $eyebrow }}">
                        <span class="{{ $slash }}">//</span>
                        {{ __('online_store.hero_eyebrow') }}
                    </h2>
                </div>

                <h1
                    class="hero-title split font-primary mt-8 text-4xl sm:text-5xl lg:text-6xl xl:text-7xl tracking-tight text-balance text-slate-800 dark:text-white leading-[1.08] font-medium">
                    {{ __('online_store.hero_title_1') }}
                    <span class="text-violet-500 dark:text-violet-300 font-bold">{{ __('online_store.hero_title_2') }}</span> {{ __('online_store.hero_title_3') }}
                </h1>

                <div class="hero-subtitle">
                    <p class="{{ $body }} mx-auto mt-8 max-w-xl">
                        {{ __('online_store.hero_desc') }}
                    </p>

                    <div class="mt-10 flex flex-col justify-center gap-3 sm:flex-row">
                        <a href="{{ lroute('contact.index') }}" class="{{ $btnPrimary }}">
                            {{ __('online_store.hero_btn_consult') }}
                            <span class="{{ $btnPrimaryIcon }}">
                                <i data-feather="arrow-up-right"
                                    class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                            </span>
                        </a>
                        <a href="#selected-work" class="{{ $btnGhost }}">
                            {{ __('online_store.hero_btn_portfolio') }}
                            <span class="{{ $btnGhostIcon }}">
                                <i data-feather="arrow-down" class="h-4 w-4"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-20 grid border-t border-slate-200 dark:border-slate-800 sm:mt-28 md:grid-cols-3">
                @foreach (__('online_store.highlights') as $item)
                    <div
                        class="border-b border-slate-200 py-8 dark:border-slate-800 md:border-b-0 md:px-8 md:py-10 {{ $loop->first ? 'md:pl-0' : 'md:border-l' }} {{ $loop->last ? 'md:pr-0' : '' }} md:border-slate-200 md:dark:border-slate-800">
                        <span class="font-primary text-sm font-semibold text-violet-600 dark:text-violet-300">
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </span>
                        <h3 class="font-primary mt-4 text-xl font-semibold text-slate-800 dark:text-white">
                            {{ $item['title'] }}
                        </h3>
                        <p class="mt-2 max-w-xs text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            {{ $item['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section
        class="font-body bg-white dark:bg-slate-900 py-24 sm:py-32 lg:py-44 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 data-word-reveal
                class="font-primary max-w-7xl text-3xl sm:text-5xl lg:text-6xl xl:text-8xl font-bold tracking-tight text-balance text-slate-800 dark:text-white leading-[1.12]">
                {{ __('online_store.trans1_title_1') }}
                <span class="text-violet-500 dark:text-violet-300">{{ __('online_store.trans1_title_2') }}</span> {{ __('online_store.trans1_title_3') }}
            </h2>

            <p
                class="mt-10 sm:mt-14 max-w-xl text-base sm:text-lg font-medium leading-relaxed text-slate-600 dark:text-slate-300">
                {{ __('online_store.trans1_desc') }}
            </p>
        </div>
    </section>

    <section
        class="section font-body bg-slate-50 dark:bg-slate-950 py-24 sm:py-32 border-y border-slate-200 dark:border-slate-800 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex gap-2 items-center">
                <h2 class="{{ $eyebrow }}">
                    <span class="{{ $slash }}">//</span>
                    {{ __('online_store.offers_eyebrow') }}
                </h2>
            </div>

            <h3 class="{{ $heading }} mt-6 max-w-3xl">
                {{ __('online_store.offers_title_1') }}
                <span class="text-violet-500 dark:text-violet-300">{{ __('online_store.offers_title_2') }}</span> {{ __('online_store.offers_title_3') }}
            </h3>

            <div class="mt-16 grid gap-12 sm:mt-20 md:grid-cols-2 md:gap-0">
                <div class="md:pr-12 lg:pr-20">
                    <h4
                        class="font-primary text-sm font-semibold uppercase tracking-widest text-violet-600 dark:text-violet-300">
                        {{ __('online_store.offers_for_buyers_title') }}
                    </h4>
                    <ul class="mt-6 border-t border-slate-300 dark:border-slate-700">
                        @foreach (__('online_store.offers_for_buyers') as $feature)
                            <li class="flex items-start gap-4 border-b border-slate-300 py-5 dark:border-slate-700">
                                <i data-feather="check"
                                    class="mt-0.5 h-5 w-5 shrink-0 text-violet-500 dark:text-violet-300"></i>
                                <span
                                    class="text-base font-medium text-slate-800 dark:text-white">{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="md:border-l md:border-slate-300 md:pl-12 dark:md:border-slate-700 lg:pl-20">
                    <h4
                        class="font-primary text-sm font-semibold uppercase tracking-widest text-violet-600 dark:text-violet-300">
                        {{ __('online_store.offers_for_owners_title') }}
                    </h4>
                    <ul class="mt-6 border-t border-slate-300 dark:border-slate-700">
                        @foreach (__('online_store.offers_for_owners') as $feature)
                            <li class="flex items-start gap-4 border-b border-slate-300 py-5 dark:border-slate-700">
                                <i data-feather="check"
                                    class="mt-0.5 h-5 w-5 shrink-0 text-violet-500 dark:text-violet-300"></i>
                                <span
                                    class="text-base font-medium text-slate-800 dark:text-white">{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section font-body bg-white dark:bg-slate-900 py-24 sm:py-32 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <div class="flex gap-2 items-center">
                        <h2 class="{{ $eyebrow }}">
                            <span class="{{ $slash }}">//</span>
                            {{ __('online_store.included_eyebrow') }}
                        </h2>
                    </div>

                    <h3 class="{{ $heading }} mt-6 max-w-3xl">
                        {{ __('online_store.included_title_1') }}
                        <span class="text-violet-500 dark:text-violet-300">{{ __('online_store.included_title_2') }}</span>
                    </h3>
                </div>

                <a href="{{ lroute('pricing.index') }}"
                    class="group/link inline-flex w-fit items-center gap-2 text-sm font-semibold text-slate-800 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:text-white dark:hover:text-violet-300">
                    {{ __('online_store.included_link') }}
                    <i data-feather="arrow-right" class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                </a>
            </div>

            <div class="mt-16 grid grid-cols-2 sm:mt-20 lg:grid-cols-4">
                @foreach (__('online_store.included') as $item)
                    <div
                        class="border-t border-slate-200 py-8 pr-4 dark:border-slate-800 lg:border-l lg:px-8 {{ $loop->first ? 'lg:border-l-0 lg:pl-0' : '' }}">
                        <h4
                            class="font-primary text-2xl font-bold tracking-tight text-slate-800 dark:text-white sm:text-3xl">
                            {{ $item['title'] }}
                        </h4>
                        <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>

            <p class="mt-6 max-w-xl text-sm leading-relaxed text-slate-500 dark:text-slate-400">
                {{ __('online_store.included_desc') }}
            </p>
        </div>
    </section>

    <section class="font-body bg-slate-900 dark:bg-white py-28 sm:py-36 lg:py-44 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 data-word-reveal
                class="font-primary max-w-5xl text-3xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold tracking-tight text-balance text-white dark:text-slate-900 leading-[1.12]">
                {{ __('online_store.trans2_title_1') }}
                <span class="text-violet-300 dark:text-violet-600">{{ __('online_store.trans2_title_2') }}</span> {{ __('online_store.trans2_title_3') }}
            </h2>
        </div>
    </section>

    @if ($onlineStores->isNotEmpty())
        <section id="selected-work" aria-label="Portfolio Toko Online"
            class="section font-body scroll-mt-20 bg-white dark:bg-slate-900 py-24 sm:py-32 transition-colors duration-300 ease-in-out">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
                    <div>
                        <div class="flex gap-2 items-center">
                            <h2 class="{{ $eyebrow }}">
                                <span class="{{ $slash }}">//</span>
                                {{ __('online_store.port_eyebrow') }}
                            </h2>
                        </div>

                        <h3 class="{{ $heading }} mt-6 max-w-3xl">
                            {{ __('online_store.port_title_1') }}
                            <span class="text-violet-500 dark:text-violet-300">{{ __('online_store.port_title_2') }}</span>
                        </h3>
                    </div>

                    <a href="{{ lroute('portfolio.index') }}"
                        class="group/link inline-flex w-fit items-center gap-2 text-sm font-semibold text-slate-800 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:text-white dark:hover:text-violet-300">
                        {{ __('online_store.port_link') }}
                        <i data-feather="arrow-right" class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                    </a>
                </div>

                <div class="mt-16 grid grid-cols-1 gap-x-8 gap-y-14 sm:mt-20 lg:grid-cols-12">

                    @foreach ($onlineStores as $project)

                        @php
                            $isWide = in_array($loop->index % 4, [0, 3]);
                        @endphp

                        <a href="{{ lroute('portfolio.show', $project->slug) }}"
                            class="group block {{ $isWide ? 'lg:col-span-7' : 'lg:col-span-5' }}">

                            {{-- Project Image --}}
                            <div
                                class="overflow-hidden rounded-2xl border border-slate-200 bg-slate-100 dark:border-slate-800 dark:bg-slate-800 {{ $isWide ? 'aspect-[4/3] lg:aspect-[7/5]' : 'aspect-[4/3] lg:aspect-square' }}">

                                <img src="{{ asset('storage/' . $project->thumbnail) }}"
                                    alt="{{ $project->name }}"
                                    loading="lazy"
                                    class="h-full w-full object-cover object-top transition-transform duration-500 ease-in-out group-hover:scale-[1.03]">
                            </div>

                            {{-- Project Information --}}
                            <div class="mt-6 flex items-start justify-between gap-6">

                                <div class="min-w-0">
                                    <span
                                        class="text-xs font-semibold uppercase tracking-widest text-violet-600 dark:text-violet-300">
                                        {{ $project->category->name }}
                                    </span>

                                    <h4
                                        class="font-primary mt-2 line-clamp-1 text-2xl font-semibold text-slate-800 transition-colors duration-150 ease-in-out group-hover:text-violet-600 dark:text-white dark:group-hover:text-violet-300">
                                        {{ $project->name }}
                                    </h4>

                                    <p
                                        class="mt-2 line-clamp-2 max-w-xl text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                        {{ $project->summary }}
                                    </p>
                                </div>

                                <span
                                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-slate-300 text-slate-800 transition-colors duration-300 ease-in-out group-hover:border-violet-500 group-hover:bg-violet-500 group-hover:text-white dark:border-slate-700 dark:text-white dark:group-hover:border-violet-500">

                                    <i data-feather="arrow-up-right"
                                        class="h-4 w-4 transition-transform duration-300 ease-in-out group-hover:translate-x-0.5 group-hover:-translate-y-0.5"></i>
                                </span>

                            </div>
                        </a>

                    @endforeach

                </div>
            </div>
        </section>
    @endif

    <section
        class="section font-body relative isolate overflow-hidden bg-slate-950 dark:bg-violet-500 py-28 sm:py-36 lg:py-48 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="flex justify-center">
                <h2
                    class="font-primary text-sm font-semibold uppercase tracking-widest text-slate-400 dark:text-violet-100">
                    <span class="font-bold text-white dark:text-slate-950">//</span>
                    {{ __('online_store.cta_eyebrow') }}
                </h2>
            </div>

            <a href="https://wa.me/6287835482333?text={{ urlencode(__('online_store.cta_wa_text')) }}"
                target="_blank" rel="noopener" aria-label="Get in touch lewat WhatsApp"
                class="group/cta mt-10 flex items-center justify-center gap-4 sm:mt-14 sm:gap-8 lg:gap-12">

                <span
                    class="font-primary text-5xl font-bold leading-none tracking-tighter text-white transition-colors duration-300 ease-in-out group-hover/cta:text-violet-300 dark:text-slate-950 dark:group-hover/cta:text-white sm:text-7xl md:text-8xl lg:text-9xl xl:text-[10rem]">
                    {{ __('online_store.cta_title') }}
                </span>

                <span
                    class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-white text-slate-950 transition-colors duration-300 ease-in-out group-hover/cta:bg-violet-500 group-hover/cta:text-white dark:bg-slate-950 dark:text-white dark:group-hover/cta:bg-white dark:group-hover/cta:text-violet-600 sm:h-20 sm:w-20 md:h-24 md:w-24 lg:h-32 lg:w-32 xl:h-40 xl:w-40">
                    <i data-feather="arrow-up-right"
                        class="h-6 w-6 transition-transform duration-300 ease-in-out group-hover/cta:translate-x-1 group-hover/cta:-translate-y-1 sm:h-9 sm:w-9 md:h-11 md:w-11 lg:h-14 lg:w-14 xl:h-20 xl:w-20"></i>
                </span>
            </a>

            <p class="mt-10 text-center text-sm font-medium text-slate-400 dark:text-violet-100 sm:mt-14">
                {{ __('online_store.cta_desc') }}
            </p>
        </div>
    </section>
@endsection