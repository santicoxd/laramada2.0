<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    public $timestamps = false;

    protected $fillable=['name'];
    
    public function pollutants(){
    	return $this->hasMany('App\Pollutant');
    }

    public function purge(){
    	$pollutants=$this->pollutants;

    	foreach ($pollutants as $key => $pollutant) {
    		$pollutant->purge();
    	}
    	
    	$this->delete();
    }
}
