<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id('id_berita')->increment();
            $table->string('judul_berita');
            $table->date('tanggal_pembuatan');
            $table->string('tempat_publish',length : 100);
            $table->text('isi_berita');
            $table->string('nama_pembuat',length : 150);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
