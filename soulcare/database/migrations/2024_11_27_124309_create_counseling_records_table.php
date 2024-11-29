<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(){
        Schema::create('counseling_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('counselor_id');
            $table->date('date');
            $table->string('issue_type');
            $table->text('issue_description');
            $table->string('referral');
            $table->timestamps();
        
            // Relasi dengan students dan users
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('counselor_id')->references('id')->on('users')->onDelete('set null');
        });        
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counseling_records');
    }
};
