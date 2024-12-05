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
    Schema::table('agendas', function (Blueprint $table) {
        $table->date('tanggal')->nullable()->after('hari'); // Tambahkan kolom 'tanggal' setelah 'hari'
    });
}

public function down(): void
{
    Schema::table('agendas', function (Blueprint $table) {
        $table->dropColumn('tanggal'); // Hapus kolom 'tanggal' jika migrasi di-rollback
    });
}
};
