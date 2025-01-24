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
            // Rename 'nama' to 'judul'
            $table->renameColumn('nama', 'judul');

            // Add 'deskripsi' and 'gambar' columns
            $table->text('deskripsi')->nullable()->after('judul');
            $table->string('gambar')->nullable()->after('deskripsi');

            // Drop unused columns
            $table->dropColumn(['tanggal_mulai', 'tanggal_selesai', 'link_pendaftaran']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('program_kerjas', function (Blueprint $table) {
            // Rename 'judul' back to 'nama'
            $table->renameColumn('judul', 'nama');

            // Drop the added columns
            $table->dropColumn(['deskripsi', 'gambar']);

            // Re-add dropped columns
            $table->dateTime('tanggal_mulai')->nullable();
            $table->dateTime('tanggal_selesai')->nullable();
            $table->string('link_pendaftaran')->nullable();
        });
    }
};
