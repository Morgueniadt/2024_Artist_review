<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    // Define the table name (optional if you're using the default `songs` table)
    // protected $table = 'songs';

    // Define which attributes are mass assignable
    protected $fillable = [
        'name',        // Song name
        'duration',    // Song duration (e.g., '03:45:00')
        'release_year' // Release year (e.g., 1999)
    ];

}
