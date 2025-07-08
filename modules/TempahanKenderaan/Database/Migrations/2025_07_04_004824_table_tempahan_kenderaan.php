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
        Schema::create('tempahan', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->morphs('tempahanable');
            $table->text('tujuan')->nullable();
            $table->text('destinasi')->nullable();
            $table->string('pelepasan')->nullable();
            $table->text('pelepasan_lokasi')->nullable();
            $table->dateTime('pergi')->nullable();
            $table->dateTime('balik')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tempahan');
    }
};
