<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = ['nama', 'email', 'nim', 'jk', 'id_jurusan', 'id_angkatan'];
    

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }
    public function angkatan()
    {
        return $this->belongsTo(Angkatan::class, 'id_angkatan');
    }
}
