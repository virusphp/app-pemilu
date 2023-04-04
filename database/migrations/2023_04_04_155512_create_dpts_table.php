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
        Schema::create('dpts', function (Blueprint $table) {
            $table->id();
            $table->string('nkk');
            $table->string('nik');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->char('kawin', 1);
            $table->char('jns_kel', 1);
            $table->string('alamat');
            $table->string('rt', 5);
            $table->string('rw', 5);
            $table->char('difabel', 1);
            $table->string('tps', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dpts');
    }
};
