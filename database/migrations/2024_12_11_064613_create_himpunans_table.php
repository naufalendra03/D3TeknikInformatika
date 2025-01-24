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
        Schema::create('himpunans', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable(); // Path logo
            $table->text('visi');
            $table->text('misi');
            $table->string('sekretaris');
            $table->string('ketua');
            $table->string('bendahara');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('himpunans');
    }
};
