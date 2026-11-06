<footer
    class="font-body bg-slate-100 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800 transition-colors duration-300 ease-in-out">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 pt-16 sm:pt-20 pb-8">

        <div class="grid grid-cols-2 gap-x-6 gap-y-12 lg:grid-cols-12 lg:gap-8">

            <div class="col-span-2 lg:col-span-5 flex flex-col items-center text-center lg:items-start lg:text-left">
                <a href="{{ lroute('home.index') }}" aria-label="Elvacode">
                    <img src="{{ asset('assets/logos/elvacode-logo.webp') }}" alt="{{ __('footer.logo_alt') }}"
                        class="w-36 dark:invert">
                </a>

                <p class="mt-6 max-w-sm text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                    {{ __('footer.description') }}
                </p>

                <div class="mt-8 flex items-center gap-3">
                    <a href="https://www.instagram.com/elvacodecom" target="_blank" rel="noopener"
                        aria-label="Instagram"
                        class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-300 transition-colors duration-150 ease-in-out hover:bg-slate-900 hover:border-slate-900 hover:text-white dark:hover:bg-white dark:hover:border-white dark:hover:text-slate-900">
                        <i class="fa fa-instagram text-lg"></i>
                    </a>
                    <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook"
                        class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-300 transition-colors duration-150 ease-in-out hover:bg-slate-900 hover:border-slate-900 hover:text-white dark:hover:bg-white dark:hover:border-white dark:hover:text-slate-900">
                        <i class="fa fa-facebook text-lg"></i>
                    </a>
                    <a href="https://wa.me/6287835482333?text={{ rawurlencode(__('footer.wa_contact')) }}"
                        target="_blank" rel="noopener" aria-label="WhatsApp"
                        class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-300 transition-colors duration-150 ease-in-out hover:bg-slate-900 hover:border-slate-900 hover:text-white dark:hover:bg-white dark:hover:border-white dark:hover:text-slate-900">
                        <i class="fa fa-whatsapp text-lg"></i>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-2 lg:col-start-6">
                <h4 class="font-primary text-sm font-semibold uppercase text-slate-500 dark:text-slate-400">
                    <span class="font-bold text-slate-800 dark:text-white">//</span>
                    {{ __('footer.services') }}
                </h4>
                <ul class="mt-6 space-y-3 text-sm">
                    <li>
                        <a href="{{ lroute('service.company-profile') }}"
                            class="font-medium text-slate-600 dark:text-slate-400 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:hover:text-violet-300">
                            {{ __('footer.website_making') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ lroute('service.online-store') }}"
                            class="font-medium text-slate-600 dark:text-slate-400 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:hover:text-violet-300">
                            {{ __('footer.online_store') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ lroute('service.company-profile') }}"
                            class="font-medium text-slate-600 dark:text-slate-400 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:hover:text-violet-300">
                            {{ __('footer.company_profile') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ lroute('service.custom') }}"
                            class="font-medium text-slate-600 dark:text-slate-400 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:hover:text-violet-300">
                            {{ __('footer.custom_dev') }}
                        </a>
                    </li>
                </ul>
            </div>

            <div class="lg:col-span-2">
                <h4 class="font-primary text-sm font-semibold uppercase text-slate-500 dark:text-slate-400">
                    <span class="font-bold text-slate-800 dark:text-white">//</span>
                    {{ __('footer.company') }}
                </h4>
                <ul class="mt-6 space-y-3 text-sm">
                    <li>
                        <a href="{{ lroute('about.index') }}"
                            class="font-medium text-slate-600 dark:text-slate-400 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:hover:text-violet-300">
                            {{ __('footer.about') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ lroute('portfolio.index') }}"
                            class="font-medium text-slate-600 dark:text-slate-400 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:hover:text-violet-300">
                            {{ __('footer.portfolio') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ lroute('article.index') }}"
                            class="font-medium text-slate-600 dark:text-slate-400 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:hover:text-violet-300">
                            {{ __('footer.article') }}
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-span-2 sm:col-span-1 lg:col-span-3">
                <h4 class="font-primary text-sm font-semibold uppercase text-slate-500 dark:text-slate-400">
                    <span class="font-bold text-slate-800 dark:text-white">//</span>
                    {{ __('footer.contact') }}
                </h4>
                <ul class="mt-6 space-y-4 text-sm">
                    <li class="flex items-start gap-3 text-slate-600 dark:text-slate-400">
                        <i data-feather="map-pin" class="mt-0.5 h-4 w-4 shrink-0 text-slate-800 dark:text-white"></i>
                        <span class="font-medium">{{ __('footer.location') }}</span>
                    </li>
                    <li>
                        <a href="mailto:admin@elvacode.com"
                            class="group/link flex items-start gap-3 font-medium text-slate-600 dark:text-slate-400 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:hover:text-violet-300">
                            <i data-feather="mail" class="mt-0.5 h-4 w-4 shrink-0 text-slate-800 dark:text-white"></i>
                            admin@elvacode.com
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/6287835482333" target="_blank" rel="noopener"
                            class="group/link flex items-start gap-3 font-medium text-slate-600 dark:text-slate-400 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:hover:text-violet-300">
                            <i data-feather="phone" class="mt-0.5 h-4 w-4 shrink-0 text-slate-800 dark:text-white"></i>
                            +62 878-3548-2333
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="mt-14 sm:mt-16 flex flex-col-reverse items-center justify-between gap-4 border-t border-slate-200 dark:border-slate-800 pt-6 text-sm text-slate-500 dark:text-slate-400 md:flex-row">
            <p class="text-center md:text-left">
                &copy; {{ date('Y') }} Elvacode. {{ __('footer.copyright') }}
            </p>
            <div class="flex items-center gap-6">
                <a href="{{ lroute('privacy-policy.index') }}"
                    class="font-medium transition-colors duration-150 ease-in-out hover:text-violet-600 dark:hover:text-violet-300">
                    {{ __('footer.privacy') }}
                </a>
                <a href="{{ lroute('terms-and-conditions.index') }}"
                    class="font-medium transition-colors duration-150 ease-in-out hover:text-violet-600 dark:hover:text-violet-300">
                    {{ __('footer.terms') }}
                </a>
            </div>
        </div>

    </div>
</footer>