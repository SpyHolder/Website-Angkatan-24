<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->id('id_anggota')->increment();
            $table->string('nama_anggota');
            $table->integer('nim_anggota');
            $table->string('link_ig');
            $table->string('linkedln');
            $table->text('quote');
            $table->string('hobby');
            $table->string('pangkat');
            $table->string('tahun_studi');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
