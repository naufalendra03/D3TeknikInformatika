<?php

// database/migrations/xxxx_xx_xx_add_user_id_to_berita_acaras_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToBeritaAcarasTable extends Migration
{
    public function up()
    {
        Schema::table('berita_acaras', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Menambahkan user_id sebagai foreign key
        });
    }

    public function down()
    {
        Schema::table('berita_acaras', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}
