<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Dhydan',
            'username' => 'didan', // Pastikan sesuai dengan field di tabel
            'password' => bcrypt('12345'), // Pastikan password di-hash
        ]);

        User::create([
            'name' => 'Staff',
            'username' => 'staff',
            'password' => bcrypt('12345'),
        ]);

        // Tambahkan lebih banyak pengguna sesuai kebutuhan
    }
}

