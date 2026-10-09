@props(['variant' => 'a'])

@php
    $bar = 'rounded-full bg-slate-200 dark:bg-slate-700';
    $ink = 'rounded bg-slate-800 dark:bg-white';
    $box = 'rounded-lg border border-slate-200 bg-slate-50 dark:border-slate-700 dark:bg-slate-800';
@endphp

<div aria-hidden="true" class="aspect-[16/10] w-full select-none overflow-hidden bg-white p-3 dark:bg-slate-900 sm:p-5">
    @if ($variant === 'old')
        <div class="opacity-70">
            <div class="h-3 w-full rounded-sm bg-slate-300 dark:bg-slate-600"></div>
            <div class="mt-2 flex gap-1.5">
                @for ($i = 0; $i < 6; $i++)
                    <div class="h-2 flex-1 rounded-sm bg-slate-200 dark:bg-slate-700"></div>
                @endfor
            </div>
            <div class="mt-3 h-14 w-full rounded-sm bg-slate-200 dark:bg-slate-700 sm:h-20"></div>
            <div class="mt-3 grid grid-cols-3 gap-2">
                @for ($i = 0; $i < 3; $i++)
                    <div class="space-y-1.5">
                        <div class="h-1.5 w-full rounded-sm bg-slate-300 dark:bg-slate-600"></div>
                        <div class="h-1.5 w-full rounded-sm bg-slate-200 dark:bg-slate-700"></div>
                        <div class="h-1.5 w-4/5 rounded-sm bg-slate-200 dark:bg-slate-700"></div>
                        <div class="h-1.5 w-full rounded-sm bg-slate-200 dark:bg-slate-700"></div>
                    </div>
                @endfor
            </div>
        </div>
    @else
        <div class="flex items-center justify-between">
            <div class="h-2 w-14 {{ $ink }}"></div>
            <div class="hidden gap-3 sm:flex">
                @for ($i = 0; $i < 4; $i++)
                    <div class="h-1.5 w-8 {{ $bar }}"></div>
                @endfor
            </div>
            <div class="h-4 w-12 rounded-full bg-violet-500"></div>
        </div>

        @if ($variant === 'a')
            <div class="mt-6 grid grid-cols-5 items-center gap-4 sm:mt-8">
                <div class="col-span-3 space-y-2">
                    <div class="h-1.5 w-12 rounded-full bg-violet-500"></div>
                    <div class="h-3 w-4/5 sm:h-4 {{ $ink }}"></div>
                    <div class="h-3 w-3/5 sm:h-4 {{ $ink }}"></div>
                    <div class="h-1.5 w-full {{ $bar }}"></div>
                    <div class="h-1.5 w-4/5 {{ $bar }}"></div>
                    <div class="flex gap-2 pt-2">
                        <div class="h-4 w-14 rounded-full bg-violet-500 sm:h-5"></div>
                        <div class="h-4 w-14 rounded-full border border-slate-300 dark:border-slate-600 sm:h-5"></div>
                    </div>
                </div>
                <div class="col-span-2 aspect-[4/5] {{ $box }}"></div>
            </div>
        @elseif ($variant === 'b')
            <div class="mx-auto mt-6 flex max-w-[70%] flex-col items-center space-y-2 text-center sm:mt-10">
                <div class="h-1.5 w-12 rounded-full bg-violet-500"></div>
                <div class="h-3 w-full sm:h-4 {{ $ink }}"></div>
                <div class="h-3 w-2/3 sm:h-4 {{ $ink }}"></div>
                <div class="h-1.5 w-4/5 {{ $bar }}"></div>
                <div class="h-4 w-16 rounded-full bg-violet-500 sm:h-5"></div>
            </div>
        @else
            <div class="mt-6 grid grid-cols-2 items-center gap-4 sm:mt-8">
                <div class="aspect-[4/3] {{ $box }}"></div>
                <div class="space-y-2">
                    <div class="h-1.5 w-12 rounded-full bg-violet-500"></div>
                    <div class="h-3 w-full sm:h-4 {{ $ink }}"></div>
                    <div class="h-3 w-3/5 sm:h-4 {{ $ink }}"></div>
                    <div class="h-1.5 w-full {{ $bar }}"></div>
                    <div class="h-1.5 w-3/4 {{ $bar }}"></div>
                </div>
            </div>
        @endif

        <div class="mt-6 grid grid-cols-3 gap-3 sm:mt-8">
            @for ($i = 0; $i < 3; $i++)
                <div class="h-10 sm:h-14 {{ $box }}"></div>
            @endfor
        </div>
    @endif
</div>
