<x-app-layout>
    <div class="min-h-screen bg-[#f3f8f3] py-8">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">

            <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm font-black uppercase tracking-[0.25em] text-yellow-600">
                        Edit Program Kerja
                    </p>

                    <h1 class="mt-2 text-3xl font-black text-green-950">
                        Form Program Kerja
                    </h1>

                    <p class="mt-2 text-slate-600">
                        Ubah data program kerja yang akan tampil pada bagian Program Unggulan PK.
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

            <div class="overflow-hidden rounded-[2rem] bg-white shadow-[0_20px_60px_rgba(15,23,42,0.08)] ring-1 ring-green-100">
                <div class="bg-gradient-to-br from-yellow-300 to-yellow-500 px-8 py-8 text-green-950">
                    <p class="inline-flex rounded-full bg-green-950 px-4 py-2 text-xs font-black uppercase tracking-[0.2em] text-yellow-300">
                        Program Kerja
                    </p>

                    <h2 class="mt-5 text-3xl font-black">
                        Edit Program Unggulan
                    </h2>

                    <p class="mt-3 max-w-2xl leading-7 text-green-950/80">
                        Program kerja berisi nama program, deskripsi, dan gambar opsional.
                    </p>
                </div>

                <form method="POST"
                      action="{{ route('admin.program.update', $program->id) }}"
                      enctype="multipart/form-data"
                      class="grid gap-6 p-6 md:p-8 lg:grid-cols-2">
                    @csrf
                    @method('PUT')
                    <div>
                        <label class="mb-2 block text-sm font-black text-green-950">
                            Nama Program Kerja
                        </label>

                        <input type="text"
                               name="nama_program"
                               placeholder="Contoh: Makesta / Kaderisasi"
                               value="{{ old('nama_program', $program->nama_program) }}"
                               class="w-full rounded-2xl border-slate-200 bg-slate-50 px-5 py-3 text-slate-700 focus:border-green-600 focus:bg-white focus:ring-green-600">
                    </div>

                    @if($program->gambar_program)

                        <div class="lg:col-span-2">

                            <label class="mb-3 block text-sm font-black text-green-950">
                                Gambar Saat Ini
                            </label>

                            <div class="relative overflow-hidden rounded-[1.75rem] border border-green-100">

                                <img
                                    src="{{ asset('images/program/' . $program->gambar_program) }}"
                                    alt="{{ $program->nama_program }}"
                                    class="h-72 w-full object-cover">

                                <div class="absolute left-4 top-4 rounded-full bg-green-950/80 px-4 py-2 text-xs font-black text-white">
                                    Gambar Aktif
                                </div>

                            </div>

                        </div>

                        @endif

                    <div>
                        <label class="mb-2 block text-sm font-black text-green-950">
                            Gambar Program
                            <span class="font-semibold text-slate-400">(Opsional)</span>
                        </label>

                        <input id="gambar_program"
                               type="file"
                               name="gambar_program"
                               accept="image/*"
                               class="block w-full cursor-pointer rounded-2xl border border-slate-200 bg-slate-50 text-sm text-slate-600 file:mr-4 file:border-0 file:bg-green-800 file:px-5 file:py-3 file:font-bold file:text-white hover:file:bg-green-900">

                        <div id="previewProgram" class="mt-4"></div>
                    </div>

                    <div class="lg:col-span-2">
                        <label class="mb-2 block text-sm font-black text-green-950">
                            Deskripsi Program Kerja
                        </label>

                        <textarea name="deskripsi_program"
                                  rows="8"
                                  placeholder="Tulis deskripsi program kerja..."
                                  class="w-full rounded-2xl border-slate-200 bg-slate-50 px-5 py-3 text-slate-700 focus:border-green-600 focus:bg-white focus:ring-green-600">{{ old('deskripsi_program', $program->deskripsi_program) }}</textarea>
                    </div>

                    <div class="lg:col-span-2 flex flex-col gap-3 sm:flex-row sm:justify-end">
                        <a href="{{ route('dashboard') }}"
                           class="inline-flex items-center justify-center rounded-full bg-slate-100 px-6 py-3 text-sm font-black text-slate-600 transition hover:bg-slate-200">
                            Batal
                        </a>

                        <button type="submit"
                                class="rounded-full bg-yellow-400 px-8 py-3 text-sm font-black uppercase tracking-[0.12em] text-green-950 shadow-lg transition hover:-translate-y-1 hover:bg-yellow-500">
                            Simpan Program
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const inputProgram = document.getElementById('gambar_program');
        const previewProgram = document.getElementById('previewProgram');

        if (inputProgram) {
            inputProgram.addEventListener('change', function () {
                previewProgram.innerHTML = '';

                const file = this.files[0];

                if (!file) return;

                const reader = new FileReader();

                reader.onload = function (event) {
                    previewProgram.innerHTML = `
                        <div class="relative overflow-hidden rounded-2xl border border-green-100 bg-white shadow-sm">
                            <img src="${event.target.result}" class="h-48 w-full object-cover" alt="Preview gambar program">
                            <div class="absolute left-3 top-3 rounded-full bg-green-950/80 px-3 py-1 text-xs font-bold text-white">
                                Preview
                            </div>
                        </div>
                    `;
                };

                reader.readAsDataURL(file);
            });
        }
    </script>
</x-app-layout>