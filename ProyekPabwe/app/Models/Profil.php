<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'profil';
    protected $fillable = ['id_profil', 'firstname', 'lastname', 'program', 'generation', 'status', 'id_user'];
}