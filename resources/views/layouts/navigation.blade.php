<nav class="sticky top-0 z-50 border-b border-green-100/80 bg-white/85 backdrop-blur-xl">
    <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">

            <!-- Brand -->
            <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-white-700 to-green-950 shadow-lg shadow-green-900/20">
                    <img src="{{ asset('images/logo-pk-ipnu-ippnu-polije.png') }}"
                         alt="Logo"
                         class="h-9 w-auto">
                </div>

                <div>
                    <h1 class="text-sm font-black leading-tight text-green-950 md:text-base">
                        Admin PK IPNU IPPNU
                    </h1>
                    <p class="text-xs font-bold text-yellow-600">
                        POLIJE Dashboard
                    </p>
                </div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden items-center gap-3 md:flex">
                <a href="{{ route('dashboard') }}"
                   class="rounded-full bg-green-800 px-5 py-2.5 text-sm font-black text-white shadow-lg shadow-green-900/20 transition hover:-translate-y-1 hover:bg-green-900">
                    Dashboard
                </a>

                <a href="{{ url('/') }}"
                   target="_blank"
                   class="rounded-full bg-yellow-400 px-5 py-2.5 text-sm font-black text-green-950 shadow-lg shadow-yellow-500/20 transition hover:-translate-y-1 hover:bg-yellow-500">
                    Lihat Website
                </a>
            </div>

            <!-- User -->
            <div class="hidden items-center gap-3 sm:flex">
                <div class="rounded-2xl border border-green-100 bg-green-50 px-4 py-2 text-right">
                    <p class="text-xs font-bold text-slate-500">
                        Login sebagai
                    </p>
                    <p class="text-sm font-black text-green-950">
                        {{ auth()->user()->name ?? 'Admin PK' }}
                    </p>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit"
                            class="rounded-2xl bg-red-50 px-4 py-3 text-sm font-black text-red-600 transition hover:bg-red-100">
                        Logout
                    </button>
                </form>
            </div>

            <!-- Mobile Menu -->
            <div class="sm:hidden">
                <details class="relative">
                    <summary class="flex h-11 w-11 cursor-pointer list-none items-center justify-center rounded-2xl bg-green-800 text-xl font-black text-white">
                        ☰
                    </summary>

                    <div class="absolute right-0 mt-3 w-64 rounded-3xl border border-green-100 bg-white p-4 shadow-2xl">
                        <div class="mb-4 rounded-2xl bg-green-50 p-4">
                            <p class="text-xs font-bold text-slate-500">
                                Login sebagai
                            </p>
                            <p class="font-black text-green-950">
                                {{ auth()->user()->name ?? 'Admin PK' }}
                            </p>
                        </div>

                        <div class="space-y-2">
                            <a href="{{ route('dashboard') }}"
                               class="block rounded-2xl bg-green-800 px-4 py-3 text-center text-sm font-black text-white">
                                Dashboard
                            </a>

                            <a href="{{ url('/') }}"
                               class="block rounded-2xl bg-yellow-400 px-4 py-3 text-center text-sm font-black text-green-950">
                                Lihat Website
                            </a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit"
                                        class="w-full rounded-2xl bg-red-50 px-4 py-3 text-sm font-black text-red-600">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </details>
            </div>
        </div>
    </div>
</nav>