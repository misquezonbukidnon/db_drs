<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EndUsersModel;
use App\OfficeModel;
use input;

class EndUsers extends Controller
{
    Public function create(){
    	$data = OfficeModel::all();
    	return view('userapplication', compact('data'));

    }

    Public function edit($id){
        $endusers = EndUsersModel::findOrFail($id);
        $offices = OfficeModel::all();
        return view('edit_user_application', compact('endusers', 'offices'));

    }
    
    Public function store(Request $request){
    	
    	$data = new EndUsersModel;    	
    	$data->fullname=$request->input('fname');
    	$data->position=$request->input('position');
    	$data->office_models_id=$request->input('office_id');
    	$data->save();
    	flash('Succesfully recorded')->success();
    	return back()->withInput();

    }


    Public function update(Request $request, $id)
    {
        $data = EndUsersModel::findOrFail($id);     
        $data->fullname=$request->input('fname');
        $data->position=$request->input('position');
        $data->office_models_id=$request->input('office_id');
        $data->save();

        flash('Succesfully Updated')->success();
        return back()->withInput();
    }

}
