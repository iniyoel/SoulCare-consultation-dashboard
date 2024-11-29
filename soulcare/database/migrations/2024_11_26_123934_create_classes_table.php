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
    Schema::create('classes', function (Blueprint $table) {
        $table->id(); // BIGINT PRIMARY KEY AUTO_INCREMENT
        $table->string('name'); // Nama kelas (contoh: A, B, C, dll.)
        $table->enum('grade_level', ['7', '8', '9']); // Tingkat kelas
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
