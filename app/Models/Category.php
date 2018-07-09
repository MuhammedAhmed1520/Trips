<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['title', 'note', 'icon', 'photo', 'url_slug', 'category_id', 'meta_title', 'meta_keywords', 'meta_description', 'created_at', 'updated_at'];

    public function trips(){
        return $this->belongsToMany('\App\Models\Trip','trip_category','category_id','trip_id')->withTimestamps();
    }

}
