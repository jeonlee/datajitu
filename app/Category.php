<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
    ];

    public function path()
    {
    	return '/categories/' . $this->id;
    }

    public function reports()
    {
    	return $this->hasMany('App\Report');
    }

    public function addReport(Report $report)
    {
    	return $this->reports()->save($report);
    }
}
