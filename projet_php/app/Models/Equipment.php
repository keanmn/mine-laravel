<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    public function mines()
    {
        return $this->belongsToMany(Mine::class);
    }

    public function equipements()
    {
        return $this->belongsToMany(Equipment::class);
    }
}
