<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;  // Correct import for HasFactory
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;  // Use HasFactory trait for factory support

    protected $fillable = [
        'name',        // Song name
        'duration',    // Song duration (e.g., '03:45:00')
        'release_year' // Release year (e.g., 1999)
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

}
