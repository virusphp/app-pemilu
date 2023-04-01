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
        Schema::create('issue_aspirasis', function (Blueprint $table) {
            $table->id();
            $table->string('detail');
            $table->string('sumber');
            $table->string('solusi');
            $table->string('wilayah');
            $table->string('jenis');
            $table->date('tanggal_pelaksanaan_solusi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issue_aspirasis');
    }
};
