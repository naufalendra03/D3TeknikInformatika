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
        Schema::table('galeris', function (Blueprint $table) {
            if (!Schema::hasColumn('galeris', 'kategori_id')) {
                // Tambahkan kolom kategori_id dengan relasi ke tabel kategoris
                $table->foreignId('kategori_id')->after('id')->nullable()->constrained('kategoris')->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('galeris', function (Blueprint $table) {
            if (Schema::hasColumn('galeris', 'kategori_id')) {
                // Hapus relasi dan kolom kategori_id
                $table->dropForeign(['kategori_id']);
                $table->dropColumn('kategori_id');
            }
        });
    }
};
