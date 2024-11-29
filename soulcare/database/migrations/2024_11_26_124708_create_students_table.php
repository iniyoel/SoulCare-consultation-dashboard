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
    Schema::create('students', function (Blueprint $table) {
        $table->id(); // BIGINT PRIMARY KEY AUTO_INCREMENT
        $table->string('name');
        $table->enum('gender', ['Laki-Laki', 'Perempuan']);
        $table->unsignedBigInteger('class_id'); // Relasi ke tabel classes
        $table->timestamps();

        // Foreign key ke tabel `classes`
        $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
