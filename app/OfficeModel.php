<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EndUsersModel;
class OfficeModel extends Model
{
    protected $fillable = ['office_name'];


    public function endusersmodels(){
    	return $this->hasMany('App\EndUsersModel');
    }

}
