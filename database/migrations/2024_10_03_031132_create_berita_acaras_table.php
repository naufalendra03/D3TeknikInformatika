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
        Schema::create('berita_acaras', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // Judul berita acara
            $table->text('isi'); // Isi berita acara
            $table->string('slug')->unique(); // Slug harus unik
            $table->string('gambar')->nullable(); // Gambar opsional
            $table->dropColumn('author'); // Penulis berita acara
            $table->dropColumn('category'); // Kategori berita acara
            $table->dateTime('published_date')->nullable(); // Tanggal publikasi opsional
            $table->dropColumn('tags')->nullable(); // Menyimpan tags sebagai array JSON
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita_acaras');
        Schema::table('berita_acaras', function (Blueprint $table) {
            $table->string('author')->nullable();
    });
    
    }
};
