<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyNews extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','images','clips'];
    protected $casts = ['images' => 'array', 'clips'=> 'array'];
}
