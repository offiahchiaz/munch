<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'title', 'description', 'image'
    ];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/W7ZNLxn8nyPG4EBI0F7rApjClo2fx1bzU0F6kQze.jpeg';

        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
