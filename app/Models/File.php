<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'title', 'description', 'alt', 'name', 'mime_type', 'size'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
