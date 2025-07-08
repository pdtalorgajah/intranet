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
        Schema::create('kenderaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kenderaan');
            $table->string('jenis_kenderaan');
            $table->string('no_pendaftaran')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kenderaan');
    }
};
