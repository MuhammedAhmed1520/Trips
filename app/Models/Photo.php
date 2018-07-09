<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $table = 'photos';
    protected $fillable = ['trip_id', 'photo'];
    public function trip(){
        return $this->belongsTo('\App\Models\Trip');
    }
}
