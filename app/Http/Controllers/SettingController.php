<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SettingController extends Controller
{
	    public function __construct()
    {
        $this->middleware('auth');
    }
        public function index(){
        $data = DB::table('settings')->where('id', '1')->first();
        return view('backend.setting.index',['data'=>$data]);
    }   
}
