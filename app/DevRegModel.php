<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DevTypeModel;
use App\EndUsersModel;
use App\OfficeModel;

class DevRegModel extends Model
{
    protected $fillable = [
    	'end_users_models_id',
    	'office_models_id',
    	'dev_type_models_id',
    	'device_model',
    	'mac_address'];

    public function endusermodels(){
    	return $this->belongsTo('App\EndUsersModel', 'end_users_models_id');
    }

    public function officemodels(){
    	return $this->belongsTo('App\OfficeModel', 'office_models_id');
    }

    public function devtypemodels(){
        return $this->belongsTo('App\DevTypeModel', 'dev_type_models_id');
    }

}
