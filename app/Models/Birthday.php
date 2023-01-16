<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Birthday extends Model
{
    use HasFactory;
    protected $table = 'birthdays';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'image', 'audio','detail'];
}