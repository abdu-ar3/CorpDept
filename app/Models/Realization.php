<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realization extends Model
{
    use HasFactory;

    protected $table = 'realizations';

    // Definisikan relasi antara realization dan item_kpi
    public function itemKpi()
    {
        return $this->belongsTo(ItemKpi::class);
    }
    
    public function period()
    {
        return $this->belongsTo(Period::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
