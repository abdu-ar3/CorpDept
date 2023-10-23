<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdash extends Model
{
    use HasFactory;

    public function corp_month()
    {
        return $this->hasMany(CorpMonth::class);
    }

    public function revenue_achiev()
    {
        return $this->hasMany(RevenueAchiev::class);
    }
}
