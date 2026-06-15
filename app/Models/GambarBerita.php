<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GambarBerita extends Model
{
    protected $fillable = [
        'berita_id',
        'url_gambar',
        'public_id'
    ];

    public function berita()
    {
        return $this->belongsTo(Berita::class);
    }
}
