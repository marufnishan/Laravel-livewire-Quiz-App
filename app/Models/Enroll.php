<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'exam_id',
        'attendance_status',
        'phone_number',
        'trx_id',
        'email',
        'approval',
        'expeire_at'

    ];

    
    public function exam()
    {
        return $this->hasOne(Exam::class,'id','exam_id');
    }
}
