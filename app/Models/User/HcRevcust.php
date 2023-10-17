<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HcRevcust extends Model
{
    use HasFactory;

    public function hcTypejob()
    {
        return $this->belongsTo(TypeJob::class, 'type_job_id');
    }
}
