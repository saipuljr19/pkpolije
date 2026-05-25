<x-guest-layout>
    <div class="relative min-h-screen overflow-hidden bg-gradient-to-br from-green-50 via-white to-yellow-50">

        <!-- Background Decoration -->
        <div class="absolute -left-32 -top-32 h-80 w-80 rounded-full bg-green-300/30 blur-3xl"></div>
        <div class="absolute -right-32 bottom-0 h-96 w-96 rounded-full bg-yellow-300/30 blur-3xl"></div>
        <div class="absolute right-1/4 top-20 h-32 w-32 rounded-full bg-green-700/10 blur-2xl"></div>

        <div class="relative z-10 flex min-h-screen items-center justify-center px-5 py-10">
            <div class="grid w-full max-w-6xl overflow-hidden rounded-[2rem] bg-white shadow-2xl shadow-green-950/10 lg:grid-cols-2">

                <!-- Left Side -->
                <div class="relative hidden bg-gradient-to-br from-green-700 via-green-800 to-green-950 p-10 text-white lg:block">
                    <div class="absolute inset-0 opacity-10">
                        <div class="h-full w-full bg-[radial-gradient(circle_at_30%_20%,white,transparent_25%),radial-gradient(circle_at_80%_70%,white,transparent_20%)]"></div>
                    </div>

                    <div class="relative z-10 flex h-full flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4">
                                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-white text-xl font-black text-green-800 shadow-lg">
                                   <img src="{{ asset('images/logo-pk-ipnu-ippnu-polije.png') }}"
                                        alt="Logo PK IPNU IPPNU POLIJE"
                                        class="h-20 w-auto animate-logo-pop">
                                </div>
                                <div>
                                    <h1 class="text-2xl font-black tracking-wide">
                                        PK IPNU IPPNU POLIJE
                                    </h1>
                                    <p class="text-sm font-semibold text-yellow-300">
                                        Belajar, Berjuang, Bertaqwa
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <p class="mb-4 inline-flex rounded-full bg-yellow-400 px-4 py-2 text-sm font-bold uppercase tracking-[0.2em] text-green-950">
                                Login Area
                            </p>

                            <h2 class="text-4xl font-black leading-tight">
                                Selamat Datang Kembali, Kader Muda NU.
                            </h2>

                            <p class="mt-5 max-w-md text-base leading-8 text-green-50/90">
                                Masuk ke halaman admin untuk mengelola informasi organisasi,
                                program kerja, berita, dan data kegiatan PK IPNU IPPNU POLIJE.
                            </p>
                        </div>

                        <div class="rounded-3xl border border-white/10 bg-white/10 p-5 backdrop-blur-sm">
                            <p class="text-sm leading-7 text-green-50/90">
                                “Terus bergerak, berkhidmah, dan memberi manfaat untuk kampus,
                                masyarakat, serta Nahdlatul Ulama.”
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Side / Form -->
                <div class="flex items-center justify-center p-6 sm:p-10">
                    <div class="w-full max-w-md">

                        <!-- Mobile Logo -->
                        <div class="mb-8 flex items-center justify-center gap-3 lg:hidden">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-green-800 text-lg font-black text-white shadow-lg">
                                PK
                            </div>
                            <div>
                                <h1 class="text-xl font-black text-green-950">
                                    PK IPNU IPPNU POLIJE
                                </h1>
                                <p class="text-xs font-semibold text-yellow-600">
                                    Belajar, Berjuang, Bertaqwa
                                </p>
                            </div>
                        </div>

                        <div class="mb-8 text-center lg:text-left">
                            <p class="text-sm font-bold uppercase tracking-[0.25em] text-yellow-600">
                                Welcome Back
                            </p>
                            <h2 class="mt-3 text-3xl font-black text-green-950">
                                Masuk Akun
                            </h2>
                            <p class="mt-3 text-sm leading-6 text-slate-500">
                                Silakan login menggunakan email dan password yang sudah terdaftar.
                            </p>
                        </div>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4 rounded-xl bg-green-50 p-4 text-sm text-green-700" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}" class="space-y-5">
                            @csrf

                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" class="mb-2 font-bold text-green-950" />

                                <div class="relative">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m8 0a4 4 0 10-8 0m8 0v1a2 2 0 104 0v-1a8 8 0 10-8 8" />
                                        </svg>
                                    </div>

                                    <x-text-input
                                        id="email"
                                        class="block w-full rounded-2xl border-slate-200 bg-slate-50 py-3 pl-12 pr-4 text-slate-700 shadow-sm transition focus:border-green-600 focus:bg-white focus:ring-green-600"
                                        type="email"
                                        name="email"
                                        :value="old('email')"
                                        required
                                        autofocus
                                        autocomplete="username"
                                        placeholder="Masukkan email"
                                    />
                                </div>

                                <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" />
                            </div>

                            <!-- Password -->
                            <div>
                                <x-input-label for="password" :value="__('Password')" class="mb-2 font-bold text-green-950" />

                                <div class="relative">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                    </div>

                                    <x-text-input
                                        id="password"
                                        class="block w-full rounded-2xl border-slate-200 bg-slate-50 py-3 pl-12 pr-4 text-slate-700 shadow-sm transition focus:border-green-600 focus:bg-white focus:ring-green-600"
                                        type="password"
                                        name="password"
                                        required
                                        autocomplete="current-password"
                                        placeholder="Masukkan password"
                                    />
                                </div>

                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-500" />
                            </div>

                            <!-- Remember Me and Forgot Password -->
                            <div class="flex items-center justify-between">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input
                                        id="remember_me"
                                        type="checkbox"
                                        class="rounded border-slate-300 text-green-700 shadow-sm focus:ring-green-600"
                                        name="remember"
                                    >

                                    <span class="ms-2 text-sm font-medium text-slate-600">
                                        {{ __('Remember me') }}
                                    </span>
                                </label>

                                @if (Route::has('password.request'))
                                    <a
                                        class="text-sm font-bold text-green-700 transition hover:text-yellow-600"
                                        href="{{ route('password.request') }}"
                                    >
                                        Lupa password?
                                    </a>
                                @endif
                            </div>

                            <!-- Button -->
                            <button
                                type="submit"
                                class="group flex w-full items-center justify-center gap-2 rounded-2xl bg-green-800 px-6 py-3.5 text-sm font-black uppercase tracking-[0.15em] text-white shadow-lg shadow-green-900/20 transition duration-300 hover:-translate-y-1 hover:bg-green-900 hover:shadow-xl"
                            >
                                Masuk Sekarang

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </button>
                        </form>

                        <p class="mt-8 text-center text-xs leading-6 text-slate-400">
                            © {{ date('Y') }} PK IPNU IPPNU POLIJE. All rights reserved.
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>