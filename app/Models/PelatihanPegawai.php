<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PelatihanPegawai extends Model
{
    use HasFactory;

    // Menyesuaikan nama tabel
    protected $table = 'pelatihan_pegawai';

    // Kolom yang bisa diisi secara mass-assignment
    protected $fillable = [
        'pegawai_id',
        'tanggal_mulai',
        'tanggal_selesai',
    ];

    // Menandai kolom yang berisi tanggal agar di-cast sebagai objek Carbon
    protected $dates = ['tanggal_mulai', 'tanggal_selesai'];

    // Accessor untuk mendapatkan warning
    public function getWarningAttribute()
    {
        $today = now();
        return $this->tanggal_selesai->diffInDays($today) <= 7 
            ? 'Masa pelatihan hampir selesai!' 
            : null;
    }

    // Relasi ke model Pegawai, jika ada
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }
}
