<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Search;

class Regional extends Model
{
    use HasFactory;
    use Search;

    protected $searchable = [
        'word',
        'sentence',
        'description',
        'english',
    ];

    public function likes(){
        return $this->hasMany(RegionalLike::class);
    }
    public function standard(){
        return $this->belongsTo(Standard::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function division(){
        return $this->belongsTo(Division::class);
    }
    public function district(){
        return $this->belongsTo(District::class);
    }
    public function upazila(){
        return $this->belongsTo(Upazila::class);
    }
    public function union(){
        return $this->belongsTo(Union::class);
    }
    public function part(){
        return $this->belongsTo(Part::class);
    }
}
