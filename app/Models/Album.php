<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    // Fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'duration',
        'number_of_songs',
        'year',
        'image',
        'youtube_link',
        'spotify_link',
        'created_at',
        'updated_at',
    ];

    /**
     * The songs that belong to the album.
     */
    public function songs()
    {
        // Assuming the pivot table name is 'album_song', update if necessary
        return $this->belongsToMany(Song::class, 'album_song');
    }

    /**
     * The reviews for the album.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
