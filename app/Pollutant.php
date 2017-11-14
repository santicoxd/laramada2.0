<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pollutant extends Model
{
	
    //
    public $timestamps = false;

    protected $fillable=['name','type_id'];

    public function yearMaps(){
    	return $this->hasMany('App\YearMap');
    }
    public function type(){
        return $this->belongsTo('App\Type');
    }

    public function purge(){
    	$this->yearMaps()->delete();
    	$this->delete();
    }
}
