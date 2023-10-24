<?php

namespace App\Models\Aging;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aging extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_id',
        'project',
        'target',
        'jumlah_site',
        'bobot',
        'tercapai',
        'tidak_tercapai',
        'persentase',
        'final',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
