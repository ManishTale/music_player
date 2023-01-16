<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class LikeSongs extends Model
{
    use HasFactory;
    protected $table = 'like_songs';

    protected $fillable = [
        'songId', 'category', 'like'
    ];
}