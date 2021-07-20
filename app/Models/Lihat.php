<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lihat extends Model
{
    use HasFactory;
    protected $table = 'layanan';
    protected $fillable = ['gambar', 'judul_layanan', 'isi_layanan'];
}
