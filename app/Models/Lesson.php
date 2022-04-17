<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public function cour()
    {
        return $this->belongsTo(Cour::class, 'cour_id');
    }

    public function video()
    {
        return $this->hasOne(Video::class , 'lesson_id');
    }
    public function pdffile()
    {
        return $this->hasOne(Pdffile::class);
    }
    public function exo()
    {
        return $this->hasOne(Exo::class);
    }
}
