<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryaMahasiswasTable extends Migration
{
    public function up()
    {
        Schema::create('karya_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('judul');
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('link');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('karya_mahasiswas');
    }
}
