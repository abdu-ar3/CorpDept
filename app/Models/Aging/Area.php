<?php

namespace App\Models\Aging;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public function pdash()
    {
        return $this->belongsTo(Pdash::class);
    }

    public function aging()
    {
        return $this->hasMany(Aging::class);
    }
    
}
