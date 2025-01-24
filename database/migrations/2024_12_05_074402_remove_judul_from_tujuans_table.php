<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveJudulFromTujuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tujuans', function (Blueprint $table) {
            // Menghapus kolom judul
            $table->dropColumn('judul');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tujuans', function (Blueprint $table) {
            // Menambahkan kembali kolom judul jika rollback
            $table->string('judul');
        });
    }
}