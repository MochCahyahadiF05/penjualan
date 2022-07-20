<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = ['nama', 'nis', 'jenis_kelamin', 'agama', 'tgl_lahir', 'alamat'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    public $timestamps = true;

}
