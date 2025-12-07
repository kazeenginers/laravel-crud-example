<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    // Nama tabel (opsional, karena Laravel otomatis pakai 'siswas')
    protected $table = 'siswas';

    // Kolom yang boleh diisi (wajib untuk menghindari mass assignment error)
    protected $fillable = [
        'nama',
        'jurusan',
        'kelas',
    ];
}
