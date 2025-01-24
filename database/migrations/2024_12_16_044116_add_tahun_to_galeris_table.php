<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTahunToGalerisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('galeris', function (Blueprint $table) {
            // Menambahkan kolom tahun dengan tipe integer
            $table->year('tahun')->nullable()->after('bulan'); // Sesuaikan posisi kolom jika perlu
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('galeris', function (Blueprint $table) {
            // Menghapus kolom tahun jika rollback
            $table->dropColumn('tahun');
        });
    }
}
