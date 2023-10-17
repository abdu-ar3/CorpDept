<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeJob extends Model
{
    use HasFactory;

    public function revenue_achiev()
    {
        return $this->hasMany(RevenueAchiev::class);
    }

    public function po_achiev()
    {
        return $this->hasMany(PoAchiev::class);
    }

    public function hc_revenue()
    {
        return $this->hasMany(HcRevenue::class);
    }
}
