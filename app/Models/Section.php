<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'is_active',
        'details',
        'question_size',
        'exam_id',
        'duration',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function exam()
    {
        return $this->hasOne(Exam::class,'id','exam_id');
    }

    public function quizHeaders()
    {
        return $this->hasMany(QuizHeader::class);
    }
}
