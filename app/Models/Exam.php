<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    public function enroll()
    {
        return $this->belongsTo(Enroll::class, 'enroll_id');
    }
}
