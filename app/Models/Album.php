<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
   
use HasFactory;
protected $fillable= [
'name', 
'duration',
'number of songs',
'year', 
'image',
'created_at',
'updated_at',
];

}
