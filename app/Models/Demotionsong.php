<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Demotionsong extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'moviename', 'songname', 'image','audio','birthdaywish','aniverserywish','other','timeslot',
    ];
}