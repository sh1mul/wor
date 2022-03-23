<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standard extends Model
{
    use HasFactory;

    public function regional(){
        return $this->hasMany(Regional::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
