<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DevRegModel;
use App\EndUsersModel;
use App\OfficeModel;
use App\DevTypeModel;
use input;

class DeviceRegController extends Controller
{
    Public function create(){
    	$officedatas = OfficeModel::all();
    	$enduserdatas = EndUsersModel::all();
    	return view('dev_reg_select', compact('officedatas', 'enduserdatas'));

    }
     public function displayrec()
    {
        $datas2 = EndUsersModel::with('officemodels')->get();
        return view('dev_reg_select', compact('datas2'));
    }


    Public function selectuser($id){
        $endusers = EndUsersModel::findOrFail($id);
        $offices = OfficeModel::all();
        $devtypes = DevTypeModel::all();
        return view('dev_registration', compact('endusers', 'offices', 'devtypes'));
    }

    Public function editrecord($id){
        $drdata = DevRegModel::findOrFail($id)->with('endusermodels', 'officemodels')->first();
        $devtypes = DevTypeModel::all();
        return view('edit_device_registration', compact('drdata', 'devtypes'));
    }

    Public function store(Request $request){
        
        $data = new DevRegModel;      
        $data->end_users_models_id=$request->input('endusers_id');
        $data->office_models_id=$request->input('office_id');
        $data->dev_type_models_id=$request->input('dev_type');
        $data->device_model=$request->input('device_model');
        $data->mac_address=$request->input('mac_address');
        $data->save();
        flash('Succesfully recorded')->success();
        return back()->withInput();

    }


    Public function update(Request $request, $id)
    {
        $data1 = DevRegModel::findOrFail($id);
        $data1->dev_type_models_id=$request->input('dev_type');
        $data1->device_model=$request->input('device_model');
        $data1->mac_address=$request->input('mac_address');
        $data1->save();

        flash('Succesfully Updated')->success();
        return back()->withInput();
    }

}
