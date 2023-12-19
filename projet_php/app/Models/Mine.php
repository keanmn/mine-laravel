<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mine extends Model
{
    use HasFactory;

    public function concession()
    {
        return $this->belongsTo(Concession::class);
    }
}
