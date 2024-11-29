<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluhanKonselorsTable extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel keluhan_konselors.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluhan_konselors', function (Blueprint $table) {
            $table->id(); // ID auto increment sebagai primary key
            $table->date('tanggal_konseling'); // Kolom tanggal untuk menyimpan tanggal konseling
            $table->string('jenis_masalah'); // Kolom jenis masalah, menggunakan string karena akan menyimpan data kategori masalah
            $table->text('deskripsi_masalah'); // Kolom deskripsi masalah, menggunakan text untuk deskripsi panjang
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });

        
    }

    /**
     * Hapus tabel keluhan_konselors jika migrasi di-rollback.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keluhan_konselors');
    }
}