<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\OfficeModel;
use App\DevRegModel;

class EndUsersModel extends Model
{
    protected $fillable = [
    	'fullname',
    	'position',
    	'office_models_id'];

    public function devregmodels(){
        return $this->hasMany('App\DevRegModel');
    }

    public function officemodels(){
    	return $this->belongsTo('App\OfficeModel', 'office_models_id');
    }
}
