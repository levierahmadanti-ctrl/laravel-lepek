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
        Schema::create('pendakians', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pendakian');
            $table->integer('id_user');
            $table->integer('id_gunung');
            $table->date('tanggal_naik');
            $table->date('tanggal_turun');
            $table->integer('jumlah_anggota');
            $table->string('kode_pendakian');
            $table->enum('status', ['menunggu', 'diterima', 'ditolak', 'selesai']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendakians');
    }
};
