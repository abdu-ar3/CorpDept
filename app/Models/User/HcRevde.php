<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HcRevde extends Model
{
    use HasFactory;

    public function typeJob()
    {
        return $this->belongsTo(TypeJob::class, 'type_job_id');
    }
}
