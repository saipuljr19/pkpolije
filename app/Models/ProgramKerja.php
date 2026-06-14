<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramKerja extends Model
{
    protected $fillable = [
        'nama_program',
        'deskripsi_program',
        'gambar_program'
    ];
}