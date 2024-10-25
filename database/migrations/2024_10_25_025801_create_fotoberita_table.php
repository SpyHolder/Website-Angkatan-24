<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fotoberita', function (Blueprint $table) {
            $table->id('id_foto')->increment();
            $table->integer('id_berita');
            $table->string('foto_berita');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fotoberita');
    }
};
