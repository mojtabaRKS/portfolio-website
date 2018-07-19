<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = [
        'name' , 'description' , 'icon'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function portfolios()
    {
        return $this->belongsToMany(Portfolio::class);
    }
}
