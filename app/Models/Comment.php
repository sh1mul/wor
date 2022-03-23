<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'comment',
        'regional_id',
    ];

    public function regional(){
        return $this->belongsTo(Regional::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
