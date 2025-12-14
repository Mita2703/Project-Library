<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('anggota')->insert([
            ['kode_anggota' => 'A001', 'nama' => 'Cindy Amelia', 'alamat' => 'Jl. Kenanga No. 5', 'telepon' => '08123456789'],
            ['kode_anggota' => 'A002', 'nama' => 'Rian Saputra', 'alamat' => 'Jl. Melati No. 8', 'telepon' => '08129876543'],
            ['kode_anggota' => 'A003', 'nama' => 'Dewi Lestari', 'alamat' => 'Jl. Mawar No. 12', 'telepon' => '08137775555'],
        ]);
    }
}
