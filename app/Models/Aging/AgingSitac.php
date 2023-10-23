<?php

namespace App\Models\Aging;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgingSitac extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_type',
        'cust',
        'nama_site',
        'nilai_so',
        'pic',
        'progres',
        'target_aging',
        'realisasi',
    ];
}
