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
    Schema::create('complaints', function (Blueprint $table) {
        $table->id(); // BIGINT PRIMARY KEY AUTO_INCREMENT
        $table->unsignedBigInteger('user_id'); // Konselor yang mengupload keluhan
        $table->text('complaint'); // Isi keluhan
        $table->timestamps();

        // Foreign key ke tabel `users`
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
