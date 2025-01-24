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
            // Mengecek apakah kolom 'kategori_id' sudah ada
            if (!Schema::hasColumn('program_kerjas', 'kategori_id')) {
                // Menambahkan kolom kategori_id sebagai foreign key
                $table->foreignId('kategori_id')
                    ->nullable() // Kolom dapat bernilai null untuk entri yang ada sebelumnya
                    ->after('gambar') // Menambahkan setelah kolom 'gambar'
                    ->constrained('kategori_himpunans') // Nama tabel terkait
                    ->cascadeOnUpdate() // Update foreign key jika ID kategori berubah
                    ->nullOnDelete(); // Set null jika kategori dihapus
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('program_kerjas', function (Blueprint $table) {
            // Hapus foreign key dan kolom kategori_id
            $table->dropForeign(['kategori_id']);
            $table->dropColumn('kategori_id');
        });
    }
};
