<?php

namespace App\Models\Aging;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aging extends Model
{
    use HasFactory;

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
