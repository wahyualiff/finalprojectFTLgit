<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'pendaftar';
    protected $fillable = ['ktp', 'nama', 'tgl_lahir', 'alamat'];
}
