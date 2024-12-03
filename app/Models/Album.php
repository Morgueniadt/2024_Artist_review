<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'duration',
        'number_of_songs',
        'year',
        'image',
        'youtube_link',  // Added youtube_link to fillable array
        'spotify_link',  // Added spotify_link to fillable array
        'created_at',
        'updated_at',
    ];

    /**
     * The songs that belong to the album.
     */
    public function songs()
    {
        // Assuming many-to-many relationship
        return $this->belongsToMany(Song::class);
    }

    /**
     * The reviews for the album.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
