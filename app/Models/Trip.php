<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Image;

class Trip extends Model
{
    protected $table = 'trips';
    protected $fillable = ['title', 'photo', 'price', 'currency', 'description','url_slug', 'include', 'not_include', 'program', 'note', 'meta_title', 'meta_keywords', 'meta_description'];

    public function categories(){
        return $this->belongsToMany('\App\Models\Category','trip_category','trip_id','category_id')->withTimestamps();
    }
    public function photos(){
        return $this->hasMany('\App\Models\Photo');
    }

    public function reviews(){
        return $this->hasMany('\App\Models\Review');
    }
    public function bookings(){
        return $this->hasMany('\App\Models\Booking');
    }
}
