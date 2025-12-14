<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
protected $table = 'anggota';
protected $guarded = [];
protected $fillable = [
    'kode_anggota',
    'nama',
    'kelas',
    'jurusan',
    'alamat',
    'no_telp',
];

public function getRouteKeyName()
{
    return 'id';
}
}