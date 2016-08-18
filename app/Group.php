<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name',
    ];

    public function path()
    {
    	return '/categories/' . $this->id;
    }

    public function users()
    {
    	return $this->hasMany('App\User');
    }
    
}
