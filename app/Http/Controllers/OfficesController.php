<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OfficeModel;
use input;

class OfficesController extends Controller
{
    Public function create(){
        $officedata = OfficeModel::all();
    	return view('offices_reg',compact('officedata'));

    }

    Public function store(Request $request){
    	$data = new OfficeModel;    	
    	$data->office_name=$request->input('office_name');
    	$data->save();
    	flash('Succesfully recorded')->success();
    	return back()->withInput();
    }


    Public function edit($id){
        $officedata = OfficeModel::findOrFail($id);
        return view('edit_office', compact('officedata'));
    }

    Public function destroy(Request $request, $id){
        $data = OfficeModel::findOrFail($id);
        $data->delete();
        flash('Succesfully Deleted')->success();
        return back()->withInput();
    }

    Public function update(Request $request, $id){
        $data = OfficeModel::findOrFail($id);
        $data->office_name=$request->input('office_name');
        $data->save();
        flash('Succesfully Updated')->success();
        return back()->withInput();
    }

}
