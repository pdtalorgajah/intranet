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
        Schema::create('tempahan_kenderaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemohon');
            $table->string('jawatan_pemohon');
            $table->string('Bahagian_pemohon');
            $table->string('no_tel_pemohon');
            $table->text('penumpang');
            $table->text('tujuan');
            $table->text('destinasi');
            $table->string('lokasi_ambilan'); // Pejabat atau Rumah
            $table->text('alamat_lokasi_ambilan')->nullable();
            $table->string('pelepasan');
            $table->text('pelepasan_lokasi');
            $table->dateTime('pergi');
            $table->dateTime('balik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tempahan_kenderaan');
    }
};
