<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;



    public function cour()
    {
        return $this->belongsTo(Cour::class , 'cour_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
