<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('materials', function (Blueprint $table) {
        $table->id(); // BIGINT PRIMARY KEY AUTO_INCREMENT
        $table->string('title'); // Judul materi
        $table->text('description')->nullable(); // Deskripsi materi
        $table->string('file_path')->nullable(); // Path file PDF
        $table->string('youtube_link')->nullable(); // Link YouTube
        $table->unsignedBigInteger('uploaded_by'); // ID Guru BK
        $table->timestamps();

        // Foreign key ke tabel `users`
        $table->foreign('uploaded_by')->references('id')->on('users')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
