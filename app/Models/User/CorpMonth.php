<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorpMonth extends Model
{
    use HasFactory;

    public function pdash()
    {
        return $this->belongsTo(Pdash::class);
    }
}
