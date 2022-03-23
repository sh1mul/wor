<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionalLike extends Model
{
    use HasFactory;

    protected $fillable = [
        'regional_id',
        'user_id',
        'is_liked',
    ];

    public function regional(){
        return $this->belongsTo(Regional::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
