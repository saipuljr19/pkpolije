<x-app-layout>
    <div class="min-h-screen bg-[#f3f8f3] py-8">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">

            <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm font-black uppercase tracking-[0.25em] text-yellow-600">
                        Edit Berita PK
                    </p>

                    <h1 class="mt-2 text-3xl font-black text-green-950">
                        Form Edit Berita Kegiatan
                    </h1>

                    <p class="mt-2 text-slate-600">
                        Perbarui data berita kegiatan PK IPNU IPPNU POLIJE.
                    </p>
                </div>

                <a href="{{ route('dashboard') }}"
                    class="inline-flex items-center justify-center rounded-full bg-white px-5 py-3 text-sm font-black text-green-950 shadow-sm ring-1 ring-green-100 transition hover:bg-green-50">
                    ← Kembali
                </a>
            </div>

            @if (session('success'))
                <div class="mb-6 rounded-2xl bg-green-100 px-5 py-4 text-sm font-bold text-green-800">
                    {{ session('success') }}
                </div>
            @endif

            <div
                class="overflow-hidden rounded-[2rem] bg-white shadow-[0_20px_60px_rgba(15,23,42,0.08)] ring-1 ring-green-100">

                <div class="bg-gradient-to-br from-green-800 to-green-950 px-8 py-8 text-white">
                    <p
                        class="inline-flex rounded-full bg-yellow-400 px-4 py-2 text-xs font-black uppercase tracking-[0.2em] text-green-950">
                        Berita PK
                    </p>

                    <h2 class="mt-5 text-3xl font-black">
                        Edit Dokumentasi Kegiatan
                    </h2>

                    <p class="mt-3 max-w-2xl leading-7 text-green-50">
                        Perbarui informasi kegiatan dan dokumentasi yang sudah tersimpan.
                    </p>
                </div>

                <form method="POST" action="{{ route('admin.berita.update', $berita->id) }}"
                    enctype="multipart/form-data" class="grid gap-6 p-6 md:p-8 lg:grid-cols-2">

                    @csrf
                    @method('PUT')

                    <div class="lg:col-span-2">

                        <label class="mb-2 block text-sm font-black text-green-950">
                            Dokumentasi Saat Ini
                        </label>

                        <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-4">

                            @foreach ($berita->gambar as $gambar)
                                <div class="relative">

                                    <img src="{{ asset('images/berita/' . $gambar->url_gambar) }}"
                                        class="h-36 w-full object-cover rounded-2xl">

                                    <label class="absolute top-2 right-2">
                                        <input type="checkbox"
                                            name="hapus_gambar[]"
                                            value="{{ $gambar->id }}">
                                        Hapus
                                    </label>


                                </div>
                            @endforeach

                        </div>

                    </div>

                    <div class="lg:col-span-2">

                        <label class="mb-2 block text-sm font-black text-green-950">
                            Tambah / Ganti Gambar
                        </label>

                        <label for="gambar_berita"
                            class="flex cursor-pointer flex-col items-center justify-center rounded-[1.75rem] border-2 border-dashed border-green-200 bg-green-50/70 px-6 py-10 text-center transition hover:border-green-600 hover:bg-green-50">

                            <div
                                class="flex h-16 w-16 items-center justify-center rounded-2xl bg-green-800 text-3xl font-black text-white">
                                +
                            </div>

                            <p class="mt-4 font-black text-green-950">
                                Klik untuk upload gambar baru
                            </p>

                            <p class="mt-1 text-sm text-slate-500">
                                JPG, PNG atau WEBP.
                            </p>

                            <input id="gambar_berita" type="file" name="gambar_berita[]" multiple accept="image/*"
                                class="hidden">

                        </label>

                        <div id="previewBerita" class="mt-5 grid gap-4 sm:grid-cols-2 md:grid-cols-4">
                        </div>

                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-black text-green-950">
                            Nama Kegiatan
                        </label>

                        <input type="text" name="nama_kegiatan"
                            value="{{ old('nama_kegiatan', $berita->nama_kegiatan) }}"
                            class="w-full rounded-2xl border-slate-200 bg-slate-50 px-5 py-3 text-slate-700 focus:border-green-600 focus:bg-white focus:ring-green-600">
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-black text-green-950">
                            Tanggal Kegiatan
                        </label>

                        <input type="date" name="tanggal_kegiatan"
                            value="{{ old('tanggal_kegiatan', $berita->tanggal_kegiatan) }}"
                            class="w-full rounded-2xl border-slate-200 bg-slate-50 px-5 py-3 text-slate-700 focus:border-green-600 focus:bg-white focus:ring-green-600">
                    </div>

                    <div class="lg:col-span-2">
                        <label class="mb-2 block text-sm font-black text-green-950">
                            Deskripsi Singkat
                        </label>

                        <textarea name="deskripsi_singkat" rows="3"
                            class="w-full rounded-2xl border-slate-200 bg-slate-50 px-5 py-3 text-slate-700 focus:border-green-600 focus:bg-white focus:ring-green-600">{{ old('deskripsi_singkat', $berita->deskripsi_singkat) }}</textarea>
                    </div>

                    <div class="lg:col-span-2">
                        <label class="mb-2 block text-sm font-black text-green-950">
                            Deskripsi Lengkap
                        </label>

                        <textarea name="deskripsi_lengkap" rows="8"
                            class="w-full rounded-2xl border-slate-200 bg-slate-50 px-5 py-3 text-slate-700 focus:border-green-600 focus:bg-white focus:ring-green-600">{{ old('deskripsi_lengkap', $berita->deskripsi_lengkap) }}</textarea>
                    </div>

                    <div class="lg:col-span-2 flex flex-col gap-3 sm:flex-row sm:justify-end">

                        <a href="{{ route('dashboard') }}"
                            class="inline-flex items-center justify-center rounded-full bg-slate-100 px-6 py-3 text-sm font-black text-slate-600 transition hover:bg-slate-200">
                            Batal
                        </a>

                        <button type="submit"
                            class="rounded-full bg-green-800 px-8 py-3 text-sm font-black uppercase tracking-[0.12em] text-white shadow-lg transition hover:-translate-y-1 hover:bg-green-900">
                            Update Berita
                        </button>

                    </div>



                </form>

            </div>
        </div>
    </div>
    

    <script>
        const inputBerita = document.getElementById('gambar_berita');
        const previewBerita = document.getElementById('previewBerita');

        if (inputBerita) {

            inputBerita.addEventListener('change', function() {

                previewBerita.innerHTML = '';

                Array.from(this.files).forEach((file, index) => {

                    const reader = new FileReader();

                    reader.onload = function(event) {

                        const wrapper = document.createElement('div');

                        wrapper.className =
                            'relative overflow-hidden rounded-2xl border border-green-100 bg-white shadow-sm';

                        wrapper.innerHTML = `
                    <img src="${event.target.result}"
                         class="h-36 w-full object-cover">

                    <div class="absolute left-3 top-3 rounded-full bg-green-950/80 px-3 py-1 text-xs font-bold text-white">
                        Foto Baru ${index + 1}
                    </div>
                `;

                        previewBerita.appendChild(wrapper);
                    };

                    reader.readAsDataURL(file);

                });

            });

        }
    </script>

</x-app-layout>
