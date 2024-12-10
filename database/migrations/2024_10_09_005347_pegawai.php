<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create the table
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 20)->unique();
            $table->string('nama', 50);
            $table->enum('jk', ['Pria', 'Wanita']);
            $table->string('jbtn', 25);
            $table->string('jnj_jabatan', 5);
            $table->string('kode_kelompok', 3);
            $table->string('kode_resiko', 3);
            $table->string('kode_emergency', 3);
            $table->char('departemen', 4);
            $table->string('bidang', 15);
            $table->char('stts_wp', 5);
            $table->char('stts_kerja', 3);
            $table->string('npwp', 15);
            $table->string('pendidikan', 80);
            $table->double('gapok');
            $table->string('tmp_lahir', 20);
            $table->date('tgl_lahir');
            $table->string('alamat', 60);
            $table->string('kota', 20);
            $table->date('mulai_kerja');
            $table->enum('ms_kerja', ['<1', 'PT', 'FT>1']);
            $table->char('indexins', 4);
            $table->string('bpd', 50);
            $table->string('rekening', 25);
            $table->enum('stts_aktif', ['AKTIF', 'CUTI', 'KELUAR', 'TENAGA LUAR']);
            $table->tinyInteger('wajibmasuk', false, true);
            $table->double('pengurang');
            $table->tinyInteger('indek', false, true);
            $table->date('mulai_kontrak')->nullable();
            $table->integer('cuti_diambil');
            $table->double('dankes');
            $table->string('photo', 500)->nullable();
            $table->string('no_ktp', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
