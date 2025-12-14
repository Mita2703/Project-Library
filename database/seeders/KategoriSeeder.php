<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kategori')->insert([
            ['nama' => 'Novel', 'deskripsi' => 'Buku cerita fiksi'],
            ['nama' => 'Komik', 'deskripsi' => 'Buku bergambar dan dialog ringan'],
            ['nama' => 'Pelajaran', 'deskripsi' => 'Buku materi sekolah'],
            ['nama' => 'Sejarah', 'deskripsi' => 'Buku tentang sejarah dan peristiwa masa lalu'],
            ['nama' => 'Agama', 'deskripsi' => 'Buku tentang ajaran agama'],
            ['nama' => 'Teknologi', 'deskripsi' => 'Buku tentang teknologi modern'],
            ['nama' => 'Sains', 'deskripsi' => 'Buku tentang ilmu pengetahuan'],
            ['nama' => 'Biografi', 'deskripsi' => 'Buku kisah hidup tokoh terkenal'],
        ]);
    }
}
