<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Correct the 'fillable' array by removing the duplicate 'user_id'
    protected $fillable = [
        'user_id',     // User who wrote the review
        'rating',      // Rating given by the user
        'comment',     // Optional comment for the review
        'album_id',    // The album being reviewed
    ];

    /**
     * The album that this review belongs to.
     */
    public function album()
    {
        return $this->belongsTo(Album::class); // Review belongs to one album
    }

    /**
     * The user who wrote the review.
     */
    public function user()
    {
        return $this->belongsTo(User::class); // Review belongs to one user
    }
}
