<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\ProgramKerja;
use Illuminate\Http\Request;


class ProgramKerjaController extends Controller
{
    public function show()
    {
        $beritas = Berita::with('gambar')->latest()->get();

        $programs = ProgramKerja::latest()->get();

        return view(
            'dashboard',
            compact(
                'beritas',
                'programs'
            )
        );
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_program' => 'required',
            'deskripsi_program' => 'required',
            'gambar_program' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $namaFile = null;

        if ($request->hasFile('gambar_program')) {

            $file = $request->file('gambar_program');

            $namaFile = time().'_'.$file->getClientOriginalName();

            $file->move(
                public_path('images/program'),
                $namaFile
            );
        }

        ProgramKerja::create([
            'nama_program' => $request->nama_program,
            'deskripsi_program' => $request->deskripsi_program,
            'gambar_program' => $namaFile
        ]);

        return redirect()
            ->route('dashboard')
            ->with('success', 'Program kerja berhasil ditambahkan');
    }

    public function edit($id)
    {
        $program = ProgramKerja::findOrFail($id);

        return view(
            'admin.program.edit',
            compact('program')
        );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_program' => 'required',
            'deskripsi_program' => 'required',
            'gambar_program' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $program = ProgramKerja::findOrFail($id);

        if ($request->hasFile('gambar_program')) {

            if (
                $program->gambar_program &&
                file_exists(
                    public_path(
                        'images/program/' .
                        $program->gambar_program
                    )
                )
            ) {
                unlink(
                    public_path(
                        'images/program/' .
                        $program->gambar_program
                    )
                );
            }

            $file = $request->file('gambar_program');

            $namaFile = time().'_'.$file->getClientOriginalName();

            $file->move(
                public_path('images/program'),
                $namaFile
            );

            $program->gambar_program = $namaFile;
        }

        $program->nama_program = $request->nama_program;
        $program->deskripsi_program = $request->deskripsi_program;

        $program->save();

        return redirect()
            ->route('dashboard')
            ->with('success', 'Program kerja berhasil diperbarui');
    }

    public function destroy($id)
    {
        $program = ProgramKerja::findOrFail($id);

        if (
            $program->gambar_program &&
            file_exists(
                public_path(
                    'images/program/' .
                    $program->gambar_program
                )
            )
        ) {
            unlink(
                public_path(
                    'images/program/' .
                    $program->gambar_program
                )
            );
        }

        $program->delete();

        return back()
            ->with('success', 'Program kerja berhasil dihapus');
    }
}