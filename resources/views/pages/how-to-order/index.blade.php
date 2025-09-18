@extends('components.layouts.app')

@section('title', 'Cara Pemesanan - Elvacode')

@section('content')
    <section
        class="relative bg-gradient-to-br from-slate-900 via-indigo-900 to-violet-900 text-white pt-36 sm:pt-40 pb-20 sm:pb-28 overflow-hidden bg-cover bg-center">
        <div class="absolute inset-0 overflow-hidden">
            <div
                class="absolute -top-24 left-1/2 -translate-x-1/2 w-[40rem] h-[40rem] bg-violet-500 opacity-20 blur-3xl rounded-full pulse-glow">
            </div>
            <div
                class="absolute top-20 right-1/4 w-64 h-64 bg-blue-400 opacity-15 blur-2xl rounded-full float-animation [animation-delay:-2s]">
            </div>
            <div
                class="absolute bottom-20 left-1/4 w-48 h-48 bg-purple-400 opacity-10 blur-2xl rounded-full float-animation [animation-delay:-4s]">
            </div>
            <div class="absolute top-32 left-1/3 w-32 h-32 bg-indigo-400 opacity-8 blur-xl rounded-full drift-animation">
            </div>
            <div
                class="absolute bottom-32 right-1/3 w-24 h-24 bg-violet-400 opacity-12 blur-xl rounded-full drift-animation [animation-delay:-7s]">
            </div>

            <div class="absolute inset-0 geometric-pattern"></div>

            <div
                class="absolute inset-0 opacity-5 [background-image:radial-gradient(circle,white_1px,transparent_1px)] [background-size:50px_50px]">
            </div>

            <div class="absolute inset-0 opacity-10">
                <div
                    class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-violet-400 to-transparent rotate-12 origin-left">
                </div>
                <div
                    class="absolute top-20 left-0 w-full h-px bg-gradient-to-r from-transparent via-blue-400 to-transparent -rotate-12 origin-left">
                </div>
                <div
                    class="absolute bottom-20 left-0 w-full h-px bg-gradient-to-r from-transparent via-indigo-400 to-transparent rotate-6 origin-left">
                </div>
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8 z-10">
            <nav class="flex justify-center mb-6" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-violet-200">
                    <li><a href="/" class="hover:text-white transition-colors duration-200">Home</a></li>
                    <li>/</li>
                    <li class="text-white font-semibold">Cara Pemesanan</li>
                </ol>
            </nav>

            <div class="text-center">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold relative">
                    Cara Pemesanan
                    <div
                        class="absolute inset-0 text-3xl sm:text-4xl md:text-5xl font-bold text-violet-300 opacity-30 blur-sm -z-10">
                        Cara Pemesanan
                    </div>
                </h1>
            </div>
        </div>
    </section>
    <section
        class="relative isolate overflow-hidden bg-gradient-to-t from-white to-slate-100 
         dark:bg-gradient-to-b dark:from-gray-900 dark:to-gray-800 
         transition-colors duration-300 ease-in-out group/section">

        <div aria-hidden="true" class="absolute inset-x-0 top-0 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
            <div style="clip-path: polygon(50% 0%, 90% 25%, 90% 75%, 50% 100%, 10% 75%, 10% 25%)"
                class="relative mx-auto aspect-[1155/678] w-[36rem] 
         rotate-[30deg] bg-gradient-to-tr 
         from-pink-300 via-sky-200 to-purple-400 
         opacity-30 sm:w-[72rem] 
         animate-[pulse_8s_ease-in-out_infinite]">
            </div>
        </div>

        <div class="max-w-7xl py-8 sm:py-16 mx-auto px-6 lg:px-8">
            <h2
                class=" text-2xl sm:text-3xl md:text-4xl lg:text-5xl max-w-2xl md:max-w-3xl leading-normal md:leading-16 font-bold text-slate-800 dark:text-slate-300">
                Bagaimana Cara Memesan Website di Elvacode?
            </h2>

            <p
                class=" text-sm sm:text-base md:text-lg text-slate-700 dark:text-slate-400 font-medium mt-6 sm:mt-8 max-w-2xl md:max-w-3xl">
                Kami membuat proses pemesanan mudah dan transparan. Ikuti langkah-langkah berikut untuk mulai
                bekerjasama
                dengan kami.
            </p>
            <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3 ">
                <!-- Step 1 -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-md p-6 transition hover:shadow-lg">
                    <div
                        class="w-12 h-12 flex items-center justify-center rounded-full bg-violet-600 text-white font-bold text-lg shadow-md">
                        1
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-slate-800 dark:text-slate-100">Konsultasi Awal</h3>
                    <p class="mt-2 text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        Hubungi kami melalui WhatsApp, Email, atau Contact Form.<br>
                        Ceritakan kebutuhan website Anda (company profile, toko online, sistem booking, dll).
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-md p-6 transition hover:shadow-lg">
                    <div
                        class="w-12 h-12 flex items-center justify-center rounded-full bg-violet-600 text-white font-bold text-lg shadow-md">
                        2
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-slate-800 dark:text-slate-100">Penawaran & Kesepakatan
                    </h3>
                    <p class="mt-2 text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        Kami akan memberikan proposal, estimasi harga, dan timeline pengerjaan.<br>
                        Jika sesuai, kita lanjut ke tahap berikutnya.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-md p-6 transition hover:shadow-lg">
                    <div
                        class="w-12 h-12 flex items-center justify-center rounded-full bg-violet-600 text-white font-bold text-lg shadow-md">
                        3
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-slate-800 dark:text-slate-100">Pembayaran DP</h3>
                    <p class="mt-2 text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        Klien melakukan pembayaran awal (misalnya 30–50%).<br>
                        Proyek resmi dimulai setelah konfirmasi pembayaran.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-md p-6 transition hover:shadow-lg">
                    <div
                        class="w-12 h-12 flex items-center justify-center rounded-full bg-violet-600 text-white font-bold text-lg shadow-md">
                        4
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-slate-800 dark:text-slate-100">Proses Pengerjaan</h3>
                    <p class="mt-2 text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        Kami mengerjakan desain & pengembangan sesuai kebutuhan.<br>
                        Update progres akan diberikan secara berkala.
                    </p>
                </div>

                <!-- Step 5 -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-md p-6 transition hover:shadow-lg">
                    <div
                        class="w-12 h-12 flex items-center justify-center rounded-full bg-violet-600 text-white font-bold text-lg shadow-md">
                        5
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-slate-800 dark:text-slate-100">Revisi & Peluncuran</h3>
                    <p class="mt-2 text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        Setelah selesai, kami memberikan kesempatan revisi.<br>
                        Website dipasang di hosting/domain Anda & siap digunakan.
                    </p>
                </div>
            </div>
        </div>
    </section>



@endsection
