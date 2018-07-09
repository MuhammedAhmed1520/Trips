<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Review extends Model
{

    use Rateable;


    protected $table = "reviews";
    protected $fillable = ['title','description','trip_id'];

    public function trip(){
        return $this->belongsTo('\App\Models\Trip');
    }
}
