<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemKpi extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'item',
        'target',
        'bobot',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Definisikan relasi antara item_kpi dan realization
    public function realizations()
    {
        return $this->hasMany(Realization::class, 'item_kpi_id', 'id');
    }

}
