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
        Schema::create('jadwal_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('tgl_kegiatan');
            $table->time('jam_kegiatan');
            $table->string('nama_kegiatan');
            $table->string('tempat_kegiatan');
            $table->char('jenis_kegiatan', 1);
            $table->string('visibilitas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_kegiatans');
    }
};
