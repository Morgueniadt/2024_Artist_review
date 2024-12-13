<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            // Drop the album_id if it exists
            $table->dropColumn('album_id');
            
            // Add the song_id column
            $table->unsignedBigInteger('song_id')->after('user_id');
    
            // Set foreign key constraint
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign(['song_id']);
            $table->dropColumn('song_id');
            $table->unsignedBigInteger('album_id')->after('user_id');
        });
    }
    
};
