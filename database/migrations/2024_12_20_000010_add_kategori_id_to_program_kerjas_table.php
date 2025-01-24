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
        Schema::table('program_kerjas', function (Blueprint $table) {
            $table->foreignId('kategori_id') // Kolom kategori_id
                ->nullable() // Boleh null
                ->after('gambar') // Letakkan setelah kolom gambar
                ->constrained('kategori_himpunans') // Relasi dengan tabel kategori_himpunans
                ->cascadeOnUpdate() // Update otomatis jika ID berubah
                ->nullOnDelete(); // Set null jika data referensi dihapus
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('program_kerjas', function (Blueprint $table) {
            $table->dropForeign(['kategori_id']); // Hapus foreign key
            $table->dropColumn('kategori_id'); // Hapus kolom kategori_id
        });
    }
};
