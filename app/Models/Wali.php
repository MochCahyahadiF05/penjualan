<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;
    public $fillable = ['nama', 'foto', 'id_siswa'];
    public $timestamps = true;

    // membuat relasi one to one di model
    public function siswa()
    {
        // data dari model wali bisa di miliki
        // oleh modesl Siswa melalui id_siswa
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
    public function image()
    {
        if ($this->foto && file_exists(public_path('images/wali' . $this->foto))) {
            return asset('images/wali/' . $this->foto);
        } else {
            return asset('images/No_image.jpg');
        }
    }
    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/wali' . $this->foto))) {
            return unlink(public_path('images/wali/' . $this->foto));
        }

    }
}
