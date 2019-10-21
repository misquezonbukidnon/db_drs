<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DevRegModel;
use App\DevTypeModel;

class DevTypeModel extends Model
{
    protected $fillable = ['device_type'];

    public function devregmodels(){
    	return $this->hasMany('App\DevRegModel');
    }
}
