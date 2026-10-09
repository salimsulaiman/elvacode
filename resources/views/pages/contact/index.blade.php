@extends('components.layouts.app')

@section('title', 'Hubungi Kami - Elvacode')

@section('content')
    <section
        class="section font-body relative w-full bg-violet-600 pt-36 sm:pt-44 pb-16 sm:pb-24 border-b border-violet-500/40">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">

            <nav aria-label="Breadcrumb">
                <ol class="flex items-center justify-center gap-2 text-sm font-medium text-violet-100">
                    <li>
                        <a href="/" class="transition-colors duration-150 ease-in-out hover:text-white">
                            Home
                        </a>
                    </li>
                    <li aria-hidden="true">/</li>
                    <li class="text-white font-semibold">Kontak</li>
                </ol>
            </nav>

            <h1
                class="font-primary section-title split mt-6 mx-auto max-w-4xl text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold sm:font-semibold tracking-tight text-balance text-white leading-[1.1]">
                Hubungi
                <span class="font-bold text-slate-900">Kami</span>
            </h1>
        </div>
    </section>

    <section
        class="section font-body relative isolate overflow-hidden bg-white dark:bg-slate-900 transition-colors duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 sm:py-24 flex flex-col lg:flex-row gap-12 lg:gap-20">

            <div class="w-full lg:w-1/2 flex flex-col">
                <div class="flex gap-2 items-center">
                    <h2 class="font-primary text-sm font-semibold text-slate-500 dark:text-slate-300 uppercase">
                        <span class="font-bold text-slate-800 dark:text-white">//</span>
                        Kontak
                    </h2>
                </div>

                <h3
                    class="font-primary section-title split mt-6 text-3xl sm:text-4xl md:text-5xl font-bold sm:font-semibold tracking-tight text-balance text-slate-800 dark:text-white leading-normal sm:leading-10 md:leading-16">
                    Punya Pertanyaan?
                    <span class="font-bold text-violet-500 dark:text-violet-300">Kami</span> Siap Membantu
                </h3>

                <p
                    class="section-desc mt-6 sm:mt-8 max-w-xl text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium leading-relaxed">
                    Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan seputar layanan, proses
                    pemesanan, atau hal lainnya.
                </p>

                <ul class="mt-10 flex flex-col gap-5 text-sm sm:text-base">
                    <li class="flex items-start gap-4">
                        <span
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-700 dark:text-slate-200">
                            <i data-feather="map-pin" class="h-4 w-4"></i>
                        </span>
                        <span class="pt-2 font-medium text-slate-700 dark:text-slate-300">
                            Tegal, Jawa Tengah, Indonesia
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-700 dark:text-slate-200">
                            <i data-feather="mail" class="h-4 w-4"></i>
                        </span>
                        <a href="mailto:admin@elvacode.com"
                            class="pt-2 font-medium text-slate-700 dark:text-slate-300 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:hover:text-violet-300">
                            admin@elvacode.com
                        </a>
                    </li>
                    <li class="flex items-start gap-4">
                        <span
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-700 dark:text-slate-200">
                            <i data-feather="phone" class="h-4 w-4"></i>
                        </span>
                        <a href="https://wa.me/6287835482333" target="_blank" rel="noopener"
                            class="pt-2 font-medium text-slate-700 dark:text-slate-300 transition-colors duration-150 ease-in-out hover:text-violet-600 dark:hover:text-violet-300">
                            +62 878-3548-2333
                        </a>
                    </li>
                </ul>

                <div class="mt-10 flex items-center gap-3">
                    <a href="https://www.instagram.com/elvacodecom" target="_blank" rel="noopener" aria-label="Instagram"
                        class="flex h-11 w-11 items-center justify-center rounded-full border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-300 transition-colors duration-150 ease-in-out hover:bg-slate-900 hover:border-slate-900 hover:text-white dark:hover:bg-white dark:hover:border-white dark:hover:text-slate-900">
                        <i class="fa fa-instagram text-lg"></i>
                    </a>
                    <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook"
                        class="flex h-11 w-11 items-center justify-center rounded-full border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-300 transition-colors duration-150 ease-in-out hover:bg-slate-900 hover:border-slate-900 hover:text-white dark:hover:bg-white dark:hover:border-white dark:hover:text-slate-900">
                        <i class="fa fa-facebook text-lg"></i>
                    </a>
                    <a href="https://wa.me/6287835482333?text=Halo%20Elvacode,%20saya%20tertarik%20dengan%20jasa%20pembuatan%20website.%20Bisa%20minta%20info%20lebih%20lanjut?"
                        target="_blank" rel="noopener" aria-label="WhatsApp"
                        class="flex h-11 w-11 items-center justify-center rounded-full border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-300 transition-colors duration-150 ease-in-out hover:bg-slate-900 hover:border-slate-900 hover:text-white dark:hover:bg-white dark:hover:border-white dark:hover:text-slate-900">
                        <i class="fa fa-whatsapp text-lg"></i>
                    </a>
                </div>
            </div>

            <div class="w-full lg:w-1/2">
                <form action="{{ route('contact.send') }}" method="POST"
                    class="flex flex-col gap-5 rounded-2xl border border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/50 p-6 sm:p-8">
                    @csrf

                    <div class="flex flex-col lg:flex-row gap-5 w-full">
                        <div class="flex-1 flex flex-col gap-2">
                            <label for="name"
                                class="text-sm font-semibold text-slate-700 dark:text-slate-300">Nama</label>
                            <input type="text" id="name" name="name" placeholder="Nama Anda"
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-sm text-slate-800 dark:text-slate-200 placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:outline-none focus:border-violet-500 focus:ring-2 focus:ring-violet-500/30 transition-colors duration-150"
                                value="{{ old('name') }}">
                        </div>

                        <div class="flex-1 flex flex-col gap-2">
                            <label for="email"
                                class="text-sm font-semibold text-slate-700 dark:text-slate-300">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email Anda"
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-sm text-slate-800 dark:text-slate-200 placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:outline-none focus:border-violet-500 focus:ring-2 focus:ring-violet-500/30 transition-colors duration-150"
                                value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row gap-5 w-full">
                        <div class="flex-1 flex flex-col gap-2">
                            <label for="address"
                                class="text-sm font-semibold text-slate-700 dark:text-slate-300">Alamat</label>
                            <input type="text" id="address" name="address" placeholder="Alamat Anda"
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-sm text-slate-800 dark:text-slate-200 placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:outline-none focus:border-violet-500 focus:ring-2 focus:ring-violet-500/30 transition-colors duration-150"
                                value="{{ old('address') }}">
                        </div>

                        <div class="flex-1 flex flex-col gap-2">
                            <label for="phone"
                                class="text-sm font-semibold text-slate-700 dark:text-slate-300">Telepon</label>
                            <input type="text" id="phone" name="phone" placeholder="Nomor Telepon"
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-sm text-slate-800 dark:text-slate-200 placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:outline-none focus:border-violet-500 focus:ring-2 focus:ring-violet-500/30 transition-colors duration-150"
                                value="{{ old('phone') }}">
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 w-full">
                        <label for="subject"
                            class="text-sm font-semibold text-slate-700 dark:text-slate-300">Subjek</label>
                        <input type="text" id="subject" name="subject" placeholder="Subjek Pesan"
                            class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-sm text-slate-800 dark:text-slate-200 placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:outline-none focus:border-violet-500 focus:ring-2 focus:ring-violet-500/30 transition-colors duration-150"
                            value="{{ old('subject') }}">
                    </div>

                    <div class="flex flex-col gap-2 w-full">
                        <label for="message"
                            class="text-sm font-semibold text-slate-700 dark:text-slate-300">Pesan</label>
                        <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda"
                            class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-sm text-slate-800 dark:text-slate-200 placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:outline-none focus:border-violet-500 focus:ring-2 focus:ring-violet-500/30 transition-colors duration-150">{{ old('message') }}</textarea>
                    </div>

                    <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">

                    @if (session('success'))
                        <div role="status"
                            class="rounded-xl border px-4 py-3 text-sm font-medium bg-emerald-50 text-emerald-800 border-emerald-200 dark:bg-emerald-950/50 dark:text-emerald-200 dark:border-emerald-900">
                            {{ session('success') }}
                        </div>
                    @elseif($errors->any())
                        <div role="alert"
                            class="rounded-xl border px-4 py-3 text-sm font-medium bg-red-50 text-red-800 border-red-200 dark:bg-red-950/50 dark:text-red-200 dark:border-red-900">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <button type="submit"
                        class="group/cta mt-2 w-full sm:w-fit inline-flex items-center justify-center gap-3 rounded-full bg-slate-900 dark:bg-white py-2 pl-6 pr-2 text-sm font-bold text-white dark:text-slate-900 transition-colors duration-150 ease-in-out hover:bg-violet-500 hover:text-white dark:hover:bg-violet-500 dark:hover:text-white">
                        Kirim Pesan
                        <span
                            class="flex h-8 w-8 items-center justify-center rounded-full bg-white dark:bg-slate-900 text-slate-900 dark:text-white transition-colors duration-150 ease-in-out group-hover/cta:bg-white group-hover/cta:text-violet-600 dark:group-hover/cta:bg-white dark:group-hover/cta:text-violet-600">
                            <i data-feather="arrow-up-right"
                                class="h-4 w-4 transition-transform duration-150 ease-in-out"></i>
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site') }}"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('{{ config('services.recaptcha.site') }}', {
                    action: 'submit'
                })
                .then(function(token) {
                    document.getElementById('recaptchaResponse').value = token;
                });
        });
    </script>
@endsection
