<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;


    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function cour()
    {
        return $this->belongsTo(Cour::class, 'cour_id');
    }
}
