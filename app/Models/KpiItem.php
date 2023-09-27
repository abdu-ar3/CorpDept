<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KpiItem extends Model
{
    use HasFactory;

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    
}
