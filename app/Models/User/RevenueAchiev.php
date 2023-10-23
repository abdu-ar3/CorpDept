<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevenueAchiev extends Model
{
    use HasFactory;

    public function pdashes()
    {
        return $this->belongsTo(Pdash::class, 'pdash_id');
    }
    
    public function typeJob()
    {
        return $this->belongsTo(TypeJob::class);
    }
}
