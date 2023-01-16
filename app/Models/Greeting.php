<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Greeting extends Model
{
    use HasFactory;
    protected $table = 'greetings';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'image', 'audio', 'detail'];
}