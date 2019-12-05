<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prediksicmb extends Model
{
   protected $fillable = [
        'tanggal', 'hari', 'prediksi', 'date','deskripsi'
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
