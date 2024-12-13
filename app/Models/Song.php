<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Album; // Import the Album model
use App\Models\Review; // Import the Review model

class Song extends Model
{
    use HasFactory;

    // Fillable attributes to define mass assignable fields
    protected $fillable = [
        'name', 'image', 'release_year', 'duration', 'youtube_link', 'spotify_link',
    ];

    /**
     * Define the relationship between Song and Album (many-to-many).
     */
    public function albums()
    {
        return $this->belongsToMany(Album::class, 'album_song'); // Update with your pivot table name
    }

 /**
     * Relationship to reviews
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
