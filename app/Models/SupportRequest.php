<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportRequest extends Model
{
    use HasFactory;
    protected $fillable = ['name','id_number','mobile_number','house_type','income','family_members_number','address'];
}
