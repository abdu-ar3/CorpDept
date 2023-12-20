<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeptSemester extends Model
{
    use HasFactory;

      public function eventSemester()
    {
        return $this->belongsTo(EventSemester::class);
    }
}
