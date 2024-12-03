<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;  // Correct import for HasFactory
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;  // Use HasFactory trait for factory support

    protected $fillable = [
        'name', 'image', 'release_year', 'duration', 'youtube_link', 'spotify_link',
    ];
 // Define the relationship with albums (many-to-many)
 public function albums()
 {
     //return $this->belongsToMany(Album::class, 'album_song', 'song_id', 'album_id');
     return $this->belongsToMany(Album::class);
}
// Song.php (Model)
public function reviews()
{
    return $this->hasMany(Review::class);
}

public function up()
{
    Schema::table('songs', function (Blueprint $table) {
        $table->string('youtube_link')->nullable();
        $table->string('spotify_link')->nullable();
    });
}

}
