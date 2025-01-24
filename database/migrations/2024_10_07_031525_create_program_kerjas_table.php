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
        Schema::create('program_kerjas', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('judul'); // Judul program kerja
            $table->text('deskripsi'); // Deskripsi program kerja
            $table->string('gambar')->nullable(); // Path gambar program kerja
            $table->foreignId('kategori_id') // Kolom kategori_id
                ->nullable() // Boleh null
                ->constrained('kategori_himpunans') // Relasi dengan tabel kategori_himpunans
                ->cascadeOnUpdate() // Update otomatis jika ID berubah
                ->nullOnDelete(); // Set null jika data referensi dihapus
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_kerjas');
    }
};
