<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name' , 'description' , 'tools' , 'percent' , 'is_active' , 'file_id'
    ];
}
