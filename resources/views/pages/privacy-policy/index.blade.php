@extends('components.layouts.app')

@section('title', 'Kebijakan dan Privasi')

@section('content')
    <section
        class="relative bg-gradient-to-br from-slate-900 via-indigo-900 to-violet-900 text-white py-20 sm:py-28 overflow-hidden bg-cover bg-center">
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
                    <li class="text-white font-semibold">Kebijakan Privasi</li>
                </ol>
            </nav>

            <div class="text-center">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold relative">
                    Kebijakan Privasi
                    <div
                        class="absolute inset-0 text-3xl sm:text-4xl md:text-5xl font-bold text-violet-300 opacity-30 blur-sm -z-10">
                        Kebijakan Privasi
                    </div>
                </h1>
            </div>
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-6 lg:px-8 py-12">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-6">Kebijakan dan Privasi</h1>

        <p class="mb-4 text-gray-700 dark:text-gray-300">
            Selamat datang di website kami. Kami menghargai privasi Anda dan berkomitmen untuk melindungi informasi pribadi
            yang Anda berikan saat menggunakan layanan kami.
        </p>

        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mt-8 mb-4">1. Informasi yang Kami Kumpulkan</h2>
        <p class="mb-4 text-gray-700 dark:text-gray-300">
            Kami dapat mengumpulkan informasi pribadi dari Anda saat Anda mengisi formulir kontak, melakukan pemesanan
            layanan, atau berinteraksi dengan website kami. Informasi ini termasuk namun tidak terbatas pada:
        </p>
        <ul class="list-disc list-inside mb-4 text-gray-700 dark:text-gray-300">
            <li>Nama lengkap</li>
            <li>Email</li>
            <li>Nomor telepon</li>
            <li>Informasi proyek atau kebutuhan jasa</li>
        </ul>

        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mt-8 mb-4">2. Penggunaan Informasi</h2>
        <p class="mb-4 text-gray-700 dark:text-gray-300">
            Informasi yang kami kumpulkan digunakan untuk tujuan:
        </p>
        <ul class="list-disc list-inside mb-4 text-gray-700 dark:text-gray-300">
            <li>Memberikan layanan atau produk yang Anda minta</li>
            <li>Menanggapi pertanyaan atau permintaan Anda</li>
            <li>Meningkatkan kualitas layanan kami</li>
            <li>Mengirim informasi terkait promosi atau update layanan (jika Anda memilih untuk menerima)</li>
        </ul>

        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mt-8 mb-4">3. Perlindungan Data</h2>
        <p class="mb-4 text-gray-700 dark:text-gray-300">
            Kami menjaga keamanan informasi pribadi Anda dengan langkah-langkah teknis dan organisasi yang sesuai. Namun,
            tidak ada metode transmisi data melalui internet yang 100% aman.
        </p>

        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mt-8 mb-4">4. Pengungkapan Pihak Ketiga</h2>
        <p class="mb-4 text-gray-700 dark:text-gray-300">
            Kami tidak menjual, memperdagangkan, atau menyewakan informasi pribadi Anda kepada pihak ketiga. Informasi Anda
            hanya dapat dibagikan dengan penyedia layanan yang membantu kami menjalankan bisnis, seperti:
        </p>
        <ul class="list-disc list-inside mb-4 text-gray-700 dark:text-gray-300">
            <li>Penyedia hosting</li>
            <li>Penyedia pembayaran online</li>
            <li>Tim pengembangan atau desainer freelance yang terlibat dalam proyek Anda</li>
        </ul>

        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mt-8 mb-4">5. Cookie dan Teknologi Serupa</h2>
        <p class="mb-4 text-gray-700 dark:text-gray-300">
            Website kami menggunakan cookie dan teknologi serupa untuk meningkatkan pengalaman pengguna, analisis trafik,
            dan personalisasi konten. Anda dapat mengatur browser untuk menolak cookie, tetapi beberapa fitur mungkin tidak
            berfungsi dengan optimal.
        </p>

        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mt-8 mb-4">6. Hak Anda</h2>
        <p class="mb-4 text-gray-700 dark:text-gray-300">
            Anda berhak untuk mengakses, memperbaiki, atau menghapus informasi pribadi Anda yang kami simpan. Untuk
            mengajukan permintaan tersebut, silakan hubungi kami melalui:
        </p>
        <ul class="list-disc list-inside mb-4 text-gray-700 dark:text-gray-300">
            <li>Email: <a href="mailto:support@elvacode.com" class="text-blue-600 hover:underline">support@elvacode.com</a>
            </li>
            <li>Telepon: <a
                    href="https://wa.me/6287776421079?text=Halo%20Elvacode,%20saya%20tertarik%20dengan%20jasa%20pembuatan%20website.%20Bisa%20minta%20info%20lebih%20lanjut?"
                    target="_blank" class="text-blue-600 hover:underline">+62 877-7642-1079</a></li>
        </ul>

        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mt-8 mb-4">7. Perubahan Kebijakan</h2>
        <p class="mb-4 text-gray-700 dark:text-gray-300">
            Kami berhak memperbarui kebijakan ini kapan saja. Perubahan akan diumumkan di halaman ini. Dianjurkan untuk
            memeriksa halaman ini secara berkala.
        </p>

        <p class="mb-4 text-gray-700 dark:text-gray-300">
            Dengan menggunakan layanan kami, Anda menyetujui praktik-praktik yang dijelaskan dalam kebijakan ini.
        </p>
    </section>
@endsection
