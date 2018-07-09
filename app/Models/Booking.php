<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    public function trip(){
        return $this->belongsTo('\App\Models\Trip');
    }
}
