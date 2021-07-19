<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table        = 'nilai'; 
    protected $fillable     = ['id', 'matkul_id', 'mahasiswa_id', 'nilai'];
    public $timestamps      = false;

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'id');
    }

    public function matkul()
    {
        return $this->belongsTo(Matkul::class, 'matkul_id', 'id');
    }
}
