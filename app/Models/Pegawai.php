<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai'; // Table name
    protected $primaryKey = 'id'; // Correct capitalization
    protected $fillable = [
        'nama',
        'telepon',
        'alamat',
        'jabatan',
    ];

    // Relationship with PelatihanPegawai
    public function pelatihans(): HasMany
    {
        return $this->hasMany(PelatihanPegawai::class, 'pegawai_id'); // Define the foreign key
    }
}
