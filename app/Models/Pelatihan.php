<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;

    protected $table = 'pelatihans'; // Nama tabel di database
    protected $fillable = [
        'nama_pelatihan', 
        'kategori', 
        'jumlah_peserta', 
        'tanggal_mulai', 
        'tanggal_selesai',
    ];
}

