<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'exam_id', 'invitation_mail', 'invitation_link'
      ];

      public function user()
      {
          return $this->hasOne(User::class,'id','user_id');
      }
      public function exam()
      {
          return $this->hasOne(Exam::class,'id','exam_id');
      }
}
