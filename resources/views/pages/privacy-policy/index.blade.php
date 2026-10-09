@extends('components.layouts.app')

@section('title', 'Kebijakan dan Privasi')

@section('content')
    <section
        class="section font-body relative w-full bg-violet-600 pt-36 sm:pt-44 pb-16 sm:pb-24 border-b border-violet-400/40">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">

            <nav aria-label="Breadcrumb">
                <ol class="flex items-center justify-center gap-2 text-sm font-medium text-violet-100">
                    <li>
                        <a href="/" class="transition-colors duration-150 ease-in-out hover:text-white">
                            Home
                        </a>
                    </li>
                    <li aria-hidden="true">/</li>
                    <li class="text-white font-semibold">Kebijakan Privasi</li>
                </ol>
            </nav>

            <h1
                class="font-primary section-title split mt-6 mx-auto max-w-4xl text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-white leading-[1.1]">
                Kebijakan
                <span class="font-bold text-slate-900">Privasi</span>
            </h1>
        </div>
    </section>

    <section class="w-full py-16 sm:py-24 bg-white dark:bg-slate-900 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-[16rem_minmax(0,1fr)] lg:gap-16">

                <aside class="hidden lg:block">
                    <div class="sticky top-32">
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                            Daftar Isi
                        </p>
                        <ul class="mt-4 flex flex-col border-l border-slate-200 text-sm font-medium dark:border-slate-800">
                            <li>
                                <a href="#informasi"
                                    class="-ml-px block border-l border-transparent py-2 pl-4 text-slate-600 transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:text-slate-400 dark:hover:border-violet-300 dark:hover:text-violet-300">
                                    Informasi yang Kami Kumpulkan
                                </a>
                            </li>
                            <li>
                                <a href="#penggunaan"
                                    class="-ml-px block border-l border-transparent py-2 pl-4 text-slate-600 transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:text-slate-400 dark:hover:border-violet-300 dark:hover:text-violet-300">
                                    Penggunaan Informasi
                                </a>
                            </li>
                            <li>
                                <a href="#perlindungan"
                                    class="-ml-px block border-l border-transparent py-2 pl-4 text-slate-600 transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:text-slate-400 dark:hover:border-violet-300 dark:hover:text-violet-300">
                                    Perlindungan Data
                                </a>
                            </li>
                            <li>
                                <a href="#pihak-ketiga"
                                    class="-ml-px block border-l border-transparent py-2 pl-4 text-slate-600 transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:text-slate-400 dark:hover:border-violet-300 dark:hover:text-violet-300">
                                    Pengungkapan Pihak Ketiga
                                </a>
                            </li>
                            <li>
                                <a href="#cookie"
                                    class="-ml-px block border-l border-transparent py-2 pl-4 text-slate-600 transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:text-slate-400 dark:hover:border-violet-300 dark:hover:text-violet-300">
                                    Cookie dan Teknologi Serupa
                                </a>
                            </li>
                            <li>
                                <a href="#hak-anda"
                                    class="-ml-px block border-l border-transparent py-2 pl-4 text-slate-600 transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:text-slate-400 dark:hover:border-violet-300 dark:hover:text-violet-300">
                                    Hak Anda
                                </a>
                            </li>
                            <li>
                                <a href="#perubahan"
                                    class="-ml-px block border-l border-transparent py-2 pl-4 text-slate-600 transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:text-slate-400 dark:hover:border-violet-300 dark:hover:text-violet-300">
                                    Perubahan Kebijakan
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>

                <div class="max-w-3xl">
                    <p class="text-base sm:text-lg leading-relaxed font-medium text-slate-700 dark:text-slate-300">
                        Selamat datang di website kami. Kami menghargai privasi Anda dan berkomitmen untuk melindungi
                        informasi pribadi yang Anda berikan saat menggunakan layanan kami.
                    </p>

                    <div class="mt-12 flex flex-col">

                        <article id="informasi" class="scroll-mt-32 border-t border-slate-200 py-10 dark:border-slate-800">
                            <div class="flex items-baseline gap-4">
                                <span class="text-sm font-bold text-violet-500 dark:text-violet-300">01</span>
                                <h2 class="font-primary text-xl sm:text-2xl font-bold text-slate-800 dark:text-white">
                                    Informasi yang Kami Kumpulkan
                                </h2>
                            </div>
                            <div class="mt-4 sm:pl-10">
                                <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-400">
                                    Kami dapat mengumpulkan informasi pribadi dari Anda saat Anda mengisi formulir
                                    kontak, melakukan pemesanan layanan, atau berinteraksi dengan website kami. Informasi
                                    ini termasuk namun tidak terbatas pada:
                                </p>
                                <ul
                                    class="mt-4 flex flex-col gap-2.5 text-sm sm:text-base text-slate-700 dark:text-slate-300">
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                        <span>Nama lengkap</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                        <span>Email</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                        <span>Nomor telepon</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                        <span>Informasi proyek atau kebutuhan jasa</span>
                                    </li>
                                </ul>
                            </div>
                        </article>

                        <article id="penggunaan" class="scroll-mt-32 border-t border-slate-200 py-10 dark:border-slate-800">
                            <div class="flex items-baseline gap-4">
                                <span class="text-sm font-bold text-violet-500 dark:text-violet-300">02</span>
                                <h2 class="font-primary text-xl sm:text-2xl font-bold text-slate-800 dark:text-white">
                                    Penggunaan Informasi
                                </h2>
                            </div>
                            <div class="mt-4 sm:pl-10">
                                <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-400">
                                    Informasi yang kami kumpulkan digunakan untuk tujuan:
                                </p>
                                <ul
                                    class="mt-4 flex flex-col gap-2.5 text-sm sm:text-base text-slate-700 dark:text-slate-300">
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                        <span>Memberikan layanan atau produk yang Anda minta</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                        <span>Menanggapi pertanyaan atau permintaan Anda</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                        <span>Meningkatkan kualitas layanan kami</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                        <span>Mengirim informasi terkait promosi atau update layanan (jika Anda memilih
                                            untuk menerima)</span>
                                    </li>
                                </ul>
                            </div>
                        </article>

                        <article id="perlindungan"
                            class="scroll-mt-32 border-t border-slate-200 py-10 dark:border-slate-800">
                            <div class="flex items-baseline gap-4">
                                <span class="text-sm font-bold text-violet-500 dark:text-violet-300">03</span>
                                <h2 class="font-primary text-xl sm:text-2xl font-bold text-slate-800 dark:text-white">
                                    Perlindungan Data
                                </h2>
                            </div>
                            <div class="mt-4 sm:pl-10">
                                <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-400">
                                    Kami menjaga keamanan informasi pribadi Anda dengan langkah-langkah teknis dan
                                    organisasi yang sesuai. Namun, tidak ada metode transmisi data melalui internet yang
                                    100% aman.
                                </p>
                            </div>
                        </article>

                        <article id="pihak-ketiga"
                            class="scroll-mt-32 border-t border-slate-200 py-10 dark:border-slate-800">
                            <div class="flex items-baseline gap-4">
                                <span class="text-sm font-bold text-violet-500 dark:text-violet-300">04</span>
                                <h2 class="font-primary text-xl sm:text-2xl font-bold text-slate-800 dark:text-white">
                                    Pengungkapan Pihak Ketiga
                                </h2>
                            </div>
                            <div class="mt-4 sm:pl-10">
                                <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-400">
                                    Kami tidak menjual, memperdagangkan, atau menyewakan informasi pribadi Anda kepada
                                    pihak ketiga. Informasi Anda hanya dapat dibagikan dengan penyedia layanan yang
                                    membantu kami menjalankan bisnis, seperti:
                                </p>
                                <ul
                                    class="mt-4 flex flex-col gap-2.5 text-sm sm:text-base text-slate-700 dark:text-slate-300">
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                        <span>Penyedia hosting</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                        <span>Penyedia pembayaran online</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                        <span>Tim pengembangan atau desainer freelance yang terlibat dalam proyek
                                            Anda</span>
                                    </li>
                                </ul>
                            </div>
                        </article>

                        <article id="cookie" class="scroll-mt-32 border-t border-slate-200 py-10 dark:border-slate-800">
                            <div class="flex items-baseline gap-4">
                                <span class="text-sm font-bold text-violet-500 dark:text-violet-300">05</span>
                                <h2 class="font-primary text-xl sm:text-2xl font-bold text-slate-800 dark:text-white">
                                    Cookie dan Teknologi Serupa
                                </h2>
                            </div>
                            <div class="mt-4 sm:pl-10">
                                <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-400">
                                    Website kami menggunakan cookie dan teknologi serupa untuk meningkatkan pengalaman
                                    pengguna, analisis trafik, dan personalisasi konten. Anda dapat mengatur browser untuk
                                    menolak cookie, tetapi beberapa fitur mungkin tidak berfungsi dengan optimal.
                                </p>
                            </div>
                        </article>

                        <article id="hak-anda" class="scroll-mt-32 border-t border-slate-200 py-10 dark:border-slate-800">
                            <div class="flex items-baseline gap-4">
                                <span class="text-sm font-bold text-violet-500 dark:text-violet-300">06</span>
                                <h2 class="font-primary text-xl sm:text-2xl font-bold text-slate-800 dark:text-white">
                                    Hak Anda
                                </h2>
                            </div>
                            <div class="mt-4 sm:pl-10">
                                <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-400">
                                    Anda berhak untuk mengakses, memperbaiki, atau menghapus informasi pribadi Anda yang
                                    kami simpan. Untuk mengajukan permintaan tersebut, silakan hubungi kami melalui:
                                </p>
                                <ul
                                    class="mt-4 flex flex-col gap-2.5 text-sm sm:text-base text-slate-700 dark:text-slate-300">
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                        <span>
                                            Email:
                                            <a href="mailto:admin@elvacode.com"
                                                class="font-semibold text-slate-800 underline decoration-slate-300 underline-offset-4 transition-colors duration-150 ease-in-out hover:text-violet-600 hover:decoration-violet-500 dark:text-white dark:decoration-slate-600 dark:hover:text-violet-300 dark:hover:decoration-violet-300">admin@elvacode.com</a>
                                        </span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                        <span>
                                            Telepon:
                                            <a href="https://wa.me/6287835482333?text=Halo%20Elvacode,%20saya%20tertarik%20dengan%20jasa%20pembuatan%20website.%20Bisa%20minta%20info%20lebih%20lanjut?"
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
                                    Perubahan Kebijakan
                                </h2>
                            </div>
                            <div class="mt-4 sm:pl-10">
                                <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-400">
                                    Kami berhak memperbarui kebijakan ini kapan saja. Perubahan akan diumumkan di halaman
                                    ini. Dianjurkan untuk memeriksa halaman ini secara berkala.
                                </p>
                            </div>
                        </article>

                    </div>

                    <div
                        class="rounded-2xl bg-slate-50 p-6 sm:p-8 dark:bg-slate-800/50 transition-colors duration-300 ease-in-out">
                        <p class="text-sm sm:text-base font-medium leading-relaxed text-slate-700 dark:text-slate-300">
                            Dengan menggunakan layanan kami, Anda menyetujui praktik-praktik yang dijelaskan dalam
                            kebijakan ini.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
