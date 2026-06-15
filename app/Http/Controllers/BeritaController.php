<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\GambarBerita;


class BeritaController extends Controller
{
    public function show()
    {
        $beritas = Berita::with('gambar')
            ->latest()
            ->get();

        return view('dashboard', compact('beritas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'tanggal_kegiatan' => 'required',
            'deskripsi_singkat' => 'required',
            'deskripsi_lengkap' => 'required',
            'gambar_berita.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $berita = Berita::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'tanggal_kegiatan' => $request->tanggal_kegiatan,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi_lengkap' => $request->deskripsi_lengkap
        ]);

        if ($request->hasFile('gambar_berita')) {

            foreach ($request->file('gambar_berita') as $gambar) {

                $namaFile = time() . '_' . uniqid() . '.' . $gambar->getClientOriginalExtension();

                $gambar->move(
                    public_path('images/berita'),
                    $namaFile
                );

                GambarBerita::create([
                    'berita_id' => $berita->id,
                    'url_gambar' => $namaFile
                ]);
            }
        }

        return redirect()
            ->back()
            ->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit($id)
    {
        $berita = Berita::with('gambar')->findOrFail($id);

        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'tanggal_kegiatan' => 'required',
            'deskripsi_singkat' => 'required',
            'deskripsi_lengkap' => 'required',
            'gambar_berita.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $berita = Berita::findOrFail($id);

        $berita->update([
            'nama_kegiatan' => $request->nama_kegiatan,
            'tanggal_kegiatan' => $request->tanggal_kegiatan,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi_lengkap' => $request->deskripsi_lengkap,
        ]);

        /*
        |--------------------------------------------------
        | Hapus gambar yang dicentang
        |--------------------------------------------------
        */
        if ($request->has('hapus_gambar')) {

            foreach ($request->hapus_gambar as $gambarId) {

                $gambar = GambarBerita::find($gambarId);

                if ($gambar) {

                    $path = public_path(
                        'images/berita/' . $gambar->url_gambar
                    );

                    if (file_exists($path)) {
                        unlink($path);
                    }

                    $gambar->delete();
                }
            }
        }

        /*
        |--------------------------------------------------
        | Upload gambar baru
        |--------------------------------------------------
        */
        if ($request->hasFile('gambar_berita')) {

            foreach ($request->file('gambar_berita') as $gambar) {

                $namaFile = time() . '_' . uniqid() . '.'
                    . $gambar->getClientOriginalExtension();

                $gambar->move(
                    public_path('images/berita'),
                    $namaFile
                );

                GambarBerita::create([
                    'berita_id' => $berita->id,
                    'url_gambar' => $namaFile
                ]);
            }
        }

        return redirect()
            ->route('dashboard')
            ->with('success', 'Berita berhasil diperbarui');
    }

        public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        $berita->delete();

        return back()->with('success', 'Berita berhasil dihapus');
    }
}
