<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'subject',
        'image',
        'cat_id'
    ];
    public function category()
    {
        return $this->hasOne(Category::class,'id','cat_id');
    }
}
