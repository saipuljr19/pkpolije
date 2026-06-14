<x-app-layout>
    <div class="min-h-screen bg-[#f3f8f3] py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="overflow-hidden rounded-[2rem] bg-white shadow-[0_20px_60px_rgba(15,23,42,0.08)]">
                <div class="grid min-h-[85vh] grid-cols-12">

                    <!-- Sidebar Kiri -->
                    <aside class="col-span-12 border-b border-green-100 bg-white p-6 lg:col-span-3 lg:border-b-0 lg:border-r xl:col-span-2">
                        <div class="flex items-center gap-3">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-white to-white-950 text-lg font-black text-white shadow-lg">
                                 <img src="{{ asset('images/logo-pk-ipnu-ippnu-polije.png') }}"
                                        alt="Logo"
                                        class="h-9 w-auto">
                            </div>

                            <div>
                                <h1 class="text-sm font-black leading-tight text-green-950">
                                    PK IPNU IPPNU
                                </h1>
                                <p class="text-xs font-bold text-yellow-600">
                                    POLIJE
                                </p>
                            </div>
                        </div>

                        <div class="mt-8">
                            <p class="mb-3 px-3 text-xs font-black uppercase tracking-[0.25em] text-slate-400">
                                Menu Utama
                            </p>

                            <div class="space-y-2">
                                <button type="button"
                                        class="menu-btn active flex w-full items-center gap-3 rounded-2xl bg-yellow-400 px-4 py-3 text-left font-black text-green-950 shadow-sm transition hover:scale-[1.01]"
                                        data-section="dashboard-section">
                                    <span>📊</span>
                                    <span>Dashboard</span>
                                </button>

                                <button type="button"
                                        class="menu-btn flex w-full items-center gap-3 rounded-2xl px-4 py-3 text-left font-bold text-slate-600 transition hover:bg-green-50 hover:text-green-900"
                                        data-section="berita-section">
                                    <span>📰</span>
                                    <span>Berita PK</span>
                                </button>

                                <button type="button"
                                        class="menu-btn flex w-full items-center gap-3 rounded-2xl px-4 py-3 text-left font-bold text-slate-600 transition hover:bg-green-50 hover:text-green-900"
                                        data-section="program-section">
                                    <span>📌</span>
                                    <span>Program Kerja</span>
                                </button>
                            </div>
                        </div>

                        <div class="mt-10 rounded-[1.75rem] bg-gradient-to-br from-green-900 to-green-700 p-5 text-white shadow-lg">
                            <p class="text-lg font-black">
                                Bantuan Admin
                            </p>

                            <p class="mt-2 text-sm leading-6 text-green-50/90">
                                Kelola berita kegiatan dan program kerja organisasi dengan tampilan yang lebih rapi.
                            </p>

                            <a href="{{ url('/') }}"
                               target="_blank"
                               class="mt-5 inline-flex w-full items-center justify-center rounded-2xl bg-yellow-400 px-4 py-3 text-sm font-black text-green-950 transition hover:bg-yellow-500">
                                Lihat Website
                            </a>
                        </div>
                    </aside>

                    <!-- Konten Tengah -->
                    <main class="col-span-12 bg-[#fbfdfb] p-6 lg:col-span-6 xl:col-span-7">

                        <!-- Topbar -->
                        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                            <div>
                                <p class="text-sm font-bold text-slate-400">
                                    Halo Admin 👋
                                </p>

                                <h2 class="text-3xl font-black text-green-950">
                                    Dashboard PK IPNU IPPNU POLIJE
                                </h2>
                            </div>

                            <div class="flex items-center gap-3">
                                <div class="hidden rounded-2xl border border-slate-200 bg-white px-4 py-3 md:flex md:w-72 md:items-center md:gap-3">
                                    <span class="text-slate-400">🔎</span>
                                    <input type="text"
                                           placeholder="Cari berita atau program..."
                                           class="w-full border-0 bg-transparent p-0 text-sm text-slate-600 placeholder:text-slate-400 focus:outline-none focus:ring-0">
                                </div>

                                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-white text-lg shadow-sm ring-1 ring-slate-200">
                                    🔔
                                </div>
                            </div>
                        </div>

                        <!-- Dashboard Section -->
                        <section id="dashboard-section" class="content-section mt-8">
                            <div class="grid gap-4 md:grid-cols-3">
                                <div class="rounded-[1.75rem] bg-white p-5 shadow-sm ring-1 ring-green-100">
                                    <p class="text-sm font-bold text-slate-500">
                                        Total Berita PK
                                    </p>
                                    <h3 class="mt-3 text-4xl font-black text-green-950">
                                        12
                                    </h3>
                                    <p class="mt-2 text-sm font-semibold text-green-700">
                                        Konten berita aktif
                                    </p>
                                </div>

                                <div class="rounded-[1.75rem] bg-white p-5 shadow-sm ring-1 ring-green-100">
                                    <p class="text-sm font-bold text-slate-500">
                                        Program Kerja
                                    </p>
                                    <h3 class="mt-3 text-4xl font-black text-green-950">
                                        6
                                    </h3>
                                    <p class="mt-2 text-sm font-semibold text-yellow-600">
                                        Program unggulan
                                    </p>
                                </div>

                                <div class="rounded-[1.75rem] bg-gradient-to-br from-green-800 to-green-950 p-5 text-white shadow-sm">
                                    <p class="text-sm font-bold text-green-100">
                                        Status Website
                                    </p>
                                    <h3 class="mt-3 text-2xl font-black text-yellow-300">
                                        Aktif
                                    </h3>
                                    <p class="mt-2 text-sm text-green-50/90">
                                        Landing page siap diupdate
                                    </p>
                                </div>
                            </div>

                            <div class="mt-6 rounded-[2rem] bg-white p-6 shadow-sm ring-1 ring-green-100">
                                <p class="text-sm font-black uppercase tracking-[0.2em] text-yellow-600">
                                    Ringkasan
                                </p>

                                <h3 class="mt-2 text-2xl font-black text-green-950">
                                    Kelola Konten Admin
                                </h3>

                                <div class="mt-6 grid gap-4 md:grid-cols-2">
                                    <div class="rounded-[1.5rem] bg-[#fffbea] p-5">
                                        <h4 class="text-lg font-black text-green-950">
                                            Berita PK
                                        </h4>
                                        <p class="mt-2 text-sm leading-6 text-slate-600">
                                            Berisi dokumentasi kegiatan, nama kegiatan, deskripsi singkat, dan deskripsi lengkap.
                                        </p>

                                        <a href="{{ route('admin.berita.create') }}"
                                           class="mt-4 inline-flex rounded-full bg-green-800 px-5 py-2.5 text-sm font-black text-white transition hover:bg-green-900">
                                            Tambah Berita PK
                                        </a>
                                    </div>

                                    <div class="rounded-[1.5rem] bg-green-50 p-5">
                                        <h4 class="text-lg font-black text-green-950">
                                            Program Kerja
                                        </h4>

                                        <p class="mt-2 text-sm leading-6 text-slate-600">
                                            Kelola daftar program kerja organisasi yang akan ditampilkan pada landing page.
                                        </p>

                                        <a href="{{ route('admin.program.create') }}"
                                           class="mt-4 inline-flex rounded-full bg-yellow-400 px-5 py-2.5 text-sm font-black text-green-950 transition hover:bg-yellow-500">
                                            Tambah Program
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Berita PK Section -->
                        <section id="berita-section" class="content-section mt-8 hidden">
                            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                                <div>
                                    <p class="text-sm font-black uppercase tracking-[0.2em] text-yellow-600">
                                        Berita PK
                                    </p>

                                    <h3 class="mt-2 text-3xl font-black text-green-950">
                                        Data Berita Kegiatan
                                    </h3>

                                    <p class="mt-2 text-sm text-slate-500">
                                        Kelola berita kegiatan untuk ditampilkan pada landing page.
                                    </p>
                                </div>

                                <a href="{{ route('admin.berita.create') }}"
                                   class="inline-flex items-center justify-center rounded-full bg-green-800 px-6 py-3 text-sm font-black uppercase tracking-[0.1em] text-white shadow-lg transition hover:-translate-y-1 hover:bg-green-900">
                                    + Tambah Berita PK
                                </a>
                            </div>

                            <div class="mt-6 overflow-hidden rounded-[2rem] bg-white shadow-sm ring-1 ring-green-100">
                                <div class="flex items-center justify-between border-b border-green-100 px-6 py-5">
                                    <div>
                                        <h4 class="text-xl font-black text-green-950">
                                            Tabel Berita PK
                                        </h4>
                                        <p class="text-sm text-slate-500">
                                            Daftar berita kegiatan yang sudah ditambahkan.
                                        </p>
                                    </div>
                                </div>

                                <div class="overflow-x-auto">
                                    <table class="min-w-full">
                                        <thead class="bg-green-50">
                                            <tr>
                                                <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-wider text-green-900">
                                                    Gambar
                                                </th>
                                                <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-wider text-green-900">
                                                    Nama Kegiatan
                                                </th>
                                                <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-wider text-green-900">
                                                    Deskripsi Singkat
                                                </th>
                                                <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-wider text-green-900">
                                                    Jumlah Foto
                                                </th>
                                                <th class="px-6 py-4 text-right text-xs font-black uppercase tracking-wider text-green-900">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>

                                        {{-- <tbody class="divide-y divide-green-100">
                                            <tr class="transition hover:bg-yellow-50/60">
                                                <td class="px-6 py-5">
                                                    <div class="flex -space-x-3">
                                                        <div class="h-14 w-14 rounded-2xl bg-gradient-to-br from-green-500 to-green-900 ring-4 ring-white"></div>
                                                        <div class="h-14 w-14 rounded-2xl bg-gradient-to-br from-yellow-300 to-green-700 ring-4 ring-white"></div>
                                                        <div class="h-14 w-14 rounded-2xl bg-gradient-to-br from-green-300 to-yellow-400 ring-4 ring-white"></div>
                                                    </div>
                                                </td>

                                                <td class="px-6 py-5">
                                                    <p class="font-black text-green-950">
                                                        Kajian Rutin PK
                                                    </p>
                                                    <p class="text-sm text-slate-500">
                                                        12 Januari 2026
                                                    </p>
                                                </td>

                                                <td class="max-w-xs px-6 py-5 text-sm text-slate-600">
                                                    Kegiatan kajian rutin bersama kader PK IPNU IPPNU POLIJE.
                                                </td>

                                                <td class="px-6 py-5">
                                                    <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-black text-green-800">
                                                        4 Foto
                                                    </span>
                                                </td>

                                                <td class="px-6 py-5 text-right">
                                                    <div class="flex justify-end gap-2">
                                                        <button class="rounded-full bg-yellow-400 px-4 py-2 text-xs font-black text-green-950 transition hover:bg-yellow-500">
                                                            Edit
                                                        </button>

                                                        <button class="rounded-full bg-red-100 px-4 py-2 text-xs font-black text-red-700 transition hover:bg-red-200">
                                                            Hapus
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="transition hover:bg-yellow-50/60">
                                                <td class="px-6 py-5">
                                                    <div class="flex -space-x-3">
                                                        <div class="h-14 w-14 rounded-2xl bg-gradient-to-br from-green-700 to-green-950 ring-4 ring-white"></div>
                                                        <div class="h-14 w-14 rounded-2xl bg-gradient-to-br from-yellow-300 to-yellow-500 ring-4 ring-white"></div>
                                                    </div>
                                                </td>

                                                <td class="px-6 py-5">
                                                    <p class="font-black text-green-950">
                                                        Rapat Koordinasi
                                                    </p>
                                                    <p class="text-sm text-slate-500">
                                                        18 Januari 2026
                                                    </p>
                                                </td>

                                                <td class="max-w-xs px-6 py-5 text-sm text-slate-600">
                                                    Rapat koordinasi internal pengurus untuk program kerja semester ini.
                                                </td>

                                                <td class="px-6 py-5">
                                                    <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-black text-green-800">
                                                        2 Foto
                                                    </span>
                                                </td>

                                                <td class="px-6 py-5 text-right">
                                                    <div class="flex justify-end gap-2">
                                                        <button class="rounded-full bg-yellow-400 px-4 py-2 text-xs font-black text-green-950 transition hover:bg-yellow-500">
                                                            Edit
                                                        </button>

                                                        <button class="rounded-full bg-red-100 px-4 py-2 text-xs font-black text-red-700 transition hover:bg-red-200">
                                                            Hapus
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody> --}}

                                        <tbody class="divide-y divide-green-100">

                                            @forelse($beritas as $berita)

                                            <tr class="transition hover:bg-yellow-50/60">

                                                <!-- Gambar -->
                                                <td class="px-6 py-5">
                                                    <div class="flex -space-x-3">

                                                        @foreach($berita->gambar->take(3) as $gambar)
                                                            <img
                                                                src="{{ asset('images/berita/' . $gambar->url_gambar) }}"
                                                                alt="{{ $berita->nama_kegiatan }}"
                                                                class="h-14 w-14 rounded-2xl object-cover ring-4 ring-white">
                                                        @endforeach

                                                    </div>
                                                </td>

                                                <!-- Nama Kegiatan -->
                                                <td class="px-6 py-5">
                                                    <p class="font-black text-green-950">
                                                        {{ $berita->nama_kegiatan }}
                                                    </p>

                                                    <p class="text-sm text-slate-500">
                                                        {{ \Carbon\Carbon::parse($berita->tanggal_kegiatan)->translatedFormat('d F Y') }}
                                                    </p>
                                                </td>

                                                <!-- Deskripsi -->
                                                <td class="max-w-xs px-6 py-5 text-sm text-slate-600">
                                                    {{ Str::limit($berita->deskripsi_singkat, 80) }}
                                                </td>

                                                <!-- Jumlah Foto -->
                                                <td class="px-6 py-5">
                                                    <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-black text-green-800">
                                                        {{ $berita->gambar->count() }} Foto
                                                    </span>
                                                </td>

                                                <!-- Aksi -->
                                                <td class="px-6 py-5 text-right">
                                                    <div class="flex justify-end gap-2">

                                                        <a href="{{ route('admin.berita.edit', $berita->id) }}"
                                                            class="rounded-full bg-yellow-400 px-4 py-2 text-xs font-black text-green-950 transition hover:bg-yellow-500">
                                                            Edit
                                                        </a>

                                                        <form id="deleteForm{{ $berita->id }}"
                                                            action="{{ route('admin.berita.destroy', $berita->id) }}"
                                                            method="POST">

                                                            @csrf
                                                            @method('DELETE')

                                                            <button
                                                                type="button"
                                                                onclick="hapusBerita({{ $berita->id }})"
                                                                class="rounded-full bg-red-100 px-4 py-2 text-xs font-black text-red-700 transition hover:bg-red-200">
                                                                Hapus
                                                            </button>

                                                        </form>

                                                    </div>
                                                </td>

                                            </tr>

                                            @empty

                                            <tr>
                                                <td colspan="5" class="px-6 py-10 text-center text-slate-500">
                                                    Belum ada data berita.
                                                </td>
                                            </tr>

                                            @endforelse

                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>

                        <!-- Program Kerja Section -->
                        <section id="program-section" class="content-section mt-8 hidden">
                            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                                <div>
                                    <p class="text-sm font-black uppercase tracking-[0.2em] text-yellow-600">
                                        Program Kerja
                                    </p>

                                    <h3 class="mt-2 text-3xl font-black text-green-950">
                                        Data Program Kerja
                                    </h3>

                                    <p class="mt-2 text-sm text-slate-500">
                                        Kelola program kerja yang akan tampil pada landing page.
                                    </p>
                                </div>

                                <a href="{{ route('admin.program.create') }}"
                                   class="inline-flex items-center justify-center rounded-full bg-yellow-400 px-6 py-3 text-sm font-black uppercase tracking-[0.1em] text-green-950 shadow-lg transition hover:-translate-y-1 hover:bg-yellow-500">
                                    + Tambah Program Kerja
                                </a>
                            </div>

                            <div class="mt-6 overflow-hidden rounded-[2rem] bg-white shadow-sm ring-1 ring-green-100">
                                <div class="flex items-center justify-between border-b border-green-100 px-6 py-5">
                                    <div>
                                        <h4 class="text-xl font-black text-green-950">
                                            Tabel Program Kerja
                                        </h4>
                                        <p class="text-sm text-slate-500">
                                            Daftar program kerja yang sudah ditambahkan.
                                        </p>
                                    </div>
                                </div>

                                <div class="overflow-x-auto">
                                    <table class="min-w-full">
                                        <thead class="bg-green-50">
                                            <tr>
                                                <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-wider text-green-900">
                                                    Gambar
                                                </th>
                                                <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-wider text-green-900">
                                                    Nama Program
                                                </th>
                                                <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-wider text-green-900">
                                                    Deskripsi
                                                </th>
                                                <th class="px-6 py-4 text-right text-xs font-black uppercase tracking-wider text-green-900">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody class="divide-y divide-green-100">

                                            @forelse($programs as $program)

                                            <tr class="transition hover:bg-yellow-50/60">

                                                <!-- Gambar -->
                                                <td class="px-6 py-5">

                                                    @if($program->gambar_program)

                                                        <img
                                                            src="{{ asset('images/program/' . $program->gambar_program) }}"
                                                            alt="{{ $program->nama_program }}"
                                                            class="h-14 w-14 rounded-2xl object-cover">

                                                    @else

                                                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-green-100 text-xl">
                                                            📚
                                                        </div>

                                                    @endif

                                                </td>

                                                <!-- Nama Program -->
                                                <td class="px-6 py-5 font-black text-green-950">
                                                    {{ $program->nama_program }}
                                                </td>

                                                <!-- Deskripsi -->
                                                <td class="max-w-md px-6 py-5 text-sm text-slate-600">
                                                    {{ Str::limit($program->deskripsi_program, 100) }}
                                                </td>

                                                <!-- Aksi -->
                                                <td class="px-6 py-5 text-right">

                                                    <div class="flex justify-end gap-2">

                                                        <a href="{{ route('admin.program.edit', $program->id) }}"
                                                        class="rounded-full bg-yellow-400 px-4 py-2 text-xs font-black text-green-950 transition hover:bg-yellow-500">
                                                            Edit
                                                        </a>

                                                        <form id="deleteProgram{{ $program->id }}"
                                                            action="{{ route('admin.program.destroy', $program->id) }}"
                                                            method="POST">

                                                            @csrf
                                                            @method('DELETE')

                                                            <button
                                                                type="button"
                                                                onclick="hapusProker({{ $program->id }})"
                                                                class="rounded-full bg-red-100 px-4 py-2 text-xs font-black text-red-700 transition hover:bg-red-200">
                                                                Hapus
                                                            </button>

                                                        </form>

                                                    </div>

                                                </td>

                                            </tr>

                                            @empty

                                            <tr>
                                                <td colspan="4" class="px-6 py-10 text-center text-slate-500">
                                                    Belum ada data program kerja.
                                                </td>
                                            </tr>

                                            @endforelse

                                        </tbody>

                                        {{-- <tbody class="divide-y divide-green-100">
                                            <tr class="transition hover:bg-yellow-50/60">
                                                <td class="px-6 py-5">
                                                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-green-100 text-xl">
                                                        📚
                                                    </div>
                                                </td>

                                                <td class="px-6 py-5 font-black text-green-950">
                                                    Makesta / Kaderisasi
                                                </td>

                                                <td class="max-w-md px-6 py-5 text-sm text-slate-600">
                                                    Program kaderisasi awal untuk membentuk anggota yang aktif dan berkarakter.
                                                </td>

                                                <td class="px-6 py-5 text-right">
                                                    <div class="flex justify-end gap-2">
                                                        <button class="rounded-full bg-yellow-400 px-4 py-2 text-xs font-black text-green-950 transition hover:bg-yellow-500">
                                                            Edit
                                                        </button>

                                                        <button class="rounded-full bg-red-100 px-4 py-2 text-xs font-black text-red-700 transition hover:bg-red-200">
                                                            Hapus
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="transition hover:bg-yellow-50/60">
                                                <td class="px-6 py-5">
                                                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-yellow-100 text-xl">
                                                        🕌
                                                    </div>
                                                </td>

                                                <td class="px-6 py-5 font-black text-green-950">
                                                    Kajian Rutin
                                                </td>

                                                <td class="max-w-md px-6 py-5 text-sm text-slate-600">
                                                    Kajian Aswaja, ke-NU-an, kepemimpinan, dan penguatan spiritual kader.
                                                </td>

                                                <td class="px-6 py-5 text-right">
                                                    <div class="flex justify-end gap-2">
                                                        <button class="rounded-full bg-yellow-400 px-4 py-2 text-xs font-black text-green-950 transition hover:bg-yellow-500">
                                                            Edit
                                                        </button>

                                                        <button class="rounded-full bg-red-100 px-4 py-2 text-xs font-black text-red-700 transition hover:bg-red-200">
                                                            Hapus
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody> --}}
                                    </table>
                                </div>
                            </div>
                        </section>
                    </main>

                    <!-- Panel Kanan -->
                    <aside class="col-span-12 border-t border-green-100 bg-white p-6 lg:col-span-3 lg:border-l lg:border-t-0 xl:col-span-3">
                        <div class="rounded-[1.75rem] bg-[#fcfcfc] p-5 shadow-sm ring-1 ring-green-100">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-black text-green-950">
                                    Profile
                                </h3>
                                <span class="text-slate-400">✎</span>
                            </div>

                            <div class="mt-5 text-center">
                                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-br from-green-700 to-yellow-400 text-2xl font-black text-white">
                                    A
                                </div>

                                <h4 class="mt-4 text-xl font-black text-green-950">
                                    {{ auth()->user()->name ?? 'Admin PK' }}
                                </h4>

                                <p class="text-sm text-slate-500">
                                    {{ auth()->user()->email ?? 'admin@pkpolije.com' }}
                                </p>
                            </div>
                        </div>

                        <div class="mt-6 rounded-[1.75rem] bg-white p-5 shadow-sm ring-1 ring-green-100">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-black text-green-950">
                                    Aksi Cepat
                                </h3>
                            </div>

                            <div class="mt-5 space-y-3">
                                <a href="{{ route('admin.berita.create') }}"
                                   class="flex w-full items-center justify-between rounded-2xl bg-green-50 px-4 py-4 text-left transition hover:bg-green-100">
                                    <div>
                                        <p class="font-black text-green-950">
                                            Tambah Berita
                                        </p>
                                        <p class="text-sm text-slate-500">
                                            Buat berita kegiatan baru
                                        </p>
                                    </div>
                                    <span class="text-lg">➜</span>
                                </a>

                                <a href="{{ route('admin.program.create') }}"
                                   class="flex w-full items-center justify-between rounded-2xl bg-yellow-50 px-4 py-4 text-left transition hover:bg-yellow-100">
                                    <div>
                                        <p class="font-black text-green-950">
                                            Tambah Program
                                        </p>
                                        <p class="text-sm text-slate-500">
                                            Buat program kerja baru
                                        </p>
                                    </div>
                                    <span class="text-lg">➜</span>
                                </a>
                            </div>
                        </div>

                        <div class="mt-6 rounded-[1.75rem] bg-gradient-to-br from-green-900 to-green-700 p-5 text-white shadow-lg">
                            <h3 class="text-lg font-black">
                                Info Admin
                            </h3>

                            <ul class="mt-4 space-y-3 text-sm text-green-50/90">
                                <li>• Berita mendukung upload banyak gambar</li>
                                <li>• Program kerja bisa tanpa gambar</li>
                                <li>• Form tambah dibuat di halaman terpisah</li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    <script>
        const menuButtons = document.querySelectorAll('.menu-btn');
        const contentSections = document.querySelectorAll('.content-section');

        menuButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const target = button.dataset.section;

                contentSections.forEach((section) => {
                    section.classList.add('hidden');
                });

                document.getElementById(target).classList.remove('hidden');

                menuButtons.forEach((btn) => {
                    btn.classList.remove('active', 'bg-yellow-400', 'text-green-950', 'shadow-sm', 'font-black');
                    btn.classList.add('text-slate-600');
                });

                button.classList.add('active', 'bg-yellow-400', 'text-green-950', 'shadow-sm', 'font-black');
                button.classList.remove('text-slate-600');
            });
        });
    </script>

    @push('scripts')
        <script>
        function hapusBerita(id) {

            Swal.fire({
                title: 'Hapus Berita?',
                text: 'Data yang dihapus tidak dapat dikembalikan.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#166534',
                cancelButtonColor: '#dc2626',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {

                if (result.isConfirmed) {
                    document.getElementById('deleteForm' + id).submit();
                }

            });
        }
        </script>
        @endpush

        @push('scripts')
        <script>
        function hapusProker(id) {

            Swal.fire({
                title: 'Hapus Program Kerja?',
                text: 'Data yang dihapus tidak dapat dikembalikan.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#166534',
                cancelButtonColor: '#dc2626',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {

                if (result.isConfirmed) {
                    document.getElementById('deleteProgram' + id).submit();
                }

            });
        }
        </script>
        @endpush
</x-app-layout>
