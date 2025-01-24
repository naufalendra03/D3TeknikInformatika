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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim')->unique();
            $table->decimal('ipk', 3, 2);
            $table->year('tahun_lulus');
            $table->integer('wisuda');
            $table->string('pekerjaan');
            $table->string('nama_instansi');
            $table->boolean('is_valid')->default(false); // Kolom validasi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni'); // Perbaiki nama tabel
        }
    
};
