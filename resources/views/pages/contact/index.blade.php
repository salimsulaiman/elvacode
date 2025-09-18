@extends('components.layouts.app')

@section('title', 'Hubungi Kami - Elvacode')

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
                    <li class="text-white font-semibold">Kontak</li>
                </ol>
            </nav>

            <div class="text-center">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold relative">
                    Hubungi Kami
                    <div
                        class="absolute inset-0 text-3xl sm:text-4xl md:text-5xl font-bold text-violet-300 opacity-30 blur-sm -z-10">
                        Hubungi Kami
                    </div>
                </h1>
            </div>
        </div>
    </section>
    <section
        class="relative isolate overflow-hidden bg-white dark:bg-gray-800 
         transition-colors duration-300 ease-in-out group/section">

        <div class="max-w-7xl py-8 sm:py-16 mx-auto px-6 lg:px-8 flex flex-col lg:flex-row gap-4 md:gap-20">
            <!-- Kolom Kiri: Info & Sosmed -->
            <div class="w-full lg:w-1/2 flex flex-col gap-8">
                <h2
                    class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 dark:text-slate-300 leading-normal sm:leading-10 md:leading-16">
                    Punya Pertanyaan? Kami Siap Membantu!
                </h2>

                <p class="text-sm sm:text-base md:text-lg text-slate-700 dark:text-slate-400 font-medium">
                    Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan seputar layanan, proses pemesanan, atau
                    hal
                    lainnya.
                </p>

                <!-- Sosial Media Icons -->
                <div class="flex items-center gap-4 mt-4">
                    <!-- Instagram -->
                    <a href="https://instagram.com" target="_blank"
                        class="w-12 h-12 flex justify-center items-center bg-slate-200 dark:bg-slate-700 rounded-full hover:bg-violet-100 dark:hover:bg-violet-900 transition-colors duration-200">
                        <i class="fa fa-instagram text-violet-600 text-xl"></i>
                    </a>

                    <!-- Facebook -->
                    <a href="https://facebook.com" target="_blank"
                        class="w-12 h-12 flex justify-center items-center bg-slate-200 dark:bg-slate-700 rounded-full hover:bg-blue-100 dark:hover:bg-blue-900 transition-colors duration-200">
                        <i class="fa fa-facebook text-blue-600 text-xl"></i>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/6287835482333?text=Halo%20Elvacode,%20saya%20tertarik%20dengan%20jasa%20pembuatan%20website.%20Bisa%20minta%20info%20lebih%20lanjut?"
                        target="_blank"
                        class="w-12 h-12 flex justify-center items-center bg-slate-200 dark:bg-slate-700 rounded-full hover:bg-green-100 dark:hover:bg-green-900 transition-colors duration-200">
                        <i class="fa fa-whatsapp text-green-500 text-xl"></i>
                    </a>
                </div>


                <!-- Informasi Kontak -->
                <div class="flex flex-col gap-3 mt-6 text-slate-800 dark:text-slate-200">
                    <p>Brebes, Jawa Tengah, Indonesia</p>
                    <p>support@elvacode.com</p>
                    <p>+62 878-3548-2333</p>
                </div>
            </div>


            <!-- Kolom Kanan: Form -->
            <div class="w-full lg:w-1/2 mt-8 sm:mt-0">
                <form action="{{ route('contact.send') }}" method="POST"
                    class="flex flex-col gap-4 sm:bg-white sm:dark:bg-slate-800 p-0 sm:p-8 rounded-2xl shadow-md">
                    @csrf

                    <!-- Name + Email -->
                    <div class="flex flex-col lg:flex-row gap-4 w-full">
                        <div class="flex-1 flex flex-col gap-2">
                            <label for="name"
                                class="text-sm font-medium text-slate-700 dark:text-slate-300">Nama</label>
                            <input type="text" id="name" name="name" placeholder="Nama Anda"
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-800 dark:text-slate-200 focus:outline-none focus:ring-2 focus:ring-violet-500 transition-all duration-150"
                                value="{{ old('name') }}">
                        </div>

                        <div class="flex-1 flex flex-col gap-2">
                            <label for="email"
                                class="text-sm font-medium text-slate-700 dark:text-slate-300">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email Anda"
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-800 dark:text-slate-200 focus:outline-none focus:ring-2 focus:ring-violet-500 transition-all duration-150"
                                value="{{ old('email') }}">
                        </div>
                    </div>

                    <!-- Address + Phone -->
                    <div class="flex flex-col lg:flex-row gap-4 w-full">
                        <div class="flex-1 flex flex-col gap-2">
                            <label for="address"
                                class="text-sm font-medium text-slate-700 dark:text-slate-300">Alamat</label>
                            <input type="text" id="address" name="address" placeholder="Alamat Anda"
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-800 dark:text-slate-200 focus:outline-none focus:ring-2 focus:ring-violet-500 transition-all duration-150"
                                value="{{ old('address') }}">
                        </div>

                        <div class="flex-1 flex flex-col gap-2">
                            <label for="phone"
                                class="text-sm font-medium text-slate-700 dark:text-slate-300">Telepon</label>
                            <input type="text" id="phone" name="phone" placeholder="Nomor Telepon"
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-800 dark:text-slate-200 focus:outline-none focus:ring-2 focus:ring-violet-500 transition-all duration-150"
                                value="{{ old('phone') }}">
                        </div>
                    </div>

                    <!-- Subject -->
                    <div class="flex flex-col gap-2 w-full">
                        <label for="subject" class="text-sm font-medium text-slate-700 dark:text-slate-300">Subjek</label>
                        <input type="text" id="subject" name="subject" placeholder="Subjek Pesan"
                            class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-800 dark:text-slate-200 focus:outline-none focus:ring-2 focus:ring-violet-500 transition-all duration-150"
                            value="{{ old('subject') }}">
                    </div>

                    <!-- Message -->
                    <div class="flex flex-col gap-2 w-full">
                        <label for="message" class="text-sm font-medium text-slate-700 dark:text-slate-300">Pesan</label>
                        <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda"
                            class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-800 dark:text-slate-200 focus:outline-none focus:ring-2 focus:ring-violet-500 transition-all duration-150">{{ old('message') }}</textarea>
                    </div>

                    <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">

                    @if (session('success'))
                        <div
                            class="mb-4 px-4 py-3 rounded-lg border 
               bg-green-100 text-green-800 border-green-200
               dark:bg-green-800 dark:text-green-100 dark:border-green-700">
                            {{ session('success') }}
                        </div>
                    @elseif($errors->any())
                        <div
                            class="mb-4 px-4 py-3 rounded-lg border 
               bg-red-100 text-red-800 border-red-200
               dark:bg-red-800 dark:text-red-100 dark:border-red-700">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Submit -->
                    <button type="submit"
                        class="rounded-2xl bg-violet-600 px-5 sm:px-6 py-2.5 sm:py-3 text-sm sm:text-base font-semibold text-white shadow-lg hover:bg-violet-700 focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-violet-600 transition">
                        Kirim Pesan
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
