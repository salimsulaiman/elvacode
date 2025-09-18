<footer class="bg-slate-100 dark:bg-gray-950">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 md:grid-cols-4">
            <div>
                <img src="{{ asset('assets/logos/elvacode-logo.webp') }}" alt=""
                    class="w-40 mb-6 dark:invert mx-auto md:mx-0">
                <p
                    class="mt-4 text-base md:text-sm text-gray-600 dark:text-gray-400 leading-7 font-semibold text-center md:text-left">
                    Kami membantu bisnis Anda hadir secara digital dengan website profesional,
                    cepat, dan modern yang mendukung pertumbuhan usaha.
                </p>
            </div>
            <div class="text-center md:text-left">
                <h4 class="text-base md:text-sm font-bold text-gray-900 dark:text-gray-100">Layanan</h4>
                <ul class="mt-4 space-y-3 text-base md:text-sm text-gray-600 dark:text-gray-400">
                    <li><a href="#"
                            class="hover:text-violet-600 dark:hover:text-violet-400 transition font-semibold">Pembuatan
                            Website</a></li>
                    <li><a href="#"
                            class="hover:text-violet-600 dark:hover:text-violet-400 transition font-semibold">Toko
                            Online</a></li>
                    <li><a href="#"
                            class="hover:text-violet-600 dark:hover:text-violet-400 transition font-semibold">Company
                            Profile</a></li>
                    <li><a href="#"
                            class="hover:text-violet-600 dark:hover:text-violet-400 transition font-semibold">Custom
                            Development</a></li>
                </ul>
            </div>
            <div class="text-center md:text-left">
                <h4 class="text-base md:text-sm font-bold text-gray-900 dark:text-gray-100">Perusahaan</h4>
                <ul class="mt-4 space-y-3 text-base md:text-sm text-gray-600 dark:text-gray-400">
                    <li><a href="{{ route('about.index') }}"
                            class="hover:text-violet-600 dark:hover:text-violet-400 transition font-semibold">Tentang
                            Kami</a></li>
                    <li><a href="{{ route('portfolio.index') }}"
                            class="hover:text-violet-600 dark:hover:text-violet-400 transition font-semibold">Portofolio</a>
                    </li>
                    <li><a href="{{ route('article.index') }}"
                            class="hover:text-violet-600 dark:hover:text-violet-400 transition font-semibold">Artikel &
                            Insight</a></li>
                </ul>
            </div>
            <div class="text-center md:text-left">
                <h4 class="text-base md:text-sm font-bold text-gray-900 dark:text-gray-100">Kontak</h4>
                <ul class="mt-4 space-y-3 text-base md:text-sm text-gray-600 dark:text-gray-400">
                    <li><span class="block font-bold">Brebes, Jawa Tengah, Indonesia</span></li>
                    <li><a href="mailto:support@elvacode.com"
                            class="hover:text-violet-600 dark:hover:text-violet-400 transition font-semibold">support@elvacode.com</a>
                    </li>
                    <li><a href="https://wa.me/6287835482333"
                            class="hover:text-violet-600 dark:hover:text-violet-400 transition font-semibold"
                            target="_blank">+62
                            877-7642-1079</a></li>
                    <li class="flex justify-center md:justify-start space-x-4 pt-2 text-xl">
                        <a href="https://facebook.com" target="_blank"
                            class="hover:text-violet-600 dark:hover:text-violet-400 transition font-semibold">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://instagram.com" target="_blank"
                            class="hover:text-violet-600 dark:hover:text-violet-400 transition font-semibold">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/6287835482333?text=Halo%20Elvacode,%20saya%20tertarik%20dengan%20jasa%20pembuatan%20website.%20Bisa%20minta%20info%20lebih%20lanjut?"
                            target="_blank"
                            class="hover:text-violet-600 dark:hover:text-violet-400 transition font-semibold">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div
            class="mt-12 border-t border-gray-200 dark:border-gray-800 pt-6 flex flex-col md:flex-row items-center justify-between text-base md:text-sm text-gray-500 dark:text-gray-400">
            <p class="text-center md:text-left">&copy; 2025 Elvacode. All rights reserved.</p>
            <div class="mt-4 md:mt-0 flex space-x-6">
                <a href="{{ route('provicy-policy.index') }}"
                    class="hover:text-violet-600 dark:hover:text-violet-400 transition font-semibold">Kebijakan
                    Privasi</a>
                <a href="#"
                    class="hover:text-violet-600 dark:hover:text-violet-400 transition font-semibold">Syarat &
                    Ketentuan</a>
            </div>
        </div>
    </div>
</footer>
