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
        Schema::create('sasarans', function (Blueprint $table) {
            $table->id();
            $table->text('deskripsi'); // Kolom untuk deskripsi
            $table->string('gambar'); // Kolom untuk gambar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sasarans');
    }
};
