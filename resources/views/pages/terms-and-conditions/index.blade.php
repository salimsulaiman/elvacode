@extends('components.layouts.app')

@section('title', 'Syarat dan Ketentuan')

@section('content')
    @php
        $sections = [
            [
                'id' => 'umum',
                'title' => 'Ketentuan Umum',
                'text' =>
                    'Dengan mengakses website Elvacode, meminta penawaran, atau menggunakan layanan kami, Anda menyatakan telah membaca, memahami, dan menyetujui syarat dan ketentuan ini. Jika Anda tidak setuju dengan salah satu ketentuan, mohon untuk tidak menggunakan layanan kami.',
            ],
            [
                'id' => 'layanan',
                'title' => 'Lingkup Layanan',
                'text' =>
                    'Elvacode menyediakan jasa pembuatan website dan layanan pendukungnya. Rincian pekerjaan, fitur, dan hasil akhir mengacu pada penawaran atau kesepakatan tertulis yang disetujui kedua belah pihak. Layanan kami meliputi:',
                'items' => [
                    'Pembuatan website company profile, toko online, dan aplikasi berbasis web',
                    'Pengembangan fitur khusus sesuai kebutuhan proyek',
                    'Pemeliharaan dan dukungan teknis (jika dipilih)',
                ],
            ],
            [
                'id' => 'pembayaran',
                'title' => 'Pemesanan dan Pembayaran',
                'text' =>
                    'Pengerjaan proyek dimulai setelah klien menyetujui penawaran dan melakukan pembayaran awal (DP). Ketentuan pembayaran adalah sebagai berikut:',
                'items' => [
                    'Besaran DP dan termin pembayaran ditentukan dalam penawaran',
                    'Pelunasan dilakukan sebelum serah terima akhir atau sebelum website dipublikasikan',
                    'Keterlambatan pembayaran dapat menunda jadwal pengerjaan',
                ],
            ],
            [
                'id' => 'kewajiban',
                'title' => 'Kewajiban Klien',
                'text' => 'Agar proyek berjalan lancar dan tepat waktu, klien bertanggung jawab untuk:',
                'items' => [
                    'Menyediakan materi yang dibutuhkan seperti teks, logo, gambar, dan data lainnya',
                    'Memberikan informasi yang akurat dan lengkap terkait kebutuhan proyek',
                    'Memberikan tanggapan dan persetujuan dalam waktu yang wajar',
                    'Memastikan seluruh materi yang diserahkan tidak melanggar hak cipta atau hak pihak lain',
                ],
            ],
            [
                'id' => 'jadwal',
                'title' => 'Jadwal dan Revisi',
                'text' =>
                    'Estimasi waktu pengerjaan disepakati di awal proyek dan dapat berubah apabila terjadi keterlambatan materi, umpan balik, atau pembayaran dari pihak klien. Jumlah revisi mengikuti paket yang dipilih. Permintaan perubahan di luar lingkup yang telah disepakati dapat dikenakan biaya tambahan dan penyesuaian jadwal.',
            ],
            [
                'id' => 'kekayaan-intelektual',
                'title' => 'Hak Kekayaan Intelektual',
                'text' =>
                    'Hak atas desain, kode sumber, dan hasil pekerjaan ditentukan berdasarkan jenis layanan yang disepakati:',
                'items' => [
                    'Untuk layanan jual lepas, setelah pelunasan penuh, klien memperoleh hak atas hasil pekerjaan khusus yang dibuat untuk proyeknya sesuai kesepakatan, termasuk penyerahan kode sumber apabila tercantum dalam ruang lingkup layanan.',
                    'Untuk layanan yang menggunakan hosting Elvacode, klien memperoleh hak penggunaan website selama masa layanan yang disepakati. Kepemilikan dan akses terhadap kode sumber mengikuti ketentuan paket atau perjanjian yang berlaku.',
                    'Elvacode tetap memiliki hak atas framework, library, komponen, sistem, dan kode yang telah dimiliki atau dikembangkan secara umum. Penggunaannya tetap mengikuti lisensi masing-masing, termasuk lisensi pihak ketiga.',
                    'Elvacode berhak menampilkan proyek yang telah selesai sebagai bagian dari portofolio, kecuali disepakati lain secara tertulis atau terdapat kewajiban kerahasiaan.',
                ],
            ],
            [
                'id' => 'pihak-ketiga',
                'title' => 'Domain, Hosting, dan Layanan Pihak Ketiga',
                'text' =>
                    'Domain, hosting, dan layanan pihak ketiga lainnya (seperti payment gateway, email, atau API) tunduk pada syarat penyedianya masing-masing. Biaya pembelian dan perpanjangan layanan tersebut menjadi tanggung jawab klien, kecuali disepakati lain. Elvacode tidak bertanggung jawab atas gangguan atau perubahan kebijakan dari penyedia pihak ketiga.',
            ],
            [
                'id' => 'garansi',
                'title' => 'Garansi dan Pemeliharaan',
                'text' =>
                    'Elvacode memberikan garansi perbaikan bug yang berasal dari pekerjaan kami selama periode yang tercantum pada paket atau penawaran setelah serah terima. Garansi tidak mencakup:',
                'items' => [
                    'Perubahan atau modifikasi yang dilakukan oleh pihak lain tanpa sepengetahuan kami',
                    'Gangguan akibat serangan siber, kesalahan penggunaan, atau masalah pada server dan layanan pihak ketiga',
                    'Penambahan fitur baru di luar lingkup awal proyek',
                ],
            ],
            [
                'id' => 'pembatalan',
                'title' => 'Pembatalan dan Pengembalian Dana',
                'text' => 'Apabila proyek dibatalkan, ketentuan berikut berlaku:',
                'items' => [
                    'Pembayaran awal (DP) tidak dapat dikembalikan setelah pengerjaan dimulai',
                    'Jika pembatalan dilakukan oleh klien saat pengerjaan berjalan, klien tetap membayar sesuai progres pekerjaan yang telah diselesaikan',
                    'Jika Elvacode tidak dapat melanjutkan proyek, pengembalian dana dihitung secara proporsional terhadap pekerjaan yang belum dikerjakan',
                ],
            ],
            [
                'id' => 'tanggung-jawab',
                'title' => 'Batasan Tanggung Jawab',
                'text' =>
                    'Elvacode tidak bertanggung jawab atas kerugian tidak langsung, kehilangan keuntungan, atau kehilangan data yang timbul dari penggunaan website. Tanggung jawab kami terbatas pada nilai pembayaran yang telah diterima untuk proyek terkait. Klien disarankan untuk melakukan pencadangan data secara berkala.',
            ],
            [
                'id' => 'perubahan',
                'title' => 'Perubahan Ketentuan',
                'text' =>
                    'Kami berhak memperbarui syarat dan ketentuan ini kapan saja. Perubahan akan diumumkan di halaman ini dan berlaku sejak dipublikasikan. Dianjurkan untuk memeriksa halaman ini secara berkala.',
            ],
            [
                'id' => 'kontak',
                'title' => 'Hubungi Kami',
                'text' =>
                    'Jika Anda memiliki pertanyaan mengenai syarat dan ketentuan ini, silakan hubungi kami melalui:',
                'contact' => true,
            ],
        ];
    @endphp

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
                    <li class="text-white font-semibold">Syarat dan Ketentuan</li>
                </ol>
            </nav>

            <h1
                class="font-primary section-title split mt-6 mx-auto max-w-4xl text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-white leading-[1.1]">
                Syarat dan
                <span class="font-bold text-slate-900">Ketentuan</span>
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
                            @foreach ($sections as $section)
                                <li>
                                    <a href="#{{ $section['id'] }}"
                                        class="-ml-px block border-l border-transparent py-2 pl-4 text-slate-600 transition-colors duration-150 ease-in-out hover:border-violet-500 hover:text-violet-600 dark:text-slate-400 dark:hover:border-violet-300 dark:hover:text-violet-300">
                                        {{ $section['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>

                <div class="max-w-3xl">
                    <p class="text-base sm:text-lg leading-relaxed font-medium text-slate-700 dark:text-slate-300">
                        Selamat datang di Elvacode. Syarat dan ketentuan berikut mengatur penggunaan website serta layanan
                        jasa pembuatan website yang kami sediakan. Mohon baca dengan seksama sebelum memulai kerja sama
                        dengan kami.
                    </p>

                    <div class="mt-12 flex flex-col">
                        @foreach ($sections as $section)
                            <article id="{{ $section['id'] }}"
                                class="scroll-mt-32 border-t border-slate-200 py-10 dark:border-slate-800">
                                <div class="flex items-baseline gap-4">
                                    <span class="text-sm font-bold text-violet-500 dark:text-violet-300">
                                        {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                    <h2 class="font-primary text-xl sm:text-2xl font-bold text-slate-800 dark:text-white">
                                        {{ $section['title'] }}
                                    </h2>
                                </div>

                                <div class="mt-4 sm:pl-10">
                                    <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-400">
                                        {{ $section['text'] }}
                                    </p>

                                    @if (!empty($section['items']))
                                        <ul
                                            class="mt-4 flex flex-col gap-2.5 text-sm sm:text-base text-slate-700 dark:text-slate-300">
                                            @foreach ($section['items'] as $item)
                                                <li class="flex items-start gap-3">
                                                    <span
                                                        class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                                    <span>{{ $item }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    @if (!empty($section['contact']))
                                        <ul
                                            class="mt-4 flex flex-col gap-2.5 text-sm sm:text-base text-slate-700 dark:text-slate-300">
                                            <li class="flex items-start gap-3">
                                                <span
                                                    class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500 dark:bg-violet-300"></span>
                                                <span>
                                                    Email:
                                                    <a href="mailto:admin@Elvacode.com"
                                                        class="font-semibold text-slate-800 underline decoration-slate-300 underline-offset-4 transition-colors duration-150 ease-in-out hover:text-violet-600 hover:decoration-violet-500 dark:text-white dark:decoration-slate-600 dark:hover:text-violet-300 dark:hover:decoration-violet-300">admin@Elvacode.com</a>
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
                                    @endif
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <div
                        class="rounded-2xl bg-slate-50 p-6 sm:p-8 dark:bg-slate-800/50 transition-colors duration-300 ease-in-out">
                        <p class="text-sm sm:text-base font-medium leading-relaxed text-slate-700 dark:text-slate-300">
                            Dengan menggunakan layanan kami, Anda menyatakan telah membaca dan menyetujui seluruh syarat
                            dan ketentuan yang berlaku.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
