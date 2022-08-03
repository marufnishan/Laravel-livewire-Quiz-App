<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_title', 'exam_datetime','total_question', 'marks_per_right_answer','exam_code','status','exam_thumbnail','exam_type','cat_id','price','subscription','teacher_id'
      ];

    public function lavel()
    {
        return $this->hasMany(Section::class);
    }
}
