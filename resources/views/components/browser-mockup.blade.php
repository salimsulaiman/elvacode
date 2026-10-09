@props([
    'url' => 'namabisnis.com',
    'src' => null,
    'srcMobile' => null,
    'alt' => '',
    'ratio' => 'aspect-[16/10]',
    'scroll' => false,
])

<div
    {{ $attributes->class(['overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm dark:border-slate-700 dark:bg-slate-900 dark:shadow-black/40']) }}>
    <div
        class="flex items-center gap-2 border-b border-slate-200 bg-slate-50 px-3 py-2 sm:gap-3 sm:px-4 sm:py-2.5 dark:border-slate-700 dark:bg-slate-800">
        <div class="flex gap-1.5" aria-hidden="true">
            <span class="h-2 w-2 rounded-full bg-slate-300 sm:h-2.5 sm:w-2.5 dark:bg-slate-600"></span>
            <span class="h-2 w-2 rounded-full bg-slate-300 sm:h-2.5 sm:w-2.5 dark:bg-slate-600"></span>
            <span class="h-2 w-2 rounded-full bg-slate-300 sm:h-2.5 sm:w-2.5 dark:bg-slate-600"></span>
        </div>
        <div
            class="mx-auto min-w-0 max-w-xs flex-1 truncate rounded-md border border-slate-200 bg-white px-3 py-1 text-center text-[10px] font-medium text-slate-500 sm:text-[11px] dark:border-slate-700 dark:bg-slate-900 dark:text-slate-400">
            {{ $url }}
        </div>
        <div class="hidden w-10 sm:block" aria-hidden="true"></div>
    </div>

    @if ($src && $scroll)
        <div data-browser-viewport class="relative w-full overflow-hidden {{ $ratio }}">
            <picture>
                @if ($srcMobile)
                    <source media="(max-width: 767px)" srcset="{{ $srcMobile }}">
                @endif
                <img data-browser-image src="{{ $src }}" alt="{{ $alt }}" decoding="async"
                    class="absolute left-0 top-0 block h-auto w-full max-w-none will-change-transform">
            </picture>
        </div>
    @elseif ($src)
        <picture>
            @if ($srcMobile)
                <source media="(max-width: 767px)" srcset="{{ $srcMobile }}">
            @endif
            <img src="{{ $src }}" alt="{{ $alt }}" loading="lazy" decoding="async"
                class="block w-full object-cover object-top {{ $ratio }}">
        </picture>
    @else
        {{ $slot }}
    @endif
</div>
