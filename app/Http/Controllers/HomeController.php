<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OfficeModel;
use App\EndUsersModel;
use App\DevRegModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $datas1 = OfficeModel::all();
        $endusersdata = EndUsersModel::with('officemodels')->get();
        $devregdata = DevRegModel::with('endusermodels', 'officemodels', 'devtypemodels')->get();
        return view('home', compact('endusersdata', 'devregdata'));
    }
}
