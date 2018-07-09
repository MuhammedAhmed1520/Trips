<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    //

    protected $guard = 'admin';
    protected $table = 'admins';
    protected $fillable = ['username', 'password', 'email', 'name', 'remember_token'];

    public function roles(){
        return $this->belongsToMany('App\Models\Role','admin_role','admin_id','role_id');
    }
}
