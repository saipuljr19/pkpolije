<x-guest-layout>
    <div class="relative min-h-screen overflow-hidden bg-gradient-to-br from-green-50 via-white to-yellow-50">

```
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
                            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-white shadow-lg">
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
                            Registrasi Akun
                        </p>

                        <h2 class="text-4xl font-black leading-tight">
                            Bergabung Menjadi Kader Digital.
                        </h2>

                        <p class="mt-5 max-w-md text-base leading-8 text-green-50/90">
                            Daftarkan akun Anda untuk mengakses informasi organisasi,
                            kegiatan kaderisasi, program kerja, berita, dokumentasi,
                            serta layanan digital PK IPNU IPPNU POLIJE.
                        </p>
                    </div>

                    <div class="rounded-3xl border border-white/10 bg-white/10 p-5 backdrop-blur-sm">
                        <p class="text-sm leading-7 text-green-50/90">
                            “Belajar, Berjuang, Bertaqwa untuk mewujudkan generasi muda
                            Nahdlatul Ulama yang aktif, kreatif, dan berintegritas.”
                        </p>
                    </div>

                </div>
            </div>

            <!-- Right Side -->
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

                    <!-- Heading -->
                    <div class="mb-8 text-center lg:text-left">
                        <p class="text-sm font-bold uppercase tracking-[0.25em] text-yellow-600">
                            Join Us
                        </p>

                        <h2 class="mt-3 text-3xl font-black text-green-950">
                            Daftar Akun
                        </h2>

                        <p class="mt-3 text-sm leading-6 text-slate-500">
                            Buat akun untuk bergabung dan mengakses sistem informasi
                            PK IPNU IPPNU POLIJE.
                        </p>
                    </div>

                    <form method="POST" action="{{ route('register') }}" class="space-y-5">
                        @csrf

                        <!-- Nama -->
                        <div>
                            <x-input-label
                                for="name"
                                :value="__('Nama Lengkap')"
                                class="mb-2 font-bold text-green-950" />

                            <x-text-input
                                id="name"
                                class="block w-full rounded-2xl border-slate-200 bg-slate-50 py-3 px-4 text-slate-700 shadow-sm focus:border-green-600 focus:bg-white focus:ring-green-600"
                                type="text"
                                name="name"
                                :value="old('name')"
                                required
                                autofocus
                                autocomplete="name"
                                placeholder="Masukkan nama lengkap" />

                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
                        </div>

                        <!-- Email -->
                        <div>
                            <x-input-label
                                for="email"
                                :value="__('Email')"
                                class="mb-2 font-bold text-green-950" />

                            <x-text-input
                                id="email"
                                class="block w-full rounded-2xl border-slate-200 bg-slate-50 py-3 px-4 text-slate-700 shadow-sm focus:border-green-600 focus:bg-white focus:ring-green-600"
                                type="email"
                                name="email"
                                :value="old('email')"
                                required
                                autocomplete="username"
                                placeholder="Masukkan email" />

                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                        </div>

                        <!-- Password -->
                        <div>
                            <x-input-label
                                for="password"
                                :value="__('Password')"
                                class="mb-2 font-bold text-green-950" />

                            <x-text-input
                                id="password"
                                class="block w-full rounded-2xl border-slate-200 bg-slate-50 py-3 px-4 text-slate-700 shadow-sm focus:border-green-600 focus:bg-white focus:ring-green-600"
                                type="password"
                                name="password"
                                required
                                autocomplete="new-password"
                                placeholder="Masukkan password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                        </div>

                        <!-- Konfirmasi Password -->
                        <div>
                            <x-input-label
                                for="password_confirmation"
                                :value="__('Konfirmasi Password')"
                                class="mb-2 font-bold text-green-950" />

                            <x-text-input
                                id="password_confirmation"
                                class="block w-full rounded-2xl border-slate-200 bg-slate-50 py-3 px-4 text-slate-700 shadow-sm focus:border-green-600 focus:bg-white focus:ring-green-600"
                                type="password"
                                name="password_confirmation"
                                required
                                autocomplete="new-password"
                                placeholder="Ulangi password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
                        </div>

                        <!-- Footer -->
                        <div class="pt-2">

                            <button
                                type="submit"
                                class="group flex w-full items-center justify-center gap-2 rounded-2xl bg-green-800 px-6 py-3.5 text-sm font-black uppercase tracking-[0.15em] text-white shadow-lg shadow-green-900/20 transition duration-300 hover:-translate-y-1 hover:bg-green-900 hover:shadow-xl">

                                Daftar Sekarang

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 transition group-hover:translate-x-1"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>

                            </button>

                            <p class="mt-4 text-center text-sm text-slate-500">
                                Sudah memiliki akun?

                                <a href="{{ route('login') }}"
                                    class="font-bold text-green-700 hover:text-yellow-600">
                                    Masuk di sini
                                </a>
                            </p>

                        </div>
                    </form>

                    <p class="mt-8 text-center text-xs leading-6 text-slate-400">
                        © {{ date('Y') }} PK IPNU IPPNU POLIJE. All rights reserved.
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>
```

</x-guest-layout>
