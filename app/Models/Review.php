<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Review extends Model
{
use HasFactory;

 protected $fillable =[
    'user_id',
    'rating',
    'comment',
    'album_id'
 ];

public function book()
{
return $this->belongsTo (Album::class);
}

public function user()
{
return $this->belongsTo (User::class);
}
}