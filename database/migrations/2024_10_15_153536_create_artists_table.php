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
      /*  Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });*/

       /* Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name'); // Use underscores
            $table->text('artist_review');
            $table->timestamps();
        });
*/
Schema::create('albums', function (Blueprint $table) {
    $table->id();
    $table->string('name'); // Correct type for name
    $table->time('duration'); // Store duration properly
    $table->year('release_year'); // Correct naming
    $table->integer('number_of_songs'); // Correct naming
    $table->string('image')->nullable(); // Add image column
    $table->timestamps();
});

        /*Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Correct type for name
            $table->time('duration'); // Duration type
            $table->year('release_year'); // Correct naming
            $table->foreignId('album_id')->constrained('albums')->onDelete('cascade'); // Foreign key
            $table->timestamps();
        });*/

        /*Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('artist_name');
            $table->foreignId('album_id')->constrained('albums')->onDelete('cascade'); // Foreign key
            $table->foreignId('genre_id')->constrained('genres')->onDelete('cascade'); // Foreign key
            $table->integer('rating');
            $table->timestamps();
        });*/

       /* Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key
            $table->foreignId('artist_id')->constrained('artists')->onDelete('cascade'); // Foreign key
            $table->foreignId('genre_id')->constrained('genres')->onDelete('cascade'); // Foreign key
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       /* Schema::dropIfExists('reviews');*/
       /* Schema::dropIfExists('artists');*/
      /*  Schema::dropIfExists('songs');*/
        Schema::dropIfExists('albums');
      /*  Schema::dropIfExists('users');*/
      /*  Schema::dropIfExists('genres');*/
    }
};
 /*commented out sections relate to CA2 */