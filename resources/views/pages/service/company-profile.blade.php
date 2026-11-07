@extends('components.layouts.app')

@section('title', __('company_profile.meta_title'))
@section('meta_description', __('company_profile.meta_description'))
@section('og_title', __('company_profile.og_title'))

@section('content')
    @php
        $companyProfiles = $companyProfiles ?? collect();
        $firstProject = $companyProfiles->first();
        $heroImage = $firstProject ? asset('storage/' . $firstProject->thumbnail) : null;

        $eyebrow = 'font-primary text-sm font-semibold uppercase tracking-widest text-slate-500 dark:text-slate-300';
        $slash = 'font-bold text-slate-800 dark:text-white';
        $heading =
            'font-primary section-title text-3xl sm:text-4xl md:text-5xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-tight md:leading-[1.15]';
        $body = 'text-sm sm:text-base text-slate-600 dark:text-slate-300 font-medium leading-relaxed';

        $btnPrimary =
            'group/cta inline-flex w-full sm:w-auto items-center justify-center gap-3 rounded-full bg-violet-600 py-2 pl-6 pr-2 text-sm font-bold text-white transition-colors duration-150 ease-in-out hover:bg-violet-500';
        $btnPrimaryIcon = 'flex h-8 w-8 items-center justify-center rounded-full bg-white text-violet-600 shrink-0';
        $btnGhost =
            'group/cta inline-flex w-full sm:w-auto items-center justify-center gap-3 rounded-full border border-slate-300 dark:border-slate-700 py-2 pl-6 pr-2 text-sm font-bold text-slate-800 dark:text-white transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:hover:border-violet-400 dark:hover:text-violet-300 shrink-0';
        $btnGhostIcon =
            'flex h-8 w-8 items-center justify-center rounded-full bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-white transition-colors duration-150 ease-in-out group-hover/cta:bg-violet-500 group-hover/cta:text-white';

        $workLayout = ['lg:col-span-8', 'lg:col-span-4 lg:mt-24', 'lg:col-span-5', 'lg:col-span-7 lg:mt-16'];
        $workRatio = ['aspect-[16/10]', 'aspect-[4/5]', 'aspect-[4/3]', 'aspect-[16/10]'];
    @endphp

    <section
        class="section hero-section font-body relative w-full bg-white dark:bg-slate-900 pt-36 sm:pt-44 pb-20 sm:pb-28 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex gap-2 items-center">
                <h2 class="{{ $eyebrow }}">
                    <span class="{{ $slash }}">//</span>
                    {{ __('company_profile.hero_eyebrow') }}
                </h2>
            </div>

            <div class="mt-8 grid gap-10 lg:grid-cols-12 lg:items-end lg:gap-16">
                <h1
                    class="hero-title split font-primary mt-8 text-4xl sm:text-5xl lg:text-6xl xl:text-6xl tracking-tight text-balance text-slate-800 dark:text-white leading-[1.08] font-medium lg:col-span-7">
                    {{ __('company_profile.hero_title_1') }}
                    <span class="text-violet-500 dark:text-violet-300 font-bold">{{ __('company_profile.hero_title_2') }}</span> {{ __('company_profile.hero_title_3') }}
                </h1>

                <div class="hero-subtitle lg:col-span-5">
                    <p class="{{ $body }}">
                        {{ __('company_profile.hero_desc') }}
                    </p>

                    <div class="mt-8 flex flex-col sm:flex-row gap-3">
                        <a href="https://wa.me/6287835482333?text={{ rawurlencode(__('company_profile.wa_consult')) }}"
                            target="_blank" rel="noopener noreferrer"
                            class="{{ $btnPrimary }} w-full sm:w-auto justify-center">
                            {{ __('company_profile.hero_btn_consult') }}
                            <span class="{{ $btnPrimaryIcon }}">
                                <i data-feather="arrow-up-right"
                                    class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                            </span>
                        </a>

                        <a href="#selected-work" class="{{ $btnGhost }} w-full sm:w-auto justify-center">
                            {{ __('company_profile.hero_btn_portfolio') }}
                            <span class="{{ $btnGhostIcon }}">
                                <i data-feather="arrow-down" class="h-4 w-4"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            @php
                $fullPagePath = 'assets/images/fullpage-company-profile.jpg';

                $localFullPageFile = public_path($fullPagePath);
                $publicHtmlFullPageFile = base_path('../public_html/' . $fullPagePath);

                if (file_exists($localFullPageFile)) {
                    $fullPage = asset($fullPagePath);
                } elseif (file_exists($publicHtmlFullPageFile)) {
                    $fullPage = asset($fullPagePath);
                } else {
                    $fullPage = null;
                }

                $mockRatio = 'h-[calc(100svh-9rem)] sm:h-[calc(100svh-10rem)] md:h-[calc(100svh-12rem)]';
            @endphp

            <div class="mt-10 w-full sm:mt-20"
                @if ($fullPage) data-browser-scroll @else data-parallax="24" @endif>
                <div data-browser-frame class="mx-auto w-full md:w-[82%]">
                    @if ($fullPage)
                        <x-browser-mockup :src="$fullPage" :alt="$firstProject->name ?? __('company_profile.mockup_alt')" url="jatiunggulpermai.com" :ratio="$mockRatio"
                            :scroll="true" />
                    @else
                        <x-browser-mockup :src="$heroImage" :alt="$firstProject->name ?? __('company_profile.mockup_alt')" url="jatiunggulpermai.com" :ratio="$mockRatio">
                            <x-site-wireframe variant="a" />
                        </x-browser-mockup>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section
        class="font-body bg-white dark:bg-slate-900 pt-6 sm:pt-10 lg:pt-14 pb-24 sm:pb-32 lg:pb-40 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 data-word-reveal
                class="font-primary max-w-5xl text-3xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold tracking-tight text-balance text-slate-800 dark:text-white leading-[1.12]">
                {{ __('company_profile.trans1_title_1') }}
                <span class="text-violet-500 dark:text-violet-300">{{ __('company_profile.trans1_title_2') }}</span>
                {{ __('company_profile.trans1_title_3') }}
            </h2>

            <p
                class="mt-10 sm:mt-14 max-w-xl text-base sm:text-lg font-medium leading-relaxed text-slate-600 dark:text-slate-300">
                {{ __('company_profile.trans1_desc') }}
            </p>
        </div>
    </section>

    <section
        class="font-body bg-slate-50 dark:bg-slate-950 py-24 sm:py-32 lg:py-40 border-y border-slate-200 dark:border-slate-800 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid gap-10 lg:grid-cols-12 lg:gap-16 lg:items-center">

                <div class="lg:col-span-6">
                    <div class="stat-number font-primary text-[8rem] sm:text-[12rem] lg:text-[15rem] font-bold leading-none tracking-tighter text-violet-600 dark:text-violet-300"
                        data-value="70">
                        <span class="stat-value">0</span><span>%</span>
                    </div>
                </div>

                <div class="lg:col-span-6 lg:border-l lg:border-slate-300 lg:pl-16 dark:lg:border-slate-700">
                    <p
                        class="font-primary text-xl sm:text-2xl lg:text-3xl font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-snug">
                        {{ __('company_profile.stat_title_1') }}
                        <span class="text-violet-500 dark:text-violet-300">{{ __('company_profile.stat_title_2') }}</span>
                        {{ __('company_profile.stat_title_3') }}
                    </p>
                    <p class="{{ $body }} mt-8 max-w-md text-justify">
                        {{ __('company_profile.stat_desc_1') }}
                        <span class="font-semibold text-violet-500 dark:text-violet-300">{{ __('company_profile.stat_desc_2') }}</span>
                        {{ __('company_profile.stat_desc_3') }}
                        <span class="font-semibold text-violet-500 dark:text-violet-300">{{ __('company_profile.stat_desc_4') }}</span>
                        {{ __('company_profile.stat_desc_5') }}
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section
        class="section font-body bg-white dark:bg-slate-900 py-24 sm:py-32 border-y border-slate-200 dark:border-slate-800 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid gap-14 lg:grid-cols-12 lg:gap-20">

                <div class="lg:col-span-5">
                    <div class="flex gap-2 items-center">
                        <h2 class="{{ $eyebrow }}">
                            <span class="{{ $slash }}">//</span>
                            {{ __('company_profile.offers_eyebrow') }}
                        </h2>
                    </div>

                    <h3 class="{{ $heading }} mt-6">
                        {{ __('company_profile.offers_title_1') }}
                        <span class="text-violet-500 dark:text-violet-300">{{ __('company_profile.offers_title_2') }}</span> {{ __('company_profile.offers_title_3') }}
                    </h3>

                    <p class="section-desc {{ $body }} mt-6 sm:mt-8 max-w-md">
                        {{ __('company_profile.offers_desc') }}
                    </p>
                </div>

                <ul class="lg:col-span-7 border-t border-slate-300 dark:border-slate-700">
                    @foreach (__('company_profile.offers') as $item)
                        <li
                            class="group grid grid-cols-12 items-baseline gap-4 border-b border-slate-300 py-6 transition-colors duration-300 ease-in-out hover:border-violet-500 dark:border-slate-700 dark:hover:border-violet-400 sm:py-8">
                            <span
                                class="font-primary col-span-2 text-sm font-semibold text-violet-600 dark:text-violet-300 sm:col-span-1">
                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </span>
                            <h4
                                class="font-primary col-span-10 text-2xl font-semibold tracking-tight text-slate-800 transition-colors duration-300 ease-in-out group-hover:text-violet-600 dark:text-white dark:group-hover:text-violet-300 sm:col-span-5 sm:text-3xl">
                                {{ $item['title'] }}
                            </h4>
                            <p
                                class="col-span-10 col-start-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400 sm:col-span-6 sm:col-start-auto">
                                {{ $item['desc'] }}
                            </p>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </section>

    <section
        class="section font-body bg-slate-50 dark:bg-slate-950 py-24 sm:py-32 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <div class="flex gap-2 items-center">
                        <h2 class="{{ $eyebrow }}">
                            <span class="{{ $slash }}">//</span>
                            {{ __('company_profile.why_eyebrow') }}
                        </h2>
                    </div>

                    <h3 class="{{ $heading }} mt-6 max-w-3xl">
                        {{ __('company_profile.why_title_1') }}
                        <span class="text-violet-500 dark:text-violet-300">{{ __('company_profile.why_title_2') }}</span>
                    </h3>
                </div>

                <a href="{{ lroute('pricing.index') }}"
                    class="group/link inline-flex w-fit items-center gap-2 text-sm font-semibold text-slate-800 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:text-white dark:hover:text-violet-300">
                    {{ __('company_profile.why_link') }}
                    <i data-feather="arrow-right" class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                </a>
            </div>

            <div class="mt-16 sm:mt-20 grid gap-x-8 gap-y-12 sm:grid-cols-2 lg:grid-cols-4">
                @foreach (__('company_profile.reasons') as $reason)
                    <div
                        class="group border-t border-slate-200 pt-6 transition-colors duration-300 ease-in-out hover:border-violet-500 dark:border-slate-800 dark:hover:border-violet-400">
                        <span class="font-primary text-sm font-semibold text-violet-600 dark:text-violet-300">
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </span>
                        <h4 class="font-primary mt-4 text-xl font-semibold text-slate-800 dark:text-white">
                            {{ $reason['title'] }}
                        </h4>
                        <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            {{ $reason['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="font-body bg-slate-900 dark:bg-white py-28 sm:py-36 lg:py-44 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 data-word-reveal
                class="font-primary max-w-5xl text-3xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold tracking-tight text-balance text-white dark:text-slate-900 leading-[1.12]">
                {{ __('company_profile.trans2_title_1') }}
                <span class="text-violet-300 dark:text-violet-600">{{ __('company_profile.trans2_title_2') }}</span>
            </h2>
        </div>
    </section>

    @if ($companyProfiles->isNotEmpty())
        <section id="selected-work" aria-label="Portfolio Company Profile"
            class="section font-body scroll-mt-20 bg-white dark:bg-slate-900 py-24 sm:py-32 transition-colors duration-300 ease-in-out">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
                    <div>
                        <div class="flex gap-2 items-center">
                            <h2 class="{{ $eyebrow }}">
                                <span class="{{ $slash }}">//</span>
                                {{ __('company_profile.port_eyebrow') }}
                            </h2>
                        </div>

                        <h3 class="{{ $heading }} mt-6 max-w-3xl">
                            {{ __('company_profile.port_title_1') }}
                            <span class="text-violet-500 dark:text-violet-300">{{ __('company_profile.port_title_2') }}</span>
                        </h3>
                    </div>

                    <a href="{{ lroute('portfolio.index') }}"
                        class="group/link inline-flex w-fit items-center gap-2 text-sm font-semibold text-slate-800 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:text-white dark:hover:text-violet-300">
                        {{ __('company_profile.port_link') }}
                        <i data-feather="arrow-right" class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                    </a>
                </div>

                <div class="mt-16 sm:mt-20 grid grid-cols-1 gap-x-8 gap-y-14 lg:grid-cols-12">

                    @foreach ($companyProfiles as $project)

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
                                        class="h-4 w-4 transition-transform duration-300 ease-in-out group-hover:translate-x-0.5 group-hover:-translate-y-0.5">
                                    </i>
                                </span>

                            </div>
                        </a>

                    @endforeach

                </div>
            </div>
        </section>
    @endif

    <section id="faq" aria-label="Pertanyaan yang sering ditanyakan"
        class="section font-body bg-slate-50 dark:bg-slate-950 py-24 sm:py-32 border-y border-slate-200 dark:border-slate-800 transition-colors duration-300 ease-in-out">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="max-w-3xl">
                <div class="flex gap-2 items-center">
                    <h2 class="{{ $eyebrow }}">
                        <span class="{{ $slash }}">//</span>
                        {{ __('company_profile.faq_eyebrow') }}
                    </h2>
                </div>

                <h3 class="{{ $heading }} mt-6">
                    {{ __('company_profile.faq_title_1') }}
                    <span class="text-violet-500 dark:text-violet-300">{{ __('company_profile.faq_title_2') }}</span> {{ __('company_profile.faq_title_3') }}
                </h3>

                <p class="section-desc {{ $body }} mt-6 sm:mt-8 max-w-2xl">
                    {{ __('company_profile.faq_desc') }}
                </p>

                <a href="https://wa.me/6287835482333?text={{ urlencode(__('company_profile.faq_wa_text')) }}"
                    target="_blank" rel="noopener"
                    class="group/link mt-8 inline-flex w-fit items-center gap-2 text-sm font-semibold text-slate-800 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:text-white dark:hover:text-violet-300">
                    {{ __('company_profile.faq_link') }}
                    <i data-feather="arrow-up-right" class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                </a>
            </div>

            <div x-data="{ open: 0 }" class="mt-16 sm:mt-20 border-t border-slate-300 dark:border-slate-700">

                @foreach (__('company_profile.faqs') as $faq)
                    <div class="border-b border-slate-300 dark:border-slate-700">
                        <h4>
                            <button type="button"
                                @click="open = open === {{ $loop->index }} ? null : {{ $loop->index }}"
                                :aria-expanded="(open === {{ $loop->index }}).toString()"
                                aria-controls="faq-{{ $loop->index }}"
                                class="group flex w-full items-center justify-between gap-6 py-6 text-left sm:py-7">

                                <span
                                    class="font-primary text-lg font-semibold tracking-tight text-slate-800 transition-colors duration-300 ease-in-out group-hover:text-violet-600 dark:text-white dark:group-hover:text-violet-300 sm:text-xl"
                                    :class="open === {{ $loop->index }} ? 'text-violet-600 dark:text-violet-300' : ''">
                                    {{ $faq['q'] }}
                                </span>

                                <span
                                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border border-slate-300 text-slate-700 transition-all duration-300 ease-in-out group-hover:border-violet-500 dark:border-slate-700 dark:text-slate-200"
                                    :class="open === {{ $loop->index }} ?
                                        'rotate-45 border-violet-500 bg-violet-500 text-white dark:border-violet-500' :
                                        ''">
                                    <i data-feather="plus" class="h-4 w-4"></i>
                                </span>
                            </button>
                        </h4>

                        <div id="faq-{{ $loop->index }}"
                            class="grid transition-[grid-template-rows] duration-300 ease-in-out"
                            :class="open === {{ $loop->index }} ? 'grid-rows-[1fr]' : 'grid-rows-[0fr]'">

                            <div class="overflow-hidden">
                                <p
                                    class="max-w-3xl pb-7 text-sm leading-relaxed text-slate-600 dark:text-slate-300 sm:text-base">
                                    {{ $faq['a'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <script type="application/ld+json">
            {!! json_encode(
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => collect(__('company_profile.faqs'))->map(fn($f) => [
                        '@type' => 'Question',
                        'name' => $f['q'],
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => $f['a'],
                        ],
                    ])->all(),
                ],
                JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES,
            ) !!}
        </script>

    </section>

    <section
        class="section font-body relative isolate overflow-hidden bg-slate-950 dark:bg-violet-500 py-28 sm:py-36 lg:py-48 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="flex justify-center">
                <h2
                    class="font-primary text-sm font-semibold uppercase tracking-widest text-slate-400 dark:text-violet-100">
                    <span class="font-bold text-white dark:text-slate-950">//</span>
                    {{ __('company_profile.cta_eyebrow') }}
                </h2>
            </div>

            <a href="https://wa.me/6287835482333?text={{ urlencode(__('company_profile.cta_wa_text')) }}"
                target="_blank" rel="noopener" aria-label="Get in touch lewat WhatsApp"
                class="group/cta mt-10 flex items-center justify-center gap-4 sm:mt-14 sm:gap-8 lg:gap-12">

                <span
                    class="font-primary text-5xl font-bold leading-none tracking-tighter text-white transition-colors duration-300 ease-in-out group-hover/cta:text-violet-300 dark:text-slate-950 dark:group-hover/cta:text-white sm:text-7xl md:text-8xl lg:text-9xl xl:text-[10rem]">
                    {{ __('company_profile.cta_title') }}
                </span>

                <span
                    class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-white text-slate-950 transition-colors duration-300 ease-in-out group-hover/cta:bg-violet-500 group-hover/cta:text-white dark:bg-slate-950 dark:text-white dark:group-hover/cta:bg-white dark:group-hover/cta:text-violet-600 sm:h-20 sm:w-20 md:h-24 md:w-24 lg:h-32 lg:w-32 xl:h-40 xl:w-40">
                    <i data-feather="arrow-up-right"
                        class="h-6 w-6 transition-transform duration-300 ease-in-out group-hover/cta:translate-x-1 group-hover/cta:-translate-y-1 sm:h-9 sm:w-9 md:h-11 md:w-11 lg:h-14 lg:w-14 xl:h-20 xl:w-20"></i>
                </span>
            </a>

            <p class="mt-10 text-center text-sm font-medium text-slate-400 dark:text-violet-100 sm:mt-14">
                {{ __('company_profile.cta_desc') }}
            </p>
        </div>
    </section>
@endsection