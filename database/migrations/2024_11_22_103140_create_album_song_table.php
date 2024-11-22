<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumSongTable extends Migration
{
    public function up()
    {
        Schema::create('album_song', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('album_id');  // Foreign key for album
            $table->unsignedBigInteger('song_id');   // Foreign key for song
            $table->timestamps();  // For created_at and updated_at timestamps

            // Define the foreign key constraints
            $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('album_song');
    }
}
