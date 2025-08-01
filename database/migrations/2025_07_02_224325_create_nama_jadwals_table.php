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
        Schema::create('jadwals', function (Blueprint $table) {
    $table->id();
    $table->string('judul');
    $table->date('tanggal');
    $table->time('waktu');
    $table->string('lokasi');
    $table->string('pengkhotbah')->nullable();
    $table->string('link_youtube')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nama_jadwals');
    }
};
