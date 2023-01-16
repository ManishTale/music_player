<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Aniversery extends Model
{
    use HasFactory;
    protected $table = 'aniverserys';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'image', 'audio', 'detail'];
}