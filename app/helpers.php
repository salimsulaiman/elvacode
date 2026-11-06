<?php

/**
 * Pengganti route(): otomatis memakai route "en." saat bahasa aktif English.
 */
function lroute(string $name, mixed $parameters = [], bool $absolute = true): string
{
    return route(app()->getLocale() === 'en' ? "en.$name" : $name, $parameters, $absolute);
}

/**
 * URL halaman yang sedang dibuka dalam bahasa lain (untuk tombol ID/EN).
 */
function switch_locale_url(string $locale): string
{
    $route = request()->route();

    if (! $route || ! $route->getName()) {
        return url($locale === 'en' ? '/en' : '/');
    }

    $name = preg_replace('/^en\./', '', $route->getName());

    return route($locale === 'en' ? "en.$name" : $name, $route->parameters());
}