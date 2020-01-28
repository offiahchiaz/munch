<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $casts = [
        'ingredients' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
