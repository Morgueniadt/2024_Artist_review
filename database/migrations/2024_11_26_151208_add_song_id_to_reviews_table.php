<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_xxxxxx_add_song_id_to_reviews_table.php
public function up()
{
    Schema::table('reviews', function (Blueprint $table) {
        $table->unsignedBigInteger('song_id')->after('id');  // Adjust 'after' as needed
        $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('reviews', function (Blueprint $table) {
        $table->dropForeign(['song_id']);
        $table->dropColumn('song_id');
    });
}
};
