<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    public function regional(){
        return $this->hasMany(Regional::class);
    }

    public function standard(){
        return $this->hasMany(Standard::class);
    }

}
