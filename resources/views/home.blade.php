<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PK IPNU IPPNU POLIJE</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-slate-800 overflow-x-hidden">

    <!-- Page Loader -->
    <div id="pageLoader" class="fixed inset-0 z-[9999] flex items-center justify-center bg-green-950 transition-all duration-700">
        <div class="relative flex flex-col items-center px-5">
            <div class="absolute h-44 w-44 animate-loader-ping rounded-full bg-yellow-300/20"></div>
            <div class="absolute h-32 w-32 animate-loader-spin rounded-full border-4 border-yellow-300 border-t-transparent"></div>

            <div class="relative flex h-28 w-28 items-center justify-center rounded-full bg-white shadow-2xl shadow-yellow-300/30">
                <img src="{{ asset('images/logo-pk-ipnu-ippnu-polije.png') }}"
                     alt="Logo PK IPNU IPPNU POLIJE"
                     class="h-20 w-auto animate-logo-pop">
            </div>

            <h2 class="mt-8 text-center text-2xl font-black text-white">
                PK IPNU IPPNU POLIJE
            </h2>

            <p class="mt-2 text-center text-xs font-semibold tracking-[0.25em] text-yellow-300 md:text-sm">
                BELAJAR • BERJUANG • BERTAKWA
            </p>

            <div class="mt-8 h-2 w-64 overflow-hidden rounded-full bg-white/10">
                <div class="h-full w-0 animate-loader-bar rounded-full bg-yellow-300"></div>
            </div>
        </div>
    </div>

    <!-- Scroll Progress Bar -->
    <div id="scrollProgress" class="fixed left-0 top-0 z-[999] h-1 w-0 bg-gradient-to-r from-yellow-300 via-green-500 to-green-800"></div>

    <!-- Back To Top -->
    <button id="backToTop"
            class="fixed bottom-6 right-6 z-[998] flex h-12 w-12 translate-y-24 items-center justify-center rounded-full bg-green-800 text-xl font-black text-white shadow-xl shadow-green-900/30 transition-all duration-500 hover:-translate-y-1 hover:bg-yellow-400 hover:text-green-950">
        ↑
    </button>

    <!-- Background Decoration -->
    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div class="blob blob-1 absolute -top-40 -right-40 h-96 w-96 rounded-full bg-green-200/50 blur-3xl"></div>
        <div class="blob blob-2 absolute top-96 -left-40 h-96 w-96 rounded-full bg-yellow-200/60 blur-3xl"></div>
        <div class="blob blob-3 absolute bottom-0 right-20 h-72 w-72 rounded-full bg-green-300/40 blur-3xl"></div>

        <div class="floating-dot left-[8%] top-[24%]"></div>
        <div class="floating-dot left-[78%] top-[30%] animation-delay-1000"></div>
        <div class="floating-dot left-[18%] top-[72%] animation-delay-2000"></div>
        <div class="floating-dot left-[88%] top-[78%] animation-delay-3000"></div>
    </div>

    <!-- Navbar -->
    <header id="navbar" class="fixed top-0 left-0 right-0 z-50 border-b border-white/30 bg-white/80 backdrop-blur-xl transition-all duration-500">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8">
            <a href="#home" class="flex items-center gap-3 transition duration-300 hover:scale-105">
                <img src="{{ asset('images/logo-pk-ipnu-ippnu-polije.png') }}"
                     alt="Logo PK IPNU IPPNU POLIJE"
                     class="h-12 w-auto">
                <div>
                    <h1 class="text-sm font-black leading-tight text-green-800 md:text-base">
                        PK IPNU IPPNU POLIJE
                    </h1>
                    <p class="text-xs font-semibold text-yellow-600">
                        Belajar, Berjuang, Bertaqwa
                    </p>
                </div>
            </a>

            <div class="hidden items-center gap-8 lg:flex">
                <a href="#home" class="nav-link">Home</a>
                <a href="#sejarah" class="nav-link">Sejarah</a>
                <a href="#program" class="nav-link">Program Kerja</a>
                <a href="#berita" class="nav-link">Berita</a>
                <a href="#daftar" class="nav-link">Daftar PK</a>

                @auth
                    <a href="{{ route('dashboard') }}" class="btn-primary">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn-primary">
                        Login
                    </a>
                @endauth
            </div>

            <button id="menuButton" class="rounded-xl border border-green-200 p-2 text-green-800 transition hover:bg-green-50 lg:hidden">
                <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path id="menuPath" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden border-t border-green-100 bg-white px-5 py-5 lg:hidden">
            <div class="flex flex-col gap-4">
                <a href="#home" class="mobile-link">Home</a>
                <a href="#sejarah" class="mobile-link">Sejarah</a>
                <a href="#program" class="mobile-link">Program Kerja</a>
                <a href="#berita" class="mobile-link">Berita</a>
                <a href="#daftar" class="mobile-link">Daftar PK</a>

                @auth
                    <a href="{{ route('dashboard') }}" class="btn-primary text-center">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn-primary text-center">
                        Login
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section id="home" class="relative min-h-screen pt-32">
        <div class="mx-auto grid max-w-7xl items-center gap-12 px-5 py-20 lg:grid-cols-2 lg:px-8">
            <div class="hero-content">
                <div class="hero-item mb-6 inline-flex items-center gap-2 rounded-full border border-green-200 bg-white px-4 py-2 shadow-sm">
                    <span class="h-2.5 w-2.5 animate-pulse rounded-full bg-green-600"></span>
                    <span class="text-sm font-bold text-green-800">
                        Pimpinan Komisariat IPNU IPPNU POLIJE
                    </span>
                </div>

                <h2 class="hero-item text-4xl font-black leading-tight text-green-950 md:text-6xl">
                    Ruang Tumbuh
                    <span class="text-yellow-500">Pelajar NU</span>
                    di Politeknik Negeri Jember
                </h2>

                <p class="hero-item mt-6 max-w-xl text-lg leading-8 text-slate-600">
                    PK IPNU IPPNU POLIJE menjadi wadah kaderisasi, pengembangan diri,
                    dakwah pelajar, dan penguatan nilai keislaman Ahlussunnah wal Jamaah
                    An-Nahdliyah di lingkungan kampus.
                </p>

                <div class="hero-item mt-8 flex flex-col gap-4 sm:flex-row">
                    <a href="#daftar" class="btn-primary text-center">
                        Daftar Anggota
                    </a>
                    <a href="#tentang" class="btn-secondary text-center">
                        Kenali PK
                    </a>
                </div>
            </div>

            <div class="hero-logo relative flex justify-center">
                <div class="absolute inset-0 m-auto h-80 w-80 rounded-full bg-yellow-300/30 blur-3xl"></div>

                <div class="relative overflow-hidden rounded-[2rem] border border-green-100 bg-white p-8 shadow-2xl shadow-green-900/10">
                    <div class="absolute -right-10 -top-10 h-28 w-28 rounded-full bg-yellow-300/30"></div>
                    <div class="absolute -bottom-10 -left-10 h-28 w-28 rounded-full bg-green-300/30"></div>

                    <img src="{{ asset('images/logo-pk-ipnu-ippnu-polije.png') }}"
                         alt="Logo PK IPNU IPPNU POLIJE"
                         class="relative mx-auto w-72">

                    <div class="relative mt-8 rounded-3xl bg-gradient-to-r from-green-700 to-green-900 p-5 text-white">
                        <p class="text-sm f ont-medium text-green-100">
                            Tema Gerakan 
                        </p>
                        <h3 class="mt-1 text-2xl font-black">
                            Belajar, Berjuang, Bertakwa
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang PK -->
    <section id="tentang" class="section-padding">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
                <div>
                    <p class="section-label">Tentang PK</p>
                    <h2 class="section-title">
                        Apa itu PK IPNU IPPNU POLIJE?
                    </h2>
                    <p class="section-desc">
                        PK IPNU IPPNU POLIJE adalah Pimpinan Komisariat Ikatan Pelajar
                        Nahdlatul Ulama dan Ikatan Pelajar Putri Nahdlatul Ulama di
                        lingkungan Politeknik Negeri Jember.
                    </p>
                    <p class="mt-4 leading-8 text-slate-600 reveal-item">
                        Organisasi ini menjadi ruang belajar, kaderisasi, pengabdian,
                        pengembangan minat bakat, serta sarana memperkuat ukhuwah
                        antar pelajar dan mahasiswa Nahdlatul Ulama.
                    </p>
                </div>

                <div class="grid gap-5 sm:grid-cols-2">
                    <div class="feature-card">
                        <div class="icon-box">📚</div>
                        <h3>Kaderisasi</h3>
                        <p>Membentuk kader pelajar NU yang aktif, kritis, dan berakhlak.</p>
                    </div>

                    <div class="feature-card">
                        <div class="icon-box">🤝</div>
                        <h3>Ukhuwah</h3>
                        <p>Menjalin persaudaraan dan kolaborasi antar anggota.</p>
                    </div>

                    <div class="feature-card">
                        <div class="icon-box">🕌</div>
                        <h3>Keagamaan</h3>
                        <p>Menguatkan nilai Islam Aswaja An-Nahdliyah.</p>
                    </div>

                    <div class="feature-card">
                        <div class="icon-box">🚀</div>
                        <h3>Pengembangan</h3>
                        <p>Menjadi ruang aktualisasi potensi kader di kampus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tujuan -->
    <section id="tujuan" class="section-padding bg-green-950 text-white">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">

            <div class="grid gap-10 lg:grid-cols-2 lg:items-end">
                <div>
                    <p class="section-label text-yellow-300">Tujuan PK</p>

                    <h2 class="text-3xl font-black leading-tight md:text-5xl reveal-item">
                        Membentuk kader pelajar NU yang berakidah kuat, aktif berkhidmah,
                        dan siap menjadi penggerak kebaikan di kampus.
                    </h2>
                </div>

                <div class="rounded-3xl border border-white/10 bg-white/10 p-6 backdrop-blur-sm">
                    <p class="text-base leading-8 text-green-50">
                        PK IPNU IPPNU POLIJE hadir sebagai wadah kaderisasi pelajar dan
                        mahasiswa Nahdlatul Ulama untuk menanamkan nilai Aswaja An-Nahdliyah,
                        memakmurkan masjid, menguatkan keilmuan, serta menumbuhkan jiwa
                        kepemimpinan dan pengabdian.
                    </p>
                </div>
            </div>

            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-4">

                <div class="group rounded-3xl border border-white/10 bg-white/10 p-7 shadow-lg transition duration-300 hover:-translate-y-2 hover:bg-white/15">
                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-yellow-400 text-lg font-black text-green-950">
                        01
                    </span>
                    <h3 class="mt-6 text-xl font-black text-white">
                        Menanamkan Aswaja
                    </h3>
                    <p class="mt-4 leading-7 text-green-50/80">
                        Menguatkan pemahaman Islam Ahlussunnah wal Jamaah An-Nahdliyah
                        melalui kajian, diskusi, dan kegiatan ke-NU-an.
                    </p>
                </div>

                <div class="group rounded-3xl border border-white/10 bg-white/10 p-7 shadow-lg transition duration-300 hover:-translate-y-2 hover:bg-white/15">
                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-yellow-400 text-lg font-black text-green-950">
                        02
                    </span>
                    <h3 class="mt-6 text-xl font-black text-white">
                        Memakmurkan Masjid
                    </h3>
                    <p class="mt-4 leading-7 text-green-50/80">
                        Menghidupkan kegiatan keagamaan di masjid, musala, dan lingkungan
                        kampus melalui ngaji, TPQ, serta amaliyah Nahdliyah.
                    </p>
                </div>

                <div class="group rounded-3xl border border-white/10 bg-white/10 p-7 shadow-lg transition duration-300 hover:-translate-y-2 hover:bg-white/15">
                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-yellow-400 text-lg font-black text-green-950">
                        03
                    </span>
                    <h3 class="mt-6 text-xl font-black text-white">
                        Mengembangkan Potensi
                    </h3>
                    <p class="mt-4 leading-7 text-green-50/80">
                        Mendorong kader agar aktif dalam bidang akademik, organisasi,
                        sosial, dakwah, dan pengembangan diri.
                    </p>
                </div>

                <div class="group rounded-3xl border border-white/10 bg-white/10 p-7 shadow-lg transition duration-300 hover:-translate-y-2 hover:bg-white/15">
                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-yellow-400 text-lg font-black text-green-950">
                        04
                    </span>
                    <h3 class="mt-6 text-xl font-black text-white">
                        Membangun Kepemimpinan
                    </h3>
                    <p class="mt-4 leading-7 text-green-50/80">
                        Mencetak kader yang berani memimpin, mampu berkolaborasi,
                        bertanggung jawab, dan siap mengabdi untuk umat.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Visi Misi -->
    <section id="visi-misi" class="section-padding bg-white">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">

            <div class="mx-auto max-w-3xl text-center">
                <p class="section-label">Visi Misi</p>
                <h2 class="section-title">
                    Arah Gerak Organisasi
                </h2>
                <p class="mt-5 text-base leading-8 text-slate-600">
                    Visi dan misi PK IPNU IPPNU POLIJE menjadi pedoman dalam membentuk
                    kader pelajar NU yang berakidah kuat, aktif berorganisasi, serta
                    mampu memberi manfaat bagi kampus dan masyarakat.
                </p>
            </div>

            <div class="mt-14 grid gap-8 lg:grid-cols-2 lg:items-stretch">

                <!-- Visi -->
                <div class="reveal-item relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-green-700 via-green-800 to-green-950 p-8 text-white shadow-xl">
                    <div class="absolute -right-12 -top-12 h-40 w-40 rounded-full bg-yellow-300/20"></div>
                    <div class="absolute -bottom-16 -left-16 h-52 w-52 rounded-full bg-white/10"></div>

                    <div class="relative z-10">
                        <span class="inline-flex rounded-full bg-yellow-400 px-4 py-2 text-sm font-bold uppercase tracking-[0.2em] text-green-950">
                            Visi
                        </span>

                        <h3 class="mt-6 text-3xl font-black leading-tight md:text-4xl">
                            Terwujudnya kader pelajar NU yang religius, berilmu, berakhlak,
                            dan siap berkhidmah.
                        </h3>

                        <p class="mt-6 leading-8 text-green-50">
                            Menjadikan PK IPNU IPPNU POLIJE sebagai wadah kaderisasi pelajar
                            dan mahasiswa Nahdlatul Ulama yang aktif dalam mengamalkan
                            nilai-nilai Aswaja An-Nahdliyah, menghidupkan kegiatan keagamaan,
                            serta berkontribusi positif bagi kampus, masyarakat, dan NU.
                        </p>
                    </div>
                </div>

                <!-- Misi -->
                <div class="reveal-item rounded-[2rem] border border-green-100 bg-white p-8 shadow-xl shadow-green-900/5">
                    <span class="inline-flex rounded-full bg-green-100 px-4 py-2 text-sm font-bold uppercase tracking-[0.2em] text-green-800">
                        Misi
                    </span>

                    <h3 class="mt-6 text-3xl font-black text-green-950">
                        Langkah Perjuangan
                    </h3>

                    <div class="mt-7 space-y-5">

                        <div class="flex gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-green-700 text-sm font-black text-white">
                                01
                            </div>
                            <div>
                                <h4 class="font-bold text-green-950">
                                    Menguatkan Akidah Aswaja
                                </h4>
                                <p class="mt-1 leading-7 text-slate-600">
                                    Menanamkan pemahaman Islam Ahlussunnah wal Jamaah
                                    An-Nahdliyah melalui kajian, diskusi, dan amaliyah NU.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-green-700 text-sm font-black text-white">
                                02
                            </div>
                            <div>
                                <h4 class="font-bold text-green-950">
                                    Menghidupkan Kegiatan Keagamaan
                                </h4>
                                <p class="mt-1 leading-7 text-slate-600">
                                    Berperan aktif dalam memakmurkan masjid, musala, TPQ,
                                    kegiatan ngaji, serta tradisi keagamaan Nahdliyah.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-green-700 text-sm font-black text-white">
                                03
                            </div>
                            <div>
                                <h4 class="font-bold text-green-950">
                                    Meningkatkan Kualitas Kader
                                </h4>
                                <p class="mt-1 leading-7 text-slate-600">
                                    Membentuk kader yang aktif, mandiri, bertanggung jawab,
                                    dan memiliki kemampuan dalam organisasi maupun akademik.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-green-700 text-sm font-black text-white">
                                04
                            </div>
                            <div>
                                <h4 class="font-bold text-green-950">
                                    Membangun Sinergi dan Pengabdian
                                </h4>
                                <p class="mt-1 leading-7 text-slate-600">
                                    Menjalin hubungan baik dengan kampus, pesantren, alumni,
                                    dan masyarakat dalam kegiatan kaderisasi, sosial, dan dakwah.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sejarah -->
    <section id="sejarah" class="section-padding bg-green-50">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">

                <!-- Kiri -->
                <div>
                    <p class="section-label">Sejarah</p>

                    <h2 class="section-title">
                        Perjalanan PK IPNU IPPNU POLIJE
                    </h2>

                    <p class="section-desc">
                        PK IPNU IPPNU POLIJE berdiri pada tahun 2014 sebagai ruang
                        berkumpulnya pelajar, mahasiswa, kader IPNU IPPNU, serta santri
                        Nahdlatul Ulama yang memiliki semangat untuk menghidupkan nilai-nilai
                        Aswaja dan ke-NU-an di lingkungan Politeknik Negeri Jember.
                    </p>

                    <p class="mt-5 text-base leading-8 text-slate-600">
                        Pada masa awal berdirinya, organisasi ini banyak bergerak melalui
                        kegiatan keagamaan di masjid, musala, dan lingkungan sekitar kampus.
                        Kader-kadernya turut membantu kegiatan mengaji, TPQ, pembacaan
                        nadoman Aqidatul Awam, serta diskusi isu-isu keislaman dan kebangsaan.
                    </p>

                    <div class="mt-8 rounded-3xl bg-white p-6 shadow-sm border border-green-100">
                        <p class="text-sm font-semibold uppercase tracking-[0.25em] text-yellow-600">
                            Ketua Pertama
                        </p>
                        <h3 class="mt-2 text-2xl font-black text-green-950">
                            Rekan Ardi
                        </h3>
                        <p class="mt-3 text-slate-600 leading-7">
                            Setelah periode awal tersebut, estafet kepemimpinan dilanjutkan
                            oleh Rekan Sofyan dan kader-kader berikutnya.
                        </p>
                    </div>
                </div>

                <!-- Kanan / Timeline -->
                <div class="relative">
                    <div class="absolute left-6 top-4 bottom-4 w-1 rounded-full bg-green-200 hidden sm:block"></div>

                    <div class="space-y-6">

                        <div class="relative rounded-3xl bg-white p-6 pl-8 shadow-md border border-green-100">
                            <div class="absolute -left-1 top-7 hidden h-4 w-4 rounded-full bg-green-700 ring-4 ring-green-100 sm:block"></div>
                            <span class="text-sm font-bold uppercase tracking-[0.2em] text-yellow-600">
                                2014
                            </span>
                            <h3 class="mt-2 text-2xl font-black text-green-950">
                                Awal Berdiri
                            </h3>
                            <p class="mt-3 text-slate-600 leading-7">
                                Bermula dari beberapa kader IPNU yang aktif di kampung halaman
                                dan para santri pesantren NU yang kemudian berkumpul, berdiskusi,
                                serta menggagas gerakan pelajar NU di POLIJE.
                            </p>
                        </div>

                        <div class="relative rounded-3xl bg-white p-6 pl-8 shadow-md border border-green-100">
                            <div class="absolute -left-1 top-7 hidden h-4 w-4 rounded-full bg-green-700 ring-4 ring-green-100 sm:block"></div>
                            <span class="text-sm font-bold uppercase tracking-[0.2em] text-yellow-600">
                                Tujuan Awal
                            </span>
                            <h3 class="mt-2 text-2xl font-black text-green-950">
                                Memakmurkan Masjid dan Menguatkan Aswaja
                            </h3>
                            <p class="mt-3 text-slate-600 leading-7">
                                Tujuan awal PK IPNU IPPNU POLIJE adalah memakmurkan masjid,
                                membumikan ajaran Aswaja di kampus, dan menjadikan kader
                                sebagai pelajar NU yang aktif dalam kegiatan keagamaan.
                            </p>
                        </div>

                        <div class="relative rounded-3xl bg-white p-6 pl-8 shadow-md border border-green-100">
                            <div class="absolute -left-1 top-7 hidden h-4 w-4 rounded-full bg-green-700 ring-4 ring-green-100 sm:block"></div>
                            <span class="text-sm font-bold uppercase tracking-[0.2em] text-yellow-600">
                                Kegiatan Awal
                            </span>
                            <h3 class="mt-2 text-2xl font-black text-green-950">
                                Ngaji, TPQ, dan Kajian Ke-NU-an
                            </h3>
                            <p class="mt-3 text-slate-600 leading-7">
                                Kegiatan awal banyak diisi dengan membantu guru ngaji,
                                mengajar di musala yang telah ditentukan, TPQ, pembacaan
                                nadoman Aqidatul Awam, diskusi Aswaja, dan kajian ke-NU-an.
                            </p>
                        </div>

                        <div class="relative rounded-3xl bg-white p-6 pl-8 shadow-md border border-green-100">
                            <div class="absolute -left-1 top-7 hidden h-4 w-4 rounded-full bg-green-700 ring-4 ring-green-100 sm:block"></div>
                            <span class="text-sm font-bold uppercase tracking-[0.2em] text-yellow-600">
                                Perkembangan
                            </span>
                            <h3 class="mt-2 text-2xl font-black text-green-950">
                                Bersinergi dengan Kampus dan Pesantren
                            </h3>
                            <p class="mt-3 text-slate-600 leading-7">
                                Dalam perjalanannya, PK IPNU IPPNU POLIJE sering bersinergi
                                dengan direktur, jajaran kampus, serta pesantren di sekitar
                                POLIJE dalam kegiatan keagamaan dan penguatan kaderisasi.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Program Kerja -->
    <section id="program" class="section-padding">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="text-center">
                <p class="section-label">Program Kerja</p>
                <h2 class="section-title">
                    Program Unggulan PK
                </h2>
                <p class="section-desc mx-auto">
                    Berikut contoh program kerja yang dapat dikembangkan sesuai kebutuhan organisasi.
                </p>
            </div>

            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <div class="program-card">
                    <span>01</span>
                    <h3>Makesta / Kaderisasi</h3>
                    <p>Pengenalan organisasi dan pembentukan karakter kader baru.</p>
                </div>

                <div class="program-card">
                    <span>02</span>
                    <h3>Kajian Rutin</h3>
                    <p>Kajian Aswaja, ke-NU-an, kepemimpinan, dan keorganisasian.</p>
                </div>

                <div class="program-card">
                    <span>03</span>
                    <h3>Ngaji Bareng</h3>
                    <p>Kegiatan keagamaan untuk memperkuat spiritualitas kader.</p>
                </div>

                <div class="program-card">
                    <span>04</span>
                    <h3>Bakti Sosial</h3>
                    <p>Pengabdian kepada masyarakat dan lingkungan sekitar.</p>
                </div>

                <div class="program-card">
                    <span>05</span>
                    <h3>Pelatihan Desain & Media</h3>
                    <p>Meningkatkan skill publikasi, desain, dan digital branding organisasi.</p>
                </div>

                <div class="program-card">
                    <span>06</span>
                    <h3>Silaturahmi Kader</h3>
                    <p>Menguatkan hubungan antar anggota, alumni, dan badan otonom NU.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita -->
    <section id="berita" class="section-padding bg-yellow-50">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
                <div>
                    <p class="section-label">Berita</p>
                    <h2 class="section-title">
                        Kabar Terbaru
                    </h2>
                </div>

                <a href="#" class="reveal-item font-bold text-green-800 transition hover:text-yellow-600">
                    Lihat Semua Berita →
                </a>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-3">
                <article class="news-card">
                    <div class="news-image bg-gradient-to-br from-green-500 to-green-900"></div>
                    <div class="p-6">
                        <p class="news-date">12 Januari 2026</p>
                        <h3>Kajian Rutin Perdana PK IPNU IPPNU POLIJE</h3>
                        <p>Kegiatan kajian rutin berjalan dengan penuh antusias bersama kader baru.</p>
                    </div>
                </article>

                <article class="news-card">
                    <div class="news-image bg-gradient-to-br from-yellow-300 to-green-700"></div>
                    <div class="p-6">
                        <p class="news-date">20 Januari 2026</p>
                        <h3>Rapat Kerja Pengurus Komisariat</h3>
                        <p>Pengurus menyusun arah gerak dan program prioritas satu periode.</p>
                    </div>
                </article>

                <article class="news-card">
                    <div class="news-image bg-gradient-to-br from-green-300 to-yellow-400"></div>
                    <div class="p-6">
                        <p class="news-date">28 Januari 2026</p>
                        <h3>Silaturahmi dan Konsolidasi Kader</h3>
                        <p>Memperkuat hubungan antar kader dan meningkatkan semangat organisasi.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Dokumentasi -->
    <section id="dokumentasi" class="section-padding">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="text-center">
                <p class="section-label">Dokumentasi Kegiatan</p>
                <h2 class="section-title">
                    Galeri Aktivitas
                </h2>
                <p class="section-desc mx-auto">
                    Klik nama kegiatan untuk melihat dokumentasi foto kegiatan.
                </p>
            </div>

            <div class="mt-12 grid grid-cols-2 gap-4 md:grid-cols-4">

                <!-- Halal Bihalal -->
                <button
                    type="button"
                    class="gallery-card gallery-photo-card open-gallery h-48"
                    data-title="Halal Bihalal ke Pembina"
                    data-description="Kegiatan silaturahmi dan halal bihalal PK IPNU IPPNU POLIJE ke pembina."
                    data-images='[
                        "{{ asset('images/dokumentasi/halalbihalal-1.jpeg') }}",
                        "{{ asset('images/dokumentasi/halalbihalal-2.jpeg') }}",
                        "{{ asset('images/dokumentasi/halalbihalal-3.jpeg') }}"
                    ]'>

                    <img src="{{ asset('images/dokumentasi/halalbihalal-1.jpeg') }}"
                        alt="Halal Bihalal ke Pembina"
                        class="gallery-cover-img">

                    <div class="gallery-cover-overlay"></div>

                    <div class="gallery-cover-content">
                        <h3>Halal Bihalal ke Pembina</h3>
                    </div>
                </button>

                <!-- bagi - bagi takjil -->
                <button
                    type="button"
                    class="gallery-card gallery-photo-card open-gallery h-64 md:row-span-2 md:h-auto"
                    data-title="Makesta"
                    data-description="Dokumentasi kegiatan Makesta PK IPNU IPPNU POLIJE."
                    data-images='[
                        "{{ asset('images/dokumentasi/bagi-bagi-takjil-1.jpeg') }}",
                        "{{ asset('images/dokumentasi/bagi-bagi-takjil-2.jpeg') }}",
                        "{{ asset('images/dokumentasi/bagi-bagi-takjil-3.jpeg') }}",
                        "{{ asset('images/dokumentasi/bagi-bagi-takjil-4.jpeg') }}"
                    ]'>

                    <img src="{{ asset('images/dokumentasi/bagi-bagi-takjil-1.jpeg') }}"
                        alt="Makesta"
                        class="gallery-cover-img">

                    <div class="gallery-cover-overlay"></div>

                    <div class="gallery-cover-content">
                        <h3>Bagi - Bagi Takjil</h3>
                    </div>
                </button>

                <!-- Rutinan Tahlil -->
                <button
                    type="button"
                    class="gallery-card gallery-photo-card open-gallery h-48"
                    data-title="Raker"
                    data-description="Dokumentasi kegiatan rapat kerja PK IPNU IPPNU POLIJE."
                    data-images='[
                        "{{ asset('images/dokumentasi/rutinan-tahlil-1.jpeg') }}"
                    ]'>

                    <img src="{{ asset('images/dokumentasi/rutinan-tahlil-1.jpeg') }}"
                        alt="Raker"
                        class="gallery-cover-img">

                    <div class="gallery-cover-overlay"></div>

                    <div class="gallery-cover-content">
                        <h3>Rutinan Tahlil</h3>
                    </div>
                </button>

                <!-- Baksos -->
                <button
                    type="button"
                    class="gallery-card gallery-photo-card open-gallery h-48"
                    data-title="Baksos"
                    data-description="Dokumentasi kegiatan bakti sosial PK IPNU IPPNU POLIJE."
                    data-images='[
                        "{{ asset('images/dokumentasi/buka-bersama-1.jpeg') }}",
                        "{{ asset('images/dokumentasi/buka-bersama-1.jpeg') }}"
                        
                    ]'>

                    <img src="{{ asset('images/dokumentasi/buka-bersama-1.jpeg') }}"
                        alt="Baksos"
                        class="gallery-cover-img">

                    <div class="gallery-cover-overlay"></div>

                    <div class="gallery-cover-content">
                        <h3>Buka Bersama</h3>
                    </div>
                </button>

                <!-- Kegiatan PC -->
                <button
                    type="button"
                    class="gallery-card gallery-photo-card open-gallery h-48"
                    data-title="Diskusi"
                    data-description="Dokumentasi kegiatan diskusi PK IPNU IPPNU POLIJE."
                    data-images='[
                        "{{ asset('images/dokumentasi/kegiatan-pc-1.jpeg') }}",
                        "{{ asset('images/dokumentasi/kegiatan-pc-2.jpeg') }}"
                    ]'>

                    <img src="{{ asset('images/dokumentasi/kegiatan-pc-1.jpeg') }}"
                        alt="Diskusi"
                        class="gallery-cover-img">

                    <div class="gallery-cover-overlay"></div>

                    <div class="gallery-cover-content">
                        <h3>Lomba Olahraga badminton</h3>
                    </div>
                </button>

                <!-- Pelatihan -->
                <button
                    type="button"
                    class="gallery-card gallery-photo-card open-gallery h-48"
                    data-title="Pelatihan"
                    data-description="Dokumentasi kegiatan pelatihan PK IPNU IPPNU POLIJE."
                    data-images='[
                        "{{ asset('images/dokumentasi/halalbihalal-1.jpg') }}",
                        "{{ asset('images/dokumentasi/halalbihalal-2.jpg') }}",
                        "{{ asset('images/dokumentasi/halalbihalal-3.jpg') }}"
                    ]'>

                    <img src="{{ asset('images/dokumentasi/halalbihalal-3.jpg') }}"
                        alt="Pelatihan"
                        class="gallery-cover-img">

                    <div class="gallery-cover-overlay"></div>

                    <div class="gallery-cover-content">
                        <span class="gallery-photo-count">3 Foto</span>
                        <h3>Pelatihan</h3>
                    </div>
                </button>

                <!-- Silaturahmi -->
                <button
                    type="button"
                    class="gallery-card gallery-photo-card open-gallery h-48"
                    data-title="Silaturahmi"
                    data-description="Dokumentasi kegiatan silaturahmi PK IPNU IPPNU POLIJE."
                    data-images='[
                        "{{ asset('images/dokumentasi/halalbihalal-1.jpg') }}",
                        "{{ asset('images/dokumentasi/halalbihalal-2.jpg') }}",
                        "{{ asset('images/dokumentasi/halalbihalal-3.jpg') }}"
                    ]'>

                    <img src="{{ asset('images/dokumentasi/halalbihalal-1.jpg') }}"
                        alt="Silaturahmi"
                        class="gallery-cover-img">

                    <div class="gallery-cover-overlay"></div>

                    <div class="gallery-cover-content">
                        <span class="gallery-photo-count">3 Foto</span>
                        <h3>Silaturahmi</h3>
                    </div>
                </button>
            </div>
        </div>
    </section>

    <!-- Modal Dokumentasi -->
    <div id="galleryModal" class="gallery-modal hidden">
        <div id="galleryBackdrop" class="gallery-backdrop"></div>

        <div class="gallery-modal-content">
            <button type="button" id="closeGallery" class="gallery-close">
                ✕
            </button>

            <div class="gallery-header">
                <h3 id="galleryTitle" class="gallery-modal-title">
                    Judul Kegiatan
                </h3>
                <p id="galleryDescription" class="gallery-modal-desc">
                    Deskripsi kegiatan.
                </p>
            </div>

            <div class="gallery-viewer">
                <button type="button" id="prevImage" class="gallery-nav">
                    ‹
                </button>

                <div class="gallery-image-wrapper">
                    <img id="galleryMainImage"
                        src=""
                        alt="Dokumentasi Kegiatan"
                        class="gallery-main-image">

                    <div id="galleryCounter" class="gallery-counter">
                        1 / 3
                    </div>
                </div>

                <button type="button" id="nextImage" class="gallery-nav">
                    ›
                </button>
            </div>

            <div id="galleryThumbs" class="gallery-thumbs"></div>
        </div>
    </div>

    <!-- Ketua IPNU -->
    <section id="ketua-ipnu" class="section-padding bg-green-50">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="text-center">
                <p class="section-label">Ketua PK IPNU POLIJE</p>
                <h2 class="section-title">
                    Ketua PK IPNU dari Masa ke Masa
                </h2>
                <p class="section-desc mx-auto">
                    Dokumentasi kepemimpinan PK IPNU POLIJE dari periode sebelumnya hingga periode sekarang.
                </p>
            </div>

            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                <div class="leader-card">
                    <div class="leader-photo-placeholder">
                        <img src="{{ asset('images/ketua-ipnu-2014-2015.png') }}"
                            alt="Ketua PK IPNU POLIJE Periode 2014 - 2015"
                            class="leader-photo">
                    </div>
                    <h3>Dr Cand, Muhammad Ardi Wiranata, S.ST., M.Tr.P.</S></h3>
                    <p>Periode 2014 - 2015</p>
                </div>

                <div class="leader-card">
                    <div class="leader-photo-placeholder">
                        <img src="{{ asset('images/ketua-ipnu-2016-2017.png') }}"
                            alt="Ketua PK IPNU POLIJE Periode 2016 - 2017"
                            class="leader-photo">
                    </div>
                    <h3>Sofyan Wanadi</S></h3>
                    <p>Periode 2016 - 2017</p>
                </div>

                <div class="leader-card">
                    <div class="leader-photo-placeholder">
                        <img src="{{ asset('images/ketua-ipnu-2017-2018.png') }}"
                            alt="Ketua PK IPNU POLIJE Periode 2017 - 2018"
                            class="leader-photo">
                    </div>
                    <h3>M.Ridwan, S.Tr.P</S></h3>
                    <p>Periode 2017 - 2018</p>
                </div>

                <div class="leader-card">
                    <div class="leader-photo-placeholder">
                        <img src="{{ asset('images/ketua-ipnu-2018-2019.png') }}"
                            alt="Ketua PK IPNU POLIJE Periode 2018 - 2019"
                            class="leader-photo">
                    </div>
                    <h3>Muammar Khadafi, S.Tr.P</h3>
                    <p>Periode 2018 - 2019</p>
                </div>

                <div class="leader-card">
                    <div class="leader-photo-placeholder">
                        <img src="{{ asset('images/ketua-ipnu-2019-2020.png') }}"
                            alt="Ketua PK IPNU POLIJE Periode 2019 - 2020"
                            class="leader-photo">
                    </div>
                    <h3>Ainur Rizky</h3>
                    <p>Periode 2019 - 2020</p>
                </div>

                <div class="leader-card">
                    <div class="leader-photo-placeholder">
                        <img src="{{ asset('images/ketua-ipnu-2020-2021.png') }}"
                            alt="Ketua PK IPNU POLIJE Periode 2020 - 20231"
                            class="leader-photo">
                    </div>
                    <h3>Lucky Nurcahya S.</h3>
                    <p>Periode 2020 - 2021</p>
                </div>

                <div class="leader-card">
                    <div class="leader-photo-placeholder">
                        <img src="{{ asset('images/ketua-ipnu-2022-2024.png') }}"
                            alt="Ketua PK IPNU POLIJE Periode 2022 - 2023"
                            class="leader-photo">
                    </div>
                    <h3>Dwi Prasetiyo Utomo</h3>
                    <p>Periode 2022 - 2024</p>
                </div>

                <div class="leader-card">
                    <div class="leader-photo-placeholder">
                        <span>IP</span>
                    </div>
                    <h3>Deni Putra Abdullah</h3>
                    <p>Periode 2023 - 2024</p>
                </div>

                <div class="leader-card">
                    <div class="leader-photo-box">
                        <img src="{{ asset('images/ketua-ipnu-2024-2025.png') }}"
                            alt="Ketua PK IPNU POLIJE Periode 2024 - 2025"
                            class="leader-photo">
                    </div>

                    <h3>M. Ainul Yakin A.Md.P</h3>
                    <p>Periode 2024 - 2025</p>
                </div>

                <div class="leader-card active-leader">
                    <div class="leader-photo-box">
                        <img src="{{ asset('images/ketua-ipnu-2025-2026.png') }}"
                            alt="Ketua PK IPNU POLIJE Periode 2025 - 2026"
                            class="leader-photo">
                    </div>

                    <div class="mt-5 inline-flex rounded-full bg-green-800 px-4 py-2 text-xs font-black uppercase tracking-widest text-white">
                        Ketua Sekarang
                    </div>

                    <h3>Ahmad Adi Firmansyah</h3>
                    <p>Periode 2025 - 2026</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ketua IPPNU -->
    <section id="ketua-ippnu" class="section-padding">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="text-center">
                <p class="section-label">Ketua PK IPPNU POLIJE</p>
                <h2 class="section-title">
                    Ketua PK IPPNU dari Masa ke Masa
                </h2>
                <p class="section-desc mx-auto">
                    kepemimpinan PK IPPNU POLIJE dari periode sebelumnya hingga periode sekarang.
                </p>
            </div>

            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                <div class="leader-card">
                    <div class="leader-photo-box">
                        <img src="{{ asset('images/ketua-ippnu-2016-2017.png') }}"
                            alt="Ketua PK IPPNU POLIJE Periode 2016 - 2017"
                            class="leader-photo">
                    </div>
                    <h3>Wahyu TrecyIndriani</h3>
                    <p>Periode 2016 - 2017</p>
                </div>

                <div class="leader-card">
                    <div class="leader-photo-box">
                        <img src="{{ asset('images/ketua-ippnu-2017-2018.png') }}"
                            alt="Ketua PK IPPNU POLIJE Periode 2017 - 2018"
                            class="leader-photo">
                    </div>
                    <h3>Putri Ludviani</h3>
                    <p>Periode 2017 - 2018</p>
                </div>

                <div class="leader-card">
                    <div class="leader-photo-box">
                        <img src="{{ asset('images/ketua-ippnu-2018-2019.png') }}"
                            alt="Ketua PK IPPNU POLIJE Periode 2018 - 2019"
                            class="leader-photo">
                    </div>
                    <h3>Qurrota A’yun</h3>
                    <p>Periode 2018 - 2019</p>
                </div>

                <div class="leader-card">
                    <div class="leader-photo-placeholder ippnu-placeholder">
                        <img src="{{ asset('images/ketua_ippnu_2020-2021.png') }}"
                            alt="Ketua PK IPPNU POLIJE Periode 2019-2020"
                            class="leader-photo">
                    </div>
                    <h3>Lutfi Kurniawati, S.Tr.Gz</h3>
                    <p>Periode 2019 - 2020</p>
                </div>

                <div class="leader-card">
                    <div class="leader-photo-placeholder ippnu-placeholder">
                        <img src="{{ asset('images/ketua_ippnu_2021-2022.png') }}"
                            alt="Ketua PK IPPNU POLIJE Periode 2020-2021"
                            class="leader-photo">
                    </div>
                    <h3>Yafi' Griselda Aprilia Warsono Putri S.Tr.P</h3>
                    <p>Periode 2020 - 2021</p>
                </div>

                <div class="leader-card">
                    <div class="leader-photo-placeholder ippnu-placeholder">
                        <img src="{{ asset('images/ketua_ippnu_2022 – 2023.png') }}"
                            alt="Ketua PK IPPNU POLIJE Periode 2022 - 2023"
                            class="leader-photo">
                    </div>
                    <h3>Bening Prastika Utami. S.Tr.P</h3>
                    <p>Periode 2022 - 2023</p>
                </div>

                <div class="leader-card">
                    <div class="leader-photo-placeholder ippnu-placeholder">
                        <img src="{{ asset('images/ketua_ippnu_ 2023-2024.png') }}"
                            alt="Ketua PK IPPNU POLIJE Periode 2023 - 2024"
                            class="leader-photo">
                    </div>
                    <h3>Fira Wahyuni, S.Tr.P</h3>
                    <p>Periode 2023 - 2024</p>
                </div>

                <div class="leader-card">
                    <div class="leader-photo-box">
                        <img src="{{ asset('images/ketua-ippnu-2024-2025.png') }}"
                            alt="Ketua PK IPPNU POLIJE Periode 2024 - 2025"
                            class="leader-photo">
                    </div>
                    <h3>Qorina Nadya Salvi</h3>
                    <p>Periode 2024 - 2025</p>
                </div>

                <div class="leader-card active-leader">
                    <div class="leader-photo-box">
                        <img src="{{ asset('images/ketua-ippnu-2025-2026.png') }}"
                            alt="Ketua PK IPPNU POLIJE Periode 2025 - 2026"
                            class="leader-photo">
                    </div>

                    <div class="mt-5 inline-flex rounded-full bg-yellow-400 px-4 py-2 text-xs font-black uppercase tracking-widest text-green-950">
                        Ketua Sekarang
                    </div>

                    <h3>Wardah Firdausiyah</h3>
                    <p>Periode 2025 - 2026</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="section-padding bg-green-950 text-white">
        <div class="mx-auto max-w-4xl px-5 lg:px-8">
            <div class="text-center">
                <p class="section-label text-yellow-300">FAQ</p>
                <h2 class="text-3xl font-black md:text-5xl reveal-item">
                    Pertanyaan yang Sering Ditanyakan
                </h2>
            </div>

            <div class="mt-12 space-y-4">
                <details class="faq-card">
                    <summary>Siapa saja yang bisa bergabung?</summary>
                    <p>Mahasiswa Politeknik Negeri Jember yang ingin belajar, berorganisasi, dan berproses bersama IPNU IPPNU.</p>
                </details>

                <details class="faq-card">
                    <summary>Apakah harus punya pengalaman organisasi?</summary>
                    <p>Tidak harus. Semua anggota bisa belajar dari awal melalui proses kaderisasi dan kegiatan rutin.</p>
                </details>

                <details class="faq-card">
                    <summary>Apa manfaat bergabung dengan PK?</summary>
                    <p>Menambah relasi, pengalaman organisasi, kemampuan kepemimpinan, skill komunikasi, dan pemahaman keislaman Aswaja.</p>
                </details>

                <details class="faq-card">
                    <summary>Bagaimana cara daftar?</summary>
                    <p>Silakan hubungi kontak person atau klik tombol daftar anggota pada halaman ini.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- Daftar & Kontak -->
    <section id="daftar" class="section-padding">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="grid gap-8 lg:grid-cols-2">
                <div class="reveal-item rounded-[2rem] bg-gradient-to-br from-yellow-300 to-yellow-500 p-8 text-green-950 shadow-xl">
                    <p class="font-black uppercase tracking-widest">Daftar PK</p>
                    <h2 class="mt-3 text-3xl font-black md:text-5xl">
                        Siap menjadi bagian dari PK IPNU IPPNU POLIJE?
                    </h2>
                    <p class="mt-5 leading-8">
                        Mari berproses, belajar, dan bergerak bersama dalam wadah kaderisasi
                        pelajar Nahdlatul Ulama di Politeknik Negeri Jember.
                    </p>

                    <a href="https://forms.gle/isi-link-google-form-kamu"
                       target="_blank"
                       class="mt-8 inline-flex rounded-full bg-green-950 px-7 py-4 font-black text-white transition hover:scale-105 hover:bg-green-800">
                        Isi Form Pendaftaran
                    </a>
                </div>

                <div id="kontak" class="reveal-item rounded-[2rem] border border-green-100 bg-white p-8 shadow-xl shadow-green-900/5">
                    <p class="section-label">Kontak Person</p>
                    <h2 class="section-title">
                        Hubungi Kami
                    </h2>

                    <div class="mt-8 space-y-5">
                        <a href="https://wa.me/6281252181674"
                           target="_blank"
                           class="contact-card">
                            <span>📱</span>
                            <div>
                                <h3>WhatsApp</h3>
                                <p>+62 812-5218-1674</p>
                            </div>
                        </a>

                        <a href="https://instagram.com/"
                           target="_blank"
                           class="contact-card">
                            <span>📸</span>
                            <div>
                                <h3>Instagram</h3>
                                <p>@pkipnuippnupolije</p>
                            </div>
                        </a>

                        <a href="mailto:pkipnuippnupolije@gmail.com"
                           class="contact-card">
                            <span>✉️</span>
                            <div>
                                <h3>Email</h3>
                                <p>pkipnuippnupolije@gmail.com</p>
                            </div>
                        </a>

                        <div class="contact-card">
                            <span>📍</span>
                            <div>
                                <h3>Alamat</h3>
                                <p>Politeknik Negeri Jember</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-950 text-white">
        <div class="mx-auto grid max-w-7xl gap-10 px-5 py-12 md:grid-cols-4 lg:px-8">
            <div class="md:col-span-2">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/logo-pk-ipnu-ippnu-polije.png') }}"
                         alt="Logo"
                         class="h-14 w-auto">
                    <div>
                        <h3 class="font-black">PK IPNU IPPNU POLIJE</h3>
                        <p class="text-sm text-green-200">Pelajar, Santri, Mahasiswa</p>
                    </div>
                </div>

                <p class="mt-5 max-w-md leading-8 text-green-100">
                    Website resmi PK IPNU IPPNU POLIJE sebagai media informasi,
                    dokumentasi, publikasi kegiatan, dan pendaftaran anggota.
                </p>
            </div>

            <div>
                <h4 class="font-black text-yellow-300">Menu</h4>
                <div class="mt-4 space-y-3 text-green-100">
                    <a href="#tentang" class="block hover:text-yellow-300">Tentang</a>
                    <a href="#program" class="block hover:text-yellow-300">Program Kerja</a>
                    <a href="#berita" class="block hover:text-yellow-300">Berita</a>
                    <a href="#faq" class="block hover:text-yellow-300">FAQ</a>
                </div>
            </div>

            <div>
                <h4 class="font-black text-yellow-300">Sosial Media</h4>
                <div class="mt-4 space-y-3 text-green-100">
                    <a href="#" class="block hover:text-yellow-300">Instagram</a>
                    <a href="#" class="block hover:text-yellow-300">TikTok</a>
                    <a href="#" class="block hover:text-yellow-300">YouTube</a>
                </div>
            </div>
        </div>

        <div class="border-t border-white/10 py-5 text-center text-sm text-green-100">
            © {{ date('Y') }} PK IPNU IPPNU POLIJE. All Rights Reserved.
        </div>
    </footer>

    <script>
        // Mobile Menu
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuPath = document.getElementById('menuPath');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');

            if (mobileMenu.classList.contains('hidden')) {
                menuPath.setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
            } else {
                menuPath.setAttribute('d', 'M6 18L18 6M6 6l12 12');
            }
        });

        document.querySelectorAll('.mobile-link').forEach((link) => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuPath.setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
            });
        });

        // Page Loader
        window.addEventListener('load', () => {
            const loader = document.getElementById('pageLoader');

            setTimeout(() => {
                loader.classList.add('opacity-0', 'invisible', 'scale-110');
            }, 1200);
        });

        // Scroll Elements
        const navbar = document.getElementById('navbar');
        const scrollProgress = document.getElementById('scrollProgress');
        const backToTop = document.getElementById('backToTop');
        const heroLogo = document.querySelector('.hero-logo');

        let ticking = false;

        function updateScrollEffects() {
            const scrollTop = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercent = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;

            scrollProgress.style.width = `${scrollPercent}%`;

            if (scrollTop > 80) {
                navbar.classList.add('shadow-xl', 'shadow-green-900/10', 'bg-white/95');
                backToTop.classList.remove('translate-y-24');
            } else {
                navbar.classList.remove('shadow-xl', 'shadow-green-900/10', 'bg-white/95');
                backToTop.classList.add('translate-y-24');
            }

            if (heroLogo) {
                const parallaxValue = Math.min(scrollTop * 0.035, 80);
                heroLogo.style.setProperty('--hero-parallax', `${parallaxValue}px`);
            }

            ticking = false;
        }

        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(updateScrollEffects);
                ticking = true;
            }
        }, {
            passive: true
        });

        updateScrollEffects();

        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Smooth Reveal Animation
        const revealTargets = document.querySelectorAll(`
            .section-label,
            .section-title,
            .section-desc,
            .reveal-item,
            .feature-card,
            .dark-card,
            .timeline-card,
            .program-card,
            .news-card,
            .gallery-card,
            .leader-card,
            .faq-card,
            .contact-card
        `);

        revealTargets.forEach((element, index) => {
            element.classList.add('reveal');

            const direction = index % 4;

            if (direction === 0) {
                element.classList.add('reveal-up');
            } else if (direction === 1) {
                element.classList.add('reveal-left');
            } else if (direction === 2) {
                element.classList.add('reveal-right');
            } else {
                element.classList.add('reveal-zoom');
            }

            element.style.setProperty('--delay', `${Math.min(index % 4, 3) * 70}ms`);
        });

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                const element = entry.target;
                const rect = element.getBoundingClientRect();

                if (entry.isIntersecting) {
                    element.classList.add('show');
                } else {
                    if (rect.bottom < -80) {
                        element.classList.remove('show', 'from-bottom');
                        element.classList.add('from-top');
                    }

                    if (rect.top > window.innerHeight + 80) {
                        element.classList.remove('show', 'from-top');
                        element.classList.add('from-bottom');
                    }
                }
            });
        }, {
            threshold: 0.08,
            rootMargin: '-4% 0px -4% 0px'
        });

        revealTargets.forEach((element) => {
            revealObserver.observe(element);
        });

        // Anchor Click Animation
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
            anchor.addEventListener('click', function () {
                this.classList.add('scale-95');

                setTimeout(() => {
                    this.classList.remove('scale-95');
                }, 180);
            });
        });

        // ===============================
        // Gallery Dokumentasi
        // ===============================
        const galleryModal = document.getElementById('galleryModal');
        const galleryBackdrop = document.getElementById('galleryBackdrop');
        const closeGallery = document.getElementById('closeGallery');
        const galleryTitle = document.getElementById('galleryTitle');
        const galleryDescription = document.getElementById('galleryDescription');
        const galleryMainImage = document.getElementById('galleryMainImage');
        const galleryCounter = document.getElementById('galleryCounter');
        const galleryThumbs = document.getElementById('galleryThumbs');
        const prevImage = document.getElementById('prevImage');
        const nextImage = document.getElementById('nextImage');
        const openGalleryButtons = document.querySelectorAll('.open-gallery');

        let currentGalleryImages = [];
        let currentGalleryIndex = 0;

        function renderGalleryImage() {
            if (!currentGalleryImages.length) return;

            galleryMainImage.src = currentGalleryImages[currentGalleryIndex];
            galleryCounter.textContent = `${currentGalleryIndex + 1} / ${currentGalleryImages.length}`;

            const thumbs = galleryThumbs.querySelectorAll('.gallery-thumb');

            thumbs.forEach((thumb, index) => {
                thumb.classList.toggle('active', index === currentGalleryIndex);
            });
        }

        function renderGalleryThumbs() {
            galleryThumbs.innerHTML = '';

            currentGalleryImages.forEach((image, index) => {
                const button = document.createElement('button');
                button.type = 'button';
                button.className = 'gallery-thumb';

                if (index === currentGalleryIndex) {
                    button.classList.add('active');
                }

                button.innerHTML = `<img src="${image}" alt="Foto dokumentasi ${index + 1}">`;

                button.addEventListener('click', () => {
                    currentGalleryIndex = index;
                    renderGalleryImage();
                });

                galleryThumbs.appendChild(button);
            });
        }

        function openGallery(title, description, images) {
            currentGalleryImages = images;
            currentGalleryIndex = 0;

            galleryTitle.textContent = title;
            galleryDescription.textContent = description;

            renderGalleryThumbs();
            renderGalleryImage();

            galleryModal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeGalleryModal() {
            galleryModal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        function showNextImage() {
            currentGalleryIndex = (currentGalleryIndex + 1) % currentGalleryImages.length;
            renderGalleryImage();
        }

        function showPrevImage() {
            currentGalleryIndex = (currentGalleryIndex - 1 + currentGalleryImages.length) % currentGalleryImages.length;
            renderGalleryImage();
        }

        openGalleryButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const title = button.dataset.title;
                const description = button.dataset.description;
                const images = JSON.parse(button.dataset.images);

                openGallery(title, description, images);
            });
        });

        nextImage.addEventListener('click', showNextImage);
        prevImage.addEventListener('click', showPrevImage);
        closeGallery.addEventListener('click', closeGalleryModal);
        galleryBackdrop.addEventListener('click', closeGalleryModal);

        document.addEventListener('keydown', (event) => {
            if (galleryModal.classList.contains('hidden')) return;

            if (event.key === 'Escape') {
                closeGalleryModal();
            }

            if (event.key === 'ArrowRight') {
                showNextImage();
            }

            if (event.key === 'ArrowLeft') {
                showPrevImage();
            }
        });

        let touchStartX = 0;
        let touchEndX = 0;

        galleryMainImage.addEventListener('touchstart', (event) => {
            touchStartX = event.changedTouches[0].screenX;
        });

        galleryMainImage.addEventListener('touchend', (event) => {
            touchEndX = event.changedTouches[0].screenX;

            if (touchEndX < touchStartX - 40) {
                showNextImage();
            }

            if (touchEndX > touchStartX + 40) {
                showPrevImage();
            }
        });
    </script>

</body>
</html>