<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTujuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tujuans', function (Blueprint $table) {
            $table->id(); // ID otomatis
            $table->string('judul'); // Kolom untuk judul tujuan
            $table->text('deskripsi'); // Kolom untuk deskripsi tujuan
            $table->string('gambar')->nullable(); // Kolom untuk gambar, nullable karena tidak wajib
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tujuans');
    }
}

