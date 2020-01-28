<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EndUsersModel;
use App\OfficeModel;
use input;

class EndUsers extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    	$fullname = $request->input('fname');  
        $fnameucword = ucwords($fullname);

        $position = $request->input('position');
        $positionucword = ucwords($position);

    	$data = new EndUsersModel;    	
    	$data->fullname=$fnameucword;
    	$data->position=$positionucword;
    	$data->office_models_id=$request->input('office_id');
    	$data->save();
    	flash('Succesfully recorded')->success();
    	return back()->withInput();

    }


    Public function update(Request $request, $id)
    {
        $fullname = $request->input('fname');  
        $fnameucword = ucwords($fullname);

        $position = $request->input('position');
        $positionucword = ucwords($position);

        $data = EndUsersModel::findOrFail($id);   
        $data->fullname= $fnameucword;
        $data->position= $positionucword;
        $data->office_models_id=$request->input('office_id');
        $data->save();

        flash('Succesfully Updated')->success();
        return back()->withInput();
    }

}
