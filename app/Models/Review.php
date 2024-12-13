<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['user_id', 'rating', 'comment', 'album_id', 'song_id'];

    /**
     * Define the relationship with Album.
     */
    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    /**
     * Define the relationship with Song.
     */
    public function song()
    {
        return $this->belongsTo(Song::class);
    }

    /**
     * Define the relationship with User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
