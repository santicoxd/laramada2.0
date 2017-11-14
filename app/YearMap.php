<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YearMap extends Model
{
    //
    public $timestamps = false;
   

    public function pollutant(){
    	$this->belongsTo('App/Pollutant');
    }
}
