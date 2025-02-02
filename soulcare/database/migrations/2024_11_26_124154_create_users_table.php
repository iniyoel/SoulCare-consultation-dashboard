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
    Schema::create('users', function (Blueprint $table) {
        $table->id(); // BIGINT PRIMARY KEY AUTO_INCREMENT
        $table->string('name')->unique();
        $table->string('email')->unique();
        $table->string('password');
        $table->enum('role', ['Guru BK', 'Konselor Sebaya']); // Peran pengguna
        $table->unsignedBigInteger('class_id')->nullable(); // Hanya untuk Konselor Sebaya
        $table->timestamps();

        // Foreign key ke tabel `classes`
        $table->foreign('class_id')->references('id')->on('classes')->onDelete('set null');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
