<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Dashboard extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'branch_id','branch_name','password','request','user','song','video',
    ];
}