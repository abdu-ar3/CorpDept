<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HcPode extends Model
{
    use HasFactory;
      
    public function typeJob()
    {
        return $this->belongsTo(TypeJob::class, 'type_job_id');
    }
}
