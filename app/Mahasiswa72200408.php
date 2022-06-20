<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa72200408 extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim', 'nama', 'gender', 'jurusan', 'bidang minat'
    ];
}
