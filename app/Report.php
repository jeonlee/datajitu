<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'title', 'body', 'category_id', 'user_id'
    ];

    public function path()
    {
    	return '/reports/' . $this->id;
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function by(User $user) 
    {
        $this->user_id = $user->id;
    }
    
}
