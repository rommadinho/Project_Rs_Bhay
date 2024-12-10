<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelatihans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelatihan'); // Judul pelatihan
            $table->text('kategori')->nullable(); // Deskripsi pelatihan
            $table->integer('jumlah_peserta'); // Jumlah peserta
            $table->date('tanggal_mulai'); // Tanggal mulai pelatihan
            $table->date('tanggal_selesai'); // Tanggal selesai pelatihan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelatihans');
    }
}
