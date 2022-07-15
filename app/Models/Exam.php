<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_title', 'exam_datetime', 'duration', 'total_question', 'marks_per_right_answer','exam_code','status','exam_thumbnail'
      ];

    public function lavel()
    {
        return $this->hasMany(Section::class);
    }
}
