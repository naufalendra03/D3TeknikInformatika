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
        Schema::create('kategori_himpunans', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('judul')->unique(); // Judul kategori, harus unik
            $table->string('slug')->unique(); // Slug untuk URL unik
            $table->string('gambar')->nullable(); // Gambar kategori, opsional
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_himpunans');
    }
};
