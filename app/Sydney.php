<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sydney extends Model
{
   protected $fillable = [
        'periode', 'number', 'tanggal', 'hari'
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
