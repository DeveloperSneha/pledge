<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main');
    }
    
    public function create()
    {
        return view('cm');
    }

    public function getDistricts($id){
        $district = \App\District::where('idState','=',$id)->pluck("districtName", "idDistrict")->toArray();
        return response(json_encode($district));
    }
}
