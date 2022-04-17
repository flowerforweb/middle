<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    use HasFactory;


    public function comments()
    {
        return $this->hasMany(Comment::class , 'cour_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function lessons()
    {
        return $this->hasMany(Lesson::class , 'cour_id');
    }
    public function test()
    {
        return $this->hasOne(Test::class , 'cour_id');
    }
}