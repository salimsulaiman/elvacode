@extends('components.layouts.app')

@section('content')
    <section
        class="w-full bg-white dark:bg-slate-950 relative isolate h-auto md:h-screen overflow-hidden transition-colors duration-300 ease-in-out bg-cover">
        <div class="absolute inset-0 right-0 -top-40 -z-10 overflow-hidden">
            <div
                class="w-[600px] h-[600px] bg-gradient-to-tr from-pink-300 via-indigo-400 to-white opacity-20 blur-2xl rounded-full">
            </div>
        </div>
        <div
            class="max-w-7xl h-full flex flex-col items-center justify-center mx-auto relative pt-14 px-6 lg:px-8 section hero-section">
            <div class="w-full py-16 sm:py-36 lg:py-40 relative z-20">
                <div class="w-full flex flex-col lg:flex-row gap-10 lg:gap-16 justify-between items-center">
                    <div class="lg:w-7/12 flex flex-col items-center lg:items-start text-center lg:text-left">
                        <div class="flex gap-2 items-center">
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-400 uppercase">
                                <span class="font-bold text-slate-800 dark:text-white">//</span>
                                {{ __('home.hero_eyebrow') }}
                            </span>
                        </div>
                        <h1
                            class="font-primary hero-title split text-3xl sm:text-4xl md:text-7xl font-bold sm:font-normal tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-18 max-w-3xl mx-auto lg:mx-0 mt-6">
                            {{ __('home.hero_title_1') }}
                            <span class="font-bold text-violet-500 dark:text-violet-300">
                                {{ __('home.hero_title_2') }}
                            </span>
                            {{ __('home.hero_title_3') }}
                        </h1>

                        <p
                            class="hero-subtitle text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium mt-6 sm:mt-8 max-w-lg mx-auto lg:mx-0 text-justify">
                            {{ __('home.hero_desc') }}
                        </p>

                        <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row items-center lg:items-center gap-4 sm:gap-6">
                            <a href="#portfolio"
                                class="rounded-full bg-slate-800 px-5 py-2.5 text-sm sm:text-base font-semibold text-white dark:text-slate-700 dark:bg-white shadow hover:bg-slate-700 dark:hover:bg-slate-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                                {{ __('home.hero_btn_start') }}
                            </a>
                            <a href="{{ lroute('pricing.index') }}"
                                class="text-sm sm:text-base font-semibold text-violet-900 hover:text-violet-700 dark:text-slate-300 dark:hover:text-slate-200">
                                {{ __('home.hero_btn_plan') }}<span aria-hidden="true"> →</span>
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-5/12 relative mt-4 sm:mt-12 lg:mt-0 bottom-0">
                        <img src="{{ asset('assets/images/hero-image.png') }}" alt="Hero Image"
                            class="w-full relative bottom-0 right-0 scale-100 mx-auto lg:absolute lg:-bottom-48 lg:-right-44 lg:scale-200">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="relative max-w-7xl mx-auto overflow-hidden py-6 bg-slate-100 dark:bg-slate-800">
        <div
            class="pointer-events-none absolute left-0 top-0 h-full w-64 bg-gradient-to-r from-white dark:from-slate-900 to-transparent z-10">
        </div>
        <div
            class="pointer-events-none absolute right-0 top-0 h-full w-64 bg-gradient-to-l from-white dark:from-slate-900 to-transparent z-10">
        </div>

        <div class="relative overflow-hidden">
            <div class="flex w-max min-w-full flex-nowrap animate-marquee gap-20 hover:[animation-play-state:paused]">
                <img src="{{ asset('assets/logos/project/elvacourse-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/jatiunggul-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/obsidea-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/taleify-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/velobike-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/morvix-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />

                <img src="{{ asset('assets/logos/project/elvacourse-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/jatiunggul-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/obsidea-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/taleify-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/velobike-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
                <img src="{{ asset('assets/logos/project/morvix-logo.png') }}"
                    class="h-12 shrink-0 opacity-70 hover:opacity-100 transition dark:invert" />
            </div>
        </div>
    </div>

    @php
        $showcase = $portfolios->take(8)->values();
        while ($showcase->isNotEmpty() && $showcase->count() < 6) {
            $showcase = $showcase->concat($showcase)->values();
        }
    @endphp

    <section id="create-website"
        class="section font-body w-full scroll-mt-18 relative isolate overflow-hidden bg-white dark:bg-slate-900 pt-24 sm:pt-32 pb-32 sm:pb-72 transition-colors duration-300 ease-in-out">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col items-center text-center">
                <div class="flex gap-2 items-center justify-center">
                    <h2 class="font-primary text-sm font-semibold text-slate-500 dark:text-slate-300 uppercase">
                        <span class="font-bold text-slate-800 dark:text-white">//</span>
                        {{ __('home.showcase_eyebrow') }}
                    </h2>
                </div>

                <h3
                    class="font-primary section-title split mt-6 max-w-3xl text-3xl sm:text-4xl md:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-20">
                    {{ __('home.showcase_title_1') }} 
                    <span class="font-bold text-violet-500 dark:text-violet-300">{{ __('home.showcase_title_2') }}</span> 
                    {{ __('home.showcase_title_3') }}
                </h3>

                <p
                    class="section-desc mt-6 sm:mt-8 max-w-xl text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium leading-relaxed">
                    {{ __('home.showcase_desc') }}
                </p>
            </div>
        </div>
        @if ($showcase->isNotEmpty())
            <div class="mx-auto mt-14 max-w-7xl sm:mt-20 [mask-image:linear-gradient(to_right,transparent,black_8%,black_92%,transparent)]">
                <div x-data="{
                    x: 0,
                    half: 0,
                    paused: false,
                    dragging: false,
                    moved: false,
                    startX: 0,
                    startPos: 0,
                    last: 0,
                    raf: null,
                    speed: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 0 : 40,
                    init() {
                        const track = this.$refs.track;
                        this.measure();
                        const step = (t) => {
                            if (!this.last) this.last = t;
                            const dt = Math.min((t - this.last) / 1000, 0.05);
                            this.last = t;
                            if (!this.paused && !this.dragging) this.x -= this.speed * dt;
                            this.wrap();
                            track.style.transform = `translate3d(${this.x}px,0,0)`;
                            this.raf = requestAnimationFrame(step);
                        };
                        this.raf = requestAnimationFrame(step);
                    },
                    destroy() {
                        cancelAnimationFrame(this.raf);
                    },
                    measure() {
                        this.half = this.$refs.track.scrollWidth / 2;
                    },
                    wrap() {
                        if (this.half <= 0) return;
                        while (this.x <= -this.half) this.x += this.half;
                        while (this.x > 0) this.x -= this.half;
                    },
                    down(e) {
                        if (e.pointerType === 'mouse' && e.button !== 0) return;
                        this.dragging = true;
                        this.moved = false;
                        this.startX = e.clientX;
                        this.startPos = this.x;
                    },
                    move(e) {
                        if (!this.dragging) return;
                        const diff = e.clientX - this.startX;
                        if (Math.abs(diff) > 5) this.moved = true;
                        this.x = this.startPos + diff;
                    },
                    up() {
                        if (!this.dragging) return;
                        this.dragging = false;
                        setTimeout(() => this.moved = false, 0);
                    },
                    wheel(e) {
                        if (Math.abs(e.deltaX) <= Math.abs(e.deltaY)) return;
                        e.preventDefault();
                        this.x -= e.deltaX;
                    }
                }" x-on:resize.window.debounce.200ms="measure()" x-on:pointerdown="down($event)"
                    x-on:pointermove.window="move($event)" x-on:pointerup.window="up()" x-on:pointercancel.window="up()"
                    x-on:pointerenter="if ($event.pointerType === 'mouse') paused = true"
                    x-on:pointerleave="if ($event.pointerType === 'mouse') paused = false" x-on:focusin="paused = true"
                    x-on:focusout="paused = false" x-on:wheel="wheel($event)"
                    x-on:click.capture="if (moved) { $event.preventDefault(); $event.stopPropagation(); }"
                    class="touch-pan-y select-none overflow-hidden" :class="dragging ? 'cursor-grabbing' : 'cursor-grab'">

                    <div x-ref="track" class="flex w-max will-change-transform">
                        @foreach ([false, true] as $isClone)
                            <div class="flex shrink-0 gap-6 pr-6"
                                @if ($isClone) aria-hidden="true" @endif>
                                @foreach ($showcase as $portfolio)
                                    <a href="{{ lroute('portfolio.show', $portfolio->slug) }}" draggable="false"
                                        @if ($isClone) tabindex="-1" @endif
                                        class="group flex w-[78vw] shrink-0 flex-col overflow-hidden rounded-xl bg-slate-50 transition-colors duration-300 ease-in-out hover:bg-slate-900 sm:w-[22rem] lg:w-[26rem] dark:bg-slate-800/50 dark:hover:bg-violet-600">

                                        <div
                                            class="aspect-video w-full overflow-hidden rounded-b-2xl bg-slate-200 dark:bg-slate-700">
                                            <img src="{{ asset('storage/' . $portfolio->thumbnail) }}"
                                                alt="{{ $isClone ? '' : $portfolio->name }}" loading="lazy"
                                                draggable="false"
                                                class="h-full w-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-105">
                                        </div>

                                        <div class="flex items-center justify-between gap-4 px-5 py-4">
                                            <div class="flex min-w-0 flex-col">
                                                <h4
                                                    class="font-primary line-clamp-1 text-base font-semibold text-slate-800 transition-colors duration-300 ease-in-out group-hover:text-white dark:text-white">
                                                    {{ $portfolio->name }}
                                                </h4>

                                                <span
                                                    class="text-xs font-medium text-slate-500 transition-colors duration-300 ease-in-out group-hover:text-slate-400 dark:text-slate-400 dark:group-hover:text-white">
                                                    {{ $portfolio->category->name }}
                                                </span>
                                            </div>

                                            <i data-feather="arrow-up-right"
                                                class="h-4 w-4 shrink-0 text-slate-500 transition-colors duration-300 ease-in-out group-hover:text-violet-300 dark:text-slate-400 dark:group-hover:text-white"></i>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </section>

    <section
        class="w-full py-0 md:py-32 relative transition-colors duration-300 ease-in-out bg-slate-50 dark:bg-slate-800">
        <div
            class="w-full max-w-7xl mx-auto px-6 sm:px-10 lg:px-16 xl:px-24 py-12 sm:py-16 lg:py-24 rounded-none md:rounded-2xl shadow-xl bg-slate-950 dark:bg-white relative lg:absolute top-0 md:-top-24 lg:-top-48 left-1/2 -translate-x-1/2 grid grid-cols-1 md:grid-cols-2 items-center gap-10 md:gap-12 lg:gap-20 text-center md:text-left justify-items-center md:justify-items-start transition-colors duration-300 ease-in-out border border-slate-900 dark:border-slate-100">

            <div class="space-y-4 w-full">
                <img src="{{ asset('assets/logos/elvacode-logo.webp') }}" alt="Logo Elvacode"
                    class="w-28 sm:w-32 mx-auto md:mx-0 mb-6 invert dark:invert-0 transition duration-300">
                <h2 class="font-primary text-white dark:text-slate-800 font-bold text-lg sm:text-xl lg:text-2xl">
                    {{ __('home.about_title_1') }}
                    <span class="text-violet-300 dark:text-violet-500 font-extrabold">{{ __('home.about_title_2') }}</span>{{ __('home.about_title_3') }}
                    <span class="text-violet-300 dark:text-violet-500 font-extrabold">{{ __('home.about_title_4') }}</span>
                </h2>
                <p class="text-sm sm:text-base text-slate-300 dark:text-slate-700">
                    {{ __('home.about_desc') }}
                </p>
            </div>

            <div
                class="w-full grid grid-cols-2 gap-x-4 gap-y-8 sm:gap-x-6 sm:gap-y-10 transition-colors duration-300 ease-in-out">

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col sm:flex-row items-center gap-2 sm:gap-4 mb-1 justify-center md:justify-start">
                        <div
                            class="w-8 h-8 shrink-0 bg-slate-700 dark:bg-slate-100 rounded-full flex items-center justify-center transition-colors duration-300 ease-in-out">
                            <i data-feather="smile" class="w-4 h-4 text-slate-300 dark:text-slate-600"></i>
                        </div>
                        <h2 class="stat-number font-bold text-4xl sm:text-5xl text-white dark:text-slate-800"
                            data-value="95" data-suffix="%">
                            <span class="stat-value">0</span><span class="text-2xl sm:text-3xl">%</span>
                        </h2>
                    </div>
                    <p
                        class="ms-0 sm:ms-12 text-slate-300 dark:text-slate-800 font-semibold text-xs sm:text-sm text-center md:text-left">
                        {{ __('home.stat_1') }}
                    </p>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col sm:flex-row items-center gap-2 sm:gap-4 mb-1 justify-center md:justify-start">
                        <div
                            class="w-8 h-8 shrink-0 bg-slate-700 dark:bg-slate-100 rounded-full flex items-center justify-center transition-colors duration-300 ease-in-out">
                            <i data-feather="check-circle" class="w-4 h-4 text-slate-300 dark:text-slate-600"></i>
                        </div>
                        <h2 class="stat-number font-bold text-4xl sm:text-5xl text-white dark:text-slate-800"
                            data-value="50" data-suffix="+">
                            <span class="stat-value">0</span><span class="text-2xl sm:text-3xl">+</span>
                        </h2>
                    </div>
                    <p
                        class="ms-0 sm:ms-12 text-slate-300 dark:text-slate-800 font-semibold text-xs sm:text-sm text-center md:text-left">
                        {{ __('home.stat_2') }}
                    </p>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col sm:flex-row items-center gap-2 sm:gap-4 mb-1 justify-center md:justify-start">
                        <div
                            class="w-8 h-8 shrink-0 bg-slate-700 dark:bg-slate-100 rounded-full flex items-center justify-center transition-colors duration-300 ease-in-out">
                            <i data-feather="zap" class="w-4 h-4 text-slate-300 dark:text-slate-600"></i>
                        </div>
                        <h2 class="stat-number font-bold text-4xl sm:text-5xl text-white dark:text-slate-800"
                            data-value="40" data-suffix="+">
                            <span class="stat-value">0</span><span class="text-2xl sm:text-3xl">+</span>
                        </h2>
                    </div>
                    <p
                        class="ms-0 sm:ms-12 text-slate-300 dark:text-slate-800 font-semibold text-xs sm:text-sm text-center md:text-left">
                        {{ __('home.stat_3') }}
                    </p>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col sm:flex-row items-center gap-2 sm:gap-4 mb-1 justify-center md:justify-start">
                        <div
                            class="w-8 h-8 shrink-0 bg-slate-700 dark:bg-slate-100 rounded-full flex items-center justify-center transition-colors duration-300 ease-in-out">
                            <i data-feather="trending-up" class="w-4 h-4 text-slate-300 dark:text-slate-600"></i>
                        </div>
                        <h2 class="stat-number font-bold text-4xl sm:text-5xl text-white dark:text-slate-800"
                            data-value="25" data-suffix="+">
                            <span class="stat-value">0</span><span class="text-2xl sm:text-3xl">+</span>
                        </h2>
                    </div>
                    <p
                        class="ms-0 sm:ms-12 text-slate-300 dark:text-slate-800 font-semibold text-xs sm:text-sm text-center md:text-left">
                        {{ __('home.stat_4') }}
                    </p>
                </div>

            </div>
        </div>

        <div class="section w-full max-w-7xl mx-auto relative px-6 lg:px-8 mt-8 md:-mt-12 lg:mt-48 pt-8 pb-20 group">
            <div class="w-full flex flex-col lg:flex-row-reverse gap-20 justify-between items-center">
                <div class="w-full lg:w-7/12">
                    <div class="flex gap-2 items-center">
                        <h2 class="text-sm font-semibold text-slate-500 dark:text-slate-300 uppercase">
                            <span class="font-bold text-slate-800 dark:text-white">//</span>
                            {{ __('home.why_eyebrow') }}
                        </h2>
                    </div>

                    <h3
                        class="font-primary section-title split text-3xl sm:text-4xl md:text-7xl font-bold sm:font-semibold text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-20 mx-auto lg:mx-0 mt-6">
                        {{ __('home.why_title_1') }} <span class="text-violet-500 dark:text-violet-300 font-bold">{{ __('home.why_title_2') }}</span>
                    </h3>

                    <p
                        class="section-desc text-sm sm:text-base text-slate-700 dark:text-white font-medium mt-6 sm:mt-8 text-justify">
                        {!! __('home.why_desc_1') !!}
                        <br><br>
                        {{ __('home.why_desc_2') }}
                    </p>

                    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-8">
                        @foreach (__('home.why_features') as $feature)
                            <div class="flex items-start gap-4">
                                <div
                                    class="flex items-center justify-center w-12 h-12 rounded-2xl bg-violet-100 dark:bg-violet-500 shrink-0">
                                    <i data-feather="{{ $feature['icon'] }}" class="w-6 h-6 text-violet-700 dark:text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white">{{ $feature['title'] }}</h3>
                                    <p class="text-slate-600 dark:text-slate-400 text-sm">
                                        {{ $feature['desc'] }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div data-laptop-parallax
                    class="relative mx-auto mt-2 w-full max-w-[420px] aspect-[1/1.05]
           sm:max-w-[520px] md:mt-6 md:max-w-[600px]
           lg:mt-0 lg:w-5/12 lg:max-w-none">

                    <img data-layer="back" src="{{ asset('assets/images/laptop.png') }}"
                        alt="Contoh website - tampilan belakang" loading="lazy" decoding="async"
                        class="absolute left-0 top-0 w-[80%] h-auto will-change-transform select-none pointer-events-none">

                    <img data-layer="front" src="{{ asset('assets/images/laptop-v2.png') }}"
                        alt="Contoh website - tampilan depan" loading="lazy" decoding="async"
                        class="absolute -bottom-10 right-0 w-[80%] h-auto will-change-transform select-none pointer-events-none">
                </div>

            </div>
        </div>
    </section>

    <section id="pricing" aria-label="Paket Harga Website Elvacode"
        class="section w-full bg-white dark:bg-slate-900 group/section transition-colors duration-300 ease-in-out relative z-20">
        <div class="max-w-7xl mx-auto py-32 px-6 lg:px-8">
            <div class="flex gap-2 items-center">
                <h2 class="text-sm font-semibold text-slate-600 dark:text-slate-400 uppercase">
                    <span class="font-bold text-slate-800 dark:text-white">//</span>
                    {{ __('home.pricing_eyebrow') }}
                </h2>
            </div>

            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-16 mt-6 mb-20">
                <h3
                    class="font-primary section-title split lg:flex-1 max-w-2xl text-3xl sm:text-4xl md:text-5xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-16 mx-auto lg:mx-0">
                    {{ __('home.pricing_title_1') }} <span class="text-violet-500 dark:text-violet-300 font-bold">{{ __('home.pricing_title_2') }}</span>
                    {{ __('home.pricing_title_3') }}
                </h3>

                <p
                    class="section-desc w-full lg:w-5/12 lg:max-w-md text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium text-justify lg:text-left">
                    {{ __('home.pricing_desc') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-16 items-stretch">
                @foreach (__('home.plans') as $plan)
                    @php
                        $hl = $plan['highlight'];
                        $discount = round((($plan['original'] - $plan['price']) / $plan['original']) * 100);
                    @endphp

                    <div
                        class="relative w-full px-6 lg:px-8 py-8 min-h-[350px] rounded-2xl transition-colors duration-150 ease-in-out flex flex-col justify-between group cursor-default
                    {{ $hl
                        ? 'bg-slate-900 dark:bg-white border border-slate-900 dark:border-white shadow-xl md:scale-105 z-10'
                        : 'bg-slate-100 dark:bg-slate-800 hover:bg-violet-500' }}">

                        @if ($hl)
                            <span
                                class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 whitespace-nowrap rounded-full bg-violet-500 px-4 py-1 text-xs font-bold uppercase tracking-wide text-white shadow-md">
                                {{ __('home.popular_badge') }}
                            </span>
                        @endif

                        <div class="flex flex-col gap-4">
                            <h4
                                class="font-extrabold text-lg mt-2 text-center transition-colors duration-150 ease-in-out
                            {{ $hl ? 'text-white dark:text-slate-900' : 'text-slate-700 dark:text-slate-300 group-hover:text-white' }}">
                                {{ $plan['name'] }}
                            </h4>

                            <div class="flex flex-col items-center gap-2 justify-center">
                                <div class="flex items-center gap-2">
                                    <span
                                        class="text-sm line-through transition-colors duration-150 ease-in-out
                                    {{ $hl
                                        ? 'text-slate-400 dark:text-slate-500'
                                        : 'text-slate-400 dark:text-slate-500 group-hover:text-violet-200' }}">
                                        Rp {{ number_format($plan['original'], 0, ',', '.') }}
                                    </span>
                                    <span
                                        class="rounded-full px-2 py-0.5 text-xs font-bold transition-colors duration-150 ease-in-out
                                    {{ $hl
                                        ? 'bg-violet-500 text-white'
                                        : 'bg-violet-500 text-white group-hover:bg-white group-hover:text-violet-600' }}">
                                        {{ __('home.save') }} {{ $discount }}%
                                    </span>
                                </div>
                                <h3
                                    class="font-extrabold text-3xl lg:text-4xl text-center transition-colors duration-150 ease-in-out
                                {{ $hl ? 'text-white dark:text-slate-900' : 'text-slate-700 dark:text-slate-300 group-hover:text-white' }}">
                                    Rp {{ number_format($plan['price'], 0, ',', '.') }}
                                </h3>
                            </div>

                            <ul
                                class="list-disc font-medium flex flex-col gap-2 mt-4 text-left pl-5 text-sm transition-colors duration-150 ease-in-out
                            {{ $hl ? 'text-slate-300 dark:text-slate-700' : 'text-slate-600 dark:text-slate-400 group-hover:text-white' }}">
                                @foreach ($plan['features'] as $feature)
                                    <li>{{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <a href="https://wa.me/6287835482333?text={{ urlencode(__('home.wa_plan_text') . ' ' . $plan['name']) }}"
                            target="_blank"
                            class="mt-8 font-bold w-full text-center p-2 rounded-full transition-colors duration-150 ease-in-out
                        {{ $hl
                            ? 'bg-violet-500 text-white border border-violet-500 hover:bg-violet-600 hover:border-violet-600'
                            : 'text-slate-700 dark:text-slate-200 border border-slate-400 group-hover:border-white group-hover:text-white hover:bg-white hover:text-violet-600' }}">
                            {{ __('home.get_plan') }}
                        </a>
                    </div>
                @endforeach
            </div>

            <div
                class="mt-12 flex flex-col lg:flex-row lg:items-center gap-6 lg:gap-10 rounded-2xl border border-slate-900 dark:border-white bg-slate-900 dark:bg-white px-6 py-6 lg:px-8 transition-colors duration-300 ease-in-out hover:border-violet-500 dark:hover:border-violet-400">

                <div class="lg:w-1/3">
                    <h4 class="mt-1 text-xl font-bold text-white dark:text-slate-900">
                        {{ __('home.enterprise_title') }}
                    </h4>
                    <p class="mt-1 text-sm text-slate-300 dark:text-slate-600">
                        {!! __('home.enterprise_desc') !!}
                    </p>
                </div>

                <div class="flex flex-wrap gap-2 lg:flex-1">
                    @foreach (__('home.enterprise_tags') as $tag)
                        <span
                            class="rounded-full border border-slate-700 dark:border-slate-300 px-3 py-1 text-xs font-medium text-slate-300 dark:text-slate-700">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>

                <a href="https://wa.me/6287835482333?text={{ urlencode(__('home.wa_enterprise')) }}"
                    target="_blank"
                    class="group/cta shrink-0 inline-flex items-center justify-center gap-3 rounded-full bg-white dark:bg-slate-900 py-2 pl-6 pr-2 text-sm font-bold text-slate-900 dark:text-white transition-colors duration-150 ease-in-out hover:bg-violet-500 hover:text-white dark:hover:bg-violet-500">
                    {{ __('home.enterprise_btn') }}
                    <span
                        class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-900 dark:bg-white text-white dark:text-slate-900 transition-colors duration-150 ease-in-out group-hover/cta:bg-white group-hover/cta:text-violet-600">
                        <i data-feather="arrow-up-right"
                            class="h-4 w-4 transition-transform duration-150 ease-in-out group-hover/cta:translate-x-0.5 group-hover/cta:-translate-y-0.5"></i>
                    </span>
                </a>
            </div>

        </div>
    </section>

    <section data-type-section
        class="relative isolate overflow-hidden bg-violet-500 min-h-svh flex items-center py-20 sm:py-24 lg:py-32 bg-cover bg-center"
        style="background-image: url('/assets/images/background-typography.jpg');">

        <div data-type-block class="mx-auto w-full max-w-7xl px-3 sm:px-6 lg:px-8">
            <h2 data-type-text
                class="font-body text-[16vw] sm:text-7xl md:text-8xl lg:text-9xl xl:text-[10rem] font-normal tracking-[-0.05em] sm:tracking-tighter text-balance leading-[1.05] text-white">
                {{ __('home.typo_1') }}
                <span class="text-slate-900 font-bold">{{ __('home.typo_2') }}</span>
                {{ __('home.typo_3') }}
                <span class="text-slate-900 font-bold text-[18vw] sm:text-8xl md:text-9xl lg:text-[11rem] xl:text-[14rem]">
                    {{ __('home.typo_4') }}
                </span>
            </h2>
        </div>
    </section>

    <section class="section py-24 bg-white dark:bg-slate-900 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="flex gap-2 items-center">
                <h2 class="text-sm font-semibold text-slate-500 dark:text-slate-300 uppercase">
                    <span class="font-bold text-slate-800 dark:text-white">//</span>
                    {{ __('home.services_eyebrow') }}
                </h2>
            </div>

            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-16 mt-6">
                <h3
                    class="font-primary section-title split lg:flex-1 text-3xl sm:text-4xl md:text-5xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-16 max-w-3xl mx-auto lg:mx-0">
                    {{ __('home.services_title_1') }} <span class="font-bold text-violet-500 dark:text-violet-300">{{ __('home.services_title_2') }}</span>
                    {{ __('home.services_title_3') }}
                </h3>

                <p
                    class="section-desc w-full lg:w-5/12 lg:max-w-md text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium text-justify lg:text-left">
                    {{ __('home.services_desc') }}
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mt-12 sm:mt-16">
                @foreach (__('home.services') as $service)
                    @php
                        $inv = $service['invert'];
                        $wide = str_contains($service['span'], 'col-span-2');
                    @endphp

                    <div
                        class="group relative flex min-h-[220px] sm:min-h-[240px] flex-col justify-between gap-10 rounded-2xl border p-6 sm:p-8 transition-colors duration-300 ease-in-out hover:bg-violet-500 hover:border-violet-500 dark:hover:bg-violet-500 dark:hover:border-violet-500 {{ $service['span'] }}
            {{ $inv
                ? 'bg-slate-900 border-slate-900 dark:bg-white dark:border-white'
                : 'bg-slate-50 border-slate-200 dark:bg-slate-800/50 dark:border-slate-800' }}">

                        <div class="flex items-start justify-between">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl border transition-colors duration-300 ease-in-out group-hover:bg-white group-hover:border-white group-hover:text-violet-600 dark:group-hover:bg-white dark:group-hover:border-white dark:group-hover:text-violet-600
                    {{ $inv
                        ? 'bg-slate-800 border-slate-700 text-white dark:bg-slate-100 dark:border-slate-200 dark:text-slate-900'
                        : 'bg-white border-slate-200 text-slate-700 dark:bg-slate-900 dark:border-slate-700 dark:text-slate-200' }}">
                                <i data-feather="{{ $service['icon'] }}" class="h-5 w-5"></i>
                            </div>

                            <span
                                class="font-primary text-sm font-semibold transition-colors duration-300 ease-in-out group-hover:text-violet-200 dark:group-hover:text-violet-200
                    {{ $inv ? 'text-slate-500 dark:text-slate-400' : 'text-slate-400 dark:text-slate-500' }}">
                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </span>
                        </div>

                        <div class="flex flex-col gap-2">
                            <h4
                                class="font-primary text-xl font-semibold transition-colors duration-300 ease-in-out group-hover:text-white dark:group-hover:text-white {{ $wide ? 'lg:text-2xl' : '' }}
                    {{ $inv ? 'text-white dark:text-slate-900' : 'text-slate-800 dark:text-white' }}">
                                {{ $service['title'] }}
                            </h4>
                            <p
                                class="text-sm leading-relaxed transition-colors duration-300 ease-in-out group-hover:text-violet-100 dark:group-hover:text-violet-100 {{ $wide ? 'max-w-md' : '' }}
                    {{ $inv ? 'text-slate-300 dark:text-slate-600' : 'text-slate-600 dark:text-slate-400' }}">
                                {{ $service['desc'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <section id="portfolio" class="section scroll-mt-16 w-full py-24 bg-white dark:bg-slate-900 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="flex gap-2 items-center">
                <h2 class="text-sm font-semibold text-slate-500 dark:text-slate-300 uppercase">
                    <span class="font-bold text-slate-800 dark:text-white">//</span>
                    {{ __('home.portfolio_eyebrow') }}
                </h2>
            </div>

            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-16 mt-6">
                <h3
                    class="font-primary section-title split lg:flex-1 text-3xl sm:text-4xl md:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-20 max-w-3xl mx-auto lg:mx-0">
                    {{ __('home.portfolio_title_1') }} <span class="font-bold text-violet-500 dark:text-violet-300">{{ __('home.portfolio_title_2') }}</span> {{ __('home.portfolio_title_3') }}
                </h3>

                <div class="w-full lg:w-5/12 lg:max-w-md flex flex-col gap-5">
                    <p
                        class="section-desc text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium text-justify lg:text-left">
                        {{ __('home.portfolio_desc') }}
                    </p>

                    <a href="{{ lroute('portfolio.index') }}"
                        class="group/link inline-flex w-fit items-center gap-2 text-sm font-semibold text-slate-800 dark:text-white transition-colors duration-150 ease-in-out hover:text-violet-600 dark:hover:text-violet-300">
                        {{ __('home.portfolio_link') }}
                        <i data-feather="arrow-right"
                            class="h-4 w-4 transition-transform duration-150 ease-in-out group-hover/link:translate-x-1"></i>
                    </a>
                </div>
            </div>

            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mt-12 sm:mt-16">
                @foreach ($portfolios as $portfolio)
                    <a href="{{ lroute('portfolio.show', $portfolio->slug) }}"
                        class="group relative block h-[400px] sm:h-[440px] overflow-hidden rounded-2xl bg-slate-50 dark:bg-slate-800/50 p-6 transition-colors duration-300 ease-in-out hover:bg-slate-900 dark:hover:bg-white">

                        <h4
                            class="line-clamp-1 font-primary text-2xl font-bold leading-6 text-slate-800 dark:text-white transition-colors duration-300 ease-in-out group-hover:text-white dark:group-hover:text-slate-900">
                            {{ $portfolio->name }}
                        </h4>

                        <p
                            class="mt-3 line-clamp-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400 transition-colors duration-300 ease-in-out group-hover:text-slate-300 dark:group-hover:text-slate-600">
                            {{ $portfolio->summary }}
                        </p>

                        <div
                            class="absolute inset-x-0 bottom-0 z-30 h-[210px] sm:h-[250px] overflow-hidden rounded-t-2xl bg-slate-200 dark:bg-slate-700 transition-transform duration-300 ease-in-out">
                            <img src="{{ asset('storage/' . $portfolio->thumbnail) }}" alt="{{ $portfolio->name }}"
                                loading="lazy"
                                class="h-full w-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-[1.04]">
                        </div>

                        <div
                            class="absolute inset-x-4 bottom-4 z-20 h-[210px] sm:h-[250px] rounded-t-2xl bg-slate-300/60 dark:bg-slate-600/50 transition-transform duration-300 ease-in-out group-hover:translate-y-[-10px]">
                        </div>

                        <div
                            class="absolute inset-x-8 bottom-8 z-10 h-[210px] sm:h-[250px] rounded-t-2xl bg-slate-300/30 dark:bg-slate-600/30 transition-transform duration-300 ease-in-out group-hover:translate-y-[-16px]">
                        </div>

                        <div
                            class="absolute bottom-4 right-4 z-40 flex h-11 w-11 items-center justify-center rounded-full bg-white dark:bg-slate-900 text-slate-800 dark:text-white shadow-lg transition-colors duration-300 ease-in-out group-hover:bg-violet-500 group-hover:text-white dark:group-hover:bg-violet-500 dark:group-hover:text-white">
                            <i data-feather="arrow-up-right"
                                class="h-5 w-5 transition-transform duration-300 ease-in-out"></i>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
    </section>

    <section class="section py-24 bg-slate-50 dark:bg-slate-950 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="flex gap-2 items-center">
                <h2 class="text-sm font-semibold text-slate-500 dark:text-slate-300 uppercase">
                    <span class="font-bold text-slate-800 dark:text-white">//</span>
                    {{ __('home.testi_eyebrow') }}
                </h2>
            </div>

            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-16 mt-6 mb-24">
                <h3
                    class="font-primary section-title split lg:flex-1 text-3xl sm:text-4xl md:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-20 max-w-3xl mx-auto lg:mx-0">
                    {{ __('home.testi_title_1') }} <span class="font-bold text-violet-500 dark:text-violet-300">{{ __('home.testi_title_2') }}</span> {{ __('home.testi_title_3') }}
                </h3>

                <p
                    class="section-desc w-full lg:w-5/12 lg:max-w-md text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium text-justify lg:text-left">
                    {{ __('home.testi_desc') }}
                </p>
            </div>

            @php
                if (!function_exists('censorText')) {
                    function censorText($text)
                    {
                        return preg_replace_callback(
                            '/\b(\w)(\w+)\b/u',
                            function ($matches) {
                                return $matches[1] . str_repeat('*', mb_strlen($matches[2]));
                            },
                            $text,
                        );
                    }
                }
            @endphp

            <div x-data="{
                canPrev: false,
                canNext: true,
                progress: 0,
                update() {
                    const el = this.$refs.track;
                    const max = el.scrollWidth - el.clientWidth;
                    this.canPrev = el.scrollLeft > 4;
                    this.canNext = el.scrollLeft < max - 4;
                    this.progress = max > 0 ? el.scrollLeft / max : 1;
                },
                scrollByItem(dir) {
                    const el = this.$refs.track;
                    const item = el.children[0];
                    const step = item.offsetWidth + 32;
                    el.scrollBy({ left: dir * step, behavior: 'smooth' });
                }
            }" x-init="$nextTick(() => update())" @resize.window.debounce.150ms="update()"
                class="mt-12 sm:mt-16">

                <div x-ref="track" @scroll.passive="update()"
                    class="flex gap-8 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-2 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                    @foreach (__('home.testimonials') as $testimonial)
                        <figure
                            class="snap-start shrink-0 w-[85%] sm:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.334rem)] flex flex-col justify-between gap-8 border-l border-slate-300 dark:border-slate-800 pl-6">

                            <div class="flex flex-col gap-5">
                                <svg viewBox="0 0 24 24" fill="currentColor"
                                    class="h-8 w-8 text-violet-500 dark:text-violet-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.17 6C4.86 6 3 7.86 3 10.17V17c0 .55.45 1 1 1h5c.55 0 1-.45 1-1v-5c0-.55-.45-1-1-1H6.2c.1-1.1 1-2 2.1-2h.2c.55 0 1-.45 1-1V7c0-.55-.45-1-1-1H7.17zM17.17 6C14.86 6 13 7.86 13 10.17V17c0 .55.45 1 1 1h5c.55 0 1-.45 1-1v-5c0-.55-.45-1-1-1h-2.8c.1-1.1 1-2 2.1-2h.2c.55 0 1-.45 1-1V7c0-.55-.45-1-1-1h-1.33z" />
                                </svg>

                                <blockquote class="text-base leading-relaxed text-slate-700 dark:text-slate-300">
                                    {{ $testimonial['message'] }}
                                </blockquote>
                            </div>

                            <figcaption class="flex items-center gap-3">
                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-slate-900 dark:bg-white text-xs font-bold uppercase text-white dark:text-slate-900">
                                    {{ \Illuminate\Support\Str::of($testimonial['name'])->explode(' ')->map(fn($w) => mb_substr($w, 0, 1))->take(2)->implode('') }}
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-sm font-semibold text-slate-800 dark:text-white">
                                        {{ censorText($testimonial['name']) }}
                                    </span>
                                    <span class="text-xs font-medium text-slate-500 dark:text-slate-400">
                                        {{ censorText($testimonial['username']) }}
                                    </span>
                                </div>
                            </figcaption>
                        </figure>
                    @endforeach
                </div>

                <div class="mt-10 flex items-center gap-6">
                    <div class="h-px flex-1 bg-slate-300 dark:bg-slate-800 relative overflow-hidden">
                        <div class="absolute inset-y-0 left-0 w-full origin-left bg-slate-800 dark:bg-white transition-transform duration-300 ease-out"
                            :style="`transform: scaleX(${Math.max(0.15, progress)})`"></div>
                    </div>

                    <div class="flex items-center gap-2">
                        <button type="button" @click="scrollByItem(-1)" :disabled="!canPrev"
                            aria-label="{{ __('home.testi_prev') }}"
                            class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-200 transition-colors duration-150 ease-in-out hover:bg-slate-900 hover:text-white hover:border-slate-900 dark:hover:bg-white dark:hover:text-slate-900 dark:hover:border-white disabled:opacity-30 disabled:pointer-events-none">
                            <i data-feather="arrow-left" class="h-4 w-4"></i>
                        </button>
                        <button type="button" @click="scrollByItem(1)" :disabled="!canNext"
                            aria-label="{{ __('home.testi_next') }}"
                            class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-200 transition-colors duration-150 ease-in-out hover:bg-slate-900 hover:text-white hover:border-slate-900 dark:hover:bg-white dark:hover:text-slate-900 dark:hover:border-white disabled:opacity-30 disabled:pointer-events-none">
                            <i data-feather="arrow-right" class="h-4 w-4"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @if ($articles->isNotEmpty())
        <section class="section w-full py-24 bg-white dark:bg-slate-900 transition-colors duration-300 ease-in-out">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">

                <div class="flex gap-2 items-center">
                    <h2 class="text-sm font-semibold text-slate-500 dark:text-slate-300 uppercase">
                        <span class="font-bold text-slate-800 dark:text-white">//</span>
                        {{ __('home.article_eyebrow') }}
                    </h2>
                </div>

                <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-16 mt-6">
                    <h3
                        class="font-primary section-title split lg:flex-1 text-3xl sm:text-4xl md:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-20 max-w-3xl mx-auto lg:mx-0">
                        {{ __('home.article_title_1') }} <span class="font-bold text-violet-500 dark:text-violet-300">{{ __('home.article_title_2') }}</span> {{ __('home.article_title_3') }}
                    </h3>

                    <div class="w-full lg:w-5/12 lg:max-w-md flex flex-col gap-5">
                        <p
                            class="section-desc text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium text-justify lg:text-left">
                            {{ __('home.article_desc') }}
                        </p>

                        <a href="{{ lroute('article.index') }}"
                            class="group/link inline-flex w-fit items-center gap-2 text-sm font-semibold text-slate-800 dark:text-white transition-colors duration-150 ease-in-out hover:text-violet-600 dark:hover:text-violet-300">
                            {{ __('home.article_link') }}
                            <i data-feather="arrow-right"
                                class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                        </a>
                    </div>
                </div>

                <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mt-12 sm:mt-16">
                    @foreach ($articles as $article)
                        <a href="{{ lroute('article.show', $article->slug) }}"
                            class="group flex flex-col overflow-hidden rounded-2xl bg-slate-50 transition-colors duration-300 ease-in-out hover:bg-slate-900 dark:bg-slate-800/50 dark:hover:bg-slate-700/60">

                            <div
                                class="relative aspect-[16/10] w-full overflow-hidden rounded-b-4xl bg-slate-200 dark:bg-slate-700">
                                @if ($article->thumbnail)
                                    <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}"
                                        loading="lazy"
                                        class="h-full w-full object-cover object-center transition-transform duration-500 ease-out group-hover:scale-105">
                                @endif

                                <span
                                    class="absolute left-4 top-4 rounded-full bg-white/90 px-3 py-1 text-xs font-semibold text-slate-800 backdrop-blur-sm dark:bg-slate-900/80 dark:text-white">
                                    {{ $article->category->name ?? __('home.article_fallback_cat') }}
                                </span>
                            </div>

                            <div class="flex flex-1 flex-col gap-3 p-6">
                                <div
                                    class="flex items-center gap-2 text-xs font-medium text-slate-500 transition-colors duration-300 ease-in-out group-hover:text-slate-400 dark:text-slate-400 dark:group-hover:text-slate-300">
                                    <i data-feather="calendar" class="h-3.5 w-3.5"></i>
                                    <span>{{ $article->published_date }}</span>
                                </div>

                                <h4
                                    class="font-primary line-clamp-2 text-xl font-bold leading-snug text-slate-800 transition-colors duration-300 ease-in-out group-hover:text-white dark:text-white">
                                    {{ $article->title }}
                                </h4>

                                <p
                                    class="line-clamp-3 text-sm leading-relaxed text-slate-600 transition-colors duration-300 ease-in-out group-hover:text-slate-300 dark:text-slate-400 dark:group-hover:text-slate-300">
                                    {{ $article->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($article->content), 120) }}
                                </p>

                                <div
                                    class="mt-auto flex items-center justify-between gap-4 border-t border-slate-200 pt-4 transition-colors duration-300 ease-in-out group-hover:border-slate-700 dark:border-slate-700 dark:group-hover:border-slate-600">
                                    <div class="flex min-w-0 items-center gap-3">
                                        <span
                                            class="line-clamp-1 text-sm font-semibold text-slate-700 transition-colors duration-300 ease-in-out group-hover:text-white dark:text-slate-200">
                                            {{ $article->author->name ?? __('home.article_fallback_author') }}
                                        </span>
                                    </div>

                                    <span
                                        class="inline-flex shrink-0 items-center gap-1.5 text-sm font-semibold text-slate-800 transition-colors duration-300 ease-in-out group-hover:text-violet-300 dark:text-white">
                                        {{ __('home.article_read') }}
                                        <i data-feather="arrow-up-right"
                                            class="h-4 w-4 transition-transform duration-300 ease-in-out group-hover:-translate-y-0.5 group-hover:translate-x-0.5"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

            </div>
        </section>
    @endif

    <section
        class="section relative isolate overflow-hidden py-24 sm:py-32 bg-slate-950 dark:bg-violet-500 transition-colors duration-500">
        <div class="mx-auto max-w-7xl text-center px-6">

            <img src="{{ asset('assets/logos/elvacode-logo.webp') }}" alt="Elvacode Logo"
                class="w-24 sm:w-28 md:w-32 mx-auto mb-8 sm:mb-10 invert dark:invert-0 transition duration-300">

            <div class="flex justify-center">
                <h2 class="text-sm font-semibold text-slate-400 dark:text-violet-100 uppercase">
                    <span class="font-bold text-white dark:text-slate-950">//</span>
                    {{ __('home.cta_eyebrow') }}
                </h2>
            </div>

            <h3
                class="font-primary section-title split mt-6 text-3xl sm:text-4xl md:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-white dark:text-white leading-normal sm:leading-10 md:leading-20">
                {{ __('home.cta_title_1') }}
                <span class="font-bold text-violet-300 dark:text-slate-950">{{ __('home.cta_title_2') }}</span>
            </h3>

            <p
                class="section-desc mt-6 sm:mt-8 mx-auto max-w-xl text-sm sm:text-base leading-relaxed text-slate-300 dark:text-violet-50 font-medium">
                {{ __('home.cta_desc_1') }} <span class="font-semibold text-white dark:text-slate-950">{{ __('home.cta_desc_2') }}</span>{{ __('home.cta_desc_3') }}
            </p>

            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ lroute('contact.index') }}"
                    class="group/cta w-full sm:w-auto inline-flex items-center justify-center gap-3 rounded-full bg-white dark:bg-slate-950 py-2 pl-6 pr-2 text-sm font-bold text-slate-900 dark:text-white transition-colors duration-150 ease-in-out hover:bg-violet-500 hover:text-white dark:hover:bg-white dark:hover:text-violet-600">
                    {{ __('home.cta_btn_consult') }}
                    <span
                        class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-900 dark:bg-white text-white dark:text-slate-950 transition-colors duration-150 ease-in-out group-hover/cta:bg-white group-hover/cta:text-violet-600 dark:group-hover/cta:bg-violet-500 dark:group-hover/cta:text-white">
                        <i data-feather="arrow-up-right"
                            class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                    </span>
                </a>

                <a href="{{ lroute('portfolio.index') }}"
                    class="group/cta w-full sm:w-auto inline-flex items-center justify-center gap-3 rounded-full border border-slate-600 dark:border-white/60 py-2 pl-6 pr-2 text-sm font-bold text-white dark:text-white transition-colors duration-150 ease-in-out hover:border-violet-400 hover:text-violet-300 dark:hover:border-white dark:hover:bg-white dark:hover:text-violet-600">
                    {{ __('home.cta_btn_portfolio') }}
                    <span
                        class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-800 dark:bg-violet-400 text-white dark:text-white transition-colors duration-150 ease-in-out group-hover/cta:bg-violet-500 group-hover/cta:text-white dark:group-hover/cta:bg-violet-500">
                        <i data-feather="arrow-right" class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>
@endsection