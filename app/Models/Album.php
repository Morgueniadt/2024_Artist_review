<?php

namespace App\Models;  // Defining the namespace for the Album model.

use Illuminate\Database\Eloquent\Factories\HasFactory;  // Importing the HasFactory trait to enable factory functionality.
use Illuminate\Database\Eloquent\Model;  // Importing the base Model class for Eloquent ORM functionality.

class Album extends Model
{
    // Using the HasFactory trait, which provides an easy way to generate model factories for testing or seeding the database.
    use HasFactory;

    // Defining the $fillable property to allow mass-assignment for specific attributes of the model.
    protected $fillable = [
        'name',                // The name of the album.
        'duration',            // The duration of the album (e.g., the total playtime).
        'number_of_songs',     // The number of songs included in the album.
        'year',                // The year the album was released.
        'image',               // The path or filename of the album's cover image.
        'created_at',          // Timestamp of when the album was created (automatically handled by Eloquent).
        'updated_at',          // Timestamp of when the album was last updated (automatically handled by Eloquent).
    ];
}