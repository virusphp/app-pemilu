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
        Schema::create('budgetings', function (Blueprint $table) {
            $table->id();
            $table->string('keperluan');
            $table->string('sumber');
            $table->string('wilayah');
            $table->decimal('nominal', 12, 2);
            $table->char('status', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgetings');
    }
};
