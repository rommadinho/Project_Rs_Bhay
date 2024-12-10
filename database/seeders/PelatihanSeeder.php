<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelatihans')->insert([
            [
                'judul_pelatihan' => 'Pelatihan Manajemen Waktu',
                'deskripsi' => 'Pelatihan untuk meningkatkan kemampuan manajemen waktu.',
                'tanggal_mulai' => '2024-12-01',
                'tanggal_selesai' => '2024-12-03',
                'kuota' => 50,
                'lokasi' => 'Ruang Meeting Gedung A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul_pelatihan' => 'Pelatihan Kepemimpinan',
                'deskripsi' => 'Pelatihan untuk membangun kemampuan kepemimpinan.',
                'tanggal_mulai' => '2024-12-10',
                'tanggal_selesai' => '2024-12-12',
                'kuota' => 30,
                'lokasi' => 'Auditorium Gedung B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul_pelatihan' => 'Pelatihan Public Speaking',
                'deskripsi' => 'Pelatihan untuk meningkatkan kemampuan berbicara di depan umum.',
                'tanggal_mulai' => '2024-12-15',
                'tanggal_selesai' => '2024-12-17',
                'kuota' => 20,
                'lokasi' => 'Ruang Pelatihan Gedung C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
