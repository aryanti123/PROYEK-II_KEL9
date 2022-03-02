<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_item',
        'lostandfound',
        'status',
        'date',
        'place',
        'description',
        'founderorowner',
        'picture',
        'id_mahasiswa',
    ];
    protected $table = 'barang';
    public $timestamps = false;
    public $primaryKey = 'id_barang';
}
