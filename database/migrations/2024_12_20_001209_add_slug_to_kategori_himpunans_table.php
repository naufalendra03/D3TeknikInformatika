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
        Schema::table('kategori_himpunans', function (Blueprint $table) {
            // Menambahkan kolom slug jika belum ada
            if (!Schema::hasColumn('kategori_himpunans', 'slug')) {
                $table->string('slug')->unique()->after('judul'); // Tambahkan kolom slug setelah kolom 'judul'
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kategori_himpunans', function (Blueprint $table) {
            // Hapus kolom slug jika ada
            if (Schema::hasColumn('kategori_himpunans', 'slug')) {
                $table->dropColumn('slug');
            }
        });
    }
};
