<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class MusicDirector extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'songname', 'musicdirectorname', 'image','moviename','audio','birthdaywish','aniverserywish','other','timeslot',
    ];
}