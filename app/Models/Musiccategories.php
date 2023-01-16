<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Musiccategories extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'moviename ','songname','musiccategories', 'image','audio',
    ];
}