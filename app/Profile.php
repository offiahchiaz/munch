<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'title', 'description', 'image'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
