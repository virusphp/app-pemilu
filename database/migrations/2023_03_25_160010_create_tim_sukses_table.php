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
        Schema::create('tim_sukses', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->index()->unique();
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('area');
            $table->enum('jenis_tugas', ['koordinator','relawan','saksi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tim_sukses');
    }
};
