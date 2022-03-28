<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    //protected $primaryKey = 'slug';

    public function regionals(){
        return $this->hasMany(Regional::class);
    }
    public function districts(){
        return $this->hasMany(District::class);
    }

    public function upazilas(){
        return $this->hasMany(Upazila::class);
    }

    public function unions(){
        return $this->hasMany(Union::class);
    }
}
