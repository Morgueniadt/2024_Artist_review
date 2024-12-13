<?php

// database/migrations/xxxx_xx_xx_create_songs_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('songs', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->time('duration');
        $table->year('release_year');
        $table->string('image')->nullable(); // New field for storing image path, nullable in case a song has no image
        $table->string('youtube_link')->nullable(); // New field for storing YouTube link, nullable in case no link is provided
        $table->string('spotify_link')->nullable(); // New field for storing Spotify link, nullable in case no link is provided
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}