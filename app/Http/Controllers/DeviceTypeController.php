<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DevTypeModel;
use input;

class DeviceTypeController extends Controller
{
    Public function create(){
        $devtypedata = DevTypeModel::all();
    	return view('device_types_reg', compact('devtypedata'));

    }

    Public function store(Request $request){
    	$data = new DevTypeModel;    	
    	$data->device_type=$request->input('device_type');
    	$data->save();
    	flash('Succesfully recorded')->success();
    	return back()->withInput();
    }

    Public function edit($id){
        $devtypedata = DevTypeModel::findOrFail($id);
        return view('edit_device_type', compact('devtypedata'));
    }

    Public function destroy(Request $request, $id){
        $data = DevTypeModel::findOrFail($id);
        $data->delete();
        flash('Succesfully Deleted')->success();
        return back()->withInput();
    }

    Public function update(Request $request, $id){
        $data = DevTypeModel::findOrFail($id);
        $data->device_type=$request->input('device_type');
        $data->save();
        flash('Succesfully Updated')->success();
        return back()->withInput();
    }

}
