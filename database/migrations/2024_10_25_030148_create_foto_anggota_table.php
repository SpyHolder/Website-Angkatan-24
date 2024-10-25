<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('foto_anggota', function (Blueprint $table) {
            $table->id('id_foto_anggota')->increment();
            $table->integer('id_anggota');
            $table->string('foto_anggota');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('foto_anggota');
    }
};
