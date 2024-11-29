<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('keluhan_konselors', function (Blueprint $table) {
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('keluhan_konselors', function (Blueprint $table) {
        $table->dropColumn('user_id');
    });
}
};
