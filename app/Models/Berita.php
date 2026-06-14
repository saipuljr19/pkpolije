<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'nama_kegiatan',
        'tanggal_kegiatan',
        'deskripsi_singkat',
        'deskripsi_lengkap'
    ];

    public function gambar()
    {
        return $this->hasMany(GambarBerita::class);
    }
}
