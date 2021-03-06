<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nim',
        'prodi',
        'email',
        'no_telepon',
        'user_id',
    ];

    protected $table = ['mahasiswa'];
    public $timestamps = false;
    public $primaryKey = 'id_mahasiswa';
}
