<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;  // Correct import for HasFactory
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;  // Use HasFactory trait for factory support

    protected $fillable = [
        'name',
        'duration',
        'number_of_songs',
        'year',
        'image',
        'created_at',
        'updated_at',
    ];

    public function songs()
    {
        return $this->belongsToMany(Song::class, 'album_song', 'album_id', 'song_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
