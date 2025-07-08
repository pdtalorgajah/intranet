<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('nama');
            $table->integer('bahagian_id')->unsigned();
            $table->string('jawatan');
            $table->string('gred');
            $table->string('no_telefon')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('no_hp')->nullable();
            $table->string('status')->default('aktif'); // aktif, tidak aktif
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
