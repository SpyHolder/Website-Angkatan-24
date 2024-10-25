<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('acara', function (Blueprint $table) {
            $table->id('id_acara')->increment();
            $table->string('judul_acara');
            $table->datetime('tanggal_waktu_acara');
            $table->string('tempat_acara',length : 100);
            $table->string('hari_acara',length:20);
            $table->string('dresscode');
            $table->string('penyelenggara');
            $table->string('isi_acara');
            $table->string('poster_acara');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('acara');
    }
};
