<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class DedicateSong extends Model
{
    use HasFactory;
    protected $table = 'dedicatesong';

    protected $fillable = [
        'userId', 'msg_sender', 'songId','birthday_name', 'anniversary_name', 'Time_Slot', 'Time', 'category'
    ];
}